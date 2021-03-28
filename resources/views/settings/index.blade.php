<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
    Setting
    </h2>
</x-slot>

    @include('partials.flash')
    <div class="py-12">
        <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="row">
        <div class="col-md-6">
                    @include('settings.includes.general')
                </div>
                <div class="col-md-6">
                    @include('settings.includes.logo')
                </div>
                <div class="col-md-6">
                    @include('settings.includes.footer_seo')
                </div>
                <div class="col-md-6">
                    @include('settings.includes.social_links')
                </div>
                <div class="col-md-6">
                    @include('settings.includes.analytics')
                </div>
                <div class="col-md-6">
                    @include('settings.includes.payments')
                </div>
            </div>
        </div>
    </div>

    </div>
    </x-app-layout>
