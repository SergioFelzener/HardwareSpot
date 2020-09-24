<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-dropdown')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            @if (session()->has('success'))
                <div class="mr-6 ml-6 mt-4 rounded-r-lg bg-green-100 text-center py-4 lg:px-4">
                    <div class="mr-8 ml-8 p-2 bg-green-400 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex rounded-" role="alert">
                        <span class="flex rounded-full bg-green uppercase px-2 py-1 text-xs font-bold mr-3">Success</span>
                        <span class="font-semibold mr-2 text-left flex-auto">{{ session()->get('success')}}</span>
                    </div>
                </div>
            @endif

            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
