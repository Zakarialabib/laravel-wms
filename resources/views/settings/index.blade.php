<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold justify-center flex text-xl text-gray-800 leading-tight">
            Setting
        </h2>
    </x-slot>

    @include('partials.flash')
    <div class="py-12">

        <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
            <ul class="list-reset flex border-b">
                <li class="-mb-px mr-1">
                  <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="#generalsettings">General Settings</a>
                </li>
                <li class="mr-1">
                  <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="#logo">Logo</a>
                </li>
                <li class="mr-1">
                  <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="#footerseo">Footer & SEO</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#sociallinks">Social Links</a>
                  </li>
                <li class="mr-1">
                  <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#analytics">Analytics</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#paymentsettings">Payments Gateway</a>
                  </li>

              </ul>
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
