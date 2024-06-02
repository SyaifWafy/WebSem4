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
    <h2>Tambah Wisata</h2>
    <form action="{{ route('tambahwisata') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            <script>
                window.onload = function() {
                    alert("{{ $errors->first() }}");
                };
            </script>
        @endif
        <div>
            <label for="nama_wisata">Nama Wisata :</label><br>
            <input type="text" id="nama_wisata" name="nama_wisata">
        </div>
        <br>
        <div>
            <label for="kategori">Kategori :</label><br>
            <select name="kategori" id="kategori">
                <option value="Pantai">Pantai</option>
                <option value="Laut/Terumbu Karang">Laut/Terumbu Karang</option>
                <option value="Gunung">Gunung</option>
                <option value="Bukit">Bukit</option>
                <option value="Hutan">Hutan</option>
                <option value="Goa">Goa</option>
                <option value="Danau">Danau</option>
                <option value="Sungai">Sungai</option>
                <option value="Pedesaan">Pedesaan</option>
                <option value="Bangunan">Bangunan</option>
            </select>
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
        <div>
            <label for="gambarwisata">Foto Wisata :</label><br>
            <input type="file" id="gambarwisata" name="gambarwisata">
        </div>
        <br>
        <button type="submit">Tambahkan Wisata</button>
    </form>
    <br>
    <a href="{{ route('wisataadmin') }}">Kembali ke Daftar Wisata</a>
</body>
</html>
