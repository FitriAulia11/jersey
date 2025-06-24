@extends('layouts.app')

@section('content')
<section class="py-5 bg-light">
  <div class="container">

    <!-- Judul Halaman -->
    <div class="text-center mb-5">
      <h2 class="section-title text-danger fw-bold display-6">📋 Spesifikasi Jersey</h2>
    </div>

    <!-- Bahan -->
<h2 class="fw-bold text-center mb-4 text-uppercase">Bahan</h2>
    <div class="row justify-content-center mb-5">
      <div class="col-md-3 col-6 mb-4">
        <img src="{{ asset('img/bahan1.jpg') }}" alt="Drifit Mtiss" class="img-fluid rounded shadow-sm" style="max-height: 200px;">
        <p class="text-center fw-semibold mt-2">DRIFIT MTISS</p>
      </div>
      <div class="col-md-3 col-6 mb-4">
        <img src="{{ asset('img/bahan2.jpg') }}" alt="Drifit Jarum" class="img-fluid rounded shadow-sm" style="max-height: 200px;">
        <p class="text-center fw-semibold mt-2">DRIFIT JARUM</p>
      </div>
      <div class="col-md-3 col-6 mb-4">
        <img src="{{ asset('img/bahan3.jpg') }}" alt="Drifit Benzema" class="img-fluid rounded shadow-sm" style="max-height: 200px;">
        <p class="text-center fw-semibold mt-2">DRIFIT BENZEMA</p>
      </div>
      <div class="col-md-3 col-6 mb-4">
        <img src="{{ asset('img/bahan4.jpg') }}" alt="D. Bilbao" class="img-fluid rounded shadow-sm" style="max-height: 200px;">
        <p class="text-center fw-semibold mt-2">D. BILBAO</p>
      </div>
    </div>

<!-- Model Jersey -->
<h2 class="fw-bold text-center mb-4 text-uppercase">Model Jersey</h2>
<div class="row justify-content-center mb-5">
  <div class="col-md-3 col-6 mb-4 text-center">
    <img src="{{ asset('img/g (1).jpg') }}" alt="Model 1"
         class="img-fluid rounded shadow-sm">
    <p class="fw-semibold mt-2 mb-0">Model 1</p>
  </div>
  <div class="col-md-3 col-6 mb-4 text-center">
    <img src="{{ asset('img/g (33).jpg') }}" alt="Model 2"
         class="img-fluid rounded shadow-sm">
    <p class="fw-semibold mt-2 mb-0">Jaket</p>
  </div>
  <div class="col-md-3 col-6 mb-4 text-center">
    <img src="{{ asset('img/g (2).jpg') }}" alt="Model 3"
         class="img-fluid rounded shadow-sm">
    <p class="fw-semibold mt-2 mb-0">Lengan Panjang</p>
  </div>
  <div class="col-md-3 col-6 mb-4 text-center">
    <img src="{{ asset('img/g (9).jpg') }}" alt="Model 4"
         class="img-fluid rounded shadow-sm">
    <p class="fw-semibold mt-2 mb-0">Model 4</p>
  </div>
</div>

<!-- Pilihan Kerah -->
<h2 class="fw-bold text-center mb-4 text-uppercase">Pilihan Kerah</h2>
<div class="row align-items-center mb-5">
  <div class="col-md-6 text-center mb-3 mb-md-0">
    <img src="{{ asset('img/kerah.jpg') }}" alt="Pilihan Kerah"
         class="img-fluid rounded shadow mx-auto d-block"
         style="max-width: 60%; height: auto;">
  </div>
  <div class="col-md-6">
    <ul class="list-unstyled fs-5">
      <li class="mb-2">🔹 <strong>Kerah O-Neck:</strong> Gaya simpel dan cocok untuk semua jenis jersey.</li>
      <li class="mb-2">🔹 <strong>Kerah V-Neck:</strong> Memberikan kesan sporty dan stylish.</li>
      <li class="mb-2">🔹 <strong>Kerah Shanghai:</strong> Terlihat unik dan berbeda, cocok untuk desain eksklusif.</li>
      <li class="mb-2">🔹 <strong>Kerah Polo:</strong> Lebih formal, cocok untuk jersey event atau komunitas.</li>
    </ul>
  </div>
</div>

<div class="row align-items-start mb-5">
  <div class="col-md-6 text-center">
    <h4 class="fw-bold text-uppercase mb-3">📌 Aturan & Ketentuan</h4>
    <img src="{{ asset('img/aturan.jpg') }}" alt="Aturan & Ketentuan"
         class="img-fluid rounded shadow w-100" style="max-width: 500px;">
  </div>
  <div class="col-md-6 text-center">
    <h4 class="fw-bold text-uppercase mb-3">📏 Size Jersey</h4>
    <img src="{{ asset('img/size.jpg') }}" alt="Size Jersey"
         class="img-fluid rounded shadow w-100" style="max-width: 500px;">
  </div>
</div>
@endsection
