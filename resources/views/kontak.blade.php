@extends('layouts.app')

@section('content')
<section class="py-5 bg-light">
  <div class="container">

    <!-- Judul -->
    <div class="text-center mb-5">
      <h2 class="text-danger fw-bold display-6">📞 Hubungi Kami</h2>
      <p class="text-muted fs-5">Silakan hubungi kami melalui kontak berikut untuk pemesanan atau pertanyaan.</p>
    </div>

    <!-- Info Kontak -->
    <div class="row justify-content-center mb-5">
      <div class="col-md-6">
        <div class="bg-white rounded shadow-sm p-4 mb-4">
          <h5 class="fw-bold mb-3">Informasi Kontak</h5>
          <ul class="list-unstyled fs-6">
            <li class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i>Jl. Contoh No. 123, Bandung</li>
            <li class="mb-2"><i class="bi bi-envelope-fill text-danger me-2"></i>prokaosjogja@gmail.com</li>
            <li class="mb-2"><i class="bi bi-telephone-fill text-danger me-2"></i>+62 852 7000 9500</li>
          </ul>
          <div class="p-4 bg-light border rounded mt-4">
  <h6 class="fw-bold text-center text-success mb-3">
    Atau langsung hubungi kami via WhatsApp:
  </h6>

  <div class="text-center">
    <a href="https://wa.me/6285723736946" target="_blank" class="btn btn-success btn-lg px-4">
      <i class="bi bi-whatsapp me-2"></i> Chat WhatsApp Sekarang
    </a>
  </div>

  <p class="text-center text-muted mt-2 mb-0" style="font-size: 0.9rem;">
    Bisa juga via SMS atau Telepon ke nomor yang sama.
  </p>
</div>

        </div>

        <!-- Maps -->
        <div class="bg-white rounded shadow-sm p-3">
          <h6 class="fw-bold mb-2">Lokasi Kami</h6>
          <div class="ratio ratio-4x3 rounded">
<iframe
    src="https://www.google.com/maps?q=Jl.%20Cibiru%20Tonggoh%2C%20Bandung&output=embed"
    width="100%"
    height="300"
    frameborder="0"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
</iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA -->
    <div class="text-center mt-4">
      <a href="{{ url('/order') }}" class="btn btn-danger px-4 py-2 fs-5">
        Pesan Jersey Sekarang
      </a>
    </div>

  </div>
</section>
@endsection
