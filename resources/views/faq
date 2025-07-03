@extends('layouts.app')

@section('title', 'FAQ - Shutthegoods')

@section('content')
<div class="container py-5">
    <div class="col-lg-8 mx-auto">
        <div class="text-center mb-5">
            <h1 style="font-weight: 600;">Frequently Asked Questions (FAQ)</h1>
            <p class="lead text-muted">Temukan jawaban untuk pertanyaan yang paling sering diajukan.</p>
        </div>

        <div class="accordion" id="faqAccordion">
            {{-- Pertanyaan 1 --}}
            <div class="accordion-item mb-3 shadow-sm">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        Apa itu Shutthegoods?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Shutthegoods adalah platform marketplace komunitas yang didedikasikan untuk jual beli pakaian bekas (thrifting) yang unik dan berkualitas. Kami menghubungkan penjual dengan para pemburu harta karun fashion di seluruh Indonesia.
                    </div>
                </div>
            </div>

            {{-- Pertanyaan 2 --}}
            <div class="accordion-item mb-3 shadow-sm">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                        Bagaimana cara membeli barang?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Cukup jelajahi produk yang Anda suka, klik tombol "Tambah ke Keranjang", lalu lanjutkan ke proses checkout. Anda akan diarahkan untuk mengisi alamat dan memilih metode pembayaran yang aman.
                    </div>
                </div>
            </div>

            {{-- Pertanyaan 3 --}}
            <div class="accordion-item mb-3 shadow-sm">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                        Apakah berbelanja di sini aman?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Sangat aman. Kami menyediakan sistem transaksi yang aman di mana pembayaran Anda akan kami tahan hingga Anda mengonfirmasi penerimaan barang. Baca juga <a href="{{ url('/panduan-transaksi-aman') }}">Panduan Transaksi Aman</a> kami untuk tips tambahan.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
