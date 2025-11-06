<style>
    .hero-section {
        position: relative;
        width: 100%;
        height: 300px;
        background-image: 
            linear-gradient(to right, rgba(75, 0, 110, 0.8), rgba(75, 0, 110, 0.2)),
            url('{{ asset('gambar/studytour.png') }}');
        background-size: 150%; 
        background-position: center 55%;
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

    .profile-section {
        background-color: #fff; /* Latar belakang abu-abu muda opsional */
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .section-title-left {
        font-size: 2rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 1rem;
        /* Tambahkan garis bawah sederhana jika diinginkan */
        /* border-bottom: 2px solid #ddd; */
        /* padding-bottom: 5px; */
    }

    .profile-text {
        font-size: 1rem;
        line-height: 1.6;
        color: #555;
        margin-bottom: 2rem;
    }

    .images-row img {
        width: 100%;
        height: auto;
        border-radius: 8px; /* Sudut membulat */
    }

    .visi-misi-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: black; /* Menggunakan warna ungu dari tema Anda */
        margin-top: 1rem;
        margin-bottom: 0.75rem;
    }

    .visi-misi-text {
        font-size: 0.95rem;
        line-height: 1.6;
        color: #6c757d;
    }

    .btn-section {
        text-decoration: none;
        border-radius: 50px;
        padding: 12px 25px;
        white-space: nowrap;
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
    
    .hsh {
        margin-top: 300px;
    }
</style>
<div class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-9 hsh">
                    <h1>TENTANG KAMI</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="profile-section py-5">
    <div class="container">
        
        <!-- Judul dan Deskripsi Profil -->
        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="section-title-left">Profil</h2>
                <p class="profile-text">
                    Didirikan pada tahun 2018, ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional yang 
                    berpengalaman, terbesar, terpercaya, dan juga memiliki jam terbang tinggi untuk melayani para anak-anak muda 
                    Indonesia untuk menuntut ilmu di berbagai negara maju didunia.
                </p>
            </div>
        </div>
        
        <div class="row images-row mb-5">
            <!-- Gambar 1: Diskusi/Belajar -->
            <div class="col-lg-6 col-md-6 mb-4">
                <img src="{{ asset('gambar/visi.png') }}" alt="Mahasiswa sedang diskusi" class="img-fluid rounded shadow-sm">
            </div>
            <!-- Gambar 2: Teknologi/VR -->
            <div class="col-lg-6 col-md-6 mb-4">
                <img src="{{ asset('gambar/misi.png') }}" alt="Mahasiswa menggunakan VR" class="img-fluid rounded shadow-sm">
            </div>
        </div>
        
        <!-- Bagian Visi dan Misi -->
        <div class="row visi-misi-row mb-5">
            
            <!-- Kolom Visi -->
            <div class="col-lg-6 col-md-6 mb-4">
                <h3 class="visi-misi-title">Visi</h3>
                <p class="visi-misi-text">
                    Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk 
                    menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan 
                    yang tangguh, mandiri, dan profesional.
                </p>
            </div>
            
            <!-- Kolom Misi -->
            <div class="col-lg-6 col-md-6 mb-4">
                <h3 class="visi-misi-title">Misi</h3>
                <p class="visi-misi-text">
                    Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk 
                    menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan 
                    yang tangguh, mandiri, dan profesional.
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 text-center mt-4">
                <a href="#" class="btn-section">
                    LAINNYA
                </a>
            </div>
        </div>
    </div>
</section>
@include('hubungi')