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
        <h2>Detail Pesanan</h2>
        <h2>{{ $tickets->nama_pesanan}}</h2>
    </div>
    <div class="card-body">
        <ul class="list-group mt-3">
            <li class="list-group-item"><strong>Nama Pesanan:</strong> {{ $tickets->nama_pesanan }}</li>
            <li class="list-group-item"><strong>Nama Pemesan:</strong> {{ $tickets->nama_pemesan }}</li>
            <li class="list-group-item"><strong>Berangkat Dari:</strong> {{ $tickets->berangkat_dari }}</li>
            <li class="list-group-item"><strong>Destinasi:</strong> {{ $tickets->destinasi }}</li>
            <li class="list-group-item"><strong>Tipe Pesanan:</strong> {{ $tickets->tipe_pesanan }}</li>
            <li class="list-group-item"><strong>Nama Kendaraan:</strong> {{ $tickets->nama_kendaraan }}</li>
            <li class="list-group-item"><strong>Kode Pesanan:</strong> {{ $tickets->kode_pesanan }}</li>
            <li class="list-group-item"><strong>Kuota Tiket:</strong> {{ $tickets->Ticketss->tiketperorang}}</li>
            <li class="list-group-item"><strong>Harga:</strong> {{ $tickets->harga }}</li>
            <li class="list-group-item"><strong>Jam Berangkat:</strong> {{ $tickets->jam_berangkat }}</li>
            <li class="list-group-item"><strong>Tanggal Pemesanan:</strong> {{ $tickets->tanggal_pemesanan }}</li>
            <li class="list-group-item"><strong>Tanggal Berangkat:</strong> {{ $tickets->tanggal_berangkat }}</li>
            <li class="list-group-item"><strong>Tanggal Hangus:</strong> {{ $tickets->tanggal_tiket_hangus }}</li>
        </ul>
        <div class="bback">
            <a href="/tickets/all">
                <button id="button">
                    <span>Back</span>
                </button>
            </a>
        </div>
    </div>
</div>
</body>
</html>
