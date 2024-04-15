<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Event</title>
</head>
<body>
    <h1>Detail Event</h1>

    <p><strong>Judul :</strong> {{ $event->judul }}</p>
    <p><strong>Tanggal :</strong> {{ $event->tanggal }}</p>
    <p><strong>Isi :</strong> {{ $event->isi }}</p>
    <p><strong>Tempat :</strong> {{ $event->tempat }}</p>
    <p><strong>Tempat Wisata :</strong> {{ $event->wisata->nama_wisata }}</p>

    <a href="{{ route('eventadmin') }}">Kembali ke Daftar Event</a>
</body>
</html>
