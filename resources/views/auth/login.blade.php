@extends('layouts.app')

@section('content')
<style>
    .login-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-color: #f8f9fa;
    }

    .card-login {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .login-image {
        background-image: url('https://i.ibb.co/yVg0FYS/jersey-login.jpg'); /* Ganti dengan URL gambar yang kamu punya */
        background-size: cover;
        background-position: center;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
    }

    @media (max-width: 768px) {
        .login-image {
            display: none;
        }
    }
</style>

<div class="container login-container">
    <div class="row w-100 justify-content-center">
        <div class="col-md-10">
            <div class="row g-0 card-login overflow-hidden">
                <!-- Gambar -->
                <div class="col-md-6 login-image d-none d-md-block"></div>

                <!-- Form Login -->
                <div class="col-md-6 bg-white p-5">
                    <h3 class="mb-4 fw-bold text-danger text-center">Login Jersey Bandung</h3>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password" required>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                   {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-danger btn-lg">Login</button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-center">
                                <a class="text-decoration-none" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
