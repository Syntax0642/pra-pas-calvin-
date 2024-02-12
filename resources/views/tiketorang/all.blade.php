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
            <th scope="col">Tiket Per Orang</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @php $no = 1 @endphp
        @foreach ($tickets as $data)
            <tr>
                <th scope="row">{{$no++}}</th>
                <td><h3>{{$data->tiketperorang}}</h3></td>
                <td>
                    <div class="actions">
                        <form class="delete" action="{{ route('tiketorg.destroy', $data->id) }}" method="post" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')"><i style="color: white" class="fas fa-trash-alt action-icons"></i>Delete</button>
                            </button>
                        </form>
                        <div>
                            <a href="/tiketorang/edit/{{$data->id}}"> <button type="submit" class="edit"><i style="color: white" class="fas fa-edit action-icons"></i>Edit</button></a>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button  class="addbutton"> <a style="color: black" href="/tiketorang/add"> Add Data</a>
    </button>
</div>
</body>
</html>
