<div class="relative group">
    <button class="text-sm hover:text-indigo-400 flex items-center gap-1">
        Category
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>
    <div class="absolute left-0 mt-2 w-52 bg-gray-100 border border-gray-700 rounded shadow-lg hidden group-hover:block z-50">
        @foreach($categories as $chunk)
            <ul>
                @foreach($chunk as $category)
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-indigo-500 hover:text-gray-100">{{ $category->title }}</a>
                    </li>
                @endforeach
            </ul>
        @endforeach
        {{-- <a href="#" class="block px-4 py-2 text-sm hover:bg-indigo-500 hover:text-gray-100">Adventure</a> --}}
    </div>
</div>