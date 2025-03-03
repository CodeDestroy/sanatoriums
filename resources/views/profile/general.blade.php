@extends('layouts.app')

@section('content')

<div class="mx-auto max-w-7xl pt-16 lg:flex lg:gap-x-16 lg:px-8">
    <h1 class="sr-only">Основные настройки</h1>
  
    <aside class="flex overflow-x-auto border-b border-gray-900/5 py-4 lg:block lg:w-64 lg:flex-none lg:border-0 lg:py-20">
        <nav class="flex-none px-4 sm:px-6 lg:px-0">
            <ul role="list" class="flex gap-x-3 gap-y-1 whitespace-nowrap lg:flex-col">
                <li>
                    <a href="{{ route('settings.general') }}" class="bg-gray-50 text-indigo-600 group flex gap-x-3 rounded-md py-2 pl-2 pr-3 text-sm leading-6 font-semibold" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-gray-50 text-indigo-600&quot;, Default: &quot;text-gray-700 hover:text-indigo-600 hover:bg-gray-50&quot;">
                        <svg class="h-6 w-6 shrink-0 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Основные
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('settings.security') }}" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md py-2 pl-2 pr-3 text-sm leading-6 font-semibold" x-state-description="undefined: &quot;bg-gray-50 text-indigo-600&quot;, undefined: &quot;text-gray-700 hover:text-indigo-600 hover:bg-gray-50&quot;">
                        <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33"></path>
                        </svg>
                        Безопасность
                    </a>
                </li>
                <li>
                    <a href="{{ route('settings.education') }}" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md py-2 pl-2 pr-3 text-sm leading-6 font-semibold" x-state-description="undefined: &quot;bg-gray-50 text-indigo-600&quot;, undefined: &quot;text-gray-700 hover:text-indigo-600 hover:bg-gray-50&quot;">
                        <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"></path>
                        </svg>
                        Обучение
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('settings.documents') }}" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md py-2 pl-2 pr-3 text-sm leading-6 font-semibold" x-state-description="undefined: &quot;bg-gray-50 text-indigo-600&quot;, undefined: &quot;text-gray-700 hover:text-indigo-600 hover:bg-gray-50&quot;">
                        <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"></path>
                        </svg>  
                        Документы
                    </a>
                </li>
                {{-- <li>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md py-2 pl-2 pr-3 text-sm leading-6 font-semibold" x-state-description="undefined: &quot;bg-gray-50 text-indigo-600&quot;, undefined: &quot;text-gray-700 hover:text-indigo-600 hover:bg-gray-50&quot;">
                        <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"></path>
                        </svg>
                        Платежи
                    </a>
                </li> --}}
            </ul>
        </nav>
    </aside>
  
    <main class="px-4 py-16 sm:px-6 lg:flex-auto lg:px-0 lg:py-20">
        <div class="mx-auto max-w-2xl space-y-16 sm:space-y-20 lg:mx-0 lg:max-w-none">
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Профиль</h2>
                <p class="mt-1 text-sm leading-6 text-gray-500">Основная информация.</p>
  
                <dl class="mt-6 space-y-6 divide-y divide-gray-100 border-t border-gray-200 text-sm leading-6">
                    {{-- <div class="pt-6 sm:flex">
                        <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Фамилия</dt>
                        <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                            <div class="text-gray-900">{{ Auth::user()->secondName }}</div>
                            <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Изменить</button>
                        </dd>
                    </div> --}}
                    <form id="secondNameForm" action="{{ route('settings.general.setSecondName') }}" method="POST">
                        @csrf
                        <div class="pt-6 sm:flex">
                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Фамилия</dt>
                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <div class="text-gray-900">
                                    <input 
                                        id='secondNameInp' 
                                        disabled 
                                        name='secondName' 
                                        value="{{ Auth::user()->secondName }}" 
                                        class="bg-white"
                                    >
                                </div>
                                <button type="button" onclick="updateSecondName(event)" class="font-semibold text-indigo-600 hover:text-indigo-500">Изменить</button>
                                <button type="submit" id='secondNameSub' class="font-semibold text-indigo-600 hover:text-indigo-500" style="display: none">Сохранить</button>
                            </dd>
                        </div>
                    </form>
                    <script>
                        function updateSecondName(event) {
                            console.log()
                            event.srcElement.style.display = 'none'
                            document.getElementById('secondNameInp').disabled = false; 
                            document.getElementById('secondNameInp').className = 'block w-full rounded-md border-0 py-1.5 px-4 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6'
                            document.getElementById('secondNameSub').style.display = '';
                        }
                        
                    </script>
                    <form id="nameForm" action="{{ route('settings.general.setName') }}" method="POST">
                        @csrf
                        <div class="pt-6 sm:flex">
                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Имя</dt>
                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <div class="text-gray-900">
                                    <input 
                                        id='nameInp' 
                                        disabled 
                                        name='name' 
                                        value="{{ Auth::user()->name }}" 
                                        class="bg-white"
                                    >
                                </div>
                                <button type="button" onclick="updateName(event)" class="font-semibold text-indigo-600 hover:text-indigo-500">Изменить</button>
                                <button type="submit" id='nameSub' class="font-semibold text-indigo-600 hover:text-indigo-500" style="display: none">Сохранить</button>
                            </dd>
                        </div>
                    </form>
                    <script>
                        function updateName(event) {
                            console.log()
                            event.srcElement.style.display = 'none'
                            document.getElementById('nameInp').disabled = false; 
                            document.getElementById('nameInp').className = 'block w-full rounded-md border-0 py-1.5 px-4 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6'
                            document.getElementById('nameSub').style.display = '';
                        }
                        
                    </script>
                    {{-- <div class="pt-6 sm:flex">
                        <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Имя</dt>
                        <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                            <div class="text-gray-900">{{ Auth::user()->name }}</div>
                            <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Изменить</button>
                        </dd>
                    </div> --}}
                    <form id="patronymicNameForm" action="{{ route('settings.general.setPatronymicName') }}" method="POST">
                        @csrf
                        <div class="pt-6 sm:flex">
                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Отчество</dt>
                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <div class="text-gray-900">
                                    <input 
                                        id='patronymicNameInp' 
                                        disabled 
                                        name='patronymicName' 
                                        value="{{ Auth::user()->patronymicName }}" 
                                        class="bg-white"
                                    >
                                </div>
                                <button type="button" onclick="updatePatronymicName(event)" class="font-semibold text-indigo-600 hover:text-indigo-500">Изменить</button>
                                <button type="submit" id='patronymicNameSub' class="font-semibold text-indigo-600 hover:text-indigo-500" style="display: none">Сохранить</button>
                            </dd>
                        </div>
                    </form>
                    <script>
                        function updatePatronymicName(event) {
                            console.log()
                            event.srcElement.style.display = 'none'
                            document.getElementById('patronymicNameInp').disabled = false; 
                            document.getElementById('patronymicNameInp').className = 'block w-full rounded-md border-0 py-1.5 px-4 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6'
                            document.getElementById('patronymicNameSub').style.display = '';
                        }
                        
                    </script>
                    <form id="emailForm" action="{{ route('settings.general.setEmail') }}" method="POST">
                        @csrf
                        <div class="pt-6 sm:flex">
                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Почта</dt>
                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <div class="text-gray-900">
                                    <input 
                                        id='emailInp' 
                                        disabled 
                                        name='email' 
                                        value="{{ Auth::user()->email }}" 
                                        class="bg-white"
                                    >
                                </div>
                                {{-- $request->user()->sendEmailVerificationNotification(); --}}
                                @if(!Auth::user()->email_verified_at)
                                {{-- <form class="mr-3" id="verifyEmail" method="POST" action="{{ route('verification.send') }}"> --}}
                                    {{-- <button type="button" onclick="verifyEmail(event)" class="font-semibold text-indigo-600 hover:text-indigo-500">Подтвердить email</button> --}}
                                    <a href="{{route('verification.noticeNew')}}"class="font-semibold text-indigo-600 hover:text-indigo-500">Подтвердить email</a>
                                {{-- </form> --}}
                                @endif
                                <button type="button" onclick="updateEmail(event)" class="font-semibold text-indigo-600 hover:text-indigo-500">Изменить</button>
                                <button type="submit" id='emailSub' class="font-semibold text-indigo-600 hover:text-indigo-500" style="display: none">Сохранить</button>
                            </dd>
                        </div>
                    </form>
                    <script>
                        function verifyEmail(event) {
                            console.log()
                            fetch("{{ route('verification.sendGet') }}")
                            .then(response => {
                                if (response.ok)
                                    alert('Сообщение с сылкой направлено на вашу почту')
                                    console.log(response)
                            })
                            .catch(error => {
                                console.log(error)
                                alert('Неизвестная ошибка')
                            })
                        }
                        function updateEmail(event) {
                            console.log()
                            event.srcElement.style.display = 'none'
                            document.getElementById('emailInp').disabled = false; 
                            document.getElementById('emailInp').className = 'block w-full rounded-md border-0 py-1.5 px-4 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6'
                            document.getElementById('emailSub').style.display = '';
                        }
                        
                    </script>
                    <form id="phoneForm" action="{{ route('settings.general.setPhone') }}" method="POST">
                        @csrf
                        <div class="pt-6 sm:flex">
                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Телефон</dt>
                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <div class="text-gray-900">
                                    <input 
                                        id='phoneInp' 
                                        disabled 
                                        name='phone' 
                                        value="{{ Auth::user()->phone }}" 
                                        class="bg-white"
                                    >
                                </div>
                                <button type="button" onclick="updatePhone(event)" class="font-semibold text-indigo-600 hover:text-indigo-500">Изменить</button>
                                <button type="submit" id='phoneSub' class="font-semibold text-indigo-600 hover:text-indigo-500" style="display: none">Сохранить</button>
                            </dd>
                        </div>
                    </form>
                    <script>
                        function updatePhone(event) {
                            console.log()
                            event.srcElement.style.display = 'none'
                            document.getElementById('phoneInp').disabled = false; 
                            document.getElementById('phoneInp').className = 'block w-full rounded-md border-0 py-1.5 px-4 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6'
                            document.getElementById('phoneSub').style.display = '';
                        }
                        
                    </script>
                    {{-- <form id="tgNicknameForm" action="{{ route('settings.general.setTgNickname') }}" method="POST">
                        @csrf
                        <div class="pt-6 sm:flex">
                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Аккаунт Telegram</dt>
                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <div class="text-gray-900">
                                    <input 
                                        id='tgNicknameInp' 
                                        disabled 
                                        name='tgNickname' 
                                        value="{{ Auth::user()->tgNickname }}" 
                                        class="bg-white"
                                    >
                                </div>
                                <button type="button" onclick="updateTg(event)" class="font-semibold text-indigo-600 hover:text-indigo-500">Изменить</button>
                                <button type="submit" id='tgNicknameSub' class="font-semibold text-indigo-600 hover:text-indigo-500" style="display: none">Сохранить</button>
                            </dd>
                        </div>
                    </form> --}}
                    <script>
                        function updateTg(event) {
                            console.log()
                            event.srcElement.style.display = 'none'
                            document.getElementById('tgNicknameInp').disabled = false; 
                            document.getElementById('tgNicknameInp').className = 'block w-full rounded-md border-0 py-1.5 px-4 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6'
                            document.getElementById('tgNicknameSub').style.display = '';
                        }
                        
                    </script>
                    <form id="whatsAppForm" action="{{ route('settings.general.setWhatsApp') }}"  method="POST">
                        @csrf
                        <div class="pt-6 sm:flex">
                            <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">WhatsApp по номеру</dt>
                            {{-- <dd id='whatsAppDD' class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <div class="text-gray-900">{{ Auth::user()->hasWhatsApp ? 'Есть WhatsApp' : 'Нет WhatsApp' }}</div>
                                <button onclick="document.getElementById('whatsAppDD').style.display = 'none'; document.getElementById('whatsAppForm').style.display = 'block';" type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Изменить</button>
                            </dd> --}}

                            
                            <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                                <div class="text-gray-900"><input id="hasWhatsApp" type="hidden" value="{{ Auth::user()->hasWhatsApp }}" type="hidden" name="hasWhatsApp"> {{ Auth::user()->hasWhatsApp ? 'Есть WhatsApp' : 'Нет WhatsApp' }}</div>
                                <button type="submit" class="font-semibold text-indigo-600 hover:text-indigo-500">Изменить</button>
                            </dd>
                            
                        </div>
                    </form>
                    
                </dl>
            </div>
  
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Остальные данные</h2>
                {{-- <p class="mt-1 text-sm leading-6 text-gray-500">Эта информация доступна только нам.</p> --}}
  
                {{-- <ul role="list" class="mt-6 divide-y divide-gray-100 border-t border-gray-200 text-sm leading-6">
                    <li class="flex justify-between gap-x-6 py-6">
                        <div class="font-medium text-gray-900">TD Canada Trust</div>
                    </li>
                    <li class="flex justify-between gap-x-6 py-6">
                        <div class="font-medium text-gray-900">Royal Bank of Canada</div>
                    </li>
                </ul> --}}
    
                <div class="flex border-t border-gray-100 pt-6">
                    <a href="{{ route('profile.general')}}" class="text-sm font-semibold leading-6 text-indigo-600 hover:text-indigo-500">{{-- <span aria-hidden="true">+</span>  --}}Посмотреть и изменить</a>
                </div>
            </div>
  
            
        </div>
    </main>
</div>
  
@endsection