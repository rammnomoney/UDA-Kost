<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <link rel="stylesheet" href="/css/admin/admin.css">

    <link rel="icon" href="/aset/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png">
    <title>Penyewa | Tambah Data</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="link-button mb-2">
                        <a class="float-end" href="/penyewa">Kembali</a>
                    </div>
                    <div class="card-body">
                        <h2 class="mb-4">Tambah Penyewa</h2>
                        <form action="add-penyewa" method="post">
                            @csrf
                            <div class="input-group mt-5 mb-4">
                                <input class="form-control @error('nik') is-invalid @enderror" type="text"
                                    name="nik" id="nik" placeholder="NIK*" value="{{ old('nik') }}" />
                                <!-- notif error -->
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-control @error('nama') is-invalid @enderror" type="text"
                                    name="nama" id="nama" placeholder="Nama*" value="{{ old('nama') }}" />
                                <!-- notif error -->
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-control @error('email') is-invalid @enderror" type="text"
                                    name="email" id="email" placeholder="Email*" value="{{ old('email') }}" />
                                <!-- notif error -->
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-control @error('alamat') is-invalid @enderror" type="text"
                                    name="alamat" id="alamat" placeholder="Alamat*" value="{{ old('alamat') }}" />
                                <!-- notif error -->
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-control @error('no_telp') is-invalid @enderror" type="text"
                                    name="no_telp" id="no_telp" placeholder="Nomor HP*" value="{{ old('no_telp') }}" />
                                <!-- notif error -->
                                @error('no_telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="btn btn-primary btn-md mt-3">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
