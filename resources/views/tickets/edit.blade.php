<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pesanan - {{$title}}</title>
    <link rel="stylesheet" href="{{ asset('index.css') }}">
</head>
<body>
<div class="card">
    <div class="card-header">
        <h2>Edit Ticket</h2>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('/tickets/update/' . $tickets->id) }}">
            @csrf
            @method('PUT')
            <label for="nama_pesanan">Nama Pesanan:</label>
            <input type="text" name="nama_pesanan" value="{{ $tickets->nama_pesanan }}" required>
            <label for="nama_pemesan">Nama Pemesan:</label>
            <input type="text" name="nama_pemesan" value="{{ $tickets->nama_pemesan }}" required>
            <label for="berangkat_dari">Berangkat Dari:</label>
            <input type="text" name="berangkat_dari" value="{{ $tickets->berangkat_dari }}" required>
            <label for="destinasi">Destinasi:</label>
            <input type="text" name="destinasi" value="{{ $tickets->destinasi }}" required>
            <label for="tipe_pesanan">Tipe Pesanan:</label>
            <input type="text" name="tipe_pesanan" value="{{ $tickets->tipe_pesanan }}" required>
            <label for="nama_kendaraan">Nama Kendaraan:</label>
            <input type="text" name="nama_kendaraan" value="{{ $tickets->nama_kendaraan }}" required>
            <label for="kode_pesanan">Kode Pesanan:</label>
            <input type="text" name="kode_pesanan" value="{{ $tickets->kode_pesanan }}" required>
            <label for="tiket_orang">Tiket Orang :</label>
            <select name="tiket_orang" class="form-control">
                @foreach ($ticketorg as $data)
                    <option value="{{ $data->id }}"{{ $data->id == $tickets->tiket_orang ? 'selected' : '' }}>
                        {{ $data->tiketperorang }}
                    </option>
                @endforeach
            </select>
            <label for="harga">Harga :</label>
            <input type="text" name="harga" value="{{ $tickets->harga }}" required>
            <label for="jam_berangkat">Jam Berangkat :</label>
            <input type="text" name="jam_berangkat" value="{{ $tickets->jam_berangkat }}" required>
            <label for="tanggal_pemesanan">Tanggal Pemesanan :</label>
            <input type="text" name="tanggal_pemesanan" value="{{ $tickets->tanggal_pemesanan }}" required>
            <label for="tanggal_berangkat">Tanggal Berangkat :</label>
            <input type="text" name="tanggal_berangkat" value="{{ $tickets->tanggal_berangkat }}" required>
            <label for="tanggal_tiket_hangus">Tanggal Tiket Hangus :</label>
            <input type="text" name="tanggal_tiket_hangus" value="{{ $tickets->tanggal_tiket_hangus }}" required>
            <div class="bback">
                <a href="/tickets/all">
                    <button type="button" id="button">
                        <span>Back</span>
                    </button>
                </a>
                <button type="submit" id="button">
                    <span>Save Changes</span>
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
