<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-4 px-4 py-4">
    <h3 class="panel-heading">Create sale</h3>
    <div class="panel-body">
<div>
    <form >
        @if (session()->has('message'))
        <div class="bg-green-300 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
          <div class="flex">
            <div>
              <p class="text-sm">{{ session('message') }}</p>
            </div>
          </div>
        </div>
    @endif
    <div class="form-group">
        <label for="product_id">Product ID* </label>
        <select name="product_id"  wire:model="product_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  required>
            <option></option>
            @foreach ($products as $product)
            <option value="{{$product->id}}" >{{ $product->name }} - {{$product->id}}</option>
            @endforeach
            </select>
            @error('product_id') <span class="text-red-500">{{ $message }}</span>@enderror

          </div>
   
        <div class="form-group">
            <label for="user">Livreur* </label>
        <select name="user_id" wire:model="user_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            <option></option>
            @foreach($users as $user)
           <option value="{{$user->id}}">{{$user->name}}</option>
           @endforeach
          </select>
          @error('user_id') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label for="quantity">quantity* </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="quantity"   wire:model="quantity" required>
            @error('quantity') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        
        <div class="form-group">
            <label for="status">status* </label>
            <select wire:model="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="status">
            <option></option>    
            <option name="status" value='paid'>Paid</option>
            <option name="status" value='not-paid'>Not paid</option>
            </select>
            @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
        </div> 

        <div class="form-group">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold my-4 px-4 py-2 rounded" wire:click.prevent="store()">Submit</button>
        </div>
    </form>
</div>
</div>
</div>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <h3 class="panel-heading">Sale list</h3>

            <input type="text" wire:model="search"  class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Recherche par Nom Client" />
          
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th>ID.</th>
                        <th class="px-2 py-1">Product ID</th>
                        <th class="px-4 py-1">DeliveryMan</th>
                        <th class="px-4 py-1">Quantity</th>
                        <th class="px-4 py-1">Status</th>
                        <th class="px-2 py-1">Created At</th>
                        <th class="px-2 py-1">Updated At</th>
                        <th class="px-4 py-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($sales as $sale)
                        <td class="border px-2 py-1">{{ $sale->id }}</td>
                        <td class="border px-4 py-1">{{ $product->name }}</td>
                        <td class="border px-4 py-1">{{ $user->name}} </td>
                        <td class="border px-4 py-1"> {{ $sale->quantity }} </td>
                        <td class="border px-4 py-1">{{ $sale->status }}</td>
                        <td class="border px-2 py-1">{{ $sale->created_at }}</td>
                        <td class="border px-2 py-1">{{ $sale->updated_at }}</td>
                        <td class="border px-4 py-1">
                    {{--     @can('sales-delete')    --}}                     
                
                    <a href="{{ route('sales.edit', $sale->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-3 rounded">Edit</a>

                    <form action="{{ route('sales.destroy', $sale->id)}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold p-1 rounded" type="submit">Delete</button>
                    </form>  
               {{--   
                    <button wire:click="edit({{ $sale->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-3 rounded">Modifier</button>
                         <button wire:click="delete({{ $sale->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold p-1 rounded">Supprimer</button>

                         --}}     
                         {{--  @endcan --}}
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $sales->links('layouts.tailwind') }}

        </div>
