<x-slot name="header">
    <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
        {{ __('Sales Dashbord') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
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
                <h3 class="panel-heading">{{ __('Create sale') }}</h3>
                <div class="panel-body">
                    <div>
                        <form wire:submit.prevent="store">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="flex flex-wrap -m-2">
                                <div class="w-1/2 p-2">
                                    <label for="user">{{ __('DeliveryMan') }}*</label>
                                    <select name="user_id" wire:model="user_id"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="w-1/2 p-2">
                                    <label for="status">{{ __('Status') }}* </label>
                                    <select wire:model="status"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        name="status">
                                        <option></option>
                                        <option name="status" value='{{App\Models\Sales::STATUS_Pending}}'>{{ __('Pending') }}</option>
                                        <option name="status" value='{{App\Models\Sales::STATUS_Processing}}'>{{ __('Processing') }}</option>
                                        <option name="status" value='{{App\Models\Sales::STATUS_Completed}}'>{{ __('Completed') }}</option>
                                        <option name="status" value='{{App\Models\Sales::STATUS_Decline}}'>{{ __('Decline') }}</option>
                                    </select>
                                    @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>

                                <div class="w-1/2 p-2">
                                    <label for="product_id">{{ __('Product ID') }}*</label>
                                    <select name="product_id" wire:model="product_id"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }} -
                                                {{ $product->id }}</option>
                                        @endforeach
                                    </select>
                                    @error('product_id') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>

                                <div class="w-1/2 p-2">
                                    <label for="quantity">{{ __('Quantity') }}* </label>
                                    <input
                                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                        type="text" name="quantity" wire:model="quantity">
                                    @error('quantity') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>

                                <div class="w-1/2 p-2">
                                    <label for="sale_number">{{ __('Sale number') }}* </label>
                                    <input
                                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                        type="text" name="sale_number" wire:model="sale_number">
                                    @error('sale_number') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>

                                {{-- <div class="w-full p-2">
                                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold w-12 rounded"
                                        wire:click.prevent="add({{ $i }})">Add</button>
                                </div>

                                @foreach ($inputs as $key => $value)
                                    <div class=" add-input">
                                        <div class="flex flex-wrap -m-2">
                                            <div class="w-1/2 p-2">
                                                <select name="product_id" wire:model="product_id.{{ $value }}"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option></option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }} -
                                                            {{ $product->id }}</option>
                                                    @endforeach
                                                </select>
                                                @error('product_id.' . $value) <span
                                                    class="text-red-500">{{ $message }}</span>@enderror
                                            </div>
                                            <div class="w-1/2 p-2">
                                                <input type="quantity"
                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                    wire:model="quantity.{{ $value }}"
                                                    placeholder="Enter quantity">
                                                @error('quantity.' . $value) <span
                                                    class="text-red-500">{{ $message }}</span>@enderror
                                            </div>
                                            <div class="w-full p-2">
                                                <button
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold w-12 rounded"
                                                    wire:click.prevent="remove({{ $key }})">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach --}}

                            <div class="w-full block">
                                <button
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full block rounded"
                                    wire:click="store()">{{ __('Submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">

                <h3 class="panel-heading">{{ __('Sale list') }}</h3>

                <input type="text" wire:model="search"
                    class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-blue-900 my-5  ocus:shadow-outline"
                    placeholder="Recherche par Nom Client" />

                <table class="table-auto w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th>ID.</th>
                            <th
                                class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                {{ __('Product ID') }}</th>
                            <th class="border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                {{ __('DeliveryMan') }}</th>
                            <th class="border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                {{ __('Quantity') }}</th>
                            <th class="border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                {{ __('Status') }}</th>
                            <th
                                class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                {{ __('Created At') }}</th>
                            <th
                                class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                {{ __('Updated At') }}</th>
                            <th class="border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                {{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($sales as $sale)
                                <td class="border-b border-gray-200  text-sm">{{ $sale->id }}</td>
                                <td class="border-b border-gray-200  text-sm">{{ $product->name }}</td>
                                <td class="border-b border-gray-200  text-sm">{{ $user->name }} </td>
                                <td class="border-b border-gray-200  text-sm"> {{ $sale->quantity }} </td>
                                <td class="border-b border-gray-200  text-sm">
                                    @if($sale->status == App\Models\Sales::STATUS_Pending)<span class="">{{__('Pending')}}</span>
                                    @elseif($sale->status == App\Models\Sales::STATUS_Processing)<span class="">{{__('Processing')}}</span>
                                    @elseif($sale->status == App\Models\Sales::STATUS_Completed)<span class="">{{__('Completed')}}</span>
                                    @elseif($sale->status == App\Models\Sales::STATUS_Decline)<span class="">{{__('Declined')}}</span>
                                    @endif
                                </td>
                                <td class="border-b border-gray-200  text-sm">{{ $sale->created_at }}</td>
                                <td class="border-b border-gray-200  text-sm">{{ $sale->updated_at }}</td>
                                <td class="border inline-flex px-3 py-3">
                                    {{-- @can('sales-delete') --}}

                                    <a href=""
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 py-2 rounded">{{ __('Edit') }}</a>

                                         {{--   <button wire:click="edit({{ $sale->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded">Modifier</button> --}}
                                        <button type="button" wire:click="deleteId({{ $sale->id }})" class="btn btn-danger"
                                            data-toggle="modal" data-target="#exampleModal">{{ __('Delete') }}</button>
                                               
                                    {{-- @endcan --}}
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $sales->links('layouts.tailwind') }}
            </div>
        </div>
    </div>
</div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Delete Confirm') }}</h5>
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
                    <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal"
                        data-dismiss="modal">{{ __('Yes, Delete') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>