<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BEM-FIKES</title>
    <link href="icon" type="image/x-icon" href="{{ asset('public/assets/logo.png') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('landingpage/css/styles.css') }}" rel="stylesheet" />
    {{-- <link href="css/styles.css" rel="stylesheet" /> --}}
    <!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- Lightbox2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
    .hover-opacity-25 {
    transition: opacity 0.3s ease-in-out;
}
.hover-opacity-25:hover {
    opacity: 0.25;
}
.transition-opacity {
    transition: opacity 0.3s ease-in-out;
}

/* Reset margin dan padding untuk semua elemen */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Gaya untuk section */
.py-16 {
    padding-top: 4rem; /* 16 * 0.25rem */
    padding-bottom: 4rem; /* 16 * 0.25rem */
}

.bg-white {
    background-color: #ffffff;
}

/* Gaya untuk container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem; /* 4 * 0.25rem */
}

/* Gaya untuk heading */
.text-3xl {
    font-size: 1.875rem; /* 3xl */
}

.font-bold {
    font-weight: bold;
}

.text-center {
    text-align: center;
}

.mb-12 {
    margin-bottom: 3rem; /* 12 * 0.25rem */
}

.text-gray-800 {
    color: #2d3748; /* Warna abu-abu gelap */
}

/* Gaya untuk grid */
.grid {
    display: grid;
}

.grid-cols-1 {
    grid-template-columns: repeat(1, 1fr);
}

.md\:grid-cols-2 {
    grid-template-columns: repeat(2, 1fr);
}

.lg\:grid-cols-3 {
    grid-template-columns: repeat(3, 1fr);
}

.gap-8 {
    gap: 2rem; /* 8 * 0.25rem */
}

/* Gaya untuk feature card */
.feature-card {
    background-color: #ffffff;
    border-radius: 0.5rem; /* rounded-lg */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* shadow-md */
    padding: 1.5rem; /* p-6 */
    transition: transform 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px); /* Efek hover */
}

/* Gaya untuk ikon */
.text-blue-600 {
    color: #3182ce; /* Warna biru */
}

.mb-4 {
    margin-bottom: 1rem; /* 4 * 0.25rem */
}

.inline-flex {
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.w-16 {
    width: 4rem; /* 16 * 0.25rem */
}

.h-16 {
    height: 4rem; /* 16 * 0.25rem */
}

.rounded-full {
    border-radius: 9999px; /* Bulat penuh */
}

.bg-blue-50 {
    background-color: #ebf8ff; /* Warna biru muda */
}

/* Gaya untuk judul dan deskripsi */
.text-xl {
    font-size: 1.25rem; /* xl */
}

.font-semibold {
    font-weight: 600; /* Semibold */
}

.mb-3 {
    margin-bottom: 0.75rem; /* 3 * 0.25rem */
}

.text-gray-600 {
    color: #718096; /* Warna abu-abu sedang */
}

/* Gaya untuk kartu */
.card {
    border: none; /* Tanpa border */
    border-radius: 0.5rem; /* Rounded corners */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transisi saat hover */
}

.card:hover {
    transform: translateY(-5px); /* Efek hover */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Tambahkan shadow saat hover */
}

/* Gaya untuk gambar */
.card-img-top {
    border-top-left-radius: 0.5rem; /* Rounded corners */
    border-top-right-radius: 0.5rem; /* Rounded corners */
}

/* Gaya untuk judul kartu */
.card-title {
    font-size: 1.25rem; /* Ukuran font judul */
    color: #007bff; /* Warna biru */
    font-weight: bold; /* Bold font */
}

/* Gaya untuk deskripsi kategori */
.text-muted.small {
    font-size: 0.875rem; /* Ukuran font kecil */
    color: #6c757d; /* Warna teks abu-abu */
}

/* Gaya untuk efek AOS (Animate On Scroll) */
[data-aos] {
    opacity: 0; /* Awalnya tidak terlihat */
    transition: opacity 0.5s ease; /* Transisi saat muncul */
}

[data-aos].aos-animate {
    opacity: 1; /* Menjadi terlihat saat animasi */
}

/* Gaya untuk gambar saat hover */
.card-img-top:hover {
    transform: scale(1.05); /* Efek zoom saat hover */
    transition: transform 0.3s ease; /* Transisi zoom */
}

/* Reset dasar */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', sans-serif;
}

