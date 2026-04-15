@extends('master')

@section('content')
<div class="container py-5">

    <div class="glass p-5 rounded-4 shadow-lg">

        <!-- Title -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-0">✏️ Edit User</h3>
            <a href="/users" class="btn btn-outline-light btn-sm rounded-pill">
                ← Kembali
            </a>
        </div>

        <!-- Form -->
        <form action="/users/{{$user->id}}" method="POST">
            @csrf
            @method('PUT')

            <div class="row g-4">

                <!-- Name -->
                <div class="col-md-6">
                    <label class="form-label text-white-50">Nama</label>
                    <input type="text" name="name"
                        class="form-control form-control-lg rounded-3 border-0 shadow-sm"
                        value="{{ $user->name }}" required>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <label class="form-label text-white-50">Email</label>
                    <input type="email" name="email"
                        class="form-control form-control-lg rounded-3 border-0 shadow-sm"
                        value="{{ $user->email }}" required>
                </div>

                <!-- Password -->
                <div class="col-md-12">
                    <label class="form-label text-white-50">
                        Password <small class="text-warning">(Kosongkan jika tidak diubah)</small>
                    </label>
                    <input type="password" name="password"
                        class="form-control form-control-lg rounded-3 border-0 shadow-sm"
                        placeholder="••••••••">
                </div>

            </div>

            <!-- Actions -->
            <div class="d-flex justify-content-end gap-3 mt-5">

                <a href="/users"
                   class="btn btn-outline-light px-4 rounded-pill">
                    ← Batal
                </a>

                <button type="submit"
                    class="btn btn-success px-4 rounded-pill shadow">
                    💾 Update User
                </button>

            </div>

        </form>

    </div>

</div>
@endsection