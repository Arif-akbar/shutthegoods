<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shutthegoods - Marketplace Thrifting Indonesia')</title>

    {{-- Link CSS and Fonts --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Custom Styles --}}
    <style>
        /* CSS Variables for easier theme management */
        :root {
            --brand-color: #E88D67;
            --dark-color: #212529;
            --text-color: #4A4A4A;
            --light-bg: #FDFBF8; /* A warmer, softer white */
            --font-primary: 'Poppins', sans-serif;
            --font-secondary: 'Lora', serif;
        }

        body {
            font-family: var(--font-secondary);
            background-color: var(--light-bg);
            color: var(--text-color);
        }

        h1, h2, h3, h4, h5, h6, .btn, .nav-link, .navbar-brand, .form-label {
            font-family: var(--font-primary);
        }

        /* Smooth transitions for interactive elements */
        a, .btn {
            transition: all 0.3s ease;
        }

        /* --- Enhanced Navbar --- */
        .navbar {
            padding-top: 1rem;
            padding-bottom: 1rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            background-color: #fff !important;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--dark-color);
        }
        .navbar-brand:hover {
            color: var(--brand-color);
        }
        .nav-link {
            font-weight: 500;
            color: #555;
            margin: 0 0.5rem;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--brand-color) !important;
        }

        /* Navbar Search Bar */
        .header-search {
            width: 350px;
        }
        .header-search .form-control {
            border-radius: 20px;
            padding-left: 1.2rem;
            border-color: #e9ecef;
        }
        .header-search .form-control:focus {
            box-shadow: 0 0 0 2px rgba(232, 141, 103, 0.25);
            border-color: var(--brand-color);
        }

        /* Navbar User Actions */
        .header-actions .nav-link {
            font-size: 1.2rem;
        }
        .btn-brand {
            background-color: var(--brand-color);
            border-color: var(--brand-color);
            color: #fff;
            font-weight: 600;
            padding: 0.5rem 1.2rem;
            border-radius: 20px;
        }
        .btn-brand:hover {
            background-color: #d67c5a;
            border-color: #d67c5a;
            color: #fff;
            transform: translateY(-2px);
        }

        /* --- Main Content --- */
        main {
            /* Suggestion: Add consistent padding in child views */
            /* e.g., <div class="container py-5"> */
        }

        /* --- Modern Footer --- */
        .footer-dark {
            background-color: var(--dark-color);
            color: #adb5bd;
        }
        .footer-dark .widget-title {
            font-family: var(--font-primary);
            font-size: 1.1rem;
            font-weight: 600;
            color: #fff;
            letter-spacing: 0.5px;
            margin-bottom: 1rem;
        }
        .footer-dark .brand-underline {
            width: 60px;
            background-color: var(--brand-color);
            height: 2px;
            margin: 0.5rem 0 1.5rem;
        }
        .footer-dark p {
            font-size: 0.95rem;
        }
        .footer-dark .footer-links a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
            margin-bottom: 0.75rem;
        }
        .footer-dark .footer-links a:hover {
            color: var(--brand-color);
            text-decoration: underline;
        }
        .footer-dark .social-icons a {
            color: #adb5bd;
            font-size: 1.2rem;
            margin-right: 1rem;
            text-decoration: none;
        }
        .footer-dark .social-icons a:hover {
            color: var(--brand-color);
        }
        .footer-bottom {
            background-color: #111;
            border-top: 1px solid #343a40;
        }
    </style>
</head>
<body>

    {{-- Header / Navigation --}}
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                {{-- Brand Logo --}}
                <a class="navbar-brand" href="{{ url('/') }}">Shutthegoods</a>

                {{-- Mobile Toggler --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- Navbar Content --}}
                <div class="collapse navbar-collapse" id="mainNav">
                    {{-- Main Navigation Links --}}
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/kontak') }}">Kontak</a></li>
                    </ul>

                    {{-- Search & User Actions --}}
                    <div class="d-flex align-items-center">
                        {{-- Search Form --}}
                        <form class="header-search me-3 d-none d-lg-block" role="search">
                             <input class="form-control" type="search" placeholder="Cari barang unik..." aria-label="Search">
                        </form>

                        {{-- User Actions --}}
                        <div class="header-actions d-flex align-items-center">

                           <a href="{{ url('/login') }}" class="nav-link"><i class="bi bi-person"></i></a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    {{-- Main Page Content --}}
    <main>
        {{-- For best results, wrap your content in a <div class="container py-5"> in each view --}}
        @yield('content')
    </main>

    {{-- Enhanced Footer --}}
    <footer class="footer-dark pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row gy-4">

                {{-- About Column --}}
                <div class="col-lg-4 col-md-6">
                    <h6 class="widget-title">Shutthegoods</h6>
                    <div class="brand-underline"></div>
                    <p>
                        Platform marketplace komunitas untuk menemukan dan menjual harta karun fashion bekas yang unik dan berkualitas.
                    </p>
                </div>

                {{-- Company Links --}}
                <div class="col-lg-2 col-md-6 footer-links">
                    <h6 class="widget-title">Perusahaan</h6>
                    <div class="brand-underline"></div>
                    <p><a href="{{ url('/tentang-kami') }}">Tentang Kami</a></p>
                    <p><a href="{{ url('/blog') }}">Blog</a></p>
                    <p><a href="{{ url('/karir') }}">Karir</a></p>
                    <p><a href="{{ url('/kontak') }}">Kontak</a></p>
                </div>

                {{-- For Sellers Links --}}
                <div class="col-lg-2 col-md-6 footer-links">
                    <h6 class="widget-title">Untuk Penjual</h6>
                    <div class="brand-underline"></div>
                    <p><a href="{{ url('/mulai-berjualan') }}">Mulai Berjualan</a></p>
                    <p><a href="{{ url('/pusat-bantuan-penjual') }}">Pusat Bantuan</a></p>
                    <p><a href="{{ url('/tips-jualan') }}">Tips Jualan</a></p>
                    <p><a href="{{ url('/kebijakan-penjual') }}">Kebijakan</a></p>
                </div>

                {{-- Follow Us Column --}}
                <div class="col-lg-3 col-md-6 ms-auto">
                    <h6 class="widget-title">Ikuti Kami</h6>
                    <div class="brand-underline"></div>
                    <p>Dapatkan update terbaru tentang tren dan koleksi pilihan kami.</p>
                    <div class="social-icons mt-3">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="Tiktok"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <div class="footer-bottom py-3">
        <p class="text-center text-white-50 small m-0">© {{ date('Y') }} Shutthegoods. All Rights Reserved.</p>
    </div>

    {{-- Bootstrap Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
