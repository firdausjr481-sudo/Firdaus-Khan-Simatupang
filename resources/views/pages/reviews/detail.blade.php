@extends('master')

@section('content')



    <div class="container">
        <div class="card shadow-lg border-0 rounded-4 mt-5">
            <div class="card-body p-4">
                <h3 class="mb-4 text-center">Detail</h3>

                <div class="mb-3">
                    <label for="reviewer_name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="reviewer_name" name="reviewer_name" value="{{ $review->reviewer_name }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="comment" class="form-label">Comment</label>
                    <textarea class="form-control" id="comment" name="comment" rows="4" readonly>{{ $review->comment }}</textarea>
                </div>

                {{-- <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" value="{{ $review->rating }}" readonly>
                </div> --}}

                <a href="/reviews" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>




@endsection