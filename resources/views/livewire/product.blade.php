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
    <h3 class="panel-heading">Create product</h3>
    <div class="panel-body">
<div>
    <form wire:submit.prevent="store">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
     
        <div class="form-group">
            <label for="name">Name* </label>
            <input class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" :value="old('name')" wire:model="name" >
            @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="price"> Price* </label>
            <input class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" type="text" name="price" :value="old('price')" wire:model="price" >
            @error('price') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="description"> Description* </label>
            <textarea class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" type="description" name="description" :value="old('description')"   wire:model="description" ></textarea>
            @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full rounded" >Submit</button>
        </div>
    </form>
</div>
</div>
</div>
        <div class="bg-white overflow-hidden sm:rounded-lg px-4 py-4">

            <h3 class="panel-heading">Product list</h3>

            <input type="text" wire:model="search"  class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-blue-900 my-5  ocus:shadow-outline" placeholder="Recherche par Nom Client" />
          
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th>ID.</th>
                        <th scope="col" class="px-5 py-3  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">name</th>
                        <th scope="col" class="px-5 py-3  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">price</th>
                        <th scope="col" class="px-5 py-3  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">description</th>
                        <th scope="col" class="px-5 py-3  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Created At</th>
                        <th scope="col" class="px-5 py-3  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Updated At</th>
                        <th scope="col" class="px-5 py-3  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($products as $product)
                         <td class="px-5 py-5 border-b border-gray-200  text-sm">{{ $product->id }}</td>
                         <td class="px-5 py-5 border-b border-gray-200  text-sm">{{ $product->name }}</td>
                         <td class="px-5 py-5 border-b border-gray-200  text-sm">{{ $product->price}} </td>
                         <td class="px-5 py-5 border-b border-gray-200  text-sm"> {{ $product->description }} </td>
                         <td class="px-5 py-5 border-b border-gray-200  text-sm">{{ $product->created_at }}</td>
                         <td class="px-5 py-5 border-b border-gray-200  text-sm">{{ $product->updated_at }}</td>
                        <td class="border inline-flex px-5 py-3">
                    {{--     @can('products-delete')    --}}                     
                
                    <a href="{{ route('products.edit', $product->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded">Edit</a>
              
                  {{--      <button wire:click="edit({{ $product->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded">Modifier</button>--}}  
                         <button wire:click="delete({{ $product->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold px-5 py-2.5 rounded">Supprimer</button>

                            
                         {{--  @endcan --}}
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links('layouts.tailwind') }}
        </div>
