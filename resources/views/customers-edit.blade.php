<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Edit Customer
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
                    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="name">name* </label>
                            <input class="form-control" type="text" name="name" value="{{$customer->name}}" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">phone* </label>
                            <input class="form-control" type="text" name="phone" value="{{$customer->phone}}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">email* </label>
                            <input class="form-control" type="text" name="email" value="{{$customer->email}}" required>
                        </div>


                        <div class="form-group">
                            <label for="address">address* </label>
                            <input class="form-control" type="text" name="address" value="{{$customer->address}}" required>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>