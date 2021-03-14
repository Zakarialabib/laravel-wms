<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
            {{ __('Gestion des Roles') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">
                {{-- @can('role-create') --}}
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3"
                    href="{{ route('roles.create') }}"> Nouveau Role</a>
               {{-- @endcan --}}
                @if (session()->has('success'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                    role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
                @endif
                <table class="min-w-full my-3 divide-y divide-gray-200">
                    <tr class="bg-gray-100">
                        <th class="">No</th>
                        <th class="px-4 py-2">Nom</th>
                        <th class="px-4 py-2">Action</th>

                    </tr>
                    @foreach ($roles as $key => $role)
                    <tr>
                        <td class="border">{{ ++$i }}</td>
                        <td class="border px-4 py-2">{{ $role->name }}</td>
                        <td class="border px-4 py-2">
                            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                                href="{{ route('roles.show',$role->id) }}">Affichage</a>
                             {{--  @can('role-edit')  --}}
                            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                href="{{ route('roles.edit',$role->id) }}">Modifier</a>
                            {{--  @endcan  --}}

                    {{--  @can('role-delete')  --}}

                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
                            $role->id],'style'=>'display:inline']) !!}

                            {!! Form::submit('Supprimer', ['class' => 'bg-red-500 hover:bg-red-700 text-white font-bold
                            py-2 px-4 rounded']) !!}

                            {!! Form::close() !!}

               {{--  @endcan  --}}
                     </td>
                    </tr>
                    @endforeach
                </table>
                {!! $roles->render() !!}
            </div>
        </div>
</x-app-layout>
