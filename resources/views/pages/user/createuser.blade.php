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


<div class="container mt-4">
    <form action="/users" method="post">
        @csrf

       <div class="form-floating mb-3">
    <input type="text" class="form-control" name="name">
    <label>Nama User</label>
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-floating mb-3">
    <input type="email" class="form-control" name="email">
    <label>Email</label>
    @error('email')
        <div class="text-danger">{{ $message }}</div>
</div>

<div class="form-floating mb-3">
    <input type="password" class="form-control" name="password">
    <label>Password</label>
    @error('password')
        <div class="text-danger">{{ $message }}</div>
</div>

            <a href="/users" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection