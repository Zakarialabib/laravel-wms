<div x-show="openTab === 3">
    <form wire:submit.prevent="create">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="flex flex-wrap -m-2">
            <div class="w-1/2 p-2">
                <label for="">{{ __('Offer Title') }}*</label>
                <input
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                    type="text" name="" wire:model="">
                @error('') <span class="text-red-550">{{ $message }}</span>@enderror
            </div>
            <div class="w-1/2 p-2">
                <label for=" ">{{ __('Offer subtitle') }}*</label>
                @error(' ') <span class="text-red-550">{{ $message }}</span>@enderror
            </div>
            <div class="w-1/2 p-2">
                <label for=" ">{{ __('Offer Image') }}* </label>
                <input type="file"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                    id=" " wire:model=" ">
                @error(' ') <span class="text-red-550">{{ $message }}</span>@enderror
            </div>
            {{-- <div class="w-1/2 p-2">
                                        <label for="section_type">{{ __('Section Type') }}*</label>
                                        <input
                                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                        type="text" name="section_type" wire:model="section_type">                                        
                                        @error('section_type') <span
                                            class="text-red-550">{{ $message }}</span>@enderror
                                    </div> --}}
        </div>
        <div class="form-group">
            <button
                class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full rounded">Submit</button>
        </div>
    </form>
</div>