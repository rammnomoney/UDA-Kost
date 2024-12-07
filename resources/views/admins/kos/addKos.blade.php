<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <title>Kos | Tambah Data</title>
</head>

<body>
    <div class="container mt-4">
        <h2>Add Kos</h2>
        <form method="post" action="/add-kos" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="nama">Nama Kos</label>
                <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama"
                    id="nama" value="{{ old('nama') }}" />
                <!-- notif error -->
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="alamat">Alamat</label>
                <input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat" id="alamat"
                value="{{ old('alamat') }}" />
                <!-- notif error -->
                @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="price">Harga</label>
                <input class="form-control @error('price') is-invalid @enderror" type="number" name="price" id="price"
                value="{{ old('price') }}" />
                <!-- notif error -->
                @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="image">Gambar</label>
                <input class="form-control" type="file" name="gambar" />
            </div>
            <button class="btn btn-primary btn-lg mt-3">save</button>
        </form>
    </div>
</body>

</html>