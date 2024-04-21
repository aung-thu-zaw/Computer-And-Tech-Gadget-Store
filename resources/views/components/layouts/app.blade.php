<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-[#191919] text-primaryText">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title . ' - ' . config('app.name') : config('app.name') }}</title>

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/18c274e5f3.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700;900&family=Poppins:wght@400;500;600;700;900&display=swap"
        rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-roboto antialiased">
    <x-info-nav />

    <x-navbar />

    <x-main with-nav full-width class="!bg-primaryBackground min-w-screen">
        <x-slot:sidebar drawer="main-drawer" collapsible class="lg:hidden z-50 bg-primaryBackground">
            <x-menu activate-by-route>
                <x-menu-item title="Home" icon="o-home" link="###" />
                <x-menu-item title="Messages" icon="o-envelope" link="###" />
                <x-menu-sub title="Settings" icon="o-cog-6-tooth">
                    <x-menu-item title="Wifi" icon="o-wifi" link="####" />
                    <x-menu-item title="Archives" icon="o-archive-box" link="####" />
                </x-menu-sub>
            </x-menu>
        </x-slot:sidebar>

        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
    </x-main>

    <x-footer-section />

    <x-toast />
</body>

</html>