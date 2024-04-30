<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Wisata - Customer</title>
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
    <h1>Detail Wisata</h1>
    <p><strong>Nama Wisata :</strong> {{ $wisata->nama_wisata }}</p>
    <p><strong>Keterangan :</strong> {{ $wisata->keterangan }}</p>
    <p><strong>Kategori :</strong> {{ $wisata->kategori }}</p>
    <p><strong>Lokasi :</strong> {{ $wisata->lokasi }}</p>
    @if($wisata->gambarwisata)
        <img src="{{ Storage::url($wisata->gambarwisata) }}" alt="Foto Wisata">
    @else
        <p>Tidak ada foto untuk wisata ini.</p>
    @endif
    <h2>Event</h2>
    @if($wisata->event)
        @if($wisata->event->isEmpty())
            <p>Tidak ada event pada wisata ini.</p>
        @else
            <ul>
                @foreach($wisata->event as $event)
                    <li>
                        <a href="{{ route('detailEventCustomer', $event->kd_event) }}">
                            {{ $event->judul }} / {{ $event->tanggal }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    @else
        <p>Tidak ada event pada wisata ini.</p>
    @endif
    <br>
    <br>
    <a href="{{ route('wisatacustomer') }}">Kembali ke Daftar Wisata</a>
</body>
</html>
