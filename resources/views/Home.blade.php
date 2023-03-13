<html lang="en">
<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Test</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">SMAN 1 KERINCI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-3 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Program Sekolah
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Program Akademik</a></li>
                            <li><a class="dropdown-item" href="#">Program Penguatan Pendidikan Karakter (PPK)</a></li>
                            <li><a class="dropdown-item" href="#">Program Sekolah Adiwiyata</a></li>
                            <li><a class="dropdown-item" href="#">Program Gerakan Literasi Sekolah (GLS)</a></li>
                            <li><a class="dropdown-item" href="#">Pendidikan Keluarga</a></li>
                        </ul>
                    </li>
              
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          PTK dan Siswa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Guru</a></li>
                            <li><a class="dropdown-item" href="#">Tenaga Kependidikan</a></li>
                            <li><a class="dropdown-item" href="#">Prestasi Guru</a></li>
                            <li><a class="dropdown-item" href="#">Prestasi Siswa</a></li>
                            <li><a class="dropdown-item" href="#">Alumni</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" aria-current="page" href="#">Sarana dan Prasarana</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Ekstrakulikuler
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Osis</a></li>
                            <li><a class="dropdown-item" href="#">Pramuka</a></li>
                            <li><a class="dropdown-item" href="#">Seni</a></li>
                            <li><a class="dropdown-item" href="#">Olah Raga</a></li>
                            <li><a class="dropdown-item" href="#">PMR / UKS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>