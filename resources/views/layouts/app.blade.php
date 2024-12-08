<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Easy Admin') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Template Main CSS File -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <div class="container">
                <!-- =============== Navigation ================ -->
                <div class="navigation">
                    <ul>
                        <li>
                            <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                <span class="icon inline">
                                    <ion-icon name="logo-apple"></ion-icon>
                                </span>
                                <span class="title inline">Easy Admin</span>
                            </a>
                        </li>

                        <li class="activate">
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="home-outline"></ion-icon>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="people-outline"></ion-icon>
                                </span>
                                <span class="title">Customers</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="chatbubble-outline"></ion-icon>
                                </span>
                                <span class="title">Messages</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="help-outline"></ion-icon>
                                </span>
                                <span class="title">Help</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="settings-outline"></ion-icon>
                                </span>
                                <span class="title">Settings</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="lock-closed-outline"></ion-icon>
                                </span>
                                <span class="title">Password</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="icon">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                </span>
                                <span class="title">Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- ========================= Main ==================== -->
                <div class="main">
                    @livewire('navigation-menu')

                    <!-- Page Heading -->
                    {{-- @if (isset($header))
                        <header class="bg-white dark:bg-gray-800 shadow">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif --}}

                    <!-- Page Content -->
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- Template Main JS File -->
        <script src="{{ asset('js/main.js') }}"></script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        @yield('footer_scripts')

    </body>
</html>
