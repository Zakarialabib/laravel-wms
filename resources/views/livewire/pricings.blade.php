<div>
    <div class="panel panel-default">
        <div class="panel-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
            <h3 class="panel-heading"> {{ __('Create Pricing') }}</h3>
            <form wire:submit.prevent="store">
                <div class="flex flex-wrap -m-2">
                    <div class="w-1/2 p-2">
                        <label for="region">{{ __('Region') }}* </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            type="text" name="region" :value="old('region')" wire:model="region">
                        @error('region') <span class="text-red-550">{{ $message }}</span>@enderror
                    </div>

                    <div class="w-1/2 p-2">
                        <label for="city">{{ __('City') }}* </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            type="text" name="city" :value="old('city')" wire:model="city">
                        @error('city') <span class="text-red-550">{{ $message }}</span>@enderror
                    </div>

                    <div class="w-1/2 p-2">
                        <label for="price">{{ __('Price') }}* </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            type="text" name="price" :value="old('price')" wire:model="price">
                        @error('price') <span class="text-red-550">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="form-group">
                    <button
                        class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full rounded">{{ __('Save') }}</button>
                </div>
            </form>
        </div>
    </div>
    <input type="text" wire:model="search"
        class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3  my-5  ocus:shadow-outline"
        placeholder="Recherche par Nom Client" />
    <div>
        <div class="">
            <table class="table-auto w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>{{ __('Region') }}</td>
                        <td>{{ __('City') }}</td>
                        <td>{{ __('Price') }}</td>
                        <td>{{ __('Created At') }}</td>
                        <td>{{ __('Updated At') }}</td>
                        <td colspan=2>{{ __('Actions') }}</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pricings as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->region }}</td>
                            <td>{{ $p->city }}</td>
                            <td>{{ $p->price }}</td>
                            <td>{{ $p->created_at }}</td>
                            <td>{{ $p->updated_at }}</td>
                            <td>
                                <button wire:click="edit({{ $p->id }})"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Edit') }}r</button>
                                <button type="button" wire:click="deleteId({{ $p->id }})" class="btn btn-danger"
                                    data-toggle="modal" data-target="#exampleModal">{{ __('Delete') }}</button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pricings->links('layouts.tailwind') }}
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
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal"
                        data-dismiss="modal">{{ __('Yes, Delete') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
