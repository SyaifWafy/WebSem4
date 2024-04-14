<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Wisata</title>
</head>
<body>
    <h1>Detail Wisata</h1>

    <p><strong>Nama Wisata :</strong> {{ $wisata->nama_wisata }}</p>
    <p><strong>Keterangan :</strong> {{ $wisata->keterangan }}</p>
    <p><strong>Kategori :</strong> {{ $wisata->kategori }}</p>
    <p><strong>Lokasi :</strong> {{ $wisata->lokasi }}</p>

    <a href="{{ route('wisataadmin') }}">Kembali ke Daftar Wisata</a>
</body>
</html>
