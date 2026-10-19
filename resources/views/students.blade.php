@extends('base')

@section('title', 'Students')

@section('content')
    <h5>Students</h5>
    <table class="table table-bordered table-sm">
        <thead class="table-light">
            <tr><th>NIM</th><th>Nama</th><th>Prodi</th></tr>
        </thead>
        <tbody>
            <tr><td>2301001</td><td>Asep</td><td>Informatika</td></tr>
            <tr><td>2301002</td><td>Budi Santoso</td><td>Informatika</td></tr>
            <tr><td>2301003</td><td>Citra Lestari</td><td>Sistem Informasi</td></tr>
        </tbody>
        <Tbody>
            <form action="/proses" method="POST">
    @csrf
    NIM: <input type="number" name="nim" required><br>
    Nama: <input type="text" name="name" required><br>
    <button type="submit">Evaluasi Data</button>
</form>
        </Tbody>
    </table>
@endsection
