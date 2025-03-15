<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Studio64 @yield('title')</title>
    @include('layouts.style')
</head>
<body class="min-h-screen bg-gray-100 "> <!-- Agregado min-h-screen para asegurar altura mínima -->
    <!-- Contenedor flex padre que envuelve sidebar y contenido -->
    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('layouts.partials.admin.sidebar')

        <!-- Contenido principal -->
        <div class="flex-1 overflow-y-auto p-4 container mx-auto"> 
            <main class="py-9">
                @yield('content')
            </main>
            
        </div>
    </div>
</body>
</html>