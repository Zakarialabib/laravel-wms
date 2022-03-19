<x-slot name="header">
    <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
        {{ __('Messages Dashbord') }}
    </h2>
</x-slot>
<div class="py-12">
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
    <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
        <div>
            <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">

                <h3 class="panel-heading">{{ __('Message list') }}</h3>

                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3" 
                href="{{route('message.create', ['sale' => $sale->id]) }}">
                create</a>

                <input type="text" wire:model="search"
                    class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3  my-5  ocus:shadow-outline"
                    placeholder="Recherche par Nom Client" />

                <table class="table-auto w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th>ID.</th>
                            <th
                                class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                {{ __('User') }}</th>
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
                            @foreach ($sale->messages as $message)
                                <td class="border-b border-gray-200  text-sm">{{ $message->id }}</td>
                                <td class="border-b border-gray-200  text-sm">{{ $message->user->name }} </td>
                                <td class="border-b border-gray-200  text-sm">
                                    @if($message->status == App\Models\Message::STATUS_Pending)<span class="">{{__('Pending')}}</span>
                                    @elseif($message->status == App\Models\Message::STATUS_Processing)<span class="">{{__('Processing')}}</span>
                                    @elseif($message->status == App\Models\Message::STATUS_Completed)<span class="">{{__('Completed')}}</span>
                                    @elseif($message->status == App\Models\Message::STATUS_Decline)<span class="">{{__('Declined')}}</span>
                                    @endif
                                </td>
                                <td class="border-b border-gray-200  text-sm">{{ $message->created_at }}</td>
                                <td class="border-b border-gray-200  text-sm">{{ $message->updated_at }}</td>
                                <td class="border inline-flex px-3 py-3">
                                    {{-- @can('sales-delete') --}}

                                    <a href=""
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 py-2 rounded">{{ __('Edit') }}</a>

                                         {{--   <button wire:click="edit({{ $message->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded">Modifier</button> --}}
                                        <button type="button" wire:click="deleteId({{ $sale->id }})" class="btn btn-danger"
                                            data-toggle="modal" data-target="#exampleModal">{{ __('Delete') }}</button>
                                               
                                    {{-- @endcan --}}
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $messages->links('layouts.tailwind') }} --}}
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