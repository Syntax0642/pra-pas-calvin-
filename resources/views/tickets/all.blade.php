<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
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
            <th scope="col">Nama Pesanan</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Berangkat Dari</th>
            <th scope="col">Destinasi</th>
            <th scope="col">Tipe Pesanan</th>
            <th scope="col">Kuota Ticket</th>
            <th scope="col">Jam Berangkat</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @php $no = 1 @endphp
        @foreach ($tickets as $data)
            <tr>
                <th scope="row">{{$no++}}</th>
                <td><h3>{{$data->nama_pesanan}}</h3></td>
                <td><h3>{{$data->nama_pemesan}}</h3></td>
                <td><h3>{{$data->berangkat_dari}}</h3></td>
                <td><h3>{{$data->destinasi}}</h3></td>
                <td><h3>{{$data->tipe_pesanan}}</h3></td>
                <td><h3>{{$data->tiket_orang}}</h3></td>
                <td><h3>{{$data->jam_berangkat}}</h3></td>
                <td>
                    <div class="actions">
                        <div>
                            <a href="/tickets/detail/{{$data->id}}"> <button type="submit" class="details"><i style="color: white" class="fas fa-info-circle action-icons"></i>Details</button></a>
                        </div>
                        <form class="delete" action="{{ route('tickets.destroy', $data->id) }}" method="post" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')"><i style="color: white" class="fas fa-trash-alt action-icons"></i>Delete</button>
                            </button>
                        </form>
                        <div>
                            <a href="/orders/detail/{{$data->id}}"> <button type="submit" class="edit"><i style="color: white" class="fas fa-edit action-icons"></i>Edit</button></a>
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