body {
  background-color: #f4f6f9;
  color: #333;
}

.hima-section {
  max-width: 1200px;
  margin: 0 auto;
  padding: 60px 20px;
}

.hima-title {
  text-align: center;
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 40px;
  color: #222;
}

.hima-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
}

.hima-card {
  background-color: #fff;
  border-radius: 15px;
  padding: 25px 20px;
  width: 260px;
  text-align: center;
  box-shadow: 0 10px 20px rgba(0,0,0,0.05);
  transition: all 0.3s ease;
}

.hima-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 25px rgba(0,0,0,0.1);
}

.hima-logo {
  width: 90px;
  height: 90px;
  object-fit: cover;
  border-radius: 50%;
  margin-bottom: 20px;
  border: 3px solid #e0e0e0;
}

.hima-name {
  font-size: 18px;
  font-weight: 600;
  color: #005a9c;
  margin-bottom: 10px;
}

.hima-desc {
  font-size: 14px;
  color: #555;
  line-height: 1.5;
}
.loader {
    width: 150px;
    height: 150px;
    background-color: #ff3d00;
    border-radius: 50%;
    position: relative;
    box-shadow: 0 0 30px 4px rgba(0, 0, 0, 0.5) inset,
      0 5px 12px rgba(0, 0, 0, 0.15);
    overflow: hidden;
  }
  .loader:before,
  .loader:after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 45%;
    top: -40%;
    background-color: #fff;
    animation: wave 5s linear infinite;
  }
  .loader:before {
    border-radius: 30%;
    background: rgba(255, 255, 255, 0.4);
    animation: wave 5s linear infinite;
  }
  @keyframes wave {
    0% {
      transform: rotate(0);
    }
    100% {
      transform: rotate(360deg);
    }
  }
</style>
</head>

<body id="page-top">
    <span class="loader"></span>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            {{-- <a class="navbar-brand" href="#page-top">Start Bootstrap</a> --}}
            @foreach ($profile as $p)
              <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="40" class="me-2">

            <a class="navbar-brand" href="#page-top">{{ $p->nickname_profiles }}</a>
            @endforeach

            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#struktur">Struktur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#program">Program Kerja</a></li>
                    <li class="nav-item"><a class="nav-link" href="#article">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#aspiration">Aspirasi</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
  <header id="hero" class="d-flex align-items-center" style="background: linear-gradient(135deg, #1f1f8b, #000000); min-height: 100vh;">
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Left content -->
            <div class="col-lg-6 text-white" data-aos="fade-right">
                <h1 class="display-4 fw-bold">BEM FIKES <br> <span>UMTAS</span></h1>
                <p class="mt-4 text-light">Organisasi Mahasiswa Kesehatan yang Bergerak Aktif, Inovatif, dan Kolaboratif
                    Kami membangun ruang kolaborasi untuk menciptakan perubahan nyata di kampus dan masyarakat</p>
                <div class="d-flex align-items-center mt-4">
                    <a href="#about" class="btn btn-success rounded-pill me-3 px-4 py-2">Selengkapnya</a><br>
                    <a href="https://youtu.be/" class="btn btn-outline-light rounded-pill px-4 py-2 d-flex align-items-center">
                        <i class="bi bi-play-circle-fill me-2 fs-5"></i> Putar Vidio
                    </a>
                </div>
            </div>

            <!-- Right image -->
            <div class="col-lg-6 mt-5 mt-lg-0 text-center" data-aos="fade-left">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Mockup" class="img-fluid" style="max-height: 500px;">
            </div>
        </div>
    </div>
