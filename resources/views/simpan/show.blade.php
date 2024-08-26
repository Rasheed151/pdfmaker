<!DOCTYPE html>
<html>
<head>
    <title>Detail Data Simpan</title>
</head>
<body>
    <h1>Detail Data Simpan</h1>
    <p><strong>Nama:</strong> {{ $simpan->nama }}</p>
    <p><strong>Kelas:</strong> {{ $simpan->kelas }}</p>
    <p><strong>Umur:</strong> {{ $simpan->umur }}</p>
    <p><strong>Jenis Kelamin:</strong> {{ $simpan->jenis_kelamin }}</p>
    <p><strong>No HP:</strong> {{ $simpan->no_hp }}</p>
    <p><strong>Email:</strong> {{ $simpan->email }}</p>

    <a href="{{ route('simpan.index') }}">Kembali ke Daftar</a>
</body>
</html>
