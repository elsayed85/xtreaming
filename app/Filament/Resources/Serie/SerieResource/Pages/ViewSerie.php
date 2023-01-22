<?php

namespace App\Filament\Resources\Serie\SerieResource\Pages;

use App\Filament\Resources\Serie\SerieResource;
use App\Models\Person;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Http;

class ViewSerie extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;
    protected static string $resource = SerieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\EditAction::make(),
            Actions\Action::make("Refresh Info")->action("refreshInfo"),
            Actions\Action::make('Load New Seasons')->action('loadNewSeasons'),
        ];
    }

    public function refreshInfo()
    {
        $serie = $this->record;
        $tmdb_id = $serie->id;
        $data = Http::tmdb("/tv/$tmdb_id", [
            "append_to_response" => "external_ids,credits",
        ]);

        $new_data = [];

        if ($serie->imdb_rating !=  round($data["vote_average"], 2) && !empty($data["vote_average"])) {
            $new_data["imdb_rating"] = $data["vote_average"];
        }

        if ($serie->release_date->format("Y-m-d") !=  $data["first_air_date"] && !empty($data["first_air_date"])) {
            $new_data["release_date"] = $data["first_air_date"];
        }

        // poster_path
        if ($serie->poster_path !=  str_replace("/", "", $data["poster_path"]) && !empty($data["poster_path"])) {
            $new_data["poster_path"] = $data["poster_path"];
        }

        if ($serie->backdrop_path !=  str_replace("/", "", $data["backdrop_path"]) && !empty($data["backdrop_path"])) {
            $new_data["backdrop_path"] = $data["backdrop_path"];
        }

        // imdb_id
        if ($serie->imdb_id !=  $data["external_ids"]["imdb_id"] && !empty($data["external_ids"]["imdb_id"])) {
            $new_data["imdb_id"] = $data["external_ids"]["imdb_id"];
        }

        $message = "";
        if (count($new_data)) {
            $serie->update($new_data);
            $message = implode(", ", array_keys($new_data));
        }

        $cast = $data['credits']['cast'];

        if (count($cast)) {
            $existing_cast = $serie->cast->pluck('id')->toArray();
            $cast = collect($cast)
                ->where("known_for_department", "Acting")
                ->whereNotIn('id', $existing_cast)
                ->map(function ($cast) {
                    return Person::firstOrCreate(['id' => $cast['id']], [
                        'id' => $cast['id'],
                        'name' => $cast['name'],
                        'poster_path' => $cast['profile_path'],
                        'is_male' => $cast['gender'] == "2" ? true : false,
                        'popularity' => $cast['popularity'],
                    ])->id;
                });
            if ($cast->count()) {
                $serie->cast()->syncWithoutDetaching($cast);
                $message .= " Cast Refreshed,";
            }
        }

        if (!empty($message))
            Notification::make("Refreshed")->title($message)->success()->send();
        else
            Notification::make("Refreshed")->title("Nothing to refresh")->warning()->send();
    }

    public function loadNewSeasons()
    {
        $serie_id = $this->record->id;
        $data_en = Http::tmdb("/tv/$serie_id", [
            'language' => 'en',
        ])['seasons'];
        $data_en = collect($data_en);
        $data_ar = Http::tmdb("/tv/$serie_id", [
            'language' => 'ar',
        ])['seasons'];

        $data = collect($data_ar);
        $ids = $data->pluck('id');
        $existed_ids = $this->record->seasons()->whereIn('id', $ids)->get(['id'])->pluck(['id']);
        $data = $data->whereNotIn('id', $existed_ids);
        $seasons = collect($data)
            ->where("season_number", "!=", 0)
            ->map(function ($season) use ($data_en) {
                $en = $data_en->where('season_number', $season['season_number'])->first();
                return [
                    'id' => $season['id'],
                    'name' => [
                        'en' => $en['name'],
                        'ar' => $season['name'],
                    ],
                    'overview' => [
                        'en' => $en['overview'],
                        'ar' => $season['overview'],
                    ],
                    'poster_path' => $season['poster_path'],
                    'number' => $season['season_number'],
                    'air_date' => $season['air_date'],
                ];
            });

        if ($seasons->isNotEmpty()) {
            $this->record->seasons()->createMany($seasons);
            Notification::make("Seasons loaded successfully")
                ->title(count($seasons) . " Seasons loaded successfully")
                ->success()
                ->send();
        } else {
            Notification::make("No new seasons found")
                ->title("No new seasons found")
                ->warning()
                ->send();
        }
    }
}
