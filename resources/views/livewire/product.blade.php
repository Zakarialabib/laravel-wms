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
        <h3 class="panel-heading">{{ __('Create product') }}</h3>
        <div class="panel-body">
            <div>
                <form wire:submit.prevent="store">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="flex flex-wrap -m-2">
                        <div class="w-1/2 p-2">
                            <label for="name">{{ __('Name') }}* </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                type="text" name="name" :value="old('name')" wire:model="name">
                            @error('name') <span class="text-red-550">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-1/2 p-2">
                            <label for="price">{{ __('Price') }}* </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                type="text" name="price" :value="old('price')" wire:model="price">
                            @error('price') <span class="text-red-550">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-full p-2">
                            <label for="description">{{ __('Description') }}* </label>
                            <textarea
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                type="description" name="description" :value="old('description')"
                                wire:model="description"></textarea>
                            @error('description') <span class="text-red-550">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button
                            class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full rounded">{{ __('Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">

        <h3 class="panel-heading">{{ __('Product list') }}</h3>

        <input type="text" wire:model="search"
            class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3  my-5  ocus:shadow-outline"
            placeholder="Recherche par Nom Client" />

        <table class="table-auto w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th>ID.</th>
                    <th 
                        class="text-gray-800  text-left text-sm uppercase font-normal">
                        {{ __('Name') }}</th>
                    <th 
                        class="text-gray-800  text-left text-sm uppercase font-normal">
                        {{ __('price') }}</th>
                    <th 
                        class="  text-gray-800  text-left text-sm uppercase font-normal">
                        {{ __('Description') }}</th>
                    <th 
                        class="  text-gray-800  text-left text-sm uppercase font-normal">
                        {{ __('Created At') }}</th>
                    <th 
                        class="  text-gray-800  text-left text-sm uppercase font-normal">
                        {{ __('Updated At') }}</th>
                    <th 
                        class="  text-gray-800  text-left text-sm uppercase font-normal">
                        {{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($products as $product)
                    <td class="border-b border-gray-200  text-sm">{{ $product->id }}</td>
                    <td class="border-b border-gray-200  text-sm">{{ $product->name }}</td>
                    <td class="border-b border-gray-200  text-sm">{{ $product->price}} </td>
                    <td class="border-b border-gray-200  text-sm"> {{ $product->description }} </td>
                    <td class="border-b border-gray-200  text-sm">{{ $product->created_at }}</td>
                    <td class="border-b border-gray-200  text-sm">{{ $product->updated_at }}</td>
                    <td class="border inline-flex px-3 py-3">
                        {{--     @can('products-delete')    --}}
                        <button type="button" wire:click="deleteId({{ $product->id }})" class="btn btn-danger"
                            data-toggle="modal" data-target="#exampleModal">{{ __('Delete') }}</button>
                        {{-- 
                    <a href="{{ route('products.edit', $product->id) }}" class="bg-blue-500 hover:bg-blue-700
                        text-white font-bold px-5 py-2.5 rounded">Edit</a>
                        <button wire:click="edit({{ $product->id }})"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded">Modifier</button>
                        --}}

                        {{--  @endcan --}}
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links('layouts.tailwind') }}

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

                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">{{ __('Close') }}</button>

                    <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal"
                        data-dismiss="modal">{{ __('Yes, Delete') }}</button>

                </div>

            </div>

        </div>

    </div>


</div>
