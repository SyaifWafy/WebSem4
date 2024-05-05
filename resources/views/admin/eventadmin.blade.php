<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Event Admin</title>
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
    <a href="{{ route('dashboardadmin') }}">Dashboard</a>
    <a href="{{ route('wisataadmin') }}">Wisata</a>
    <a href="{{ route('eventadmin') }}">Event</a>
    <a href="{{ route('masukanadmin') }}">Masukan</a>
    <br>
    <br>
    <button onclick="window.location.href='{{ route('formeventadmin') }}'" class="btn btn-primary">Tambah Event</button>
    <br>
    <div class="center">
        <form action="{{ route('carieventadmin') }}" method="GET">
            <input type="text" name="keyword" placeholder="Cari Event">
            <button type="submit" class="btn-primary">Cari</button>
        </form>
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <br>
        <ul>
            @foreach($events as $event)
                <li>
                    <div class="event-item">
                        <a href="{{ route('detailEventAdmin', $event->kd_event) }}">{{ $event->judul }}</a>
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
