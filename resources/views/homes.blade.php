<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-9">
                
                <div class="hero-content-box">
                    <span class="hero-span-box"></span>
                    <h1>INGIN KULIAH DAN BERKARIR<br>DI LUAR NEGERI ?</h1>
                    <button class=" dropdown-toggle btn-selengkapnya" type="button" >
                        SELENGKAPNYA
                    </button>
                </div>
                
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="about-us-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <br>
                    <br>
                    <h3 class="section-title">TENTANG KAMI</h3>
                    <p class="about-us-text">
                        INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah <br>
                        memberangkatkan lebih dari 3000 mahasiswa indonesia yang ingin kuliah, perjalanan wisata <br>
                        dan berkarir dinegara maju didunia.
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layanan')
<section class="partners-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Mitra Kami</h2>
            </div>
        </div>
        
        <div class="row justify-content-center">
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                <div class="partner-logo-box text-center p-3 border rounded">
                    <img src="{{ asset('gambar/aviation.jpg') }}" alt="424aviation Logo" class="img-fluid" style="max-height: 80px;">
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                <div class="partner-logo-box text-center p-3 border rounded">
                    <img src="{{ asset('gambar/adrew.png') }}" alt="St. Andrew's College Cambridge Logo" class="img-fluid" style="max-height: 80px;">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                <div class="partner-logo-box text-center p-3 border rounded">
                    <img src="{{ asset('gambar/htw.png') }}" alt="HTW Berlin Logo" class="img-fluid" style="max-height: 80px;">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                <div class="partner-logo-box text-center p-3 border rounded">
                    <img src="{{ asset('gambar/studygroup.png') }}" alt="StudyGroup Logo" class="img-fluid" style="max-height: 80px;">
                </div>
            </div>

        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-banner p-4 rounded-lg">
            <div class="row align-items-center">
                <div class="col-md-9 col-sm-8 text-white">
                    <h3 class="cta-title m-0">GRATIS KONSELING STUDI DI LUAR NEGERI</h3>
                    <p class="cta-subtitle m-0">Konsultasi Seputar Kuliah/Bekerja di Luar Negeri</p>
                </div>
                <div class="col-md-3 col-sm-4 text-md-right text-sm-right text-center mt-3 mt-sm-0">
                    <a href="#" class=" btn-selengkapnya section4">
                        MULAI KONSULTASI <span class="arrow-icon">></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="articles-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Artikel Terbaru</h2>
            </div>
        </div>
        
        <div class="row gridder justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-6 mb-5">
                <div class="article-card shadow-sm rounded">
                    <a href="#" class="text-decoration-none text-dark">
                        <img src="{{ asset('gambar/studijerman.png') }}" alt="Studi ke Jerman" class="img-fluid article-img rounded-top">
                        <div class="article-body p-3">
                            <p class="article-title m-0">5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6 mb-5">
                <div class="article-card shadow-sm rounded">
                    <a href="#" class="text-decoration-none text-dark">
                        <img src="{{ asset('gambar/korona.png') }}" alt="Uni Eropa dan Virus Korona" class="img-fluid article-img rounded-top">
                        <div class="article-body p-3">
                            <p class="article-title m-0">Uni Eropa Menghadapi Virus Korona</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 mb-5">
                <div class="article-card shadow-sm rounded">
                    <a href="#" class="text-decoration-none text-dark">
                        <img src="{{ asset('gambar/bahasajerman.png') }}" alt="Belajar Bahasa Jerman" class="img-fluid article-img rounded-top">
                        <div class="article-body p-3">
                            <p class="article-title m-0">Belajar Bahasa Jerman Bersama Goethe Institut</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 mb-5">
                <div class="article-card shadow-sm rounded">
                    <a href="#" class="text-decoration-none text-dark">
                        <img src="{{ asset('gambar/gatescambride.png') }}" alt="Gates Cambridge" class="img-fluid article-img rounded-top">
                        <div class="article-body p-3">
                            <p class="article-title m-0">Apa Itu Gates Cambridge? Yuk Cari Tahu</p>
                        </div>
                    </a>
                </div>
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