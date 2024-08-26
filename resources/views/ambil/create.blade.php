<!-- resources/views/ambil/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Ambil</title>
    <script>
        function combineFields() {
            var jenisAwal = document.getElementById('jenis_awal').value;
            var jenisAkhir = document.getElementById('jenis_akhir').value;
            var combinedValue = jenisAwal + ' sampai ' + jenisAkhir;
            document.getElementById('jenis_combined').value = combinedValue;
        }
    </script>
</head>
<body>
    <h1>Tambah Data Ambil</h1>
    <form action="{{ route('ambil.store') }}" method="POST" onsubmit="combineFields()">
        @csrf
        
        <label for="nama">Nama:</label>
    <select name="nama" required>
        @foreach ($simpanData as $data)
            <option value="{{ $data->nama }}">{{ $data->nama }}</option>
        @endforeach
    </select>

        <label for="jabatan">Jabatan:</label>
        <input type="text" name="jabatan" id="jabatan" required>

        <label for="jenis_awal">Jenis Awal:</label>
        <input type="text" id="jenis_awal" name="jenis_awal" required>

        <label for="jenis_akhir">Jenis Akhir:</label>
        <input type="text" id="jenis_akhir" name="jenis_akhir" required>

        <!-- Hidden field untuk data gabungan -->
        <input type="hidden" id="jenis_combined" name="jenis_combined">

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
