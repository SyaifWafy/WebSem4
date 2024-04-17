<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Event - Customer</title>
    <style>
        .center {
            text-align: center;
        }
        .btn-primary {
            color: #fff;
            padding: 0.375rem 0.75rem;
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 0.25rem;
            text-decoration: none;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<body>
    <h1>Detail Event</h1>
    <p><strong>Judul :</strong> {{ $event->judul }}</p>
    <p><strong>Tanggal :</strong> {{ $event->tanggal }}</p>
    <p><strong>Pukul :</strong> {{ $event->pukul }}</p>
    <p><strong>Isi :</strong> {{ $event->isi }}</p>
    <p><strong>Tempat :</strong> {{ $event->tempat }}</p>
    <p><strong>Tempat Wisata :</strong> {{ $event->wisata->nama_wisata }}</p>
    <br>
    <br>
    <a href="{{ route('eventcustomer') }}">Kembali ke Daftar Event</a>
</body>
</html>
