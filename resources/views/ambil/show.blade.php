<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Detail Data Ambil</h1>

<p>Nama: {{ $ambil->nama }}</p>
<p>Kelas: {{ $ambil->kelas }}</p>
<p>Umur: {{ $ambil->umur }}</p>
<p>Jenis Kelamin: {{ $ambil->jenis_kelamin }}</p>
<p>No HP: {{ $ambil->no_hp }}</p>
<p>Jabatan: {{ $ambil->jabatan }}</p>

<a href="{{ route('ambil.index') }}">Kembali</a>

</body>
</html>