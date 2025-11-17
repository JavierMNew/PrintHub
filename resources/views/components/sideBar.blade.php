<!doctype html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Dashboard - PrintHub')</title>
</head>
<body>
<div class="sidebar-wrapper">
    <div
        class="w-[25%] md:w-[25%] sm:w-0 sm:overflow-hidden border-r border-gray-300 flex items-center justify-between flex-col p-4 h-screen fixed left-0 top-0 bg-white z-10 transition-all duration-300">
        <div class="flex items-center justify-center flex-col border-b border-gray-300 w-full p-4">
            <a href="/">
                <img src="marca/PrintHub_Principal_Transparente.webp" alt="PrintHub" class="w-16 h-16" />
            </a>
        </div>

        <nav class="flex flex-col h-full w-full">
            @include('partials.sidebar-links')
        </nav>

        <div class="flex items-center flex-col border-t border-gray-300 p-4 w-full space-y-2">
            <a class="" href="/configuracion-usuario">
                <img src="marca/avatar.webp" alt="Avatar" class="w-10 h-10" />
            </a>
            <h3>{{ auth()->user()->name }}</h3>
        </div>
    </div>
</div>

<main class="content-wrapper ml-[25%] p-4">
    @yield('content')
</main>
</body>
</html>
