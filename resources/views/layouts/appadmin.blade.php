<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Studio64 @yield('title')</title>
    @include('layouts.style')
</head>
<body class="min-h-screen bg-gray-100 "> 
    <div class="flex h-screen">

        @include('layouts.partials.admin.sidebar')

        <div class="flex-1 overflow-y-auto p-4 container"> 
            <main class="py-[3rem]">
                @yield('content')
            </main>
            
        </div>
    </div>
</body>
</html>