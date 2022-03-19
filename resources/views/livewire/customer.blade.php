<x-slot name="header">
    <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
        {{ __('Customer Dashbord') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-4 px-4 py-4">
                    @if (session()->has('message'))
                        <div class="bg-green-550 border-t-4 border-green-300 rounded-b text-black font-bold px-4 py-3 shadow-md my-3"
                            role="alert">
                            <div class="flex">
                                <div>
                                    <p class="text-sm">{{ session('message') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    <h3 class="panel-heading">{{ __('Create Customer') }}</h3>
                    <form wire:submit.prevent="store">
                        <div class="flex flex-wrap -m-2">
                            <div class="w-1/2 p-2">
                                <label for="name"> {{ __('Name') }}* </label>
                                <input
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 font-light focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    type="text" name="name" value="{{ old('name') }}"
                                    placeholder="@error('name'){{ $message }}@enderror" wire:model="name">
                                </div>
                                <div class="w-1/2 p-2">
                                    <label for="phone">{{ __('Phone') }}* </label>
                                    <input
                                        class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                                        type="text" name="phone" value="{{ old('phone') }}"
                                        placeholder=" @error('phone'){{ $message }}@enderror" wire:model="phone">

                                    </div>
                                    <div class="w-1/2 p-2">
                                        <label for="email"> {{ __('Email') }}* </label>
                                        <input
                                            class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                                            type="email" name="email" value="{{ old('email') }}"
                                            placeholder=" @error('email'){{ $message }}@enderror" wire:model="email">
                                        </div>
                                        <div class="w-1/2 p-2">
                                            <label for="address"> {{ __('Address') }}* </label>
                                            <input
                                                class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                                                type="text" name="address" value="{{ old('address') }}"
                                                placeholder=" @error('address'){{ $message }}@enderror" wire:model="address">
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
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full rounded">Submit</button>
                                        </div>
                                    </form>
                                    <div class="flex flex-row my-5 justify-between w-full">
                                        <h2 class="text-2xl leading-tight">
                                            {{ __('Customer list') }}
                                        </h2>
                                        <div class="flex w-full max-w-sm space-x-3">
                                            <input type="text" wire:model="search"
                                                class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                placeholder="Recherche par Nom Client" />
                                        </div>
                                    </div>
                                    <div class="inline-block min-w-full overflow-hidden">
                                        <table class="table-auto w-full divide-y divide-gray-200">
                                            <thead>
                                                <tr>
                                                    <th>ID.</th>
                                                    <th
                                                        class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                        {{ __('Name') }}</th>
                                                    <th
                                                        class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                        {{ __('Phone') }}</th>
                                                    <th
                                                        class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                        {{ __('Email') }}</th>
                                                    <th
                                                        class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                        {{ __('Address') }}</th>
                                                    <th
                                                        class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                        {{ __('Status') }}</th>
                                                    <th
                                                        class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                        {{ __('Created At') }}</th>
                                                    <th
                                                        class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                        {{ __('Updated At') }}</th>
                                                    <th
                                                        class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                        {{ __('Action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @foreach ($customers as $customer)
                                                        <td>{{ $customer->id }}</td>
                                                        <td class="border-b border-gray-200  text-sm">{{ $customer->name }}</td>
                                                        <td class="border-b border-gray-200  text-sm">{{ $customer->phone }}
                                                        </td>
                                                        <td class="border-b border-gray-200  text-sm"> {{ $customer->email }}
                                                        </td>
                                                        <td class="border-b border-gray-200  text-sm">{{ $customer->address }}
                                                        </td>
                                                        <td class="border-b border-gray-200  text-sm">{{ $customer->status }}
                                                        </td>
                                                        <td class="border-b border-gray-200  text-sm">{{ $customer->created_at }}
                                                        </td>
                                                        <td class="border-b border-gray-200  text-sm">{{ $customer->updated_at }}
                                                        </td>
                                                        <td class="border flex td class=">
                                                            {{-- @can('customers-delete') 
                                                                <button 
                                                                wire:click='$emit("openModal", "edit-customer", @json(["customer" => $customer->id]))'>{{ __('Edit') }}</button> --}}
                                                            <button
                                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 py-2 rounded"
                                                                wire:click='$emit("openModal", "edit-customer", @json(["customers" => $customer->id]))'>{{ __('Edit') }}</button>
                                                            <button type="button" wire:click="deleteId({{ $customer->id }})"
                                                                class="btn btn-danger" data-toggle="modal"
                                                                data-target="#exampleModal">{{ __('Delete') }}</button>

                                                            {{-- @endcan --}}
                                                        </td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                        {{ $customers->links('layouts.tailwind') }}
                                    </div>
                                    <!-- Modal -->
                                    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Delete Confirm') }}
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true close-btn">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>{{ __('Are you sure want to delete') }}?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary close-btn"
                                                        data-dismiss="modal">{{ __('Close') }}</button>
                                                    <button type="button" wire:click.prevent="delete()"
                                                        class="btn btn-danger close-modal"
                                                        data-dismiss="modal">{{ __('Yes, Delete') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>