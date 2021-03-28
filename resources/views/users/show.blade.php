<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
    Users Management - Show User
    </h2>
</x-slot>

<div class="py-12">
<div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3" href="{{ route('users.index') }}"> Back</a>

    <div class="px-6 py-4">
            <strong>Name:</strong>
            {{ $user->name }}
    </div>
    <div class="px-6 py-4">
            <strong>Email:</strong>
            {{ $user->email }}
    </div>
    <div class="px-6 py-4">
            <strong>phone:</strong>
            {{ $user->phone }}
    </div>
    <div class="px-6 py-4">
            <strong>Address:</strong>
            {{ $user->address }}
    </div>

    <div class="px-6 py-4">
            <strong>Registered at:</strong>
            {{ $user->created_at }}
    </div>


    <div class="px-6 py-4">
            <strong>Roles:</strong>

            @if(!empty($user->getRoleNames()))

                @foreach($user->getRoleNames() as $v)

                    <label class="badge badge-success">{{ $v }}</label>

                @endforeach

            @endif
    </div>
</div>
</div>
</div>

</x-app-layout>
