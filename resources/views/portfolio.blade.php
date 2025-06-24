@extends('layouts.app')

@section('content')
<section class="py-5 bg-light">
  <div class="container">
    <!-- Judul -->
    <div class="text-center mb-5">
      <h2 class="text-danger fw-bold display-6">🎨 Portofolio Jersey</h2>
      <p class="text-muted fs-5">Beberapa hasil desain dan produksi jersey custom oleh tim kami.</p>
    </div>

    <!-- Galeri Portofolio -->
    <div class="row g-4">
      @for ($i = 1; $i <= 12; $i++)
      <div class="col-md-3 col-sm-6">
        <div class="card shadow-sm border-0 h-100">
          <img src="{{ asset('img/portofolio/portfolio' . $i . '.jpg') }}" class="card-img-top" alt="Portofolio {{ $i }}">
        </div>
      </div>
      @endfor
    </div>

    <!-- CTA -->
    <div class="text-center mt-5">
      <a href="{{ url('/order') }}" class="btn btn-danger px-4 py-2 fs-5">
        Pesan Jersey Sekarang
      </a>
    </div>
  </div>
</section>
@endsection
