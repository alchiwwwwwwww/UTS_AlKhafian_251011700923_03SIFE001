@extends('layouts.app')

@section('title', 'Kontak | Lensa Josjis Mantap')

@section('content')
<section class="info-hero">
    <div class="container py-5 py-lg-6">
        <span class="eyebrow">KAMI SIAP MEMBANTU</span>
        <h1 class="display-5 fw-bold mt-3">Hubungi Lensa Josjis Mantap</h1>
        <p class="lead text-secondary mt-3 mb-0">Tanyakan ketersediaan kamera, kelengkapan, dan proses penyewaan sebelum menentukan pilihan.</p>
    </div>
</section>
<section class="container py-5">
    <div class="row g-4">
        <div class="col-lg-7"><div class="contact-card h-100"><span class="eyebrow">KONTAK ADMIN</span><h2 class="h3 mt-2">Cek jadwal dan detail sewa</h2><p class="text-secondary">Sertakan nama kamera dan tanggal penggunaan saat mengirim pertanyaan agar admin dapat membantu lebih cepat.</p>
            @if ($contactEmail)
                <a class="btn btn-accent rounded-pill px-4" href="mailto:{{ $contactEmail }}?subject={{ rawurlencode('Pertanyaan Sewa Kamera - Lensa Josjis Mantap') }}">Kirim email ke {{ $contactEmail }}</a>
            @else
                <div class="alert alert-warning mb-0">Alamat kontak belum diatur. Isi `STORE_EMAIL` pada file `.env` proyek agar tombol email muncul.</div>
            @endif
        </div></div>
        <div class="col-lg-5"><div class="contact-side h-100"><h2 class="h5">Saat menghubungi admin</h2><ul class="text-secondary mb-0"><li>Nama dan model kamera yang diminati</li><li>Tanggal dan lama penggunaan</li><li>Pertanyaan tentang kelengkapan</li><li>Konfirmasi biaya dan proses sewa</li></ul></div></div>
    </div>
</section>
@endsection

