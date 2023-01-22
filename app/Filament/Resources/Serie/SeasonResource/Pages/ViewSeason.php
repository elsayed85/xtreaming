<?php

namespace App\Filament\Resources\Serie\SeasonResource\Pages;

use App\Filament\Resources\Serie\SeasonResource;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Http;

class ViewSeason extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;
    protected static string $resource = SeasonResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\EditAction::make(),
            Actions\Action::make("Refresh Info")->action("refreshInfo"),
            Actions\Action::make('Load New Episodes')->action('loadNewEpisodes'),
        ];
    }


    public function refreshInfo()
    {
        $season = $this->record;
        $serie_id = $season->serie_id;
        $number = $season->number;
        $data = Http::tmdb("/tv/$serie_id/season/$number", [
            'append_to_response' => 'translations',
        ]);

        $translations = collect($data['translations']['translations']);
        $ar = $translations->where('iso_639_1', 'ar')->first();
        $en = $translations->where('iso_639_1', 'en')->first();

        $name = $season->getTranslations('name', ['en', 'ar']);
        if (!isset($name['en'])) $name['en'] = '';
        if (!isset($name['ar'])) $name['ar'] = '';

        $names = collect();
        if ($name['en'] != $en['data']['name'] && !empty($en['data']['name'])) {
            $names->put('en', $en['data']['name']);
        }

        if ($name['ar'] != $ar['data']['name'] && !empty($ar['data']['name'])) {
            $names->put('ar', $ar['data']['name']);
        }

        $overview = $season->getTranslations('overview', ['en', 'ar']);
        if (!isset($overview['en'])) $overview['en'] = '';
        if (!isset($overview['ar'])) $overview['ar'] = '';

        $overviews = collect();
        if ($overview['en'] != $en['data']['overview'] && !empty($en['data']['overview'])) {
            $overviews->put('en', $en['data']['overview']);
        }

        if ($overview['ar'] != $ar['data']['overview'] && !empty($ar['data']['overview'])) {
            $overviews->put('ar', $ar['data']['overview']);
        }

        if ($names->isEmpty() && $overviews->isEmpty()) {
            Notification::make("No new info found")
                ->title("No new info found")
                ->warning()
                ->send();
            return;
        }

        if (!$names->isEmpty())
            $season->setTranslations('name', $names->toArray());

        if (!$overviews->isEmpty())
            $season->setTranslations('overview', $overviews->toArray());
        $season->save();
        Notification::make("Season info refreshed successfully")
            ->title("Season info refreshed successfully")
            ->success()
            ->send();
    }


    public function loadNewEpisodes()
    {
        $serie_id = $this->record->serie_id;
        $number = $this->record->number;
        $data_en = Http::tmdb("/tv/$serie_id/season/$number", [
            'language' => 'en',
        ])['episodes'];
        $data_en = collect($data_en);
        $data_ar = Http::tmdb("/tv/$serie_id/season/$number", [
            'language' => 'ar',
        ])['episodes'];
        $data = collect($data_ar);
        $ids = $data->pluck('id');
        $existed_ids = $this->record->episodes()->whereIn('id', $ids)->get(['id'])->pluck(['id']);
        $episodes = $data->whereNotIn('id', $existed_ids)->map(function ($episode) use ($data_en) {
            $en = $data_en->where('episode_number', $episode['episode_number'])->first();
            return [
                'id' => $episode['id'],
                'name' => [
                    'en' => $en['name'],
                    'ar' => $episode['name'],
                ],
                'overview' => [
                    'en' => $en['overview'],
                    'ar' => $episode['overview'],
                ],
                'poster_path' => $episode['still_path'],
                'air_date' => $episode['air_date'],
                'number' => $episode['episode_number'],
                'season_number' => $episode['season_number'],
                "season_id" => $this->record->id,
                "serie_id" => $this->record->serie_id
            ];
        });
        if ($episodes->isNotEmpty()) {
            $this->record->episodes()->createMany($episodes);
            Notification::make("Episodes loaded successfully")
                ->title(count($episodes) . " Episodes loaded successfully")
                ->success()
                ->send();
        } else {
            Notification::make("No new episodes found")
                ->title("No new episodes found")
                ->warning()
                ->send();
        }
    }
}
