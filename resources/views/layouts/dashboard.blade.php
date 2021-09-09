<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - {{ $title }}</title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        {{ $css ?? '' }}
    </style>

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- js --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <header class="max-w-full w-screen fixed">
        <x-header-nav />
    </header>
    <div class="flex flex-row">
        <div class="hidden mt-16 md:block">
            <x-sidepanel-nav />
        </div>
        <div class="ml-0 mt-16 w-full md:ml-60">
            {{ $slot }}
        </div>
    </div>

    @livewireScripts
</body>

<script>
    {{ $js ?? '' }}
</script>

</html>
