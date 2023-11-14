<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
@include('layouts.partial.navbar')
<div class="table-container">
    <table>
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Preview</th>
            <th scope="col">Nama Pesawat</th>
            <th scope="col">Nama Pilot</th>
            <th scope="col">Nomor Penerbangan</th>
            <th scope="col">Harga</th>
            <th scope="col">Jam Berangkat</th>
            <th scope="col">Tanggal Berangkat</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @php $no = 1 @endphp
        @foreach ($planes as $data)
            <tr>
                <th scope="row">{{$no++}}</th>
                <td><img class="img-tabel" src="../images/{{$data->preview}}" alt=""></td>
                <td><h3>{{$data->nama_pesawat}}</h3></td>
                <td><h3>{{$data->nama_pilot}}</h3></td>
                <td><h3>{{$data->nomor_penerbangan}}</h3></td>
                <td><h3>{{$data->harga}}</h3></td>
                <td><h3>{{$data->jam_berangkat}}</h3></td>
                <td><h3>{{$data->tanggal_berangkat}}</h3></td>
                <td>
                    <div class="icon-container">
                        <div>
                            <a href="/planes/detail/{{$data->id}}" style="color: blue;"><i class="fas fa-info-circle action-icons"></i></a>
                        </div>
                        <div class="icon-label">
                        </div>
                    </div>
                    <div class="icon-container">
                        <div>
                            <a href="#" data-toggle="modal" data-target="#studentDetailModal-{{$data->id}}" style="color: red;">
                                <i class="fas fa-trash-alt action-icons"></i>
                            </a>
                        </div>
                        <div class="icon-label">
                        </div>
                    </div>
                    <div class="icon-container">
                        <div>
                            <a href="#" style="color: yellow;"><i class="fas fa-edit action-icons"></i></a>
                        </div>
                        <div class="icon-label">
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
