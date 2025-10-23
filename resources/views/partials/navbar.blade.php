<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug - Navigasi</title>
    <!-- Bootstrap CSS (Asumsi Anda menggunakan Bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* CSS yang Anda berikan sebelumnya */
        :root {
            --gradient-start: #3a2a6a;
            --gradient-mid: #35589c;
            --gradient-end: #2f83c5;
            --button-blue: #2773b0;
            --button-blue-hover: #206090;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .icon-bar {
            width: 70px;
            height: 70px;
        }

        .topbar-custom {
            /* Gradient background persis seperti gambar */
            background: linear-gradient(90deg, #4b006e 0%, #5b2fa8 30%, #3b79e3 100%);
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        /* --- Kustomisasi Logo "klug" --- */
        .navbar-brand.logo {
            font-weight: 300;
            /* font-family: url('font/Ubuntu-Light.ttf') format('truetype'); */
            font-size: 1.5rem; 
            color: #fff;
            position: relative;
            padding-bottom: 12px; 
            line-height: 1;
        }
        
        /* Garis di bawah logo (Dihapus karena kode aset tidak tersedia) */

        /* --- Kustomisasi Link Navigasi --- */
        .topbar-custom .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1rem;
            padding: 0.5rem 1rem;
            position: relative; 
            transition: color 0.3s ease;
        }

        /* Garis bawah untuk link yang 'active' */
        .topbar-custom .navbar-nav .nav-link.active {
            color: #ffffff !important; /* Penting untuk override default Bootstrap */
            font-weight: 500;
        }

        .topbar-custom .navbar-nav .nav-link.active::after {
            content: '';
            display: block;
            position: absolute;
            bottom: 3px; 
            left: 1rem;  
            right: 1rem; 
            height: 1px;
            background-color: #fff;
            border-radius: 2px;
        }

        /* --- Kustomisasi Form Pencarian --- */
        .nav-search {
            margin-right: 15px;
            left: 20px;
            position: static;
        }

        .nav-search .form-control {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.4); 
            border-radius: 0; 
            color: #fff;
            padding-left: 2.5rem; 
            padding-bottom: 0.4rem;
            min-width: 150px; 
        }

        .nav-search .form-control:focus {
            background-color: transparent;
            box-shadow: none;
            color: #fff;
            border-bottom-color: #fff; 
        }

        .nav-search .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .nav-search .search-icon {
            position: absolute;
            top: 50%;
            left: 0.5rem;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.7);
            pointer-events: none; 
        }

        /* --- Kustomisasi Tombol "DAFTAR ONLINE" --- */
        .btn-daftar {
            background-color: rgba(0, 0, 0, 0.39);
            border: none;
            text-decoration: none;
            border-radius: 50px; 
            padding: 0.6rem 1.5rem;
            font-size: 0.8rem;
            font-weight: 400;
            color: #fff;
            transition: background-color 0.2s ease;
            white-space: nowrap; /* Menjaga teks dalam satu baris */
        }

        .btn-daftar:hover {
            background-color: var(--button-blue-hover);
            color: #fff;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark topbar-custom">
    <div class="container-fluid px-md-5">
        
        <a class="navbar-brand logo" href="/">
            <!-- Menggunakan placeholder karena asset() tidak bekerja di sini -->
            <img class="icon-bar" src="{{ asset('gambar/inaklug.png') }}" alt="Inaklug Logo">
            Inaklug
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mx-auto px-1 mb-1 mb-lg-1">
                <!-- Hapus class 'active' bawaan di Home -->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentangkami">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/layanankami">Layanan Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/artikel">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hubungi">Hubungi Kami</a>
                </li>
            </ul>
            
            <div class="d-flex align-items-center sr">
                <form class="nav-search me-1 d-none d-md-flex">
                    <i class="bi bi-search search-icon"></i>
                    <input class="form-control" type="search" placeholder="Ketik pencarian" aria-label="Search">
                </form>
                
                <a href="#" class="btn-daftar text-nowrap d-none d-sm-block">DAFTAR ONLINE</a>
            </div>
        </div>
    </div>
</nav>

<!-- SCRIPT LOGIKA ACTIVE NAV-LINK -->
<script>
    function setActiveNavLink() {
        // Ambil path URL saat ini (misalnya: "/tentangkami" atau "/")
        const currentPath = window.location.pathname; 
        
        // Ambil semua elemen <a> dengan class 'nav-link'
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        // Hapus class 'active' dari semua link, lalu tambahkan pada link yang cocok
        navLinks.forEach(link => {
            // Hapus class 'active' yang mungkin sudah ada
            link.classList.remove('active');
            link.removeAttribute('aria-current');

            // Ambil href dari tautan saat ini
            const linkPath = link.getAttribute('href');

            // Cek kondisi:
            // 1. Jika path saat ini persis sama dengan href tautan
            // 2. Jika path saat ini adalah '/' dan href tautan juga '/' (untuk Home)
            // 3. Jika path saat ini diawali dengan href tautan (misal: '/tentangkami/detail' cocok dengan '/tentangkami')
            
            let match = false;
            
            if (linkPath === '/') {
                // Kasus spesial untuk Home ('/')
                if (currentPath === '/' || currentPath === '/index.html' || currentPath === '') {
                    match = true;
                }
            } else if (currentPath === linkPath || currentPath.startsWith(linkPath + '/')) {
                // Cocok jika path-nya sama atau path saat ini adalah sub-path
                match = true;
            }

            if (match) {
                link.classList.add('active');
                link.setAttribute('aria-current', 'page');
            }
        });
    }

    // Jalankan fungsi saat halaman dimuat
    window.addEventListener('load', setActiveNavLink);
</script>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
