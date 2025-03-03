@extends('layouts.app')

@section('content')
<div>
    {{-- Оплата льгота {{$freq}}% --}}
    @if ($freq == 100)
        <div class="flex justify-center items-center bg-gray-100" style="height: 80vh">
            <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 text-center mb-4">Двухдневный вебинар  <br> 17.04.2025 19-00 - 21-15 <br> 24.04.2025 19-00 - 21-15</h2>
                <p class="text-xl font-semibold text-gray-700 text-center mb-4">психологи Елена Владимировна Туркенич и Наталия Тимофеевна Наконечная</p>
                <p class="text-md font-semibold text-gray-700 text-center mb-4">"Нейростимуляция когнитивной сферы и эмоционально - коммуникативного поведения детей с особенностями развития"</p>
                
                <!-- Plan and Price -->
                <div class=" p-4 rounded-lg mb-6 text-center">
                    <h3 class="text-xl font-semibold text-indigo-700">Льготный тариф</h3>
                    <p class="text-3xl font-bold text-indigo-900 mt-2">{{ (int)$sum }} ₽</p>
                    {{-- <p class="text-gray-500 mt-1">Единовременная оплата</p> --}}
                </div>
        
                <!-- Robokassa Payment Button -->
                <div class="text-center flex justify-center">
                    <script type="text/javascript" src="https://auth.robokassa.ru/Merchant/PaymentForm/FormSS.js?EncodedInvoiceId=efIzr6sTPEiTrwANgwgvHg"></script>
                </div>
                
                <!-- Back Button -->
                <div class="mt-4 text-center">
                    <a href="/" class="text-indigo-600 hover:underline">на главную</a>
                </div>
            </div>
        </div>                                            

    
    @endif
</div>

@endsection