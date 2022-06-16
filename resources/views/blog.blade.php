@extends('partials.main')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <div class="pt-[50px] sm:pt-[80px] md:pt-[100px] p-0 sm:p-3 md:p-10">
        <div class="flex justify-center">
            <div
                class="mr-7 basis-full lg:basis-2/3 xl:basis-3/4 dark:bg-gray-800 dark:text-white sm:rounded-lg sm:shadow-lg sm:border sm:border-gray-200 dark:border-0 mt-[50px] p-7">
                <div class="flex border-b border-gray-400 pb-5 mb-10">
                    @if ($post->author->image)
                            <img class="rounded-full" src="/uploads/users/{{ $post->author->image }}" width="50" height="50">
                    @else
                        <img class="rounded-full" src="{{ asset('img/user-profile.png') }}" width="50" height="50">
                    @endif
                    <div class="ml-5 items-center">
                        <h3 class="text-lg font-medium">{{ $post->author->username }}
                            <p class="text-sm"><i class="fa-solid fa-clock mr-1 text-indigo-500"></i>
                                {{ $post->created_at->format('M d, Y') }}</p>
                    </div>
                </div>

                <div>
                    <h1 class="uppercase font-semibold text-2xl sm:text-3xl md:text-4xl my-8">{{ $post->title }}</h1>
                    <img class="w-full h-auto rounded-md" src="/uploads/posts/{{ $post->image }}" alt="">
                    <div>
                        <div class="mt-5 mb-12">
                            <a href="#comments" class="mr-5"><i
                                    class="fa-solid fa-comment-dots text-indigo-500"></i> {{ $user_comments->count() }}
                                Komentar</a>
                            <a href="/blogs?category={{ $post->category->slug }}" class="text-indigo-600 dark:text-indigo-400">#{{ $post->category->slug }}</a>
                        </div>
                        <div class="body">
                            {!! $post->body !!}
                            <div class="flex items-center mt-20 border-t border-gray-400 dark:border-gray-700 py-5">
                                <h3 class="mr-5 font-medium"><i class="fa-solid fa-share text-xl text-indigo-500 dark:text-indigo-600 mr-2"></i> Bagikan Artikel Ini</h3>
                                @foreach ($social_share as $social => $link)
                                    <a class="mr-3 text-lg text-white bg-indigo-700 dark:bg-indigo-600 px-3 py-1.5 rounded hover:opacity-80 duration-200" href="{{$link}}" target="_blank" rel="nofollow noopener noreferrer"><i class="fa-brands fa-{{ $social }}"></i></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden lg:block lg:basis-1/3 xl:basis-1/4 dark:text-white mt-[50px]">

                <div class="mb-20 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 p-7 dark:border-0 shadow-xl">
                    <h1 class="border-b border-gray-300 pb-1 mb-3    font-semibold text-xl"><i
                            class="fa-solid fa-newspaper mr-2"></i>Artikel Terkait</h1>
                    <div>

                        @foreach ($related_posts as $item)
                            <a href="/blog/{{ $item->category_slug }}/{{ $item->slug }}"
                                class="flex flex-col items-center bg-white rounded-lg mb-3 border shadow-md md:flex-row max-w-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-full md:rounded-none md:rounded-l-lg"
                                    src="/uploads/posts/{{ $item->image }}" alt="">
                                <div class="flex flex-col justify-start py-1 px-2 leading-normal">
                                    <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900 dark:text-white">
                                        {{ Str::limit($item->title, 35) }}<h5>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 p-7 dark:border-0 shadow-xl">
                    <h1 class="border-b border-gray-300 pb-1 mb-3    font-semibold text-xl"><i
                            class="fa-solid fa-newspaper mr-2"></i>Pilihan Editor</h1>
                    <div>

                        @foreach ($recommended as $item)
                            <a href="/blog/{{ $item->category->slug }}/{{ $item->slug }}"
                                class="flex flex-col items-center bg-white rounded-lg mb-3 border shadow-md md:flex-row max-w-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full h-full rounded-t-lg md:rounded-none md:rounded-l-lg"
                                    src="/uploads/posts/{{ $item->image }}" alt="">
                                <div class="flex flex-col justify-start py-1 px-2 leading-normal">
                                    <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900 dark:text-white">
                                        {{ Str::limit($item->title, 35) }}
                                        <h5>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>

        <div class="mt-20 p-3 md:p-0">
            <h2 class="mb-5 font-medium dark:text-white"><i class="fa-solid fa-comment mr-2 text-xl text-indigo-500"></i>
                Tinggalkan Komentar
            </h2>
            <form action="/comments/create" method="POST">            
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="mb-4 w-full bg-gray-50 rounded-lg border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                    <div>                        
                        <input id="user_comment" type="hidden" name="user_comment">
                        <trix-editor input="user_comment" class="dark:text-white" placeholder="Ketik komentarmu disini..."></trix-editor>
                    </div>
                    <div class="py-2 px-3 border rounded-b-lg dark:border-gray-600">
                        <button type="submit"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Posting Komentar
                        </button>
                    </div>
                    @error('user_comment')
                        <p class="text-sm mt-3 font-medium text-red-600 dark:text-red-400">Komentar tidak boleh kosong!</p>
                    @enderror
                </div>
            </form>

            <div class="border-t border-gray-300 mt-10 pt-10" id="comments">
                <p class="dark:text-white"><i class="fa-solid fa-comments mr-2 text-indigo-500"></i> Terdapat {{ $user_comments->count() }}
                    komentar pada postingan ini</p>

                @foreach($user_comments as $item)
                    <div class="w-full dark:text-white dark:border-gray-500 flex mt-8 border-b pb-5 mb-5 border-gray-300">
                        <div class="ml-5 flex flex-col justify-center">
                            <div class="flex text-sm md:text-md mb-3">
                                <div class="flex">
                                    <h3 class="font-semibold">{{ $item->user->username }}</h3>
                                    <span class="mx-2"> - </span>
                                    <p class="font-normal italic">{{ $item->created_at->format('M d, Y') }}</p>
                                </div>
                                <div class="ml-4">
                                    @if($item->user_id == auth()->id())
                                        <button class="edit-comment" value="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#edit-comment-modal">
                                            <i class="duration-200 hover:scale-80 fas fa-pencil text-blue-600 dark:text-blue-400"></i>
                                        </button>
                                        <form class="inline" action="/comments/delete/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <i class="ml-3 fas fa-trash text-red-600 dark:text-red-400"></i>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                            <p class="text-sm">
                                {!! $item->user_comment !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('partials.components.modal.edit-comment-modal')
@endsection
