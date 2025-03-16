@extends('layouts.app')
@section('title',':: nosotros')
@section('content')

<div class="w-screen h-screen overflow-hidden relative before:block before:absolute before:bg-black before:h-full before:w-full before:top-0 before:left-0 before:z-10 before:opacity-30">
  <img src="https://picsum.photos/seed/picsum/1900/850" class="absolute top-0 left-0 min-h-full max-w-full object-cover" alt="">
  <div class="relative z-20 max-w-screen-lg mx-auto grid grid-cols-12 h-full items-center">
    <div class="col-span-6">
      <span class="uppercase text-white text-xs font-bold mb-2 block">STUDIO64 PERU</span>
      <h1 class="text-white font-extrabold text-5xl mb-8">NOSOTROS</h1>
    </div>
  </div>
</div>

  <!-- Testimonials -->
  <section aria-labelledby="testimonial-heading" class="relative mx-auto max-w-7xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
    <div class="mx-auto max-w-2xl lg:max-w-none">
      <h2 id="testimonial-heading" class="text-2xl font-bold tracking-tight text-gray-900">¿QUIENES SOMOS?</h2>

      <div class="mt-16 space-y-16 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
        <blockquote class="sm:flex lg:block">
          <svg width="24" height="18" viewBox="0 0 24 18" aria-hidden="true" class="flex-shrink-0 text-gray-300">
            <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor" />
          </svg>
          <div class="mt-8 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-10">
            <p class="text-lg text-gray-600">En STUDIO64, transformamos momentos en historias inolvidables. Nuestro equipo de profesionales captura cada detalle con un enfoque cinematográfico, asegurando que la esencia de cada evento, marca o proyecto cobre vida a través de la imagen y el sonido. Desde bodas mágicas hasta producciones comerciales impactantes, hacemos que cada cuadro cuente una historia única.</p>
            <cite class="mt-4 block font-semibold not-italic text-gray-900"></cite>
          </div>
        </blockquote>
        <blockquote class="sm:flex lg:block">
          <svg width="24" height="18" viewBox="0 0 24 18" aria-hidden="true" class="flex-shrink-0 text-gray-300">
            <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor" />
          </svg>
          <div class="mt-8 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-10">
            <p class="text-lg text-gray-600">STUDIO64 es una productora audiovisual especializada en la creación de contenido visual de alto impacto. Ofrecemos servicios de video marketing, producción de eventos, fotografía profesional y cobertura en vivo, ayudando a marcas y empresas a conectar con su audiencia de manera auténtica y efectiva. Contamos con la mejor tecnología y un equipo creativo altamente capacitado para ofrecer resultados de calidad excepcional.</p>
            <cite class="mt-4 block font-semibold not-italic text-gray-900"></cite>
          </div>
        </blockquote>
        <blockquote class="sm:flex lg:block">
          <svg width="24" height="18" viewBox="0 0 24 18" aria-hidden="true" class="flex-shrink-0 text-gray-300">
            <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor" />
          </svg>
          <div class="mt-8 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-10">
            <p class="text-lg text-gray-600">¿Buscas calidad y creatividad en producción audiovisual? En STUDIO64 hacemos realidad tu visión con videos profesionales, fotografía y contenido digital de alto impacto. Ya sea para eventos, empresas o proyectos personales, nos encargamos de que cada imagen cuente una historia poderosa. Contáctanos y llevemos tu idea al siguiente nivel.</p>
            <cite class="mt-4 block font-semibold not-italic text-gray-900"></cite>
          </div>
        </blockquote>
      </div>
    </div>
  </section>
</div>


@endsection