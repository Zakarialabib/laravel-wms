<nav class="flex items-center border-b-2 px-3 flex-wrap bt-5 f bg-green-550">
    <div class="p-2 mr-4 inline-flex items-center">
        <a class="no-underline hover:text-white hover:no-underline" href="#">
            <x-jet-application-logo class="block h-12 w-auto" />
        </a>
    </div>
    <div class="inline-flex p-3 rounded lg:hidden ml-auto outline-none nav-toggler">
        <button id="nav-toggle" class="flex items-center px-3 py-2 border">
            <svg class="fill-current h-3 w-3 text-black-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>-</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>
    <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="nav-content">
        <ul
            class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">
            @if (Route::has('login'))
                @auth
                    <li class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-center items-center justify-center">
                        <a class="text-black-500 no-underline hover:text-white hover:text-underline"
                            href="#our-solutions">Solutions</a>
                    </li>
                    <li class="lg:inline-flex lg:w-auto w-full px-3 rounded text-center items-center justify-center ">
                        <a class="text-black-500 no-underline hover:text-white hover:text-underline"
                            href="{{ route('dashboard.index') }}">Dashboard</a>
                    </li>
                    <li class="lg:inline-flex lg:w-auto w-full px-3 rounded text-center items-center justify-center">
                        <a class="text-black-500 no-underline hover:text-white hover:text-underline"
                            href="{{ url('/sales') }}">Sales</a>
                    </li>
                    <li class="lg:inline-flex lg:w-auto w-full px-3 rounded text-center items-center justify-center">
                        <a class="text-black-500 no-underline hover:text-white hover:text-underline"
                            href="{{ url('/deliveries') }}">Delivery</a>
                    </li>
                    <li class="lg:inline-flex lg:w-auto w-full px-3 rounded text-center items-center justify-center">
                        <a class="text-black-500 no-underline hover:text-white hover:text-underline"
                            href="{{ url('/stock') }}">Stock</a>
                    </li>
                    <li class="lg:inline-flex lg:w-auto w-full px-3 rounded text-center items-center justify-center">
                        <a class="text-black-500 no-underline hover:text-white hover:text-underline"
                            href="{{ url('/products') }}">Product</a>
                    </li>
                    <li class="lg:inline-flex lg:w-auto w-full px-3 rounded text-center items-center justify-center">
                        <a class="text-black-500 no-underline hover:text-white hover:text-underline"
                            href="{{ url('/settings') }}">Settings</a>
                    </li>
                    <li class="lg:inline-flex lg:w-auto w-full px-3 rounded text-center items-center justify-center">
                        <a class="text-black-500 no-underline hover:text-white hover:text-underline"
                            href="{{ url('/logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">Deconnexion </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                @else

                    <li class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-center items-center justify-center">
                        <a class="text-black-500 no-underline hover:text-white hover:text-underline">Accueil</a>
                    </li>
                    <li class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-center items-center justify-center">
                        <a class="text-black-500 no-underline hover:text-white hover:text-underline"
                            href="#our-solutions">Solutions</a>
                    </li>
                    <!--     <li class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-center items-center justify-center">
         <a class="text-black-500 no-underline hover:text-white hover:text-underline" href="#pricing" >Tarifs</a>
        </li>
                   <li class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-center items-center justify-center">
         <a class="text-black-500 no-underline hover:text-white hover:text-underline" href="#about-us" >Qui sommes nous</a>
        </li>-->
                    <li class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-center items-center justify-center">
                        <a class="text-black-500 no-underline hover:text-white hover:text-underline" href="#contact">Contact</a>
                    </li>
                    <li class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-center items-center justify-center">
                        <a class="text-black-500 no-underline hover:text-white hover:text-underline"
                            href="{{ route('login') }}">Espace Client</a>
                    </li>
                    @if (Route::has('register'))
                        <li
                            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-center items-center justify-center">
                            <a class="text-black-500 no-underline  hover:text-white hover:text-underline"
                                href="{{ route('register') }}">Inscription</a>
                        </li>
                    @endif
                @endauth
            @endif
        </ul>
    </div>

</nav>
