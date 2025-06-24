@extends('layouts.app')

@section('content')
<section class="py-5 bg-light">
  <div class="container">

    <!-- Judul -->
    <div class="text-center mb-5">
      <h2 class="text-danger fw-bold display-6">💬 Testimoni Pelanggan</h2>
      <p class="text-muted fs-5">Apa kata mereka yang sudah memesan jersey dari kami?</p>
    </div>

    <!-- Testimoni -->
    <div class="row g-4">
      @foreach (range(1, 6) as $i)
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="{{ asset('img/testimoni/user' . $i . '.jpg') }}" alt="User {{ $i }}"
                   class="rounded-circle me-3" width="50" height="50" style="object-fit: cover;">
              <div>
                <h6 class="mb-0 fw-bold">Pelanggan {{ $i }}</h6>
                <small class="text-muted">Jersey Team</small>
              </div>
            </div>
            <p class="card-text">Pelayanan sangat memuaskan dan hasil cetak jersey sangat bagus! Pengiriman juga cepat. Terima kasih Jersey Bandung 🙌</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- CTA -->
    <div class="text-center mt-5">
      <a href="{{ url('/order') }}" class="btn btn-danger px-4 py-2 fs-5">
        Pesan Sekarang
      </a>
    </div>
  </div>
</section>
@endsection
