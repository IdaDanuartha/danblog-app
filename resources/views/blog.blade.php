@extends('partials.main')

@section('title')
    Detail Article
@endsection

@section('content')
    <div class="pt-[50px] sm:pt-[80px] md:pt-[100px] p-0 sm:p-3 md:p-10">
        <div class="flex justify-center">
            <div
                class="mr-7 basis-full lg:basis-2/3 xl:basis-3/4 dark:bg-gray-800 dark:text-white sm:rounded-lg sm:shadow-lg sm:border sm:border-gray-200 dark:border-0 mt-[50px] p-7">
                <div class="flex border-b border-gray-400 pb-5 mb-10">
                    <img class="rounded-full" width="50" src="https://picsum.photos/100" alt="">
                    <div class="ml-5 items-center">
                        <h3 class="text-lg font-medium">Danuartha</h3>
                        <p class="text-sm"><i class="fa-solid fa-calendar mr-1 text-indigo-500"></i> 10 June 2022</p>
                    </div>
                </div>

                <div>
                    <h1 class="uppercase font-semibold text-2xl sm:text-3xl md:text-4xl my-8">Bagaimana Nasib Para Programmer
                        di Masa
                        Depan?</h1>
                    <img class="rounded-md" src="https://picsum.photos/1200/600" alt="">
                    <div>
                        <div class="mt-5 mb-12">
                            <a href="#comments" class="mr-5"><i
                                    class="fa-solid fa-comment-dots text-indigo-500"></i> 5
                                Komentar</a>
                            <a href="#" class="text-indigo-600">#technology</a>
                        </div>
                        @for ($i = 0; $i < 5; $i++)
                            <p class="text-sm md:text-md">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, officiis animi, veritatis
                                doloremque sunt alias iure laudantium ex maiores odio ipsum deleniti, beatae enim tenetur
                                facere
                                corrupti porro a eum praesentium libero? Mollitia sunt accusantium quis explicabo tenetur
                                cumque
                                temporibus eligendi, illo aspernatur, rerum cum laborum reiciendis! Error, perferendis sint.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ipsa ex possimus assumenda
                                iusto a, non sint quia recusandae mollitia cum consequuntur? Amet in natus error harum vero
                                consectetur commodi eaque ipsa dolore? Illum fugiat quis quas, reiciendis quaerat facilis.
                                Consequatur sunt molestias et dolore distinctio ut nihil neque dolor!
                            </p>
                            <br>
                        @endfor
                    </div>
                </div>
            </div>

            <div class="hidden lg:block lg:basis-1/3 xl:basis-1/4 dark:text-white mt-[50px]">
                <div class="mb-20 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 p-7 dark:border-0 shadow-xl">
                    <h1 class="border-b border-gray-300 pb-1 mb-3    font-semibold text-xl"><i
                            class="fa-solid fa-newspaper mr-2"></i>Artikel Terkait</h1>
                    <div>

                        @for ($i = 0; $i < 4; $i++)
                            <a href="#"
                                class="flex flex-col items-center bg-white rounded-lg mb-3 border shadow-md md:flex-row max-w-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-auto md:rounded-none md:rounded-l-lg"
                                    src="https://picsum.photos/200" alt="">
                                <div class="flex flex-col justify-start py-1 px-2 leading-normal">
                                    <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy
                                        technology acquisitions 2021<h5>
                                </div>
                            </a>
                        @endfor

                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 p-7 dark:border-0 shadow-xl">
                    <h1 class="border-b border-gray-300 pb-1 mb-3    font-semibold text-xl"><i
                            class="fa-solid fa-newspaper mr-2"></i>Pilihan Editor</h1>
                    <div>

                        @for ($i = 0; $i < 4; $i++)
                            <a href="#"
                                class="flex flex-col items-center bg-white rounded-lg mb-3 border shadow-md md:flex-row max-w-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-auto md:rounded-none md:rounded-l-lg"
                                    src="https://picsum.photos/200" alt="">
                                <div class="flex flex-col justify-start py-1 px-2 leading-normal">
                                    <h5 class="mb-2 text-sm font-medium tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy
                                        technology acquisitions 2021<h5>
                                </div>
                            </a>
                        @endfor

                    </div>
                </div>
            </div>
        </div>

        <div class="mt-20 p-3 md:p-0">
            <h2 class="mb-5 font-medium dark:text-white"><i class="fa-solid fa-comment mr-2 text-xl text-indigo-500"></i>
                Tinggalkan Komentar
            </h2>
            <form action="" method="POST">
                @csrf
                <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                    <div class="py-2 px-4 bg-white rounded-t-lg dark:bg-gray-800">
                        <label for="comment" class="sr-only">Tulis komentar disini...</label>
                        <textarea id="comment" rows="6"
                            class="px-0 w-full text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="Tulis komentar disini..." required></textarea>
                    </div>
                    <div class="py-2 px-3 border-t dark:border-gray-600">
                        <button type="submit"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Posting Komentar
                        </button>
                    </div>
                </div>
            </form>

            <div class="border-t border-gray-300 mt-10 pt-10">
                <p class="dark:text-white"><i class="fa-solid fa-comments mr-2 text-indigo-500"></i> Postingan ini punya 5
                    komentar</p>

                @for ($i = 0; $i < 5; $i++)
                    <div class="w-full dark:text-white dark:border-gray-500 flex mt-8 border-b pb-5 mb-5 border-gray-200">
                        <img class="rounded-full" src="https://picsum.photos/50" alt="">
                        <div class="ml-5 flex flex-col justify-center">
                            <div class="flex mb-3">
                                <h3 class="font-semibold">Arthana</h3>
                                <span class="mx-2"> - </span>
                                <p class="font-medium italic">13 June 2022</p>
                            </div>
                            <p class="text-sm">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi, eligendi!
                                lorem.
                            </p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
