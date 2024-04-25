<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Masukan Customer</title>
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
    <h1>JemberWonder</h1>
    <a href="{{ route('dashboardcustomer') }}">Dashboard</a>
    <a href="{{ route('wisatacustomer') }}">Wisata</a>
    <a href="{{ route('eventcustomer') }}">Event</a>
    <a href="{{ route('masukancustomer') }}">Masukan</a>
    <br>
    <br>
    <button onclick="window.location.href='{{ route('formmasukancustomer') }}'" class="btn btn-primary">Tambah Masukan</button>
    <br>
    <br>
    <div class="center">
        <ul>
            @foreach($masukans as $masukan)
                <li>
                    <div class="comment-box">
                        <a href="{{ route('detailmasukancustomer', $masukan->kd_masukan) }}"><strong>Masukan {{ $masukan->kd_masukan }}</strong></a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
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
