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
                            <input class="form-control" type="number" name="product_id" value="{{$sale->product_id}}" required>
                        </div>

                        <div class="form-group">
                            <label for="quantity">Quantity* </label>
                            <input class="form-control" type="text" name="quantity" value="{{$sale->quantity}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="user_id">Livreur* </label>
                            <select class="form-control" name="user_id">
                            @foreach ($users as $user)
                            <option value="{{$user->id}}" >{{ $user->name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>