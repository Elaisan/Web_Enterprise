<style>
    .contact-section {
        background-color: #ffffff; /* Latar belakang putih */
        padding-bottom: 80px;
    }

    .office-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 5px;
        color: #333;
    }

    .address-text,
    .phone-text {
        font-size: 1rem;
        color: #6c757d;
        margin-bottom: 5px;
    }

    /* Base style untuk kedua tombol */
    .btn-contact-action {
        /* Padding dipertahankan 0px sesuai permintaan */
        padding: 0px 0px; 
        
        border-radius: 25px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        
        /* 1. MENGHAPUS lebar 100% agar tombol tidak memanjang penuh kolom */
        /* Hapus width: 100%; jika ada. */
        
        /* 2. MEMUSATKAN TOMBOL DI DALAM KOLOM INDUK (PENTING) */
        /* Margin kiri dan kanan auto akan memusatkan tombol jika lebar tombol lebih kecil dari kolom */
        margin-left: auto;
        margin-right: auto;
        
        /* Flexbox untuk pemusatan teks (konten) yang sempurna di dalam tombol */
        display: flex; 
        align-items: center;    /* Memposisikan konten di tengah secara vertikal (Fix) */
        justify-content: center; /* Memposisikan konten di tengah secara horizontal */
        
        /* MENGATUR TINGGI DAN LEBAR SESUAI PERMINTAAN */
        min-height: 50px; 
        max-width: 225px; /* Tetap menggunakan max-width untuk membatasi lebar horizontal */
    }
    
    
    .btn-section,
    .btn-section5-2 {
        text-decoration: none;
        white-space: nowrap;
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

    @media (max-width: 576px) { 
        .contact-section .row {
            /* Hapus margin horizontal bawaan row (Gutter luar) */
            margin-left: -5px !important; 
            margin-right: -5px !important;
            /* Pastikan row dipusatkan di layar */
            justify-content: center !important; 
        }

        .contact-section .row > .col-sm-6 {
            flex-basis: 50% !important;
            flex-grow: 0 !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
            margin-bottom: 1rem !important; 
            margin-left: auto !important; 
            margin-right: auto !important; 
        }

        .btn-contact-action {
            width: 100% !important; 
            max-width: none !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
            padding: 0.6rem 1.2rem !important; 
        }

        .contact-section .row > .col-sm-6:nth-child(2n) {
            margin-bottom: 0 !important;
        }
    }
</style>
<section class="contact-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="section-title">Hubungi Kami</h2>
                    
                    <div class="contact-details mt-4">
                        <h4 class="office-title">Kantor Pusat</h4>
                        <p class="address-text">Gedung Ir. H. M. Suseno - Jl. R. P Soeroso No.6, Menteng, Jakarta Pusat</p>
                        <p class="phone-text">Phone: 085286754052</p>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center mt-4">
                <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                    <a href="#" class="btn-section5-2">
                        LOKASI KAMI
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                    <a href="#" class="btn-section">
                        KIRIM PESAN
                    </a>
                </div>
            </div>
        </div>
    </section>