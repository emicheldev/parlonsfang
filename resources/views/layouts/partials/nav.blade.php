<header class="flex flex-col sm:flex-row items-center justify-between py-6 relative">
    <h3 class="text-2xl font-bold uppercase text-blue-900">Logo</h3>
    <nav class="hidden md:flex text-lg">
        <a href="#" class="text-gray-800 hover:text-purple-300 py-3 px-6">Accueil</a>



        <div class="dropdown inline-block relative">
            <button class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                <span class="mr-1">langue</span>
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
            </button>
            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                    <li class="">
                        <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>


    </nav>
    <button class="flex md:hidden flex-col absolute top-0 right-0 p-4 mt-5">
        <span class="w-5 h-px mb-1 bg-orange-500"></span>
        <span class="w-5 h-px mb-1 bg-orange-500"></span>
        <span class="w-5 h-px mb-1 bg-orange-500"></span>
    </button>
</header>
