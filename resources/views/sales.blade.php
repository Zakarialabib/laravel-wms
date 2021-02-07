<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Sales Management
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
                    <form action="{{ route('sales.store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="product_id">Product ID* </label>
                            <select class="form-control" name="product_id" required>
                                @foreach ($products as $product)
                                <option value="{{$product->id}}" >{{ $product->name }}</option>
                                @endforeach
                                </select>
                        </div>

            <!--   
                            <input type="hidden" name="setting_id">

                            <div class="form-group">
                            <label for="settings_id">Setting </label>
                            <select>
                        
                            </select>
                            </div>

                          -->
                        
                        <div class="form-group">
                            <label for="status">status* </label>
                            <select class="form-control" name="status">
                            <option ></option>
                            <option name="status" value='paid'>Paid</option>
                            <option name="status" value='not-paid'>Not paid</option>
                            </select>
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
                            <label for="quantity">Quantity* </label>
                            <input class="form-control" type="number" name="quantity" required>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Sales list</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Product ID</td>
                                        <td>DeliveryMan</td>
                                        <td>Quantity</td>
                                        <td>Status</td>
                                        <td>Created At</td>
                                        <td>Updated At</td>
                                        <td colspan=2>Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sales as $sale)
                                    <tr>
                                        <td>{{$sale->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$sale->quantity}}</td>
                                        <td>{{$sale->status}}</td>
                                        <td>{{$sale->created_at}}</td>
                                        <td>{{$sale->updated_at}}</td>
                                        <td>
                                            <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('sales.destroy', $sale->id)}}" method="POST">
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
    </div>
</div>
</x-app-layout>
