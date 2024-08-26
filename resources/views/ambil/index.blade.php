<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Ambil</h1>
<a href="{{ route('ambil.create') }}">Tambah Data</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table>
    <tr>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>Jenis</th>
        <th>Jabatan</th>
        <th>Aksi</th>
    </tr>
    @foreach($ambils as $ambil)
    <tr>
        <td>{{ $ambil->nama }}</td>
        <td>{{ $ambil->kelas }}</td>
        <td>{{ $ambil->umur }}</td>
        <td>{{ $ambil->jenis_kelamin }}</td>
        <td>{{ $ambil->jenis }}</td>
        <td>{{ $ambil->jabatan }}</td>
        <td>
            <a href="{{ route('ambil.show', $ambil->id) }}">Lihat</a>
            <a href="{{ route('ambil.edit', $ambil->id) }}">Edit</a>
            <form action="{{ route('ambil.destroy', $ambil->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
            <!-- Tombol untuk Generate PDF -->
            <a href="{{ route('generate.pdf', $ambil->id) }}">Cetak PDF</a>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
