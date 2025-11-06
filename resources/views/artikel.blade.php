<style>
    .hero-section {
        position: relative;
        width: 100%;
        height: 300px;
        z-index: 1;
        background-image: 
            linear-gradient(to right, rgba(75, 0, 110, 0.8), rgba(75, 0, 110, 0.2)),
            url('{{ asset('gambar/pexels-photo-3184296.jpeg') }}');
        background-size: 100%; 
        background-position: center 55%;
        background-repeat: no-repeat;
        display: flex;
        margin-top: 0px;
        padding-left: 260px;
        align-items: center;
        justify-content: center;
    }
    .hero-section h1 {
        color: white;
        font-weight: 560;
        font-size: 26px;
    }
    .hero-section h2 {
        color: white;
        font-weight: 360;
        font-size: 26px;
    }
    .hsh {
        margin-top: 360px;
    }
    
    .services-section {
        background-color: #f8f9fa; /* Contoh warna latar belakang */
    }

    .service-card {
        position: relative;
        overflow: hidden;
        border-radius: 8px; /* Sudut membulat */
        cursor: pointer;
    }

    .service-card img {
        width: 100%;
        height: 200px; /* Atur tinggi yang sesuai */
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease-in-out;
    }

    .card-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px 15px 10px;
        color: white;
        z-index: 3;
    }

    .card-title {
        margin-top: 15px;
        font-size: 13px;
        font-weight: 300;
        z-index: 4;
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 30%; /* Lebar gradien di sisi kiri */
        height: 100%;
        z-index: 1; /* Di antara gambar dan teks overlay bawah */
        border-top-left-radius: 8px; /* Menyesuaikan sudut kartu */
        border-bottom-left-radius: 8px;
    }

    .service-cards-row {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    /* Jika Anda ingin membatasi lebar row-nya */
    .service-cards-row {
        max-width: 850px;
        margin-left: auto;
        margin-right: auto;
    }

    /* Styling untuk judul section (Opsional) */
    .section-title {
        font-weight: 500;
        color: #333;
        margin-bottom: 1.5rem; /* Beri jarak ke list di bawahnya */
    }

    /* Styling untuk gambar */
    .mitra-img {
        width: 200px;       /* Atur lebar gambar */
        height: 120px;      /* Atur tinggi gambar */
        object-fit: cover;  /* Memastikan gambar terisi penuh tanpa distorsi */
        border-radius: 8px; /* Membuat sudut melengkung */
        
        /* (Opsional) Beri sedikit bayangan */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    }

    /* Styling untuk judul artikel/mitra */
    .mitra-title {
        font-size: 1rem;
        font-weight: 600;
        color: #222;
        margin-bottom: 0.25rem;
        
        /* (Opsional) Efek hover */
        transition: color 0.3s ease;
    }

    .mitra-item:hover .mitra-title {
        color: #5a0099; /* Ganti dengan warna ungu brand Anda */
    }

    /* Styling untuk tanggal */
    .mitra-date {
        font-size: 0.9rem;
        color: #777;      /* Warna abu-abu */
        margin-bottom: 0;
    }

    .mitra-list {
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    /* --- Custom Pagination Styling --- */

    /* Menghilangkan border default dan bayangan aneh saat di-fokus */
    .custom-pagination .page-link {
        border: none;
        box-shadow: none; 
    }

    /* Styling untuk tombol angka non-aktif (2, 3, 4, 5) */
    .custom-pagination .page-item:not(.active) .page-link {
        background-color: #f0f2f5; /* Warna abu-abu muda (sesuaikan) */
        color: #6c757d;           /* Warna teks abu-abu */
        border-radius: 50%;       /* KUNCI: Membuatnya jadi lingkaran */
        
        /* Memberi ukuran yang konsisten */
        width: 40px;
        height: 40px;
        
        /* Menengahkan angka di dalam lingkaran */
        display: flex;
        justify-content: center;
        align-items: center;
        
        /* Jarak antar tombol */
        margin: 0 5px;
    }

    /* Styling untuk tombol panah (kiri & kanan) */
    .custom-pagination .page-link[aria-label] {
        background-color: transparent; /* Tidak ada background */
        color: #5a0099; /* Ganti dengan warna ungu Anda */
        font-weight: bold;
        font-size: 1.2rem;
    }

    /* Styling untuk tombol yang AKTIF (halaman 1) */
    .custom-pagination .page-item.active .page-link {
        background: linear-gradient(90deg, #4b006e 0%, #5b2fa8 30%, #3b79e3 100%);
        color: #ffffff;            /* Teks putih */
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 5px;
    }

    /* (Opsional) Efek hover untuk tombol non-aktif */
    .custom-pagination .page-item:not(.active) .page-link:hover {
        background-color: #e2e6ea;
    }
    
    .sc-line {
        width: 100%; /* Ketebalan garis */
        height: 2px; /* Tinggi garis */
        background-color: hsla(295, 100%, 88%, 0.70); /* Warna putih transparan */
        z-index: 2; /* Pastikan di atas gradien kiri */
        display: block;
    }
</style>
<div class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 hsh">
                    <h2>TIPS</h2>
                    <h1>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="services-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Layanan Kami</h2>
            </div>
        </div>

        <div class="row service-cards-row justify-content-center">
            <div class="col-lg-5 col-md-3 mb-5">
                <div class="service-card">
                    <img src="{{ asset('gambar/korona.png') }}" class="card-img-top">
                    <div class="card-overlay">
                    </div>
                </div>
                <h4 class="card-title text-center">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
            </div>
            
            <div class="col-lg-5 col-md-3 mb-5">
                <div class="service-card">
                    <img src="{{ asset('gambar/htw.png') }}" class="card-img-top">
                    <div class="card-overlay">
                    </div>
                </div>
                <h4 class="card-title text-center">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
            </div>
        </div>
    </div>
</section>

<section class="mitra-section py-5">
    <div class="container">
        <div class="mitra-list">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">Mitra Kami</h2>
                </div>
            </div>            
            <div class="d-flex align-items-start mb-4 mitra-item">
                
                <div class="flex-shrink-0">
                    <img src="{{ asset('gambar/artikel1.jpg') }}" alt="Mitra 1" class="mitra-img">
                </div>
                
                <div class="flex-grow-1 ms-3">
                    <h5 class="mitra-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h5>
                    <p class="mitra-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4 mitra-item">
                <div class="flex-shrink-0">
                    <img src="{{ asset('gambar/artikel2.jpg') }}" alt="Mitra 2" class="mitra-img">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="mitra-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h5>
                    <p class="mitra-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4 mitra-item">
                <div class="flex-shrink-0">
                    <img src="{{ asset('gambar/artikel3.jpg') }}" alt="Mitra 3" class="mitra-img">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="mitra-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h5>
                    <p class="mitra-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>
            
            <div class="d-flex align-items-start mb-4 mitra-item">
                <div class="flex-shrink-0">
                    <img src="{{ asset('gambar/artikel4.jpg') }}" alt="Mitra 4" class="mitra-img">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="mitra-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h5>
                    <p class="mitra-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>
            
            <div class="d-flex align-items-start mb-4 mitra-item">
                <div class="flex-shrink-0">
                    <img src="{{ asset('gambar/nurse2.jpg') }}" alt="Mitra 4" class="mitra-img">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="mitra-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h5>
                    <p class="mitra-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <nav aria-label="Page navigation">
                    <ul class="pagination custom-pagination">
                        
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&larr;</span>
                            </a>
                        </li>
                        
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1</a>
                        </li>
                        
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </div> 
    </div> 
</section>
<div class="sc-line">
</div>

@include('hubungi')