<x-slot name="header">
    <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
        {{ __('Messages Dashbord') }}
    </h2>
</x-slot>
<div class="py-12">
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-4 px-4 py-4">
    <h3 class="panel-heading">{{ __('Create sale') }}</h3>
    <div class="panel-body">
        <div>
            <form wire:submit.prevent="store">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="flex flex-wrap -m-2">
                    <div class="w-1/2 p-2">
                        <label for="user">{{ __('User') }}*</label>
                        <select name="user_id" wire:model="user_id"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option></option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id') <span class="text-red-550">{{ $message }}</span>@enderror
                    </div>
                    <div class="w-1/2 p-2">
                        <label for="sale_id">{{ __('Sale_id') }}* </label>
                        <select name="sale_id" wire:model="sale_id"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option :value="old('sale_id')"></option>
                            @foreach ($sales as $sale)
                                <option value="{{ $sale->id }}">{{ $sale->id }}</option>
                            @endforeach
                        </select>
                        @error('sale_id') <span class="text-red-550">{{ $message }}</span>@enderror
                    </div>
                    <div class="w-1/2 p-2">
                        <label for="status">{{ __('Status') }}* </label>
                        <select wire:model="status"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            name="status">
                            <option></option>
                            <option name="status" value='{{App\Models\Message::STATUS_Pending}}'>{{ __('Pending') }}</option>
                            <option name="status" value='{{App\Models\Message::STATUS_Processing}}'>{{ __('Processing') }}</option>
                            <option name="status" value='{{App\Models\Message::STATUS_Completed}}'>{{ __('Completed') }}</option>
                            <option name="status" value='{{App\Models\Message::STATUS_Decline}}'>{{ __('Decline') }}</option>
                        </select>
                        @error('status') <span class="text-red-550">{{ $message }}</span>@enderror
                    </div>

                    <div class="w-1/2 p-2">
                        <label for="message">{{ __('Message') }}* </label>
                        <input
                            class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                            type="text" name="message" wire:model="message">
                        @error('message') <span class="text-red-550">{{ $message }}</span>@enderror
                    </div>

                <div class="w-full block">
                    <button
                        class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full block rounded"
                        wire:click="store()">{{ __('Submit') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>