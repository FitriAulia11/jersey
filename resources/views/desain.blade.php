@extends('layouts.app')

@section('content')
<style>
    html { scroll-behavior: smooth; }

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
        <input type="text" id="searchInput" class="form-control border-0"
               placeholder="Cari jersey custem (misal: futsal, badminton)" autocomplete="off"
               style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;">
      </div>
      <div id="suggestionBox" class="position-absolute w-100 bg-white shadow-sm border rounded mt-1 d-none"
           style="z-index: 999; max-height: 230px; overflow-y: auto;"></div>
    </div>

    <!-- Pilih Warna -->
    <div class="mt-5 text-center">
      <h5 class="mb-3 text-dark fw-semibold">Pilih Warna Jersey:</h5>
      <div class="d-flex justify-content-center flex-wrap gap-2" id="warnaFilter">
        @php
          $warnaOptions = [
            'hitam' => '#000000', 'putih' => '#FFFFFF', 'kuning' => '#FFD700',
            'merah' => '#FF0000', 'biru' => '#0000FF', 'hijau' => '#008000',
            'coklat' => '#8B4513', 'ungu' => '#800080', 'pink' => '#FFC0CB',
            'abu' => '#D3D3D3'
          ];
          $textColor = [
            'putih' => '#000', 'kuning' => '#000', 'pink' => '#000', 'abu' => '#000',
            'hitam' => '#fff', 'merah' => '#fff', 'biru' => '#fff',
            'hijau' => '#fff', 'coklat' => '#fff', 'ungu' => '#fff'
          ];
        @endphp
        @foreach ($warnaOptions as $warna => $hex)
          <button class="btn warna-btn fw-semibold"
                  data-warna="{{ $warna }}"
                  style="background-color: {{ $hex }}; color: {{ $textColor[$warna] ?? '#000' }};
                         border: 2px solid #ddd; min-width: 80px; border-radius: 30px;
                         padding: 8px 16px; text-transform: capitalize; box-shadow: 1px 1px 4px rgba(0,0,0,0.2);">
            {{ ucfirst($warna) }}
          </button>
        @endforeach
      </div>
    </div>

    @php
      $kategori = [
        'Jersey Custem' => range(1, 8),
        'Jersey Badminton' => range(9, 16),
        'Jersey Futsal' => range(17, 24),
        'Jersey Gowes' => range(25, 32),
        'Jersey Esports' => range(33, 40),
        'Jersey Volly' => range(41, 47),
      ];

      $warnaMap = [
        1 => 'putih', 2 => 'merah', 3 => 'hitam', 4 => 'biru', 5 => 'ungu', 6 => 'merah', 7 => 'merah', 8 => 'hijau',
        9 => 'kuning', 10 => 'hitam', 11 => 'hitam', 12 => 'merah', 13 => 'merah', 14 => 'kuning', 15 => 'biru', 16 => 'hitam',
        17 => 'hitam', 18 => 'biru', 19 => 'hijau', 20 => 'ungu', 21 => 'merah', 22 => 'biru', 23 => 'hijau', 24 => 'putih',
        25 => 'merah', 26 => 'merah', 27 => 'biru', 28 => 'hijau', 29 => 'pink', 30 => 'kuning', 31 => 'biru', 32 => 'hitam',
        33 => 'hitam', 34 => 'hitam', 35 => 'hitam', 36 => 'hitam', 37 => 'hijau', 38 => 'biru', 39 => 'hitam', 40 => 'hitam',
        41 => 'putih', 42 => 'hitam', 43 => 'hijau', 44 => 'hijau', 45 => 'biru', 46 => 'biru', 47 => 'kuning'
      ];
    @endphp

    @foreach ($kategori as $nama => $range)
      <div class="jersey-section" data-nama="{{ strtolower($nama) }}">
        <h4 class="text-danger fw-bold text-uppercase mt-5 mb-3">{{ $nama }}</h4>
        <div class="d-flex overflow-auto pb-2 flex-nowrap">
          @foreach ($range as $num)
            @php
              $img = "g ($num).jpg";
              $warna = $warnaMap[$num] ?? 'putih';
            @endphp
            <div class="me-3 jersey-item" style="flex: 0 0 auto; width: 200px;" data-warna="{{ $warna }}">
              <a href="javascript:void(0);" onclick="openModal('{{ asset('img/'.$img) }}', '{{ $nama }} - {{ $img }}')">
                <img src="{{ asset('img/'.$img) }}" class="img-fluid rounded shadow-sm" alt="Jersey">
              </a>
            </div>
          @endforeach
        </div>
      </div>
    @endforeach

    <p class="mt-5 text-muted">*Klik gambar untuk melihat lebih jelas.</p>
  </div>
