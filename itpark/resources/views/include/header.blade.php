<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />


<nav class="bg-whitefixed w-full z-20 top-0 start-0 border-b border-gray-200">
    
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <span class="self-center text-2xl font-semibold whitespace-nowrap">ITXplore</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
@auth

<button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown header <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>

<!-- Dropdown menu -->
<div id="dropdownInformation" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
    <div class="px-4 py-3 text-sm text-gray-900">
    {{auth()->user()->name}}
    {{auth()->user()->email}}
    </div>

    <div class="py-2">
      <a href="{{route('logout')}}" class="block px-4 py-2 text-sm text-gray-700 ">Sign out</a>
    </div>
</div>
@elseauth()
      <button type="button" class="text-black bg-blue-700focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center " href="{{route('login')}}">Войти</button>
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center " href="{{route('registration')}}">Регистрация</button>
@endauth()
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
<div class="text-sm font-medium text-centerml-5">
    <ul class="flex flex-wrap -mb-px">
        <li class="me-2">
            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Profile</a>
        </li>
        <li class="me-2">
            <a href="#" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active" aria-current="page">Dashboard</a>
        </li>
        <li class="me-2">
            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Settings</a>
        </li>
        <li class="me-2">
            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Contacts</a>
        </li>
        <li>
            <a class="inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Disabled</a>
        </li>
    </ul>
</div>

  </div>
</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>


