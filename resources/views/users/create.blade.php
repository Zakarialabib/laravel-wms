<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
            Nouveau Uilisateur
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">


                @if (count($errors) > 0)

                    <div class="alert alert-danger">

                        <strong>Whoops!</strong> There were some problems with your input.<br><br>

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-3 sm:col-span-3">
                        <strong>Nom:</strong>

                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"']) !!}
                    </div>

                    <div class="col-span-3 sm:col-span-3">
                        <strong>Email:</strong>

                        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"']) !!}

                    </div>

                    <div class="col-span-6 sm:col-span-3">

                        <strong>Téléphone:</strong>

                        {!! Form::text('phone', null, ['placeholder' => 'Phone', 'class' => 'p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"']) !!}

                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <strong>Adresse:</strong>
                        {!! Form::text('address', null, ['placeholder' => 'Address', 'class' => 'p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"']) !!}
                    </div>


                    <div class="col-span-6 sm:col-span-3">
                        <strong>Mot de passe:</strong>
                        <x-password name="password" class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <strong>Confirmation du Mot de passe:</strong>
                        <x-password name="confirm-password" id="confirm-password" type="password" class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" />   
                </div>

                    <div class="col-span-12 sm:col-span-6">

                        <strong>Role:</strong>

                        {!! Form::select('roles[]', $roles, [], ['class' => 'mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm', 'multiple']) !!}

                    </div>

                    <div class="col-span-12 sm:col-span-6  text-center">

                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3"
                            href="{{ route('users.index') }}"> Annuler</a>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Enregitsrer</button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    {!! Form::close() !!}


</x-app-layout>
