@extends('admin.layouts.main')

@section('content')
    <form class="relative max-w-full p-4 flex flex-col md:flex-row shadow-md sm:rounded-lg" action="/admin/settings/{{ auth()->id() }}" method="POST" enctype="multipart/form-data">        
            @csrf
            @method('PUT')
            <div class="user-upload-image mb-10 md:mb-0 rounded w-[250px] h-[250px]">
                <div class="small-12 medium-2 large-2 columns">
                    <div>
                        <!-- User Profile Image -->
                        @if (auth()->user()->image)
                            <img class="profile-pic duration-200 hover:opacity-50 rounded-lg border-[6px] border-gray-600" width="200" height="200" src="/uploads/users/{{ auth()->user()->image }}">
                        @else
                            <img class="profile-pic duration-200 hover:opacity-50 rounded-lg border-[6px] border-gray-600"
                                width="200" height="200" src="{{ asset('img/user-profile.png') }}">
                        @endif
                        @error('image')
                            <p class="text-red-400 font-semibold text-md">{{ $message }}</p>   
                        @enderror

                    </div>
                    <div class="p-image">
                        <i class="fa fa-camera upload-button"></i>
                        <input class="file-upload" name="image" type="file" accept="image/*" />
                    </div>                    
                </div>
            </div>
            <div class="ml-0 md:ml-5 w-full">
                <div class="mb-2">
                    <label for="username"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
                    <input type="text" id="username"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $user->username }}" name="username">
                    @error('username')
                    <p class="text-red-400 font-semibold text-md">{{ $message }}</p>   
                @enderror
                </div>
                <div class="mb-2">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                    <input type="text" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $user->email }}" name="email">
                    @error('email')
                        <p class="text-red-400 font-semibold text-md">{{ $message }}</p>   
                    @enderror
                </div>
                {{-- <div class="border-t border-gray-700 mt-10">
                    <h1 class="text-lg font-semibold my-5 text-gray-200"><i class="fa-solid fa-pencil mr-2"></i> Change
                        Password</h1>
                    <div class="mb-2">
                        <label for="curr_password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Current Password</label>
                        <input type="text" id="curr_password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="curr_password">
                    </div>
                    <div class="mb-2">
                        <label for="new_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">New
                            Password</label>
                        <input type="text" id="new_password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="new_password">
                    </div>
                    <div class="mb-2">
                        <label for="confirm_new_password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm New
                            Password</label>
                        <input type="text" id="confirm_new_password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="confirm_new_password">
                    </div>
                </div> --}}
                <div class="mt-4 flex justify-end">
                    <button type="submit"
                        class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-orange-600 dark:hover:bg-orange-700 focus:outline-none dark:focus:ring-orange-800">Edit
                        Profile</button>
                </div>
            </div>
    </form>
@endsection

@section('upload-image-script')
    <script>
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function() {
            readURL(this);
        });

        $(".upload-button").on('click', function() {
            $(".file-upload").click();
        });
    </script>
@endsection
