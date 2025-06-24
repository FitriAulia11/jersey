    <!DOCTYPE html>
    <html lang="id">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Jersey Bandung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
    <style>
        html {
        scroll-behavior: smooth;
        }
        .hero-bg {
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.6)),
        url('{{ asset('images/tim-jersey.jpg') }}') no-repeat center center;
        background-size: cover;
        color: white;
        padding: 130px 0;
        }
        .hero-btn:hover {
        background-color: #dc3545;
        border-color: #dc3545;
        }
        .section-title {
        font-size: 2rem;
        font-weight: bold;
        color: #dc3545;
        margin-bottom: 1.5rem;
        }
    </style>
    </head>
    <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4 text-dark" href="#">
        JERSEY <span class="text-danger">BANDUNG</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
        </button>
<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    @php
        $menuItems = [
            'Home' => 'home',
            'Desain' => 'desain',
            'Order' => 'order',
            'Spesifikasi' => 'spesifikasi',
            'Portfolio' => 'portfolio',
            'Testimoni' => 'testimoni',
            'Kontak' => 'kontak'
        ];
    @endphp
    <ul class="navbar-nav fw-semibold">
        @foreach($menuItems as $label => $route)
            <li class="nav-item mx-2">
                <a class="nav-link text-dark" href="{{ url('/' . $route) }}">{{ $label }}</a>
            </li>
        @endforeach
    </ul>
</div>
        </div>
        </nav>

<!-- Hero Section -->
<section id="home" class="hero-bg text-center">
  <div class="container">
    <h1 class="display-5 fw-bold">Bikin Jersey <span class="text-danger">Full Print</span> Kualitas Premium</h1>
    <p class="lead mt-3">Mulai dari 1 pcs, harga terjangkau, desain suka-suka!</p>
    <a href="#order" class="btn btn-outline-light btn-lg mt-4 hero-btn">Pesan Sekarang</a>
  </div>
</section>

<!-- Desain Section -->
<section id="desain" class="py-5 bg-white text-center mt-5">
  <div class="container">
    <h2 class="section-title">Contoh Desain Jersey Bandung</h2>
    <p class="mb-4">Cari jersey berdasarkan jenis seperti futsal, badminton, dll.</p>

    <!-- Search Input -->
    <div class="input-group mb-4 w-75 mx-auto">
      <span class="input-group-text bg-danger text-white"><i class="bi bi-search"></i></span>
      <input type="text" id="searchInput" class="form-control" placeholder="Cari jersey (misal: futsal, badminton)" onkeyup="filterJersey()">
    </div>

    <!-- Jersey Futsal -->
    <div class="jersey-section" data-jenis="futsal">
      <h4 class="text-danger fw-bold text-uppercase mt-5 mb-3">Jersey Futsal</h4>
      <div class="d-flex overflow-auto pb-2">
        @foreach (['g (1).jpg', 'g (2).jpg', 'g (3).jpg', 'g (4).jpg', 'g (5).jpg', 'g (6).jpg', 'g (7).jpg', 'g (8).jpg'] as $img)
          <div class="me-3" style="flex: 0 0 auto; width: 200px;">
<a href="{{ url('/jersey/' . urlencode($img)) }}">
  <img src="{{ asset('img/'.$img) }}" class="img-fluid rounded shadow-sm" alt="Jersey">
</a>
          </div>
        @endforeach
      </div>
    </div>

    <!-- Jersey Badminton -->
    <div class="jersey-section" data-jenis="badminton">
      <h4 class="text-danger fw-bold text-uppercase mt-5 mb-3">Jersey Badminton</h4>
      <div class="d-flex overflow-auto pb-2">
        @foreach (['g (9).jpg', 'g (10).jpg', 'g (11).jpg', 'g (12).jpg', 'g (13).jpg', 'g (14).jpg', 'g (15).jpg', 'g (16).jpg'] as $img)
          <div class="me-3" style="flex: 0 0 auto; width: 200px;">
<a href="{{ url('/jersey/' . urlencode($img)) }}">
  <img src="{{ asset('img/'.$img) }}" class="img-fluid rounded shadow-sm" alt="Jersey">
</a>
          </div>
        @endforeach
      </div>
    </div>

    <p class="mt-5 text-muted">*Klik gambar untuk melihat lebih jelas.</p>
  </div>
