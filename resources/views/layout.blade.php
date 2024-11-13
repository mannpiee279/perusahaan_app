<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body::-webkit-scrollbar{
            display:none;
        }
        body{
            overflow: auto;
        }
        .bg-darkblue {
            background-color: #2838c9
        }
        .text-skyblue {
            color: #00aaff;
        }
        .sidebar {
            background: linear-gradient(to bottom, #000000, #002244);
            min-height: 100vh;
        }
        .sidebar .nav-link {
            color: #00aaff;
            transition: color 0.3s ease;
        }
        .sidebar .nav-link:hover {
            color: #ffffff;
        }
        .content-wrapper {
            background-color: #1a1a1a;
            border-radius: 8px;
            padding: 2rem;
        }
    </style>
</head>
<nav class="navbar navbar-dark bg-darkblue sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <i class="fa-solid fa-building d-inline-block align-text-top mr-2"></i> Profil Perusahaan
      </a>
    </div>
  </nav>
<body class="bg-dark text-light">

    <div class="d-flex">
        <div class="sidebar p-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('companies.index') }}" class="nav-link">
                        <i class="fas fa-home me-2"></i> Data Perusahaan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('employees.index') }}" class="nav-link">
                        <i class="fas fa-users me-2"></i> Karyawan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('services.index') }}" class="nav-link">
                        <i class="fas fa-cog me-2"></i> Layanan
                    </a>
                </li>
                <button class="btn btn-outline-dark btn-sm mt-4"><b>Made by Laravel 10</b></button>
            </ul>
        </div>

        <div class="flex-grow-1 p-4">
            <div class="content-wrapper text-light shadow">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
