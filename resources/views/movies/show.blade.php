@extends('layouts.app')

@section('content')
    <section class="flex flex-col gap-5">
        <h1 class="text-3xl font-bold text-indigo-500">{{ $movie->title }}</h1>
        <h4 class="text-gray-400 -mt-5">{{ $movie->getReleaseDateFormatted() }} | {{ $movie->getDurationFormatted() }}</h4>
        <div class="w-full aspect-video bg-black rounded overflow-hidden shadow-lg">
            <iframe src="{{ $streamingUrl }}" title="YouTube video" allowfullscreen></iframe>
        </div>

        <div class="flex flex-col gap-3">
            <p class="text-gray-400 leading-relaxed">
                {{ $movie->description }}
            </p>

            <div class="flex gap-5">
                <div>
                    <img src={{$movie->poster}} alt="cover-detail">
                </div>
                <div class="flex flex-col gap-3 items-baseline h-96">
                    <div>
                        <p>Director: <span class="text-gray-400">{{$movie->director}}</span></p>
                        <p>Writer: <span class="text-gray-400">{{$movie->writers}}</span></p>
                        <p class="mb-3">Stars: <span class="text-gray-400">{{ $movie->stars }}</span></p>
                    </div>
                    {{-- <div class="flex gap-3">
                        @foreach($movie->categorie as $category)
                            <div class="border border-indigo-500 text-indigo-500 py-1 px-3 rounded-lg">
                                <p>{{ $category->title }}</p>
                            </div>
                        @endforeach
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection