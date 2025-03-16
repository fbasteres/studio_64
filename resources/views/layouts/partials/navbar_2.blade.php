<header class="fixed w-full z-50 bg-black/70 backdrop-blur-md text-white py-2">
  <div class="container mx-auto flex items-center justify-between px-6">
    
    <!-- Logo -->
    <a href="{{ route('inicio1') }}" class="flex items-center">
      <img class="h-10" src="{{ asset('src/img/Logo_web.svg') }}" alt="Logo">
    </a>

    <!-- Botón menú móvil -->
    <button id="menuToggle" class="lg:hidden text-white focus:outline-none">
      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>

    <!-- Menú principal -->
    <nav id="navbarMenu" class="hidden lg:flex lg:items-center space-x-10">
      <a class="text-white hover:text-blue-400 transition" href="{{ route('inicio1') }}">Inicio</a>
      <a class="text-white hover:text-blue-400 transition" href="{{ route('servicios.page') }}">Servicios</a>
      <a class="text-white hover:text-blue-400 transition" href="{{ route('informacion.page') }}">Información</a>
      <a class="text-white hover:text-blue-400 transition" href="{{ route('locacion.page') }}">Locación</a>
      <a class="text-white hover:text-blue-400 transition" href="{{ route('nosotros.page') }}">Nosotros</a>
      <a class="text-white hover:text-blue-400 transition" href="{{ route('contacto.page') }}">Contacto</a>
      <a href="{{ route('comprar.page') }}" class="bg-white text-black px-4 py-1 rounded-[.2rem] border border-transparent hover:bg-black hover:text-white hover:border-white transition">
  Comprar ahora
</a>
    </nav>

  </div>

</nav>

  </div>

  <!-- Menú desplegable en móviles -->
  <div id="mobileMenu" class="hidden lg:hidden bg-white shadow-md">
    <nav class="flex flex-col space-y-4 p-6">
      <a class="text-gray-700 hover:text-blue-600 transition" href="{{ route('inicio1') }}">Inicio</a>
      <a class="text-gray-700 hover:text-blue-600 transition" href="{{ route('servicios.page') }}">Servicios</a>
      <a class="text-gray-700 hover:text-blue-600 transition" href="{{ route('informacion.page') }}">Información</a>
      <a class="text-gray-700 hover:text-blue-600 transition" href="{{ route('locacion.page') }}">Locación</a>
      <a class="text-gray-700 hover:text-blue-600 transition" href="{{ route('nosotros.page') }}">Nosotros</a>
      <a class="text-gray-700 hover:text-blue-600 transition" href="{{ route('contacto.page') }}">Contacto</a>
      <a href="{{ route('comprar.page') }}" class="bg-blue-600 text-white text-center px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">Comprar ahora</a>
    </nav>
  </div>
</header>

<!-- Script para abrir y cerrar el menú móvil -->
<script>
  document.getElementById("menuToggle").addEventListener("click", function () {
    document.getElementById("mobileMenu").classList.toggle("hidden");
  });
</script>
