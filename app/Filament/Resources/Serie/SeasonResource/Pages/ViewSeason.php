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
            Actions\Action::make('Load New Episodes')->action('loadNewEpisodes'),
        ];
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
                'poster_path' => str_replace("/", "", $episode['still_path']),
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
