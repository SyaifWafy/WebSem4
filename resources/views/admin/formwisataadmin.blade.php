<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Form Wisata Admin</title>
</head>
<body>
    <h1>JemberWonder</h1>
    <a href="{{ route('dashboardadmin') }}">Dashboard</a>
    <a href="{{ route('wisataadmin') }}">Wisata</a>
    <a href="{{ route('eventadmin') }}">Event</a>
    <a href="{{ route('pengaduanadmin') }}">Pengaduan</a>
    <br>
    <form action="{{ route('tambahwisata') }}" method="POST">
        @csrf
        <div>
            <label for="nama_wisata">Nama Wisata :</label><br>
            <input type="text" id="nama_wisata" name="nama_wisata">
        </div>
        <br>
        <div>
            <label for="kategori">Kategori :</label><br>
            <input type="text" id="kategori" name="kategori">
        </div>
        <br>
        <div>
            <label for="keterangan">Keterangan :</label><br>
            <textarea id="keterangan" name="keterangan" rows="4" cols="50"></textarea>
        </div>
        <br>
        <div>
            <label for="lokasi">Lokasi :</label><br>
            <input type="text" id="lokasi" name="lokasi">
        </div>
        <br>
        <button type="submit">Tambahkan Wisata</button>
    </form>
    <br>
    <form id="logoutForm" action="{{ route('logoutadmin') }}" method="POST">
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
