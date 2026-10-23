@extends('layouts.app')

@section('title', 'Tentang Kami | Lensa Josjis Mantap')

@section('content')
<section class="info-hero">
    <div class="container py-5 py-lg-6">
        <span class="eyebrow">TENTANG LENSA JOJSIS MANTAP</span>
        <h1 class="display-5 fw-bold mt-3">Biar ceritamu tertangkap dengan kamera yang tepat.</h1>
        <p class="lead text-secondary mt-3 mb-0">Lensa Josjis Mantap adalah katalog rental kamera untuk membantu kamu menemukan gear yang sesuai dengan kebutuhan foto dan videomu.</p>
    </div>
</section>
<section class="container py-5">
    <div class="row g-4">
        <div class="col-md-4"><article class="info-card h-100"><span class="info-number">01</span><h2 class="h4 mt-3">Pilihan beragam</h2><p class="text-secondary mb-0">Jelajahi kamera mirrorless, DSLR, action camera, camcorder, kamera sinema, dan kamera 360 derajat.</p></article></div>
        <div class="col-md-4"><article class="info-card h-100"><span class="info-number">02</span><h2 class="h4 mt-3">Informasi yang jelas</h2><p class="text-secondary mb-0">Lihat jenis kamera, deskripsi, gambar, dan harga sewa harian sebelum memilih.</p></article></div>
        <div class="col-md-4"><article class="info-card h-100"><span class="info-number">03</span><h2 class="h4 mt-3">Mulai dari kebutuhanmu</h2><p class="text-secondary mb-0">Gunakan pencarian dan filter untuk menemukan pilihan yang cocok, lalu hubungi admin untuk mengecek ketersediaan.</p></article></div>
    </div>
    <div class="info-cta mt-5 d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3"><div><h2 class="h4 mb-1">Siap memilih kamera?</h2><p class="text-secondary mb-0">Jelajahi katalog dan temukan gear yang pas untuk rencanamu.</p></div><a class="btn btn-accent rounded-pill px-4" href="{{ route('cameras.index') }}#katalog">Lihat katalog</a></div>
</section>
@endsection

