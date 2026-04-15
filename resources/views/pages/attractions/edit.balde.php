<form action="/attraction/{{ $atraction->id }}/update" method="POST">
    @csrf
    @method('PUT')
    <label>Nama Atraksi</label>
    <input type="text" name="name" class="form-control mb-3" value="{{ $atraction->name }}" required>

    <button type="submit" class="btn btn-primary">Update</button>
</form>