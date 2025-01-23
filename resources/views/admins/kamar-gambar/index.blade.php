<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <link rel="stylesheet" href="/css/admin/admin.css">

    <link rel="icon" href="/aset/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png">
    <title>Gambar Kamar</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="link-button mb-2">
                        <a class="float-end" href="{{ url('/kamar/{id}') }}">Kembali</a>
                    </div>
                    <div class="card-body">
                        <h3 class="mb-4">Tambah Gambar Kamar</h3>
                        <hr>
                        @if ($errors->any())
                            <ul class="alert alert-warning">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif

                        <form action="{{ url('kamar/' . $kamar->id . '/upload') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <h5>Nomor: {{ $kamar->nama }}</h5>
                            <div class="input-group mb-4">
                                <label>Gambar (Maksimal: 10 Gambar)</label>
                                <input class="form-control" type="file" name="gambar[]" id="gambar" multiple />
                            </div>
                            <button class="btn btn-primary btn-md mt-4" type="submit">Tambah</button>
                        </form>
                        <hr>
                        <div class="mt-5">
                            <h5>Gambar yang sudah ada:</h5>
                            <div class="row">
                                @foreach ($kamarGambar as $kamarImg)
                                    <div class="col-md-4 mt-4">
                                        <img src="{{ asset($kamarImg->gambar) }}" class="img-thumbnail"
                                            style="width: 250px; height: 250px; border-radius: 20px;" alt="IMG" />
                                        <a href="{{ url('/kamar-img/' . $kamarImg->id) }}"
                                            class="btn btn-danger btn-md float-end"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
