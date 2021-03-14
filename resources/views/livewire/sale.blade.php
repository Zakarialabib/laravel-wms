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
    <h3 class="panel-heading">Create sale</h3>
    <div class="panel-body">
<div>
    <form wire:submit.prevent="store">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
    <div class="form-group">
        <label for="product_id">Product ID*</label>
        <select name="product_id"  wire:model="product_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  >
            <option></option>
            @foreach ($products as $product)
            <option value="{{$product->id}}" >{{ $product->name }} - {{$product->id}}</option>
            @endforeach
            </select>
            @error('product_id') <span class="text-red-500">{{ $message }}</span>@enderror
   </div>
   
        <div class="form-group">
            <label for="user">Livreur*</label>
        <select name="user_id" wire:model="user_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
            <option></option>
            @foreach($users as $user)
           <option value="{{$user->id}}">{{$user->name}}</option>
           @endforeach
          </select>
          @error('user_id') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label for="quantity">quantity* </label>
            <input class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" type="text" name="quantity"   wire:model="quantity" >
            @error('quantity') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        
        <div class="form-group">
            <label for="status">Status* </label>
            <select wire:model="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="status">
            <option></option>    
            <option name="status" value='paid'>Paid</option>
            <option name="status" value='not-paid'>Not paid</option>
            </select>
            @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
        </div> 

        <div class="form-group">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full rounded" wire:click="store()">Submit</button>
        </div>
    </form>
</div>
</div>
</div>
        <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">

            <h3 class="panel-heading">Sale list</h3>

            <input type="text" wire:model="search"  class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-blue-900 my-5  ocus:shadow-outline" placeholder="Recherche par Nom Client" />
          
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th>ID.</th>
                        <th scope="col" class="px-5 py-3   border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Product ID</th>
                        <th scope="col" class="px-5 py-3  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">DeliveryMan</th>
                        <th scope="col" class="px-5 py-3  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Quantity</th>
                        <th scope="col" class="px-5 py-3  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Status</th>
                        <th scope="col" class="px-5 py-3   border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Created At</th>
                        <th scope="col" class="px-5 py-3   border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Updated At</th>
                        <th scope="col" class="px-5 py-3  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($sales as $sale)
                         <td class="px-5 py-5 border-b border-gray-200  text-sm">{{ $sale->id }}</td>
                         <td class="px-5 py-5 border-b border-gray-200  text-sm">{{ $product->name }}</td>
                         <td class="px-5 py-5 border-b border-gray-200  text-sm">{{ $user->name}} </td>
                         <td class="px-5 py-5 border-b border-gray-200  text-sm"> {{ $sale->quantity }} </td>
                         <td class="px-5 py-5 border-b border-gray-200  text-sm">{{ $sale->status }}</td>
                         <td class="px-5 py-5 border-b border-gray-200  text-sm">{{ $sale->created_at }}</td>
                         <td class="px-5 py-5 border-b border-gray-200  text-sm">{{ $sale->updated_at }}</td>
                        <td class="border inline-flex px-5 py-3">
                    {{--     @can('sales-delete')    --}}                     
                
                    <a href="{{ route('sales.edit', $sale->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold my-4 px-4 py-2 rounded">Edit</a>

             {{--        <form action="{{ route('sales.destroy', $sale->id)}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold my-4 px-4 py-2 rounded" type="submit">Delete</button>
                    </form>  --}}  
               {{--   
                    <button wire:click="edit({{ $sale->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded">Modifier</button>--}}
                     <button wire:click="delete({{ $sale->id }})"  class="bg-red-500 hover:bg-red-700 text-white font-bold px-4 py-2 rounded">Supprimer</button>

                           
                         {{--  @endcan --}}
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $sales->links('layouts.tailwind') }}

        </div>
