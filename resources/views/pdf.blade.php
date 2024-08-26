<!DOCTYPE html>
<html>
<head>
  <title>Berita Acara Musrenbangdes</title>
  <style>
    body {
      font-family: sans-serif;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .table {
      border-collapse: collapse;
      width: 100%;
    }

    .table th, 
    .table td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }

    .table th {
      background-color: #f2f2f2;
    }

    .section-title {
      margin-top: 20px;
      font-weight: bold;
    }

    .text-center {
      text-align: center;
    }

    .signature {
      margin-top: 20px;
      display: flex;
      justify-content: center;
    }

    .signature-item {
      margin: 0 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    @foreach ($data as $data)
    
    @endforeach
    <h1>BERITA ACARA</h1>
    <h1>KEGIATAN MUSYAWARAH RENCANA PEMBANGUNAN DESA (MUSRENBANGDES)</h1>

    <p>Berkaitan dengan pelaksanaan kegiatan pembangunan desa di Desa _________________, Kecamatan _______________, Kabupaten _______________, Provinsi _______________, maka pada hari ini:</p>

    <table>
      <tr>
        <td>Hari dan Tanggal</td>
        <td>: _______________________</td>
      </tr>
      <tr>
        <td>Tempat</td>
        <td>: _______________________</td>
      </tr>
    </table>

    <p>telah diadakan kegiatan Musrenbangdes yang telah dihadiri oleh wakil-wakil kelompok, dusun dan tokoh masyarakat, serta unsur lain yang terkait Desa sebagaimana tercantum dalam daftar hadir (terlampir).</p>

    <p>Materi yang dibahas, serta yang bertindak selaku unsur pimpinan rapat dan narasumber dalam membahas kegiatan adalah:</p>

    <div class="section-title">
      <h3>A. Materi Pembahasan</h3>
    </div>

    <table>
      <tr>
        <td colspan="2">_______________________________________________________________________</td>
      </tr>
      <tr>
        <td colspan="2">_______________________________________________________________________</td>
      </tr>
      <tr>
        <td colspan="2">_______________________________________________________________________</td>
      </tr>
    </table>

    <div class="section-title">
      <h3>B. Unsur Pimpinan Rapat dan Narasumber</h3>
    </div>

    <table>
      <tr>
        <td>Pemimpin Rapat:</td>
        <td>: {{ $data->nama }} dari _______________________</td>
      </tr>
      <tr>
        <td>Notulen</td>
        <td>:{{ $data->no_hp }} dari _______________________</td>
      </tr>
      <tr>
        <td>Narasumber</td>
        <td>: 1. _______________________ dari _______________________</td>
      </tr>
      <tr>
        <td></td>
        <td>: 2. _______________________ dari _______________________</td>
      </tr>
      <tr>
        <td></td>
        <td>: 3. _______________________ dari _______________________</td>
      </tr>
      <tr>
        <td colspan="2">dan seterusnya</td>
      </tr>
    </table>

    <p>Setelah dilakukan pembahasan dan diskusi terhadap materi, selanjutnya seluruh peserta Musrenbangdes menyepakati beberapa hal yang berketetapan menjadi kesepakatan akhir dari Musrenbangdes, yaitu:</p>

    <table>
      <tr>
        <td colspan="2">_______________________________________________________________________</td>
      </tr>
      <tr>
        <td colspan="2">_______________________________________________________________________</td>
      </tr>
      <tr>
        <td colspan="2">_______________________________________________________________________</td>
      </tr>
    </table>

    <p>Keputusan diambil secara musyawarah mufakat/aklamasi dan pemungutan suara/voting.</p>

    <p class="text-center">Demikian Berita Acara Musrenbangdes ini dibuat dan disahkan dengan penuh tanggungjawab agar dapat dipergunakan sebagaimana mestinya.</p>

    <div class="signature">
      <div class="signature-item">
        <p>_______________________</p>
        <p>Ketua</p>
      </div>
      <div class="signature-item">
        <p>_______________________</p>
        <p>Sekretaris</p>
      </div>
    </div>
    
  </div>

</body>
</html>