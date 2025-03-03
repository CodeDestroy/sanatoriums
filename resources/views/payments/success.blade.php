@extends('layouts.app')

@section('content')
<div class="bg-gray-100 flex items-center justify-center" style="height: 70vh">
    <div class="bg-white shadow-md rounded-lg p-8 max-w-md text-center">
        <div class="flex items-center justify-center mb-6">
            <svg style="height: 100px; color: green;" data-slot="icon" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm3.844-8.791a.75.75 0 0 0-1.188-.918l-3.7 4.79-1.649-1.833a.75.75 0 1 0-1.114 1.004l2.25 2.5a.75.75 0 0 0 1.15-.043l4.25-5.5Z"></path>
            </svg>
        </div>
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Оплата прошла успешно!</h1>
        <p class="text-gray-600 mb-6">Спасибо за ваш платеж. Ваша заявка была успешно оплачена и обработана. В случае вопросов, пожалуйста, свяжитесь с нашей службой поддержки.</p>
        
        <a href="/" class="inline-block bg-indigo-500 hover:bg-indigo-600 font-semibold py-2 px-4 rounded-lg transition duration-200 text-white">
            Вернуться в личный кабинет
        </a>
    </div>
</div>
@endsection