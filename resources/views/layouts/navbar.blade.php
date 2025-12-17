<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="{{ route('dashboard') }}">EduSense</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}#beranda">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('tentang') }}#tentang">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}#kontak">Kontak</a></li>
                @auth
                <!-- Link Profil Pengguna -->
                    <li class="nav-item">
                        <a href="{{ route('profile.show') }}" class="btn btn-primary ms-3">Profil</a>
                    </li>
                    <!-- Link Logout (jika ada) -->
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="btn btn-outline-danger ms-3">Logout</a>
                    </li>
                @else
                    <li class="nav-item"><a href="{{ route('login.form') }}" class="btn btn-outline-primary ms-3">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register.form') }}" class="btn btn-primary ms-2">Register</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
