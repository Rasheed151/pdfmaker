<!DOCTYPE html>
<html>
<head>
    <title>Simpan Index</title>
</head>
<body>
    <h1>Data Simpan</h1>
    <a href="{{ route('simpan.create') }}">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($simpans as $simpan)
                <tr>
                    <td>{{ $simpan->nama }}</td>
                    <td>{{ $simpan->kelas }}</td>
                    <td>{{ $simpan->umur }}</td>
                    <td>{{ $simpan->jenis_kelamin }}</td>
                    <td>{{ $simpan->no_hp }}</td>
                    <td>{{ $simpan->email }}</td>
                    <td>
                        <a href="{{ route('simpan.edit', $simpan->id) }}">Edit</a>
                        <form action="{{ route('simpan.destroy', $simpan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
