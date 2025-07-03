@extends('layouts.app')

@section('title', 'Jurnal - Shutthegoods')

{{-- Page-Specific Styles --}}
@push('styles')
<style>
    .blog-hero {
        background-color: #fef5f1; /* A very light shade of the brand color */
        padding: 4rem 0;
    }

    .blog-hero h1 {
        color: var(--dark-color);
        font-weight: 700;
    }

    .section-title {
        font-weight: 600;
        margin-bottom: 2rem;
        position: relative;
        padding-bottom: 0.5rem;
    }
    /* Adds a little underline accent */
    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background-color: var(--brand-color);
    }

    /* --- Featured Post Card --- */
    .featured-post-card {
        border: none;
        background-color: #fff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.07);
        border-radius: 0.5rem;
        overflow: hidden; /* Ensures image corners are rounded */
    }
    .featured-post-card .featured-image {
        object-fit: cover;
        height: 100%;
        min-height: 300px;
    }
    .featured-post-card .card-body {
        padding: 2rem;
    }
    .featured-post-card .post-category {
        font-family: var(--font-primary);
        color: var(--brand-color);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.9rem;
    }
    .featured-post-card .card-title {
        font-weight: 700;
    }

    /* --- Regular Post Cards --- */
    .post-card {
        border: 1px solid #eee;
        border-radius: 0.5rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #fff;
        height: 100%; /* Makes all cards in a row the same height */
    }
    .post-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    }
    .post-card .card-img-top {
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
    }
    .post-card .post-category {
        font-family: var(--font-primary);
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--brand-color);
        text-transform: uppercase;
    }
    .post-card .card-title {
        font-weight: 600;
        font-size: 1.15rem;
        color: var(--dark-color);
        text-decoration: none;
    }
    .post-card .card-title:hover {
        color: var(--brand-color);
    }
    .post-card .post-meta {
        font-size: 0.85rem;
        color: #888;
        font-family: var(--font-primary);
    }

    /* --- Pagination --- */
    .pagination .page-item .page-link {
        color: var(--dark-color);
    }
    .pagination .page-item.active .page-link {
        background-color: var(--brand-color);
        border-color: var(--brand-color);
        color: #fff;
    }
</style>
@endpush


@section('content')

    {{-- Hero Header Section --}}
    <div class="blog-hero text-center">
        <div class="container">
            <h1 class="display-4">Jurnal Shutthegoods</h1>
            <p class="lead text-muted">Selamat datang di sudut kreatif kami! Tempat kami berbagi tips, trik, dan cerita seputar dunia fashion bekas.</p>
        </div>
    </div>

    {{-- Main Content Container --}}
    <div class="container py-5">

        {{-- Featured Post Section --}}
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title">Terbaru dari Jurnal</h2>
                <div class="card featured-post-card">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            {{-- Use a div with background-image for better control, or img-fluid as a fallback --}}
                             <img src="https://images.unsplash.com/photo-1574281358314-1428542ceab3?q=80&w=1974&auto=format&fit=crop" class="img-fluid featured-image" alt="Featured Post">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                             <div class="card-body">
                                <strong class="post-category">Inspirasi Gaya</strong>
                                <h3 class="card-title my-2">5 Cara Mix & Match Kemeja Flanel Bekas untuk Tampil Keren</h3>
                                <p class="text-muted mb-3">Kemeja flanel adalah item abadi yang wajib ada di lemari. Tapi, bagaimana cara membuatnya terlihat segar dan tidak membosankan? Temukan 5 inspirasi gaya dari kami...</p>
                                <p class="post-meta">1 Juli 2025</p>
                                <a href="#" class="btn btn-brand mt-3">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- All Articles Section --}}
        <h2 class="section-title">Semua Artikel</h2>
        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                <div class="card post-card">
                    <img src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=1972&auto=format&fit=crop" class="card-img-top" alt="Tips Thrifting">
                    <div class="card-body d-flex flex-column">
                        <p class="post-category">Tips & Trik</p>
                        <a href="#" class="text-decoration-none">
                            <h5 class="card-title">Panduan Pemula: Cara Mencuci Pakaian Thrift Agar Awet dan Bersih</h5>
                        </a>
                        <p class="card-text small text-muted mt-2">Baru pertama kali beli baju bekas? Jangan khawatir! Ikuti langkah-langkah mudah ini...</p>
                        <p class="post-meta mt-auto pt-3">28 Juni 2025</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                <div class="card post-card">
                    <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?q=80&w=1935&auto=format&fit=crop" class="card-img-top" alt="Denim Story">
                    <div class="card-body d-flex flex-column">
                        <p class="post-category">Cerita Fashion</p>
                         <a href="#" class="text-decoration-none">
                            <h5 class="card-title">Jejak Denim: Sejarah dan Alasan Kenapa Jaket Jeans Bekas itu Spesial</h5>
                        </a>
                        <p class="card-text small text-muted mt-2">Setiap sobekan dan pudar pada jaket jeans bekas memiliki cerita. Selami sejarahnya.</p>
                        <p class="post-meta mt-auto pt-3">25 Juni 2025</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                <div class="card post-card">
                    <img src="https://images.unsplash.com/photo-1562157873-818bc0726f68?q=80&w=1854&auto=format&fit=crop" class="card-img-top" alt="Sustainable Fashion">
                    <div class="card-body d-flex flex-column">
                        <p class="post-category">Gaya Hidup</p>
                        <a href="#" class="text-decoration-none">
                            <h5 class="card-title">Lebih dari Tren: Dampak Positif Memilih Fashion Bekas untuk Bumi</h5>
                        </a>
                        <p class="card-text small text-muted mt-2">Thrifting bukan hanya soal gaya, tapi juga soal pilihan cerdas untuk planet kita.</p>
                        <p class="post-meta mt-auto pt-3">22 Juni 2025</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- Pagination --}}
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mt-5">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Sebelumnya</a>
                </li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Selanjutnya</a>
                </li>
            </ul>
        </nav>

    </div>

@endsection
