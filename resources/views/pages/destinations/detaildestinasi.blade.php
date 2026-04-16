@extends('master')

@section('content')
@if($destination)
<div class="container py-5">
    <div class="mb-4">
        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-sm shadow-sm px-3 rounded-pill">
            <i class="bi bi-arrow-left me-2"></i> Kembali ke Daftar
        </a>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div style="height: 300px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);" class="d-flex align-items-center justify-content-center text-white">
                    <i class="bi bi-image-alt" style="font-size: 5rem; opacity: 0.3;"></i>
                </div>
                
                <div class="card-body p-4 p-md-5">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h1 class="fw-bold text-dark mb-0">{{ $destination->name }}</h1>
                        <span class="badge bg-success px-3 py-2 rounded-pill">
                            Rp {{ number_format($destination->ticket_price, 0, ',', '.') }}
                        </span>
                    </div>

                    <p class="text-secondary mb-4" style="line-height: 1.8; font-size: 1.1rem;">
                        {{ $destination->description }}
                    </p>

                    <hr class="my-4 opacity-25">

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-primary-subtle text-primary p-3 rounded-3 me-3">
                                    <i class="bi bi-geo-alt-fill fs-4"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Lokasi</small>
                                    <span class="fw-semibold">{{ $destination->location }}</span>
                                </div>  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-warning-subtle text-warning p-3 rounded-3 me-3">
                                    <i class="bi bi-clock-fill fs-4"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Waktu Operasional</small>
                                    <span class="fw-semibold">{{ $destination->working_hours }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 bg-light p-4">
                <h5 class="fw-bold mb-3 border-bottom pb-2 text-primary">Informasi Tambahan</h5>
                
                <div class="mb-3">
                    <label class="text-muted small d-block">Hari Kerja:</label>
                    <p class="fw-bold m-0"><i class="bi bi-calendar-check me-2 text-primary"></i>{{ $destination->working_days }}</p>
                </div>

                <div class="mb-3">
                    <label class="text-muted small d-block">Harga Tiket:</label>
                    <p class="fw-bold fs-4 text-success m-0">Rp {{ number_format($destination->ticket_price, 0, ',', '.') }}</p>
                    <small class="text-muted font-italic">*Harga dapat berubah sewaktu-waktu</small>
                </div>

                <button class="btn btn-primary w-100 py-3 rounded-3 fw-bold mt-2 shadow-sm">
                    Pesan Tiket Sekarang
                </button>
            </div>
        </div>
    </div>
</div>
@else
    <div class="container py-5">
        <div class="alert alert-warning">Destinasi tidak ditemukan</div>
    </div>
@endif

<style>
    /* Styling khusus untuk memberikan kesan kedalaman */
    .icon-box {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .bg-primary-subtle { background-color: #e7f1ff; }
    .bg-warning-subtle { background-color: #fff3cd; }
    .rounded-4 { border-radius: 1.25rem !important; }
</style>
@endsection