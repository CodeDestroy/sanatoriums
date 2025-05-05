<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=roboto-condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="img/favicon_io/site.webmanifest">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-captcha@1.3.0/dist/js/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <header class="bg-white" x-data="{ open: false, productOpen: false }" @keydown.window.escape="open = false; productOpen = false">
            <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span class="sr-only">Волшебная страна</span>
                        <img class="h-16 sm:h-18 w-auto" src="{{ asset('img/zr_tour_logo.svg') }}" alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button @click="open = true" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Открыть меню</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                        </svg>
                    </button>
                </div>
            
                <!-- Desktop nav -->
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="{{ url('/') }}" class="text-sm font-semibold leading-6 text-gray-900">Главная</a>
                    <div class="relative" x-data="{ dropdown: false }">
                        <button @click="dropdown = !dropdown" @click.away="dropdown = false" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900">
                            Санатории
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                
                        <div x-show="dropdown" x-transition class="absolute z-10 mt-3 w-screen max-w-sm overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                            <!-- Dropdown items here -->
                            <div class="p-4 space-y-2">
                                {{-- <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold text-gray-900">
                                            Юг России
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                                    </div>
                                </div> --}}
                                <a href="sanatoriums" class="block p-2 rounded hover:bg-gray-100 text-sm text-gray-900 font-medium">Юг России</a>
                                {{-- <a href="#" class="block p-2 rounded hover:bg-gray-100 text-sm text-gray-900 font-medium">Крым</a>
                                <a href="#" class="block p-2 rounded hover:bg-gray-100 text-sm text-gray-900 font-medium">КМВ</a>
                                <a href="#" class="block p-2 rounded hover:bg-gray-100 text-sm text-gray-900 font-medium">Центральный регион</a>
                                <a href="#" class="block p-2 rounded hover:bg-gray-100 text-sm text-gray-900 font-medium">Беларусь</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="relative" x-data="{ dropdown: false }">
                        <button @click="dropdown = !dropdown" @click.away="dropdown = false" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900">
                            Индивидуальный подбор туров
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                
                        <div x-show="dropdown" x-transition class="absolute z-10 mt-3 w-screen max-w-sm overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                            <!-- Dropdown items here -->
                            <div class="p-4 space-y-2">
                                {{-- <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold text-gray-900">
                                            Юг России
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                                    </div>
                                </div> --}}
                                <a href="#" class="block p-2 rounded hover:bg-gray-100 text-sm text-gray-900 font-medium">Сан. курортная карта</a>
                                <a href="#" class="block p-2 rounded hover:bg-gray-100 text-sm text-gray-900 font-medium">ТМК</a>
                                <a href="#" class="block p-2 rounded hover:bg-gray-100 text-sm text-gray-900 font-medium">Отправить заявку</a>
                            </div>
                        </div>
                    </div>
                    <div class="relative" x-data="{ dropdown: false }">
                        <button @click="dropdown = !dropdown" @click.away="dropdown = false" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900">
                            Отдыхающим
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                
                        <div x-show="dropdown" x-transition class="absolute z-10 mt-3 w-screen max-w-sm overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                            <!-- Dropdown items here -->
                            <div class="p-4 space-y-2">
                                {{-- <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold text-gray-900">
                                            Юг России
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                                    </div>
                                </div> --}}
                                <a href="#" class="block p-2 rounded hover:bg-gray-100 text-sm text-gray-900 font-medium">Совет эксперта</a>
                                <a href="#" class="block p-2 rounded hover:bg-gray-100 text-sm text-gray-900 font-medium">ТМК</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/contacts') }}" class="text-sm font-semibold leading-6 text-gray-900">Контакты</a>
                    
                </div>
            
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    {{-- @guest
                    <div class="relative" x-data="{ expanded: false }" >
                        <button 
                            x-on:click="expanded = !expanded" 
                            type="button" 
                            class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" 
                            aria-expanded="false"
                            
                        >
                            {{ __('Log in') }}
                            <span aria-hidden="true">→</span>
                        </button>
                        <div 
                            x-show="expanded" 
                            x-on:click.outside="expanded = false" 
                            class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5"
                            style="display: none; left: -22rem"
                        >
                            <div class="p-4">
                                <div class="group relative flex gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                    <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg class="h-6 w-6 text-gray-600 group-hover:text-forest-green-800" fill="none" stroke="currentColor" stroke-width="1.5"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        @if (Route::has('login'))
                                            
                                            <a href="{{ route('login') }}" class="block font-semibold text-gray-900 content-center">
                                                {{ __('Log in') }}
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="group relative flex gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                    <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                        <svg class="h-6 w-6 text-gray-600 group-hover:text-forest-green-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        @if (Route::has('register'))
                                            
                                            <a href="{{ route('register') }}" class="block font-semibold text-gray-900 content-center">
                                                {{ __('Register') }}
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                         
                    @else
                        <div class="relative" x-data="{ expanded: false }" >
                            <button x-on:click="expanded = !expanded"  type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
                                {{ Auth::user()->name }}
                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            </button>
                            <div 
                                x-show="expanded" 
                                x-on:click.outside="expanded = false"  
                                style="left: -22rem"
                                class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5"
                            >
                                <div class="p-4">
                                    <div class="group relative flex gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                        <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <svg class="h-6 w-6 text-gray-600 group-hover:text-forest-green-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                            </svg>
                                        </div>
                                        <div class="flex-auto">
                                            <a href="{{ route('settings.general') }}" class="block font-semibold text-gray-900">
                                                Мой профиль
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="mt-1 text-gray-600">Просмотреть информацию о моём профиле</p>
                                        </div>
                                    </div>
                                </div>
                                @if (Auth::user()->hasAnyAccess(['platform.*'])) 
                                    <div class="p-4">
                                        <div class="group relative flex gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                            <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                                <svg class="h-6 w-6 text-gray-600 group-hover:text-forest-green-800" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-auto">
                                                <a href={{route('platform.index')}} class="block font-semibold text-gray-900">
                                                    Админка
                                                    <span class="absolute inset-0"></span>
                                                </a>
                                                <p class="mt-1 text-gray-600">Зайти в админ панель</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="grid grid-cols-1 divide-x divide-gray-900/5 bg-gray-50">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                                        class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                                        <svg class="h-5 w-5 flex-none text-gray-400" data-slot="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z"></path>
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M6 10a.75.75 0 0 1 .75-.75h9.546l-1.048-.943a.75.75 0 1 1 1.004-1.114l2.5 2.25a.75.75 0 0 1 0 1.114l-2.5 2.25a.75.75 0 1 1-1.004-1.114l1.048-.943H6.75A.75.75 0 0 1 6 10Z"></path>
                                        </svg>
                                        {{ __('Log out') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    @endguest --}}
                </div>
            </nav>
        
            <!-- Mobile menu -->
            <div class="lg:hidden" x-show="open" x-transition>
                <div class="fixed inset-0 z-10 bg-black bg-opacity-25" @click="open = false"></div>
                <div class="fixed inset-y-0 right-0 z-20 w-full max-w-sm bg-white px-6 py-6 overflow-y-auto">
                    <div class="flex items-center justify-between">
                        <a href="/" class="-m-1.5 p-1.5">
                            <img class="h-16 sm:h-18 w-auto" src="{{ asset('img/zr_tour_logo.svg') }}" alt="">
                        </a>
                        <button @click="open = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                
                    <div class="mt-6">
                        <a href="{{ url('/') }}" class="block text-base font-semibold text-gray-900 hover:bg-gray-50 rounded px-3 py-2">Главная</a>
                        <div x-data="{ subOpen: false }" class="px-3">
                            <button @click="subOpen = !subOpen" class="w-full flex justify-between items-center text-base font-semibold text-gray-900 py-2">
                                Санатории
                                <svg :class="{ 'rotate-180': subOpen }" class="h-5 w-5 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 011.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0L5.23 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="subOpen" x-transition class="space-y-2 mt-2 pl-4">
                                <a href="#" class="block text-sm font-medium text-gray-900 hover:bg-gray-50 rounded px-3 py-2">Юг России</a>
                            </div>
                        </div>
                
                        <div x-data="{ subOpen: false }" class="px-3">
                            <button @click="subOpen = !subOpen" class="w-full flex justify-between items-center text-base font-semibold text-gray-900 py-2">
                                Индивидуальный подбор туров
                                <svg :class="{ 'rotate-180': subOpen }" class="h-5 w-5 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 011.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0L5.23 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="subOpen" x-transition class="space-y-2 mt-2 pl-4">
                                <a href="#" class="block text-sm font-medium text-gray-900 hover:bg-gray-50 rounded px-3 py-2">Сан. курортная карта</a>
                                <a href="#" class="block text-sm font-medium text-gray-900 hover:bg-gray-50 rounded px-3 py-2">ТМК</a>
                                <a href="#" class="block text-sm font-medium text-gray-900 hover:bg-gray-50 rounded px-3 py-2">Оставить заявку</a>
                            </div>
                        </div>
                        <div x-data="{ subOpen: false }" class="px-3">
                            <button @click="subOpen = !subOpen" class="w-full flex justify-between items-center text-base font-semibold text-gray-900 py-2">
                                Отдыхающим
                                <svg :class="{ 'rotate-180': subOpen }" class="h-5 w-5 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 011.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0L5.23 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="subOpen" x-transition class="space-y-2 mt-2 pl-4">
                                <a href="#" class="block text-sm font-medium text-gray-900 hover:bg-gray-50 rounded px-3 py-2">Совет эксперта</a>
                                <a href="#" class="block text-sm font-medium text-gray-900 hover:bg-gray-50 rounded px-3 py-2">ТМК</a>
                            </div>
                        </div>
                        <div class="mt-2 space-y-2">
                            <a href="{{ url('/contacts') }}" class="block text-base font-semibold text-gray-900 hover:bg-gray-50 rounded px-3 py-2">Контакты</a>
                        </div>
                
                        <div class="mt-6">
                            {{-- @guest
                                @if (Route::has('login'))
                                    <div class="py-6">
                                        <a href="{{ route('login') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">{{ __('Log in') }}</a>
                                    </div>
                                @endif
                            @else
                                @if (Auth::user()->hasAnyAccess(['platform.*'])) 
                                    <a href="{{ route('platform.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Админка</a>
                                @endif
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    {{ __('Log out') }}
                                </a>
                            @endguest --}}
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <main class="py-0">
            @yield('content')
        </main>
        <footer class="bg-white">
            <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
                <nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
                    <div class="pb-6">
                        <a href="{{ url('/') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Главная</a>
                    </div>
                   {{--  <div class="pb-6">
                        <a href="{{ url('/about') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">О нас</a>
                    </div> --}}
                    <div class="pb-6">
                        <a href="{{ route('sanatoriums') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Санатории</a>
                    </div>
                    <div class="pb-6">
                        <a href="" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Индивидуальный подбор туров</a>
                    </div><div class="pb-6">
                        <a href="" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Отдыхающим</a>
                    </div>
                    <div class="pb-6">
                        <a href="{{ url('/contacts') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Контакты</a>
                    </div>

                    
                </nav>
                <p class="mt-10 text-center text-xs leading-5 text-gray-500">&copy; 2025 ООО "Волшебная страна". Все права защищены.</p>
            </div>
        </footer> 
    </div>
</body>
</html>
