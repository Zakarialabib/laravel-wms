<x-modal>
    <x-slot name="title">
        Edit Customers
    </x-slot>
    <x-slot name="content">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                <form wire:submit.prevent="update()">
                    <div class="flex flex-wrap -m-2">
                            <div class="w-1/2 p-2">
                                <label for="name">{{ __('Name') }}* </label>
                                <input class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" type="text" name="name" wire:model="name" value="{{$customer->name}}" >
                            </div>
    
                            <div class="w-1/2 p-2">
                                <label for="phone">{{ __('Phone') }}* </label>
                                <input class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" type="text" name="phone" wire:model="phone" value="{{$customer->phone}}" >
                            </div>
    
                            <div class="w-1/2 p-2">
                                <label for="email">{{ __('Email') }}* </label>
                                <input class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" type="email" name="email" wire:model="email" value="{{$customer->email}}" >
                            </div>
    
                            <div class="w-1/2 p-2">
                                <label for="address">{{ __('Address') }}* </label>
                                <input class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" type="text" name="address" wire:model="address" value="{{$customer->address}}" >
                            </div>
    
                            <div class="w-1/2 p-2">
                                <label for="status">{{ __('Status') }}* </label>
                                <select wire:model="status"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    name="status">
                                    <option value="{{ old('status') }}"></option>
                                    <option name="status" value='active'>{{ __('Active') }}</option>
                                    <option name="status" value='not-active'>{{ __('Not active') }}</option>
                                </select>
                                @error('status') <span class="text-red-550">{{ $message }}</span>@enderror
                            </div>
                            
                            <div class="w-full p-2">
                                <button 
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded" >
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
        </x-slot>
    <x-slot name="buttons">
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold px-5 py-2.5 rounded"
        wire:click="$emit('closeModal')">Close Modal</button>
        </x-slot>
</x-modal>

   
