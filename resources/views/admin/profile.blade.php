@extends('admin.layouts.main')

@section('content')
    <div class="relative max-w-full p-4 flex shadow-md sm:rounded-lg">
        <div class="border-4 border-gray-500 rounded w-[250px] h-[200px]">
            <img class="w-full h-full rounded" src="https://picsum.photos/300" alt="Profile Picture">
        </div>
        <div class="ml-5 w-full">
            <div class="mb-2">
                <label for="first_name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
                <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $user->username }}" disabled>
            </div>
            <div class="mb-2">
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $user->email }}" disabled>
            </div>
            <div class="mt-4 flex justify-end">
                <a href="/admin/settings"
                    class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-orange-600 dark:hover:bg-orange-700 focus:outline-none dark:focus:ring-orange-800"><i
                        class="fa-solid fa-pencil mr-2"></i> Edit Profile</a>
            </div>
        </div>
    </div>
@endsection
