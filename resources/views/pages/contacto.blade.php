@extends('layouts.app')
@section('title',':: Contacto')
@section('content')

<section
  class="overflow-hidden bg-[url(https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?q=80&w=2670&auto=format&fit=crop)] bg-cover bg-top bg-no-repeat"
>
<br></br>
  <div class="bg-black/50 p-8 md:p-12 lg:px-16 lg:py-24">
    <div class="text-rigth ltr:sm:text-left rtl:sm:text-right container px-4">
      <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-5xl">Contacto</h2>
        <p class="hidden max-w-lg text-white/90 md:mt-6 md:block md:text-lg md:leading-relaxed"></p>
    </div>
  </div>
</section>

    <!-- component -->
<section>
            <div class="container px-6 py-10 mx-auto">
                <div class="lg:flex lg:items-center">
                    <div class="w-full space-y-12 lg:w-1/2 ">
                        <div>
                            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-dark">Contáctanos</h1>
                        
                            <div class="mt-2">
                                <span class="inline-block w-40 h-1 rounded-full bg-blue-500"></span>
                                <span class="inline-block w-3 h-1 ml-1 rounded-full bg-blue-500"></span>
                                <span class="inline-block w-1 h-1 ml-1 rounded-full bg-blue-500"></span>
                            </div>
                        </div>

                        <div class="md:flex md:items-start md:-mx-4">
                            <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-dark">Nuestro WhatsApp</h1>

                                <a href="https://wa.me/51931140589" target="_blank" class="text-blak font-bold hover:text-green-600 text-lg md:text-xl block mt-2">
                                +51 931 140 589
                                </a>

                            </div>
                        </div>

                        <div class="md:flex md:items-start md:-mx-4">
                            <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-dark">Nuestro Correo Electónico</h1>

                                 <a href="" target="_blank" class="text-blak font-bold hover:text-red-500 text-lg md:text-xl block mt-2">
                                ventas@studio64peru.pe
                                </a>
                            </div>
                        </div>

                        <div class="md:flex md:items-start md:-mx-4">
                            <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-dark">Nuestras Redes Sociales</h1>

                                <p class="mt-3 text-gray-500 dark:text-gray-300">
                                    <ul class="flex justify-rigth space-x-4 mt-4">
            <a href="https://www.facebook.com/studio64.agencia/" target="_blank" class="hover:text-blue-500">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M18 2a1 1 0 0 1 .993 .883v4a1 1 0 0 1 -.883 .993h-3v1h3a1 1 0 0 1 .991 1.131l-1 4a1 1 0 0 1 -.858 .75h-2v6a1 1 0 0 1 -.883 .993h-4a1 1 0 0 1 -.993 -.883v-6h-2a1 1 0 0 1 -.993 -.883v-4a1 1 0 0 1 .883 -.993h2v-1a6 6 0 0 1 5.775 -5.996h3z"></path>
                    </svg>
                </li>
            </a>
            <a href="#" target="_blank" class="hover:text-pink-500">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                        <path d="M16.5 7.5v.01"></path>
                    </svg>
                </li>
            </a>
            <a href="#" target="_blank" class="hover:text-red-500">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M18 3a5 5 0 0 1 5 5v8a5 5 0 0 1 -5 5h-12a5 5 0 0 1 -5 -5v-8a5 5 0 0 1 5 -5zm-9 6v6a1 1 0 0 0 1.514 .857l5 -3a1 1 0 0 0 0 -1.714l-5 -3a1 1 0 0 0 -1.514 .857z"></path>
                    </svg>
                </li>
            </a>
            <a href="#" target="_blank" class="hover:text-gray-500">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M16.083 2h-4.083a1 1 0 0 0 -1 1v11.5a1.5 1.5 0 1 1 -2.519 -1.1l.12 -.1a1 1 0 0 0 .399 -.8v-4.326a1 1 0 0 0 -1.23 -.974a7.5 7.5 0 0 0 1.73 14.8l.243 -.005a7.5 7.5 0 0 0 7.257 -7.495v-2.7l.311 .153c1.122 .53 2.333 .868 3.59 .993a1 1 0 0 0 1.099 -.996v-4.033a1 1 0 0 0 -.834 -.986a5.005 5.005 0 0 1 -4.097 -4.096a1 1 0 0 0 -.986 -.835z"></path>
                    </svg>
                </li>
            </a>
        </ul>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:flex lg:items-center lg:w-1/2 lg:justify-center">
                        <img class="w-[28rem] h-[28rem] object-cover xl:w-[34rem] xl:h-[34rem] rounded-full" src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=755&q=80" alt="">
                    </div>
                </div>

                <hr class="border-gray-200 my-12 dark:border-gray-700">

            </div>
        </section>


@endsection