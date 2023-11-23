@extends('layout')
@section('title', 'login')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
<div class="h-screen">
        <div class="h-32">

        </div>

        <div class="h-1/2 w-3/4 mx-auto flex">
            <div class="w-1/4 translate-y-10 mx-auto">
                <div class="h-1/5 bg-[#3879FA] grid place-content-center rounded-t-lg">
                    <h1 class="text-center text-3xl font-bold text-whte">Экскурсия по секциям</h1>
                </div>

                <div class="h-16">
                    <h1 class="text-center text-3xl font-bold">50 руб.</h1>
                </div>

                <div class="h-12">
                    <h1 class="text-center text-xl font-bold">Экскурсия по секциям</h1>
                </div>
            </div>

            <div class="w-1/4 mx-auto rounded-lg border-[#3879FA] border-4">
                <div class="h-1/5 bg-[#3879FA] mx-auto grid place-content-center ">
                    <h1 class="text-center text-3xl font-bold text-whte">Общая экскурсия</h1>
                </div>

                <div class="h-20">
                    <h1 class="text-center text-4xl font-bold">100 руб.</h1>
                </div>

                <div class="h-8">
                    <h1 class="text-center text-xl font-bold">Экскурсия по этажам</h1>
                </div>

                <div class="h-8">
                    <h1 class="text-center text-xl font-bold">Экскурсия по секциям</h1>
                </div>

                <div class="h-8">
                    <h1 class="text-center text-xl font-bold">Прогулка по раб. местам</h1>
                </div>
                <div class="mx-24 mt-5">
                    <a href="{{ route('audio1') }}" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Купить</a>
                </div>

            </div>

            <div class="w-1/4 translate-y-10 mx-auto">
                <div class="h-1/5 bg-[#3879FA] mx-auto grid place-content-center rounded-t-lg">
                    <h1 class="text-center text-3xl font-bold text-whte">Экскурсия по этажам</h1>
                </div>
                
                <div class="h-16">
                    <h1 class="text-center text-3xl font-bold">50 руб.</h1>
                </div>

                <div class="h-12">
                    <h1 class="text-center text-xl font-bold">Экскурсия по этажам</h1>
                </div>
            </div>
        </div>

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

@endsection