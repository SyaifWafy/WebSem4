<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Form Pengaduan Customer</title>
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
        .event-item {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Tambah Pengaduan</h2>
    <form action="{{ route('tambahpengaduan') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="keluhan">Keluhan :</label>
            <br>
            <textarea class="form-control" id="keluhan" name="keluhan" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
    <br>
    <br>
    <a href="{{ route('pengaduancustomer') }}">Kembali</a>
</body>
</html>
