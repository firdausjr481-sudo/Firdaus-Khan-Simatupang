@extends('master')

@section('content')
<div class="container py-5">

    <!-- Back Button -->
    <div class="mb-4">
        <a href="/users" class="btn btn-outline-secondary btn-sm rounded-pill">
            ← Kembali
        </a>
    </div>

    <!-- Card -->
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

        <!-- Header -->
        <div class="card-header bg-gradient bg-primary text-white py-4">
            <h4 class="mb-0 fw-semibold">
                👤 Detail User
            </h4>
        </div>

        <!-- Body -->
        <div class="card-body p-4">

            <div class="row g-4">

                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-primary">Nama</small>
                        <h5 class="mb-0 text-black">{{ $user->name }}</h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-primary">Email</small>
                        <h5 class="mb-0 text-black">{{ $user->email }}</h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-primary">User ID</small>
                        <h5 class="mb-0 text-black">#{{ $user->id }}</h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-primary">Dibuat</small>
                        <h5 class="mb-0 text-black">
                            {{ $user->created_at->format('d M Y, H:i') }}
                        </h5>
                    </div>
                </div>

            </div>

            <!-- Actions -->
            <div class="d-flex justify-content-end gap-2 mt-5">

                <a href="/users/{{ $user->id }}/edit"
                   class="btn btn-warning px-4 rounded-pill shadow-sm">
                    ✏️ Edit
                </a>

                <form action="/users/{{ $user->id }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger px-4 rounded-pill shadow-sm"
                        onclick="return confirm('Yakin hapus user ini?')">
                        🗑️ Hapus
                    </button>
                </form>

            </div>

        </div>
    </div>

</div>
@endsection