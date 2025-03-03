@extends('layouts.app')

@section('content')
<div class="bg-gray-100 flex items-center justify-center" style="min-height: 70vh">
    <div class="bg-white shadow-md rounded-lg p-8 max-w-md text-center">
        <div class="flex items-center justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m0 0a9 9 0 11-9 9 9 9 0 019-9z" />
            </svg>
        </div>
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Ошибка оплаты!</h1>
        <p class="text-gray-600 mb-6">Пожалуйста, попробуйте еще раз. В случае вопросов, пожалуйста, свяжитесь с нашей службой поддержки.</p>
        
        <a href="{{ route('home') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
            Вернуться в личный кабинет
        </a>
    </div>
</div>
@endsection