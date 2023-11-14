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
        <h2>Detail Hotel</h2>
        <h2>{{ $hotels->namahotel }}</h2>
    </div>
    <div class="card-body">
        <img src="{{ asset('images/' . $hotels->preview) }}" alt="{{ $hotels->nama_hotel }}" class="img-fluid">
        <ul class="list-group mt-3">
            <li class="list-group-item"><strong>Kapasitas:</strong> {{ $hotels->tipe_kamar }}</li>
            <li class="list-group-item"><strong>Kapasitas:</strong> {{ $hotels->kapasitas }}</li>
            <li class="list-group-item"><strong>Harga:</strong> {{ $hotels->harga }}</li>
            <li class="list-group-item"><strong>Booking Deadline:</strong> {{ $hotels->booking_deadline }}</li>
            <li class="list-group-item"><strong>Update Terakhir:</strong> {{ $hotels->update_terakhir }}</li>
        </ul>
    </div>
</div>
</body>
</html>
