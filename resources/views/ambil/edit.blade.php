<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Edit Data Ambil</h1>

<form action="{{ route('ambil.update', $ambil->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="jabatan">Jabatan:</label>
    <input type="text" name="jabatan" value="{{ $ambil->jabatan }}" required>

    <button type="submit">Update</button>
</form>

</body>
</html>