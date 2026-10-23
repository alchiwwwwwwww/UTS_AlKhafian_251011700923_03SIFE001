@extends('layouts.app')

@section('title', 'FAQ | Lensa Josjis Mantap')

@section('content')
<section class="info-hero">
    <div class="container py-5 py-lg-6">
        <span class="eyebrow">ADA YANG INGIN DITANYAKAN?</span>
        <h1 class="display-5 fw-bold mt-3">Pertanyaan umum</h1>
        <p class="lead text-secondary mt-3 mb-0">Jawaban ringkas tentang katalog dan proses penyewaan kamera.</p>
    </div>
</section>
<section class="container py-5"><div class="faq-list">
    <details class="faq-item" open><summary>Apakah semua kamera di katalog selalu tersedia?</summary><p>Tidak selalu. Katalog menampilkan pilihan kamera; tanyakan jadwal dan ketersediaan terbaru kepada admin.</p></details>
    <details class="faq-item"><summary>Harga yang ditampilkan untuk berapa lama?</summary><p>Harga pada katalog adalah harga sewa per hari. Total biaya dan ketentuan durasi perlu dikonfirmasi kepada admin.</p></details>
    <details class="faq-item"><summary>Bagaimana cara mencari jenis kamera tertentu?</summary><p>Pilih kategori di filter katalog atau masukkan nama merek/model pada kolom pencarian.</p></details>
    <details class="faq-item"><summary>Apakah kamera sudah termasuk lensa dan aksesori?</summary><p>Kelengkapan setiap kamera perlu ditanyakan kepada admin sebelum menyewa.</p></details>
    <details class="faq-item"><summary>Bagaimana cara menghubungi admin?</summary><p>Gunakan alamat email yang tercantum di halaman Kontak untuk menanyakan ketersediaan dan detail penyewaan.</p></details>
</div></section>
@endsection

