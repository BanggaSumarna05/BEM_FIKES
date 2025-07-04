@extends('superadmin.layouts.index')

@section('content')
<div class="container">
    <h2>Edit Program Kerja</h2>

    <form action="{{ url('/superadmin/proker/update/' . $proker->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Divisi</label>
            <input type="text" name="nama_divisi" value="{{ $proker->nama_divisi }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Program Kerja</label>
            <textarea name="proker" rows="5" class="form-control" required>{{ $proker->proker }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ url('/superadmin/proker') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
