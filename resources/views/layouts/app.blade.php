<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts & Icons -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
                <!-- Logo + Brand -->
                <a class="navbar-brand d-flex align-items-center gap-2 text-dark fw-bold fs-4" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.jpg') }}" alt="Logo" width="48" height="48" class="rounded-circle shadow-sm" style="object-fit: cover;">
                    <span>JERSEY <span class="text-danger">BANDUNG</span></span>
                </a>

                <!-- Toggle Button Mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    @php
                        $menuItems = [
                            'Home' => '/',
                            'Desain' => 'desain',
                            'Order' => 'order',
                            'Spesifikasi' => 'spesifikasi',
                            'Portofolio' => 'portofolio',
                            'Kontak' => 'kontak',
                        ];
                    @endphp

                    <ul class="navbar-nav fw-semibold me-3 text-uppercase">
                        @foreach($menuItems as $label => $link)
                            <li class="nav-item mx-2">
                                <a class="nav-link px-3 py-2 rounded {{ request()->is(ltrim($link, '/')) ? 'text-white bg-danger shadow-sm' : 'text-dark' }}"
                                   href="{{ url($link) }}"
                                   style="transition: all 0.3s ease;">
                                    {{ $label }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Konten Halaman -->
        <main class="py-4">
            @yield('content')
        </main>

<!-- Footer Global -->
<footer class="bg-dark text-white py-3 mt-5">
    <div class="container text-center small">
        <p class="mb-1">
            <strong>Jersey Bandung</strong> — 3PHG+RFF, Jl. Cibiru Tonggoh, Pasir Biru, Kec. Cibiru, Kota Bandung, Jawa Barat 40615 | 
            Telp/WA: +62 857 237 369 46
        </p>
        <p class="mb-0">&copy; {{ date('Y') }} Jersey Bandung. All rights reserved.</p>
    </div>
</footer>
    </div>
</body>
</html>
