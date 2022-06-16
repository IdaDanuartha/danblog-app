<nav
    class="nav-container shadow-lg fixed w-full shadow-indigo-500/40 border-gray-200 px-2 sm:px-4 py-4 dark:shadow-gray-800/40  dark:bg-gray-800 z-10">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/" class="flex items-center">
            <img src="https://picsum.photos/100" class="rounded-full mr-3 h-6 sm:h-9" alt="My Logo">
        </a>
        <div class="flex md:order-2">
            <form action="/blogs" class="hidden relative mx-3 md:block">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 -mt-2 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                @if(request('category')) <input type="hidden" name="category" value="{{ request('category') }}"> @endif
                <input type="text" id="search-navbar" name="query"
                    class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari artikel disini...">
                <button type="submit" class="hidden"></button>
            </form>

            <button type="button"
                class="mb-0 sm:mb-2 text-md focus:outline-none rounded-lg border focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 hover:opacity-80"
                data-tooltip-target="dark-light-mode-tooltip" data-tooltip-placement="bottom">
                <i class="fa-solid fa-moon text-white py-2.5 px-3" id="darkmode-icon"></i>
            </button>
            <div id="dark-light-mode-tooltip" role="tooltip"
                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Dark Mode
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            @auth
                <a href="/logout"
                    class="mb-0 ml-2 sm:mb-2 text-md focus:outline-none rounded-lg border focus:z-10 focus:ring-4 
                    hover:opacity-80 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                    data-tooltip-target="logout-tooltip" data-tooltip-placement="bottom">
                    <i class="fa-solid fa-right-from-bracket py-2.5 px-3 text-white"></i>
                </a>
                <div id="logout-tooltip" role="tooltip"
                    class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Logout to your account
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            @endauth
            <button data-collapse-toggle="mobile-menu-3" type="button"
                class="inline-flex items-center py-1 px-3 text-sm text-white rounded-lg md:hidden hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 ml-3"
                aria-controls="mobile-menu-3" aria-expanded="false">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-3">
            <div class="relative mt-3 md:hidden">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="search-navbar"
                    class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari artikel disini...">
            </div>
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-2 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-white text-md border-b border-gray-100 hover:bg-indigo-600 md:border-0 md:py-2 md:px-3 md:rounded md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><i
                            class="fa-solid fa-house mr-2"></i>Beranda</a>
                </li>
                <li>
                    <a href="/blogs"
                        class="block py-2 px-3 text-white text-md border-b border-gray-100 hover:bg-indigo-600 md:border-0 md:py-2 md:px-3 md:rounded md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><i
                            class="fa-solid fa-blog mr-2"></i>Blog</a>
                </li>
                <li>
                    <a href="/about"
                        class="block py-2 px-3 text-white text-md border-b border-gray-100 hover:bg-indigo-600 md:border-0 md:py-2 md:px-3 md:rounded md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><i
                            class="fa-solid fa-user mr-2"></i>Tentang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
