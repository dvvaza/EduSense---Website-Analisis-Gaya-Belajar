@extends('layouts.main')

@section('title', 'Kontak - EduSense')

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
    
    
    .icon-box {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: rgba(13, 110, 253, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
    }
    
    .contact-info .card {
        transition: transform 0.3s ease;
        height: 100%;
    }
    
    .contact-info .card:hover {
        transform: translateY(-5px);
    }
    
    .contact-form .form-control {
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
    }
    
    .contact-form .btn-primary {
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
    }
    
    .map-section iframe {
        border-radius: 0.5rem;
    }
    
    .cta-section {
        background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
    }
    
    .cta-section .btn-outline-light:hover {
        color: #0d6efd !important;
    }
    
    .feature-card {
        background: white;
        border-radius: var(--border-radius);
        padding: 2rem;
        height: 100%;
        transition: var(--transition);
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .feature-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: rgba(46, 125, 50, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 2rem;
        color: var(--primary-color);
        transition: var(--transition);
    }
    
    .feature-card:hover .feature-icon {
        background: var(--primary-color);
        color: white;
        transform: rotateY(180deg);
    }
</style>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endpush

@section('content')
<!-- Hero Section -->
<section class="about-hero text-center">
    <div class="container mt-5">
        <h1 class="display-4 fw-bold">Hubungi Kami</h1>
        <p class="lead">Kami siap membantu Anda. Hubungi tim kami untuk informasi lebih lanjut tentang layanan kami.</p>
    </div>
</section>

<!-- Contact Information -->
<section class="contact-info py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center text-center">
                <h2 class="fw-bold mb-5">Informasi Kontak</h2>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-map"></i>
                    </div>
                    <h4 class="h5 mb-3">Alamat Kantor</h4>
                    <p class="text-muted">Jl. Pendidikan No. 123<br>Kota Bandung, Jawa Barat<br>Indonesia 40123</p>
                </div>
            </div>            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-phone"></i>
                    </div>
                    <h4 class="h5 mb-3">Telepon</h4>
                    <p class="text-muted"> +62 123 4567 8901<br>Senin - Jumat: 09:00 - 17:00 WIB</p>
                </div>
            </div>            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h4 class="h5 mb-3">Email</h4>
                            <p class="text-muted mb-0">
                                <a href="mailto:info@edusense.com" class="text-decoration-none">info@edusense.com</a><br>
                                <a href="mailto:dukungan@edusense.com" class="text-decoration-none">dukungan@edusense.com</a>
                            </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="contact-form py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5">
                        <h2 class="text-center fw-bold mb-4">Kirim Pesan</h2>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Subjek</label>
                                    <input type="text" class="form-control" id="subject" required>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Pesan</label>
                                    <textarea class="form-control" id="message" rows="5" required></textarea>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg px-4">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<section class="map-section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Lokasi Kami</h2>
            <p class="lead text-muted">Kunjungi kantor kami untuk konsultasi langsung</p>
        </div>
        <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.923257746215!2d107.6084342141379!3d-6.902169195019147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64b7a1f7a0d%3A0x301e8b1ed0d1f1a!2sGedung%20Sate!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="about-hero text-white text-center">
    <div class="container">
        <h2 class="fw-bold mb-4">Punya Pertanyaan Lain?</h2>
        <p class="lead mb-4">Tim dukungan kami siap membantu Anda 24/7</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="https://wa.me/6281234567890" class="btn btn-light btn-lg px-4">
                <i class="fab fa-whatsapp me-2"></i> Chat WhatsApp
            </a>
            <a href="mailto:dukungan@edusense.com" class="btn btn-outline-light btn-lg px-4">
                <i class="fas fa-envelope me-2"></i> Email Kami
            </a>
        </div>
    </div>
</section>
@endsection