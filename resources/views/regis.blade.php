<h3>Form Registrasi Mahasiswa</h3>
<!-- Gunakan method="GET" atau method="POST" sesuai kebutuhan pengujian -->
<form action="/proses" method="POST">
    @csrf
    NIM: <input type="number" name="nim" required><br>
    Nama: <input type="text" name="name" required><br>
       
    <button type="submit">Evaluasi Data</button>
</form>