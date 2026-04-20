@extends('master')

@section('content')
@if($destination)
<div class="container py-5">

    <div class="mb-4">
        <a href="{{ url()->previous() }}" class="btn btn-outline-info btn-sm shadow-sm px-3 rounded-pill">
            <i class="bi bi-arrow-left me-2"></i> Kembali ke Daftar
        </a>
    </div>

    <div class="row g-4">

        <!-- LEFT CONTENT -->
        <div class="col-lg-8">
            <div class="card custom-card border-0 shadow-sm rounded-4 overflow-hidden">

                <img src="{{ asset('storage/images/' . $destination->image) }}" 
                     alt="{{ $destination->name }}" 
                     class="card-img-top img-destination">

                <div class="card-body p-4 p-md-5">

                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h1 class="fw-bold mb-0 title-text">{{ $destination->name }}</h1>
                        <span class="badge badge-price px-3 py-2 rounded-pill">
                            Rp {{ number_format($destination->ticket_price, 0, ',', '.') }}
                        </span>
                    </div>

                    <p class="desc-text mb-4">
                        {{ $destination->description }}
                    </p>

                    <hr class="divider my-4">

                    <div class="row g-4">

                        <!-- LOKASI -->
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-box me-3">
                                    <img src="https://png.pngtree.com/png-vector/20230106/ourmid/pngtree-flat-red-location-sign-png-image_6553065.png" class="icon-img">
                                </div>
                                <div>
                                    <small class="label-text d-block">Lokasi</small>
                                    <span class="info-text">{{ $destination->location }}</span>
                                </div>  
                            </div>
                        </div>

                        <!-- WAKTU -->
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-box me-3">
                                    <img src="https://png.pngtree.com/png-vector/20250620/ourmid/pngtree-time-clock-icon-collection-flat-style-monochrome-alarm-vector-png-image_16552515.png" class="icon-img">
                                </div>
                                <div>
                                    <small class="label-text d-block">Waktu Operasional</small>
                                    <span class="info-text">{{ $destination->working_hours }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDEBAR -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 bg-light p-4">
                <h5 class="fw-bold mb-3 border-bottom pb-2 text-primary">Informasi Tambahan</h5>
                
                <div class="mb-3">
                    <label class="text-muted small d-block">Hari Kerja:</label>
                    <p class="fw-bold m-0">
                        <i class="bi bi-calendar-check me-2 text-primary"></i>
                        {{ $destination->working_days }}
                    </p>
                </div>

                <div class="mb-3">
                    <label class="text-muted small d-block">Harga Tiket:</label>
                    <p class="fw-bold fs-4 text-success m-0">
                        Rp {{ number_format($destination->ticket_price, 0, ',', '.') }}
                    </p>
                    <small class="text-muted">*Harga dapat berubah sewaktu-waktu</small>
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
/* CARD */
.custom-card {
    background-color: #ffffff;
}

/* IMAGE */
.img-destination {
    width: 100%;
    height: 400px;
    object-fit: cover;
    object-position: center;
}

/* TITLE */
.title-text {
    color: #2c3e50;
}

/* DESCRIPTION */
.desc-text {
    color: #6c757d;
    line-height: 1.8;
    font-size: 1.05rem;
}

/* LABEL */
.label-text {
    color: #9aa0a6;
}

/* INFO TEXT */
.info-text {
    color: #34495e;
    font-weight: 500;
}

/* DIVIDER */
.divider {
    border-color: #e9ecef;
}

/* ICON */
.icon-box {
    width: 50px;
    height: 50px;
    background-color: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
}

.icon-img {
    width: 28px;
    height: 28px;
}

/* BADGE */
.badge-price {
    background-color: #e6f4ea;
    color: #2e7d32;
    font-weight: 600;
}
</style>

@endsection