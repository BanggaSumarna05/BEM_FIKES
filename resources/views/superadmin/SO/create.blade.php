@extends('superadmin.layouts.index')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Organizational Structure</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ url('/superadmin/SO/store') }}" enctype="multipart/form-data">
    @csrf
    <!-- Name Jabatan -->
    <div class="form-group">
        <label for="name_jabatan">Jabatan:</label>
        <input type="text" name="name_jabatan" id="name_jabatan" class="form-control" required>
    </div>

    <!-- Name Value SO -->
    <div class="form-group">
        <label for="name_value_so">Name Value SO:</label>
        <input type="text" name="name_value_so" id="name_value_so" class="form-control" required>
    </div>

    <!-- Upload Foto -->
    <div class="form-group">
        <label for="photo">Foto:</label>
        <input type="file" name="photo" id="photo" class="form-control-file" accept="image/*">
    </div>

    <!-- Submit Button -->
    <div class="row mt-3">
        <div class="col-md-12">
            <a href="{{ url('superadmin/SO') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Create Organizational Structure</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