</header>

 <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Fitur Utama BEM FIKES</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card bg-white rounded-lg shadow-md p-6 transition duration-300">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-landmark text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Profil Organisasi</h3>
                    <p class="text-gray-600">Temukan informasi lengkap tentang BEM FIKES, termasuk visi misi, sejarah, dan tujuan organisasi kami.</p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card bg-white rounded-lg shadow-md p-6 transition duration-300">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-sitemap text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Struktur Organisasi</h3>
                    <p class="text-gray-600">Kenali para pengurus BEM FIKES beserta jabatan, foto, dan angkatan mereka.</p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card bg-white rounded-lg shadow-md p-6 transition duration-300">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-tasks text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Divisi & Program Kerja</h3>
                    <p class="text-gray-600">Lihat daftar divisi dan program kerja yang sedang dan akan dilaksanakan oleh BEM FIKES.</p>
                </div>

                <!-- Feature 4 -->
                <div class="feature-card bg-white rounded-lg shadow-md p-6 transition duration-300">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-newspaper text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Berita & Agenda</h3>
                    <p class="text-gray-600">Dapatkan informasi terbaru seputar kegiatan, pengumuman, dan agenda BEM FIKES.</p>
                </div>

                <!-- Feature 5 -->
                <div class="feature-card bg-white rounded-lg shadow-md p-6 transition duration-300">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-images text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Galeri Foto/Video</h3>
                    <p class="text-gray-600">Nikmati dokumentasi kegiatan BEM FIKES dalam bentuk foto dan video.</p>
                </div>

                <!-- Feature 6 -->
                <div class="feature-card bg-white rounded-lg shadow-md p-6 transition duration-300">
                    <div class="text-blue-600 mb-4">
                        <i class="fas fa-comment-dots text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Form Aspirasi</h3>
                    <p class="text-gray-600">Sampaikan saran, kritik, atau aspirasi Anda untuk kemajuan BEM FIKES dan Fakultas Ilmu Kesehatan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About-->
  <section class="about-section text-center" id="about" data-aos="fade-up">
    <div class="container px-4 px-lg-5" data-aos="fade-up" data-aos-delay="100">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8">

                {{-- Logo --}}
                <div class="mb-4" data-aos="zoom-in" data-aos-delay="500">
                    <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid mx-auto d-block logo-nawadikti" alt="Logo">
                </div>

                @foreach ($profile as $p)
                    <h2 class="text-white mb-4" data-aos="fade-up" data-aos-delay="300">
                        {{ $p->name_profiles }}
                    </h2>

                    {{-- Deskripsi --}}
                    <div class="description-content" data-aos="fade-up" data-aos-delay="400">
                        {!! $p->description_profiles !!}
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

