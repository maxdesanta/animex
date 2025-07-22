@extends('layouts.app')

@section('content')

  <!-- Anime Grid -->
  <section class="px-6 py-12 max-w-7xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 border-l-4 border-indigo-500 pl-3">Trending Anime</h2>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">

      <!-- Anime Card -->
      <div class="relative group bg-indigo-500 rounded overflow-hidden shadow hover:shadow-lg transition">
        <img src="https://cdn.myanimelist.net/images/anime/10/47347.jpg" alt="Attack on Titan" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-300" />
        <div class="absolute inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
          <button class="bg-indigo-600 text-white px-4 py-2 rounded text-sm hover:bg-indigo-700">Watch Now</button>
        </div>
        <div class="p-2">
          <h3 class="text-white text-sm font-semibold truncate">Attack on Titan</h3>
          <p class="text-xs text-gray-50">24 eps • Action, Drama</p>
        </div>
        <span class="absolute top-2 left-2 bg-indigo-600 text-white text-xs px-2 py-1 rounded">Ep 24</span>
      </div>

      <!-- Repeat with different data -->
      <div class="relative group bg-indigo-500 rounded overflow-hidden shadow hover:shadow-lg transition">
        <img src="https://cdn.myanimelist.net/images/anime/5/87048.jpg" alt="My Hero Academia" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-300" />
        <div class="absolute inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
          <button class="bg-indigo-600 text-white px-4 py-2 rounded text-sm hover:bg-indigo-700">Watch Now</button>
        </div>
        <div class="p-2">
          <h3 class="text-white text-sm font-semibold truncate">My Hero Academia</h3>
          <p class="text-xs text-gray-50">13 eps • Super Power</p>
        </div>
        <span class="absolute top-2 left-2 bg-indigo-600 text-white text-xs px-2 py-1 rounded">Ep 13</span>
      </div>

      <div class="relative group bg-indigo-500 rounded overflow-hidden shadow hover:shadow-lg transition">
        <img src="https://cdn.myanimelist.net/images/anime/4/19644.jpg" alt="Death Note" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-300" />
        <div class="absolute inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
          <button class="bg-indigo-600 text-white px-4 py-2 rounded text-sm hover:bg-indigo-700">Watch Now</button>
        </div>
        <div class="p-2">
          <h3 class="text-white text-sm font-semibold truncate">Death Note</h3>
          <p class="text-xs text-gray-50">37 eps • Thriller, Supernatural</p>
        </div>
        <span class="absolute top-2 left-2 bg-indigo-600 text-white text-xs px-2 py-1 rounded">Ep 37</span>
      </div>

      <div class="relative group bg-indigo-500 rounded overflow-hidden shadow hover:shadow-lg transition">
        <img src="https://cdn.myanimelist.net/images/anime/11/39717.jpg" alt="Fullmetal Alchemist: Brotherhood" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-300" />
        <div class="absolute inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
          <button class="bg-indigo-600 text-white px-4 py-2 rounded text-sm hover:bg-indigo-700">Watch Now</button>
        </div>
        <div class="p-2">
          <h3 class="text-white text-sm font-semibold truncate">FMAB</h3>
          <p class="text-xs text-gray-50">64 eps • Adventure, Fantasy</p>
        </div>
        <span class="absolute top-2 left-2 bg-indigo-600 text-white text-xs px-2 py-1 rounded">Ep 64</span>
      </div>

      <div class="relative group bg-indigo-500 rounded overflow-hidden shadow hover:shadow-lg transition">
        <img src="https://cdn.myanimelist.net/images/anime/9/9453.jpg" alt="Naruto" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-300" />
        <div class="absolute inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
          <button class="bg-indigo-600 text-white px-4 py-2 rounded text-sm hover:bg-indigo-700">Watch Now</button>
        </div>
        <div class="p-2">
          <h3 class="text-white text-sm font-semibold truncate">Naruto</h3>
          <p class="text-xs text-gray-50">220 eps • Ninja, Shounen</p>
        </div>
        <span class="absolute top-2 left-2 bg-indigo-600 text-white text-xs px-2 py-1 rounded">Ep 220</span>
      </div>

      <div class="relative group bg-indigo-500 rounded overflow-hidden shadow hover:shadow-lg transition">
        <img src="https://cdn.myanimelist.net/images/anime/3/40451.jpg" alt="Bleach" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-300" />
        <div class="absolute inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
          <button class="bg-indigo-600 text-white px-4 py-2 rounded text-sm hover:bg-indigo-700">Watch Now</button>
        </div>
        <div class="p-2">
          <h3 class="text-white text-sm font-semibold truncate">Bleach</h3>
          <p class="text-xs text-gray-50">366 eps • Action, Soul Reaper</p>
        </div>
        <span class="absolute top-2 left-2 bg-indigo-600 text-white text-xs px-2 py-1 rounded">Ep 366</span>
      </div>

    </div>
  </section>
@endsection