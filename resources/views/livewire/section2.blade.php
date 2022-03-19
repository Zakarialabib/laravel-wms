<div x-show="openTab === 2">
    <form wire:submit.prevent="create">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="flex flex-wrap -m-2">
            <div class="w-1/2 p-2">
                <label for="service_title">{{ __('Service Title') }}*</label>
                <input
                    class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                    type="text" name="" wire:model="service_title">
                @error('service_title') <span class="text-red-550">{{ $message }}</span>@enderror
            </div>
            <div class="w-1/2 p-2">
                <label for="service_subtitle">{{ __('Service subtitle') }}*</label>
                 <x-input.rich-text wire:model.lazy.lazy="service_subtitle" id="service_subtitle" /> 
                @error('service_subtitle') <span class="text-red-550">{{ $message }}</span>@enderror
            </div>
            <div class="w-1/2 p-2">
                <label for="service_image">{{ __('Service Image') }}* </label>
                <input type="file"
                    class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                    id="service_image" wire:model="service_image">
                @error('service_image') <span class="text-red-550">{{ $message }}</span>@enderror
            </div>
            <div class="w-1/2 p-2">
                <label for="section_type">{{ __('Section Type') }}*</label>
                <input
                class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                type="text" name="section_type" wire:model="section_type">                                        
                @error('section_type') <span
                    class="text-red-550">{{ $message }}</span>@enderror
            </div> 
        </div>
        <div class="form-group">
            <button
                class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full rounded">Submit</button>
        </div>
    </form>
</div>
