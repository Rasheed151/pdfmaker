<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Simpan</title>
</head>
<body>
    <h1>Tambah Data Simpan</h1>
    <form action="{{ route('simpan.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br>

        <label for="nama">Kelas:</label>
    <select name="nama" required>
        @foreach ($libraryData as $data)
            <option value="{{ $data->kelas }}">{{ $data->kelas }}</option>
        @endforeach
    </select>

        <label for="umur">Umur:</label>
        <input type="text" id="umur" name="umur" required>
        <br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="text" id="jenis_kelamin" name="jenis_kelamin" required>
        <br>

        <label for="no_hp">No HP:</label>
        <input type="text" id="no_hp" name="no_hp" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('simpan.index') }}">Kembali ke Daftar</a>
</body>
</html>
