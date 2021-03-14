<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
    {{ __('Show Role') }}
   </h2>
</x-slot>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">

            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3" href="{{ route('roles.index') }}"> Back</a>

    <div class="px-6 py-4">

            <strong>Name:</strong>

            {{ $role->name }}

    </div>

    <div class="px-6 py-4">

            <strong>Permissions:</strong>

            @if(!empty($rolePermissions))

                @foreach($rolePermissions as $v)

                    <label class="label label-success">{{ $v->name }},</label>

                @endforeach

            @endif

    </div>
</div>
</div>
</x-app-layout>
