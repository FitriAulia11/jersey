@extends('layouts.app')

@section('content')
<section class="py-5 bg-light">
  <div class="container">

    <!-- Judul Halaman -->
    <div class="text-center mb-5">
      <h2 class="section-title text-danger fw-bold display-6">📋 Spesifikasi Jersey</h2>
    </div>

<!-- Bahan -->
<div class="container">
  <style>
  .judul-bahan {
    position: relative;
    text-align: center;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 40px;
  }

  .judul-bahan::after {
    content: "";
    width: 80px;
    height: 4px;
    background: #0d6efd; /* warna biru bootstrap */
    display: block;
    margin: 10px auto 0;
    border-radius: 2px;
  }
</style>

<style>
  .img-bahan {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }

  .nama-kain {
    text-align: center;
    font-weight: 600;
    margin-top: 10px;
    letter-spacing: 0.5px;
  }
</style>

<h2 class="judul-bahan">Bahan</h2>

<div class="row mb-5 justify-content-center">

  <!-- 5 atas -->
  <div class="col-md-2 col-6 mb-4">
    <img src="{{ asset('img/Air walk.jpeg') }}" class="img-bahan rounded shadow-sm">
    <p class="nama-kain">AIR WALK</p>
  </div>

  <div class="col-md-2 col-6 mb-4">
    <img src="{{ asset('img/Dry- fit brazil.jpeg') }}" class="img-bahan rounded shadow-sm">
    <p class="nama-kain">DRY FIT BRAZIL</p>
  </div>

  <div class="col-md-2 col-6 mb-4">
    <img src="{{ asset('img/Dry-fit milano.jpeg') }}" class="img-bahan rounded shadow-sm">
    <p class="nama-kain">DRY FIT MILANO</p>
  </div>

  <div class="col-md-2 col-6 mb-4">
    <img src="{{ asset('img/Dtrop nidle.jpeg') }}" class="img-bahan rounded shadow-sm">
    <p class="nama-kain">DROP NIDLE</p>
  </div>

  <div class="col-md-2 col-6 mb-4">
    <img src="{{ asset('img/Embosh curly.jpeg') }}" class="img-bahan rounded shadow-sm">
    <p class="nama-kain">EMBOSH CURLY</p>
  </div>

  <!-- pindah baris -->
  <div class="w-100"></div>

  <!-- 4 bawah (tengah) -->
  <div class="col-md-2 col-6 mb-4 offset-md-1">
    <img src="{{ asset('img/Embosh oscar.jpeg') }}" class="img-bahan rounded shadow-sm">
    <p class="nama-kain">EMBOSH OSCAR</p>
  </div>

  <div class="col-md-2 col-6 mb-4">
    <img src="{{ asset('img/Embosh Topo.jpeg') }}" class="img-bahan rounded shadow-sm">
    <p class="nama-kain">EMBOSH TOPO</p>
  </div>

  <div class="col-md-2 col-6 mb-4">
    <img src="{{ asset('img/micro cool.jpeg') }}" class="img-bahan rounded shadow-sm">
    <p class="nama-kain">MICRO COOL</p>
  </div>

  <div class="col-md-2 col-6 mb-4">
    <img src="{{ asset('img/mojaik.jpeg') }}" class="img-bahan rounded shadow-sm">
    <p class="nama-kain">MOJAIK</p>
  </div>

</div>

<!-- Mesin Produksi -->
<h2 class="judul-bahan">Mesin Produksi</h2>

<style>
  .img-mesin {
    width: 100%;
    height: 220px; /* samakan tinggi */
    object-fit: cover; /* biar nggak gepeng */
  }
</style>

<div class="row justify-content-center mb-5">
  
  <div class="col-md-4 col-6 mb-4 text-center">
    <img src="{{ asset('img/mesin3.jpeg') }}" alt="Mesin 1"
         class="img-mesin rounded shadow-sm">
    <p class="fw-semibold mt-2 mb-0">Mesin Printing</p>
  </div>

  <div class="col-md-4 col-6 mb-4 text-center">
    <img src="{{ asset('img/mesin 2.jpeg') }}" alt="Mesin 2"
         class="img-mesin rounded shadow-sm">
    <p class="fw-semibold mt-2 mb-0">Mesin Press</p>
  </div>

  <div class="col-md-4 col-6 mb-4 text-center">
    <img src="{{ asset('img/mesin printing.jpeg') }}" alt="Mesin 3"
         class="img-mesin rounded shadow-sm">
    <p class="fw-semibold mt-2 mb-0">Mesin printing</p>
  </div>

</div>
</div>

<div class="container">
  <style>
  .judul-bahan {
    position: relative;
    text-align: center;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 40px;
  }

  .judul-bahan::after {
    content: "";
    width: 80px;
    height: 4px;
    background: #0d6efd; /* warna biru bootstrap */
    display: block;
    margin: 10px auto 0;
    border-radius: 2px;
  }
</style>

<!-- Model Jersey -->
<h2 class="judul-bahan">Model Jersey</h2>

<div class="row justify-content-center mb-5">
  <div class="col-md-3 col-6 mb-4 text-center">
    <img src="{{ asset('img/g (1).jpg') }}" alt="Model 1"
         class="img-fluid rounded shadow-sm">
    <p class="fw-semibold mt-2 mb-0">Jersey Pendek</p>
  </div>
  <div class="col-md-3 col-6 mb-4 text-center">
    <img src="{{ asset('img/g (33).jpg') }}" alt="Model 2"
         class="img-fluid rounded shadow-sm">
    <p class="fw-semibold mt-2 mb-0">Jaket</p>
  </div>
  <div class="col-md-3 col-6 mb-4 text-center">
    <img src="{{ asset('img/g (42).jpg') }}" alt="Model 3"
         class="img-fluid rounded shadow-sm">
    <p class="fw-semibold mt-2 mb-0">Lengan Panjang</p>
  </div>
  <div class="col-md-3 col-6 mb-4 text-center">
    <img src="{{ asset('img/g (43).jpg') }}" alt="Model 4"
         class="img-fluid rounded shadow-sm">
    <p class="fw-semibold mt-2 mb-0">Setelan Jersey</p>
  </div>
</div>

<!-- Pilihan Kerah -->
<div class="container">
  <style>
  .judul-bahan {
    position: relative;
    text-align: center;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 40px;
  }

  .judul-bahan::after {
    content: "";
    width: 80px;
    height: 4px;
    background: #0d6efd; /* warna biru bootstrap */
    display: block;
    margin: 10px auto 0;
    border-radius: 2px;
  }
</style>
<h2 class="judul-bahan">Pilihan Kerah</h2>


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
