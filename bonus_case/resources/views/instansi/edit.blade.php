@extends('adminlte.master')

@section('content')
    <div class="card card-primary ml-3 mt-3">
        <div class="card-header">
            <h3 class="card-title">Edit Instansi {{ $instansi->id }}</h3>
        </div>

        <form action="/instansi/{{ $instansi->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="instansi">instansi</label>
                    <input type="text" name="instansi" class="form-control" id="instansi"
                        value="{{ old('instansi', $instansi->instansi) }}" placeholder="Masukkan instansi">
                    @error('instansi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                        value="{{ old('deskripsi', $instansi->deskripsi) }}" placeholder="Masukkan deskripsi">
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
        </form>
    </div>
@endsection
