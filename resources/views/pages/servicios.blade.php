@extends('layouts.app')
@section('title',':: Servicios')
@section('content')

<div class="w-screen h-screen overflow-hidden relative before:block before:absolute before:bg-black before:h-full before:w-full before:top-0 before:left-0 before:z-10 before:opacity-30">
  <img src="https://picsum.photos/seed/picsum/1900/850" class="absolute top-0 left-0 min-h-full max-w-full object-cover" alt="">
  <div class="relative z-20 max-w-screen-lg mx-auto grid grid-cols-12 h-full items-center">
    <div class="col-span-6">
      <span class="uppercase text-white text-xs font-bold mb-2 block">STUDIO64 PERU</span>
      <h1 class="text-white font-extrabold text-5xl mb-8">SERVICIOS</h1>
    </div>
  </div>
</div>

<div class="bg-[#f7d0b6] py-20">
  <div class="max-w-screen-lg mx-auto flex justify-between items-center">
    <div class="max-w-xl">
      <h2 class="font-black text-sky-950 text-3xl mb-4">Ansel Adams.</h2>
      <p class="text-base text-sky-950">"No haces una fotografía solo con una cámara. La pones en la imagen con todas las imágenes que has visto, los libros que has leído, la música que has escuchado y las personas que has amado."</p>
    </div>
   </div>
</div>

<div class="py-12 relative overflow-hidden bg-white">
  <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
    <div class="w-full flex flex-col items-end pr-16">
      <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-right mb-1 mt-50">TARMA - JUNIN</h2>
      <div class="h-full mt-auto overflow-hidden relative">
        <img src="{{ asset('src/img/page/boda2.jpg') }}" class="h-full w-full object-contain" alt="">
      </div>
    </div>

    <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-sky-950 before:top-0 before:left-0">
      <div class="relative z-20 pl-12">
        <h2 class="text-[#f7d0b6] font-black text-5xl leading-snug mb-10">BODAS</h2>
        <p class="text-white text-sm">
          Capturamos la esencia de tu día especial, creando recuerdos únicos con un enfoque cinematográfico.
        </p>
        <button class="mt-8 text-white uppercase py-3 text-sm px-10 border border-white hover:bg-white hover:bg-opacity-10">Mayor Información</button>
      </div>
    </div>
  </div>
</div>

<div class="py-4 relative overflow-hidden bg-white">
  <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
    <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-[#f7d0b6] before:top-0 before:rigth-0" dir="rtl">
      <div class="relative z-20 pr-12">
        <h2 class="text-sky-950 font-black text-5xl leading-snug mb-10">XV AÑOS</h2>
        <p class="text-sky-950 text-sm">
            Tu celebración de 15 años será transformada en una película llena de magia, emoción y alegría.
        </p>
        <button class="mt-8 text-sky-950 uppercase py-3 text-sm px-10 border border-sky-950 hover:bg-white hover:bg-opacity-10">Mayor Información</button>
      </div>
    </div>
    <div class="w-full flex flex-col pl-16">
      <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-left mb-1 mt-50">TARMA - JUNIN</h2>
     <div class="h-full mt-auto overflow-hidden relative flex justify-rigth">
  <img src="{{ asset('src/img/page/quince1.jpg') }}" class="w-100 h-auto max-w-xs object-contain" alt="">
</div>

    </div>
  </div>
</div>

<div class="py-12 relative overflow-hidden bg-white">
  <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
    <div class="w-full flex flex-col items-end pr-16">
      <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-right mb-1 mt-50">TARMA - JUNIN</h2>
      <div class="h-full mt-auto overflow-hidden relative flex justify-rigth">
        <img src="{{ asset('src/img/page/infantil1.jpg') }}" class="w-100 h-auto max-w-xs object-contain" alt="">
      </div>
    </div>

    <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-sky-950 before:top-0 before:left-0">
      <div class="relative z-20 pl-12">
        <h2 class="text-[#f7d0b6] font-black text-5xl leading-snug mb-10">INFANTILES</h2>
        <p class="text-white text-sm">
            Creamos contenidos divertidos y emocionantes para las pequeñas sonrisas.
        </p>
        <button class="mt-8 text-white uppercase py-3 text-sm px-10 border border-white hover:bg-white hover:bg-opacity-10">Mayor Información</button>
      </div>
    </div>
  </div>
</div>

@endsection
