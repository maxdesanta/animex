<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Animex</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <!-- Styles / Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-white text-gray-900 font-sans">
    <!-- Navbar -->
    <x-navbar />
    <section class="px-6 py-12 max-w-7xl mx-auto">
        @yield('content')
    </section>
    <!-- Sidebar Toggle Script -->
    <script>
        document.getElementById("menu-btn").onclick = () => {
            document.getElementById("side-menu").classList.remove("-translate-x-full");
        };
        document.getElementById("close-btn").onclick = () => {
            document.getElementById("side-menu").classList.add("-translate-x-full");
        };
    </script>  
</body>

</html>