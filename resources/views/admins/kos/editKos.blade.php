<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <title>Kos | edit {{ $kos->nama }}</title>
</head>

<body>
    <div class="container mt-4">
        <h2>Edit Kos</h2>
        <form method="post" action="/update-kos/{{ $kos->id }}" enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') --}}
            <div>
                <label for="name">Nama Kos</label>
                <input class="form-control" type="text" name="nama" id="nama" value="{{ $kos->nama }}" />
            </div>
            <div>
                <label for="alamat">Alamat</label>
                <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $kos->alamat }}" />
            </div>
            <div>
                <label for="price">Harga</label>
                <input class="form-control" type="number" name="price" id="price" value="{{ $kos->price }}" />
            </div>
            <div>
                <label for="image">Gambar</label>
                <input class="form-control" type="file" name="image" id="image" />
            </div>
            <button class="btn btn-primary btn-lg mt-3">save</button>
        </form>
    </div>
</body>

</html>