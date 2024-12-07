<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        /* Warna latar belakang header */
        .bg-custom {
            background-color: #8B0000 !important; 
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1); 
        }
        /* Navigasi aktif */
        .nav-link.active {
            font-weight: bold;
        }
        /* Dropdown menu styling */
        .dropdown-menu {
            background-color: #8B0000; 
        }
        .dropdown-item:hover {
            background-color: #A00000; 
        }
        /* Styling untuk navbar brand */
        .navbar-brand {
            color: white !important; 
            font-weight: bold; 
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Header (Navbar) -->
        <nav class="navbar navbar-expand-lg navbar-light bg-custom w-100">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">EAD EDUCATION</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="dosenDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dosen</a>
                            <ul class="dropdown-menu" aria-labelledby="dosenDropdown">
                                <li><a class="dropdown-item text-white" href="{{ route('dosen.create') }}">Tambah Dosen</a></li>
                                <li><a class="dropdown-item text-white" href="{{ route('dosen.index') }}">Daftar Dosen</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="mahasiswaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mahasiswa</a>
                            <ul class="dropdown-menu" aria-labelledby="mahasiswaDropdown">
                                <li><a class="dropdown-item text-white" href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a></li>
                                <li><a class="dropdown-item text-white" href="{{ route('mahasiswa.index') }}">Daftar Mahasiswa</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Konten utama -->
        <div class="col-md-12">
            @yield('content') <!-- Bagian konten yang dinamis -->
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
