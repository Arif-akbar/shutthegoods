@extends('layouts.app')

@section('title', 'Lacak Pesanan - Shutthegoods')

@section('content')
<div class="container py-5 my-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
             <div class="card border-0 shadow-sm">
                 <div class="card-body p-5 text-center">
                     <i class="bi bi-truck display-3 brand-color mb-3"></i>
                     <h3 class="card-title" style="font-weight: 600;">Lacak Pesanan Anda</h3>
                     <p class="text-muted">Masukkan nomor resi pengiriman Anda di bawah ini untuk melihat status terakhir pesanan Anda.</p>
                     <div class="input-group mt-4">
                         <input type="text" class="form-control form-control-lg" placeholder="Contoh: JNE1234567890">
                         <button class="btn btn-dark" type="button">Lacak</button>
                     </div>
                 </div>
             </div>
        </div>
    </div>
</div>
@endsection
