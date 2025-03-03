@extends('layouts.app')

@section('content')
<div class="flex justify-center text-indigo-600 py-10 text-center"><h1 style="font-size: 1.5rem">Проверям, можете ли Вы получить скидку. <br>Свяжемся с Вами, когда оплата для станет доступна и сообщим новый тарифный план. </h1></div>
    
<div class="isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    <div></div>
    <div class="ring-gray-200 rounded-3xl p-8 ring-1 xl:p-10">
        <h3 id="tier-privilege" class="text-gray-900 text-lg font-semibold leading-8">
            Льготный
        </h3>
        <p class="text-gray-600 mt-4 text-sm leading-6">дополнительное профессиональное образование</p>
        <p class="mt-6 flex items-baseline gap-x-1">
            <span class="text-gray-900 text-4xl font-bold tracking-tight">@if ($freq == 100) {{$sum}} @else 12500 @endif</span>
            <span class="text-gray-600 text-sm font-semibold leading-6"> @if ($freq == 100) 100% @else 50% + 50%@endif</span></p>
            {{-- <a href="/payment/tier-privilege/100/22000" aria-describedby="tier-privilege" class="bg-purple-800 text-white shadow-sm hover:bg-purple-700 focus-visible:outline-purple-800 mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">
                Оплатить</a> --}}
            <ul role="list" class="text-gray-600 mt-8 space-y-3 text-sm leading-6 xl:mt-10">
                <li class="flex gap-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="text-purple-800 h-6 w-5 flex-none">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"></path></svg> 144 часа</li><li class="flex gap-x-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="text-purple-800 h-6 w-5 flex-none"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"></path></svg> 17 вебинаров</li><li class="flex gap-x-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="text-purple-800 h-6 w-5 flex-none"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"></path></svg> 16 тем</li><li class="flex gap-x-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="text-purple-800 h-6 w-5 flex-none"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"></path></svg> доступ к материалам в течение года</li><li class="flex gap-x-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="text-purple-800 h-6 w-5 flex-none"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"></path></svg> подходит врачам, педагогам, дефектологам</li><li class="flex gap-x-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="text-purple-800 h-6 w-5 flex-none"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"></path></svg> для членов "Ассоциации педагогов, психологов, психотерапветов Центрального Черноземья"</li><li class="flex gap-x-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="text-purple-800 h-6 w-5 flex-none"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"></path></svg> для сотрудников ГК "Здоровый ребенок</li><li class="flex gap-x-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="text-purple-800 h-6 w-5 flex-none"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"></path></svg> для сотрудников фирм-франчайзи ГК "Здоровый ребенок"</li><li class="flex gap-x-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="text-purple-800 h-6 w-5 flex-none"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"></path>
                    </svg> для студентов профильных образовательных учреждений
                </li>
            </ul>
        </div>
    
</div>

@endsection