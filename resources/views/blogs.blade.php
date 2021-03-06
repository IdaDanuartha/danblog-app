@extends('partials.main')

@section('title')
    All Blogs
@endsection

@section('content')
    <div class="hidden lg:block">
        <img src="{{ asset('img/black-bg.jpg') }}" alt="" width="100%">
        <div class=" absolute top-[170px] left-[40%] text-white">
            <h1 class="font-semibold text-5xl">All Blogs</h1>
        </div>
    </div>

    <div class="container mx-auto pt-[120px] lg:-mt-10">

        @if (request('query') || request('category'))
            <div class="pl-5">
                <h1 class="text-gray-800 dark:text-gray-200 text-lg md:text-xl lg:text-2xl">
                    <i
                        class="text-gray-800 dark:text-gray-200 fa-solid fa-fire-flame-curved mr-3"></i> Terdapat <span
                        class="font-semibold text-indigo-500 dark:text-indigo-400">{{ $blogs->count() }}</span> Artikel
                        @if(request('query')) Untuk Pencarian <span
                        class="font-semibold text-indigo-500 dark:text-indigo-400">"{{ request('query') }}"</span> @endif                        
                        @if(request('category')) Dalam Category <span
                        class="font-semibold text-indigo-500 dark:text-indigo-400">"{{ request('category') }}"</span>   @endif
                </h1>
            </div>
        @endif
        <div class="mt-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($blogs as $item)
                <div
                    class="m-5 item max-w-lg sm:max-w-xs bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="/blog/{{ $item->category->slug }}/{{ $item->slug }}">
                        <img class="rounded-t-lg w-full h-[200px]" src="/uploads/posts/{{ $item->image }}" alt="">
                    </a>
                    <div class="p-5">
                        <a href="/blog/{{ $item->category->slug }}/{{ $item->slug }}">
                            <h5
                                class="mb-4 text-md md:text-lg lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                {{ Str::limit($item->title, 35) }}</h5>
                        </a>
                        <a href="/blog/{{ $item->category->slug }}/{{ $item->slug }}"
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
            @endforeach
        </div>
    </div>
@endsection
