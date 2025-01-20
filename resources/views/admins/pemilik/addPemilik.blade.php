<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            overflow-y: scroll;
        }
    </style>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
        <link rel="icon" href="/aset/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png">
        <title>Pemilik | Tambah Data</title>
</head>

<body>
    <div class="container mt-3">
        <h2>Tambah Pemilik</h2>
        <form action="add-pemilik" method="post">
            @csrf
            <div>
                <label for="nama">Nama*</label>
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
                <label for="email">Email*</label>
                <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                    id="email" value="{{ old('email') }}" />
                <!-- notif error -->
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="alamat">Alamat*</label>
                <input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat"
                    id="alamat" value="{{ old('alamat') }}" />
                <!-- notif error -->
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="password">Password*</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                    id="password" value="{{ old('password') }}" />
                <!-- notif error -->
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-primary btn-lg mt-3">Simpan</button>
        </form>
    </div>
</body>

</html>
