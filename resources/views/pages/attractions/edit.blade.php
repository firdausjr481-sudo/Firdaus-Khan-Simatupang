@extends("master")
@section('content')

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

<form action="{{ route('attractions.update', $attraction->id) }}" method="POST">
                @csrf
                @method('PUT')
                 <!-- Nama -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ $attraction->name }}" placeholder="Nama" required>
                    <label for="name">Nama Destinasi</label>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>

                <!-- Deskripsi -->
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="attraction" name="description"
                        style="height: 120px;" required>{{ $attraction->description }}</textarea>
                    <label for="attraction">Deskripsi</label>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-between">
                    <a href="/attractions" class="btn btn-secondary">Kembali</a>
                    <button  type="submit" class="btn btn-warning px-4">Submit</button>
                </div>

            
@endsection

