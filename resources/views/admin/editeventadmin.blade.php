<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Edit Event</title>
    <style>
        .form-group {
            margin-bottom: 1rem;
        }
        .form-control {
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<body>
    <h1>Edit Event</h1>
    <form action="{{ route('updateEventAdmin', $event->kd_event) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            <script>
                window.onload = function() {
                    alert("{{ $errors->first() }}");
                };
            </script>
        @endif
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ $event->judul }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $event->tanggal }}" required>
        </div>
        <div class="form-group">
            <label for="pukul">Pukul</label>
            <input type="time" name="pukul" id="pukul" class="form-control" value="{{ $event->pukul }}" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi Event</label>
            <textarea name="isi" id="isi" class="form-control" rows="4" required>{{ $event->isi }}</textarea>
        </div>
        <div class="form-group">
            <label for="tempat">Tempat</label>
            <input type="text" name="tempat" id="tempat" class="form-control" value="{{ $event->tempat }}" required>
        </div>
        <div class="form-group">
            <label for="kd_wisata">Wisata</label>
            <select name="kd_wisata" id="kd_wisata" class="form-control" required>
                @foreach($wisatas as $wisata)
                    <option value="{{ $wisata->kd_wisata }}" {{ $event->kd_wisata == $wisata->kd_wisata ? 'selected' : '' }}>{{ $wisata->nama_wisata }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="gambarevent">Foto Event</label>
            <input type="file" name="gambarevent" id="gambarevent" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('detailEventAdmin', $event->kd_event) }}" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>
