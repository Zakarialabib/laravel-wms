<x-app-layout>
    <x-slot name="header">
            <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
                {{ __('Delivery Dashbord') }}
            </h2>
        </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                      <livewire:delivery />
        </div>
    </div>
    </x-app-layout>
    
