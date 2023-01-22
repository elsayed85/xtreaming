<?php

namespace App\Filament\Pages;

use App\Collectors\Helpers\OpensubtitlesService;
use App\Collectors\Helpers\Subscene;
use App\Collectors\Helpers\Subtitles;
use App\Models\Movie\Movie;
use App\Models\Serie\Serie;
use Filament\Pages\Page;
use Illuminate\Contracts\View\View;

class Opensubtitles extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.opensubtitles';

    public function getViewData(): array
    {
        $type = request()->input('type');
        $lang = request()->input('lang', 'ara');

        $movie_id = request()->input('movie_id');
        $serie_id = request()->input('serie_id');
        $season_number = request()->input('sn');
        $episode_number = request()->input('ep');

        $title = '';
        $subtitles = [];

        if ($type == 'movie') {
            $movie = Movie::find($movie_id);
            $title = $movie->getTranslations('title', ['en'])['en'];
            $subtitles = OpensubtitlesService::setData(
                $movie_id,
                $title,
                $type,
                $lang,
                str_replace('tt', '', $movie->imdb_id)
            )->getResult();
        } elseif ($type == 'episode') {
            $serie = Serie::find($serie_id);
            $title = $serie->getTranslations('title', ['en'])['en'];
            $subtitles = OpensubtitlesService::setData(
                $serie_id,
                $title,
                $type,
                $lang,
                str_replace('tt', '', $serie->imdb_id),
                $season_number,
                $episode_number
            )->getResult();
        }

        dd($subtitles);
        return [
            'title' => $title,
            'type' => $type,
            'lang' => $lang,
        ];
    }
}
