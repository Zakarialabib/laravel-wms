<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
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
                            <input class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" type="number" name="sale_id" value="{{$delivery->sale_id}}" >
                        </div>

                        <div class="form-group">
                            <label for="name">Recipient* </label>
                            <input class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" type="text" name="recipient" value="{{$delivery->recipient}}" >
                        </div>

                        <div class="form-group">
                            <label for="address">Address* </label>
                            <input class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" type="text" name="address" value="{{$delivery->address}}" >
                        </div>

                        <div class="form-group">
                            <label for="expected_arrival">Expected Arrival* </label>
                            <input class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" type="date" name="expected_arrival" value="{{$delivery->expected_arrival}}" >
                        </div>

                        <div class="form-group">
                            <label for="actual_arrival">Actual Arrival </label>
                            <input class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" type="date" name="actual_arrival" value="{{$delivery->actual_arrival}}">
                        </div>

                        <div class="form-group">
                            <label for="status">Delivery Status* </label>
                            <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="status" >
                                <option value="{{$delivery->status}}">processing</option>
                                <option value="processing">processing</option>
                                <option value="shipping">shipping</option>
                                <option value="complete">complete</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Description* </label>
                            <textarea class="p-3 leading-5 bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-purple-500"" type="text" name="description" value="{{$delivery->description}}" ></textarea>
                        </div>

                        <div class="form-group">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>