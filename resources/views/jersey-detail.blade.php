@extends('layouts.app')

@section('content')
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="text-danger fw-bold mb-4 text-center">{{ $judul }}</h2>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <div class="row align-items-center">
<!-- Gambar Jersey -->
<div class="col-md-6 mb-4 mb-md-0 text-center">
  <img src="{{ asset('img/' . $gambar) }}" alt="{{ $judul }}" class="img-fluid shadow rounded w-75">
</div>

      <!-- Info Detail Jersey -->
      <div class="col-md-6">
        <h5 class="text-success mb-2"><i class="bi bi-tag-fill"></i> Harga mulai dari:</h5>
        <h3 class="fw-bold text-danger mb-4">Rp 70.000 - 90.000</h3>

        <ul class="list-unstyled fs-4 mb-4">
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Free Nama, Nomor & Logo</li>
          <li><i class="bi bi-palette-fill text-primary me-2"></i> Motif & Warna desain bisa diubah</li>
          <li><i class="bi bi-capsule-pill-fill text-warning me-2"></i> Bahan: Drift Jarum, Mtiss, Benzema, Serena, Nike/Bilabong</li>
          <li><i class="bi bi-printer-fill text-secondary me-2"></i> Print: Digital Printing Sublim</li>
          <li><i class="bi bi-clock-fill text-info me-2"></i> Waktu pembuatan ± 3 hari kerja</li>
        </ul>

        <a href="#order" class="btn btn-danger btn-lg">
          <i class="bi bi-cart-plus-fill me-1"></i> Pesan Sekarang
        </a>
      </div>
    </div>

    <p class="mt-5 text-muted text-center">
      <i class="bi bi-info-circle-fill me-2"></i>
      *Desain bisa disesuaikan dengan permintaan tim kamu
    </p>
  </div>
</section>
@endsection
