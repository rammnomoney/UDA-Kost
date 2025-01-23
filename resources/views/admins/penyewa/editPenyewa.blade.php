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
    <title>Penyewa | Edit {{ $penyewa->nama }}</title>
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
                        <h2 class="mb-4">Edit Penyewa</h2>
                        <form action="/update-penyewa/{{ $penyewa->id }}" method="post">
                            @csrf
                            <div class="input-group mt-5 mb-4">
                                <input class="form-control" type="text" name="nik" id="nik"
                                    placeholder="NIK*" value="{{ $penyewa->nik }}" />
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-control" type="text" name="nama" id="nama"
                                    placeholder="Nama*" value="{{ $penyewa->nama }}" />
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-control" type="text" name="email" id="email"
                                    placeholder="Email*" value="{{ $penyewa->email }}" />
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-control" type="text" name="alamat" id="alamat"
                                    placeholder="Alamat*" value="{{ $penyewa->alamat }}" />
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-control" type="text" name="no_telp" id="no_telp"
                                    placeholder="Nomor HP*" value="{{ $penyewa->no_telp }}" />
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
