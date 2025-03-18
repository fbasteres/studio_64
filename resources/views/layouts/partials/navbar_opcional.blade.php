<nav class="flex justify-between lg:justify-around items-center py-4 bg-white/75 backdrop-blur-md shadow-md w-full fixed top-0 left-0 right-0 z-10 transition-transform duration-300 transform">
    <!-- Logo -->
    <div class="flex items-center ml-4 lg:ml-0">
        <a class="cursor-pointer">
            <h3 class="text-2xl font-medium text-blue-500">
                <img class="h-10 object-cover" src="{{ asset('src/img/logo.svg') }}" alt="Store Logo">
            </h3>
        </a>
    </div>

    <!-- Iconos móvil centrados -->
    <div class="lg:hidden flex items-center space-x-5 absolute left-1/2 transform -translate-x-1/2">
        <a class="flex items-center text-gray-600 hover:text-blue-500 cursor-pointer transition-colors duration-300">
            <svg class="fill-current h-5 w-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
            </svg>
        </a>
        
        <a class="flex items-center text-gray-600 cursor-pointer transition-colors duration-300 font-semibold text-blue-600">
            <svg class="fill-current h-5 w-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z"/>
            </svg>
        </a>
    </div>

    <!-- Menú Hamburguesa -->
    <button id="menuBtn" class="lg:hidden mr-4 p-2 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
          <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
        </svg>
    </button>

    <!-- Links Escritorio -->
    <div class="hidden lg:flex items-center space-x-8">
        <a href="{{ route('inicio1') }}" class="@if(request()->routeIs('inicio1')) text-blue-600 font-semibold @else text-gray-600 hover:text-blue-500 @endif cursor-pointer transition-colors duration-300">Inicio</a>
        <a href="{{ route('servicios.page') }}" class="@if(request()->routeIs('servicios.page')) text-blue-600 font-semibold @else text-gray-600 hover:text-blue-500 @endif cursor-pointer transition-colors duration-300">Servicios</a>
        <a href="{{ route('informacion.page') }}" class="@if(request()->routeIs('informacion.page')) text-blue-600 font-semibold @else text-gray-600 hover:text-blue-500 @endif cursor-pointer transition-colors duration-300">Informacion</a>
        <a href="{{ route('locacion.page') }}" class="@if(request()->routeIs('locacion.page')) text-blue-600 font-semibold @else text-gray-600 hover:text-blue-500 @endif cursor-pointer transition-colors duration-300">Locacion</a>
        <a href="{{ route('nosotros.page') }}" class="@if(request()->routeIs('nosotros.page')) text-blue-600 font-semibold @else text-gray-600 hover:text-blue-500 @endif cursor-pointer transition-colors duration-300">Nosotros</a>
        <a href="{{ route('contacto.page') }}" class="@if(request()->routeIs('contacto.page')) text-blue-600 font-semibold @else text-gray-600 hover:text-blue-500 @endif cursor-pointer transition-colors duration-300">Contacto</a>
    </div>

    <!-- Botones Escritorio -->
    <div class="hidden lg:flex items-center space-x-5">
        <a class="flex items-center text-gray-600 hover:text-blue-500 cursor-pointer transition-colors duration-300">
            <svg class="fill-current h-5 w-5 mr-2" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
            </svg>
            Comprar
        </a>
        <a class="flex items-center text-gray-600 font-semibold cursor-pointer" href="{{ route('login') }}">
            <svg class="fill-current h-5 w-5 mr-2" viewBox="0 0 24 24">
                <path d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z"/>
            </svg>
            Login
        </a>
    </div>
</nav>

<!-- Menú Móvil -->
<div id="mobileMenu" class="lg:hidden fixed top-0 right-0 h-full w-64 bg-white/90 backdrop-blur-md shadow-xl transform translate-x-full transition-transform duration-300 z-20">
    <div class="p-6 space-y-6">
        <div class="flex justify-end">
            <button data-close-menu class="p-2">
                <svg class="h-8 w-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <a href="{{ route('inicio1') }}" class="block @if(request()->routeIs('inicio1')) text-blue-600 font-semibold @else text-gray-600 hover:text-blue-500 @endif text-lg">Inicio</a>
        <a href="{{ route('servicios.page') }}" class="block @if(request()->routeIs('servicios.page')) text-blue-600 font-semibold @else text-gray-600 hover:text-blue-500 @endif text-lg">Servicios</a>
        <a href="{{ route('informacion.page') }}" class="block @if(request()->routeIs('informacion.page')) text-blue-600 font-semibold @else text-gray-600 hover:text-blue-500 @endif text-lg">Informacion</a>
        <a href="{{ route('locacion.page') }}" class="block @if(request()->routeIs('locacion.page')) text-blue-600 font-semibold @else text-gray-600 hover:text-blue-500 @endif text-lg">Locacion</a>
        <a href="{{ route('nosotros.page') }}" class="block @if(request()->routeIs('nosotros.page')) text-blue-600 font-semibold @else text-gray-600 hover:text-blue-500 @endif text-lg">Nosotros</a>
        <a href="{{ route('contacto.page') }}" class="block @if(request()->routeIs('contacto.page')) text-blue-600 font-semibold @else text-gray-600 hover:text-blue-500 @endif text-lg">Contacto</a>
    </div>
</div>