<?php

namespace App\Http\Controllers;

use App\Collectors\Helpers\encoders\Encoder;
use App\Models\Movie\Movie;
use App\Models\Movie\WatchPlaylist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::Published()->latest()->paginate(20);
        return view('movie.index', [
            'movies' => $movies
        ]);
    }

    public function show(Movie $movie)
    {
        $movie->load([
            'genres',
            'country',
            'cast' => function ($query) {
                return $query->orderBy("popularity", "desc")
                    ->where("is_male", true)
                    ->limit(20);
            },
            'watchPlaylists' => function ($query) {
                return $query->whereIsActive(true);
            },
        ]);

        $similarMovies = Movie::Published()
            ->where('id', '!=', $movie->id)
            ->whereHas('genres', function ($query) use ($movie) {
                return $query->whereIn('id', $movie->genres->pluck('id'));
            })
            ->latest()
            ->limit(6)
            ->get();

        $rgb = getRGBof(tmdb_backdrop($movie['backdrop_path']));
        $rgb = implode(',', $rgb);
        return view('movie.show', [
            'movie' => $movie,
            'similarMovies' => $similarMovies,
            'rgb' => $rgb
        ]);
    }

    public function showTrailerModal(Movie $movie)
    {
        return view('movie.trailer-modal', [
            'movie' => $movie
        ]);
    }

    public function showReportModal(Movie $movie)
    {
        return view('movie.report-modal', [
            'movie' => $movie
        ]);
    }

    public function report(Movie $movie, Request $request)
    {
        return response()->json([
            'text' => 'Reported',
            'status' => 'success'
        ]);
    }

    public function embed()
    {
        $movie_id = request('movie_id');
        $movie = Movie::find($movie_id);
        abort_if(!$movie, 404);
        $movie->load([
            'watchPlaylists' => function ($query) {
                return $query->whereIsActive(true);
            },
            'tracks',
            'subtitles'
        ]);
        $playlist = $movie->watchPlaylists->find(request('playlist_id'));
        abort_if(!$playlist, 404);
        $playlist->load([
            'links',
            'tracks',
        ]);

        $tracks = $movie->tracks;
        $tracks = $tracks->filter(function ($track) use ($playlist) {
            return !$playlist->tracks->contains($track);
        });

        $subtitles = $movie->subtitles;

        $movie->load('genres');

        $poster = tmdb_backdrop($movie['backdrop_path']);

        $view =  view('movie.player.embded', [
            'movie' => $movie,
            'poster' => $poster,
            'playlist' => $playlist,
            'genres' => $movie->genres->pluck('name')->implode(", "),
            'other_tracks' => $tracks,
            'subtitles' => $subtitles
        ]);

        $en = new Encoder();
        return $en->html_encoder($view->render());
    }
}
