<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased h-full">
    <div
        class="relative flex flex-col min-h-full bg-gray-100 bg-center dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="w-full">
                <livewire:welcome.navigation />
            </div>
        @endif

        <div class="flex flex-grow items-center justify-center">
            <div class="flex flex-col items-center justify-center p-6 mx-auto space-y-4 text-center">
                <x-application-logo class="w-24 h-24 fill-current text-primary" />
                <x-button primary xl href="{{ route('register') }}">Get Started</x-button>
            </div>
        </div>
    </div>
</body>

</html>
