<!-- resources/views/pdf.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <h1>Data testing</h1>
    <p>Halo, nama saya {{ $ambil->nama }} dengan nomor ID {{ $ambil->id }}. Saya berumur {{ $ambil->umur }} dan sekarang sedang berada di kelas {{ $ambil->kelas }}.</p>
    <p>Saya merupakan seorang {{ $ambil->jenis_kelamin }} yang menjabat sebagai {{ $ambil->jabatan }} dengan jenis {{ $ambil->jenis }}.</p>
</body>
</html>
