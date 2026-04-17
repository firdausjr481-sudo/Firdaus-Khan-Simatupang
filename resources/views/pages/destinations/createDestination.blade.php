@extends("master")

@section("content")

@if ($errors->any()) {
    <div class="alert alert-danger">
        <ul class=" mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
}
    
@endif

<form action="{{route('destinations.store')}}" method="POST" class="form-floating" enctype="multipart/form-data">
    @csrf

    <div class=form-floating mb-3>
        <input type="text" class="form-control" id="floatingInput" placeholder="Image" name=
        "image" valeu="{{ old('image') }}" accept="jpg.jpeg.png">
            <label for="floatingInput">Gambar Destinasi</label>
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
    </div>

    
        <label for="name">Nama Destinasi</label>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
    </div>

<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">

            <h3 class="mb-4 text-center">Tambah Destinasi</h3>

            <form action="{{ route('destinations.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Nama -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Asia Heritage" required>
                    <label for="name">Nama Destinasi</label>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>

                <!-- Deskripsi -->
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="description" name="description" placeholder="Description" style="height: 120px;" required></textarea>
                    <label for="description">Deskripsi</label>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>

                <!-- Lokasi -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="location" name="location" placeholder="Pekanbaru" required>
                    <label for="location">Lokasi</label>
                    @error('location')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>

                <!-- Harga -->
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="ticket_price" name="ticket_price" placeholder="100000" required>
                    <label for="ticket_price">Harga Tiket</label>
                    @error('ticket_price')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>

                <!-- Jam Operasional -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="working_hours" name="working_hours" placeholder="08.00 - 17.00">
                    <label for="working_hours">Jam Operasional</label>
                    @error('working_hours')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>

                <!-- Hari Operasional -->
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="working_days" name="working_days" placeholder="Senin - Minggu">
                    <label for="working_days">Hari Operasional</label>
                    @error('working_days')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-between">
                    <a href="/destinations" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary px-4">Simpan</button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection