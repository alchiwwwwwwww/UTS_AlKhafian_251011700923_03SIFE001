@extends('layouts.app')

@section('title', 'Katalog Kamera | Lensa Josjis Mantap')

@section('content')
<section class="hero-section">
    <div class="container py-5 py-lg-6">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="eyebrow">CERITAKAN MOMENMU</span>
                <h1 class="display-4 fw-bold mt-3 mb-3">Mau Kamera bagus? <span class="text-accent">Sewa di Lensa Josjis Mantap.</span></h1>
                <p class="lead text-secondary mb-4">Jelajahi pilihan kamera untuk liburan, acara spesial, sampai produksi konten. Pilih kamera yang pas, lalu mulai berkarya.</p>
                <a href="#katalog" class="btn btn-accent btn-lg rounded-pill px-4">Jelajahi kamera <span aria-hidden="true">↓</span></a>
                <div class="hero-stats mt-4 d-flex gap-4 flex-wrap">
                    <div><strong>20</strong><span>Pilihan kamera</span></div>
                    <div><strong>06</strong><span>Jenis kamera</span></div>
                    <div><strong>24/7</strong><span>Siap menemani</span></div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-card">
                    <img src="{{ asset('assets/images/canon-r6.svg') }}" alt="Ilustrasi kamera Canon EOS R6 Mark II">
                    <div class="hero-card-caption"><span>FAVORIT KREATOR</span><strong>Canon EOS R6 Mark II</strong><small>Mulai Rp350.000 / hari</small></div>
                    <span class="hero-sparkle" aria-hidden="true">✳</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5" id="katalog">
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-end gap-3 mb-4">
        <div>
            <span class="eyebrow">PILIH GEAR ANDALANMU</span>
            <h2 class="section-title mt-2 mb-1">Katalog kamera</h2>
            <p class="text-secondary mb-0">Pilih dari 20 kamera dalam enam kategori untuk momen yang ingin kamu abadikan.</p>
        </div>
        <form class="filter-form row g-2" method="GET" action="{{ route('cameras.index') }}">
            <div class="col-sm-auto">
                <label class="visually-hidden" for="type">Jenis kamera</label>
                <select class="form-select rounded-pill" id="type" name="type">
                    <option value="">Semua jenis</option>
                    @foreach ($types as $type)
                        <option value="{{ $type }}" @selected(request('type') === $type)>{{ $type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-auto">
                <label class="visually-hidden" for="q">Cari kamera</label>
                <input class="form-control rounded-pill" id="q" name="q" value="{{ request('q') }}" placeholder="Cari kamera...">
            </div>
            <div class="col-sm-auto d-grid"><button class="btn btn-dark rounded-pill px-4">Cari</button></div>
        </form>
    </div>

    @if ($cameras->isEmpty())
        <div class="empty-state text-center py-5"><h3>Kamera belum ditemukan</h3><p class="text-secondary">Coba kata kunci atau jenis kamera yang lain.</p><a class="btn btn-outline-dark rounded-pill" href="{{ route('cameras.index') }}">Tampilkan semua kamera</a></div>
    @else
        <div class="row g-4">
            @foreach ($cameras as $camera)
                <div class="col-sm-6 col-lg-4">
                    <article class="camera-card h-100">
                        <a class="camera-image" href="{{ route('cameras.show', $camera) }}" aria-label="Lihat detail {{ $camera->brand }} {{ $camera->model }}">
                            <img src="{{ asset('assets/images/' . $camera->image) }}" alt="Ilustrasi {{ $camera->brand }} {{ $camera->model }}">
                            <span class="type-badge">{{ $camera->type }}</span>
                        </a>
                        <div class="p-4">
                            <div class="small text-secondary text-uppercase fw-semibold tracking-wide">{{ $camera->brand }}</div>
                            <h3 class="h5 fw-bold mt-1 mb-3">{{ $camera->model }}</h3>
                            <div class="d-flex align-items-end justify-content-between gap-2">
                                <div><span class="price">Rp{{ number_format($camera->rent_price, 0, ',', '.') }}</span><span class="small text-secondary"> / hari</span></div>
                                <a class="btn btn-outline-dark btn-sm rounded-pill px-3" href="{{ route('cameras.show', $camera) }}">Detail</a>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    @endif
</section>
@endsection

