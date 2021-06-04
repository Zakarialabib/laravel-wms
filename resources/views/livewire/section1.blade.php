<div x-show="openTab === 1">    
    <form wire:submit.prevent="create">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="flex flex-wrap -m-2">
            <div class="w-1/2 p-2">
                <label for="offer_title">{{ __('Offer Title') }}*</label>
                <input
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                    type="text" name="" wire:model="offer_title">
                @error('offer_title') <span class="text-red-550">{{ $message }}</span>@enderror
            </div>
            <div class="w-1/2 p-2">
                <label for="offer_subtitle">{{ __('Offer subtitle') }}*</label>
                <x-input.rich-text wire:model.lazy="offer_subtitle" id="offer_subtitle" />
                @error('offer_subtitle') <span class="text-red-550">{{ $message }}</span>@enderror
            </div>
            <div class="w-1/2 p-2">
                <label for="offer_image">{{ __('Offer Image') }}* </label>
                <input type="file"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                    id="offer_image" wire:model="offer_image">
                @error('offer_image') <span class="text-red-550">{{ $message }}</span>@enderror
            </div>
               {{-- <div class="w-1/3 p-2">
                                            <label for="status">{{ __('Status') }}* </label>
                                            <select wire:model="status"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                wire:model="status" name="status">
                                                <option :value="old('status')"></option>
                                                <option name="status" value='{{App\Models\FrontendSections::STATUS_ACTIF}}'>{{ __('Actif') }}</option>
                                                <option name="status" value='{{App\Models\FrontendSections::STATUS_INACTIF}}'>{{ __('Inactif') }}</option>
                                            </select>
                                            @error('status') <span class="text-red-550">{{ $message }}</span>@enderror
                                        </div>  --}}
            <div class="w-1/2 p-2">
                <label for="section_type">{{ __('Section Type') }}*</label>
                <input
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                    type="text" name="section_type" wire:model="section_type">
                @error('section_type') <span class="text-red-550">{{ $message }}</span>@enderror
            </div>
         
        </div>
        <div class="form-group">
            <button
                class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full rounded">Submit</button>
        </div>
    </form>
</div>

