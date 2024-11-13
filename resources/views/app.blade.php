<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .bg-skyblue {
            background-color: #00aaff;
        }
        .text-skyblue {
            color: #00aaff;
        }
        .hero-section {
            background: linear-gradient(to right, #000000, #002244);
            padding: 19rem 0;
        }
        .hero-section h2, .hero-section p {
            animation: fadeIn 2s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .btn-custom {
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #005f99 !important;
        }
    </style>
</head>
<body class="bg-dark text-light">
    <header class="hero-section text-center text-light">
        <div class="container">
            <a href="/" class="text-decoration-none text-light">
                <h2 class="display-3 fw-bold text-skyblue"><i class="fa-solid fa-building"></i> Profil Perusahaan</h2>
                <p class="lead">Aplikasi sederhana untuk mengelola karyawan, perusahaan & layanan.</p>
            </a>
        </div>
        <section class="d-flex justify-content-center gap-3">
            <a href="{{ route('companies.index') }}" class="btn btn-lg btn-custom btn-outline-skyblue text-white shadow-sm">
                <i class="fa-solid fa-building me-2"></i> Daftar Perusahaan
            </a>
            <a href="{{ route('employees.index') }}" class="btn btn-lg btn-custom btn-outline-skyblue text-white shadow-sm">
                <i class="fa-solid fa-users me-2"></i> Karyawan
            </a>
            <a href="{{ route('services.index') }}" class="btn btn-lg btn-custom btn-outline-skyblue text-white shadow-sm">
                <i class="fa-solid fa-user-gear me-2"></i> Layanan
            </a>
        </section>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
