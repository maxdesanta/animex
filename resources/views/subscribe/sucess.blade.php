@extends('layouts.subscribe')
@section('title', 'checkout success')

@section('content')
    <div class="w-full max-w-2xl p-4 bg-white shadow-2xl dark:bg-gray-900 sm:p-10 sm:rounded-3xl">
        <div class="text-center">
            <div class="flex items-center justify-center w-20 h-20 mx-auto mb-6 bg-green-100 rounded-full dark:bg-green-700">
                <svg class="h-12 w-12 text-green-600 dark:text-green-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                </svg>
            </div>
            <h1 class="text-4xl font-extrabold text-green-700 dark:text-green-400">Payment Successful!</h1>
            <p class="mt-4 text-lg text-gray-800 dark:text-gray-300">
                Thank you for your purchase.
            </p>
            <p class="mt-4 text-sm text-gray-700 dark:text-gray-400">
                If you have any questions or need further assistance, feel free to contact us at:
                <a href="mailto:admin@eliteai.tools" class="font-medium text-indigo-600 dark:text-indigo-400 underline">
                    admin@animex.cpm
                </a>
            </p>
        </div>
        <div class="mt-8 text-center">
            <a href="{{ route('home') }}"
                class="inline-block px-6 py-2 text-lg font-medium text-white transition-transform rounded-full shadow-lg bg-gradient-to-r from-indigo-600 to-blue-600 hover:scale-105 hover:from-indigo-700 hover:to-blue-700 dark:from-indigo-500 dark:to-blue-500 dark:hover:from-indigo-600 dark:hover:to-blue-600">
                Back to Home
            </a>
        </div>
    </div>
@endsection