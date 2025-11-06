<style>
    .hero-section {
        position: relative;
        width: 100%;
        height: 300px;
        background-image: 
            linear-gradient(to right, rgba(75, 0, 110, 0.8), rgba(75, 0, 110, 0.2)),
            url('{{ asset('gambar/gatescambride.png') }}');
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
    
    .hsh {
        margin-top: 300px;
    }
</style>
<div class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-9 hsh">
                    <h1>LAYANAN KAMI</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layanan')
@include('hubungi')