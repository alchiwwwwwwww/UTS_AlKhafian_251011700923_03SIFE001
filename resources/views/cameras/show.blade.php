@extends('layouts.app')

@section('title', $camera->brand . ' ' . $camera->model . ' | Lensa Josjis Mantap')

@section('content')
<section class="container py-5">
    <a class="back-link" href="{{ route('cameras.index') }}">← Kembali ke katalog</a>
    <div class="row g-5 align-items-center mt-2">
        <div class="col-lg-7">
            <div class="detail-image"><img src="{{ asset('assets/images/' . $camera->image) }}" alt="Ilustrasi {{ $camera->brand }} {{ $camera->model }}"></div>
        </div>
        <div class="col-lg-5">
            <span class="type-badge position-static">{{ $camera->type }}</span>
            <p class="eyebrow mt-4 mb-2">{{ $camera->brand }}</p>
            <h1 class="display-6 fw-bold">{{ $camera->model }}</h1>
            <p class="text-secondary fs-5">{{ $camera->description }}</p>
            <div class="detail-price mt-4"><span class="price fs-3">Rp{{ number_format($camera->rent_price, 0, ',', '.') }}</span><span class="text-secondary"> / hari</span></div>
            <div class="detail-note mt-4"><strong>Siap untuk momenmu?</strong><p class="mb-0 text-secondary">Hubungi admin rental untuk mengecek ketersediaan kamera dan jadwal peminjaman.</p></div>
            <a class="btn btn-accent btn-lg rounded-pill px-4 mt-4" href="{{ route('cameras.index') }}">Pilih kamera lain</a>
        </div>
    </div>
</section>
@endsection

