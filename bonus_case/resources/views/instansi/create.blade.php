@extends('adminlte.master')

@section('content')
    <div class="card card-info ml-3 mt-3">
        <div class="card-header">
            <h3 class="card-title">Input Instansi</h3>
        </div>

        <form action="/instansi" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="instansi">instansi</label>
                    <input type="text" name="instansi" class="form-control" id="instansi"
                        value="{{ old('instansi', '') }}" placeholder="Masukkan instansi">
                    @error('instansi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                        value="{{ old('deskripsi', '') }}" placeholder="Masukkan deskripsi">
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
@endsection
