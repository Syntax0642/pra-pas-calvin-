<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Tikets - {{$title}}</title>
    <link rel="stylesheet" href="{{ asset('index.css') }}">
</head>
<body>
<div class="card">
    <div class="card-header">
        <h2>Tambah Ticket</h2>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('/tickets/store') }}">
            @csrf
            <label for="nama_pesanan">Nama Pesanan:</label>
            <input type="text" name="nama_pesanan" value="{{old('nama_pesanan') }}" required>
            <label for="nama_pemesan">Nama Pemesan:</label>
            <input type="text" name="nama_pemesan" value="{{old('nama_pemesan')}}" required>
            <label for="berangkat_dari">Berangkat Dari:</label>
            <input type="text" name="berangkat_dari" value="{{old('berangkat_dari')}}" required>
            <label for="destinasi">Destinasi:</label>
            <input type="text" name="destinasi" value="{{old('destinasi')}}" required>
            <label for="tipe_pesanan">Tipe Pesanan:</label>
            <input type="text" name="tipe_pesanan" value="{{old('tipe_pesanan')}}" required>
            <label for="nama_kendaraan">Nama Kendaraan:</label>
            <input type="text" name="nama_kendaraan" value="{{old('nama_kendaraan')}}" required>
            <label for="kode_pesanan">Kode Pesanan:</label>
            <input type="text" name="kode_pesanan" value="{{old('kode_pesanan')}}" required>
            <label for="tiket_orang">Tiket Orang :</label>
            <select name="tiket_orang" class="form-control">
                @foreach ($ticketorg as $data)
                    <option name="tiket_orang" value="{{ $data->id }}">{{$data->tiketperorang}}</option>
                @endforeach
            </select>
            <label for="harga">Harga :</label>
            <input type="text" name="harga" value="{{old('harga')}}" required>
            <label for="jam_berangkat">Jam Berangkat :</label>
            <input type="text" name="jam_berangkat" value="{{old('jam_berangkat')}}" required>
            <label for="tanggal_pemesanan">Tanggal Pemesanan :</label>
            <input type="date" name="tanggal_pemesanan" value="{{old('tanggal_pemesanan')}}" required>
            <label for="tanggal_berangkat">Tanggal Berangkat :</label>
            <input type="date" name="tanggal_berangkat" value="{{old('tanggal_berangkat')}}" required>
            <label for="tanggal_tiket_hangus">Tanggal Tiket Hangus :</label>
            <input type="date" name="tanggal_tiket_hangus" value="{{old('tanggal_tiket_hangus')}}" required>
            <div class="bback">
                <a href="/tickets/all">
                    <button type="button" id="button">
                        <span>Back</span>
                    </button>
                </a>
                <button type="submit" id="button">
                    <span>Tambah Data</span>
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