<section id="struktur" class="py-5 bg-light"class="py-16 bg-white">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Struktur Organisasi</h2>
            <p class="text-muted">Susunan Pengurus BEM FIKES</p>
        </div>

        <div class="row justify-content-center">
    @foreach ($jabatanSo as $item)
        <div class="col-md-4 col-lg-3 mb-4" data-aos="fade-up">
            <div class="card border-0 shadow text-center h-100">
                {{-- Cek apakah ada foto di database --}}
                @if ($item->photo)
                    <img src="{{ asset('storage/' . $item->photo) }}"
                         class="card-img-top"
                         style="height: 200px; object-fit: cover;" alt="Foto">
                @else
                    <img src="{{ asset('assets/img/default.jpg') }}"
                         class="card-img-top"
                         style="height: 200px; object-fit: cover;" alt="Foto Default">
                @endif

                <div class="card-body">
                    <h5 class="card-title text-primary">{{ $item->jabatanSo->name_jabatan ?? '-' }}</h5>
                    <p class="card-text fw-semibold">{{ $item->name_value_so }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

    </div>
</section>


<section class="projects-section bg-light" id="program" data-aos="fade-up">
    <div class="container px-4 px-lg-5">
        <div class="text-center mb-5">
            <h2 class="text-dark fw-bold">Program Kerja</h2>
            <p class="text-muted">Daftar program kerja dari masing-masing divisi organisasi kami.</p>
        </div>

        <div class="row g-4">
            @foreach ($prokers as $proker)
                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="card shadow-sm border-0 h-100">
                        <!-- Header dengan warna biru -->
                        <div class="card-header text-white fw-bold" style="background-color: #2563eb;">
                            <h5>Divisi {{ $proker->nama_divisi }}</h5>
                        </div>

                        <div class="card-body">
                            <!-- Deskripsi divisi (bisa ganti dengan field deskripsi jika ada) -->
                            <p class="mb-3 text-muted">
                                Divisi yang bertugas membangun dan menjaga hubungan baik dengan berbagai pihak internal dan eksternal.
                            </p>

                            <!-- Judul daftar program kerja -->
                            <h6 class="fw-bold">Program Kerja:</h6>

                            @php
                                // Pisahkan setiap baris program kerja berdasarkan newline
                                $programList = explode("\n", $proker->proker);
                            @endphp

                            <ul class="list-unstyled">
                                @foreach ($programList as $program)
                                    @if (trim($program) != '')
                                        <li class="mb-1">
                                            <i class="fas fa-check text-primary me-2"></i>
                                            {{ trim($program) }}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
<section class="hima">
<div class="hima-section">
     <div class="mb-4" data-aos="zoom-in" data-aos-delay="500">
        <div class="card-center">
      <center><img src="{{ asset('assets/img/logo.png') }}" class="img-fluid mx-auto" alt="Logo" width="200">
                    <img src="{{ asset('assets/img/ormawa.png') }}" class="img-fluid mx-auto " alt="Logo" width="200">
                    <img src="{{ asset('assets/img/dp.png') }}" class="img-fluid mx-auto" alt="Logo" width="300">
               </center></div> </div>
  <h2 class="hima-title"> ORMAWA FIKES</h2>
  <div class="hima-grid">

    <div class="hima-card">
      <img src="{{ asset('assets/img/kep.png') }}" alt="HIMA S1 Keperawatan" class="hima-logo">
      <h3 class="hima-name">HIMA S1 Keperawatan</h3>
      <p class="hima-desc">Wadah pengembangan potensi mahasiswa S1 Keperawatan dalam bidang akademik dan non-akademik.</p>
    </div>

    <div class="hima-card">
      <img src="{{ asset('assets/img/s1keb.png') }}" alt="HIMA S1 Kebidanan" class="hima-logo">
      <h3 class="hima-name">HIMA S1 Kebidanan</h3>
      <p class="hima-desc">Wadah pengembangan potensi mahasiswa S1 Kebidanan dalam bidang akademik dan non-akademik.</p>
    </div>

    <div class="hima-card">
      <img src="{{ asset('assets/img/d3kep.png') }}" alt="HIMA D3 Keperawatan" class="hima-logo">
      <h3 class="hima-name">HIMA D3 Keperawatan</h3>
      <p class="hima-desc">Wadah pengembangan potensi mahasiswa D3 Keperawatan dalam bidang akademik dan non-akademik.</p>
    </div>

    <div class="hima-card">
      <img src="{{ asset('assets/img/d3keb.png') }}" alt="HIMA D3 Kebidanan" class="hima-logo">
      <h3 class="hima-name">HIMA D3 Kebidanan</h3>
      <p class="hima-desc">Wadah pengembangan potensi mahasiswa D3 Kebidanan dalam bidang akademik dan non-akademik.</p>
    </div>
    <!-- Tambahkan card lainnya -->

  </div>
</div>
</section>
    <!-- Projects-->


    <section class="projects-section bg-light" id="article">
    <div class="container px-4 px-lg-5">
        <div class="text-center mb-5">
            <h2 class="text-dark fw-bold">Berita</h2>
            <p class="text-muted">Daftar Berita terbaru dari BEM FIKES.</p>
        </div>
        <div class="row justify-content-center">
            @foreach ($article as $art)
                <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                    <div class="card shadow-sm border-0 w-100 h-100">
                        <img src="{{ asset('storage/' . $art->image_path_article) }}"
                             class="card-img-top rounded-top"
                             alt="{{ $art->title }}"
                             style="object-fit: cover; height: 200px;">

                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title text-dark" style="min-height: 60px;">
                                {{ $art->title }}
                            </h5>
                             <p class="text-muted small mb-2">
                                {{ Str::limit(strip_tags($art->Descriptions), 100) }}
                            </p>
                                <a href="#" class="btn btn-primary mt-3"
                                data-bs-toggle="modal"
                                data-bs-target="#articleModal"
                                onclick="showFullDescription(
                                    '{{ $art->title }}',
                                    '{{ asset('storage/' . $art->image_path_article) }}',
                                    '{{ $art->Descriptions }}',
                                    `{!! nl2br(e($art->content)) !!}`
                                )">
                                Baca Artikel
                                </a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Modal Artikel -->

    <div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="articleModalLabel">Judul Artikel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <img id="modalImage" src="" class="img-fluid mb-3" alt="..." />
        <p id="modalContent" class="text-dark"></p>
      </div>
    </div>
  </div>
