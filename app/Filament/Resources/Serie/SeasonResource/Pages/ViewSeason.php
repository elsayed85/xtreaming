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
        $data = Http::tmdb("/tv/$serie_id/season/$number")['episodes'];
        $data = collect($data);
        $ids = $data->pluck('id');
        $existed_ids = $this->record->episodes()->whereIn('id', $ids)->get(['id'])->pluck(['id']);
        $data = $data->whereNotIn('id', $existed_ids);
        $episodes = $data->map(function ($item) {
            return [
                "id" => $item['id'],
                "name" => $item['name'],
                "overview" => $item['overview'],
                "poster_path" => $item['still_path'],
                "air_date" => $item['air_date'],
                "number" => $item['episode_number'],
                "season_number" => $item['season_number'],
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
