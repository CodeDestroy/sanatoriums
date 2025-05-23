@extends('layouts.app')

@section('content')

 <!--  <div id="hero">
    <hero />
</div> -->
<div class="relative w-full max-w-7xl mx-auto px-6 lg:px-8"> <!-- px-4: защищает от выхода за край -->
    <!-- Контейнер карусели + кнопки внутри -->
    <div class="relative">
        <!-- Карусель -->
        <div id="carousel" class="overflow-hidden relative">
            <div class="flex transition-transform duration-500 bg-gray-100" style="transform: translateX(0%)" data-slides>
              <!-- Слайд 1 -->
                <div class="w-full shrink-0 p-4">
                    <div class="grid gap-4 
                                grid-cols-1 
                                sm:grid-cols-3 sm:grid-rows-3 sm:grid-flow-col">
                        <div class="sm:col-span-2 px-4 py-6 flex justify-center items-center"> 
                            <p class="text-4xl font-bold tracking-tight text-mona-lisa-600 sm:text-4xl">Санаторий имени Горького</p>
                        </div>
                        <div class="sm:col-span-2 sm:row-span-2  px-4 py-8 flex justify-center items-center">
                            <p class="text-xl text-salt-800 font-semibold py-2">
                            текст  текст текст текст текст  текст текст текст текст текст текст текст текст
                            текст текст текст текст текст текст текст текст текст текст </p>
                        </div>
                        <div class="sm:row-span-3 flex-shrink-0 content-center"><img class="h-60 sm:h-48 object-cover sm:object-none rounded-xl"  src="img/1234.jpg"></div>
                    </div>
                </div>

                <!-- Слайд 2 -->
                <div class="w-full shrink-0 p-4">
                    <div class="grid gap-4 
                                grid-cols-1 
                                sm:grid-cols-3 sm:grid-rows-3 sm:grid-flow-col">
                        <div class="sm:col-span-2 bg-green-200 p-4 flex justify-center items-center">01</div>
                        <div class="sm:col-span-2 sm:row-span-2 bg-red-200 p-4 flex justify-center items-center">02</div>
                        <div class="sm:row-span-3 bg-blue-200 p-4 flex justify-center items-center">03</div>
                    </div>
                </div>
              
            </div>
        </div>

        <!-- Кнопки (внутри контейнера, не выходят за экран) -->
        <div class="absolute inset-y-0 left-0 flex items-center pl-2">
            <button id="prevBtn" style="width: 2rem; height: 2rem;" class="flex items-center bg-white border p-2 rounded-full shadow hover:bg-gray-100 z-10">
                &#8592;
            </button>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2">
            <button id="nextBtn" style="width: 2rem; height: 2rem;" class="flex items-center bg-white border p-2 rounded-full shadow hover:bg-gray-100 z-10">
                &#8594;
            </button>
        </div>
    </div>
</div>


<!--  <div id="gridlist">
    <grid-list />
