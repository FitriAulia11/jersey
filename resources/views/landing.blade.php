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

<!-- Tentang Kami -->
<section class="py-5 bg-white text-center">
  <div class="container">
    <h2 class="section-title text-danger fw-bold mb-4" style="font-size: 2rem;">Tentang Kami</h2>
    <p class="text-muted w-75 mx-auto" style="font-size: 1.15rem; line-height: 1.8;">
      Kami adalah produsen jersey full print asal Bandung yang melayani kebutuhan berbagai tim dan komunitas, seperti 
      <strong>futsal, badminton, voli, gowes, hingga esports</strong>. 
      Kami menyediakan layanan custom desain yang bisa disesuaikan dengan identitas tim Anda.
    </p>
    <p class="text-muted w-75 mx-auto mt-3" style="font-size: 1.15rem; line-height: 1.8;">
      Dapatkan jersey dengan bahan berkualitas tinggi, pilihan warna bebas, dan proses produksi cepat. 
      <strong>Bisa pesan mulai dari 1 pcs</strong> saja tanpa minimal order!
    </p>
  </div>
</section>

<!-- Kategori Produk -->
<section class="py-5 bg-light text-center">
  <div class="container">
    <h2 class="section-title mb-4 text-danger fw-bold">Kategori Jersey</h2>
    <div class="row justify-content-center">
      @foreach([
          ['Futsal', 'img/g (34).jpg'],
          ['Badminton', 'img/g (1).jpg'],
          ['Voli', 'img/g (46).jpg'],
          ['Gowes', 'img/g (14).jpg'],
          ['Esports', 'img/g (7).jpg'],
      ] as [$kategori, $gambar])
      <div class="col-md-2 col-6 mb-4">
        <div class="card border-0 shadow-sm h-100 kategori-card">
          <img src="{{ asset($gambar) }}" class="card-img-top kategori-img" alt="Jersey {{ $kategori }}">
          <div class="card-body">
            <h6 class="fw-bold text-danger">{{ $kategori }}</h6>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- CSS Tambahan (bisa kamu pindah ke file CSS atau tambahkan di <style>) -->
<style>
  .kategori-img {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 10px;
  }

  .kategori-card:hover .kategori-img {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
  }

  .kategori-card {
    transition: transform 0.3s ease;
    border-radius: 12px;
  }

  .kategori-card:hover {
    transform: scale(1.03);
  }
</style>

<!-- Keunggulan -->
<section class="py-5 bg-white text-center">
    <div class="container">
        <h2 class="section-title">Kenapa Pilih Kami?</h2>
        <div class="row mt-4">
            @foreach([
                ['Desain Suka-suka', 'bi-brush'],
                ['Minimal 1 Pcs', 'bi-box'],
                ['Full Print Sublim', 'bi-droplet'],
                ['Respon Cepat', 'bi-lightning'],
            ] as [$text, $icon])
            <div class="col-md-3 col-6 mb-4">
                <div class="text-danger fs-1 mb-2"><i class="bi {{ $icon }}"></i></div>
                <p class="text-muted fw-semibold">{{ $text }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimoni -->
<section class="py-5" style="background-color: #fff8e1;">
    <div class="container text-center">
        <h2 class="section-title">Apa Kata Mereka?</h2>
        <div class="row justify-content-center mt-4">
            @foreach([
                ['img/testi1.jpg', '“Kualitas jerseynya mantap! Respon admin juga cepat.”', 'Reza – Tim Futsal SMAN 2'],
                ['img/testi2.jpg', '“Desain bebas, harga terjangkau, recommended banget!”', 'Dina – Komunitas Gowes Bandung'],
                ['img/testi3.jpg', '“Sudah repeat order 3x, hasil selalu puas.”', 'Andi – Esport Club Garut'],
            ] as [$foto, $komentar, $nama])
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <img src="{{ asset($foto) }}" class="rounded-circle mb-3" width="70" height="70" style="object-fit: cover;">
                        <p class="text-muted fst-italic">"{{ $komentar }}"</p>
                        <h6 class="fw-bold text-dark mt-2">{{ $nama }}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Galeri Desain -->
<section class="py-5 bg-white text-center">
    <div class="container">
        <h2 class="section-title">Galeri Desain Kami</h2>
        <p class="mb-4 text-muted">Berikut beberapa hasil jersey custom yang pernah kami produksi:</p>
        <div class="row">
            @foreach(['g (1).jpg', 'g (3).jpg', 'g (9).jpg', 'g (12).jpg', 'g (16).jpg', 'g (25).jpg'] as $img)
            <div class="col-md-4 col-6 mb-4">
                <img src="{{ asset('img/' . $img) }}" class="img-fluid rounded shadow-sm img-hover" alt="Galeri Jersey">
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Langkah Order -->
<section class="py-5 bg-light text-center">
    <div class="container">
        <h2 class="section-title">Cara Order</h2>
        <div class="row justify-content-center mt-4">
            @foreach([
                ['Chat WhatsApp', 'bi-whatsapp'],
                ['Kirim Desain / Logo', 'bi-image'],
                ['Proses Produksi', 'bi-gear-fill'],
                ['Jersey Dikirim', 'bi-truck'],
            ] as [$step, $icon])
            <div class="col-md-3 col-6 mb-4">
                <div class="text-danger fs-1 mb-2"><i class="bi {{ $icon }}"></i></div>
                <p class="fw-semibold text-muted">{{ $step }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-5 bg-white text-start">
    <div class="container">
        <h2 class="section-title text-center">Pertanyaan Umum</h2>
        <div class="accordion mt-4" id="faqAccordion">
            @foreach([
                ['Apakah bisa pesan 1 pcs saja?', 'Ya, kami menerima pemesanan mulai dari 1 pcs.'],
                ['Berapa lama proses produksi?', 'Rata-rata 5–7 hari kerja tergantung jumlah dan antrean.'],
                ['Apakah bisa kirim ke luar kota?', 'Bisa! Kami kirim ke seluruh Indonesia via ekspedisi.']
            ] as $index => [$question, $answer])
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $index }}">
                    <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}">
                        {{ $question }}
                    </button>
                </h2>
                <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                     data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted">
                        {{ $answer }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
