@extends('master')

@section('content')
<div class="container py-5">

    <div class="mb-3">
        <a href="/users" class="btn btn-secondary btn-sm">
            ← Kembali
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detail User</h4>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <strong>Nama:</strong>
                <p>{{ $user->name }}</p>
            </div>

            <div class="mb-3">
                <strong>Email:</strong>
                <p>{{ $user->email }}</p>
            </div>

            <div class="mb-3">
                <strong>User ID:</strong>
                <p>{{ $user->id }}</p>
            </div>

            <div class="mb-3">
                <strong>Dibuat:</strong>
                <p>{{ $user->created_at }}</p>
            </div>

            <div class="d-flex gap-2 mt-4">
                <a href="/users/{{ $user->id }}/edit" class="btn btn-warning">
                    Edit
                </a>

                <form action="/users/{{ $user->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"
                        onclick="return confirm('Yakin hapus user ini?')">
                        Hapus
                    </button>
                </form>
            </div>

        </div>
    </div>

</div>
@endsection