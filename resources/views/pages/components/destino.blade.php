<div class="bg-gray-100 text-white py-10">
    <div class="container mx-auto px-4">
        @include('pages.components.bienvenida-text')

        <!-- Contenedor de Tarjetas -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- Tarjeta Bodas -->
            <div class="group relative overflow-hidden rounded-[1.25rem] shadow-lg hover:shadow-xl transition-all duration-500 ease-[cubic-bezier(0.33,0.84,0.5,1.05)]">
                <div class="aspect-[4/5] overflow-hidden">
                    <img src="{{ asset('src/img/fotos/matri.jpg') }}" alt="Bodas" 
                         class="h-full w-full object-cover transition-transform duration-1000 ease-[cubic-bezier(0.15,0.75,0.25,1)] 
                                scale-[1.01] group-hover:scale-103">
                </div>
                
                <!-- Overlay de contenido -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent flex flex-col justify-end items-center text-center p-6 pb-8 space-y-3">
                    <!-- Título con efecto flotante -->
                    <div class="overflow-hidden h-[42px] w-full transform transition-all duration-500 ease-out group-hover:-translate-y-1">
                        <h1 class="text-2xl font-semibold text-white/95 tracking-tight transition-all duration-700 ease-out 
                                  translate-y-0 group-hover:translate-y-[2px]">
                            Bodas
                        </h1>
                    </div>
                    
                    <!-- Texto descriptivo con animación en cascada -->
                    <div class="transform transition-all duration-700 ease-[cubic-bezier(0.34,1.56,0.64,1)] 
                              opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0">
                        <p class="text-gray-100/90 text-[15px] leading-snug px-3 font-medium">
                            Creación de recuerdos cinematográficos que capturan la autenticidad de tu amor.
                        </p>
                    </div>

                    <!-- Botón con interacción avanzada -->
                    <div class="mt-2 transform transition-all duration-500 ease-out group-hover:translate-y-1">
                        <a href="#" class="inline-flex items-center justify-center gap-1.5 border border-white/25 text-white/90 px-5 py-2 rounded-full 
                                        bg-white/0 backdrop-blur transition-all duration-400 hover:gap-2
                                        hover:bg-white/10 hover:border-white/40 hover:backdrop-blur-lg
                                        hover:text-white hover:scale-[1.03] hover:shadow-xs
                                        focus:outline-none focus:ring-2 focus:ring-white/30">
                            <span class="text-[13.5px] font-medium tracking-wide">Explorar paquetes</span>
                            <svg class="w-3.5 h-3.5 mt-0.5 transition-transform duration-300 group-hover:translate-x-1.5" 
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Efecto de brillo al hover -->
                <div class="absolute inset-0 bg-white/0 transition-all duration-700 group-hover:bg-white/[0.015] pointer-events-none"></div>
            </div>

            <!-- Tarjeta XV Años -->
            <div class="group relative overflow-hidden rounded-[1.25rem] shadow-lg hover:shadow-xl transition-all duration-500 ease-[cubic-bezier(0.33,0.84,0.5,1.05)]">
                <div class="aspect-[4/5] overflow-hidden">
                    <img src="{{ asset('src/img/fotos/quince.jpg') }}" alt="XV Años" 
                         class="h-full w-full object-cover transition-transform duration-1000 ease-[cubic-bezier(0.15,0.75,0.25,1)] 
                                scale-[1.01] group-hover:scale-103">
                </div>
                
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent flex flex-col justify-end items-center text-center p-6 pb-8 space-y-3">
                    <div class="overflow-hidden h-[42px] w-full transform transition-all duration-500 ease-out group-hover:-translate-y-1">
                        <h1 class="text-2xl font-semibold text-white/95 tracking-tight transition-all duration-700 ease-out 
                                  translate-y-0 group-hover:translate-y-[2px]">
                            XV Años
                        </h1>
                    </div>
                    
                    <div class="transform transition-all duration-700 ease-[cubic-bezier(0.34,1.56,0.64,1)] 
                              opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0">
                        <p class="text-gray-100/90 text-[15px] leading-snug px-3 font-medium">
                            Transformamos tu fiesta en una producción mágica llena de emociones y sorpresas.
                        </p>
                    </div>

                    <div class="mt-2 transform transition-all duration-500 ease-out group-hover:translate-y-1">
                        <a href="#" class="inline-flex items-center justify-center gap-1.5 border border-white/25 text-white/90 px-5 py-2 rounded-full 
                                        bg-white/0 backdrop-blur transition-all duration-400 hover:gap-2
                                        hover:bg-white/10 hover:border-white/40 hover:backdrop-blur-lg
                                        hover:text-white hover:scale-[1.03] hover:shadow-xs
                                        focus:outline-none focus:ring-2 focus:ring-white/30">
                            <span class="text-[13.5px] font-medium tracking-wide">Explorar paquetes</span>
                            <svg class="w-3.5 h-3.5 mt-0.5 transition-transform duration-300 group-hover:translate-x-1.5" 
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="absolute inset-0 bg-white/0 transition-all duration-700 group-hover:bg-white/[0.015] pointer-events-none"></div>
            </div>

            <!-- Tarjeta Infantiles -->
            <div class="group relative overflow-hidden rounded-[1.25rem] shadow-lg hover:shadow-xl transition-all duration-500 ease-[cubic-bezier(0.33,0.84,0.5,1.05)]">
                <div class="aspect-[4/5] overflow-hidden">
                    <img src="{{ asset('src/img/fotos/infantil.jpg') }}" alt="Infantiles" 
                         class="h-full w-full object-cover transition-transform duration-1000 ease-[cubic-bezier(0.15,0.75,0.25,1)] 
                                scale-[1.01] group-hover:scale-103">
                </div>
                
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent flex flex-col justify-end items-center text-center p-6 pb-8 space-y-3">
                    <div class="overflow-hidden h-[42px] w-full transform transition-all duration-500 ease-out group-hover:-translate-y-1">
                        <h1 class="text-2xl font-semibold text-white/95 tracking-tight transition-all duration-700 ease-out 
                                  translate-y-0 group-hover:translate-y-[2px]">
                            Infantiles
                        </h1>
                    </div>
                    
                    <div class="transform transition-all duration-700 ease-[cubic-bezier(0.34,1.56,0.64,1)] 
                              opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0">
                        <p class="text-gray-100/90 text-[15px] leading-snug px-3 font-medium">
                            Experiencias creativas que capturan la energía y alegría de la infancia.
                        </p>
                    </div>

                    <div class="mt-2 transform transition-all duration-500 ease-out group-hover:translate-y-1">
                        <a href="#" class="inline-flex items-center justify-center gap-1.5 border border-white/25 text-white/90 px-5 py-2 rounded-full 
                                        bg-white/0 backdrop-blur transition-all duration-400 hover:gap-2
                                        hover:bg-white/10 hover:border-white/40 hover:backdrop-blur-lg
                                        hover:text-white hover:scale-[1.03] hover:shadow-xs
                                        focus:outline-none focus:ring-2 focus:ring-white/30">
                            <span class="text-[13.5px] font-medium tracking-wide">Explorar paquetes</span>
                            <svg class="w-3.5 h-3.5 mt-0.5 transition-transform duration-300 group-hover:translate-x-1.5" 
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="absolute inset-0 bg-white/0 transition-all duration-700 group-hover:bg-white/[0.015] pointer-events-none"></div>
            </div>
        </div>

        <!-- Sección inferior -->
        <div class="pt-20 text-center animate-fade-delayed">
            <h1 class="text-3xl font-bold mb-5 bg-gradient-to-r from-rose-200 via-purple-200 to-cyan-200 bg-clip-text text-transparent">
                Sesiones Destino
            </h1>
            <p class="text-lg text-gray-300/85 max-w-2xl mx-auto leading-relaxed font-medium tracking-wide">
                "Creamos narrativas visuales únicas en locaciones extraordinarias, adaptadas a tu historia personal."
            </p>
        </div>
    </div>
</div>

<style>
    @keyframes fade-delayed {
        0% { opacity: 0; transform: translateY(10px); }
        50% { opacity: 0; }
        100% { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-delayed {
        animation: fade-delayed 1.2s cubic-bezier(0.16, 0.84, 0.44, 1) both;
        animation-delay: 0.4s;
    }

    /* Optimizaciones de rendimiento */
    @media (prefers-reduced-motion: reduce) {
        .transition-all,
        .group-hover\:translate-y-1,
        .animate-fade-delayed {
            transition: none !important;
            animation: none !important;
        }
    }
</style>