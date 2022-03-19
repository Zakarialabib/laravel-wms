<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​  
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <form>
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="">
              <div class="mb-4">
                  <label for="title" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Title') }}:</label>
                  <input type="text" class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" id="title" placeholder="Enter Title" wire:model="title">
                  @error('title') <span class="text-red-550">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="body" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Body') }}:</label>
                  <textarea class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" id="body" wire:model="body" placeholder="Enter Body"></textarea>
                  @error('body') <span class="text-red-550">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="slug" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Slug') }}:</label>
                  <input type="text" class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" id="slug" placeholder="Enter slug" wire:model="slug">
                  @error('slug') <span class="text-red-550">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="image" class="block text-gray-700 text-sm font-bold mb-2">{{ __('image') }}:</label>
                  <input type="file" class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" id="image"  wire:model="image">
                  @error('image') <span class="text-red-550">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="meta_keyword" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Seo keyword') }}:</label>
                  <input type="text" class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" id="meta_keyword" placeholder="Enter Seo keyword" wire:model="meta_keyword">
                  @error('meta_keyword') <span class="text-red-550">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="meta_description" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Seo description') }}:</label>
                  <textarea class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" id="meta_description" wire:model="meta_description" placeholder="Enter Seo description"></textarea>
                  @error('meta_description') <span class="text-red-550">{{ $message }}</span>@enderror
              </div>
        </div>
      </div>
      <input type="hidden" class="hidden" id="user_id" wire:model="user_id">
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-550 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            {{ __('Save') }}
          </button>
        </span>
        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
          <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">            
            {{ __('Go back') }}
          </button>
        </span>
        </form>
      </div>
    </div>
  </div>
</div>