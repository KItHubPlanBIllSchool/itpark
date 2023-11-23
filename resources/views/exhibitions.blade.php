@extends('layout')
@section('title', 'login')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdn.tailwindcss.com"></script>
<div class="h-screen ">
        <div class="h-20 ">

        </div>

        <div class="h-3/4 w-3/4 mx-auto flex">
            <div class=" w-1/2">
                <div class="h-28">
                    <h1 class="text-6xl font-bold">Экскурсия по IT парку</h1>
                </div>

                <div>
                    <h1 class="text-3xl mt-5">Вас ожидают незабываемые</h1>
                </div>

                <div class="">
                    <h1 class="text-3xl">впечатления!</h1>
                </div>

                <div class="mt-12">
                <button type="button" class="w-1/2 h-16 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Купить</button>
                </div>

                <div class="h-1/2 flex">
                    <div>
                        <h1 class="text-3xl">Остались вопросы?</h1>
                    </div>
                    
                    <div class="">
                        <button type="submit" class=" h-12 bg-[#ffffff] hover:text-[#969696] font-medium rounded-lg text-3xl w-full sm:w-auto  text-center -translate-y-1 translate-x-4">Напишите нам</button>
                    </div>    
                </div>
            </div>
            
            <div class="bg-cover w-1/2" style="background-image: url('{{ asset('images/cuate.svg') }}');">
    <!-- Content -->
<       </div>
        </div>

        <div class="h-10">

        </div>

        <div class="mx-auto h-14 w-1/3">
            <h1 class="text-center text-3xl font-bold">Экскурсия по парку</h1>
        </div>

        <div class="mx-auto h-14 w-1/2">
            <h1 class="text-center text-3xl">Выбери экскурсию, которую считаешь лучшей!</h1>
        </div>
    </div>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

@endsection