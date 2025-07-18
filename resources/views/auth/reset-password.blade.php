@extends('layouts.auth')
@section('title', 'Reset Password')

@section('content')
    <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
            <div class="mt-12 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">
                    Reset Password
                </h1>
                <div class="w-full flex-1 mt-8">
                    <form action="{{route('password.update')}}" method="post">
                        @csrf
                        <input type="hidden" name="token" value="{{$request->route('token')}}" />
                        <input type="hidden" name="email" value="{{$request->email}}" />
                        <div class="mx-auto max-w-xs">
                            <input
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                type="password" name="password" placeholder="New Password" required />
                            <input
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                type="password" placeholder="Confirm Password" name="password_confirmation" required />
                            <button
                                type="submit"
                                class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                <span class="ml-3">
                                    Reset Password
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex-1 lg:flex">
            <div class="relative w-full bg-cover bg-left bg-no-repeat"
                style="background-image: url('https://images.alphacoders.com/139/thumb-1920-1395227.jpg');">
                <div class="absolute top-0 right-0 bottom-0 left-0 inset-0 bg-black opacity-45"></div>
            </div>
        </div>
    </div>
@endsection