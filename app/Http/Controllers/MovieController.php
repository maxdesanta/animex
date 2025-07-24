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
        // dd(Auth::user()->memberships);
        // dd(Auth::user()->getCurrentPlan());
        $streamingUrl = $movie->getStreamingUrl($userplan->resolution);

        // Return the view with the movie data and streaming URL
        return view('movies.show', [
            "movie" => $movie,
            "streamingUrl" => $streamingUrl
        ]);
    }

    public function search(Request $request) {
        $search = $request->input('search');
        $movies = Movies::where('title', 'like', '%' . $search . '%')->get();

        return view('movies.search', [
            'movies' => $movies,
            'keyword' => $search
        ]);
    }
}
