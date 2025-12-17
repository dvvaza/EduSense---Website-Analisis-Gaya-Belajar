@extends('layouts.main')

@section('title', 'Beranda')

@push('styles')
    <style>
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.8;
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
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="hero-section py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-4 text-white">Temukan Gaya Belajarmu dengan <span
                            class="text-warning">EduSense</span></h1>
                    <p class="lead mb-4">Ketahui apakah kamu tipe Visual, Auditory, Reading/Writing, atau Kinesthetic untuk
                        pengalaman belajar yang lebih efektif dan menyenangkan!</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('test') }}" class="btn btn-light btn-lg px-4">
                            <i class="bi bi-pencil-square me-2"></i> Mulai Tes Sekarang
                        </a>
                        <a href="#fitur" class="btn btn-outline-light btn-lg px-4">
                            <i class="bi bi-info-circle me-2"></i> Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{ asset('images/hero-dashboard.jpg') }}" alt="Gaya Belajar"
                        class="img-fluid rounded-3 shadow-lg border border-white border-4" style="transform: rotate(2deg);">
                </div>
            </div>
        </div>
    </section>

    <!-- Fitur Section -->
    <section id="fitur" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3">Mengapa Memilih
                    Kami?</span>
                <h2 class="fw-bold mb-3">Fitur Unggulan EduSense</h2>
                <p class="text-muted lead">Platform komprehensif untuk memahami gaya belajar dengan lebih baik</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-clipboard-check"></i>
                        </div>
                        <h4 class="h5 mb-3">Quiz Interaktif</h4>
                        <p class="text-muted">Temukan gaya belajar Anda melalui serangkaian pertanyaan yang dirancang khusus
                            untuk mengidentifikasi preferensi belajar Anda.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4 class="h5 mb-3">Multi-Role Platform</h4>
                        <p class="text-muted">Dukungan untuk peran Guru, Siswa, dan Orang Tua dengan akses dan fitur yang
                            disesuaikan.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h4 class="h5 mb-3">Analisis Mendalam</h4>
                        <p class="text-muted">Dapatkan laporan komprehensif dengan rekomendasi belajar yang dipersonalisasi
                            berdasarkan hasil tes Anda.</p>
                    </div>
                </div>
            </div>
    </section>

    @push('styles')
        <style>
            /* Testimonial Styles */
            .testimonial-section {
                position: relative;
                overflow: hidden;
                padding: 5rem 0;
            }

            .testimonial-card {
                background: white;
                border-radius: var(--border-radius);
                padding: 2rem;
                height: 100%;
                position: relative;
                border: 1px solid rgba(0, 0, 0, 0.05);
                transition: var(--transition);
                box-shadow: var(--box-shadow);
            }

            .testimonial-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }

            .testimonial-card .testimonial-text {
                position: relative;
                font-style: italic;
                margin-bottom: 1.5rem;
                line-height: 1.7;
                color: var(--text-secondary);
            }

            .testimonial-author {
                display: flex;
                align-items: center;
                margin-top: 1.5rem;
                padding-top: 1.5rem;
                border-top: 1px solid rgba(0, 0, 0, 0.05);
            }

            .testimonial-avatar {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background: var(--primary-light);
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-weight: bold;
                font-size: 1.25rem;
                margin-right: 1rem;
            }

            .testimonial-info h5 {
                margin: 0;
                color: var(--text-primary);
                font-weight: 600;
            }

            .testimonial-info p {
                margin: 0;
                color: var(--text-secondary);
                font-size: 0.875rem;
            }

            /* Cara Kerja Styles */
            .step-card {
                background: white;
                border-radius: var(--border-radius);
                padding: 2rem;
                height: 100%;
                transition: var(--transition);
                border: 1px solid rgba(0, 0, 0, 0.05);
            }

            .step-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }

            .step-icon {
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

            .step-card:hover .step-icon {
                background: var(--primary-color);
                color: white;
                transform: scale(1.1);
            }

            /* CTA Section */
            .cta-section {
                background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-color) 100%);
                color: white;
                padding: 5rem 0;
                position: relative;
                overflow: hidden;
            }

            .cta-section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
                opacity: 0.6;
            }
        </style>
    @endpush

    <!-- Testimonial Section -->
    <section id="testimonial" class="testimonial-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3">Testimonial</span>
                <h2 class="fw-bold mb-3">Apa Kata Mereka Tentang EduSense</h2>
                <p class="text-muted lead">Lihat apa yang dikatakan pengguna tentang pengalaman mereka</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <p class="testimonial-text">EduSense sangat membantu saya dalam memahami gaya belajar anak didik
                            saya. Sekarang saya tahu cara mengajarnya dengan lebih efektif!</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">A</div>
                            <div class="testimonial-info">
                                <h5>Ibu Anita</h5>
                                <p>Guru SD</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <p class="testimonial-text">Sebagai siswa, saya merasa quiz ini membantu saya untuk lebih memahami
                            cara belajar yang sesuai dengan diri saya!</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">D</div>
                            <div class="testimonial-info">
                                <h5>Dwi</h5>
                                <p>Siswa SD</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card">
                        <p class="testimonial-text">Platform yang mudah digunakan. Sangat membantu dalam memantau
                            perkembangan siswa.</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">B</div>
                            <div class="testimonial-info">
                                <h5>Pak Budi</h5>
                                <p>Guru SD</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cara Kerja Section -->
    <section id="cara-kerja" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3">Proses</span>
                <h2 class="fw-bold mb-3">Cara Kerja EduSense</h2>
                <p class="text-muted lead">Hanya butuh 3 langkah mudah untuk menemukan gaya belajarmu</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-file-earmark-person"></i>
                        </div>
                        <h4 class="h5 mb-3">1. Daftar atau Masuk</h4>
                        <p class="text-muted">Pengguna dapat mendaftar atau masuk ke platform untuk memulai penggunaan.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                        <h4 class="h5 mb-3">2. Ikuti Quiz</h4>
                        <p class="text-muted">Pilih dan jawab pertanyaan yang ada untuk mengetahui gaya belajar kamu.</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>
                        <h4 class="h5 mb-3">3. Lihat Hasil</h4>
                        <p class="text-muted">Setelah quiz selesai, lihat hasil analisis gaya belajar dan tips belajar yang
                            cocok.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container position-relative">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h2 class="text-white mb-4">Siap Menemukan Gaya Belajarmu?</h2>
                    <p class="lead text-white-50 mb-4">Mulai perjalanan belajar yang lebih efektif dengan memahami gaya
                        belajarmu sendiri.</p>
                    <a href="{{ route('test') }}" class="btn btn-light btn-lg px-5">
                        <i class="bi bi-pencil-square me-2"></i> Mulai Tes Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection