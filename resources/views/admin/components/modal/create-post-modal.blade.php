    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel" aria-hidden="true"
        data-bs-backdrop="static">
        <div class="modal-dialog modal-xl modal-dialog-scrollable relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-gray-700 bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-semibold leading-normal text-white" id="createPostModal">
                        Create New Post
                    </h5>
                </div>
                <div class="modal-body relative p-4">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="file-input-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label text-white font-semibold text-lg"
                                            style="margin-bottom: 10px;">Upload
                                            Image</label>
                                        <div class="preview-zone hidden">
                                            <div class="box box-solid">
                                                <div class="box-header with-border">
                                                    <div><b>Preview</b></div>
                                                    <div class="box-tools pull-right">
                                                        <button type="button"
                                                            class="btn btn-danger btn-xs remove-preview">
                                                            <i class="fa fa-times"></i> Reset This Form
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="box-body"></div>
                                            </div>
                                        </div>
                                        <div class="dropzone-wrapper">
                                            <div class="dropzone-desc">
                                                <i class="fa-solid fa-upload mb-2"></i>
                                                <p>Choose an image file or drag it here.</p>
                                            </div>
                                            <input type="file" name="image" class="dropzone">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="relative my-5">
                            <div>
                                <label for="title"
                                    class="block text-md font-semibold text-gray-900 dark:text-white mb-3">Title</label>
                                <input type="text" id="title" name="title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Title post...">
                            </div>
                        </div>

                        <div class="my-5">
                            <label for="default"
                                class="block text-md font-semibold text-gray-900 dark:text-white mb-3">Select
                                Category</label>
                            <select id="default"
                                class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="category_id">
                                <option value="1" selected>United States</option>
                                <option value="2">Canada</option>
                                <option value="3">France</option>
                                <option value="4">Germany</option>
                            </select>
                        </div>

                        <div class="dark:text-white">
                            <label for="" class="font-semibold text-md">Body</label>
                            <div style="margin-top: 10px;">
                                <input id="x" type="hidden" name="body">
                                <trix-editor input="x" placeholder="Write content here..."></trix-editor>
                            </div>
                        </div>

                        <div class="flex mt-5">
                            <div class="flex items-center h-5">
                                <input checked id="status" aria-describedby="status-text" type="checkbox" name="status"
                                    class="w-4 h-4 text-purple-600 bg-gray-100 rounded border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="ml-2 text-sm">
                                <label for="status" class="font-semibold text-gray-900 dark:text-gray-300">Status?
                                    <span>active</span></label>
                                <p id="status-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">Jika
                                    status aktif maka
                                    postingan akan di publikasikan</p>
                            </div>
                        </div>

                        <div class="flex mt-5">
                            <div class="flex items-center h-5">
                                <input id="recommended" aria-describedby="recommended-text" type="checkbox"
                                    name="recommended"
                                    class="w-4 h-4 text-purple-600 bg-gray-100 rounded border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="ml-2 text-sm">
                                <label for="recommended"
                                    class="font-semibold text-gray-900 dark:text-gray-300">Recommended?
                                    <span>no</span></label>
                                <p id="recommended-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">
                                    Jika di rekomendasikan
                                    maka
                                    postingan akan di tampilkan dibagian pilihan editor</p>
                            </div>
                        </div>
                    </form>
                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-purple-600 text-white font-semibold text-sm leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-semibold text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                        Create Post
                    </button>
                </div>
            </div>
        </div>
    </div>
