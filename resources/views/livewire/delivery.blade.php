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
        <h3 class="panel-heading">{{ __('Create Delivery') }}</h3>
        <div class="panel-body">
            <div>
                <form wire:submit.prevent="store">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="flex flex-wrap -m-2">
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
                            <label for="tracking_number">{{ __('tracking number') }}* </label>
                            <input :value="old('tracking_number')"
                                class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                                type="text" name="tracking_number" wire:model="tracking_number">
                            @error('tracking_number') <span class="text-red-550">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-2">
                        <div class="w-1/2 p-2">
                            <label for="recipient">{{ __('Recipient') }}* </label>
                            <input :value="old('recipient')"
                                class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                                type="text" name="recipient" wire:model="recipient">
                            @error('recipient') <span class="text-red-550">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-1/2 p-2">
                            <label for="price">{{ __('Price') }}* </label>
                            <input :value="old('price')"
                                class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                                type="text" name="price" wire:model="price">
                            @error('price') <span class="text-red-550">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">{{ __('Address') }}* </label>
                        <input :value="old('address')"
                            class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                            type="text" name="address" wire:model="address">
                        @error('address') <span class="text-red-550">{{ $message }}</span>@enderror
                    </div>
                    <div class="flex flex-wrap -m-2">
                        <div class="w-1/3 p-2">
                            <label for="expected_arrival">{{ __('Expected Arrival') }}* </label>
                            <input :value="old('expected_arrival')"
                                class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                                type="date" name="expected_arrival" wire:model="expected_arrival">
                            @error('expected_arrival') <span class="text-red-550">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-1/3 p-2">
                            <label for="status">{{ __('Status') }}* </label>
                            <select wire:model="status"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                wire:model="status" name="status">
                                <option :value="old('status')"></option>
                                <option name="status" value='{{App\Models\Deliveries::STATUS_PROCESSING}}'>{{ __('Processing') }}</option>
                                <option name="status" value='{{App\Models\Deliveries::STATUS_SHIPPING}}'>{{ __('Shipping') }}</option>
                                <option name="status" value='{{App\Models\Deliveries::STATUS_COMPLETED}}'>{{ __('Completed') }}</option>
                                <option name="status" value='{{App\Models\Deliveries::STATUS_RETURNED}}'>{{ __('Returned') }}</option>
                            </select>
                            @error('status') <span class="text-red-550">{{ $message }}</span>@enderror
                        </div>
                        <div class="w-1/3 p-2">
                            <label for="actual_arrival">{{ __('Actual Arrival') }}: </label>
                            <input :value="old('actual_arrival')"
                                class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                                type="date" name="actual_arrival" wire:model="actual_arrival">
                            @error('actual_arrival') <span class="text-red-550">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">{{ __('Description*') }}: </label>
                        <textarea :value="old('description')"
                            class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500""
                            type="text" name="description" wire:model="description"></textarea>
                        @error('description') <span class="text-red-550">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <button
                            class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full rounded">{{ __('Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
        <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">
            <div class="flex flex-row my-5 justify-between w-full">
                <h2 class="text-2xl leading-tight">
                    {{ __('Delivery list') }}
                </h2>
                <div class="flex w-full max-w-sm space-x-3">
                    <input type="text" wire:model="search"
                        class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        placeholder="{{ __('Search for Client') }}" />
                </div>
            </div>
            <table class="table-auto w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">ID.
                        </th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            {{ __('Sale ID') }}</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            {{ __('Recipient') }}</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            {{ __('Address') }}</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            {{ __('Expected Arrival') }}</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            {{ __('Actual Arrival') }}</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            {{ __('Status') }}</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            {{ __('Description') }}</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            {{ __('Created At') }}</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            {{ __('Updated At') }}</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            {{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($deliveries as $delivery)
                            <td class="border-b border-gray-200  text-sm">{{ $delivery->id }}</td>
                            <td class="border-b border-gray-200  text-sm">{{ $delivery->sale_id }}</td>
                            <td class="border-b border-gray-200  text-sm">{{ $delivery->recipient }} </td>
                            <td class="border-b border-gray-200  text-sm"> {{ $delivery->address }} </td>
                            <td class="border-b border-gray-200  text-sm">{{ $delivery->expected_arrival }}</td>
                            <td class="border-b border-gray-200  text-sm">{{ $delivery->actual_arrival }}</td>
                            <td class="border-b border-gray-200  text-sm">
                                @if($delivery->status == App\Models\Deliveries::STATUS_PROCESSING)<span class="">{{__('Processing')}}</span>
                                @elseif($delivery->status == App\Models\Deliveries::STATUS_SHIPPING)<span class="">{{__('Shipping')}}</span>
                                @elseif($delivery->status == App\Models\Deliveries::STATUS_COMPLETED)<span class="">{{__('Completed')}}</span>
                                @elseif($delivery->status == App\Models\Deliveries::STATUS_RETURNED)<span class="">{{__('Returned')}}</span>
                                @endif
                                {{ $delivery->status }}
                            </td>
                            <td class="border-b border-gray-200  text-sm"> {{ $delivery->description }} </td>
                            <td class="border-b border-gray-200  text-sm">{{ $delivery->created_at }}</td>
                            <td class="border-b border-gray-200  text-sm">{{ $delivery->updated_at }}</td>
                            <td class="border inline-flex px-3 py-3">
                                {{-- @can('deliveries-delete') --}}
                                <a href="{{ route('deliveries.edit', $delivery->id) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded">Edit</a>
                                {{-- <button wire:click="edit({{ $delivery->id }})"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded">Modifier</button> --}}
                                <button type="button" wire:click="deleteId({{ $delivery->id }})"
                                    class="btn btn-danger" data-toggle="modal"
                                    data-target="#exampleModal">{{ __('Delete') }}</button>
                                {{-- @endcan --}}
                            </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
            {{-- {{ $deliveries->links('layouts.tailwind') }} --}}

        </div>
    </div>
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
