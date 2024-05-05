<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Hasil Pencarian Wisata</title>
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
    <h1>Hasil Pencarian Wisata</h1>
    <div class="center">
        <form action="{{ route('cariwisataadmin') }}" method="GET">
            <input type="text" id="searchInput" name="keyword" placeholder="Cari Wisata" value="{{ old('keyword') }}">
            <button type="submit" class="btn-primary">Cari</button>
        </form>
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <ul>
            @foreach($wisatas as $wisata)
            <li>
                <a href="{{ route('detailWisataAdmin', $wisata->kd_wisata) }}">{{ $wisata->nama_wisata }}</a>
            </li>
            @endforeach
        </ul>
    </div>
<a href="{{ route('wisataadmin') }}">Kembali</a>
</body>
</html>
