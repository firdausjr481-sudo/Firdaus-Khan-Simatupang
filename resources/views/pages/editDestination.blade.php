@extends("master")

@section("content")

<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">

            <h3 class="mb-4 text-center">Edit Destinasi</h3>

            <form action="/destinations/{{ $destination->id }}/update" method="POST">
                @csrf
                @method('PUT')

                <!-- Nama -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ $destination->name }}" placeholder="Nama" required>
                    <label for="name">Nama Destinasi</label>
                </div>

                <!-- Deskripsi -->
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="description" name="description"
                        style="height: 120px;" required>{{ $destination->description }}</textarea>
                    <label for="description">Deskripsi</label>
                </div>

                <!-- Lokasi -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="location" name="location"
                        value="{{ $destination->location }}" placeholder="Lokasi" required>
                    <label for="location">Lokasi</label>
                </div>

                <!-- Harga -->
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="ticket_price" name="ticket_price"
                        value="{{ $destination->ticket_price }}" placeholder="Harga" required>
                    <label for="ticket_price">Harga Tiket</label>
                </div>

                <!-- Jam Operasional -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="working_hours" name="working_hours"
                        value="{{ $destination->working_hours }}" placeholder="Jam">
                    <label for="working_hours">Jam Operasional</label>
                </div>

                <!-- Hari Operasional -->
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="working_days" name="working_days"
                        value="{{ $destination->working_days }}" placeholder="Hari">
                    <label for="working_days">Hari Operasional</label>
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-between">
                    <a href="/destinations" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-warning px-4">Update</button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection