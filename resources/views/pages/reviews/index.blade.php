@extends('master')

@section('content')
<div class="glass p-4">

    {{-- ALERT SUCCESS --}}
    @if (session('success'))
        <div class="alert alert-success mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- HEADER -->
    <div class="row align-items-center mb-4">

        <!-- TITLE -->
        <div class="col-md-4">
            <h2 class="fw-bold text-primary mb-0">
                Data Reviews
            </h2>
        </div>

        <!-- SEARCH -->
        <div class="col-md-4">
            <form method="GET" action="/reviews" class="d-flex">
                <input type="text" name="search"
                    class="form-control me-2"
                    placeholder="Search...">
                <button class="btn btn-secondary">
                    Search
                </button>
            </form>
        </div>

        <!-- BUTTON -->
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="/reviews/create" class="btn btn-success">
                + Add Review
            </a>
        </div>

    </div>

    <!-- TABLE -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center align-middle">

            <thead class="table-dark">
                <tr>
                    <th style="width: 80px;">Id</th>
                    <th>Reviewer Name</th>
                    <th>Comment</th>
                    {{-- <th>Rating</th> --}}
                    <th style="width: 220px;">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($reviews as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td class="fw-semibold">{{ $d->reviewer_name }}</td>
                    <td>{{ $d->comment }}</td>
                    {{-- <td>{{ $d->rating }}</td> --}}
                 

                    <td>
                        <div class="d-flex justify-content-center gap-2">

                            <!-- DELETE -->
                            <form action="{{ route('reviews.destroy', $d->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus {{$d->reviewer_name}}?')">
                                    Delete
                                </button>
                            </form>

                            <!-- EDIT -->
                             <a href={{ route('reviews.edit', $d->id) }} class="btn btn-warning btn-sm">
                             Edit
                             </a>>

                            <!-- DETAIL -->
                            <a href="{{ route('reviews.show', $d->id) }}"
                               class="btn btn-info btn-sm text-white">
                                Detail
                            </a>

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    {{-- <!-- PAGINATION -->
    <div class="mt-4 d-flex justify-content-center">
        {{ $users->links('pagination::bootstrap-5') }}
    </div> --}}

</div>
@endsection