<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
            {{ __('Edit Role') }}
        </h2>
    </x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

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


{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}

<div class="row">

    <div class="px-6 py-4">

        <div class="form-group">

            <strong>Name:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline')) !!}

        </div>

    </div>

    <div class="px-6 py-4">

        <div class="form-group">

            <strong>Permission:</strong>

            <br/>

            @foreach($permission as $value)

                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}

                {{ $value->name }}</label>

            <br/>

            @endforeach

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('roles.index') }}"> Back</a>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>

    </div>

</div>

{!! Form::close() !!}


</div>
</div>
</div>



</x-app-layout>
