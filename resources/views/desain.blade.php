@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero-bg text-center text-white py-5" style="background: linear-gradient(to right, #111, #444);">
  <div class="container">
    <h1 class="display-5 fw-bold">Bikin Jersey <span class="text-danger">Full Print</span> Kualitas Premium</h1>
    <p class="lead mt-3">Mulai dari 1 pcs, harga terjangkau, desain suka-suka!</p>
    <a href="#order" class="btn btn-outline-light btn-lg mt-4 hero-btn">Pesan Sekarang</a>
  </div>
</section>

<!-- Desain Section -->
<section id="desain" class="py-5 bg-white text-center mt-5">
  <div class="container">
    <h2 class="section-title text-danger fw-bold">Contoh Desain Jersey Bandung</h2>
    <p class="mb-4">Cari jersey berdasarkan jenis seperti futsal, badminton, dll.</p>

    <!-- Search Input -->
    <div class="w-75 mx-auto position-relative">
      <div class="input-group border rounded-pill shadow-sm overflow-hidden">
        <span class="input-group-text bg-white border-0 ps-4">
          <i class="bi bi-search text-danger fs-5"></i>
        </span>
        <input
          type="text"
          id="searchInput"
          class="form-control border-0"
          placeholder="Cari jersey custom (misal: futsal, badminton)"
          autocomplete="off"
          style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;"
        >
      </div>

      <!-- Dropdown Suggestion -->
      <div id="suggestionBox" class="position-absolute w-100 bg-white shadow-sm border rounded mt-1 d-none" style="z-index: 999; max-height: 230px; overflow-y: auto;">
        <!-- hasil akan muncul di sini -->
      </div>
    </div>

    <!-- Jersey Custom -->
    <div class="jersey-section" data-nama="jersey custom">
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
    <div class="jersey-section" data-nama="jersey badminton">
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
      <!-- Jersey Badminton -->
    <div class="jersey-section" data-nama="jersey badminton">
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

      <!-- Jersey Badminton -->
    <div class="jersey-section" data-nama="jersey badminton">
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

      <!-- Jersey Badminton -->
    <div class="jersey-section" data-nama="jersey badminton">
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

      <!-- Jersey Badminton -->
    <div class="jersey-section" data-nama="jersey badminton">
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

<!-- Script AJAX Search -->
<script>
  const searchInput = document.getElementById('searchInput');
  const suggestionBox = document.getElementById('suggestionBox');

  searchInput.addEventListener('keyup', function () {
    const keyword = this.value;

    if (keyword.length >= 1) {
      fetch(`/search-jersey?q=${encodeURIComponent(keyword)}`)
        .then(res => res.json())
        .then(data => {
          suggestionBox.innerHTML = '';
          if (data.length > 0) {
            data.forEach(item => {
              const div = document.createElement('div');
              div.className = 'px-3 py-2 border-bottom text-start suggestion-item';
              div.textContent = item;
              div.style.cursor = 'pointer';
              div.onclick = () => {
                searchInput.value = item;
                suggestionBox.classList.add('d-none');
                filterJersey(item);
              };
              suggestionBox.appendChild(div);
            });
            suggestionBox.classList.remove('d-none');
          } else {
            suggestionBox.innerHTML = '<div class="px-3 py-2 text-muted">Tidak ditemukan</div>';
            suggestionBox.classList.remove('d-none');
          }
        });
    } else {
      suggestionBox.innerHTML = '';
      suggestionBox.classList.add('d-none');
      filterJersey('');
    }
  });

  // Sembunyikan dropdown jika klik di luar
  document.addEventListener('click', function (e) {
    if (!searchInput.contains(e.target) && !suggestionBox.contains(e.target)) {
      suggestionBox.classList.add('d-none');
    }
  });

  function filterJersey(keyword) {
    const sections = document.querySelectorAll('.jersey-section');
    keyword = keyword.toLowerCase();

    sections.forEach(section => {
      const nama = section.getAttribute('data-nama')?.toLowerCase() || '';
      section.style.display = nama.includes(keyword) ? 'block' : 'none';
    });
  }
</script>
@endsection
