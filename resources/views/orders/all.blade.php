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
            <th scope="col">Nama Hotel</th>
            <th scope="col">Tipe Kamar</th>
            <th scope="col">Kapasitas</th>
            <th scope="col">Harga</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @php $no = 1 @endphp
        @foreach ($hotels as $data)
            <tr>
                <th scope="row">{{$no++}}</th>
                <td><img class="img-tabel" src="../images/{{$data->preview}}" alt=""></td>
                <td><h3>{{$data->nama_hotel}}</h3></td>
                <td><h3>{{$data->tipe_kamar}}</h3></td>
                <td><h3>{{$data->kapasitas}}</h3></td>
                <td><h3>{{$data->harga}}</h3></td>
                <td>
                    <div class="actions">
                            <div>
                                <a href="/orders/detail/{{$data->id}}"> <button type="submit" class="details"><i style="color: white" class="fas fa-info-circle action-icons"></i>Details</button></a>
                            </div>
                                <form class="delete" action="{{ route('hotels.destroy', $data->id) }}" method="post" >
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
