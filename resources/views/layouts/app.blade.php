    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Studio64 @yield('title')</title>
        @include('layouts.style')
    </head>
    <body>
            @include('layouts.partials.navbar_2')
            @yield('content')
            @include('layouts.partials.footer')
    </body>
    </html>