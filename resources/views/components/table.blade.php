<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="w-full divide-y divide-gray-200">

                <x-table.thead>
                    {{ $thead }}
                </x-table.thead>

                {{ $slot }}

            </table>
        </div>
    </div>
</div>
