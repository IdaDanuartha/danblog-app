@extends('admin.layouts.main')

@section('title')
    Posts Management
@endsection

@section('content')
    <div class="relative max-w-full overflow-x-auto shadow-md sm:rounded-lg">
        <div class="p-4">
            <div class="relative mt-1">
                <button type="button"
                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-semibold rounded-lg text-md px-5 py-3 text-center mr-2 mb-2"
                    data-bs-toggle="modal" data-bs-target="#createPostModal"><i class="fa-solid fa-plus mr-2"></i>
                    Create
                    Post</button>
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Author
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Recommended
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created At
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Preview</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-900">
                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $item->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->category->category_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->author->username }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            @if ($item->status)
                                <i class="fa-solid fa-check mr-3 text-green-400"></i> Active
                            @else
                                <i class="fa-solid fa-xmark mr-3 text-red-400"></i> Inactive
                            @endif
                        </td>
                        <td class="px-6 py-4 text-center">
                            @if ($item->recommended)
                                <i class="fa-solid fa-check mr-3 text-green-400"></i> Yes
                            @else
                                <i class="fa-solid fa-xmark mr-3 text-red-400"></i> No
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->created_at->format('d M Y') }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Preview</a> --}}
                            <a href="/admin/posts/{{ $item->id }}"
                                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded text-sm px-4 py-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Preview</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('admin.components.modal.create-post-modal')
@endsection
