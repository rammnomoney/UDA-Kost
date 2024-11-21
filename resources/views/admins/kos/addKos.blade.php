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
        <form action="{{ route('add-kos') }}" method="post">
            @csrf
            <div>
                <label for="image">Gambar</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" name="image"
                    id="image" value="{{ old('image') }}" />
                <!-- notif error -->
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="price">Harga</label>
                <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price"
                    value="{{ old('price') }}" />
                <!-- notif error -->
                @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="name">Nama Kos</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name"
                value="{{ old('name') }}" />
                <!-- notif error -->
                @error('name')
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
            {{-- <div>
                <label for="type">Jenis Kost</label>
                <input class="form-control @error('type') is-invalid @enderror" type="text" name="type"
                    id="type" value="{{ old('type') }}" />
                <!-- notif error -->
                @error('no_telp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div> --}}
            <div hidden="yes">
                <input type="text" name="pemilik_id" id="pemilik_id" value="{{ $pemilik->id }}" />
            </div>
            <button class="btn btn-primary btn-lg mt-3">save</button>
        </form>
    </div>
</body>

</html>