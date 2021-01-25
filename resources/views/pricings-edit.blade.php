<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Modification du Tarif
    </h2>
</x-slot>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{ route('pricings.update', $pricing->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="name">Name* </label>
                            <input class="form-control" type="text" name="region" value="{{$pricing->region}}" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Ville* </label>
                            <input class="form-control" type="text" name="city" value="{{$pricing->city}}" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Tarif* </label>
                            <input class="form-control" type="text" name="price" value="{{$pricing->price}}" required>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </x-app-layout>
