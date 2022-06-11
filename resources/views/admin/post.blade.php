@extends('admin.layouts.main')

@section('title')
    Preview Post
@endsection

@section('content')
    <div class="text-white relative p-2 md:p-5 lg:p-10">
        <div class="">
            <div class="flex border-b border-gray-400 pb-5 mb-10">
                <img class="rounded-full" width="50" src="https://picsum.photos/100" alt="">
                <div class="ml-5 items-center">
                    <h3 class="text-lg font-medium">Danuartha</h3>
                    <p class="text-sm"><i class="fa-solid fa-calendar mr-1 text-indigo-500"></i> 10 June 2022</p>
                </div>
            </div>
            <img class="rounded" src="https://picsum.photos/1200/600" alt="">
            <div class="flex flex-col sm:flex-row justify-between mt-5">
                <div class="flex mb-7 sm:mb-0">
                    <p class="mr-5 font-semibold text-lg"><i class="fa-solid fa-comments mr-2"></i> 3 Komentar</p>
                    <p class="font-semibold text-lg">#Technology</p>
                </div>
                <div>
                    <a href=""
                        class="focus:outline-none text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-6 py-2 mr-4 dark:bg-orange-500 dark:hover:bg-orange-600 dark:focus:ring-orange-800"><i
                            class="fa-solid fa-pen-to-square mr-2"></i> Edit</a>
                    <a href=""
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                            class="fa-solid fa-trash mr-2"></i> Delete</a>
                </div>
            </div>
        </div>
        <div class="mt-16">
            <h1 class="text-3xl uppercase font-semibold mt-5 mb-10">Apa Itu Application Programming Interface</h1>
            @for ($i = 0; $i < 5; $i++)
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, minima? Voluptate aliquid obcaecati
                    quam maiores consequuntur modi sed minus error ut quo officia sapiente quos debitis veniam, corporis
                    laboriosam cupiditate nihil deserunt! Explicabo quae molestiae sint magnam ullam odio voluptatem vero
                    temporibus nemo quos obcaecati cumque sunt maiores, unde incidunt.
                </p>
                <br>
            @endfor
        </div>
    </div>
@endsection
