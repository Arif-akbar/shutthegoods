@extends('layouts.app')

@section('title', 'Pusat Penjual - Shutthegoods')

@push('styles')
<style>
    /* Style khusus untuk halaman ini agar lebih unik */
    .feature-card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #ffffff;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
    }

    .feature-card .card-body {
        padding: 2rem;
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .feature-card .icon-wrapper {
        font-size: 3rem; /* Ukuran ikon lebih besar */
        margin-bottom: 1rem;
        color: #E88D67; /* Menggunakan warna aksen brand Anda */
    }

    .feature-card .card-title {
        font-weight: 700;
        color: #343a40;
    }
</style>
@endpush

@section('content')
    <div class="container py-5 my-4">
        {{-- Header Halaman --}}
        <div class="text-center mb-5">
            <h1 class="display-5" style="font-weight: 700;">Selamat Datang, Penjual Hebat!</h1>
            <p class="lead text-muted">Semua yang Anda butuhkan untuk memulai, mengelola, dan mengembangkan toko Anda ada di sini.</p>
        </div>

        {{-- Grid Kartu Fitur --}}
        <div class="row">
            {{-- Kartu 1: Mulai Berjualan --}}
            <div class="col-lg-6 mb-4">
                <div class="feature-card">
                    <div class="card-body">
                        <div>
                            <div class="icon-wrapper"><i class="bi bi-rocket-takeoff"></i></div>
                            <h4 class="card-title">Mulai Berjualan</h4>
                            <p class="card-text text-muted">Punya koleksi yang tak terpakai? Ubah lemarimu menjadi sumber penghasilan. Bergabunglah dengan ribuan penjual kreatif lainnya di platform kami.</p>
                        </div>
                        <a href="{{ url('/mulai-berjualan') }}" class="btn btn-dark mt-4">Daftar Sekarang</a>
                    </div>
                </div>
            </div>

            {{-- Kartu 2: Pusat Bantuan Penjual --}}
            <div class="col-lg-6 mb-4">
                <div class="feature-card">
                    <div class="card-body">
                        <div>
                            <div class="icon-wrapper"><i class="bi bi-question-circle"></i></div>
                            <h4 class="card-title">Pusat Bantuan Penjual</h4>
                            <p class="card-text text-muted">Menemukan kendala atau punya pertanyaan? Kami siap membantu. Temukan jawaban dari pertanyaan yang sering diajukan di sini.</p>
                        </div>
                        <a href="{{ url('/pusat-bantuan-penjual') }}" class="btn btn-outline-dark mt-4">Lihat FAQ Penjual</a>
                    </div>
                </div>
            </div>

            {{-- Kartu 3: Tips & Trik Jualan --}}
            <div class="col-lg-6 mb-4">
                <div class="feature-card">
                    <div class="card-body">
                        <div>
                            <div class="icon-wrapper"><i class="bi bi-lightbulb"></i></div>
                            <h4 class="card-title">Tips & Trik Jualan</h4>
                            <p class="card-text text-muted">Tingkatkan visibilitas produk dan maksimalkan penjualan Anda. Pelajari rahasia dari para penjual sukses di platform kami.</p>
                        </div>
                        <a href="{{ url('/tips-jualan') }}" class="btn btn-outline-dark mt-4">Pelajari Tipsnya</a>
                    </div>
                </div>
            </div>

            {{-- Kartu 4: Kebijakan Penjual --}}
            <div class="col-lg-6 mb-4">
                <div class="feature-card">
                    <div class="card-body">
                        <div>
                            <div class="icon-wrapper"><i class="bi bi-shield-check"></i></div>
                            <h4 class="card-title">Kebijakan Penjual</h4>
                            <p class="card-text text-muted">Pahami aturan main untuk menciptakan pengalaman jual beli yang adil, aman, dan transparan untuk semua pihak.</p>
                        </div>
                        <a href="{{ url('/kebijakan-penjual') }}" class="btn btn-outline-dark mt-4">Baca Kebijakan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
