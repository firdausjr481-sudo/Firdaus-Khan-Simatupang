@extends('master')

@section('content')



    <div class="container">
        <div class="card shadow-lg border-0 rounded-4 mt-5">
            <div class="card-body p-4">
                <h3 class="mb-4 text-center">Detail Atraksi</h3>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Atraksi</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $attraction->name }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="4" readonly>{{ $attraction->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="destination" class="form-label">Destination</label>
                    <input type="text" class="form-control" id="destination" name="destination" value="{{ $attraction->destination->name }}" readonly>
                </div>

                <a href="/attractions" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>




@endsection