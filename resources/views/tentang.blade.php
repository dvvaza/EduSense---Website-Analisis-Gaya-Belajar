@extends('layouts.main')

@section('title', 'Tentang Kami - EduSense')

@push('styles')
<style>
    .about-hero {
        background: linear-gradient(135deg, #2e7d32, #43a047);
        color: white;
        padding: 5rem 0;
        margin-bottom: 3rem;
        position: relative;
        overflow: hidden;
    }
    
    .about-hero h1 {
        font-weight: 700;
        margin-bottom: 1rem;
    }
    
    .about-hero p.lead {
        font-size: 1.25rem;
        opacity: 0.9;
        max-width: 700px;
        margin: 0 auto;
    }
    
    .about-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        height: 100%;
        overflow: hidden;
    }
    
    .about-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    }
    
    .about-card .card-body {
        padding: 2rem;
    }
    
    .about-card .card-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        background: #e8f5e9;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        color: #2e7d32;
        font-size: 1.75rem;
    }
    
    .about-card h3 {
        color: #2c3e50;
        margin-bottom: 1rem;
        font-weight: 600;
    }
    
    .team-member {
        text-align: center;
        margin-bottom: 2rem;
    }
    
    .team-member-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin: 0 auto 1rem;
        border: 4px solid #e8f5e9;
    }
    
    .social-links {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-top: 1rem;
    }
    
    .social-links a {
        color: #2e7d32;
        font-size: 1.25rem;
        transition: color 0.3s ease;
    }
    
    .social-links a:hover {
        color: #1b5e20;
    }
</style>
@endpush

@section('content')

<!-- Hero Section -->
<section class="about-hero text-center">
    <div class="container mt-5">
        <h1 class="display-4 fw-bold">Tentang EduSense</h1>
        <p class="lead">Mengenal lebih dekat platform inovatif yang membantu siswa menemukan gaya belajar terbaik mereka untuk mencapai potensi maksimal dalam pendidikan.</p>
    </div>
</section>

<!-- About EduSense -->
<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 text-center mb-5">
            <h2 class="fw-bold mb-4">Apa itu EduSense?</h2>
            <p class="lead text-muted">EduSense adalah platform edukasi berbasis web yang dirancang untuk membantu siswa Sekolah Dasar mengenali gaya belajar mereka melalui tes VARK (Visual, Auditory, Reading/Writing, Kinesthetic). Dengan memahami gaya belajar yang paling efektif, siswa dapat mengoptimalkan proses belajar mereka dan mencapai hasil yang lebih baik.</p>
        </div>
    </div>
    
    <div class="row g-4 mb-5">
        <div class="col-md-6 col-lg-4">
            <div class="about-card h-100" data-aos="fade-up">
                <div class="card-body">
                    <div class="card-icon">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                    <h3>Visi</h3>
                    <p class="text-muted">Menjadi platform terdepan dalam membantu setiap siswa menemukan dan mengoptimalkan gaya belajar mereka, sehingga dapat mencapai potensi akademik terbaik.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
            <div class="about-card h-100" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body">
                    <div class="card-icon">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h3>Misi</h3>
                    <p class="text-muted">Menyediakan alat yang mudah digunakan untuk mengidentifikasi gaya belajar, memberikan rekomendasi pembelajaran yang personal, dan mendorong pendekatan belajar yang efektif.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
            <div class="about-card h-100" data-aos="fade-up" data-aos-delay="200">
                <div class="card-body">
                    <div class="card-icon">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h3>Nilai Kami</h3>
                    <p class="text-muted">Kami percaya pada pendidikan yang inklusif, personal, dan berpusat pada siswa. Setiap anak unik dan layak mendapatkan pendekatan belajar yang sesuai dengan kebutuhan mereka.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Tim Pengembang</h2>
            <p class="text-muted">Orang-orang di balik layar yang berdedikasi untuk meningkatkan pengalaman belajar siswa</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="team-member" data-aos="fade-up">
                    <img src="https://ui-avatars.com/api/?name=Admin+EduSense&background=2e7d32&color=fff&size=200" alt="Admin EduSense" class="team-member-img">
                    <h4>Admin EduSense</h4>
                    <p class="text-muted">Founder & Lead Developer</p>
                    <p>Seorang pengembang yang bersemangat dalam menciptakan solusi teknologi untuk pendidikan yang lebih baik.</p>
                    <div class="social-links">
                        <a href="#" target="_blank"><i class="bi bi-github"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Add more team members here if needed -->
            <!--
            <div class="col-md-6 col-lg-4">
                <div class="team-member" data-aos="fade-up" data-aos-delay="100">
                    <img src="path-to-image.jpg" alt="Team Member Name" class="team-member-img">
                    <h4>Team Member Name</h4>
                    <p class="text-muted">Position</p>
                    <p>Short bio or description about the team member.</p>
                    <div class="social-links">
                        <a href="#" target="_blank"><i class="bi bi-github"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Mengapa Memilih EduSense?</h2>
            <p class="text-muted">Keunggulan yang membuat kami berbeda</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="about-card h-100" data-aos="fade-up">
                    <div class="card-body text-center">
                        <div class="card-icon mx-auto">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h3>Metode Teruji</h3>
                        <p class="text-muted">Berdasarkan model VARK yang telah teruji secara ilmiah dalam dunia pendidikan.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="about-card h-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body text-center">
                        <div class="card-icon mx-auto">
                            <i class="bi bi-person-check-fill"></i>
                        </div>
                        <h3>Personal</h3>
                        <p class="text-muted">Rekomendasi yang disesuaikan dengan gaya belajar unik setiap siswa.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="about-card h-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body text-center">
                        <div class="card-icon mx-auto">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h3>Mudah Digunakan</h3>
                        <p class="text-muted">Antarmuka yang ramah pengguna untuk pengalaman belajar yang menyenangkan.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="about-card h-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-body text-center">
                        <div class="card-icon mx-auto">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3>Untuk Semua</h3>
                        <p class="text-muted">Dirancang untuk siswa dengan berbagai latar belakang dan kemampuan belajar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Siap Memulai Perjalanan Belajarmu?</h2>
        <p class="lead text-muted mb-4">Temukan gaya belajar terbaikmu dan optimalkan potensimu bersama EduSense.</p>
        <a href="{{ route('register.form') }}" class="btn btn-primary btn-lg px-4 me-2">Daftar Sekarang</a>
        <a href="{{ route('login.form') }}" class="btn btn-outline-primary btn-lg px-4">Masuk</a>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Initialize AOS animation
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            once: true
        });
    });
</script>
@endpush