</div> -->
<div class="my-10">  
    <div class="w-full max-w-5xl mx-auto mt-10 px-2 ">
        <div class="flex flex-col md:flex-row bg-white rounded-xl shadow-md overflow-hidden border border-gray-300">
          
          <!-- Название курорта или отеля -->
            <input type="text" placeholder="Название курорта или отеля"
                  class="flex-1  py-3 text-sm text-gray-700 placeholder-gray-500 focus:outline-none border-b md:border-r border-gray-300 hover:border-red-800  focus:border-red-800"/>
        
            <!-- Даты -->
            <div class="flex items-center px-4 py-3 text-sm text-gray-700 border-b  md:border-r border-gray-300 ">
                <svg class="w-5 h-5 text-red-700 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M6 2a1 1 0 000 2h1v1a1 1 0 102 0V4h2v1a1 1 0 102 0V4h1a1 1 0 100-2h-1V1a1 1 0 10-2 0v1H9V1a1 1 0 10-2 0v1H6zM3 7a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7zm2 0v8h10V7H5z"/>
                </svg>
                17.05.2025 - 31.05.2025
              
            </div>
            {{--  --}}
                <!-- ====== Date range picker Section Start -->
                {{-- <section class="pb-10 pt-20 lg:pb-[120px] lg:pt-[120px] dark:bg-dark">
                    <div class="container mx-auto">
                        <div class="-mx-4 flex flex-wrap">
                            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                                <div class="mb-12">
                                    <label for="" class="mb-[10px] block text-base font-medium text-dark dark:text-white">
                                        Date range picker
                                    </label>

                                    <div class="relative">
                                        <!-- Datepicker Input with Icons -->
                                        <div class="relative flex items-center">
                                            <span class="absolute left-0 pl-5 text-dark-5">
                                            <!-- Calendar Icon -->
                                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M17.5 3.3125H15.8125V2.625C15.8125 2.25 15.5 1.90625 15.0937 1.90625C14.6875 1.90625 14.375 2.21875 14.375 2.625V3.28125H5.59375V2.625C5.59375 2.25 5.28125 1.90625 4.875 1.90625C4.46875 1.90625 4.15625 2.21875 4.15625 2.625V3.28125H2.5C1.4375 3.28125 0.53125 4.15625 0.53125 5.25V16.125C0.53125 17.1875 1.40625 18.0937 2.5 18.0937H17.5C18.5625 18.0937 19.4687 17.2187 19.4687 16.125V5.25C19.4687 4.1875 18.5625 3.3125 17.5 3.3125ZM2.5 4.71875H4.1875V5.34375C4.1875 5.71875 4.5 6.0625 4.90625 6.0625C5.3125 6.0625 5.625 5.75 5.625 5.34375V4.71875H14.4687V5.34375C14.4687 5.71875 14.7812 6.0625 15.1875 6.0625C15.5937 6.0625 15.9062 5.75 15.9062 5.34375V4.71875H17.5C17.8125 4.71875 18.0625 4.96875 18.0625 5.28125V7.34375H1.96875V5.28125C1.96875 4.9375 2.1875 4.71875 2.5 4.71875ZM17.5 16.6562H2.5C2.1875 16.6562 1.9375 16.4062 1.9375 16.0937V8.71875H18.0312V16.125C18.0625 16.4375 17.8125 16.6562 17.5 16.6562Z"
                                                    fill="" />
                                                    <path
                                                    d="M9 9.59375H8.3125C8.125 9.59375 8 9.71875 8 9.90625V10.5938C8 10.7813 8.125 10.9062 8.3125 10.9062H9C9.1875 10.9062 9.3125 10.7813 9.3125 10.5938V9.90625C9.3125 9.71875 9.15625 9.59375 9 9.59375Z"
                                                    fill="" />
                                                    <path
                                                    d="M11.8438 9.59375H11.1562C10.9687 9.59375 10.8438 9.71875 10.8438 9.90625V10.5938C10.8438 10.7813 10.9687 10.9062 11.1562 10.9062H11.8438C12.0313 10.9062 12.1562 10.7813 12.1562 10.5938V9.90625C12.1562 9.71875 12.0313 9.59375 11.8438 9.59375Z"
                                                    fill="" />
                                                    <path
                                                    d="M14.6875 9.59375H14C13.8125 9.59375 13.6875 9.71875 13.6875 9.90625V10.5938C13.6875 10.7813 13.8125 10.9062 14 10.9062H14.6875C14.875 10.9062 15 10.7813 15 10.5938V9.90625C15 9.71875 14.875 9.59375 14.6875 9.59375Z"
                                                    fill="" />
                                                    <path
                                                    d="M6 12H5.3125C5.125 12 5 12.125 5 12.3125V13C5 13.1875 5.125 13.3125 5.3125 13.3125H6C6.1875 13.3125 6.3125 13.1875 6.3125 13V12.3125C6.3125 12.125 6.15625 12 6 12Z"
                                                    fill="" />
                                                    <path
                                                    d="M9 12H8.3125C8.125 12 8 12.125 8 12.3125V13C8 13.1875 8.125 13.3125 8.3125 13.3125H9C9.1875 13.3125 9.3125 13.1875 9.3125 13V12.3125C9.3125 12.125 9.15625 12 9 12Z"
                                                    fill="" />
                                                    <path
                                                    d="M11.8438 12H11.1562C10.9687 12 10.8438 12.125 10.8438 12.3125V13C10.8438 13.1875 10.9687 13.3125 11.1562 13.3125H11.8438C12.0313 13.3125 12.1562 13.1875 12.1562 13V12.3125C12.1562 12.125 12.0313 12 11.8438 12Z"
                                                    fill="" />
                                                    <path
                                                    d="M14.6875 12H14C13.8125 12 13.6875 12.125 13.6875 12.3125V13C13.6875 13.1875 13.8125 13.3125 14 13.3125H14.6875C14.875 13.3125 15 13.1875 15 13V12.3125C15 12.125 14.875 12 14.6875 12Z"
                                                    fill="" />
                                                    <path
                                                    d="M6 14.4062H5.3125C5.125 14.4062 5 14.5312 5 14.7187V15.4063C5 15.5938 5.125 15.7187 5.3125 15.7187H6C6.1875 15.7187 6.3125 15.5938 6.3125 15.4063V14.7187C6.3125 14.5312 6.15625 14.4062 6 14.4062Z"
                                                    fill="" />
                                                    <path
                                                    d="M9 14.4062H8.3125C8.125 14.4062 8 14.5312 8 14.7187V15.4063C8 15.5938 8.125 15.7187 8.3125 15.7187H9C9.1875 15.7187 9.3125 15.5938 9.3125 15.4063V14.7187C9.3125 14.5312 9.15625 14.4062 9 14.4062Z"
                                                    fill="" />
                                                    <path
                                                    d="M11.8438 14.4062H11.1562C10.9687 14.4062 10.8438 14.5312 10.8438 14.7187V15.4063C10.8438 15.5938 10.9687 15.7187 11.1562 15.7187H11.8438C12.0313 15.7187 12.1562 15.5938 12.1562 15.4063V14.7187C12.1562 14.5312 12.0313 14.4062 11.8438 14.4062Z"
                                                    fill="" />
                                                </svg>
                                            </span>

                                            <input id="datepicker" type="text"
                                                class="w-full rounded-lg border border-stroke bg-transparent py-2.5 pl-[50px] pr-8 text-dark-2 outline-none transition focus:border-primary dark:border-dark-3 dark:text-dark-6 dark:focus:border-primary"
                                                placeholder="Select a date" readonly />
                                            <span class="absolute right-0 cursor-pointer pr-4 text-dark-5" id="toggleDatepicker">
                                            <!-- Arrow Down Icon -->
                                                <svg class="fill-current stroke-current" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M2.29635 5.15354L2.29632 5.15357L2.30055 5.1577L7.65055 10.3827L8.00157 10.7255L8.35095 10.381L13.701 5.10603L13.701 5.10604L13.7035 5.10354C13.722 5.08499 13.7385 5.08124 13.7499 5.08124C13.7613 5.08124 13.7778 5.08499 13.7963 5.10354C13.8149 5.12209 13.8187 5.13859 13.8187 5.14999C13.8187 5.1612 13.815 5.17734 13.7973 5.19552L8.04946 10.8433L8.04945 10.8433L8.04635 10.8464C8.01594 10.8768 7.99586 10.8921 7.98509 10.8992C7.97746 10.8983 7.97257 10.8968 7.96852 10.8952C7.96226 10.8929 7.94944 10.887 7.92872 10.8721L2.20253 5.2455C2.18478 5.22733 2.18115 5.2112 2.18115 5.19999C2.18115 5.18859 2.18491 5.17209 2.20346 5.15354C2.222 5.13499 2.2385 5.13124 2.2499 5.13124C2.2613 5.13124 2.2778 5.13499 2.29635 5.15354Z"
                                                    fill="" stroke="" />
                                                </svg>
                                            </span>
                                        </div>

                                        <!-- Datepicker Container -->
                                        <div id="datepicker-container"
                                            class="shadow-datepicker absolute mt-2 rounded-xl border border-stroke bg-white pt-5 dark:border-dark-3 dark:bg-dark-2">
                                            <div class="flex items-center justify-between px-5">
                                                <button id="prevMonth"
                                                    class="rounded-md px-2 py-2 text-dark hover:bg-gray-2 dark:text-white dark:hover:bg-dark">
                                                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.5312 17.9062C13.3437 17.9062 13.1562 17.8438 13.0312 17.6875L5.96875 10.5C5.6875 10.2187 5.6875 9.78125 5.96875 9.5L13.0312 2.3125C13.3125 2.03125 13.75 2.03125 14.0312 2.3125C14.3125 2.59375 14.3125 3.03125 14.0312 3.3125L7.46875 10L14.0625 16.6875C14.3438 16.9688 14.3438 17.4062 14.0625 17.6875C13.875 17.8125 13.7187 17.9062 13.5312 17.9062Z"
                                                        fill="" />
                                                    </svg>
                                                </button>
                                                <div id="currentMonth" class="text-lg font-medium text-dark-3 dark:text-white">August 2023</div>
                                                <button id="nextMonth"
                                                    class="rounded-md px-2 py-2 text-dark hover:bg-gray-2 dark:text-white dark:hover:bg-dark">
                                                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.46875 17.9063C6.28125 17.9063 6.125 17.8438 5.96875 17.7188C5.6875 17.4375 5.6875 17 5.96875 16.7188L12.5312 10L5.96875 3.3125C5.6875 3.03125 5.6875 2.59375 5.96875 2.3125C6.25 2.03125 6.6875 2.03125 6.96875 2.3125L14.0313 9.5C14.3125 9.78125 14.3125 10.2187 14.0313 10.5L6.96875 17.6875C6.84375 17.8125 6.65625 17.9063 6.46875 17.9063Z"
                                                        fill="" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="mb-4 mt-6 grid grid-cols-7 px-5">
                                                <div class="text-center text-sm font-medium text-secondary-color">
                                                    Sun
                                                </div>
                                                <div class="text-center text-sm font-medium text-secondary-color">
                                                    Mon
                                                </div>
                                                <div class="text-center text-sm font-medium text-secondary-color">
                                                    Tue
                                                </div>
                                                <div class="text-center text-sm font-medium text-secondary-color">
                                                    Wed
                                                </div>
                                                <div class="text-center text-sm font-medium text-secondary-color">
                                                    Thu
                                                </div>
                                                <div class="text-center text-sm font-medium text-secondary-color">
                                                    Fri
                                                </div>
                                                <div class="text-center text-sm font-medium text-secondary-color">
                                                    Sat
                                                </div>
                                            </div>
                                            <div id="days-container" class="mt-2 grid grid-cols-7 gap-y-0.5 px-5">
                                            <!-- Pre-populated calendar days - will be replaced by JavaScript when available -->
                                            <!-- First row (empty cells for days before month starts + first few days) -->
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                1</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                2</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                3</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                4</div>

                                            <!-- Second row -->
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                5</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                6</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                7</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                8</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                9</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                10</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                11</div>

                                            <!-- Third row with selected range example (12-16) -->
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] bg-primary text-white dark:text-white rounded-r-none">
                                                12</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] bg-dark-3 text-white rounded-none">
                                                13</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] bg-dark-3 text-white rounded-none">
                                                14</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] bg-dark-3 text-white rounded-none">
                                                15</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] bg-primary text-white dark:text-white rounded-l-none">
                                                16</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                17</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                18</div>

                                            <!-- Fourth row -->
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                19</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                20</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                21</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                22</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                23</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                24</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                25</div>

                                            <!-- Fifth row -->
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                26</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                27</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                28</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                29</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                30</div>
                                            <div
                                                class="flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white">
                                                31</div>
                                            </div>
                                            <!-- Buttons -->
                                            <div class="mt-5 flex justify-end space-x-2.5 border-t border-stroke p-5 dark:border-dark-3">
                                            <button id="cancelButton"
                                                class="rounded-lg border border-primary px-5 py-2.5 text-base font-medium text-primary hover:bg-blue-light-5">
                                                Cancel
                                            </button>
                                            <button id="applyButton"
                                                class="rounded-lg bg-primary px-5 py-2.5 text-base font-medium text-white hover:bg-[#1B44C8]">
                                                Apply
                                            </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <!-- ====== Date range picker Section End -->

                <script>
                    const datepicker = document.getElementById("datepicker");
                    const datepickerContainer = document.getElementById(
                    "datepicker-container",
                    );
                    const daysContainer = document.getElementById("days-container");
                    const currentMonthElement = document.getElementById("currentMonth");
                    const prevMonthButton = document.getElementById("prevMonth");
                    const nextMonthButton = document.getElementById("nextMonth");
                    const cancelButton = document.getElementById("cancelButton");
                    const applyButton = document.getElementById("applyButton");
                    const toggleDatepicker = document.getElementById("toggleDatepicker");

                    let currentDate = new Date();
                    let selectedStartDate = null;
                    let selectedEndDate = null;


                    // Function to render the calendar
                    function renderCalendar() {
                    const year = currentDate.getFullYear();
                    const month = currentDate.getMonth();

                    // Update month display with current date (not static August 2023)
                    currentMonthElement.textContent = currentDate.toLocaleDateString(
                        "en-US",
                        { month: "long", year: "numeric" },
                    );

                    daysContainer.innerHTML = "";
                    const firstDayOfMonth = new Date(year, month, 1).getDay();
                    const daysInMonth = new Date(year, month + 1, 0).getDate();

                    for (let i = 0; i < firstDayOfMonth; i++) {
                        daysContainer.innerHTML += `<div></div>`;
                    }

                    for (let i = 1; i <= daysInMonth; i++) {
                        const day = new Date(year, month, i);
                        const dayString = day.toLocaleDateString("en-US");

                        let className =
                        "flex items-center justify-center cursor-pointer w-[46px] h-[46px] rounded-full text-dark-3 dark:text-dark-6 hover:bg-primary hover:text-white";

                        // Highlight start and end dates
                        if (selectedStartDate && dayString === selectedStartDate) {
                        className +=
                            " bg-primary text-white dark:text-white rounded-r-none";
                        }
                        if (selectedEndDate && dayString === selectedEndDate) {
                        className +=
                            " bg-primary text-white dark:text-white rounded-l-none";
                        }

                        // Highlight dates between start and end
                        if (
                        selectedStartDate &&
                        selectedEndDate &&
                        new Date(day) > new Date(selectedStartDate) &&
                        new Date(day) < new Date(selectedEndDate)
                        ) {
                        className += " bg-dark-3 text-white rounded-none"; // Add your custom class for the range
                        }

                        daysContainer.innerHTML += `<div class="${className}" data-date="${dayString}">${i}</div>`;
                    }

                    document.querySelectorAll("#days-container div").forEach((day) => {
                        if (day.dataset && day.dataset.date) {
                        day.addEventListener("click", function (event) {
                            event.stopPropagation(); // Prevent event from bubbling up to document

                            const selectedDay = this.dataset.date;

                            if (!selectedStartDate || (selectedStartDate && selectedEndDate)) {
                            selectedStartDate = selectedDay;
                            selectedEndDate = null;
                            } else {
                            if (new Date(selectedDay) < new Date(selectedStartDate)) {
                                selectedEndDate = selectedStartDate;
                                selectedStartDate = selectedDay;
                            } else {
                                selectedEndDate = selectedDay;
                            }
                            }

                            updateInput();
                            renderCalendar(); // Re-render calendar to update highlighted range
                        });
                        }
                    });
                    }

                    // Function to update the datepicker input
                    function updateInput() {
                    if (selectedStartDate && selectedEndDate) {
                        datepicker.value = `${selectedStartDate} - ${selectedEndDate}`;
                    } else if (selectedStartDate) {
                        datepicker.value = selectedStartDate;
                    } else {
                        datepicker.value = "";
                    }
                    }

                    // Initialize calendar when page loads
                    document.addEventListener("DOMContentLoaded", function () {
                    renderCalendar();
                    });

                    // Toggle datepicker visibility
                    datepicker.addEventListener("click", function (event) {
                    event.stopPropagation(); // Prevent click from bubbling up to document
                    datepickerContainer.classList.toggle('hidden');
                    if (!datepickerContainer.classList.contains('hidden')) {
                        renderCalendar();
                    }
                    });

                    toggleDatepicker.addEventListener("click", function (event) {
                    event.stopPropagation(); // Prevent click from bubbling up to document
                    datepickerContainer.classList.toggle('hidden');
                    if (!datepickerContainer.classList.contains('hidden')) {
                        renderCalendar();
                    }
                    });

                    // Close datepicker when clicking outside
                    document.addEventListener('click', function (event) {
                    if (!datepickerContainer.contains(event.target) &&
                        event.target !== datepicker &&
                        event.target !== toggleDatepicker) {
                        datepickerContainer.classList.add('hidden');
                    }
                    });

                    // Navigate months
                    prevMonthButton.addEventListener("click", function () {
                    currentDate.setMonth(currentDate.getMonth() - 1);
                    renderCalendar();
                    });

                    nextMonthButton.addEventListener("click", function () {
                    currentDate.setMonth(currentDate.getMonth() + 1);
                    renderCalendar();
                    });

                    // Cancel selection and close calendar
                    cancelButton.addEventListener("click", function () {
                    selectedStartDate = null;
                    selectedEndDate = null;
                    updateInput();
                    datepickerContainer.classList.add('hidden');
                    });

                    // Apply selection and close calendar
                    applyButton.addEventListener("click", function () {
                    updateInput();
                    datepickerContainer.classList.add('hidden');
                    });
                </script>
            {{--  --}}
            <!-- Гости -->
            <div class="flex items-center px-4 py-3 text-sm text-gray-700 border-b md:border-b-0 md:border-r border-gray-300">
                2 взрослых <span class="text-gray-400 ml-1">0 детей</span>
                <svg class="w-4 h-4 ml-2 text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </div>
        
            <!-- Кнопка -->
            <button class="bg-red-700 hover:bg-red-700 text-white text-sm font-medium px-6 py-3 w-full md:w-auto">
                Найти
            </button>
        </div>
    </div>
