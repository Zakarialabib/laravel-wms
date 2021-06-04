<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome to your delivery System!
        </h2>
    </x-slot>
    <div>
        {{-- <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
            <livewire:transactions />
        </div> --}}
        <div class="py-12">
            <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
                <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow-xl sm:rounded-lg">

                        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                            <div class="p-6">
                                <div class="flex items-center">

                                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href=""> Total
                                            SKUs
                                        </a></div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-sm text-gray-500">
                                        {{ $stock_data }}
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                                <div class="flex items-center">

                                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="">Total
                                            deliveries</a></div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-sm text-gray-500">
                                        {{ $deliveries_data }}
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 border-t border-gray-200">
                                <div class="flex items-center">

                                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="">Total
                                            sales</a></div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-sm text-gray-500">
                                        {{ $sales_data }}
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 border-t border-gray-200 md:border-l">
                                <div class="flex items-center">

                                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Total Products
                                    </div>
                                </div>
                                <div class="ml-12">
                                    <div class="mt-2 text-sm text-gray-500">
                                        {{ $products_data }}
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 border-t border-gray-200">
                                <div class="flex items-center">
                                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="">Total
                                            Customers</a></div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-sm text-gray-500">
                                        {{ $customers_data }}
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 border-t border-gray-200 md:border-l">
                                <div class="flex items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                        class="w-8 h-8 text-gray-400">
                                        <path
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                        </path>
                                    </svg>
                                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Total</div>
                                </div>
                                <div class="ml-12">
                                    <div class="mt-2 text-sm text-gray-500">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
