<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('index.css') }}">
</head>
<body>
<div class="card">
    <div class="card-header">
        <h2>Detail Pesawat</h2>
        <h2>{{ $planes->nama_pesawat }}</h2>
    </div>
    <div class="card-body">
        <img src="{{ asset('images/' . $planes->preview) }}" alt="{{ $planes->nama_pesawat}}" class="img-fluid">
        <ul class="list-group mt-3">
            <li class="list-group-item"><strong>Nama Pesawat:</strong> {{ $planes->nama_pesawat }}</li>
            <li class="list-group-item"><strong>Nama Pilot:</strong> {{ $planes->nama_pilot }}</li>
            <li class="list-group-item"><strong>Nomor Penerbangan:</strong> {{ $planes->nomor_penerbangan }}</li>
            <li class="list-group-item"><strong>Harga:</strong> {{ $planes->harga }}</li>
            <li class="list-group-item"><strong>Jam Berangkat:</strong> {{ $planes->jam_berangkat }}</li>
            <li class="list-group-item"><strong>Tanggal Berangkat:</strong> {{ $planes->tanggal_berangkat }}</li>
        </ul>
    </div>
</div>
</body>
</html>
