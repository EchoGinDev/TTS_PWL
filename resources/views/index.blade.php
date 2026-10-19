@extends('base')

@section('title', 'Form')

@section('content')
    <form action="/proses" method="POST">
        @csrf
        NIM: <input type="text" name="nim" class="form-control mb-2">
        Nama: <input type="text" name="nama" class="form-control mb-2">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection