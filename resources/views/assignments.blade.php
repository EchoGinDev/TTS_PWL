@extends('base')

@section('title', 'assignments')

@section('content')
    <h5>Assignments</h5>
    
    <table class="table table-bordered table-sm">
        <thead class="table-light">
            <tr><th>Judul Tugas</th><th>Mata Kuliah</th><th>Deadline</th></tr>
        </thead>
        <tbody>
            <tr><td>Tugas 1 - Routing</td><td>Pemrograman Web Lanjut</td><td>25 Okt 2026</td></tr>
            <tr><td>Tugas 2 - ERD</td><td>Basis Data</td><td>30 Okt 2026</td></tr>
            <tr><td>Tugas 3 - Linked List</td><td>Struktur Data</td><td>05 Nov 2026</td></tr>
        </tbody>
    </table>
@endsection
