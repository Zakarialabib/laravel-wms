<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
            {{ __('Gestion Utilisateurs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3"
                    href="{{ route('users.create') }}"> Nouveau utilisateur </a>
                @if (session()->has('success'))
                    <div class="bg-green-550 border-t-4 border-green-300 rounded-b text-black font-bold px-4 py-3 shadow-md my-3"
                        role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif


                <table class="table-auto w-full my-3 divide-y divide-gray-200">

                    <tr class="bg-gray-100">

                        <th class="">No</th>
                        <th class="px-4 py-2">Nom</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">telephone</th>
                        <th class="px-4 py-2">Roles</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>

                    @foreach ($data as $key => $user)

                        <tr>

                            <td class="border">{{ $user->id }}</td>
                            <td class="border px-4 py-2">{{ $user->name }}</td>
                            <td class="border px-4 py-2">{{ $user->email }}</td>
                            <td class="border px-4 py-2">{{ $user->phone }}</td>
                            <td class="border px-4 py-2">
                                @if (!empty($user->getRoleNames()))
                                    @foreach ($user->getRoleNames() as $v)
                                        <label class="badge badge-success">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </td>
                            <td>
                              {{-- <x-toggle /> --}}
                                <a href="{{ route('users.approve', $user->id) }}"
                                    class="bg-indigo-500 hover:bg-indigo-700 p-2 text-white font-bold rounded">Approver</a>
                                <a class="bg-green-500 hover:bg-green-700 text-white font-bold p-2 rounded"
                                    href="{{ route('users.show', $user->id) }}">Voir</a>
                                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 rounded"
                                    href="{{ route('users.edit', $user->id) }}">Modifier</a>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                {!! Form::submit('Supprimer', ['class' => 'bg-red-500 hover:bg-red-700 text-white font-bold p-2 rounded']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach

                </table>


                {!! $data->render() !!}

            </div>
        </div>
    </div>

</x-app-layout>
