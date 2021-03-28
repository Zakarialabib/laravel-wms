<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-4 px-4 py-4">
    @if (session()->has('message'))
    <div class="bg-green-300 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
      <div class="flex">
        <div>
          <p class="text-sm">{{ session('message') }}</p>
        </div>
      </div>
    </div>
@endif
    <h3 class="panel-heading">Create Delivery</h3>
    <div class="panel-body">
<div> 
    <form wire:submit.prevent="store">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="flex flex-wrap -m-2">
        <div class="w-1/2 p-2">
            <label for="sale_id">Sale_id* </label>
            <select name="sale_id"  wire:model="sale_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option :value="old('sale_id')"></option>
                @foreach ($sales as $sale)
                <option value="{{$sale->id}}" >{{ $sale->id }}</option>
                @endforeach
                </select>
                @error('sale_id') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
          
        <div class="w-1/2 p-2">
            <label for="tracking_number">tracking number* </label>
            <input :value="old('tracking_number')" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" type="text" name="tracking_number"  wire:model="tracking_number" >
            @error('tracking_number') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
    </div>
        <div class="flex flex-wrap -m-2">
        <div class="w-1/2 p-2">
            <label for="recipient">recipient* </label>
            <input :value="old('recipient')" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" type="text" name="recipient"  wire:model="recipient" >
            @error('recipient') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
    <div class="w-1/2 p-2">
        <label for="price">Price* </label>
        <input :value="old('price')" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" type="text" name="price"   wire:model="price" >
        @error('price') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
</div>
        <div class="form-group">
            <label for="address">address* </label>
            <input :value="old('address')"  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" type="text" name="address"   wire:model="address" >
            @error('address') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
    <div class="flex flex-wrap -m-2">
        <div class="w-1/3 p-2">
            <label for="expected_arrival">Expected Arrival* </label>
            <input :value="old('expected_arrival')" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" type="date" name="expected_arrival"  wire:model="expected_arrival" >
            @error('expected_arrival') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="w-1/3 p-2">
            <label for="status">status* </label>
            <select wire:model="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  wire:model="status"  name="status">
            <option :value="old('status')" ></option>    
            <option name="status" value='processing'>processing</option>
            <option name="status" value='shipping'>shipping</option>
            <option name="status" value='complete'>complete</option>
            </select>
            @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
        </div> 
        <div class="w-1/3 p-2">
            <label for="actual_arrival">Actual Arrival: </label>
            <input :value="old('actual_arrival')" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" type="date" name="actual_arrival"  wire:model="actual_arrival" >
            @error('actual_arrival') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
    </div>
     

        <div class="form-group">
            <label for="description">Description*: </label>
            <textarea :value="old('description')" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" type="text" name="description"  wire:model="description"  ></textarea>
            @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full rounded" >Submit</button>
        </div>
    </form>
</div>
</div>
</div>
</div>
<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
<div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">
            <div class="flex flex-row my-5 justify-between w-full">
                <h2 class="text-2xl leading-tight">
          Delivery list
        </h2>
          <div class="flex w-full max-w-sm space-x-3" >
            <input type="text" wire:model="search"  class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Recherche par Nom Client" />
          </div>    
        </div> 
            <table class="table-auto w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">ID.</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Sale ID</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Recipient</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Address</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Expected Arrival</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Actual Arrival</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Status</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Description</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Created At</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Updated At</th>
                        <th class=" border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($deliveries as $delivery)
                        <td class="border-b border-gray-200  text-sm">{{ $delivery->id }}</td>
                        <td class="border-b border-gray-200  text-sm">{{ $delivery->sale_id }}</td>
                        <td class="border-b border-gray-200  text-sm">{{ $delivery->recipient}} </td>
                        <td class="border-b border-gray-200  text-sm"> {{ $delivery->address }} </td>
                        <td class="border-b border-gray-200  text-sm">{{ $delivery->expected_arrival }}</td>
                        <td class="border-b border-gray-200  text-sm">{{ $delivery->actual_arrival }}</td>
                        <td class="border-b border-gray-200  text-sm">{{ $delivery->status }}</td>
                        <td class="border-b border-gray-200  text-sm"> {{ $delivery->description }} </td>
                        <td class="border-b border-gray-200  text-sm">{{ $delivery->created_at }}</td>
                        <td class="border-b border-gray-200  text-sm">{{ $delivery->updated_at }}</td>
                        <td class="border inline-flex px-3 py-3">
                    {{--     @can('deliveries-delete')    --}}                     
                
                    <a href="{{ route('deliveries.edit', $delivery->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded">Edit</a>
 {{--   
                    <form action="{{ route('deliveries.destroy', $delivery->id)}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold px-4 py-2 rounded" type="submit">Delete</button>
                    </form>  
              
                    <button wire:click="edit({{ $delivery->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded">Modifier</button>    --}}  
                         <button wire:click="delete({{ $delivery->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold px-5 py-2.5 rounded">Supprimer</button>

                        
                         {{--  @endcan --}}
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

              
            {{--    {{ $deliveries->links('layouts.tailwind') }}   --}}

        </div>
    </div>
</div>