<header>
    <!--Nav-->
    <nav aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

        <div class="flex flex-wrap items-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                <a href="#" aria-label="Home">
                    <span class="text-xl pl-2"><i class="em em-grinning"></i></span>
                </a>
            </div>

            <div class="flex w-full pt-2 content-center justify-center md:w-1/3 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="flex-1 md:flex-none md:mr-3">
                        <a class="inline-block text-gray-400 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="/">Home Page</a>
                    </li>
                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-2 px-2"> <span
                                    class="pr-2"><i class="em em-robot_face"></i></span> Hi, User <svg
                                    class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg></button>
                            <div id="myDropdown"
                                class="dropdownlist absolute bg-gray-700 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                <a href="#"
                                    class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline flex"><i
                                        class="fa fa-user fa-fw mr-2 mt-1"></i> Profile</a>
                                <a href="#"
                                    class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline flex"><i
                                        class="fa fa-cog fa-fw mr-2 mt-1"></i> Settings</a>
                                <div class="border border-gray-800"></div>
                                <a href="/logout"
                                    class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline flex"><i
                                        class="fas fa-sign-out-alt fa-fw mr-2 mt-1"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</header>