</section>

<!-- Modal Gambar Jersey -->
<div class="modal fade" id="modalJersey" tabindex="-1" aria-labelledby="modalJerseyLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content border-0 rounded-4 shadow-lg overflow-hidden">
      <!-- Header Modal -->
      <div class="modal-header bg-light border-0">
        <h5 class="modal-title fw-bold text-dark" id="modalJerseyLabel">Detail Jersey</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>

      <!-- Body Modal -->
      <div class="modal-body px-4 py-4">
        <div class="row g-4 align-items-center">
          <!-- Gambar -->
          <div class="col-md-6 text-center">
            <img id="modalImage" src="" alt="Jersey Besar"
                 class="img-fluid rounded-3 shadow-sm"
                 style="max-height: 450px; object-fit: contain;">
          </div>

          <!-- Keterangan -->
          <div class="col-md-6">
            <h6 class="fw-semibold text-muted mb-3" id="modalCaption"></h6>
            <ul class="list-unstyled fs-5 mb-0">
              <li class="mb-2">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                Free Nama, Nomor & Logo
              </li>
              <li class="mb-2">
                <i class="bi bi-palette-fill text-primary me-2"></i>
                Motif & Warna desain bisa diubah
              </li>
              <li class="mb-2">
                <i class="bi bi-capsule-pill-fill text-warning me-2"></i>
                Bahan: Drift Jarum, Mtiss, Benzema, Serena, Nike/Bilabong
              </li>
              <li class="mb-2">
                <i class="bi bi-printer-fill text-secondary me-2"></i>
                Print: Digital Printing Sublim
              </li>
              <li class="mb-2">
                <i class="bi bi-clock-fill text-info me-2"></i>
                Waktu pembuatan ± 3 hari kerja
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Script -->
<script>
  const searchInput = document.getElementById('searchInput');
  const suggestionBox = document.getElementById('suggestionBox');

  searchInput.addEventListener('keyup', function () {
    const keyword = this.value.toLowerCase();
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
      suggestionBox.classList.add('d-none');
      filterJersey('');
    }
  });

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

  // Warna Filter
  document.querySelectorAll('.warna-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const warna = btn.getAttribute('data-warna');
      document.querySelectorAll('.jersey-item').forEach(item => {
        const itemWarna = item.getAttribute('data-warna');
        item.style.display = (itemWarna === warna) ? 'block' : 'none';
      });
    });
  });

  // Modal Pop-up Jersey
 function openModal(imgUrl, captionText) {
    const modalImg = document.getElementById('modalImage');
    const modalCaption = document.getElementById('modalCaption');
    modalImg.src = imgUrl;
    modalCaption.textContent = captionText;

    const modal = new bootstrap.Modal(document.getElementById('modalJersey'));
    modal.show();
  }
 document.getElementById('modalJersey').addEventListener('hidden.bs.modal', function () {
    document.body.classList.remove('modal-open');
    document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
    document.body.style.overflow = 'auto';
  });

  document.querySelectorAll('.jersey-item a').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const imgUrl = this.querySelector('img').src;
      const caption = this.querySelector('img').alt || "Jersey Custom";

      openModal(imgUrl, caption);
    });
  });
  
  </script>

<!-- Tambahkan di bawah semua script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection
