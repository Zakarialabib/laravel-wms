<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Edit delivery
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
                    <form action="{{ route('deliveries.update', $delivery->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="sale_id">Sale ID* </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="sale_id" value="{{$delivery->sale_id}}" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Recipient* </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="recipient" value="{{$delivery->recipient}}" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address* </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="address" value="{{$delivery->address}}" required>
                        </div>

                        <div class="form-group">
                            <label for="expected_arrival">Expected Arrival* </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="expected_arrival" value="{{$delivery->expected_arrival}}" required>
                        </div>

                        <div class="form-group">
                            <label for="actual_arrival">Actual Arrival </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="actual_arrival" value="{{$delivery->actual_arrival}}">
                        </div>

                        <div class="form-group">
                            <label for="status">Delivery Status* </label>
                            <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="status" required>
                                <option>processing</option>
                                <option>shipping</option>
                                <option>complete</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Description* </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="description" value="{{$delivery->description}}" required>
                        </div>

                        <div class="form-group">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-3 rounded" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>