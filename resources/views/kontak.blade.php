@extends('layouts.app')

@section('title', 'Kontak Kami - Shutthegoods')

@section('content')
<div class="container py-5">
    <div class="col-lg-8 mx-auto text-center">
        <h1 style="font-weight: 600;">Hubungi Kami</h1>
        <hr class="w-25 mx-auto">
        <p class="lead text-muted">Punya pertanyaan, kritik, atau saran? Jangan ragu untuk menghubungi kami melalui kanal di bawah ini.</p>

        <div class="mt-5">
            <p style="font-family: 'Poppins', sans-serif;">
                <i class="bi bi-envelope-fill brand-color me-2"></i>
                <strong>Email:</strong> <a href="mailto:support@shutthegoods.com">support@shutthegoods.com</a>
            </p>
            <p style="font-family: 'Poppins', sans-serif;">
                <i class="bi bi-whatsapp brand-color me-2"></i>
                <strong>WhatsApp:</strong> <a href="https://wa.me/6281234567890" target="_blank">0812-3456-7890</a>
            </p>
            <p class="mt-4 text-muted">
                <strong>Jam Operasional Tim Support:</strong>
                <br>
                Senin - Jumat, 09:00 - 17:00 WIB
            </p>
        </div>
    </div>
</div>
@endsection
