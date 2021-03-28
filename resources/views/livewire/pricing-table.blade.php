<div class="border-2 border-green-600 shadow-xl">
    <input type="text" wire:model="search"  class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-blue-900 my-5  ocus:shadow-outline" placeholder="Recherche Region ou Ville" />
    <table class="table-auto w-full divide-y divide-gray-200">
        <thead class=" ">
            <tr class="">
                <th class="hidden">No.</th>
                <th class="py-2 px-3 bg-green-550  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Ville</th>
                <th class="py-2 px-3 bg-green-550  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">Tarif</th>
            </tr>
        </thead>
        <tbody class=" ">
            <tr>
            @foreach ($pricings as $pricing)
                <td class="hidden">{{ $pricing->id }}</td>
                <td class="py-2 px-3 border-b border-gray-200  text-gray-800  bg-white text-left text-sm">{{ $pricing->city }}</td>
                <td class="py-2 px-3 border-b border-gray-200  text-gray-800  bg-white text-left text-sm">{{ $pricing->price }}</td>                
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $pricings->links('layouts.tailwind') }}
</div>
