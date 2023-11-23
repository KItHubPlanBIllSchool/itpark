
@extends('layout')
@section('title', 'login')
@section('content')
    @auth
<div class="h-screen flex excursion">
        <div class="w-2/6  ">
            <div class="h-32">

            </div>

            <img class="rounded-full w-48 h-48 mx-auto" src="image/user.svg" >

            <div class="h-6">

            </div>

            <div class="h-12">
                <h1 class="text-[#5B5B5B] text-3xl text-center">{{ auth()->user()->name }}</h1>
            </div>

            <div class="h-6">
                <h1 class="text-[#5B5B5B] text-xl text-center">{{ auth()->user()->email }}</h1>
            </div>

            <div class="h-24"></div>

            <div class="w-1/2 mx-auto ">
                <select id="mySelect" onchange="myFunction()"class="bg-[#3879FA] text-xl text-white text-sm rounded-lg w-full p-2.5">
                    <option selected class="DE">Доступные экскурсии</option>
                    <option value="US" class="US">Экскурсия 1</option>
                    <option value="CA" class="CA">Экскурсия 2</option>
                    <option value="FR" class="FR">Экскурсия 3</option>
                </select>
            </div>
        </div>
        <div class="w-4/6 excursion1">
            <div class="h-32">
                <h1 class="translate-y-20 text-4xl font-bold">Экскурсия 1</h1>
            </div>

            <div class="h-28">

            </div>

            <a href="#"><div class="h-1/3 flex ">
                <div class="rounded-lg w-2/5 bg-[#3879FA]">
                    <h1 class="translate-y-4 translate-x-4 text-3xl text-white font-bold">11.11.23 | Общая экскурсия, по этажам и секциям.</h1>

                    <div class="h-36">

                    </div>

                    
                    <div class="h-12 flex">
                        <h1 class="translate-y-4 translate-x-4 text-3xl text-white font-bold">Время проведения</h1>
                        <h1 class="translate-y-4 translate-x-28 text-3xl text-white font-bold">14:00</h1>
                    </div>
                </div>

                <div class="w-28"></div>

                <div class="rounded-lg w-2/5">
                    <h1 class="translate-y-4 translate-x-4 text-3xl font-bold">11.11.23 | Общая экскурсия, по этажам и секциям.</h1>

                    <div class="h-36">

                    </div>

                    
                    <div class="h-12 flex">
                        <h1 class="translate-y-4 translate-x-4 text-3xl font-bold">Время проведения</h1>
                        <h1 class="translate-y-4 translate-x-28 text-3xl font-bold">14:00</h1>
                    </div>
                </div>
            </div></a>
        </div>
        <! -- конец экскурсии 3 -->

        <div class="w-4/6 excursion2">
            <div class="h-32">
                <h1 class="translate-y-20 text-4xl font-bold">Экскурсия 2</h1>
            </div>

            <div class="h-28">

            </div>

            <div class="h-1/3 flex ">
                <div class="rounded-lg w-2/5 bg-[#3879FA]">
                    <h1 class="translate-y-4 translate-x-4 text-3xl text-white font-bold">11.11.23 | Общая экскурсия, по этажам и секциям.</h1>

                    <div class="h-36">

                    </div>

                    
                    <div class="h-12 flex">
                        <h1 class="translate-y-4 translate-x-4 text-3xl text-white font-bold">Время проведения</h1>
                        <h1 class="translate-y-4 translate-x-28 text-3xl text-white font-bold">14:00</h1>
                    </div>
                </div>

                <div class="w-28"></div>

                <div class="rounded-lg w-2/5">
                    <h1 class="translate-y-4 translate-x-4 text-3xl font-bold">11.11.23 | Общая экскурсия, по этажам и секциям.</h1>

                    <div class="h-36">

                    </div>

                    
                    <div class="h-12 flex">
                        <h1 class="translate-y-4 translate-x-4 text-3xl font-bold">Время проведения</h1>
                        <h1 class="translate-y-4 translate-x-28 text-3xl font-bold">14:00</h1>
                    </div>
                </div>
            </div>
        </div>
        <! -- конец экскурсии 3 -->
        <div class="w-4/6 excursion3">
            <div class="h-32">
                <h1 class="translate-y-20 text-4xl font-bold">Экскурсия 3</h1>
            </div>

            <div class="h-28">

            </div>

            <div class="h-1/3 flex ">
                <div class="rounded-lg w-2/5 bg-[#3879FA]">
                    <h1 class="translate-y-4 translate-x-4 text-3xl text-white font-bold">11.11.23 | Общая экскурсия, по этажам и секциям.</h1>

                    <div class="h-36">

                    </div>

                    
                    <div class="h-12 flex">
                        <h1 class="translate-y-4 translate-x-4 text-3xl text-white font-bold">Время проведения</h1>
                        <h1 class="translate-y-4 translate-x-28 text-3xl text-white font-bold">14:00</h1>
                    </div>
                </div>

                <div class="w-28"></div>

                <div class="rounded-lg w-2/5">
                    <h1 class="translate-y-4 translate-x-4 text-3xl font-bold">11.11.23 | Общая экскурсия, по этажам и секциям.</h1>

                    <div class="h-36">

                    </div>

                    
                    <div class="h-12 flex">
                        <h1 class="translate-y-4 translate-x-4 text-3xl font-bold">Время проведения</h1>
                        <h1 class="translate-y-4 translate-x-28 text-3xl font-bold">14:00</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

    <script>
        let ex = document.querySelector(".excursion");


let ex1 = document.querySelector(".excursion1");
let US = document.getElementById('US')

let ex2 = document.querySelector(".excursion2");
let CA = document.querySelector(".CA");

let ex3 = document.querySelector(".excursion3");
let FR = document.querySelector(".FR");

ex1.style.display = "none";
ex2.style.display = "none";
ex3.style.display = "none";




function myFunction() {
    var selectBox = document.getElementById("mySelect");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    if (selectedValue == "US"){
        ex1.style.display = "block";
        ex2.style.display = "none";
        ex3.style.display = "none";
    }
    if (selectedValue == "CA"){
        ex1.style.display = "none";
        ex2.style.display = "block";
        ex3.style.display = "none";
    }
    if (selectedValue == "FR"){
        ex1.style.display = "none";
        ex2.style.display = "none";
        ex3.style.display = "block";
    }

  }
    </script>
    @else
    <h1>not registred</h1>
    @endauth
@endsection