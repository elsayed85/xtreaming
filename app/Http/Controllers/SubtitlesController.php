<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubtitlesController extends Controller
{
    public function serveSubtitleLocalFile($path)
    {
        $path = str_replace('_', '/', $path);
        $last_name = explode('/', $path);
        $last_name = end($last_name);
        return Storage::disk('local')->response(
            $path,
            $last_name,
            [
                'Content-Type' => 'text/vtt',
                'Content-Disposition' => 'inline; filename="' . $last_name . '"',
            ]
        );
    }
}
