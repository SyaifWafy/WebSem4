<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Event Customer</title>
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
    <div class="center">
        <form action="{{ route('carieventcus') }}" method="GET">
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
                        <a href="{{ route('detailEventCustomer', $event->kd_event) }}">{{ $event->judul }}</a>
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
