@extends('layouts.app')

@section('content')
<section class="py-5 bg-light">
  <div class="container">
    <!-- Judul -->
    <div class="text-center mb-5">
      <h2 class="text-danger fw-bold display-6">🎨 Portofolio Jersey</h2>
      <p class="text-muted fs-5">Beberapa hasil desain dan produksi jersey custom oleh tim kami.</p>
    </div>

@php
  $images = [
    'R1.jpeg',
    'R2.jpeg',
    'R3.jpeg',
    'R4.jpeg',
    'R5.jpeg',
    'R6.jpeg',
  ];
@endphp

<div class="container">
  <div class="row g-4">
    @foreach ($images as $img)
    <div class="col-md-3 col-sm-6">
      <div class="card border-0 shadow-sm h-100">

        <!-- WRAPPER GAMBAR -->
        <div style="height: 220px; overflow: hidden; border-radius: 12px;">
          <img src="{{ asset('img/' . $img) }}" 
               class="w-100 h-100"
               style="object-fit: cover; transition: 0.3s;">
        </div>

      </div>
    </div>
    @endforeach
  </div>
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
