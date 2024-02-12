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
        <h2>Edit Ticket Per Orang</h2>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('/tiketorang/update/' . $tiketorang->id) }}">
            @csrf
            @method('PUT')
            <label for="tiketperorang">Tiker Per Orang:</label>
            <input type="text" name="tiketperorang" value="{{ $tiketorang->tiketperorang }}" required>
            <div class="bback">
                <a href="/tiketorang/all">
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
