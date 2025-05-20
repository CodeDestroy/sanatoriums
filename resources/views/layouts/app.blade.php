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
                <div class="flex  xl:px-6  md:px-2">
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
                <div class="hidden lg:flex xl:gap-x-10 md:gap-x-6 lg:text-md md:text-sm">
                 <!--   <a href="{{ url('/') }}" class="text-sm font-semibold leading-6 text-gray-900">Главная</a> -->
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
                                <a href="#" class="block p-2 rounded hover:bg-gray-100 text-sm text-gray-900 font-medium">Совет эксперта</a>
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
                                <a href="#" class="block p-2 rounded hover:bg-gray-100 text-sm text-gray-900 font-medium">Совет эксперта</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/contacts') }}" class="text-sm font-semibold leading-6 text-gray-900">Контакты</a>
                    
                    <div class="hidden lg:flex lg:gap-x-2">
                        <a href="https://vk.com/brain_cat" class="hidden sm:block border-transparent focus:border-transparent focus:ring-0">
                            <span class="[&>svg]:h-7 [&>svg]:w-7">
                                <svg
                                    class="fill-red-700 hover:fill-red-700"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path
                                    d="M31.5 63.5C0 95 0 145.7 0 247V265C0 366.3 0 417 31.5 448.5C63 480 113.7 480 215 480H233C334.3 480 385 480 416.5 448.5C448 417 448 366.3 448 265V247C448 145.7 448 95 416.5 63.5C385 32 334.3 32 233 32H215C113.7 32 63 32 31.5 63.5zM75.6 168.3H126.7C128.4 253.8 166.1 290 196 297.4V168.3H244.2V242C273.7 238.8 304.6 205.2 315.1 168.3H363.3C359.3 187.4 351.5 205.6 340.2 221.6C328.9 237.6 314.5 251.1 297.7 261.2C316.4 270.5 332.9 283.6 346.1 299.8C359.4 315.9 369 334.6 374.5 354.7H321.4C316.6 337.3 306.6 321.6 292.9 309.8C279.1 297.9 262.2 290.4 244.2 288.1V354.7H238.4C136.3 354.7 78 284.7 75.6 168.3z" />
                                </svg>
                                </span>
                            </a>
                        <a href="https://t.me/+Rvqt2hkAZKMwZDFi" class="hidden sm:block  border-transparent focus:border-transparent focus:ring-0">
                            <span class="[&amp;>svg]:h-7 [&amp;>svg]:w-7">
                                <svg class="fill-red-700 hover:fill-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                    <path d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"></path>
                                </svg>
                            </span>
                        </a>
                        {{-- <button class="focus:outline-none text-white font-somebold  bg-red-700 hover:bg-red-700 focus:ring-4 focus:ring-red-300 rounded-lg
                            text-sm px-4 py-2   dark:bg-red-700 dark:hover:bg-red-700 dark:focus:ring-red-700" onClick='showLoginModal()'>
                           Войти
                        </button>
                        
                        <button class="focus:outline-none text-white bg-red-700 hover:bg-red-70 font-somebold0 focus:ring-4 focus:ring-red-300  rounded-lg
                            text-sm px-4 py-2  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-700">
                            Регистрация
                        </button> --}}
                        <!-- Обертка с Alpine.js -->
                        <div x-data="{ openLoginModal: false }">
                        <!-- Кнопка "Войти" -->
                            <button @click="openLoginModal = true"
                                class="focus:outline-none text-white font-somebold bg-red-700 hover:bg-red-700 focus:ring-4 focus:ring-red-300 rounded-lg
                                    text-sm px-4 py-2 dark:bg-red-700 dark:hover:bg-red-700 dark:focus:ring-red-700">
                                Войти
                            </button>

                            <!-- Кнопка "Регистрация" -->
                            <button class="focus:outline-none text-white bg-red-700 hover:bg-red-70 font-somebold0 focus:ring-4 focus:ring-red-300 rounded-lg
                                    text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-700">
                                Регистрация
                            </button>

                            <!-- Контейнер, для примера -->
                            <div class="bg-gray-300" ></div>

                            <!-- Модальное окно -->
                            <div x-show="openLoginModal" x-transition x-cloak class="fixed inset-0 z-20" aria-labelledby="modal-title" aria-modal="true">
                                <!-- Затемнение фона -->
                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="openLoginModal = false"></div>

                                <!-- Контейнер модалки -->
                                <div class="fixed inset-0 z-30 flex items-center justify-center p-4">
                                    <div @click.away="openLoginModal = false"
                                        x-show="openLoginModal"
                                        x-transition:enter="ease-out duration-300"
                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave="ease-in duration-200"
                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                                        
                                        <!-- Содержимое -->
                                        <div class="sm:flex sm:items-start">
                                            <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                                </svg>
                                            </div>
                                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Вход в аккаунт</h3>
                                                <div class="mt-2">
                                                    <p class="text-sm text-gray-500">Введите свои учетные данные для входа.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Кнопки -->
                                        <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                            <button type="button"
                                                    class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto"
                                                    @click="openLoginModal = false">
                                                Войти
                                            </button>
                                            <button type="button"
                                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                                                    @click="openLoginModal = false">
                                                Отмена
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
                
                <script>
                    function showLoginModal() {
                        console.log('show modal')
                    }    
                </script>
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
                             <div class="flex py-2 gap-x-1">
                            <a href="https://vk.com/brain_cat" class="hidden sm:block pt-1.5 border-transparent focus:border-transparent focus:ring-0">
                                <span class="[&>svg]:h-7 [&>svg]:w-7">
                                    <svg
                                        class="fill-red-700 hover:fill-red-700"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512">
                                        <path
                                        d="M31.5 63.5C0 95 0 145.7 0 247V265C0 366.3 0 417 31.5 448.5C63 480 113.7 480 215 480H233C334.3 480 385 480 416.5 448.5C448 417 448 366.3 448 265V247C448 145.7 448 95 416.5 63.5C385 32 334.3 32 233 32H215C113.7 32 63 32 31.5 63.5zM75.6 168.3H126.7C128.4 253.8 166.1 290 196 297.4V168.3H244.2V242C273.7 238.8 304.6 205.2 315.1 168.3H363.3C359.3 187.4 351.5 205.6 340.2 221.6C328.9 237.6 314.5 251.1 297.7 261.2C316.4 270.5 332.9 283.6 346.1 299.8C359.4 315.9 369 334.6 374.5 354.7H321.4C316.6 337.3 306.6 321.6 292.9 309.8C279.1 297.9 262.2 290.4 244.2 288.1V354.7H238.4C136.3 354.7 78 284.7 75.6 168.3z" />
                                    </svg>
                                    </span>
                                </a>
                            <a href="https://t.me/+Rvqt2hkAZKMwZDFi" class="hidden sm:block pt-1.5 border-transparent focus:border-transparent focus:ring-0">
                                <span class="[&amp;>svg]:h-7 [&amp;>svg]:w-7">
                                    <svg class="fill-red-700 hover:fill-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                        <path d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"></path>
                                    </svg>
                                    </span>
                                </a>
                             </div>
                                <button class="focus:outline-none text-white font-somebold  bg-red-700 hover:bg-red-700 focus:ring-4 focus:ring-red-300 rounded-lg
                                 text-sm px-4 py-2   dark:bg-red-700 dark:hover:bg-red-700 dark:focus:ring-red-700">
                                   Войти
                                </button>
                                <button class="focus:outline-none text-white bg-red-700 hover:bg-red-70 font-somebold0 focus:ring-4 focus:ring-red-300  rounded-lg
                                 text-sm px-4 py-2  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-700">
                                    Регистрация
                                </button>
                          
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
            <div class="my-5"> 
                <form class="max-w-5xl mx-auto hover:border-red-800  focus:border-red-800">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white hover:border-red-800  focus:border-red-800">Поиск</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-red-800  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white hover:border-red-800  focus:border-red-800 " placeholder="Санаторий им.Горького" required />
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-800 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 hover:border-red-800  focus:border-red-800">Поиск</button>
                    </div>
                </form>
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
                    <div class="pb-6 flex ">
                        <a href="{{ url('/contacts') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Контакты</a>
                        <div class="flex  gap-x-1 m-auto items-center">
                            <a href="https://vk.com/brain_cat" class="hidden sm:block  border-transparent focus:border-transparent focus:ring-0">
                                <span class="[&>svg]:h-7 [&>svg]:w-7">
                                    <svg
                                        class="fill-red-700 hover:fill-red-700"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512">
                                        <path
                                        d="M31.5 63.5C0 95 0 145.7 0 247V265C0 366.3 0 417 31.5 448.5C63 480 113.7 480 215 480H233C334.3 480 385 480 416.5 448.5C448 417 448 366.3 448 265V247C448 145.7 448 95 416.5 63.5C385 32 334.3 32 233 32H215C113.7 32 63 32 31.5 63.5zM75.6 168.3H126.7C128.4 253.8 166.1 290 196 297.4V168.3H244.2V242C273.7 238.8 304.6 205.2 315.1 168.3H363.3C359.3 187.4 351.5 205.6 340.2 221.6C328.9 237.6 314.5 251.1 297.7 261.2C316.4 270.5 332.9 283.6 346.1 299.8C359.4 315.9 369 334.6 374.5 354.7H321.4C316.6 337.3 306.6 321.6 292.9 309.8C279.1 297.9 262.2 290.4 244.2 288.1V354.7H238.4C136.3 354.7 78 284.7 75.6 168.3z" />
                                    </svg>
                                    </span>
                                </a>
                            <a href="https://t.me/+Rvqt2hkAZKMwZDFi" class="hidden sm:block  border-transparent focus:border-transparent focus:ring-0">
                                <span class="[&amp;>svg]:h-7 [&amp;>svg]:w-7">
                                    <svg class="fill-red-700 hover:fill-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                        <path d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"></path>
                                    </svg>
                                    </span>
                                </a>
                             </div>
                    </div>
                   
                  
                </nav>
                
                <p class="mt-10 text-center text-xs leading-5 text-gray-500">&copy; 2025 ООО "Волшебная страна". Все права защищены.</p>
            </div>
        </footer> 
    </div>
</body>

</html>
