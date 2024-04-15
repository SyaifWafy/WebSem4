<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Form Wisata Admin</title>
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
    <h1>JemberWonder</h1>
    <a href="{{ route('dashboardadmin') }}">Dashboard</a>
    <a href="{{ route('wisataadmin') }}">Wisata</a>
    <a href="{{ route('eventadmin') }}">Event</a>
    <a href="{{ route('pengaduanadmin') }}">Pengaduan</a>
    <br>
    <br>
    <form action="{{ route('tambahwisata') }}" method="POST">
        @csrf
        <div>
            <label for="nama_wisata">Nama Wisata :</label><br>
            <input type="text" id="nama_wisata" name="nama_wisata">
        </div>
        <br>
        <div>
            <label for="kategori">Kategori :</label><br>
            <input type="text" id="kategori" name="kategori">
        </div>
        <br>
        <div>
            <label for="keterangan">Keterangan :</label><br>
            <textarea id="keterangan" name="keterangan" rows="4" cols="50"></textarea>
        </div>
        <br>
        <div>
            <label for="lokasi">Lokasi :</label><br>
            <input type="text" id="lokasi" name="lokasi">
        </div>
        <br>
        <button type="submit">Tambahkan Wisata</button>
    </form>
    <br>
    <a href="{{ route('wisataadmin') }}">Kembali ke Daftar Wisata</a>
</body>
</html>
