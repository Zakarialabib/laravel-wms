    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Front Sections') }}
        </h2>
    </x-slot>
    <div> 
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
                        <div x-data="{
                          openTab: 1,
                          activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
                          inactiveClasses: 'text-blue-550 hover:text-blue-800'
                        }" class="p-6">
                            <ul class="flex border-b">
                                <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                                    <a :class="openTab === 1 ? activeClasses : inactiveClasses"
                                        class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                                        {{ __('Section 1') }}
                                    </a>
                                </li>
                                <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                                    <a :class="openTab === 2 ? activeClasses : inactiveClasses"
                                        class="bg-white inline-block py-2 px-4 font-semibold" href="#">{{ __('Section 2') }}</a>
                                </li>
                                <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                                    <a :class="openTab === 3 ? activeClasses : inactiveClasses"
                                        class="bg-white inline-block py-2 px-4 font-semibold" href="#">{{ __('Section 3') }}</a>
                                </li>
                            </ul>
                            <div class="content">
                               <livewire:section1 />
                                <livewire:section2 />
                                <livewire:section3 /> 
                            </div>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">
                        <input type="text" wire:model="search"
                            class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3  my-5  ocus:shadow-outline"
                            placeholder="Recherche par Nom Client" />

                        <table class="table-auto w-full divide-y divide-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th>ID.</th>
                                    <th scope="col"
                                        class="  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                        {{ __('Title') }}</th>
                                    <th scope="col"
                                        class="  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                        {{ __('Subtitle') }}</th>
                                           <th scope="col"
                                        class="  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                        {{ __('Image') }}</th>
                                    <th scope="col"
                                        class="  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                        {{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($frontsections as $frontsection)
                                        <td class="border-b border-gray-200  text-sm">{{ $frontsection->id }}</td>
                                        <td class="border-b border-gray-200  text-sm">
                                            {{ $frontsection->offer_title }}
                                        </td>
                                        <td class="border-b border-gray-200  text-sm">
                                            {{ $frontsection->offer_subtitle }} </td>
                                        <td class="border-b border-gray-200  text-sm">{{ $frontsection->offer_image }}
                                        </td>
                                        <td class="border inline-flex px-3 py-3">
                                            {{-- @can('-delete') --}}

                                            <button type="button" wire:click="deleteId({{ $frontsection->id }})"
                                                class="btn btn-danger" data-toggle="modal"
                                                data-target="#exampleModal">{{ __('Delete') }}</button>

                                            {{-- @endcan --}}
                                        </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $frontsections->links('layouts.tailwind') }} --}}
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