</section>

    <!-- Order -->
    <section id="order" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
        <h2 class="section-title">Cara Order</h2>
        <p class="text-muted">Ikuti panduan di bawah ini untuk memesan jersey custom Anda</p>
        </div>

        <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="bg-white p-5 rounded shadow-sm">
            <h5 class="fw-bold text-danger mb-3">CARA PEMESANAN JERSEY BANDUNG:</h5>
            <p>Silakan kirim email dengan format berikut:</p>

            <div class="bg-light border p-4 rounded mb-4">
                <p><strong>SUBJECT:</strong> PEMESANAN JERSEY BANDUNG</p>
                <ul class="list-unstyled">
                <li><strong>NAMA:</strong> [Isi nama Anda]</li>
                <li><strong>NO HP:</strong> [Isi nomor Anda]</li>
                <li><strong>WhatsApp:</strong> (jika ada)</li>
                <li><strong>JUMLAH KAOS - UKURAN KAOS:</strong> [Model, ukuran, jumlah]</li>
                <li><strong>Deskripsi:</strong> Keterangan lengkap</li>
                <li><strong>Lampiran:</strong> Sertakan file gambar desain</li>
                </ul>
                <p><strong>Email:</strong> <span class="text-primary">prokaosjogja@gmail.com</span></p>
                <p>Email akan kami balas dalam waktu <strong>1–12 jam</strong></p>
            </div>

            <h6 class="fw-bold">Keterangan Tambahan:</h6>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent">
                <strong>Format file gambar:</strong> JPEG, PNG, PSD, AI, CDR, BMP.
                Sertakan font jika menggunakan font khusus.
                </li>
                <li class="list-group-item bg-transparent">
                <strong>Resolusi gambar:</strong> Semua resolusi bisa, namun semakin tinggi resolusi, semakin tajam hasil cetak.
                </li>
            </ul>

            <div class="alert alert-secondary text-center">
                <p class="mb-2 fw-semibold">Atau langsung hubungi kami via:</p>
                <a href="https://wa.me/6285270009500" class="btn btn-success px-4">
                <i class="bi bi-whatsapp me-2"></i>WhatsApp
                </a>
                <p class="mt-3 mb-0 text-muted">Bisa juga via SMS atau Telepon ke nomor yang sama</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- Harga -->
    <section id="harga" class="py-5 bg-white text-center">
    <div class="container">
        <h2 class="section-title">Harga Terjangkau</h2>
        <p>Harga mulai dari Rp 100.000 tergantung bahan dan jumlah.</p>
    </div>
    </section>

    <!-- Spesifikasi -->
    <section id="spesifikasi" class="py-5 bg-light text-center">
    <div class="container">
        <h2 class="section-title">Spesifikasi Jersey</h2>
        <p>Bahan dryfit, sablon sublim full print, jahitan rapi dan kuat.</p>
    </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="py-5 bg-white text-center">
    <div class="container">
        <h2 class="section-title">Portfolio</h2>
        <p>Beberapa hasil karya jersey dari klien kami sebelumnya.</p>
    </div>
    </section>

    <!-- Testimoni -->
    <section id="testimoni" class="py-5 bg-light text-center">
    <div class="container">
        <h2 class="section-title">Testimoni Pelanggan</h2>
        <p>"Jerseynya keren, hasilnya sesuai harapan!" - Pelanggan A</p>
    </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="py-5 text-center bg-white">
    <div class="container">
        <h2 class="section-title">Kontak Kami</h2>
        <p class="mb-4 text-muted">Hubungi kami untuk konsultasi desain dan pemesanan</p>
        <a href="https://wa.me/+6285723736946" class="btn btn-success btn-lg">
        <i class="bi bi-whatsapp me-2"></i>Chat WhatsApp
        </a>
    </div>
<script>
  function filterJersey() {
    const keyword = document.getElementById('searchInput').value.toLowerCase();
    const sections = document.querySelectorAll('.jersey-section');

    sections.forEach(section => {
      const jenis = section.getAttribute('data-jenis');
      if (jenis.includes(keyword) || keyword === '') {
        section.style.display = 'block';
      } else {
        section.style.display = 'none';
      }
    });
  }
</script>
