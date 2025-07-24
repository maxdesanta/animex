<!-- Navbar -->
<header class="bg-gray-100 shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
        <button id="menu-btn" class="md:hidden text-gray-500 text-2xl">&#9776;</button>
        <a href="{{ route('home')}}" target="_blank" rel="noopener noreferrer">
            <h1 class="text-xl font-bold text-indigo-500">
                Animex
            </h1>
        </a>
        </div>
        <nav class="hidden md:flex space-x-6 text-sm">
            <!-- New Navigation Elements -->
            <x-category-nav />
            <!-- Search Input -->
            <form action="{{ route('movies.search') }}" method="GET" role="search" class="relative">
                <input type="search" name="search" value="{{ request('search') }}" placeholder="Search..."
                        class="bg-gray-200 text-gray-800 text-sm rounded px-3 py-1 focus:outline-none focus:ring-2" />
                <button type="submit">
                    <svg class="absolute right-2 top-1.5 w-4 h-4 text-indigo-500" fill="none" stroke="currentColor"
                    stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z"/>
                    </svg>
                </button>
            </form>
    
            <!-- Notification Icon -->
            <button class="relative text-gray-300 hover:text-indigo-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
            </svg>
            </button>
    
            <!-- User Dropdown -->
            <div class="relative group">
            <button class="flex items-center text-gray-300 hover:text-indigo-500 p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5.121 17.804A7.962 7.962 0 0012 20a7.962 7.962 0 006.879-2.196M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </button>
            <div class="absolute right-0 top-full w-40 bg-gray-100 border border-gray-700 rounded shadow-lg hidden group-hover:block z-50">
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-indigo-500">User Settings</a>
                <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none">
                    {{ csrf_field() }}
                </form>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-800 hover:bg-indigo-500">Logout</a>
            </div>
            </div>
        </nav>
    </div>
</header>

<!-- Side Menu -->
<aside id="side-menu" class="fixed top-0 left-0 h-full w-64 bg-[#1c1c1c] z-50 p-6 transform -translate-x-full transition-transform duration-300 md:hidden">
    <button id="close-btn" class="text-white text-2xl mb-6">&times;</button>
    <nav class="space-y-4 text-lg">
        <div class="relative group">
            <button class="text-sm hover:text-indigo-400 flex items-center gap-1">
                Category
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="absolute left-0 mt-2 w-40 bg-gray-100 border border-gray-700 rounded shadow-lg hidden group-hover:block z-50">
                <a href="#" class="block px-4 py-2 text-sm hover:bg-indigo-500 hover:text-gray-100">Action</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-indigo-500 hover:text-gray-100">Adventure</a>
            </div>
        </div>
    </nav>
</aside>


