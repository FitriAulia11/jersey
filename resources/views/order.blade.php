@extends('layouts.app')

@section('content')

<style>
    html {
        scroll-behavior: smooth;
    }

    .hero-bg {
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
        url('{{ asset('img/th (1).jpeg') }}') center center / cover no-repeat;
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        color: white;
        text-align: center;
    }

    .hero-bg::before {
        content: '';
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }

    .hero-bg .container {
        position: relative;
        z-index: 2;
    }

    .section-title {
        font-size: 2rem;
        font-weight: bold;
        color: #dc3545;
        margin-bottom: 1.5rem;
    }

    .suggestion-item {
        cursor: pointer;
        transition: background-color 0.2s ease;
    }

    .suggestion-item:hover {
        background-color: #f8f9fa;
    }

    .img-hover:hover {
        transform: scale(1.03);
        transition: 0.3s;
    }
</style>

<!-- Hero Section -->
<section id="home" class="hero-bg text-center d-flex align-items-center" style="
  height: 350px;
  background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
              url('{{ asset('img/logo.jpg') }}') center center no-repeat;
  background-size: cover;
">
  <div class="container">
    <h1 class="h3 fw-bold text-white">
      Bikin Jersey <span class="text-warning">Full Print</span> Kualitas Premium
    </h1>
    <p class="text-white-50 mb-0">Mulai dari 1 pcs, harga terjangkau, desain suka-suka!</p>
  </div>
</section>


<!-- Order Section -->
<section id="order" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title text-danger fw-bold display-6">📝 Cara Order</h2>
      <p class="text-muted fs-5">Ikuti panduan di bawah ini untuk memesan jersey custom Anda dengan mudah.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="bg-white p-5 rounded shadow-sm">

          <!-- Format Email -->
          <h5 class="fw-bold text-danger mb-4 text-center">CARA PEMESANAN JERSEY BANDUNG:</h5>
          <p>Silakan kirim email dengan format berikut:</p>

          <div class="bg-light border-start border-4 border-danger p-4 rounded mb-5">
            <table class="table table-borderless align-middle mb-0" style="font-size: 1rem;">
              <tbody>
                <tr>
                  <th class="text-nowrap">SUBJECT</th>
                  <td>: PEMESANAN JERSEY BANDUNG</td>
                </tr>
                <tr>
                  <th class="text-nowrap">NAMA</th>
                  <td>: [Isi nama Anda]</td>
                </tr>
                <tr>
                  <th class="text-nowrap">NO HP</th>
                  <td>: [Isi nomor Anda]</td>
                </tr>
                <tr>
                  <th class="text-nowrap">WhatsApp</th>
                  <td>: (jika ada)</td>
                </tr>
                <tr>
                  <th class="text-nowrap">JUMLAH KAOS - UKURAN</th>
                  <td>: [Model, ukuran, jumlah]</td>
                </tr>
                <tr>
                  <th class="text-nowrap">Deskripsi</th>
                  <td>: Keterangan lengkap</td>
                </tr>
                <tr>
                  <th class="text-nowrap">Lampiran</th>
                  <td>: Sertakan file gambar desain</td>
                </tr>
                <tr>
                  <th class="text-nowrap">Email</th>
                  <td>: <a href="mailto:prokaosjogja@gmail.com" class="text-primary">prokaosjogja@gmail.com</a></td>
                </tr>
              </tbody>
            </table>
            <p class="mt-3 text-muted">Kami akan membalas email Anda dalam waktu <strong>1–12 jam</strong>.</p>
          </div>

          <!-- Keterangan Tambahan -->
          <h6 class="fw-bold fs-5 mb-3">ℹ️ Keterangan Tambahan</h6>
          <table class="table table-borderless fs-6 mb-5">
            <tbody>
              <tr>
                <th class="text-nowrap align-top" style="width: 220px;">📂 Format file gambar</th>
                <td>: JPEG, PNG, PSD, AI, CDR, BMP.<br>Sertakan font jika menggunakan font khusus.</td>
              </tr>
              <tr>
                <th class="text-nowrap align-top">🖼️ Resolusi gambar</th>
                <td>: Semua resolusi bisa. Semakin tinggi resolusi, semakin tajam hasil cetak.</td>
              </tr>
            </tbody>
          </table>

          <!-- Kontak WA -->
          <div class="alert alert-success text-center py-4">
            <p class="mb-2 fw-semibold fs-5">Atau langsung hubungi kami via WhatsApp:</p>
            <a href="https://wa.me/6285723736946" class="btn btn-success btn-lg px-5">
              <i class="bi bi-whatsapp me-2"></i> Chat WhatsApp Sekarang
            </a>
            <p class="mt-3 mb-0 text-muted fs-6">Bisa juga via SMS atau Telepon ke nomor yang sama.</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

@endsection
