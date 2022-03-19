<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
    Nouveau Role
    </h2>
</x-slot>


<div class="py-12">
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


{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

<div class="row">

    <div class="px-6 py-4">

        <div class="form-group">

            <strong>Nom</strong>

            {!! Form::text('name', null, array('placeholder' => 'Nom','class' => 'p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"')) !!}

        </div>

    </div>

    <div class="px-6 py-4">

        <div class="form-group">

            <strong>Permission:</strong>

            <br/>

            @foreach($permission as $value)

                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}

                {{ $value->name }}</label>

            <br/>

            @endforeach

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3" href="{{ route('roles.index') }}"> Retour</a>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Enregistrer</button>

    </div>

</div>
</div>

</div>

</div>

{!! Form::close() !!}

</x-app-layout>
