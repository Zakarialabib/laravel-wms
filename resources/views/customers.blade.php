<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add customer') }}
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
                    <form action="{{ route('customers.store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


                        <div class="form-group">
                            <label for="livreur">name* </label>
                            <input class="form-control" type="text" name="name" required>
                        </div>


                        <div class="form-group">
                            <label for="recipient">phone* </label>
                            <input class="form-control" type="text" name="phone" required>
                        </div>

                        <div class="form-group">
                            <label for="address">email* </label>
                            <input class="form-control" type="text" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="description">address* </label>
                            <input class="form-control" type="text" name="address" required>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        <div class="panel panel-default">
            <div class="panel-heading">Customer list</div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>name</td>
                                    <td>phone</td>
                                    <td>email</td>
                                    <td>address</td>
                                    <td>Created At</td>
                                    <td>Updated At</td>
                                    <td colspan=2>Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                <tr>
                                    <td>{{$customer->id}}</td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->phone}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$customer->address}}</td>
                                    <td>{{$customer->created_at}}</td>
                                    <td>{{$customer->updated_at}}</td>
                                    <td>
                                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('customers.destroy', $customer->id)}}" method="POST">
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