</div>

</section>

  <section class="projects-section bg-light" id="galeri">
    <div class="container px-4 px-lg-5">
        <div class="text-center mb-5">
            <h2 class="text-dark fw-bold">Galeri Kegiatan</h2>
            <p class="text-muted">Dokumentasi kegiatan dan momen penting organisasi kami.</p>
        </div>

        <div class="row g-4">
            @foreach ($galeries as $key => $galery)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $key * 100 }}">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative overflow-hidden rounded-3">
                            <img src="{{ asset('storage/' . $galery->image_path_galeries) }}"
                                 class="card-img-top img-fluid"
                                 alt="{{ $galery->title }}"
                                 style="object-fit: cover; height: 250px; width: 100%; cursor: pointer;"
                                 data-bs-toggle="modal"
                                 data-bs-target="#galeriModal"
                                 onclick="showGaleriPopup(
                                     '{{ asset('storage/' . $galery->image_path_galeries) }}',
                                     '{{ $galery->title }}',
                                     '{{ $galery->categoryGalery->name_category_galerie }}'
                                 )">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary mb-1">{{ $galery->title }}</h5>
                            <p class="text-muted small mb-0">{{ $galery->categoryGalery->name_category_galerie }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Modal Galeri -->
<div class="modal fade" id="galeriModal" tabindex="-1" aria-labelledby="galeriModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-white">
      <div class="modal-header">
        <h5 class="modal-title" id="galeriModalLabel">Judul Gambar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body text-center">
        <img id="galeriImage" src="" class="img-fluid rounded mb-3" alt="Preview Gambar">
        <p id="galeriKeterangan" class="text-muted mb-0"></p>
      </div>
    </div>
  </div>
</div>


  <section class="projects-section bg-light py-5" id="aspiration">
    <div class="container px-4 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-md-8" data-aos="fade-up">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

               <div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark fs-3">Salurkan Aspirasi Anda</h2>
        <div class="mx-auto bg-primary" style="width: 80px; height: 4px; border-radius: 10px;"></div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="row shadow rounded overflow-hidden">

                <!-- Kiri: Informasi -->
                <div class="col-md-5 bg-primary text-white p-4 d-flex flex-column justify-content-center">
                    <h3 class="fw-bold mb-3">Suara Anda Penting!</h3>
                    <p class="mb-2 small">Kami selalu terbuka untuk mendengar aspirasi, kritik, dan saran dari seluruh mahasiswa untuk kemajuan kampus kita bersama.</p>
                    <ul class="list-unstyled small ps-1">
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i>Setiap aspirasi akan kami proses dengan serius</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i>Respon cepat dalam 3-5 hari kerja</li>
                        <li><i class="fas fa-check-circle me-2"></i>Privasi Anda kami jaga</li>
                    </ul>
                </div>

                <!-- Kanan: Form Aspirasi -->
                <div class="col-md-7 bg-white p-4">
                    <div class="text-center mb-3">
                        <h4 class="fw-semibold mb-0">Kirim Aspirasi Kamu</h4>
                        <p class="text-muted small mb-1">
                            Punya aspirasi atau keluhan? Kirim secara anonim lewat form ini!
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-primary fw-semibold ms-1">
                                <i class="fas fa-question-circle"></i> Info
                            </a>
                        </p>
                    </div>

                    <form action="{{ url('/Aspiration') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="category" class="form-label">Kategori Aspirasi</label>
                            <select class="form-select" id="category" name="category_aspirations_id" required>
                                @if ($categories->isEmpty())
                                    <option value="" disabled>Tidak ada kategori tersedia</option>
                                @else
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name_category_aspirations }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Aspirasi</label>
                            <input type="text" class="form-control" id="title" name="tittle_aspirations"
                                   placeholder="Contoh: Fasilitas Rusak" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Aspirasi</label>
                            <textarea class="form-control" id="description" name="description_aspirations"
                                      rows="4" placeholder="Contoh: Kamar mandi di lantai 2 rusak..." required></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Kirim Aspirasi
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
</section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Isi dari modal -->
                    <h3 class="slogan text-center"><strong>INFO FORM ASPIRASI</strong></h3>
                    <p>Form ini bersifat anonymous, jadi tidak ada data yang kelihatan.</p>
                    <p>Aspirasi adalah harapan, cita-cita, atau keinginan yang kuat untuk mencapai sesuatu yang
                        diinginkan, baik itu untuk diri sendiri maupun untuk orang lain.</p>
                    <p>Tata Cara Pengisian Form Aspirasi:</p>
                    <ul>
                        <li>Isi Kategory Aspirasi yang tersedia</li>
                        <li>Isi Judul terlebih dahulu</li>
                        <li>isi deskripsi keluhan</li>
                        <li>lakukan Submit</li>
                        <li>Tunggu Jawaban ketika ada perubahan apa yang kalian keluhkan </li>
                    </ul>
                    <p>Dengan menggunakan formulir ini, Anda memiliki kesempatan untuk menyuarakan ide-ide dan perasaan
                        Anda tanpa harus memberikan identitas Anda.</p>
                    <p>Jangan ragu untuk berbagi aspirasi Anda dengan kami! Isilah formulir di atas dan berikan suara
                        Anda untuk perubahan yang Anda inginkan.</p>
                    <h3 class="slogan text-center"><strong>Aspirasi bawahan, Hiburan Para Petinggi!</strong></h3>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="contact-section bg-black">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    {{-- profiles address_profiles --}}
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-navy mb-2" style="color: #002752;"></i>
                        <h4 class="text-uppercase m-0">Address</h4>
                        <hr class="my-4 mx-auto" />
                        @foreach ($profile as $p)
                            <div class="small text-black-50">{{ $p->address_profiles }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    {{-- profiles email_profiles --}}
                    <div class="card-body text-center">
                        <i class="fas fa-envelope mb-2" style="color: #002752;"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4 mx-auto" />
                        @foreach ($profile as $p)
                            <div class="small text-black-50"><a href="#!">{{ $p->email_profiles }}</a></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    {{-- profiles phone_profiles --}}
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt mb-2" style="color: #002752;"></i>
                        <h4 class="text-uppercase m-0">Phone</h4>
                        <hr class="my-4 mx-auto" />
                        @foreach ($profile as $p)
                            <div class="small text-black-50">{{ $p->phone_profiles }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="social d-flex justify-content-center">
            @foreach ($profile as $p)
                <a class="mx-2" href="{{ $p->twitter_url }}"><i class="fab fa-twitter"></i></a>
            @endforeach
            @foreach ($profile as $p)
                <a class="mx-2" href="{{ $p->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
            @endforeach
            @foreach ($profile as $p)
                <a class="mx-2" href="{{ $p->instagram_url }}"><i class="fab fa-instagram"></i></a>
            @endforeach
            @foreach ($profile as $p)
                <a class="mx-2" href="{{ $p->linkedin_url }}"><i class="fab fa-linkedin"></i></a>
            @endforeach
            @foreach ($profile as $p)
                <a class="mx-2" href="{{ $p->line_url }}"><i class="fab fa-line"></i></a>
            @endforeach
            @foreach ($profile as $p)
                <a class="mx-2" href="{{ $p->tiktok_url }}"><i class="fab fa-tiktok"></i></a>
            @endforeach
            @foreach ($profile as $p)
                <a class="mx-2" href="{{ $p->youtube_url }}"><i class="fab fa-youtube"></i></a>
            @endforeach
        </div>
    </div>
</section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; BGS  2025</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('landingpage/js/scripts.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    {{-- <script src="js/scripts.js"></script> --}}
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script>
    function showFullDescription(title, image, content) {
        document.getElementById('articleModalLabel').textContent = title;
        document.getElementById('modalImage').src = image;
        document.getElementById('modalContent').innerHTML = content;
    }
</script>
<script>
  function showGaleriPopup(imageUrl, title, category) {
    document.getElementById('galeriImage').src = imageUrl;
    document.getElementById('galeriModalLabel').textContent = title;
    document.getElementById('galeriKeterangan').textContent = 'Kategori: ' + category;
  }
</script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Mencegah formulir dari pengiriman default

                // Mengirim data formulir menggunakan fetch API
                fetch('{{ url('/Aspiration') }}', {
                        method: 'POST',
                        body: new FormData(form)
                    })
                    .then(response => response.json()) // Mengubah respon menjadi objek JSON
                    .then(data => {
                        if (data.success) {
                            // Menampilkan SweetAlert jika aspirasi berhasil dibuat
                            showSweetAlert('Success', data.success, 'success');
                            setTimeout(() => {
                                window.location.href = '{{ url('/') }}';
                            }, 2000);
                        } else if (data.error) {
                            // Menampilkan SweetAlert jika terjadi kesalahan saat membuat aspirasi
                            showSweetAlert('Error', data.error, 'error');
                        } else {
                            // Menampilkan SweetAlert jika terjadi kesalahan yang tidak diketahui
                            showSweetAlert('Error', 'Failed to create aspiration. Please try again.',
                                'error');
                        }
                    })
                    .catch(error => {
                        // Menampilkan SweetAlert jika terjadi kesalahan pada saat mengirim permintaan
                        showSweetAlert('Error', 'An error occurred. Please try again later.', 'error');
                    });
            });

            function showSweetAlert(title, text, icon) {
                Swal.fire({
                    title: title,
                    text: text,
                    icon: icon,
                });
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const categorySelect = document.getElementById('category');
            const submitButton = document.querySelector('button[type="submit"]');

            // Mengatur status awal tombol submit
            submitButton.disabled = categorySelect.value === '';

            // Memantau perubahan pada pilihan kategori
            categorySelect.addEventListener('change', function() {
                submitButton.disabled = categorySelect.value === '';
            });

            // Menangani submit form
            form.addEventListener('submit', function(event) {
                if (submitButton.disabled) {
                    event.preventDefault(); // Mencegah pengiriman formulir jika tombol submit dinonaktifkan
                    // Tambahkan pesan atau tindakan lain di sini jika diperlukan
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false
                    }
                }
            });
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <!-- Lightbox2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });
</script>

</body>

</html>
