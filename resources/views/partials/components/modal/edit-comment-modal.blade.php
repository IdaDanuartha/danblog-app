<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="edit-comment-modal" tabindex="-1" aria-labelledby="edit-comment-modalTitle" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered relative w-auto pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white dark:bg-gray-800 bg-clip-padding rounded-md outline-none text-current">
      <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
            Form Ubah Komentar
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <form action="/add-comment" method="POST">            
                @csrf
                <input type="hidden" name="post_id" value="">
                <div class="mb-4 w-full bg-gray-50 rounded-lg border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                    <div>                        
                        <input id="user_comment" type="hidden" name="user_comment">
                        <trix-editor input="user_comment" class="dark:text-white" placeholder="Ketik komentarmu disini..."></trix-editor>
                    </div>                    
                </div>
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="submit"
          class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
          Simpan Perubahan
        </button>
      </div>
    </form>
    </div>
  </div>
</div>