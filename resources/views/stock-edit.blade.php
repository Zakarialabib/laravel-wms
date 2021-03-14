<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
    Edit Stock
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
                    <form action="{{ route('stock.update', $stock->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="product_id">Product ID* </label>
                            <input class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" type="number" name="product_id" value="{{$stock->product_id}}" >
                        </div>

                        <div class="form-group">
                            <label for="quantity">Quantity* </label>
                            <input class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" type="text" name="quantity" value="{{$stock->quantity}}" >
                        </div>

                        <div class="form-group">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>