@extends('layouts.app')

@section('content')
<section class="py-5 bg-light">
  <div class="container-fluid px-lg-5">

    <!-- Judul -->
    <div class="text-center mb-5">
      <h2 class="text-danger fw-bold display-6">📞 Hubungi Kami</h2>
      <p class="text-muted fs-5">Silakan hubungi kami untuk pemesanan atau pertanyaan.</p>
    </div>

    <div class="row g-4">
      <!-- Info Kontak -->
      <div class="col-lg-6">
        <div class="bg-white rounded shadow-sm p-5 h-100">
          <h5 class="fw-bold mb-4">Informasi Kontak</h5>
          <ul class="list-unstyled fs-5">
            <li class="mb-3">
              <i class="bi bi-geo-alt-fill text-danger me-2"></i>
              Jl. Cibiru Tonggoh, Pasir Biru, Kec. Cibiru, Kota Bandung, Jawa Barat 40615
            </li>
            <li class="mb-3">
              <i class="bi bi-envelope-fill text-danger me-2"></i>
              prokaosjogja@gmail.com
            </li>
            <li class="mb-3">
              <i class="bi bi-telephone-fill text-danger me-2"></i>
              +6285723736946
            </li>
          </ul>

          <div class="bg-light border rounded p-4 mt-4">
            <h6 class="fw-bold text-success text-center mb-3">
              Atau langsung via WhatsApp:
            </h6>

            <div class="text-center">
              <a href="https://wa.me/6285723736946" target="_blank" class="btn btn-success btn-lg px-4">
                <i class="bi bi-whatsapp me-2"></i> Chat WhatsApp Sekarang
              </a>
            </div>

            <p class="text-center text-muted mt-3 mb-0" style="font-size: 0.9rem;">
              Bisa juga SMS / Telepon ke nomor yang sama.
            </p>
          </div>
        </div>
      </div>

      <!-- Maps -->
      <div class="col-lg-6">
        <div class="bg-white rounded shadow-sm p-3 h-100">
          <h6 class="fw-bold mb-3">Lokasi Kami</h6>
          <div class="ratio ratio-4x3 rounded">
          <iframe
  src="https://www.google.com/maps?q=Arundaya%20Residence%2C%20Cibiru%20Tonggoh%2C%20Bandung&output=embed"
  width="100%" height="100%" frameborder="0"
  style="border:0;" allowfullscreen=""
  loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection
