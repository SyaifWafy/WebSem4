<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Edit Wisata</title>
    <style>
        .form-group {
            margin-bottom: 1rem;
        }
        .form-control {
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<body>
    <h1>Edit Wisata</h1>

    <form action="{{ route('updateWisataAdmin', $wisata->kd_wisata) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_wisata">Nama Wisata</label>
            <input type="text" name="nama_wisata" id="nama_wisata" class="form-control" value="{{ $wisata->nama_wisata }}" required>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" rows="3" required>{{ $wisata->keterangan }}</textarea>
        </div>

        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="form-control" value="{{ $wisata->kategori }}" required>
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $wisata->lokasi }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('detailWisataAdmin', $wisata->kd_wisata) }}" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>
