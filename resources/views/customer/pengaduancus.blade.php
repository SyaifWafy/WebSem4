<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Pengaduan Customr</title>
</head>
<body>
    <h1>JemberWonder</h1>
    <a href="{{ route('dashboardcustomer') }}">Dashboard</a>
    <a href="{{ route('wisatacustomer') }}">Wisata</a>
    <a href="{{ route('eventcustomer') }}">Event</a>
    <a href="{{ route('pengaduancustomer') }}">Pengaduan</a>
    <br>
    <br>
    <form id="logoutForm" action="{{ route('logoutcus') }}" method="POST">
        @csrf
        <button type="button" onclick="confirmLogout()">Logout</button>
    </form>
    <script>
        function confirmLogout() {
            if (confirm('Apakah Anda yakin untuk logout?')) {
                document.getElementById('logoutForm').submit();
            }
        }
    </script>
</body>
</html>
