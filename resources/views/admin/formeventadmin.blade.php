<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jember Wonder - Tambah Event</title>
</head>
<body>
<h2>Tambah Event Baru</h2>
<form action="{{ route('tambahevent') }}" method="POST">
    @csrf
    <div>
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" required>
    </div>
    <br>
    <div>
        <label for="tanggal">Tanggal :</label><br>
        <input type="date" id="tanggal" name="tanggal" required>
    </div>
    <br>
    <div>
        <label for="pukul">Pukul :</label><br>
        <input type="time" id="pukul" name="pukul" required>
    </div>
    <br>
    <div>
        <label for="isi">Isi Event :</label><br>
        <textarea id="isi" name="isi" rows="4" required></textarea>
    </div>
    <br>
    <div>
        <label for="tempat">Tempat :</label><br>
        <input type="text" id="tempat" name="tempat" required>
    </div>
    <br>
    <div>
        <label for="kd_wisata">Wisata :</label><br>
        <select id="kd_wisata" name="kd_wisata" required>
            @foreach($wisatas as $wisata)
                <option value="{{ $wisata->kd_wisata }}">{{ $wisata->nama_wisata }}</option>
            @endforeach
        </select>
    </div>
    <br>
    <div>
        <input type="hidden" id="username_admin" name="username_admin" value="Admin">
    </div>
    <div>
        <button type="submit">Tambah</button>
    </div>
</form>
<br>
<a href="{{ route('eventadmin') }}">Kembali ke Daftar Event</a>
</body>
</html>
