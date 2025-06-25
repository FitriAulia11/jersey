@extends('layouts.app')

@section('content')
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="text-danger fw-bold mb-4 text-center">{{ $judul }}</h2>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    @php
      $warna = [
        'Putih' => ['file' => 'g (1).jpg', 'kode' => '#ffffff'],
        'Merah' => ['file' => 'g (2).jpg', 'kode' => '#ff0000'],
        'Hitam' => ['file' => 'g (3).jpg', 'kode' => '#000000'],
        'Biru'  => ['file' => 'g (4).jpg', 'kode' => '#007bff'],
        'Ungu'  => ['file' => 'g (5).jpg', 'kode' => '#800080'],
      ];
      $gambarAktif = $warna['Putih']['file'];
    @endphp

    <div class="row align-items-center">
      <!-- Gambar Jersey -->
      <div class="col-md-6 mb-4 mb-md-0 text-center">
        <img id="mainImage" src="{{ asset('img/' . $gambarAktif) }}" alt="{{ $judul }}" class="img-fluid shadow rounded w-75">
      </div>

        <!-- Info Detail -->
        <ul class="list-unstyled fs-4 mb-4">
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Free Nama, Nomor & Logo</li>
          <li><i class="bi bi-palette-fill text-primary me-2"></i> Motif & Warna desain bisa diubah</li>
          <li><i class="bi bi-capsule-pill-fill text-warning me-2"></i> Bahan: Drift Jarum, Mtiss, Benzema, Serena, Nike/Bilabong</li>
          <li><i class="bi bi-printer-fill text-secondary me-2"></i> Print: Digital Printing Sublim</li>
          <li><i class="bi bi-clock-fill text-info me-2"></i> Waktu pembuatan ± 3 hari kerja</li>
        </ul>
      </div>
    </div>

    <p class="mt-5 text-muted text-center">
      <i class="bi bi-info-circle-fill me-2"></i>
      *Desain bisa disesuaikan dengan permintaan tim kamu
    </p>
  </div>
</section>

<script>
  document.querySelectorAll('.warna-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      const gambar = this.getAttribute('data-gambar');
      document.getElementById('mainImage').src = gambar;
    });
  });
</script>
@endsection
