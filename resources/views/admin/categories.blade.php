@extends('admin.layouts.main')

@section('title')
    Categories Management
@endsection

@section('content')
    <div class="relative max-w-full overflow-x-auto shadow-md sm:rounded-lg">
        <div class="p-4">
            <div class="relative mt-1">
                <button type="button"
                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-semibold rounded-lg text-md px-5 py-3 text-center mr-2 mb-2"
                    data-bs-toggle="modal" data-bs-target="#createCategoryModal"><i class="fa-solid fa-plus mr-2"></i>
                    Create
                    Category</button>
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Author
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
                @foreach ($categories as $item)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-900">
                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $item->category_name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->author->username }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->created_at->format('d M Y') }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button data-bs-toggle="modal" data-bs-target="#editCategoryModal" value="{{ $item->id }}"
                                class="btn-edit focus:outline-none text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:ring-orange-300 font-medium rounded text-xs px-4 py-2 m-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800"><i
                                    class="fa-solid fa-pen-to-square"></i></button>
                            <form class="inline" action="/admin/categories/{{ $item->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded text-xs px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 m-2 dark:focus:ring-red-900"
                                    data-modal-toggle="delete-modal"><i class="fa-solid fa-trash"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('admin.components.modal.create-category-modal')
    @include('admin.components.modal.edit-category-modal')
@endsection
