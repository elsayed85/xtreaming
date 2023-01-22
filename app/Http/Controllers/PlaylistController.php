<?php

namespace App\Http\Controllers;

use App\Models\Movie\WatchPlaylist;
use App\Models\Serie\EpisodeWatchPlaylist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlaylistController extends Controller
{
    public function servePlaylistLocalFile($path)
    {
        $path = str_replace('-', '/', $path);
        $last_name = explode('/', $path);
        $last_name = end($last_name);
        return Storage::disk('local')->response(
            $path,
            $last_name,
            [
                'Content-Type' => 'application/x-mpegURL',
                'isHls' => true
            ]
        );
    }

    public function reportEpisodePlaylist()
    {
        $playlist = EpisodeWatchPlaylist::find(request('playlist_id'));
        $playlist->is_active = false;
        $playlist->save();
        return response()->json([
            'message' => 'We will check why this playlist is not working and fix it soon.',
            'status' => 'warning'
        ]);
    }

    public function reportMoviePlaylist()
    {
        $playlist = WatchPlaylist::find(request('playlist_id'));
        $playlist->is_active = false;
        $playlist->save();
        return response()->json([
            'message' => 'We will check why this playlist is not working and fix it soon.',
            'status' => 'warning'
        ]);
    }
}
