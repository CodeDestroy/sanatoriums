@extends('layouts.app')

@section('content')

<div id="hero">
    <hero />
</div>

<div id="gridlist">
    <grid-list />
</div>
  <div class="my-10">
    <div class="w-full max-w-5xl mx-auto mt-10 px-4">
        <div class="flex flex-col md:flex-row bg-white rounded-xl shadow-md overflow-hidden border border-gray-300">
          
          <!-- Название курорта или отеля -->
          <input type="text" placeholder="Название курорта или отеля"
                 class="flex-1 px-4 py-3 text-sm text-gray-700 placeholder-gray-500 focus:outline-none border-b md:border-b-0 md:border-r border-gray-300"/>
      
          <!-- Даты -->
          <div class="flex items-center px-4 py-3 text-sm text-gray-700 border-b md:border-b-0 md:border-r border-gray-300">
            <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path d="M6 2a1 1 0 000 2h1v1a1 1 0 102 0V4h2v1a1 1 0 102 0V4h1a1 1 0 100-2h-1V1a1 1 0 10-2 0v1H9V1a1 1 0 10-2 0v1H6zM3 7a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7zm2 0v8h10V7H5z"/>
            </svg>
            17.05.2025 - 31.05.2025
          </div>
      
          <!-- Гости -->
          <div class="flex items-center px-4 py-3 text-sm text-gray-700 border-b md:border-b-0 md:border-r border-gray-300">
            2 взрослых <span class="text-gray-400 ml-1">0 детей</span>
            <svg class="w-4 h-4 ml-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
      
          <!-- Кнопка -->
          <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-medium px-6 py-3 w-full md:w-auto">
            Найти
          </button>
        </div>
      </div>
  </div>
<div class="bg-gray-100 py-24 sm:py-32"  id='dopObr'{{-- style="height: 100vh;" --}}>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-forest-green-800 sm:text-4xl">Отдыхайте с нами</h2>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-forest-green-800" aria-hidden="true">
                            <svg class="h-7 w-7 text-white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" fill="#19660e"/>
                            </svg>
                        </div>
                    </dt>
                    <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                        <p class="flex-auto">Внимательное отношение</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                  <dt class="text-base font-semibold leading-7 text-gray-900">
                    <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-forest-green-800">
                        <svg class="h-7 w-7 text-white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" fill="#19660e"/>
                        </svg>
                    </div>
                  </dt>
                  <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                      <p class="flex-auto">Комфорт</p>
                  </dd>
                </div>
                <div class="flex flex-col">
                  <dt class="text-base font-semibold leading-7 text-gray-900">
                      <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-forest-green-800">
                      <svg class="h-7 w-7 text-white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 0 0 6-6v-1.5m-6 7.5a6 6 0 0 1-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 0 1-3-3V4.5a3 3 0 1 1 6 0v8.25a3 3 0 0 1-3 3Z" fill="#19660e"/>
                        </svg>
                      </div>
                  </dt>
                  <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                      <p class="flex-auto">Контакт</p>
                  </dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<!--
<div id="cards">
    <cards />
</div>
-->

@endsection