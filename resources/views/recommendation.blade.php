@extends('layouts.main')

@section('title', 'Rekomendasi Belajar - EduSense')

@push('styles')
    <style>
        .recommendation-header {
            background: linear-gradient(135deg, #2e7d32, #43a047);
            color: white;
            padding: 3rem 1rem;
            border-radius: 0 0 2rem 2rem;
            margin-bottom: 3rem;
            box-shadow: 0 4px 15px rgba(46, 125, 50, 0.2);
        }

        .recommendation-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .recommendation-title {
            font-size: 2.5rem;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .style-badge {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            display: inline-block;
            margin-top: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .content-box {
            font-size: 1.05rem;
            line-height: 1.7;
            color: #444;
        }

        /* Custom scrollbar for content if needed */
        .content-box::-webkit-scrollbar {
            width: 8px;
        }

        .content-box::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .content-box::-webkit-scrollbar-thumb {
            background: #2e7d32;
            border-radius: 4px;
        }

        .btn-back {
            transition: all 0.3s ease;
        }

        .btn-back:hover {
            transform: translateX(-5px);
        }
    </style>
@endpush

@section('content')
    <div class="min-vh-100 bg-light py-5">
        <!-- Header Section -->
        <div class="recommendation-header text-center">
            <div class="container">
                <h1 class="recommendation-title mb-2">Panduan Belajar Personal</h1>
                <p class="lead opacity-90">Dimaksimalkan untuk gaya belajar unik Anda</p>

                <div class="style-badge">
                    <i class="bi bi-star-fill me-2 text-warning"></i>
                    Dominan: {{ ucwords(str_replace('_', ' ', $result->dominant_style)) }}
                </div>
            </div>
        </div>

        <div class="container pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Main Content Card -->
                    <div class="card recommendation-card bg-white mb-5 animate__animated animate__fadeInUp">
                        <div class="card-body p-4 p-md-5">

                            @if($recommendation)
                                <div class="content-box">
                                    {!! $recommendation->content !!}
                                </div>
                            @else
                                <div class="alert alert-warning border-0 shadow-sm d-flex align-items-center">
                                    <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
                                    <div>
                                        <strong>Mohon Maaf.</strong>
                                        <p class="mb-0">Belum ada data rekomendasi spesifik untuk kategori ini.</p>
                                    </div>
                                </div>
                            @endif

                        </div>
                        <div class="card-footer bg-white border-top-0 p-4 text-center">
                            <div class="d-flex justify-content-center gap-3">
                                <a href="{{ route('testResult') }}"
                                    class="btn btn-outline-success btn-lg px-4 btn-back rounded-pill">
                                    <i class="bi bi-arrow-left me-2"></i>Kembali
                                </a>
                                <a href="{{ route('dashboard') }}"
                                    class="btn btn-success btn-lg px-4 rounded-pill shadow-sm">
                                    Dashboard <i class="bi bi-house-door ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Quote or Info -->
                    <div class="text-center text-muted small animate__animated animate__fadeIn"
                        style="animation-delay: 0.3s">
                        <p class="mb-0">"Knowing your learning style is the first step to unlocking your full potential."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection