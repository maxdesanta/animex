<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            'auth', 
            'check.device.limit'
        ];
    }

    public function index() {

        $latestMovie = Movies::latest()->limit(12)->get();

        return view('movies.index', [
            "latestMovies" => $latestMovie
        ]);
    }

    public function show(Movies $movie) {
        $userplan = Auth::user()->getCurrentPlan();
        $streamingUrl = $movie->getStreamingUrl($userplan->streaming_resolution);
        return view('movies.show', [
            "movie" => $movie,
            "streamingUrl" => $streamingUrl
        ]);
    }
}
