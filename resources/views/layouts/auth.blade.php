<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Animex</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <!-- Styles / Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        @if ($errors->any())
            <div class="fixed top-4 left-1/2 transform -translate-x-1/2 w-full max-w-lg bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg z-50">
                <strong class="font-bold">Terjadi kesalahan!</strong>
                <ul class="mt-2 list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
            <div class="fixed top-4 left-1/2 transform -translate-x-1/2 w-full max-w-lg bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded shadow-lg z-50">
                <strong class="font-bold">Berhasil!</strong>
                <p class="text-sm mt-1">{{ session('status') }}</p>
            </div>
        @endif

        @yield('content')
    </div>
</body>

</html>