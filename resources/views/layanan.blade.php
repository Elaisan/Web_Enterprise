<style>
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
        height: 250px; /* Atur tinggi yang sesuai */
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease-in-out;
    }

    .service-card:hover img {
        transform: scale(1.05); /* Efek zoom saat hover */
    }

    .card-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)); /* Gradien gelap di bawah */
        padding: 20px 15px 10px;
        color: white;
        z-index: 3;
    }

    .card-title {
        margin: 0;
        font-size: 1.2rem;
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
        background: linear-gradient(to right, rgba(128, 0, 128, 0.5), rgba(128, 0, 128, 0)); /* Ungu transparan */
        z-index: 1; /* Di antara gambar dan teks overlay bawah */
        border-top-left-radius: 8px; /* Menyesuaikan sudut kartu */
        border-bottom-left-radius: 8px;
    }

    /* Untuk "span vertikal" yang putih di dekat gradien kiri */
    /* Kita bisa tambahkan pseudo-element ::after pada service-card atau elemen lain */
    .service-card::after {
        content: '';
        position: absolute;
        top: 0%; /* Posisi dari atas */
        left: 10px; /* Jarak dari kiri, sesuaikan dengan lebar gradien */
        width: 2px; /* Ketebalan garis */
        height: 80%; /* Tinggi garis */
        background-color: hsla(295, 100%, 88%, 0.70); /* Warna putih transparan */
        z-index: 2; /* Pastikan di atas gradien kiri */
        border-radius: 2px; /* Sedikit membulat pada ujung garis */
    }
</style>
<section class="services-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Layanan Kami</h2>
            </div>
        </div>
        
        <div class="row service-cards-row">
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <img src="{{ asset('gambar/bachelor.png') }}" alt="Studi S1 - Bachelor" class="card-img-top">
                    <div class="card-overlay">
                        <h4 class="card-title">Studi S1 - Bachelor</h4>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <img src="{{ asset('gambar/master.png') }}" alt="Studi S2 - Master" class="card-img-top">
                    <div class="card-overlay">
                        <h4 class="card-title">Studi S2 - Master</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <img src="{{ asset('gambar/phd.jpg') }}" alt="Studi S3 - Ph.D" class="card-img-top">
                    <div class="card-overlay">
                        <h4 class="card-title">Studi S3 - Ph.D</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <img src="{{ asset('gambar/kursus.png') }}" alt="Kursus Bahasa Asing" class="card-img-top">
                    <div class="card-overlay">
                        <h4 class="card-title">Kursus Bahasa Asing</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <img src="{{ asset('gambar/studytour.png') }}" alt="Study Tour" class="card-img-top">
                    <div class="card-overlay">
                        <h4 class="card-title">Study Tour</h4>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <img src="{{ asset('gambar/ausbildung.jpg') }}" alt="Ausbildung" class="card-img-top">
                    <div class="card-overlay">
                        <h4 class="card-title">Ausbildung</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>