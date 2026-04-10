@extends('master')

@section('content')
<style>
    /* Header dengan Background Image */
    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
                    url('https://assets.promediateknologi.id/crop/0x0:0x0/1200x0/webp/photo/p3/27/2024/03/04/827ed9f5-53c7-4f0e-9bcf-2101aec1cc44-14777067.jpg'); /* Ganti link ini dengan path gambar kamu */
        background-size: cover;
        background-position: center;
        height: 400px;
        border-radius: 0 0 30px 30px;
        display: flex;
        align-items: flex-end;
        padding-bottom: 50px;
        color: white;
    }
    
    .main-card {
        margin-top: -80px; /* Membuat card agak naik ke atas gambar */
        border-radius: 20px;
        border: none;
    }

    .icon-circle {
        width: 45px;
        height: 45px;
        background: #f8f9fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0d6efd;
    }
</style>

<div class="hero-section shadow-lg">
    <div class="container">
        <a href="{{ url()->previous() }}" class="btn btn-light btn-sm rounded-pill px-3 mb-4 shadow-sm text-dark fw-bold">
            <i class="bi bi-arrow-left me-2"></i> Kembali
        </a>
        <h1 class="display-4 fw-bold">{{ $destination->name }}</h1>
        <p class="fs-5 opacity-75"><i class="bi bi-geo-alt-fill me-2"></i>{{ $destination->location }}</p>
    </div>
</div>

<div class="container pb-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="card main-card shadow-sm mb-4">
                <div class="card-body p-4 p-md-5">
                    <h4 class="fw-bold mb-4">Tentang Destinasi</h4>
                    <p class="text-muted fs-5" style="line-height: 1.8;">
                        {{ $destination->description }}
                    </p>
                    
                    <hr class="my-5 opacity-25">
                    
                    <div class="row g-4">
                        <div class="col-md-6 d-flex align-items-start">
                            <div class="icon-circle me-3 shadow-sm"><i class="bi bi-clock-history"></i></div>
                            <div>
                                <small class="text-muted d-block">Jam Operasional</small>
                                <span class="fw-bold">{{ $destination->working_hours }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-start">
                            <div class="icon-circle me-3 shadow-sm"><i class="bi bi-calendar-event"></i></div>
                            <div>
                                <small class="text-muted d-block">Hari Buka</small>
                                <span class="fw-bold">{{ $destination->working_days }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card main-card shadow-sm border-0 bg-primary text-white p-2">
                <div class="card-body text-center p-4">
                    <p class="mb-1 opacity-75">Harga Tiket Masuk</p>
                    <h2 class="fw-bold mb-4">Rp {{ number_format($destination->ticket_price, 0, ',', '.') }}</h2>
                    <button class="btn btn-light text-primary w-100 fw-bold py-3 rounded-3 shadow">
                        <i class="bi bi-ticket-perforated me-2"></i> Pesan Sekarang
                    </button>
                    <small class="d-block mt-3 opacity-75">* Syarat dan Ketentuan Berlaku</small>
                </div>
            </div>
            
            <div class="card mt-4 border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h6 class="fw-bold mb-3">Tips Berkunjung</h6>
                    <ul class="list-unstyled small text-muted mb-0">
                        <li class="mb-2">✅ Bawa kamera terbaikmu</li>
                        <li class="mb-2">✅ Datang lebih awal agar tidak ramai</li>
                        <li>✅ Gunakan pakaian yang nyaman</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection