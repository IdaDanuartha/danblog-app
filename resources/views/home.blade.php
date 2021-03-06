@extends('partials.main')

@section('title')
    Home Page
@endsection

@section('content')
    <div>
        <header class="bg-header flex items-center justify-center h-screen pb-12 -z-10">
            <div class="mx-4 text-center md:p-8">
                <h1 class="text-5xl text-gray-700 uppercase font-semibold">
                    Welcome To My <span class="text-indigo-600">Blog</span>
                </h1>
                <p class="text-lg">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident neque earum voluptates autem.
                    Possimus quas dicta maxime perspiciatis aut nam, corrupti
                </p>

                <div class="flex justify-center mt-5">
                    @guest
                        <button type="button"
                            class="focus:outline-none text-white bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-md px-6 py-3 mb-2 text-xl dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-700"
                            data-modal-toggle="authentication-modal">LOGIN</button>
                    @endguest

                    @auth
                        <a href="/blogs"
                            class="focus:outline-none text-white bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-md px-6 py-3 mb-2 text-xl dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-700">Jelajahi Blog Saya</a>
                    @endauth

                </div>
            </div>
        </header>

        <div class="container mx-auto mt-[150px]">
            <h1 class="text-3xl mb-10 font-semibold dark:text-white">Latest Articles</h1>
            <div class="owl-carousel owl-theme mx-auto">

                @foreach ($latest_articles as $item)
                    <div
                        class="item max-w-xs bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="/blog/{{ $item->category->slug }}/{{ $item->slug }}">
                            <img class="rounded-t-lg w-full h-[200px]" src="/uploads/posts/{{ $item->image }}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="/blog/{{ $item->category->slug }}/{{ $item->slug }}">
                                <h5 class="mb-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
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

        <div class="container mx-auto mt-[150px]">
            <h1 class="text-3xl mb-10 font-semibold dark:text-white">Popular Articles</h1>
            <div class="owl-carousel owl-theme mx-auto">

                @foreach ($latest_articles as $item)
                    <div
                        class="item max-w-xs bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="/blog/{{ $item->category->slug }}/{{ $item->slug }}">
                            <img class="rounded-t-lg w-full h-[200px]" src="/uploads/posts/{{ $item->image }}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="/blog/{{ $item->category->slug }}/{{ $item->slug }}">
                                <h5 class="mb-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
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
    </div>

    @include('partials.components.modal')
@endsection
