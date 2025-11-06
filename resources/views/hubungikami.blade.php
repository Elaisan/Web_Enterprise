<style>
    .hero-section {
        position: relative;
        width: 100%;
        height: 300px;
        background-image: 
            linear-gradient(to right, rgba(75, 0, 110, 0.8), rgba(75, 0, 110, 0.2)),
            url('{{ asset('gambar/becak.png') }}');
        background-size: 125%; 
        background-position: center 59%;
        background-repeat: no-repeat;
        display: flex;
        padding-top: 12rem;
        padding-left: 2.7rem;
        align-items: center;
        justify-content: center;
    }
    .hero-section h1 {
        color: white;
        font-weight: 560;
        font-size: 26px;
    }

    .hsh {
        margin-top: 300px;
    }

    /* Styling untuk form input agar terlihat bersih */
    .contact-form-section .form-control {
        border: 1px solid #ced4da;
        border-radius: 8px;
        padding: 12px 15px;
    }

    .contact-form-section .form-control:focus {
        border-color: #5a0099; /* Ganti dengan warna ungu brand Anda */
        box-shadow: 0 0 0 0.2rem rgba(90, 0, 153, 0.25);
    }

    /* * Styling Kustom untuk Tombol 'KIRIM PESAN'
    * (Dengan border gradien)
    */
    .btn-kirim-pesan {
        font-weight: 700;
        padding: 12px 35px;
        border-radius: 50px; /* Membuat bentuk pill */
        
        /* Trik Border Gradien */
        border: 2px solid transparent;
        background: linear-gradient(#ffffff, #ffffff) padding-box, /* Background putih */
                    linear-gradient(to right, #6a00c9, #007bff) border-box; /* Border gradien (ungu ke biru) */
        
        color: #6a00c9; /* Warna teks (sesuai gradien) */
        transition: all 0.3s ease;
    }

    /* Efek Hover untuk Tombol */
    .btn-kirim-pesan:hover {
        background: linear-gradient(to right, #6a00c9, #007bff); /* Background jadi gradien */
        color: #ffffff; /* Teks jadi putih */
        background-clip: padding-box; /* Reset background-clip */
    }

    .sc-line {
        width: 100%; /* Ketebalan garis */
        height: 2px; /* Tinggi garis */
        background-color: hsla(295, 100%, 88%, 0.70); /* Warna putih transparan */
        z-index: 2; /* Pastikan di atas gradien kiri */
        display: block;
    }

    /* Styling untuk judul utama "LOKASI KAMI" */
    .lokasi-kami-section .section-title {
        font-size: 1.5rem; /* 24px */
        font-weight: 600;
        color: #555;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 1rem; /* Jarak ke sub-judul */
    }

    /* Styling untuk sub-judul "Kantor Pusat" & "Kantor Cabang" */
    .lokasi-item .lokasi-title {
        font-size: 1.25rem; /* 20px */
        font-weight: 600;
        color: #555;
        margin-bottom: 0.75rem;
    }

    /* Styling untuk teks alamat dan kontak */
    .lokasi-item .lokasi-detail {
        font-size: 1rem; /* 16px */
        color: #555;
        line-height: 1.6;
        margin-bottom: 0; /* Hapus margin bawah paragraf */
    }

    /* (Opsional) Memberi jarak jika layoutnya bertumpuk di mobile */
    @media (max-width: 767px) {
        .lokasi-item {
            margin-bottom: 2rem; /* Tambah jarak bawah untuk setiap item di mobile */
        }
    }
</style>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-9 hsh">
                    <h1>HUBUNGI KAMI</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact-form-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10"> <h2 class="text-center mb-4">KIRIM PESAN</h2>
                
                <form action="/kirim-pesan" method="POST">
                    @csrf <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="nama" placeholder="Nama*" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="perusahaan" placeholder="Perusahaan/Organisasi">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email*" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" name="telepon" placeholder="Telepon">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <textarea class="form-control" name="isi_pesan" rows="5" placeholder="Isi Pesan*" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center mt-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="g-recaptcha" data-sitekey="6Le6KgMsAAAAACqJrCyxkjBty9i34PRBDq-LXeJ_"></div>
                        </div>
                        
                        <div class="col-md-6 text-md-end">
                            <button type="submit" class="btn btn-kirim-pesan">KIRIM PESAN</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>
<div class="sc-line"></div>
<section class="lokasi-kami-section py-5">
    <div class="container">
        
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">LOKASI KAMI</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="lokasi-item">
                <h3 class="lokasi-title">Kantor Pusat</h3>
                <p class="lokasi-detail">
                    Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br>
                    Phone: (6285) 286754052 - Fax : (6285) 286754052<br>
                    Hotline: +6285286754052 / +6285286754052
                </p>
            </div>
        </div>
        <br>
        <div class="col-md-6">
            <div class="lokasi-item">
                <h3 class="lokasi-title">Kantor Cabang</h3>
                <p class="lokasi-detail">
                    Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br>
                    Phone: (6285) 286754052 - Fax : (6285) 286754052<br>
                    Hotline: +6285286754052 / +6285286754052
                </p>
            </div>
        </div>
    </div>
</section>