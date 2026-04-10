@extends("master")

@section('content')
<div class="container py-5">

    <!-- Header + Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary mb-0">Daftar Destinasi Wisata</h2>
        <a href="/destinations/create" class="btn btn-success px-4">
            + Tambah Destinasi
        </a>
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle text-center">
            <thead class="table-success">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Lokasi</th>
                    <th>Harga</th>
                    <th>Jam Operasional</th>
                    <th>Hari Operasional</th>
                    <th style="min-width: 150px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($destinations as $d)
                <tr>
                    <td>#{{ $d->id }}</td>
                    <td>{{ $d->name }}</td>
                    <td class="text-start">{{ Str::limit($d->description, 70) }}</td>
                    <td>{{ $d->location }}</td>
                    <td>Rp {{ number_format($d->ticket_price, 0, ',', '.') }}</td>
                    <td>{{ $d->working_hours }}</td>
                    <td>{{ $d->working_days }}</td>
                    <td>
                        <a href="/destinations/{{ $d-id }}/edit" class="btn btn-warning">Edit</a>
                        <a href="/detaildestinasi/{{ $d->id }}" class="btn btn-info btn-sm me-1" title="Lihat Detail">
                            Detail
                        </a>
                        <form action="/destination/{{ $d->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus {{ $d->name }}?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Hapus Destinasi">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center text-muted py-4">
                        Belum ada data destinasi.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection

@php
use Illuminate\Support\Str;
@endphp