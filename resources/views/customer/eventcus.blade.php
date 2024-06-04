<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Event Customer</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
    <style>
         .logo img{
            height: 95px;
            margin-left: 10px;
            margin-top: 10px;
        }
        .centered-nav{
            display: flex;
            justify-content: center;
            list-style-type: none;
            gap: 35px;
            margin-right: 140px;
            margin-bottom: 0px;
            margin-top: -40px;
        }
        .centered-nav a{
            text-decoration: none;
            color: #e2e2e2;
            font-size: 18px;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .centered-nav a:hover{
            color:rgb( 26,47,230);
        }
        #logoutForm {
            display: flex;
            justify-content: flex-end;
            margin-right: 20px;
            margin-top: -40px;
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
<header>
        <div class="logo">
            <img src="{{ asset('img/jwlogo.png')}}" alt="Jember Wonder">
        </div>
<nav>
    <ul class="centered-nav">
        <li><a href="{{ route('dashboardcustomer') }}">Dashboard</a></li>
        <li><a href="{{ route('wisatacustomer') }}">Wisata</a></li>
        <li><a href="{{ route('eventcustomer') }}">Event</a></li>
        <li><a href="{{ route('masukancustomer') }}">Masukan</a></li>
    </ul>
    </nav>  
    <form id="logoutForm" action="{{ route('logoutcus') }}" method="POST">
        @csrf
        <button type="button" class="btn btn-danger" onclick="confirmLogout()">Logout</button>
    </form>      
    </header>
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
    <script>
        function confirmLogout() {
            if (confirm('Apakah Anda yakin untuk logout?')) {
                document.getElementById('logoutForm').submit();
            }
        }
    </script>
</body>
</html>
