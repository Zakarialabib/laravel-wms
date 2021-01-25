<div>
    <input type="text" wire:model="search"  class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Recherche Region ou Ville" />
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr class="">
                <th class="hidden">No.</th>
                <th class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Region</th>
                <th class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Ville</th>
                <th class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Tarif</th>
            </tr>
        </thead>
        <tdescription>
            <tr>
            @foreach ($pricings as $pricing)
                <td class="hidden">{{ $pricing->id }}</td>
                <td class="px-5 py-3 border-b border-gray-200  text-gray-800  bg-white text-left text-sm">{{ $pricing->region }}</td>
                <td class="px-5 py-3 border-b border-gray-200   text-gray-800 bg-white text-left text-sm">{{ $pricing->city }}</td>
                <td class="px-5 py-3 border-b border-gray-200  text-gray-800 bg-white text-left text-sm">{{ $pricing->price }}</td>                
            </tr>
            @endforeach
        </tdescription>
    </table>
    {{ $pricings->links('layouts.tailwind') }}
</div>
