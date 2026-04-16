@extends('master')


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

<form action="{{ route('attractions.store') }}" method="POST">
    @csrf 
    <div class="col-12">
        <label for="destination_id" class="form-label">Desatination</label>
        <select id="destination_id" name="destination_id" class="form-control"  required>
            <option value="">Pilih Destinasi</option>
            @foreach ($destinations as $destination)
                <option value="{{ $destination->id }}" {{ old ('destination_id') ==
                $destination->id ? 'selected' : '' }}> 
                    {{ $destination->name }}

                </option>
            @endforeach
    </select>
    @error('destination_id')
        <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

    
    <label>Nama Atraksi</label>
    <input type ="text" name="name" class="form-control mb-3" required>
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <label>Deskripsi</label>
    <textarea name="description" class="form-control mb-3" ></textarea>
    @error('description')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection