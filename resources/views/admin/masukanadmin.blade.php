<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Masukan Admin</title>
</head>
<body>
    <h1>JemberWonder</h1>
    <a href="{{ route('dashboardadmin') }}">Dashboard</a>
    <a href="{{ route('wisataadmin') }}">Wisata</a>
    <a href="{{ route('eventadmin') }}">Event</a>
    <a href="{{ route('masukanadmin') }}">Masukan</a>
    <br>
    <br>
    <div class="center">
        <ul>
            @foreach($masukans as $masukan)
                <li>
                    <div class="comment-box">
                        <a href="{{ route('detailmasukanadmin', $masukan->kd_masukan) }}"><strong>Masukan {{ $masukan->kd_masukan }}</strong></a>
                    </div>
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
