@extends('layouts.app')

@section('title', 'Karir - Shutthegoods')

{{-- Page-Specific Styles --}}
@push('styles')
<style>
    /* Hero Section with Gradient */
    .hero-career {
        background: linear-gradient(45deg, var(--brand-color), #f7b799);
        color: #fff;
        padding: 5rem 0;
        text-align: center;
    }
    .hero-career h1 {
        font-weight: 700;
        font-size: 3.5rem;
    }
    .hero-career .lead {
        font-size: 1.25rem;
        opacity: 0.9;
    }

    /* Centered Section Title with Underline */
    .section-title {
        font-weight: 600;
        margin-bottom: 1rem;
        position: relative;
        padding-bottom: 1rem;
        display: inline-block;
    }
    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background-color: var(--brand-color);
    }

    /* "Why Join Us" Feature Items */
    .feature-item {
        background-color: #fff;
        border-radius: 0.5rem;
        padding: 2rem;
        text-align: center;
        border: 1px solid #eee;
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .feature-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    }
    .feature-item .feature-icon {
        font-size: 2.5rem;
        color: var(--brand-color);
        margin-bottom: 1rem;
    }
    .feature-item h4 {
        font-family: var(--font-primary);
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    /* Job Listing Section */
    .job-listing {
        background-color: #fff;
        border: 1px solid #e9ecef;
        border-radius: 0.5rem;
        padding: 1.5rem;
        margin-bottom: 1rem;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .job-listing:hover {
        border-color: var(--brand-color);
        box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    }
    @media (min-width: 768px) {
        .job-listing {
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }
    }
    .job-listing .job-title {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 0.25rem;
    }
    .job-listing .job-location {
        color: #6c757d;
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }
    @media (min-width: 768px) {
        .job-listing .job-location {
            margin-bottom: 0;
        }
    }
    .job-listing .btn-brand {
        padding: 0.4rem 1rem;
        font-size: 0.9rem;
    }

    /* Open Application CTA */
    .open-application-cta {
        background-color: #fef5f1;
        border-left: 4px solid var(--brand-color);
        padding: 1.5rem;
        border-radius: 0.25rem;
        margin-top: 2rem;
    }

    /* How to Apply Section */
    .how-to-apply {
        background-color: var(--light-bg);
        padding: 2.5rem;
        border-radius: 0.5rem;
        margin-top: 3rem;
    }
    .how-to-apply h3 {
        font-weight: 600;
        text-align: center;
        margin-bottom: 2rem !important;
    }
    .how-to-apply ol {
        list-style: none;
        counter-reset: how-to-apply-counter;
        padding-left: 0;
    }
    .how-to-apply ol li {
        counter-increment: how-to-apply-counter;
        margin-bottom: 1rem;
        display: flex;
        align-items: flex-start;
    }
    .how-to-apply ol li::before {
        content: counter(how-to-apply-counter);
        background-color: var(--brand-color);
        color: white;
        font-family: var(--font-primary);
        font-weight: 700;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        flex-shrink: 0; /* Prevents the number from shrinking */
    }
</style>
@endpush


@section('content')
    {{-- Hero Header Section --}}
    <div class="hero-career">
        <div class="container">
            <h1 class="animate__animated animate__fadeInDown">Berkarier di Shutthegoods</h1>
            <p class="lead animate__animated animate__fadeInUp">Jadilah Bagian dari Revolusi Fashion Berkelanjutan.</p>
        </div>
    </div>

    {{-- Main Content Container --}}
    <div class="container py-5">

        {{-- Why Join Us Section --}}
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">Mengapa Bergabung Dengan Kami?</h2>
                <p class="text-muted mt-3">Di Shutthegoods, kami lebih dari sekadar perusahaan—kami adalah gerakan. Bergabung dengan tim kami berarti Anda akan menjadi bagian dari sesuatu yang besar.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="feature-item">
                    <i class="bi bi-patch-check-fill feature-icon"></i>
                    <h4>Dampak Nyata</h4>
                    <p>Berkontribusi pada pengurangan limbah tekstil dan mempromosikan gaya hidup yang lebih berkelanjutan.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-item">
                    <i class="bi bi-lightbulb-fill feature-icon"></i>
                    <h4>Inovasi & Kreativitas</h4>
                    <p>Bekerja dalam lingkungan yang dinamis dan mendorong ide-ide baru dalam teknologi dan fashion.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-item">
                    <i class="bi bi-people-fill feature-icon"></i>
                    <h4>Komunitas Solid</h4>
                    <p>Menjadi bagian dari tim yang suportif, inklusif, dan memiliki hasrat yang sama untuk perubahan.</p>
                </div>
            </div>
        </div>

        {{-- Open Positions Section --}}
        <div class="row mt-4 pt-4">
            <div class="col-lg-10 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="section-title">Posisi Terbuka</h2>
                    <p class="text-muted mt-3">Kami selalu mencari individu berbakat untuk bergabung dengan tim kami. Lihat posisi yang tersedia saat ini:</p>
                </div>

                {{-- Job 1 --}}
                <div class="job-listing">
                    <div>
                        <h4 class="job-title">Spesialis Pemasaran Digital</h4>
                        <p class="job-location mb-md-0"><i class="bi bi-geo-alt-fill me-1"></i> Jakarta, Indonesia (atau Remote)</p>
                    </div>
                    <a href="#" class="btn btn-brand">Lihat Detail</a>
                </div>

                {{-- Job 2 --}}
                <div class="job-listing">
                     <div>
                        <h4 class="job-title">Kurator Produk Fashion Bekas</h4>
                        <p class="job-location mb-md-0"><i class="bi bi-geo-alt-fill me-1"></i> Bandung, Indonesia</p>
                    </div>
                    <a href="#" class="btn btn-brand">Lihat Detail</a>
                </div>

                {{-- Job 3 --}}
                 <div class="job-listing">
                     <div>
                        <h4 class="job-title">Junior Backend Developer (Laravel)</h4>
                        <p class="job-location mb-md-0"><i class="bi bi-geo-alt-fill me-1"></i> Remote</p>
                    </div>
                    <a href="#" class="btn btn-brand">Lihat Detail</a>
                </div>

                {{-- Open Application CTA --}}
                <div class="open-application-cta text-center">
                    <p class="mb-1 fw-bold">Tidak menemukan posisi yang cocok?</p>
                    <p class="mb-0 small">Kami selalu terbuka untuk talenta luar biasa. Kirim CV Anda ke <a href="mailto:hr@shutthegoods.com" class="fw-bold" style="color: var(--brand-color);">hr@shutthegoods.com</a>.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- How to Apply Section --}}
    <div class="how-to-apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h3>Proses Lamaran</h3>
                    <ol>
                        <li>Pilih posisi yang Anda minati dan klik "Lihat Detail" untuk membaca deskripsi pekerjaan dengan saksama.</li>
                        <li>Siapkan CV terbaru dan surat lamaran yang relevan dengan peran yang Anda lamar.</li>
                        <li>Kirimkan lamaran Anda melalui portal karir kami atau ke alamat email yang tertera.</li>
                        <li>Pastikan subjek email Anda jelas: <strong>[Nama Anda] - [Posisi yang Dilamar]</strong>.</li>
                        <li>Tim HR kami akan meninjau setiap aplikasi dan akan menghubungi kandidat yang memenuhi kualifikasi untuk tahap selanjutnya.</li>
                    </ol>
                    <p class="mt-4 text-center text-muted">Kami menghargai waktu dan usaha Anda untuk melamar di Shutthegoods!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
