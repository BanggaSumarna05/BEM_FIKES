@extends('superadmin.layouts.index')
@section('container')
<div class="container mt-4">
    <h2>Tambah Program Kerja</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ url('/superadmin/proker/store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nama_divisi">Nama Divisi</label>
            <input type="text" name="nama_divisi" class="form-control @error('nama_divisi') is-invalid @enderror"
                value="{{ old('nama_divisi') }}" required>
            @error('nama_divisi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="proker">Program Kerja</label>
            <textarea name="proker" rows="5" class="form-control @error('proker') is-invalid @enderror">{{ old('proker') }}</textarea>
            @error('proker')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ url('/superadmin/proker') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
