@extends('layouts.app')

@section('content')

  <!-- Anime Grid -->
  <section>
    <h2 class="text-2xl font-bold mb-6 border-l-4 border-indigo-500 pl-3">Trending Anime</h2>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">

      <!-- Anime Card -->
      @foreach($latestMovies as $movie)
        <div class="relative group bg-indigo-500 rounded overflow-hidden shadow hover:shadow-lg transition">
          <a href="{{ route('movies.show', $movie->slug) }}">
              <img src={{ $movie->poster }} alt={{ $movie->slug }} class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-300" />
              <div class="absolute inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                <button class="bg-indigo-600 text-white px-4 py-2 rounded text-sm hover:bg-indigo-700">Watch Now</button>
              </div>
              <div class="p-2">
                <h3 class="text-white text-sm font-semibold truncate">{{ $movie->title }}</h3>
                <p class="text-xs text-gray-50">24 eps • Action, Drama</p>
              </div>
              <span class="absolute top-2 left-2 bg-indigo-600 text-white text-xs px-2 py-1 rounded">
                {{ $movie->average_rating }}
              </span>
          </a>
        </div>
      @endforeach
    </div>
  </section>
@endsection