</div>

<div id="hits">
    <hits/>
</div> 


<div class="bg-gray-100 py-24 sm:py-32"  id='dopObr'{{-- style="height: 100vh;" --}}>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-red-800 sm:text-4xl">Отдыхайте с нами</h2>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-red-800" aria-hidden="true">
                            <svg class="h-7 w-7 text-white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" fill="rgb(153, 27, 27)"/>
                            </svg>
                        </div>
                    </dt>
                    <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                        <p class="flex-auto">Внимательное отношение</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-red-800">
                            <svg class="h-7 w-7 text-white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" fill="rgb(153, 27, 27)"/>
                            </svg>
                        </div>
                    </dt>
                    <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                        <p class="flex-auto">Комфорт</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-red-800">
                            <svg class="h-7 w-7 text-white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 0 0 6-6v-1.5m-6 7.5a6 6 0 0 1-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 0 1-3-3V4.5a3 3 0 1 1 6 0v8.25a3 3 0 0 1-3 3Z" fill="rgb(153, 27, 27)"/>
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

<div class=" pt-12 sm:pt-24" id="content-to-convert">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <p class="text-4xl font-bold tracking-tight text-mona-lisa-600 sm:text-4xl">Санаторно-курортная карта</p>
    </div>
    <div class="mx-auto max-w-7xl mt-12  px-6 lg:px-8">
        <dl class="max-w-7xl text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pb-3">
                <dt class=" mb-1 text-lg font-semibold">Для чего нужна санаторно-курортная карта? </dt>
                <dd class="text-gray-500 md:text-lg dark:text-gray-400">Карта понадобится при поступлении в оздоровительное учреждение для проведения корректного лечения. В документе содержится информация о результатах обследований, перенесенных заболеваниях, а также о наличии показаний и/или противопоказаний к лечению.
                    На основании санаторно-курортной карты отдыхающим назначаются те или иные оздоровительные процедуры.</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class=" mb-1 text-lg font-semibold">Для чего нужна санаторно-курортная карта? </dt>
                    <dd class="text-gray-500 md:text-lg dark:text-gray-400">Карта понадобится при поступлении в оздоровительное учреждение для проведения корректного лечения. В документе содержится информация о результатах обследований, перенесенных заболеваниях, а также о наличии показаний и/или противопоказаний к лечению.
                        На основании санаторно-курортной карты отдыхающим назначаются те или иные оздоровительные процедуры.</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class=" mb-1 text-lg font-semibold">Для чего нужна санаторно-курортная карта? </dt>
                    <dd class="text-gray-500 md:text-lg dark:text-gray-400">Карта понадобится при поступлении в оздоровительное учреждение для проведения корректного лечения. В документе содержится информация о результатах обследований, перенесенных заболеваниях, а также о наличии показаний и/или противопоказаний к лечению.
                        На основании санаторно-курортной карты отдыхающим назначаются те или иные оздоровительные процедуры.</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class=" mb-1 text-lg font-semibold">Для чего нужна санаторно-курортная карта? </dt>
                    <dd class="text-gray-500 md:text-lg dark:text-gray-400">Карта понадобится при поступлении в оздоровительное учреждение для проведения корректного лечения. В документе содержится информация о результатах обследований, перенесенных заболеваниях, а также о наличии показаний и/или противопоказаний к лечению.
                        На основании санаторно-курортной карты отдыхающим назначаются те или иные оздоровительные процедуры.</dd>
            </div>
        </dl>
        <button class="mt-5 focus:outline-none text-white bg-red-700 hover:bg-red-70 font-somebold0 focus:ring-4 focus:ring-red-300  rounded-lg
                                 text-lg px-4 py-2  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-700 ">
                                    Подробнее
                                </button>
    </div>
  </div>



<div id="news">
    <news/>
</div> 






   <!-- JS -->
<script>
    const carousel = document.querySelector('[data-slides]');
    const slides = carousel.children.length;
    let currentIndex = 0;

    document.getElementById('prevBtn').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides) % slides;
        updateSlide();
    });

    document.getElementById('nextBtn').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides;
        updateSlide();
    });

    function updateSlide() {
        carousel.style.transform = translateX(-${currentIndex * 100}%);
    }
  </script>
<!--
<div id="cards">
    <cards />
</div>
-->

@endsection