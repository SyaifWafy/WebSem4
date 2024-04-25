<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Dashboard Admin</title>
</head>
<body>
    <h1>Welcome to JemberWonder</h1>
    <h1>Selamat datang, Admin!</h1>
    <a href="{{ route('registeradmin') }}">Daftarkan Admin</a>
    <br>
    <br>
    <a href="{{ route('dashboardadmin') }}">Dashboard</a>
    <a href="{{ route('wisataadmin') }}">Wisata</a>
    <a href="{{ route('eventadmin') }}">Event</a>
    <a href="{{ route('masukanadmin') }}">Masukan</a>
    <br>
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
