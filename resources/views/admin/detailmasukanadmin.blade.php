<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Masukan - Admin</title>
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
    <h1>Detail Masukan</h1>
    <p><strong>Kode Masukan :</strong> {{ $masukan->kd_masukan }}</p>
    <p><strong>Nama :</strong> {{ $masukan->nama }}</p>
    <p><strong>Masukan :</strong> {{ $masukan->masukan }}</p>
    <br>
    <form action="{{ route('deletemasukan', $masukan->kd_masukan) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin menghapus masukan ini?')">Hapus masukan</button>
    </form>
    <br>
    <br>
    <a href="{{ route('masukanadmin') }}">Kembali</a>
</body>
</html>
