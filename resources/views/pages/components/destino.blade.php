<div class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4">
        @include('pages.components.bienvenida-text')

        <!-- Contenedor de Tarjetas -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
 <!-- Tarjeta Bodas -->
<div class="relative group overflow-hidden rounded-xl shadow-lg">
    <img src="{{ asset('src/img/fotos/matri.jpg') }}" alt="Bodas" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-between items-center text-center p-6">
        <!-- Título siempre visible -->
        <h1 class="text-2xl font-bold text-white">Bodas</h1>
        <!-- Texto oculto por defecto, aparece con hover -->
        <p class="text-gray-300 mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            Capturamos la esencia de tu día especial, creando recuerdos únicos con un enfoque cinematográfico.
        </p>
        <!-- Botón siempre visible -->
        <a href="#" class="mb-4 border border-white text-white px-4 py-2 rounded-lg">Ver más</a>
    </div>
</div>

<!-- Tarjeta XV Años -->
<div class="relative group overflow-hidden rounded-xl shadow-lg">
    <img src="{{ asset('src/img/fotos/quince.jpg') }}" alt="XV Años" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-between items-center text-center p-6">
        <h1 class="text-2xl font-bold text-white">XV Años</h1>
        <p class="text-gray-300 mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            Tu celebración de 15 años será transformada en una película llena de magia, emoción y alegría.
        </p>
        <a href="#" class="mb-4 border border-white text-white px-4 py-2 rounded-lg">Ver más</a>
    </div>
</div>

<!-- Tarjeta Infantiles -->
<div class="relative group overflow-hidden rounded-xl shadow-lg">
    <img src="{{ asset('src/img/fotos/infantil.jpg') }}" alt="Infantiles" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-between items-center text-center p-6">
        <h1 class="text-2xl font-bold text-white">Infantiles</h1>
        <p class="text-gray-300 mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            Creamos contenidos divertidos y emocionantes para las pequeñas sonrisas.
        </p>
        <a href="#" class="mb-4 border border-white text-white px-4 py-2 rounded-lg">Ver más</a>
    </div>
</div>
    </div>
    <!-- Sesiones Destino -->
        <div class="pt-10 text-center">
            <h1 class="text-3xl font-bold">Sesiones Destino</h1>
            <p class="text-lg text-gray-300 mt-4">
                "Entendemos que cada boda es única. Nuestro equipo de profesionales experimentados se dedica a garantizar que tu día refleje tu visión y personalidad."
            </p>
        </div>
</div>
