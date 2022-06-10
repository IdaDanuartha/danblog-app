@extends('partials.main')

@section('title')
    All Blogs
@endsection

@section('main')
    <div class="">
        <img src="{{ asset('img/black-bg.jpg') }}" alt="" width="100%">
        <div class=" absolute top-[150px] left-[40%] text-white">
            <h1 class="font-semibold text-5xl">All Blogs</h1>
        </div>
    </div>

    <div class="container mx-auto mt-[100px]">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <button type="button"
                class="text-white bg-gradient-to-r from-indigo-500 via-indigo-600 to-indigo-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:focus:ring-indigo-800 shadow-lg shadow-indigo-500/50 dark:shadow-lg dark:shadow-indigo-800/80 font-sembold rounded-lg text-lg px-5 py-5 text-center mr-2 mb-2">Teknologi</button>

            <button type="button"
                class="text-white bg-gradient-to-r from-indigo-500 via-indigo-600 to-indigo-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:focus:ring-indigo-800 shadow-lg shadow-indigo-500/50 dark:shadow-lg dark:shadow-indigo-800/80 font-sembold rounded-lg text-lg px-5 py-5 text-center mr-2 mb-2">Kehidupan</button>

            <button type="button"
                class="text-white bg-gradient-to-r from-indigo-500 via-indigo-600 to-indigo-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:focus:ring-indigo-800 shadow-lg shadow-indigo-500/50 dark:shadow-lg dark:shadow-indigo-800/80 font-sembold rounded-lg text-lg px-5 py-5 text-center mr-2 mb-2">Tips</button>

            <button type="button"
                class="text-white bg-gradient-to-r from-indigo-500 via-indigo-600 to-indigo-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:focus:ring-indigo-800 shadow-lg shadow-indigo-500/50 dark:shadow-lg dark:shadow-indigo-800/80 font-sembold rounded-lg text-lg px-5 py-5 text-center mr-2 mb-2">Matematika</button>

        </div>

        <div class="mt-20 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @for ($i = 0; $i < 12; $i++)
                <div
                    class="item max-w-xs bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="/blog/teknologi/apa-itu-api">
                        <img class="rounded-t-lg w-full" src="https://picsum.photos/200" alt="">
                    </a>
                    <div class="p-5">
                        <a href="/blog/teknologi/apa-itu-api">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in...</p>
                        <a href="/blog/teknologi/apa-itu-api"
                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
