<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-4 px-4 py-4">
    <h3 class="panel-heading">Create Stock</h3>
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
            <label for="product id">product id* </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="product_id"  wire:model="product_id" required>
            @error('product_id') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="quantity">quantity* </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="quantity"  wire:model="quantity" required>
            @error('quantity') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold my-4 px-4 py-2 rounded" wire:click.prevent="store()">Submit</button>
        </div>
    </form>
</div>
</div>
</div>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <h3 class="panel-heading">Stock list</h3>

            <input type="text" wire:model="search"  class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Recherche par Nom Client" />
          
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th>ID.</th>
                        <th class="px-2 py-1">Product Name</th>
                        <th class="px-4 py-1">quantity</th>
                        <th class="px-2 py-1">Created At</th>
                        <th class="px-2 py-1">Updated At</th>
                        <th class="px-4 py-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($stock as $stock)
                        <td class="border px-2 py-1">{{ $stock->id }}</td>
                        <td class="border px-4 py-1">{{ $stock->product_id }}</td>
                        <td class="border px-4 py-1">{{ $stock->quantity}} </td>
                        <td class="border px-2 py-1">{{ $stock->created_at }}</td>
                        <td class="border px-2 py-1">{{ $stock->updated_at }}</td>
                        <td class="border px-4 py-1">
                    {{--     @can('stock-delete')    --}}                     
                
                    <a href="{{ route('stock.edit', $stock->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-3 rounded">Edit</a>

                    <form action="{{ route('stock.destroy', $stock->id)}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold p-1 rounded" type="submit">Delete</button>
                    </form>  
               {{--   
                    <button wire:click="edit({{ $stock->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-3 rounded">Modifier</button>
                         <button wire:click="delete({{ $stock->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold p-1 rounded">Supprimer</button>

                         --}}     
                         {{--  @endcan --}}
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{--  $stock->links('layouts.tailwind') --}}

        </div>
