<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-4 px-4 py-4">
    <h3 class="panel-heading">Create Delivery</h3>
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
            <label for="sale_id">Sale_id* </label>
            <select name="sale_id"  wire:model="sale_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option></option>
                @foreach ($sales as $sale)
                <option value="{{$sale->id}}" >{{ $sale->id }}</option>
                @endforeach
                </select>
                @error('sale_id') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
          
        <div class="form-group">
            <label for="tracking_number">tracking number* </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="tracking_number"  wire:model="tracking_number" required>
            @error('tracking_number') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="recipient">recipient* </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="recipient"  wire:model="recipient" required>
            @error('recipient') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="address">address* </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="address"   wire:model="address" required>
            @error('address') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label for="price">Price* </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="price"   wire:model="price" required>
            @error('price') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label for="expected_arrival">Expected Arrival* </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="expected_arrival"  wire:model="expected_arrival" required>
            @error('expected_arrival') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="actual_arrival">Actual Arrival: </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="actual_arrival"  wire:model="actual_arrival" >
            @error('actual_arrival') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label for="status">status* </label>
            <select wire:model="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="status">
            <option></option>    
            <option name="status" value='processing'>processing</option>
            <option name="status" value='shipping'>shipping</option>
            <option name="status" value='complete'>complete</option>
            </select>
            @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
        </div> 

        <div class="form-group">
            <label for="description">Description*: </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="description"  wire:model="description" required >
            @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold my-4 px-4 py-2 rounded" wire:click.prevent="store()">Submit</button>
        </div>
    </form>
</div>
</div>
</div>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <h3 class="panel-heading">Delivery list</h3>

            <input type="text" wire:model="search"  class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Recherche par Nom Client" />
          
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th>ID.</th>
                        <th class="px-2 py-1">Sale ID</th>
                        <th class="px-4 py-1">Recipient</th>
                        <th class="px-4 py-1">Address</th>
                        <th class="px-4 py-1">Expected Arrival</th>
                        <th class="px-2 py-1">Actual Arrival</th>
                        <th class="px-2 py-1">Status</th>
                        <th class="px-4 py-1">Description</th>
                        <th class="px-4 py-1">Created At</th>
                        <th class="px-2 py-1">Updated At</th>
                        <th class="px-2 py-1">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($deliveries as $delivery)
                        <td class="border px-2 py-1">{{ $delivery->id }}</td>
                        <td class="border px-4 py-1">{{ $delivery->sale_id }}</td>
                        <td class="border px-4 py-1">{{ $delivery->recipient}} </td>
                        <td class="border px-4 py-1"> {{ $delivery->address }} </td>
                        <td class="border px-4 py-1">{{ $delivery->expected_arrival }}</td>
                        <td class="border px-2 py-1">{{ $delivery->actual_arrival }}</td>
                        <td class="border px-2 py-1">{{ $delivery->status }}</td>
                        <td class="border px-4 py-1"> {{ $delivery->description }} </td>
                        <td class="border px-4 py-1">{{ $delivery->created_at }}</td>
                        <td class="border px-2 py-1">{{ $delivery->updated_at }}</td>
                        <td class="border px-4 py-1">
                    {{--     @can('deliveries-delete')    --}}                     
                
                    <a href="{{ route('deliveries.edit', $delivery->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-3 rounded">Edit</a>

                    <form action="{{ route('deliveries.destroy', $delivery->id)}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold p-1 rounded" type="submit">Delete</button>
                    </form>  
               {{--   
                    <button wire:click="edit({{ $delivery->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-3 rounded">Modifier</button>
                         <button wire:click="delete({{ $delivery->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold p-1 rounded">Supprimer</button>

                         --}}     
                         {{--  @endcan --}}
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

              
            {{--    {{ $deliveries->links('layouts.tailwind') }}   --}}

        </div>
