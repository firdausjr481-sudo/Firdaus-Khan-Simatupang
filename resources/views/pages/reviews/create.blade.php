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

<form action="{{ route('reviews.store') }}" method="POST">
    @csrf 
    <div class="col-12">
        <label for="attraction_id" class="form-label">Attraction</label>
        <select id="attraction_id" name="attraction_id" class="form-control"  required>
            <option value="" style="color: rgba(0,0,0,0.2);">Select Attraction</option>
            @foreach ($attractions as $attraction)
                <option value="{{ $attraction->id }}" {{ old ('attraction_id') ==
                $attraction->id ? 'selected' : '' }}> 
                    {{ $attraction->name }}

                </option>
            @endforeach
    </select>
    @error('attraction_id')
        <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

    
    <label>Name</label>
    <input type ="text" name="reviewer_name" class="form-control mb-3" required>
    @error('reviewer_name')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <label>Comment</label>
    <textarea name="comment" class="form-control mb-3" ></textarea>
    @error('comment')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    {{-- <label>Rating</label>
    <input type="number" name="rating" class="form-control mb-3" min="1" max="5" required>
    @error('rating')
        <div class="text-danger">{{ $message }}</div>
    @enderror --}}

    <a href="/reviews" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Submit</button>
    
</form>

@endsection