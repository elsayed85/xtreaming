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

        $prev = Episode::where('serie_id', $serie->id)->where('number', $episodeNumber - 1)->first();

        $next = Episode::where('serie_id', $serie->id)->where('number', $episodeNumber + 1)->first();

        $episode->load([
            'serie' => function ($query) {
                return $query->with([
                    'genres',
                    'country',
                    'cast' => function ($query) {
                        return $query->orderBy("popularity", "desc")
                            ->where("is_male", true)
                            ->limit(20);
                    },
                    'seasons' => function ($query) {
                        return $query->orderBy("number", "asc");
                    },
                    'seasons.episodes' => function ($query) {
                        return $query->orderBy("episodes.number", "asc");
                    },
                ]);
            },
            'watchPlaylists'
        ]);

        $rgb = getRGBof(tmdb_backdrop($episode->serie['backdrop_path']));
        $rgb = implode(',', $rgb);

        return view('serie.episode.show', [
            'episode' => $episode,
            'serie' => $serie,
            'prev' => $prev,
            'next' => $next,
            'rgb' => $rgb
        ]);
    }

    public function showReportModal(Serie $serie, $episodeNumber)
    {
        $episode = Episode::where('serie_id', $serie->id)
            ->where('number', $episodeNumber)
            ->first();
        abort_if(!$episode, 404);
        return view('serie.episode.report-modal', [
            'episode' => $episode
        ]);
    }

    public function report(Serie $serie, $episodeNumber, Request $request)
    {
        $episode = Episode::where('serie_id', $serie->id)
            ->where('number', $episodeNumber)
            ->first();
        abort_if(!$episode, 404);
        return response()->json([
            'text' => 'Reported',
            'status' => 'success'
        ]);
    }

    public function embed()
    {
        $episode = Episode::where('serie_id', request('serie_id'))
            ->where('number', request('episode_number'))
            ->first();
        abort_if(!$episode, 404);

        $playlist = $episode->watchPlaylists->find(request('playlist_id'));

        $playlist->load([
            'links',
            'tracks',
        ]);

        $episode->load([
            'serie.genres'
        ]);

        $poster = tmdb_backdrop($episode->serie->backdrop_path);

        return view('serie.episode.player.embded', [
            'episode' => $episode,
            'poster' => $poster,
            'playlist' => $playlist,
            'genres' => $episode->serie->genres->pluck('name')->implode(", ")
        ]);
    }
}
