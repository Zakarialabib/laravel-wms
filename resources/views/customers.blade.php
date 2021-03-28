<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
            {{ __('Customer Dashbord') }}
        </h2>
    </x-slot>
<div>
  <div class="py-12">
        <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <livewire:customer />
        </div>
     </div>
  </div>
</div>
</x-app-layout>
