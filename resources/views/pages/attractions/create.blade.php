@extends('master')


@section('content')
<form action="{{ route('attractions.store') }}" method="POST">
    @csrf <label>Nama Atraksi</label>
    <input type ="text" name="name" class="form-control mb-3" required>
    <label>Deskripsi</label>
    <textarea name="description" class="form-control mb-3" ></textarea>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection