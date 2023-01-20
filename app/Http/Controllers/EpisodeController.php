<?php

namespace App\Http\Controllers;

use App\Models\Serie\Episode;
use App\Models\Serie\Serie;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function show(Serie $serie, $episodeNumber)
    {
        $episode = Episode::where('serie_id', $serie->id)->where('number', $episodeNumber)->first();
        abort_if(!$episode, 404);
        return view('serie.episode.show', [
            'episode' => $episode,
            'serie' => $serie,
        ]);
    }
}
