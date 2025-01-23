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
    <title>Kos | edit {{ $kos->nama }}</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="link-button mb-2">
                        <a class="float-end" href="/kos">Kembali</a>
                    </div>
                    <div class="card-body">
                        <h2 class="mb-4">Edit Kos</h2>
                        <form method="post" action="/update-kos/{{ $kos->id }}" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mt-5 mb-4">
                                <input class="form-control" type="text" name="nama" id="nama"
                                    placeholder="Nama Kos" value="{{ $kos->nama }}" />
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-control" type="text" name="alamat" id="alamat"
                                    placeholder="Alamat" value="{{ $kos->alamat }}" />
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-control" type="number" name="price" id="price"
                                    placeholder="Harga" value="{{ $kos->price }}" />
                            </div>
                            <div class="input-group mb-4">
                                <div class="row">
                                    <div class="col">
                                        <input class="form-control" type="text" name="list1" id="list1"
                                            value="{{ $kos->list1 }}" placeholder="Enter List 1" />
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="text" name="list2" id="list2"
                                            value="{{ $kos->list2 }}" placeholder="Enter List 2" />
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="text" name="list3" id="list3"
                                            value="{{ $kos->list3 }}" placeholder="Enter List 3" />
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <div>
                                    <img src="{{ asset('storage/gambar/' . $kos->gambar) }}" alt="Gambar Kos"
                                        style="max-width: 200px; margin-bottom: 10px;" />
                                </div>
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-control" type="file" name="gambar" id="gambar" />
                            </div>
                            <div hidden>
                                <input type="text" name="pemilik_id" id="pemilik_id" value="{{ $pemilik->id ?? ''}}" />
                            </div>
                            <button class="btn btn-primary btn-md mt-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
