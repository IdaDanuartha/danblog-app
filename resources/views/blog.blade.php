@extends('partials.main')

@section('title')
    Detail Article
@endsection

@section('main')
    <div class="pt-[50px] sm:pt-[80px] md:pt-[100px] p-2 sm:p-5 md:p-10">
        <div class="flex justify-center">
            <div
                class="mr-7 basis-full md:basis-3/4 dark:bg-gray-800 dark:text-white rounded-lg shadow-lg border border-gray-100 dark:border-0 mt-[50px] p-7">
                <div class="flex border-b border-gray-400 pb-5 mb-10">
                    <img class="rounded-full" width="50" src="https://picsum.photos/100" alt="">
                    <div class="ml-5 items-center">
                        <h3 class="text-lg font-medium">Danuartha</h3>
                        <p class="text-sm"><i class="fa-solid fa-calendar mr-1 text-indigo-500"></i> 10 June 2022</p>
                    </div>
                </div>

                <div>
                    <h1 class="uppercase font-semibold text-4xl my-8">Bagaimana Nasib Para Programmer di Masa Depan?</h1>
                    <img class="rounded-md" src="https://picsum.photos/1200/600" alt="">
                    <div>
                        <div class="mt-5 mb-12">
                            <a href="#comments" class="mr-5"><i
                                    class="fa-solid fa-comment-dots text-indigo-500"></i> 5
                                Comments</a>
                            <a href="#" class="text-indigo-600">#technology</a>
                        </div>
                        @for ($i = 0; $i < 5; $i++)
                            <p>
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

            <div
                class="hidden md:block bg-white basis-1/4 dark:bg-gray-800 dark:text-white rounded-lg border border-gray-100 dark:border-0 shadow-xl mt-[50px] p-7">
                Lorem ipsum
                dolor sit
                amet consectetur
                adipisicing elit. Iste sequi molestiae
                quas
                ea,
                tempora laborum illo
                tempore nam animi quo? In porro facilis iure eaque impedit ratione tempora ipsa, natus dolorum, assumenda
                placeat error earum vero recusandae, saepe commodi magni. Odio quibusdam necessitatibus provident similique,
                qui, ipsum repudiandae id, aspernatur amet et iusto dolore omnis maxime possimus. Earum odit animi ex quidem
                repudiandae sapiente totam molestiae perferendis quia a exercitationem mollitia recusandae, nam eaque harum
                quaerat quasi tempora odio tempore inventore aliquam. Ad repudiandae quos ullam eum fugit autem sit ea
                quisquam
                corrupti temporibus placeat ipsum odio, distinctio facere magni?
            </div>
        </div>

        <div class="mt-20">
            <h2 class="mb-5 font-medium dark:text-white"><i class="fa-solid fa-comment mr-2 text-xl text-indigo-500"></i>
                Leave a Comment
            </h2>
            <form action="" method="POST">
                @csrf
                <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                    <div class="py-2 px-4 bg-white rounded-t-lg dark:bg-gray-800">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" rows="6"
                            class="px-0 w-full text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="Write a comment..." required></textarea>
                    </div>
                    <div class="py-2 px-3 border-t dark:border-gray-600">
                        <button type="submit"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Post comment
                        </button>
                    </div>
                </div>
            </form>

            <div class="border-t border-gray-300 mt-10 pt-10">
                <p class="dark:text-white"><i class="fa-solid fa-comments mr-2 text-indigo-500"></i> This post has 5
                    comments</p>

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
