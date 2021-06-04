<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
    Edit Pricing
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
                            <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" type="text" name="region" value="{{$pricing->region}}" >
                        </div>

                        <div class="form-group">
                            <label for="name">Ville* </label>
                            <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" type="text" name="city" value="{{$pricing->city}}" >
                        </div>

                        <div class="form-group">
                            <label for="name">Tarif* </label>
                            <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" type="text" name="price" value="{{$pricing->price}}" >
                        </div>

                        <div class="form-group">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded" type="submit">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </x-app-layout>
