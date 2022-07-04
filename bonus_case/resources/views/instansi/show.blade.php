@extends('adminlte.master')

@section('content')
    <div class="mt-3 ml-3">
        <h4>instansi: {{ $instansi->instansi }}</h4>
        <h4>deskripsi: {{ $instansi->deskripsi }}</h4>
    </div>
@endsection
