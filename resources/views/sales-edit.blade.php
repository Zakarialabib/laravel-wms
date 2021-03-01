<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Edit sale
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
                    <form action="{{ route('sales.update', $sale->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="product_id">Product ID* </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="product_id" value="{{$sale->product_id}}" required>
                        </div>

                        <div class="form-group">
                            <label for="user_id">Livreur* </label>
                            <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="user_id">
                            @foreach ($users as $user)
                            <option value="{{$user->id}}" >{{ $user->name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="status">status* </label>
                            <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  name="status">
                            <option name="status" value="{{$sale->status}}" >{{$sale->status}}</option>
                            <option name="status" value='paid'>Paid</option>
                            <option name="status" value='not-paid'>Not paid</option>
                            </select>
                        </div>
                        

                        <div class="form-group">
                            <label for="quantity">Quantity* </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="quantity" value="{{$sale->quantity}}" required>
                        </div>
                        

                        <div class="form-group">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-3 rounded" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>