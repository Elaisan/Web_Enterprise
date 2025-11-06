<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.5">
    <title>
        @if (request()->is('home') || request()->is('/'))
            @yield('title', 'Inaklug - Home')
        @elseif (request()->is('tentangkami'))
            @yield('title', 'Inaklug - Tentang Kami')
        @elseif (request()->is('layanankami'))
           @yield('title', 'Inaklug - Layanan Kami')
        @elseif (request()->is('artikel'))
            @yield('title', 'Inaklug - Artikel')
        @elseif (request()->is('hubungikami'))
            @yield('title', 'Inaklug - Hubungi Kami')
        @endif
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* CSS Kustom (Semi Bootstrap) */
        
        body {
            font-family: 'Poppins', sans-serif;
        }

        .hero-section {
            height: 100vh; /* Mengisi seluruh tinggi layar */
            
            /* Ganti URL ini dengan path gambar gedung Anda */
            background: url('{{ asset('gambar/picgedung.png') }}') no-repeat center center;
            
            background-size: cover;
            
            /* Menggunakan d-flex untuk menempatkan konten di bawah */
            display: flex;
            align-items: flex-end; /* Konten menempel di bawah */
            padding-right: 4.6rem;
            padding-bottom: 12rem; /* Jarak dari bawah layar */
        }

        .hero-content-box {
            background: linear-gradient(
                90deg, 
                rgba(75, 0, 110, 0.9) 0%, 
                rgba(91, 47, 168, 0.85) 30%, 
                rgba(59, 121, 227, 0.8) 100%
            );
            
            display: flex;
            /* align-items: center; memastikan semua item (garis, teks, tombol) berada di tengah vertikal. */
            align-items: center; 
            
            /* Hapus justify-content: center; agar konten berada di kiri */
            
            padding: 1rem; 
            padding-left: 1.5rem; /* Padding kiri untuk jarak dari tepi container */

            flex-wrap: nowrap;
            color: white;
            /* Pastikan container ini memiliki lebar yang cukup atau lebar penuh */
            width: 100%; /* Tambahkan jika belum ada */
        }

        /* Garis Lurus */
        .hero-span-box {
            width: 2px;
            height: 60px;
            margin-top: -20px;
            margin-right:20px;
            background-color: rgba(255, 167, 249, 0.69);
        }

        /* Teks Judul */
        .hero-content-box h1 {
            font-size: 1.25rem; 
            font-weight: 200;
            margin: 0; 
            /* Hapus flex-grow: 1; jika teks tidak boleh mengambil ruang ekstra */
        }

        /* ⭐ SOLUSI UTAMA (Tombol di Kanan) ⭐ */
        .btn-selengkapnya {
            /* Properti tampilan tombol lainnya */
            text-decoration: none;
            background: transparent;
            border-radius: 50px;
            border: 2px solid white;
            white-space: nowrap;
            color: white;
            font-weight: 600;
            padding: 0.75rem 2rem;
            
            /* Ini yang membuat tombol terdorong ke kanan penuh */
            margin-left: auto; 
            margin-right: 2.5rem; /* Memberi jarak dari tepi kanan (sesuai padding kiri) */
        }

        .btn-selengkapnya.section4 {
            border-radius: 12px;
        }

        .gridder {
            display: flex;
            flex-wrap: wrap;
            justify-self: center;

        }

        /* CSS untuk Banner Konsultasi Gratis */

        .cta-section {
            padding-top: 50px; /* Tambahkan padding di atas banner */
            padding-bottom: 50px; /* Tambahkan padding di bawah banner */
        }

        .cta-banner {
            background: linear-gradient(
                90deg, 
                rgba(75, 0, 110, 0.9) 0%, 
                rgba(91, 47, 168, 0.85) 30%, 
                rgba(59, 121, 227, 0.8) 100%
            );
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            padding: 30px !important; /* Tambahkan padding internal */
            border-radius: 10px; /* Sudut membulat */
        }

        .cta-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 5px !important;
        }

        .cta-subtitle {
            font-size: 1rem;
            font-weight: 400;
            opacity: 0.8;
        }

        .cta-button {
            background-color: white;
            color: #2575fc; /* Warna teks sesuai warna biru gradien */
            border: none;
            padding: 10px 20px;
            font-weight: 600;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
            /* Lebar tombol penuh untuk tampilan kecil */
            width: 100%; 
            max-width: 200px; /* Batasi lebar pada tampilan desktop */
            display: inline-block;
        }

        .cta-button:hover {
            background-color: #f0f0f0;
            color: #1a5ac9;
        }

        .arrow-icon {
            font-weight: 800;
            margin-left: 5px;
        }

        /* Properti Base untuk Kedua Tombol (Border Gradien) */
        .btn-section,
        .btn-section5-2 {
            text-decoration: none;
            border-radius: 50px;
            padding: 12px 25px;
            
            /* Warna teks diperbaiki (warna solid dari gradien Anda) */
            color: rgba(59, 121, 227, 1); 
        }

        .btn-section {
            /* Layer 1: Putih (Padding-box), Layer 2: Gradien (Border-box) */
            background-image: 
                linear-gradient(to right, #ffffff, #ffffff),
                linear-gradient(90deg, 
                    rgba(75, 0, 110, 0.9) 0%, 
                    rgba(91, 47, 168, 0.85) 30%, 
                    rgba(59, 121, 227, 0.8) 100%
                );
            border: 2px solid transparent;
            background-origin: border-box;
            background-clip: padding-box, border-box;
        }

        .btn-section5-2 {
            /* Hapus border */
            border: none; 
            
            /* Gunakan hanya satu layer background (gradien) */
            background-image: 
                linear-gradient(90deg, 
                    rgba(75, 0, 110, 0.9) 0%, 
                    rgba(91, 47, 168, 0.85) 30%, 
                    rgba(59, 121, 227, 0.8) 100%
                );
            
            /* Teks harus putih agar kontras dengan background gelap */
            color: white; 
            
            /* Atur background agar mengisi seluruh tombol */
            background-origin: padding-box;
            background-clip: padding-box;
            
            /* Opsional: Tambahkan sedikit bayangan */
            box-shadow: 0 4px 10px rgba(59, 121, 227, 0.4);
        }


        /* CSS untuk Mitra Kami */
        .partner-logo-box {
            height: 120px; /* Tinggi kotak agar terlihat seragam */
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ddd !important;
            border-radius: 8px !important;
            transition: box-shadow 0.3s;
        }

        .partner-logo-box:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .partner-logo-box img {
            max-width: 100%;
            /* max-height sudah diatur inline pada HTML */
            filter: grayscale(0%); /* Jika Anda ingin logo selalu berwarna */
        }

        .articles-section {
            background-color: #ffffff; /* Latar belakang putih */
        }

        .article-card {
            /* Menggunakan border tipis untuk tampilan elegan seperti di gambar */
            border: 1px solid #e0e0e0; 
            transition: box-shadow 0.3s;
            height: 100%; /* Memastikan semua kartu tingginya sama */
            display: flex;
            flex-direction: column;
        }

        .article-card:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .article-card a {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .article-img {
            width: 100%;
            /* Atur tinggi gambar agar seragam */
            height: 150px; 
            object-fit: cover;
        }

        .article-body {
            text-align: center;
            flex-grow: 1; /* Memastikan body mengisi sisa ruang */
            display: flex;
            align-items: center; /* Untuk memposisikan teks di tengah vertikal */
            justify-content: center;
        }

        .article-title {
            font-size: 1rem;
            line-height: 1.4;
        }

        /* Styling untuk tombol "LAINNYA" */
        .btn-lainnya {
            border-color: #ced4da; /* Warna border abu-abu */
            color: #6c757d; /* Warna teks abu-abu */
            font-weight: 500;
        }

        .btn-lainnya:hover {
            background-color: #f8f9fa;
            border-color: #adb5bd;
            color: #6c757d;
        }

        /* CSS untuk Bagian Hubungi Kami */

        /* ------------------------------------------- */
        /* Tombol 1: LOKASI KAMI (Solid Gradien) */
        /* ------------------------------------------- */
        .btn-location-primary {
            /* Gradien ungu ke biru (Seperti pada banner CTA sebelumnya) */
            background: linear-gradient(90deg, 
                                rgba(75, 0, 110, 0.9) 0%, 
                                rgba(91, 47, 168, 0.85) 30%, 
                                rgba(59, 121, 227, 0.8) 100%
                            );
            color: white;
            font-weight: 300;
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-location-primary:hover {
            filter: brightness(1.1);
            color: white;
        }

        /* ------------------------------------------- */
        /* Tombol 2: KIRIM PESAN (Outline Gradien) */
        /* ------------------------------------------- */
        .btn-message-outline {
        background: white;
        color:rgba(59, 121, 227, 0.8);
        
        /* Border kembali ke 1px seperti yang Anda minta sebelumnya */
        border: 1px solid transparent; 
        
        /* Gunakan background-clip dengan 1px (sama dengan border) untuk ketebalan outline 1px */
        background-image: linear-gradient(white, white), 
                        linear-gradient(90deg, 
                                rgba(75, 0, 110, 0.9) 0%, 
                                rgba(91, 47, 168, 0.85) 30%, 
                                rgba(59, 121, 227, 0.8) 100%
                            );
        background-origin: border-box;
        /* content-box akan menciptakan jarak 1px dari border */
        background-clip: content-box, border-box;
        }

        /* --- Responsivitas Khusus Mobile (Target: Layar di bawah 576px) --- */
        @media (max-width: 576px) { 
    
        /* 1. PERBAIKAN PADA .hero-section */
        .hero-section {
            /* Mengurangi padding yang menyebabkan konten meluber */
            padding-right: 1.5rem; 
            padding-bottom: 5rem;  
            padding-left: 1.5rem; /* Tambahkan padding kiri agar tidak menempel tepi */
            /* Hapus align-items: flex-end agar konten lebih ke tengah vertikal */
        }
        .row > .col-lg-6,
        .row > .col-md-9 {
        /* Ini adalah trik penting untuk memusatkan kolom di mobile */
        margin-left: auto !important;
        margin-right: auto !important;
        float: none; /* Pastikan tidak ada float yang mengganggu */
        }

        /* 2. PERBAIKAN PADA .hero-content-box */
        .hero-content-box {
            flex-direction: column; /* Konten Tumpuk: Garis, Judul, Tombol */
            align-items: center; /* Memastikan semua item rata kiri */
            padding-left: 0; /* Hapus padding-left lama agar ikut padding section */
        }

        /* 3. PERBAIKAN PADA .hero-span-box (Garis) */
        .hero-span-box {
            margin-top: 0; 
            margin-bottom: 1rem; /* Beri jarak ke judul */
            margin-left: 0;
            margin-right: auto; 
            height: 20px; 
        }

        /* 4. PERBAIKAN PADA .hero-content-box h1 (Judul) */
        .hero-content-box h1 {
            font-size: 1.5rem; /* Menyesuaikan ukuran teks agar muat */
            width: 100%; 
            text-align:center;
        }

        /* 5. PERBAIKAN PADA .btn-selengkapnya (Tombol Meluber) */
        .btn-selengkapnya {
            /* Hapus margin auto/tetap agar tombol tidak mendorong ke kanan */
            margin-left: 0; 
            margin-right: 0; 
            margin-top: 1.5rem; 
            white-space: nowrap;
            
            /* Memaksa tombol mengambil lebar penuh untuk tampilan mobile */
            width: 100%; 
            padding: 0.75rem 1.5rem; /* Kurangi padding horizontal */
            text-align: center;
        }
      }
    </style>
</head>
<body>
    @include('partials.navbar')
    @if (request()->is('home') || request()->is('/'))
      @include('homes')
    @elseif (request()->is('tentangkami'))
      @include('tentangkami')
    @elseif (request()->is('layanankami'))
      @include('layanankami')
    @elseif (request()->is('artikel'))
      @include('artikel')
    @elseif (request()->is('hubungikami'))
      @include('hubungikami')
    @endif
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>