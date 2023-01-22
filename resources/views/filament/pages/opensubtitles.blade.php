<x-filament::page>
    <div class="relative">
        <div class="filament-global-search-input">
            <label for="globalSearchInput" class="sr-only">

            </label>

            <div class="relative group w-full">
                <span
                    class="absolute inset-y-0 left-0 flex items-center justify-center w-10 h-10 text-gray-500 pointer-events-none group-focus-within:text-primary-500">
                    <svg wire:loading.remove.delay="1" wire:target="search" class="w-5 h-5"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="animate-spin w-5 h-5" wire:loading.delay="wire:loading.delay" wire:target="search">
                        <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                            fill="currentColor"></path>
                        <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor">
                        </path>
                    </svg>
                </span>

                <input id="globalSearchInput" placeholder="Search" type="search" value="{{ $lang . ' | ' . $title }}"
                    disabled autocomplete="off"
                    class="block w-full h-10 pl-10 bg-gray-400/10 placeholder-gray-500 border-transparent transition duration-75 rounded-lg focus:bg-white focus:placeholder-gray-400 focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500">
            </div>
        </div>

    </div>
</x-filament::page>
