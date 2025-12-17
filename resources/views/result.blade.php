@extends('layouts.main')

@section('title', 'Hasil Tes - EduSense')

@push('styles')
    <style>
        .result-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            overflow: hidden;
        }

        .result-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .result-header {
            background: linear-gradient(135deg, #2e7d32, #43a047);
            color: white;
            padding: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .result-header h1 {
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .result-badge {
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            display: inline-block;
            font-size: 1.1rem;
            font-weight: 600;
            margin-top: 1rem;
        }

        .style-card {
            border-left: 4px solid #2e7d32;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }

        .style-card.dominant {
            border-left: 4px solid #ffc107;
            background-color: #f8f9fa;
        }

        .style-card .card-body {
            padding: 1.5rem;
        }

        .style-card h5 {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
            color: #2c3e50;
        }

        .style-card .icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #e8f5e9;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: #2e7d32;
        }

        .style-card.dominant .icon {
            background: #fff8e1;
            color: #ff8f00;
        }

        .progress {
            height: 10px;
            border-radius: 5px;
            background-color: #e9ecef;
            margin-top: 0.5rem;
        }

        .progress-bar {
            border-radius: 5px;
            font-size: 0.75rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 10px;
            transition: width 1.5s ease-in-out;
        }

        .recommendation-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 1.5rem;
            margin-top: 2rem;
        }

        .recommendation-card h4 {
            color: #2e7d32;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .recommendation-card ul {
            padding-left: 1.5rem;
            margin-bottom: 0;
        }

        .recommendation-card li {
            margin-bottom: 0.5rem;
        }
    </style>
@endpush

@section('content')
    <div class="pt-5">
        <div class="result-card mt-5">
            <div class="result-header">
                <div class="container">
                    <h1 class="display-5 fw-bold">Hasil Tes Gaya Belajar</h1>
                    <p class="lead mb-0">Temukan gaya belajarmu yang unik dan mulailah perjalanan belajarmu dengan lebih
                        efektif!</p>
                    <div class="result-badge">
                        <i class="bi bi-award-fill me-2"></i>Gaya Belajar Dominan: {{ ucfirst($dominant_style) }}
                    </div>
                </div>
            </div>

            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h4 class="mb-4">Detail Hasil Tes</h4>

                        <!-- Visual Style -->
                        <div class="card style-card {{ $dominant_style === 'visual' ? 'dominant' : '' }} mb-4"
                            data-aos="fade-up">
                            <div class="card-body">
                                <h5>
                                    <span class="icon">
                                        <i class="bi bi-eye-fill"></i>
                                    </span>
                                    Gaya Belajar Visual
                                </h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Kemahiran: {{ $percentages['visual'] }}%</span>
                                    <span
                                        class="badge bg-soft-{{ $dominant_style === 'visual' ? 'warning' : 'success' }} text-{{ $dominant_style === 'visual' ? 'dark' : 'success' }}">
                                        {{ $percentages['visual'] }}%
                                    </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-{{ $dominant_style === 'visual' ? 'warning' : 'success' }}"
                                        role="progressbar" style="width: {{ $percentages['visual'] }}%"
                                        aria-valuenow="{{ $percentages['visual'] }}" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Auditory Style -->
                        <div class="card style-card {{ $dominant_style === 'auditory' ? 'dominant' : '' }} mb-4"
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <h5>
                                    <span class="icon">
                                        <i class="bi bi-ear-fill"></i>
                                    </span>
                                    Gaya Belajar Auditory
                                </h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Kemahiran: {{ $percentages['auditory'] }}%</span>
                                    <span
                                        class="badge bg-soft-{{ $dominant_style === 'auditory' ? 'warning' : 'success' }} text-{{ $dominant_style === 'auditory' ? 'dark' : 'success' }}">
                                        {{ $percentages['auditory'] }}%
                                    </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-{{ $dominant_style === 'auditory' ? 'warning' : 'success' }}"
                                        role="progressbar" style="width: {{ $percentages['auditory'] }}%"
                                        aria-valuenow="{{ $percentages['auditory'] }}" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reading/Writing Style -->
                        <div class="card style-card {{ $dominant_style === 'reading_writing' ? 'dominant' : '' }} mb-4"
                            data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <h5>
                                    <span class="icon">
                                        <i class="bi bi-book-fill"></i>
                                    </span>
                                    Gaya Belajar Reading/Writing
                                </h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Kemahiran: {{ $percentages['reading_writing'] }}%</span>
                                    <span
                                        class="badge bg-soft-{{ $dominant_style === 'reading_writing' ? 'warning' : 'primary' }} text-{{ $dominant_style === 'reading_writing' ? 'dark' : 'primary' }}">
                                        {{ $percentages['reading_writing'] }}%
                                    </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-{{ $dominant_style === 'reading_writing' ? 'warning' : 'primary' }}"
                                        role="progressbar" style="width: {{ $percentages['reading_writing'] }}%"
                                        aria-valuenow="{{ $percentages['reading_writing'] }}" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kinesthetic Style -->
                        <div class="card style-card {{ $dominant_style === 'kinesthetic' ? 'dominant' : '' }} mb-5"
                            data-aos="fade-up" data-aos-delay="300">
                            <div class="card-body">
                                <h5>
                                    <span class="icon">
                                        <i class="bi bi-hand-index-thumb-fill"></i>
                                    </span>
                                    Gaya Belajar Kinesthetic
                                </h5>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Kemahiran: {{ $percentages['kinesthetic'] }}%</span>
                                    <span
                                        class="badge bg-soft-{{ $dominant_style === 'kinesthetic' ? 'warning' : 'info' }} text-{{ $dominant_style === 'kinesthetic' ? 'dark' : 'info' }}">
                                        {{ $percentages['kinesthetic'] }}%
                                    </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-{{ $dominant_style === 'kinesthetic' ? 'warning' : 'info' }}"
                                        role="progressbar" style="width: {{ $percentages['kinesthetic'] }}%"
                                        aria-valuenow="{{ $percentages['kinesthetic'] }}" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recommendations -->
                        <div class="recommendation-card" data-aos="fade-up" data-aos-delay="400">
                            <h4 class="d-flex align-items-center">
                                <i class="bi bi-lightbulb-fill me-2"></i>
                                Rekomendasi Belajar untuk Kamu
                            </h4>

                            @if($dominant_style == 'visual')
                                <p>Kamu cenderung belajar lebih baik melalui gambar, diagram, dan tampilan visual. Berikut
                                    beberapa tips untukmu:</p>
                                <ul>
                                    <li>Gunakan mind map atau diagram untuk mencatat informasi</li>
                                    <li>Tonton video pembelajaran dan presentasi visual</li>
                                    <li>Gunakan warna-warna untuk mengkategorikan informasi</li>
                                    <li>Buat sketsa atau gambar untuk menjelaskan konsep</li>
                                </ul>
                            @elseif($dominant_style == 'auditory')
                                <p>Kamu belajar paling efektif melalui pendengaran. Berikut beberapa saran untuk meningkatkan
                                    belajarmu:</p>
                                <ul>
                                    <li>Dengarkan rekaman kuliah atau penjelasan</li>
                                    <li>Diskusikan materi dengan teman atau kelompok belajar</li>
                                    <li>Gunakan lagu atau irama untuk mengingat informasi</li>
                                    <li>Rekam dirimu sendiri saat membaca catatan</li>
                                </ul>
                            @elseif($dominant_style == 'reading_writing')
                                <p>Kamu belajar paling baik melalui teks tertulis. Berikut cara memaksimalkan gaya belajarmu:
                                </p>
                                <ul>
                                    <li>Buat catatan terperinci dan ringkasan</li>
                                    <li>Baca ulang materi berkali-kali</li>
                                    <li>Tulis ulang informasi dengan kata-katamu sendiri</li>
                                    <li>Buat daftar, poin-poin penting, dan garis besar</li>
                                </ul>
                            @else
                                <p>Kamu adalah pembelajar kinestetik yang belajar paling baik melalui praktik langsung. Berikut
                                    tips untukmu:</p>
                                <ul>
                                    <li>Lakukan eksperimen atau demonstrasi praktis</li>
                                    <li>Gunakan gerakan fisik saat belajar</n>li>
                                    <li>Ambil istirahat pendek secara teratur untuk bergerak</li>
                                    <li>Gunakan objek fisik atau model untuk memahami konsep</li>
                                </ul>
                            @endif

                            <div class="text-center mt-4">
                                <a href="{{ route('recommendation') }}" class="btn btn-success me-2">
                                    <i class="bi bi-lightbulb me-1"></i> Detail Rekomendasi
                                </a>
                                <a href="{{ route('dashboard') }}" class="btn btn-outline-primary me-2">
                                    <i class="bi bi-house-door-fill me-1"></i> Kembali ke Beranda
                                </a>
                                <a href="{{ route('test') }}" class="btn btn-primary">
                                    <i class="bi bi-arrow-repeat me-1"></i> Ulangi Tes
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Animate progress bars on scroll into view
            document.addEventListener('DOMContentLoaded', function () {
                const progressBars = document.querySelectorAll('.progress-bar');

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const progressBar = entry.target;
                            const width = progressBar.getAttribute('aria-valuenow');
                            progressBar.style.width = '0%';

                            // Small delay to ensure the initial width is set before animating
                            setTimeout(() => {
                                progressBar.style.width = width + '%';
                            }, 100);

                            // Unobserve after animation
                            observer.unobserve(progressBar);
                        }
                    });
                }, { threshold: 0.5 });

                progressBars.forEach(bar => observer.observe(bar));
            });
        </script>
    @endpush

@endsection