
<main class="bg-gray-100 dark:bg-gray-800 rounded-2xl relative h-screen overflow-hidden relative">
    <div class="flex items-start justify-between">
        <div class="h-screen hidden lg:block my-4 ml-4 shadow-lg relative w-80">
            <div class="bg-white h-full rounded-2xl dark:bg-gray-700">
                <div class="flex items-center justify-center pt-6">
                    <svg width="35" height="30" viewBox="0 0 256 366" version="1.1" preserveAspectRatio="xMidYMid">
                        <defs>
                            <linearGradient x1="12.5189534%" y1="85.2128611%" x2="88.2282959%" y2="10.0225497%" id="linearGradient-1">
                                <stop stop-color="#FF0057" stop-opacity="0.16" offset="0%">
                                </stop>
                                <stop stop-color="#FF0057" offset="86.1354%">
                                </stop>
                            </linearGradient>
                        </defs>
                        <g>
                            <path d="M0,60.8538006 C0,27.245261 27.245304,0 60.8542121,0 L117.027019,0 L255.996549,0 L255.996549,86.5999776 C255.996549,103.404155 242.374096,117.027222 225.569919,117.027222 L145.80812,117.027222 C130.003299,117.277829 117.242615,130.060011 117.027019,145.872817 L117.027019,335.28252 C117.027019,352.087312 103.404567,365.709764 86.5997749,365.709764 L0,365.709764 L0,117.027222 L0,60.8538006 Z" fill="#001B38">
                            </path>
                            <circle fill="url(#linearGradient-1)" transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) " cx="147.013244" cy="147.014675" r="78.9933938">
                            </circle>
                            <circle fill="url(#linearGradient-1)" opacity="0.5" transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) " cx="147.013244" cy="147.014675" r="78.9933938">
                            </circle>
                        </g>
                    </svg>
                </div>
                <nav class="mt-6">
                    <div>
                        <a class="w-full font-thin uppercase text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-blue-500" href="{{ url('dashboard') }}">
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                {{ __('Dashboard') }}
                            </span>
                        </a>
                        <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500" href="{{ url('pricings') }}" >
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1024 1131q0-64-9-117.5t-29.5-103-60.5-78-97-28.5q-6 4-30 18t-37.5 21.5-35.5 17.5-43 14.5-42 4.5-42-4.5-43-14.5-35.5-17.5-37.5-21.5-30-18q-57 0-97 28.5t-60.5 78-29.5 103-9 117.5 37 106.5 91 42.5h512q54 0 91-42.5t37-106.5zm-157-520q0-94-66.5-160.5t-160.5-66.5-160.5 66.5-66.5 160.5 66.5 160.5 160.5 66.5 160.5-66.5 66.5-160.5zm925 509v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm0-260v-56q0-15-10.5-25.5t-25.5-10.5h-568q-15 0-25.5 10.5t-10.5 25.5v56q0 15 10.5 25.5t25.5 10.5h568q15 0 25.5-10.5t10.5-25.5zm0-252v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm256-320v1216q0 66-47 113t-113 47h-352v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-768v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-352q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1728q66 0 113 47t47 113z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                {{ __('Pricings') }}
                            </span>
                        </a>
                        <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500" href="{{ url('products') }}">
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M685 483q16 0 27.5-11.5t11.5-27.5-11.5-27.5-27.5-11.5-27 11.5-11 27.5 11 27.5 27 11.5zm422 0q16 0 27-11.5t11-27.5-11-27.5-27-11.5-27.5 11.5-11.5 27.5 11.5 27.5 27.5 11.5zm-812 184q42 0 72 30t30 72v430q0 43-29.5 73t-72.5 30-73-30-30-73v-430q0-42 30-72t73-30zm1060 19v666q0 46-32 78t-77 32h-75v227q0 43-30 73t-73 30-73-30-30-73v-227h-138v227q0 43-30 73t-73 30q-42 0-72-30t-30-73l-1-227h-74q-46 0-78-32t-32-78v-666h918zm-232-405q107 55 171 153.5t64 215.5h-925q0-117 64-215.5t172-153.5l-71-131q-7-13 5-20 13-6 20 6l72 132q95-42 201-42t201 42l72-132q7-12 20-6 12 7 5 20zm477 488v430q0 43-30 73t-73 30q-42 0-72-30t-30-73v-430q0-43 30-72.5t72-29.5q43 0 73 29.5t30 72.5z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                {{ __('Products') }}
                            </span>
                        </a>
                        <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500" href="{{ url('stock') }}" >
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M960 0l960 384v128h-128q0 26-20.5 45t-48.5 19h-1526q-28 0-48.5-19t-20.5-45h-128v-128zm-704 640h256v768h128v-768h256v768h128v-768h256v768h128v-768h256v768h59q28 0 48.5 19t20.5 45v64h-1664v-64q0-26 20.5-45t48.5-19h59v-768zm1595 960q28 0 48.5 19t20.5 45v128h-1920v-128q0-26 20.5-45t48.5-19h1782z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                {{ __('Stock Management') }}
                            </span>
                        </a>
                        <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500" href="{{ url('sales') }}" >
                            <span class="text-left">
                                <svg width="20" height="20" class="m-auto" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                {{ __('Sales') }}
                            </span>
                        </a>
                        <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500" href="{{ url('customers') }}" >
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1024 1131q0-64-9-117.5t-29.5-103-60.5-78-97-28.5q-6 4-30 18t-37.5 21.5-35.5 17.5-43 14.5-42 4.5-42-4.5-43-14.5-35.5-17.5-37.5-21.5-30-18q-57 0-97 28.5t-60.5 78-29.5 103-9 117.5 37 106.5 91 42.5h512q54 0 91-42.5t37-106.5zm-157-520q0-94-66.5-160.5t-160.5-66.5-160.5 66.5-66.5 160.5 66.5 160.5 160.5 66.5 160.5-66.5 66.5-160.5zm925 509v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm0-260v-56q0-15-10.5-25.5t-25.5-10.5h-568q-15 0-25.5 10.5t-10.5 25.5v56q0 15 10.5 25.5t25.5 10.5h568q15 0 25.5-10.5t10.5-25.5zm0-252v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm256-320v1216q0 66-47 113t-113 47h-352v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-768v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-352q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1728q66 0 113 47t47 113z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                {{ __('Customers') }}
                            </span>
                        </a>
                        <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500" href="{{ url('deliveries') }}" >
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1024 1131q0-64-9-117.5t-29.5-103-60.5-78-97-28.5q-6 4-30 18t-37.5 21.5-35.5 17.5-43 14.5-42 4.5-42-4.5-43-14.5-35.5-17.5-37.5-21.5-30-18q-57 0-97 28.5t-60.5 78-29.5 103-9 117.5 37 106.5 91 42.5h512q54 0 91-42.5t37-106.5zm-157-520q0-94-66.5-160.5t-160.5-66.5-160.5 66.5-66.5 160.5 66.5 160.5 160.5 66.5 160.5-66.5 66.5-160.5zm925 509v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm0-260v-56q0-15-10.5-25.5t-25.5-10.5h-568q-15 0-25.5 10.5t-10.5 25.5v56q0 15 10.5 25.5t25.5 10.5h568q15 0 25.5-10.5t10.5-25.5zm0-252v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm256-320v1216q0 66-47 113t-113 47h-352v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-768v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-352q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1728q66 0 113 47t47 113z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                {{ __('Deliveries') }}
                            </span>
                        </a>
                        <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"  href="{{ url('post') }}" >
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1024 1131q0-64-9-117.5t-29.5-103-60.5-78-97-28.5q-6 4-30 18t-37.5 21.5-35.5 17.5-43 14.5-42 4.5-42-4.5-43-14.5-35.5-17.5-37.5-21.5-30-18q-57 0-97 28.5t-60.5 78-29.5 103-9 117.5 37 106.5 91 42.5h512q54 0 91-42.5t37-106.5zm-157-520q0-94-66.5-160.5t-160.5-66.5-160.5 66.5-66.5 160.5 66.5 160.5 160.5 66.5 160.5-66.5 66.5-160.5zm925 509v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm0-260v-56q0-15-10.5-25.5t-25.5-10.5h-568q-15 0-25.5 10.5t-10.5 25.5v56q0 15 10.5 25.5t25.5 10.5h568q15 0 25.5-10.5t10.5-25.5zm0-252v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm256-320v1216q0 66-47 113t-113 47h-352v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-768v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-352q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1728q66 0 113 47t47 113z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                {{ __('Articles') }}
                            </span>
                        </a>
                        <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500" href="#">
                            <span class="text-left">
                                <svg width="20" fill="currentColor" height="20" class="h-5 w-5" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1088 1256v240q0 16-12 28t-28 12h-240q-16 0-28-12t-12-28v-240q0-16 12-28t28-12h240q16 0 28 12t12 28zm316-600q0 54-15.5 101t-35 76.5-55 59.5-57.5 43.5-61 35.5q-41 23-68.5 65t-27.5 67q0 17-12 32.5t-28 15.5h-240q-15 0-25.5-18.5t-10.5-37.5v-45q0-83 65-156.5t143-108.5q59-27 84-56t25-76q0-42-46.5-74t-107.5-32q-65 0-108 29-35 25-107 115-13 16-31 16-12 0-25-8l-164-125q-13-10-15.5-25t5.5-28q160-266 464-266 80 0 161 31t146 83 106 127.5 41 158.5z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                                Settings
                            </span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
            <header class="w-full shadow-lg bg-white dark:bg-gray-700 items-center h-16 rounded-2xl z-40">
                <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                    <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                        <div class="container relative left-0 z-50 flex w-3/4 h-auto h-full">
                            <div class="relative flex items-center w-full lg:w-64 h-full group">
                                <div class="absolute z-50 flex items-center justify-center block w-auto h-10 p-3 pr-2 text-sm text-gray-500 uppercase cursor-pointer sm:hidden">
                                    <svg fill="none" class="relative w-5 h-5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </div>
                                <svg class="absolute left-0 z-20 hidden w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                    </path>
                                </svg>
                                <input type="text" class="block w-full py-1.5 pl-10 pr-4 leading-normal rounded-2xl focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 ring-opacity-90 bg-gray-100 dark:bg-gray-800 text-gray-400 aa-input" placeholder="Search"/>
                                    <div class="absolute right-0 hidden h-auto px-2 py-1 mr-2 text-xs text-gray-400 border border-gray-300 rounded-2xl md:block">
                                        +
                                    </div>
                                </div>
                            </div>
                            <div class="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                                <a href="#" class="block relative">
                                    <img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                    <div class="flex flex-col flex-wrap sm:flex-row ">
                        <div class="w-full sm:w-1/2 xl:w-1/3">
                            <div class="mb-4">
                                <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
                                    <div class="flex items-center justify-between mb-6">
                                        <div class="flex items-center">
                                            <span class="rounded-xl relative p-2 bg-blue-100">
                                                <svg width="25" height="25" viewBox="0 0 256 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                                                    <path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4">
                                                    </path>
                                                    <path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853">
                                                    </path>
                                                    <path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05">
                                                    </path>
                                                    <path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335">
                                                    </path>
                                                </svg>
                                            </span>
                                            <div class="flex flex-col">
                                                <span class="font-bold text-md text-black dark:text-white ml-2">
                                                    Google
                                                </span>
                                                <span class="text-sm text-gray-500 dark:text-white ml-2">
                                                    Google Inc.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <button class="border p-1 border-gray-200 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 1792 1792">
                                                    <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button class="text-gray-200">
                                                <svg width="25" height="25" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1088 1248v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between mb-4 space-x-12">
                                        <span class="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-gray-500 bg-gray-200">
                                            PROGRESS
                                        </span>
                                        <span class="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-red-400 border border-red-400  bg-white">
                                            HIGHT PRIORITY
                                        </span>
                                    </div>
                                    <div class="block m-auto">
                                        <div>
                                            <span class="text-sm inline-block text-gray-500 dark:text-gray-100">
                                                Task done :
                                                <span class="text-gray-700 dark:text-white font-bold">
                                                    25
                                                </span>
                                                /50
                                            </span>
                                        </div>
                                        <div class="w-full h-2 bg-gray-200 rounded-full mt-2">
                                            <div class="w-1/2 h-full text-center text-xs text-white bg-purple-500 rounded-full">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-start my-4 space-x-4">
                                        <span class="px-2 py-1 flex items-center text-xs rounded-md font-semibold text-green-500 bg-green-50">
                                            IOS APP
                                        </span>
                                        <span class="px-2 py-1 flex items-center text-xs rounded-md text-blue-500 font-semibold bg-blue-100">
                                            UI/UX
                                        </span>
                                    </div>
                                    <div class="flex -space-x-2">
                                        <a href="#" class="">
                                            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/1.jpg" alt="Guy"/>
                                        </a>
                                        <a href="#" class="">
                                            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/2.jpeg" alt="Max"/>
                                        </a>
                                        <a href="#" class="">
                                            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/3.jpg" alt="Charles"/>
                                        </a>
                                        <a href="#" class="">
                                            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/4.jpg" alt="Jade"/>
                                        </a>
                                    </div>
                                    <span class="px-2 py-1 flex w-36 mt-4 items-center text-xs rounded-md font-semibold text-yellow-500 bg-yellow-100">
                                        DUE DATE : 18 JUN
                                    </span>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
                                    <div class="flex items-center justify-between mb-6">
                                        <div class="flex items-center">
                                            <span class="rounded-xl relative p-2 bg-blue-100">
                                                <svg width="25" height="25" viewBox="0 0 2447.6 2452.5" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-rule="evenodd" fill-rule="evenodd">
                                                        <path d="m897.4 0c-135.3.1-244.8 109.9-244.7 245.2-.1 135.3 109.5 245.1 244.8 245.2h244.8v-245.1c.1-135.3-109.5-245.1-244.9-245.3.1 0 .1 0 0 0m0 654h-652.6c-135.3.1-244.9 109.9-244.8 245.2-.2 135.3 109.4 245.1 244.7 245.3h652.7c135.3-.1 244.9-109.9 244.8-245.2.1-135.4-109.5-245.2-244.8-245.3z" fill="#36c5f0">
                                                        </path>
                                                        <path d="m2447.6 899.2c.1-135.3-109.5-245.1-244.8-245.2-135.3.1-244.9 109.9-244.8 245.2v245.3h244.8c135.3-.1 244.9-109.9 244.8-245.3zm-652.7 0v-654c.1-135.2-109.4-245-244.7-245.2-135.3.1-244.9 109.9-244.8 245.2v654c-.2 135.3 109.4 245.1 244.7 245.3 135.3-.1 244.9-109.9 244.8-245.3z" fill="#2eb67d">
                                                        </path>
                                                        <path d="m1550.1 2452.5c135.3-.1 244.9-109.9 244.8-245.2.1-135.3-109.5-245.1-244.8-245.2h-244.8v245.2c-.1 135.2 109.5 245 244.8 245.2zm0-654.1h652.7c135.3-.1 244.9-109.9 244.8-245.2.2-135.3-109.4-245.1-244.7-245.3h-652.7c-135.3.1-244.9 109.9-244.8 245.2-.1 135.4 109.4 245.2 244.7 245.3z" fill="#ecb22e">
                                                        </path>
                                                        <path d="m0 1553.2c-.1 135.3 109.5 245.1 244.8 245.2 135.3-.1 244.9-109.9 244.8-245.2v-245.2h-244.8c-135.3.1-244.9 109.9-244.8 245.2zm652.7 0v654c-.2 135.3 109.4 245.1 244.7 245.3 135.3-.1 244.9-109.9 244.8-245.2v-653.9c.2-135.3-109.4-245.1-244.7-245.3-135.4 0-244.9 109.8-244.8 245.1 0 0 0 .1 0 0" fill="#e01e5a">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <div class="flex flex-col">
                                                <span class="font-bold text-md text-black dark:text-white ml-2">
                                                    Slack
                                                </span>
                                                <span class="text-sm text-gray-500 dark:text-white ml-2">
                                                    Slack corporation
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <button class="border p-1 border-gray-200 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 1792 1792">
                                                    <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button class="text-gray-200">
                                                <svg width="25" height="25" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1088 1248v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between mb-4 space-x-12">
                                        <span class="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-green-700 bg-green-50">
                                            COMPLETED
                                        </span>
                                        <span class="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-green-600 border border-green-600 bg-white">
                                            MEDIUM PRIORITY
                                        </span>
                                    </div>
                                    <div class="block m-auto">
                                        <div>
                                            <span class="text-sm inline-block text-gray-500 dark:text-gray-100">
                                                Task done :
                                                <span class="text-gray-700 dark:text-white font-bold">
                                                    50
                                                </span>
                                                /50
                                            </span>
                                        </div>
                                        <div class="w-full h-2 bg-gray-200 rounded-full mt-2">
                                            <div class="w-full h-full text-center text-xs text-white bg-pink-400 rounded-full">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-start my-4 space-x-4">
                                        <span class="px-2 py-1 flex items-center text-xs rounded-md font-semibold text-green-500 bg-green-50">
                                            IOS APP
                                        </span>
                                        <span class="px-2 py-1 flex items-center text-xs rounded-md text-yellow-600 font-semibold bg-yellow-200">
                                            ANDROID
                                        </span>
                                    </div>
                                    <div class="flex -space-x-2">
                                        <a href="#" class="">
                                            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/1.jpg" alt="Guy"/>
                                        </a>
                                        <a href="#" class="">
                                            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/2.jpeg" alt="Max"/>
                                        </a>
                                        <a href="#" class="">
                                            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/3.jpg" alt="Charles"/>
                                        </a>
                                        <a href="#" class="">
                                            <img class="inline-block h-10 w-10 rounded-full object-cover ring-2 ring-white" src="/images/person/4.jpg" alt="Jade"/>
                                        </a>
                                    </div>
                                    <span class="px-2 py-1 flex w-36 mt-4 items-center text-xs rounded-md font-semibold text-yellow-500 bg-yellow-100">
                                        DUE DATE : 18 JUN
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 xl:w-1/3">
                            <div class="mb-4 mx-0 sm:ml-4 xl:mr-4">
                                <div class="shadow-lg rounded-2xl bg-white dark:bg-gray-700 w-full">
                                    <p class="font-bold text-md p-4 text-black dark:text-white">
                                        My Tasks
                                        <span class="text-sm text-gray-500 dark:text-gray-300 dark:text-white ml-2">
                                            (05)
                                        </span>
                                    </p>
                                    <ul>
                                        <li class="flex items-center text-gray-600 dark:text-gray-200 justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
                                            <div class="flex items-center justify-start text-sm">
                                                <span class="mx-4">
                                                    01
                                                </span>
                                                <span>
                                                    Create wireframe
                                                </span>
                                            </div>
                                            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                                                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                                </path>
                                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="flex items-center text-gray-600 dark:text-gray-200 justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
                                            <div class="flex items-center justify-start text-sm">
                                                <span class="mx-4">
                                                    02
                                                </span>
                                                <span>
                                                    Dashboard design
                                                </span>
                                                <span class="lg:ml-6 ml-2 flex items-center text-gray-400 dark:text-gray-300">
                                                    3
                                                    <svg width="15" height="15" fill="currentColor" class="ml-1" viewBox="0 0 512 512">
                                                        <path d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2l-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29c7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1l-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160s-93.3 160-208 160z" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="mx-4 flex items-center text-gray-400 dark:text-gray-300">
                                                    3
                                                    <svg width="15" height="15" class="ml-1" fill="currentColor" viewBox="0 0 384 512">
                                                        <path d="M384 144c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 36.4 24.3 67.1 57.5 76.8c-.6 16.1-4.2 28.5-11 36.9c-15.4 19.2-49.3 22.4-85.2 25.7c-28.2 2.6-57.4 5.4-81.3 16.9v-144c32.5-10.2 56-40.5 56-76.3c0-44.2-35.8-80-80-80S0 35.8 0 80c0 35.8 23.5 66.1 56 76.3v199.3C23.5 365.9 0 396.2 0 432c0 44.2 35.8 80 80 80s80-35.8 80-80c0-34-21.2-63.1-51.2-74.6c3.1-5.2 7.8-9.8 14.9-13.4c16.2-8.2 40.4-10.4 66.1-12.8c42.2-3.9 90-8.4 118.2-43.4c14-17.4 21.1-39.8 21.6-67.9c31.6-10.8 54.4-40.7 54.4-75.9zM80 64c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16zm0 384c-8.8 0-16-7.2-16-16s7.2-16 16-16s16 7.2 16 16s-7.2 16-16 16zm224-320c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16z" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                                                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                                </path>
                                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="flex items-center text-gray-600 dark:text-gray-200 justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
                                            <div class="flex items-center justify-start text-sm">
                                                <span class="mx-4">
                                                    03
                                                </span>
                                                <span>
                                                    Components card
                                                </span>
                                                <span class="lg:ml-6 ml-2 flex items-center text-gray-400 dark:text-gray-300">
                                                    3
                                                    <svg width="15" height="15" fill="currentColor" class="ml-1" viewBox="0 0 512 512">
                                                        <path d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2l-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29c7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1l-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160s-93.3 160-208 160z" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                                                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                                </path>
                                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="flex items-center text-gray-400 justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
                                            <div class="flex items-center justify-start text-sm">
                                                <span class="mx-4">
                                                    04
                                                </span>
                                                <span class="line-through">
                                                    Google logo design
                                                </span>
                                            </div>
                                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="text-green-500 mx-4">
                                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="flex items-center text-gray-400  justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
                                            <div class="flex items-center justify-start text-sm">
                                                <span class="mx-4">
                                                    05
                                                </span>
                                                <span class="line-through">
                                                    Header navigation
                                                </span>
                                            </div>
                                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="text-green-500 mx-4">
                                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="flex items-center text-gray-600 dark:text-gray-200 justify-between py-3 border-b-2 border-gray-100 dark:border-gray-800">
                                            <div class="flex items-center justify-start text-sm">
                                                <span class="mx-4">
                                                    06
                                                </span>
                                                <span>
                                                    International
                                                </span>
                                                <span class="lg:ml-6 ml-2 flex items-center text-gray-400 dark:text-gray-300">
                                                    3
                                                    <svg width="15" height="15" fill="currentColor" class="ml-1" viewBox="0 0 512 512">
                                                        <path d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2l-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29c7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1l-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160s-93.3 160-208 160z" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="mx-4 flex items-center text-gray-400 dark:text-gray-300">
                                                    3
                                                    <svg width="15" height="15" class="ml-1" fill="currentColor" viewBox="0 0 384 512">
                                                        <path d="M384 144c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 36.4 24.3 67.1 57.5 76.8c-.6 16.1-4.2 28.5-11 36.9c-15.4 19.2-49.3 22.4-85.2 25.7c-28.2 2.6-57.4 5.4-81.3 16.9v-144c32.5-10.2 56-40.5 56-76.3c0-44.2-35.8-80-80-80S0 35.8 0 80c0 35.8 23.5 66.1 56 76.3v199.3C23.5 365.9 0 396.2 0 432c0 44.2 35.8 80 80 80s80-35.8 80-80c0-34-21.2-63.1-51.2-74.6c3.1-5.2 7.8-9.8 14.9-13.4c16.2-8.2 40.4-10.4 66.1-12.8c42.2-3.9 90-8.4 118.2-43.4c14-17.4 21.1-39.8 21.6-67.9c31.6-10.8 54.4-40.7 54.4-75.9zM80 64c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16zm0 384c-8.8 0-16-7.2-16-16s7.2-16 16-16s16 7.2 16 16s-7.2 16-16 16zm224-320c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16z" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                                                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                                </path>
                                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                                </path>
                                            </svg>
                                        </li>
                                        <li class="flex items-center text-gray-600 dark:text-gray-200 justify-between py-3">
                                            <div class="flex items-center justify-start text-sm">
                                                <span class="mx-4">
                                                    07
                                                </span>
                                                <span>
                                                    Production data
                                                </span>
                                            </div>
                                            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                                                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                                </path>
                                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                                </path>
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-4 sm:ml-4 xl:mr-4">
                                <div class="shadow-lg rounded-2xl bg-white dark:bg-gray-700 w-full">
                                    <div class="flex items-center p-4 justify-between">
                                        <p class="font-bold text-md text-black dark:text-white">
                                            Google
                                        </p>
                                        <button class="text-sm p-1 text-gray-400 border rounded border-gray-400 mr-4">
                                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20">
                                                <g fill="none">
                                                    <path d="M17.222 8.685a1.5 1.5 0 0 1 0 2.628l-10 5.498A1.5 1.5 0 0 1 5 15.496V4.502a1.5 1.5 0 0 1 2.223-1.314l10 5.497z" fill="currentColor">
                                                    </path>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="py-2 px-4 bg-blue-100 dark:bg-gray-800 text-gray-600 border-l-4 border-blue-500 flex items-center justify-between">
                                        <p class="text-xs flex items-center dark:text-white">
                                            <svg width="20" height="20" fill="currentColor" class="text-blue-500 mr-2" viewBox="0 0 24 24">
                                                <g fill="none">
                                                    <path d="M12 5a8.5 8.5 0 1 1 0 17a8.5 8.5 0 0 1 0-17zm0 3a.75.75 0 0 0-.743.648l-.007.102v4.5l.007.102a.75.75 0 0 0 1.486 0l.007-.102v-4.5l-.007-.102A.75.75 0 0 0 12 8zm7.17-2.877l.082.061l1.149 1a.75.75 0 0 1-.904 1.193l-.081-.061l-1.149-1a.75.75 0 0 1 .903-1.193zM14.25 2.5a.75.75 0 0 1 .102 1.493L14.25 4h-4.5a.75.75 0 0 1-.102-1.493L9.75 2.5h4.5z" fill="currentColor">
                                                    </path>
                                                </g>
                                            </svg>
                                            Create wireframe
                                        </p>
                                        <div class="flex items-center">
                                            <span class="font-bold text-xs dark:text-gray-200 mr-2 ml-2 md:ml-4">
                                                25 min 20s
                                            </span>
                                            <button class="text-sm p-1 text-gray-400 border rounded bg-blue-500 mr-4">
                                                <svg width="17" height="17" fill="currentColor" viewBox="0 0 24 24" class="text-white">
                                                    <g fill="none">
                                                        <path d="M9 6a1 1 0 0 1 1 1v10a1 1 0 1 1-2 0V7a1 1 0 0 1 1-1zm6 0a1 1 0 0 1 1 1v10a1 1 0 1 1-2 0V7a1 1 0 0 1 1-1z" fill="currentColor">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex items-center p-4 justify-between border-b-2 border-gray-100">
                                        <p class="font-bold text-md text-black dark:text-white">
                                            Slack
                                        </p>
                                        <button class="text-sm p-1 text-gray-400 border rounded border-gray-400 mr-4">
                                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20">
                                                <g fill="none">
                                                    <path d="M17.222 8.685a1.5 1.5 0 0 1 0 2.628l-10 5.498A1.5 1.5 0 0 1 5 15.496V4.502a1.5 1.5 0 0 1 2.223-1.314l10 5.497z" fill="currentColor">
                                                    </path>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="py-2 px-4 text-gray-600 flex items-center justify-between border-b-2 border-gray-100">
                                        <p class="text-xs flex items-center dark:text-white">
                                            <svg width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 24 24">
                                                <g fill="none">
                                                    <path d="M12 5a8.5 8.5 0 1 1 0 17a8.5 8.5 0 0 1 0-17zm0 3a.75.75 0 0 0-.743.648l-.007.102v4.5l.007.102a.75.75 0 0 0 1.486 0l.007-.102v-4.5l-.007-.102A.75.75 0 0 0 12 8zm7.17-2.877l.082.061l1.149 1a.75.75 0 0 1-.904 1.193l-.081-.061l-1.149-1a.75.75 0 0 1 .903-1.193zM14.25 2.5a.75.75 0 0 1 .102 1.493L14.25 4h-4.5a.75.75 0 0 1-.102-1.493L9.75 2.5h4.5z" fill="currentColor">
                                                    </path>
                                                </g>
                                            </svg>
                                            International
                                        </p>
                                        <div class="flex items-center">
                                            <span class="text-xs text-gray-400 mr-2 ml-2 md:ml-4">
                                                30 min
                                            </span>
                                            <button class="text-sm p-1 text-gray-400 border rounded border-gray-400 mr-4">
                                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20">
                                                    <g fill="none">
                                                        <path d="M17.222 8.685a1.5 1.5 0 0 1 0 2.628l-10 5.498A1.5 1.5 0 0 1 5 15.496V4.502a1.5 1.5 0 0 1 2.223-1.314l10 5.497z" fill="currentColor">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 text-gray-600 flex items-center justify-between border-b-2 border-gray-100">
                                        <p class="text-xs flex items-center dark:text-white">
                                            <svg width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 24 24">
                                                <g fill="none">
                                                    <path d="M12 5a8.5 8.5 0 1 1 0 17a8.5 8.5 0 0 1 0-17zm0 3a.75.75 0 0 0-.743.648l-.007.102v4.5l.007.102a.75.75 0 0 0 1.486 0l.007-.102v-4.5l-.007-.102A.75.75 0 0 0 12 8zm7.17-2.877l.082.061l1.149 1a.75.75 0 0 1-.904 1.193l-.081-.061l-1.149-1a.75.75 0 0 1 .903-1.193zM14.25 2.5a.75.75 0 0 1 .102 1.493L14.25 4h-4.5a.75.75 0 0 1-.102-1.493L9.75 2.5h4.5z" fill="currentColor">
                                                    </path>
                                                </g>
                                            </svg>
                                            Slack logo design
                                        </p>
                                        <div class="flex items-center">
                                            <span class="text-xs text-gray-400 mr-2 ml-2 md:ml-4">
                                                30 min
                                            </span>
                                            <button class="text-sm p-1 text-gray-400 border rounded border-gray-400 mr-4">
                                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20">
                                                    <g fill="none">
                                                        <path d="M17.222 8.685a1.5 1.5 0 0 1 0 2.628l-10 5.498A1.5 1.5 0 0 1 5 15.496V4.502a1.5 1.5 0 0 1 2.223-1.314l10 5.497z" fill="currentColor">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 text-gray-600 flex items-center justify-between">
                                        <p class="text-xs flex items-center dark:text-white">
                                            <svg width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 24 24">
                                                <g fill="none">
                                                    <path d="M12 5a8.5 8.5 0 1 1 0 17a8.5 8.5 0 0 1 0-17zm0 3a.75.75 0 0 0-.743.648l-.007.102v4.5l.007.102a.75.75 0 0 0 1.486 0l.007-.102v-4.5l-.007-.102A.75.75 0 0 0 12 8zm7.17-2.877l.082.061l1.149 1a.75.75 0 0 1-.904 1.193l-.081-.061l-1.149-1a.75.75 0 0 1 .903-1.193zM14.25 2.5a.75.75 0 0 1 .102 1.493L14.25 4h-4.5a.75.75 0 0 1-.102-1.493L9.75 2.5h4.5z" fill="currentColor">
                                                    </path>
                                                </g>
                                            </svg>
                                            Dahboard template
                                        </p>
                                        <div class="flex items-center">
                                            <span class="text-xs text-gray-400 mr-2 ml-2 md:ml-4">
                                                30 min
                                            </span>
                                            <button class="text-sm p-1 text-gray-400 border rounded border-gray-400 mr-4">
                                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 20 20">
                                                    <g fill="none">
                                                        <path d="M17.222 8.685a1.5 1.5 0 0 1 0 2.628l-10 5.498A1.5 1.5 0 0 1 5 15.496V4.502a1.5 1.5 0 0 1 2.223-1.314l10 5.497z" fill="currentColor">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 xl:w-1/3">
                            <div class="mb-4">
                                <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700">
                                    <div class="flex flex-wrap overflow-hidden">
                                        <div class="w-full rounded shadow-sm">
                                            <div class="flex items-center justify-between mb-4">
                                                <div class="text-left font-bold text-xl text-black dark:text-white">
                                                    Dec 2021
                                                </div>
                                                <div class="flex space-x-4">
                                                    <button class="p-2 rounded-full bg-blue-500 text-white">
                                                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill="currentColor" d="M13.83 19a1 1 0 0 1-.78-.37l-4.83-6a1 1 0 0 1 0-1.27l5-6a1 1 0 0 1 1.54 1.28L10.29 12l4.32 5.36a1 1 0 0 1-.78 1.64z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-2 rounded-full bg-blue-500 text-white">
                                                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill="currentColor" d="M10 19a1 1 0 0 1-.64-.23a1 1 0 0 1-.13-1.41L13.71 12L9.39 6.63a1 1 0 0 1 .15-1.41a1 1 0 0 1 1.46.15l4.83 6a1 1 0 0 1 0 1.27l-5 6A1 1 0 0 1 10 19z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="-mx-2">
                                                <table class="w-full dark:text-white">
                                                    <tr>
                                                        <th class="py-3 px-2 md:px-3 ">
                                                            S
                                                        </th>
                                                        <th class="py-3 px-2 md:px-3 ">
                                                            M
                                                        </th>
                                                        <th class="py-3 px-2 md:px-3 ">
                                                            T
                                                        </th>
                                                        <th class="py-3 px-2 md:px-3 ">
                                                            W
                                                        </th>
                                                        <th class="py-3 px-2 md:px-3 ">
                                                            T
                                                        </th>
                                                        <th class="py-3 px-2 md:px-3 ">
                                                            F
                                                        </th>
                                                        <th class="py-3 px-2 md:px-3 ">
                                                            S
                                                        </th>
                                                    </tr>
                                                    <tr class="text-gray-400 dark:text-gray-500">
                                                        <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                                            25
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                                            26
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                                            27
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                                            28
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                                            29
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                                            30
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center text-gray-800 cursor-pointer">
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            2
                                                        </td>
                                                        <td class="py-3 relative px-1  hover:text-blue-500 text-center cursor-pointer">
                                                            3
                                                            <span class="absolute rounded-full h-2 w-2 bg-blue-500 bottom-0 left-1/2 transform -translate-x-1/2">
                                                            </span>
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            4
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            5
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            6
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            7
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3 md:px-2 relative lg:px-3 hover:text-blue-500 text-center cursor-pointer">
                                                            8
                                                            <span class="absolute rounded-full h-2 w-2 bg-yellow-500 bottom-0 left-1/2 transform -translate-x-1/2">
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            9
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            10
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            11
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            12
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  text-center text-white cursor-pointer">
                                                            <span class="p-2 rounded-full bg-blue-500">
                                                                13
                                                            </span>
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            14
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            15
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            16
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            17
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            18
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            19
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            20
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            21
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            22
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            23
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            24
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 relative text-center cursor-pointer">
                                                            25
                                                            <span class="absolute rounded-full h-2 w-2 bg-red-500 bottom-0 left-1/2 transform -translate-x-1/2">
                                                            </span>
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            26
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            27
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            28
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            29
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            30
                                                        </td>
                                                        <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                                            31
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
                                    <p class="font-bold text-md text-black dark:text-white">
                                        Messages
                                    </p>
                                    <ul>
                                        <li class="flex items-center my-6 space-x-2">
                                            <a href="#" class="block relative">
                                                <img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                            </a>
                                            <div class="flex flex-col">
                                                <span class="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                                                    Charlie Rabiller
                                                </span>
                                                <span class="text-sm text-gray-400 dark:text-gray-300 ml-2">
                                                    Hey John ! Do you read the NextJS doc ?
                                                </span>
                                            </div>
                                        </li>
                                        <li class="flex items-center my-6 space-x-2">
                                            <a href="#" class="block relative">
                                                <img alt="profil" src="/images/person/5.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                            </a>
                                            <div class="flex flex-col">
                                                <span class="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                                                    Marie Lou
                                                </span>
                                                <span class="text-sm text-gray-400 dark:text-gray-300 ml-2">
                                                    No I think the dog is better...
                                                </span>
                                            </div>
                                        </li>
                                        <li class="flex items-center my-6 space-x-2">
                                            <a href="#" class="block relative">
                                                <img alt="profil" src="/images/person/6.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                            </a>
                                            <div class="flex flex-col">
                                                <span class="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                                                    Ivan Buck
                                                </span>
                                                <span class="text-sm text-gray-400 dark:text-gray-300 ml-2">
                                                    Seriously ? haha Bob is not a children !
                                                </span>
                                            </div>
                                        </li>
                                        <li class="flex items-center my-6 space-x-2">
                                            <a href="#" class="block relative">
                                                <img alt="profil" src="/images/person/7.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                            </a>
                                            <div class="flex flex-col">
                                                <span class="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                                                    Marina Farga
                                                </span>
                                                <span class="text-sm text-gray-400 dark:text-gray-300 ml-2">
                                                    Do you need that deisgn ?
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
