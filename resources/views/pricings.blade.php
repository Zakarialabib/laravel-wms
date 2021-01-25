<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
     Liste des Tarifs
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
            @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{ route('pricings.store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="name">Region* </label>
                            <input class="form-control" type="text" name="region" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Ville* </label>
                            <input class="form-control" type="text" name="city" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Tarif* </label>
                            <input class="form-control" type="text" name="price" required>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Region</td>
                                        <td>Ville</td>
                                        <td>Tarif</td>
                                        <td>Created At</td>
                                        <td>Updated At</td>
                                        <td colspan=2>Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pricings as $pricing)
                                    <tr>
                                        <td>{{$pricing->id}}</td>
                                        <td>{{$pricing->region}}</td>
                                        <td>{{$pricing->city}}</td>
                                        <td>{{$pricing->price}}</td>
                                        <td>{{$pricing->created_at}}</td>
                                        <td>{{$pricing->updated_at}}</td>
                                        <td>
                                            <a href="{{ route('pricings.edit', $pricing->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('pricings.destroy', $pricing->id)}}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </x-app-layout>
