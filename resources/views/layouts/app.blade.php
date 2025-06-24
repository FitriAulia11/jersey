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
                <a class="navbar-brand fw-bold fs-4 text-dark" href="{{ url('/') }}">
                    JERSEY <span class="text-danger">BANDUNG</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    @php
                        $menuItems = [
                            'Home' => '/',
                            'Desain' => '/desain',
                            'Order' => '/#order',
                            'Harga' => '/#harga',
                            'Spesifikasi' => '/#spesifikasi',
                            'Portfolio' => '/#portfolio',
                            'Testimoni' => '/#testimoni',
                            'Kontak' => '/#kontak',
                        ];
                    @endphp

                    <!-- Menu Navigasi -->
                    <ul class="navbar-nav fw-semibold me-3">
                        @foreach($menuItems as $label => $link)
                            <li class="nav-item mx-2">
                                <a class="nav-link text-dark {{ request()->is(ltrim($link, '/')) ? 'active' : '' }}" href="{{ url($link) }}">
                                    {{ $label }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Auth (sembunyikan jika sedang di halaman desain) -->
                    @if (!request()->is('desain','order','spesifikasi','portofoio','testimoni','kontak'))
                        <ul class="navbar-nav">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    @endif
                </div>
            </div>
        </nav>

        <!-- Konten Halaman -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
