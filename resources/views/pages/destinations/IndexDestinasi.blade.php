@extends("master")

@section('content')
<div class="container py-5">

    @if(session("success"))
    <div class="alert alert-success">
        {{session("success")}}
    </div>
        
    @endif
    <div class="d-flex justify-content-between mb-3">
        <h2 class="fw-bold text-primary mb-0">List of Destinations</h2>
        <form action="/destinations" method= "GET">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request('search') }}
            ">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>
    </div>

    <!-- Header + Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        
        <a href="/destinations/create" class="btn btn-success px-4">
            + Tambah Destinasi
        </a>
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle text-center">
            <thead class="table-success">
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Lokasi</th>
                    <th>Harga</th>
                    <th>Jam Operasional</th>
                    <th>Hari Operasional</th>
                    <th style="min-width: 150px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($destinations as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->name }}</td>
                    <td class="text-start">{{ Str::limit($d->description, 70) }}</td>
                    <td>{{ $d->location }}</td>
                    <td>Rp {{ number_format($d->ticket_price, 0, ',', '.') }}</td>
                    <td>{{ $d->working_hours }}</td>
                    <td>{{ $d->working_days }}</td>
                    <td>
                        <a href="/destinations/{{ $d->id }}/edit" class="btn btn-warning">Edit</a>
                        <a href="{{route('destinations.show', $d->id)}}" class="btn btn-info btn-sm me-1" title="Lihat Detail">
                            Detail
                        </a>
                        <form action="{{route('destinations.delete', $d->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus {{ $d->name }}?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Hapus Destinasi">
                                Hapus
                            </button>
                        </form> 
                    </td>
                </tr>
            
                @endforeach
            </tbody>
        </table>

         <div class="mt-3 d-flex justify-content-center">
        {{ $destinations->links('pagination::bootstrap-5') }}
    </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
    class alert {
        constructor(message) {
            this.message = message;
        }

        show() {
            alert(this.message);
        }
    }
    let alertElement = document.querySelector('.alert');
    if (alertElement) {
        setTimeout(() => {
            alertElement.style.transition = "opacity 3s ease-out";
            alertElement.style.opacity ="0";
            setTimeout(() => {
                alertElement.remove();
            },3000);
        },3000)
    }
</script>
    
@endpush

