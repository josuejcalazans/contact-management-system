<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title >@yield('title', 'Laravel App')</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] dark:text-white/50 flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col antialiased">
        <div class="container mx-auto p-4">
            <header class="mb-6">
                <h1 class="text-4xl font-bold text-center">@yield('header', 'My Application')</h1>
            </header>
            <main class="">
                @yield('content')
            </main>

            <footer class="mt-6 text-center text-gray-600">
                &copy; {{ date('Y') }} My App. All rights reserved.
            </footer>
        </div>
    </body>
</html>
