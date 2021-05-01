<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
            {{ __('Pricing List') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">
                @livewire('pricings', ['pricings' => $pricings], key($pricing->id))
            </div>
        </div>
    </div>
</x-app-layout>
