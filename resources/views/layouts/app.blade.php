<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mau Kamera bagus? Sewa di Lensa Josjis Mantap.">
    <title>@yield('title', 'Lensa Josjis Mantap | Rental Kamera')</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark site-nav">
        <div class="container py-1">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('cameras.index') }}">
                <span class="brand-mark">LJ</span> Lensa Josjis Mantap
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <div class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
                    <a class="nav-link" href="{{ route('cameras.index') }}">Katalog</a>
                    <a class="nav-link" href="{{ route('pages.rental-guide') }}">Cara Sewa</a>
                    <a class="nav-link" href="{{ route('pages.about') }}">Tentang</a>
                    <a class="nav-link" href="{{ route('pages.faq') }}">FAQ</a>
                    <a class="btn btn-sm btn-light rounded-pill px-3" href="{{ route('pages.contact') }}">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <main>@yield('content')</main>

    <footer class="site-footer mt-5">
        <div class="container py-4 d-flex flex-column flex-md-row justify-content-between gap-2">
            <span><strong>Lensa Josjis Mantap</strong> · Rental kamera untuk setiap cerita.</span>
            <span class="small">Proyek UTS Rekayasa Web · Al Khafian · 251011700923</span>
        </div>
        <div class="container pb-4 small footer-links"><a href="{{ route('pages.rental-guide') }}">Cara Sewa</a><a href="{{ route('pages.about') }}">Tentang Kami</a><a href="{{ route('pages.faq') }}">FAQ</a><a href="{{ route('pages.contact') }}">Kontak</a></div>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

