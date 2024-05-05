<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Hasil Pencarian Event</title>
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
    <h1>Hasil Pencarian Event</h1>
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
        <ul>
            @foreach($events as $event)
            <li>
                <a href="{{ route('detailEventAdmin', $event->kd_event) }}">{{ $event->judul }}</a>
            </li>
            @endforeach
        </ul>
    </div>
<a href="{{ route('eventadmin') }}">Kembali</a>
</body>
</html>
