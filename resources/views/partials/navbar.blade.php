<style>
    :root {
        --gradient-start: #3a2a6a;
        --gradient-mid: #35589c;
        --gradient-end: #2f83c5;
        --button-blue: #2773b0;
        --button-blue-hover: #206090;
    }
    .icon-bar {
        width: 70px;
        height: 70px;
    }
    .topbar-custom {
        z-index: 2;
        background: linear-gradient(90deg, #4b006e 0%, #5b2fa8 30%, #3b79e3 100%);
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }
    .navbar-brand.logo {
        font-weight: 300;
        font-size: 1.5rem; 
        color: #fff;
        position: relative;
        padding-bottom: 12px; 
        line-height: 1;
    }
    .topbar-custom .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.8);
        font-size: 1rem;
        padding: 0.5rem 1rem;
        position: relative; 
        transition: color 0.3s ease;
    }
    .topbar-custom .navbar-nav .nav-link.active {
        color: #ffffff !important;
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
        padding-left: 2rem; 
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
        transform: translateY(-50%);
        color: rgba(255, 255, 255, 0.7);
        pointer-events: none; 
    }
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
        white-space: nowrap;
    }
    .btn-daftar:hover {
        background-color: var(--button-blue-hover);
        color: #fff;
    }
    @media (max-width: 767.98px) {
        .topbar-custom .nav-search {
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 50px;
            width: 95% !important;
            padding: 0.25rem 0.5rem;
        }
        .topbar-custom .nav-search .form-control {
            border-bottom: none;
            padding-bottom: 0;
        }
        .topbar-custom .nav-search .search-icon {
            left: 15px;
        }
        .btn-daftar.w-100 {
            padding: 0.6rem 1.5rem;
        }
    }
    .nav-search {
        position: relative; 
    }
</style>
<nav class="navbar navbar-expand-md navbar-dark topbar-custom">
    <div class="container-fluid px-md-5">
        <a class="navbar-brand logo" href="/">
            <img class="icon-bar" src="{{ asset('gambar/inaklug.png') }}" alt="Inaklug Logo">
            Inaklug
        </a>
        <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon" id="bgbt"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mx-auto px-1 mb-1 mb-lg-1">
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
                    <a class="nav-link" href="/hubungikami">Hubungi Kami</a>
                </li>
            </ul>
            <div class="d-flex flex-column flex-md-row align-items-center sr mt-3 mt-md-0">
                
                <form class="nav-search d-flex me-md-1 mb-2 mb-md-0 w-100 w-md-auto">
                    <i class="bi bi-search search-icon plsr"></i>
                    <input class="form-control" type="search" placeholder="Ketik pencarian" aria-label="Search">
                </form>
                
                <a href="#" class="btn-daftar text-nowrap w-100 w-md-auto text-center">DAFTAR ONLINE</a>
            </div>
        </div>
    </div>
</nav>
<script>
    function setActiveNavLink() {
        const currentPath = window.location.pathname; 
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        navLinks.forEach(link => {
            link.classList.remove('active');
            link.removeAttribute('aria-current');
            
            const linkPath = link.getAttribute('href');
            let match = false;
            
            if (linkPath === '/') {
                if (currentPath === '/' || currentPath === '/index.html' || currentPath === '') {
                    match = true;
                }
            } else if (currentPath === linkPath || currentPath.startsWith(linkPath + '/')) {
                match = true;
            }
            
            if (match) {
                link.classList.add('active');
                link.setAttribute('aria-current', 'page');
            }
        });
    }
    function handleMobileMenuClose() {
        const bgbt = document.getElementById('bgbt')
        const mainNavbar = document.getElementById('mainNavbar');
        bgbt.addEventListener('click', () => {
            if (mainNavbar.classList.contains('show')) {
                mainNavbar.classList.remove('show');
            } else {
                mainNavbar.classList.add('show');
            }
        })
    }

    window.addEventListener('load', function() {
        setActiveNavLink();
        handleMobileMenuClose();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>