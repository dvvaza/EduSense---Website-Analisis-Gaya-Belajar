@extends('layouts.main')

@section('title', 'Profil - EduSense')

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
    
    .profile-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
        opacity: 0.8;
    }
    
    .profile-card {
        border: none;
        border-radius: var(--border-radius);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }
    
    .profile-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
    }
    
    .profile-card .card-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
        color: white;
        border: none;
        padding: 1.5rem;
        position: relative;
        overflow: hidden;
    }
    
    .profile-card .card-header h3 {
        position: relative;
        z-index: 2;
        margin: 0;
        font-weight: 600;
    }
    
    .profile-detail {
        padding: 1.5rem;
        background: white;
    }
    
    .detail-item {
        padding: 1rem 0;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        align-items: flex-start;
    }
    
    .detail-item:last-child {
        border-bottom: none;
    }
    
    .detail-label {
        font-weight: 600;
        color: #495057;
        min-width: 150px;
    }
    
    .detail-value {
        color: #6c757d;
        flex: 1;
    }
    
    .learning-style-badge {
        display: inline-block;
        padding: 0.35rem 0.8rem;
        border-radius: 50px;
        font-weight: 500;
        font-size: 0.85rem;
        text-transform: capitalize;
    }
    
    .btn-edit-profile {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
        border: none;
        padding: 0.6rem 1.5rem;
        font-weight: 500;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .btn-edit-profile:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
</style>
@endpush

@section('content')
<!-- Profile Header -->
<header class="about-hero mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold mb-3">Profil Pengguna</h1>
                <p class="lead mb-0">Kelola informasi profil dan preferensi akun Anda</p>
            </div>
        </div>
    </div>
</header>

<!-- Profile Content -->
<section class="container mb-5">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="profile-card">
                <div class="card-header text-white">
                    <h3><i class="fas fa-user-circle me-2"></i> Informasi Profil</h3>
                </div>
                <div class="profile-detail">
                    <div class="detail-item">
                        <div class="detail-label">
                            <i class="fas fa-user me-2 text-primary"></i>Nama Lengkap
                        </div>
                        <div class="detail-value">
                            {{ $user->full_name }}
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-label">
                            <i class="fas fa-envelope me-2 text-primary"></i>Alamat Email
                        </div>
                        <div class="detail-value">
                            {{ $user->email }}
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-label">
                            <i class="fas fa-at me-2 text-primary"></i>Username
                        </div>
                        <div class="detail-value">
                            {{ $user->username }}
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-label">
                            <i class="fas fa-graduation-cap me-2 text-primary"></i>Gaya Belajar
                        </div>
                        <div class="detail-value">
                            @if ($testResult)
                                @php
                                    $styleClass = [
                                        'visual' => 'bg-info',
                                        'auditory' => 'bg-success',
                                        'reading' => 'bg-primary',
                                        'kinesthetic' => 'bg-warning'
                                    ][strtolower($testResult->dominant_style)] ?? 'bg-secondary';
                                @endphp
                                <span class="learning-style-badge {{ $styleClass }} text-white">
                                    <i class="fas fa-{{ strtolower($testResult->dominant_style) == 'visual' ? 'eye' : (strtolower($testResult->dominant_style) == 'auditory' ? 'headphones' : (strtolower($testResult->dominant_style) == 'reading' ? 'book' : 'hands')) }} me-1"></i>
                                    {{ ucfirst($testResult->dominant_style) }}
                                </span>
                                <small class="text-muted ms-2">(Berdasarkan tes terakhir)</small>
                                <a href="{{ route('testResult') }}" class="btn btn-sm btn-outline-primary ms-3">
                                    <i class="fas fa-chart-bar me-1"></i> Lihat Hasil Tes
                                </a>
                            @else
                                <span class="text-muted">Belum melakukan tes</span>
                                <a href="{{ route('test') }}" class="btn btn-sm btn-outline-primary ms-3">
                                    <i class="fas fa-tasks me-1"></i>Ikuti Tes Sekarang
                                </a>
                            @endif
                        </div>
                    </div>
                    
                    <div class="profile-actions mt-4">
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary me-2">
                            <i class="fas fa-edit me-1"></i> Edit Profil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
