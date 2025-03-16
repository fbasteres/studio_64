@extends('layouts.app')
@section('title',':: Locacion')
@section('content')

<section
  class="overflow-hidden bg-[url(https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?q=80&w=2670&auto=format&fit=crop)] bg-cover bg-top bg-no-repeat"
>
<br></br>
  <div class="bg-black/50 p-8 md:p-12 lg:px-16 lg:py-24">
    <div class="text-rigth ltr:sm:text-left rtl:sm:text-right container px-4">
      <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-5xl">Locación</h2>
        <p class="hidden max-w-lg text-white/90 md:mt-6 md:block md:text-lg md:leading-relaxed"></p>
    </div>
  </div>
</section>

    <!-- component -->
<div>
    <div class="bg-white py-4 sm:py-6">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto w-full lg:mx-0">
          <h2
            style="color: Gray"
            class="text-3xl font-bold tracking-tight text-green-900 sm:text-4xl"
          >
            Nuestra Galería de fotos.
          </h2>
          <p class="mt-6 text-lg leading-8 text-gray-600">
          
          </p>
          
        </div>
        <ul
          role="list"
          class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-0 gap-y-0 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3"
        >

        <!-- inicio de album -->

        <li v-for="person in people" :key="person.name">
            <ul role="list" class="mt-3 flex gap-x-3">
              <div class="m-2 space-y-2">
                <div
                  class="group flex flex-col gap-1 rounded-lg p-5 text-gray"
                  tabindex="1"
                >
                    <div style="width:320px;" class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                    <img src="https://img.freepik.com/free-photo/businesspeople-office-meeting_23-2148908969.jpg" class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110" alt="" />
                </div>
                <div style="background-color: Gray; width:70%;" class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                    <h1 class="text-lg font-bold text-white ">BODAS</h1>
                    <h2 class="text-m font-light text-gray-200 ">STUDIO64</h2>
                </div>
              
              </div>
                  <div
                    class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000"
                  >
                
                  <p style="font-size: .9em;" v-html="This is all about John"></p>
                  </div>
                </div>
              </div>
            </ul>
          </li>
     <!-- fin de album -->

      <!-- inicio de album -->

        <li v-for="person in people" :key="person.name">
            <ul role="list" class="mt-3 flex gap-x-3">
              <div class="m-2 space-y-2">
                <div
                  class="group flex flex-col gap-1 rounded-lg p-5 text-gray"
                  tabindex="1"
                >
                    <div style="width:320px;" class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                    <img src="https://img.freepik.com/free-photo/businesspeople-office-meeting_23-2148908969.jpg" class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110" alt="" />
                </div>
                <div style="background-color: Gray; width:70%;" class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                    <h1 class="text-lg font-bold text-white ">XV Años</h1>
                    <h2 class="text-m font-light text-gray-200 ">STUDIO64</h2>
                </div>
              
              </div>
                  <div
                    class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000"
                  >
                
                  <p style="font-size: .9em;" v-html="This is all about John"></p>
                  </div>
                </div>
              </div>
            </ul>
          </li>
     <!-- fin de album -->

      <!-- inicio de album -->

        <li v-for="person in people" :key="person.name">
            <ul role="list" class="mt-3 flex gap-x-3">
              <div class="m-2 space-y-2">
                <div
                  class="group flex flex-col gap-1 rounded-lg p-5 text-gray"
                  tabindex="1"
                >
                    <div style="width:320px;" class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                    <img src="https://img.freepik.com/free-photo/businesspeople-office-meeting_23-2148908969.jpg" class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110" alt="" />
                </div>
                <div style="background-color: Gray; width:70%;" class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                    <h1 class="text-lg font-bold text-white ">Fiestas Infantiles</h1>
                    <h2 class="text-m font-light text-gray-200 ">STUDIO64</h2>
                </div>
              
              </div>
                  <div
                    class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000"
                  >
                
                  <p style="font-size: .9em;" v-html="This is all about John"></p>
                  </div>
                </div>
              </div>
            </ul>
          </li>
     <!-- fin de album -->

      <!-- inicio de album -->

        <li v-for="person in people" :key="person.name">
            <ul role="list" class="mt-3 flex gap-x-3">
              <div class="m-2 space-y-2">
                <div
                  class="group flex flex-col gap-1 rounded-lg p-5 text-gray"
                  tabindex="1"
                >
                    <div style="width:320px;" class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                    <img src="https://img.freepik.com/free-photo/businesspeople-office-meeting_23-2148908969.jpg" class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110" alt="" />
                </div>
                <div style="background-color: Gray; width:70%;" class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                    <h1 class="text-lg font-bold text-white ">Bautizos</h1>
                    <h2 class="text-m font-light text-gray-200 ">STUDIO64</h2>
                </div>
              
              </div>
                  <div
                    class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000"
                  >
                
                  <p style="font-size: .9em;" v-html="This is all about John"></p>
                  </div>
                </div>
              </div>
            </ul>
          </li>
     <!-- fin de album -->

      <!-- inicio de album -->

        <li v-for="person in people" :key="person.name">
            <ul role="list" class="mt-3 flex gap-x-3">
              <div class="m-2 space-y-2">
                <div
                  class="group flex flex-col gap-1 rounded-lg p-5 text-gray"
                  tabindex="1"
                >
                    <div style="width:320px;" class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                    <img src="https://img.freepik.com/free-photo/businesspeople-office-meeting_23-2148908969.jpg" class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110" alt="" />
                </div>
                <div style="background-color: Gray; width:70%;" class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                    <h1 class="text-lg font-bold text-white ">Cumpleaños</h1>
                    <h2 class="text-m font-light text-gray-200 ">STUDIO64</h2>
                </div>
              
              </div>
                  <div
                    class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000"
                  >
                
                  <p style="font-size: .9em;" v-html="This is all about John"></p>
                  </div>
                </div>
              </div>
            </ul>
          </li>
     <!-- fin de album -->

      <!-- inicio de album -->

        <li v-for="person in people" :key="person.name">
            <ul role="list" class="mt-3 flex gap-x-3">
              <div class="m-2 space-y-2">
                <div
                  class="group flex flex-col gap-1 rounded-lg p-5 text-gray"
                  tabindex="1"
                >
                    <div style="width:320px;" class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                    <div class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                    <img src="https://img.freepik.com/free-photo/businesspeople-office-meeting_23-2148908969.jpg" class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110" alt="" />
                </div>
                <div style="background-color: Gray; width:70%;" class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                    <h1 class="text-lg font-bold text-white ">BODAS</h1>
                    <h2 class="text-m font-light text-gray-200 ">STUDIO64</h2>
                </div>
              
              </div>
                  <div
                    class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000"
                  >
                
                  <p style="font-size: .9em;" v-html="This is all about John"></p>
                  </div>
                </div>
              </div>
            </ul>
          </li>
     <!-- fin de album -->
        </ul>
      </div>
    </div>
  </div>

@endsection