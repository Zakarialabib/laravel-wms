<div class="panel panel-default">
    <div class="panel-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @if (session()->has('message'))
            <div class="bg-green-300 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
              <div class="flex">
                <div>
                  <p class="text-sm">{{ session('message') }}</p>
                </div>
              </div>
            </div>
        @endif
        <h3 class="panel-heading">Create Pricing</h3>

        <form wire:submit.prevent="store">
            <div class="form-group">
                <label for="region">Region* </label>
                <input class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" type="text" name="region" :value="old('region')" wire:model="region" >
                @error('region') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="city">Ville* </label>
                <input class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" type="text" name="city" :value="old('city')"  wire:model="city" >
                @error('city') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="Tarif">Tarif* </label>
                <input class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline" type="text" name="price" :value="old('price')"  wire:model="price" >
                @error('price') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold my-5 py-2 w-full rounded" >Enregistrer</button>
            </div>
        </form>
    </div>
</div>
<input type="text" wire:model="search"  class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-blue-900 my-5  ocus:shadow-outline" placeholder="Recherche Region ou Ville" />
<div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Region</td>
                                <td>Ville</td>
                                <td>Tarif</td>
                                <td>Created At</td>
                                <td>Updated At</td>
                                <td colspan=2>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pricings as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->region}}</td>
                                <td>{{$p->city}}</td>
                                <td>{{$p->price}}</td>
                                <td>{{$p->created_at}}</td>
                                <td>{{$p->updated_at}}</td>
                                <td>
                                    <button wire:click="edit({{ $p->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modifier</button>
                                    <button wire:click="delete({{ $p->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $pricings->links('layouts.tailwind') }}
                    <div>
                    </div>
                </div>
            </div>
        </div>
