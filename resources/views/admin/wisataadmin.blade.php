<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Wisata Admin</title>
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
    <a href="{{ route('masukanadmin') }}">Masukan</a>
    <br>
    <br>
    <button class="btn btn-primary" onclick="window.location.href='{{ route('formwisataadmin') }}'">Tambah Wisata</button>
    <br>
    <div class="center">
        <form action="{{ route('cariwisataadmin') }}" method="GET">
            <input type="text" name="keyword" placeholder="Cari Wisata">
            <button type="submit" class="btn-primary">Cari</button>
        </form>
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <br>
        <ul>
            @foreach($wisatas as $wisata)
            <li>
                <a href="{{ route('detailWisataAdmin', $wisata->kd_wisata) }}">{{ $wisata->nama_wisata }}</a>
            </li>
            @endforeach
        </ul>
    </div>
    <br>
    <form id="logoutForm" action="{{ route('logoutadmin') }}" method="POST">
        @csrf
        <button type="button" onclick="confirmLogout()">Keluar</button>
    </form>
    <script>
        function confirmLogout() {
            if (confirm('Apakah Anda yakin untuk keluar?')) {
                document.getElementById('logoutForm').submit();
            }
        }
    </script>
</body>
</html>
