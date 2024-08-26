<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Simpan</title>
</head>
<body>
    <h1>Edit Data Simpan</h1>
    <form action="{{ route('simpan.update', $simpan->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ $simpan->nama }}" required>
        <br>

        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" value="{{ $simpan->kelas }}" required>
        <br>

        <label for="umur">Umur:</label>
        <input type="text" id="umur" name="umur" value="{{ $simpan->umur }}" required>
        <br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="{{ $simpan->jenis_kelamin }}" required>
        <br>

        <label for="no_hp">No HP:</label>
        <input type="text" id="no_hp" name="no_hp" value="{{ $simpan->no_hp }}" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $simpan->email }}" required>
        <br>

        <button type="submit">Update</button>
    </form>
    <a href="{{ route('simpan.index') }}">Kembali ke Daftar</a>
</body>
</html>
