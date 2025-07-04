@extends('superadmin.layouts.index')

@section('container') {{-- Ganti ke content kalau layout sudah pakai content --}}
<div class="container mt-4">
    <h2>Daftar Program Kerja</h2>
    <a href="{{ url('/superadmin/proker/create') }}" class="btn btn-primary mb-3">Tambah Program Kerja</a>

    <table class="table table-bordered" id="proker-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Divisi</th>
                <th>Proker</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#proker-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/superadmin/proker/json') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'nama_divisi', name: 'nama_divisi' },
                { data: 'proker', name: 'proker' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    });
</script>
@endsection
