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
    <title>Kontrak | edit {{ $kontrak->penyewa->nama }}</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="link-button mb-2">
                        <a class="float-end" href="/laporan">Kembali</a>
                    </div>
                    <div class="card-body">
                        <h2 class="mb-4">Edit Kontrak</h2>
                        <form action="/update-kontrak/{{ $kontrak->id }}" method="post">
                            @csrf
                            <div class="input-group mt-5 mb-4">
                                <select name="penyewa_id" id="penyewa_id" class="form-control">
                                    <option value="{{ $kontrak->penyewa->id }}">
                                        {{ $kontrak->penyewa->nama }}
                                    </option>

                                    @foreach ($penyewa as $p)
                                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-4">
                                <select name="kamar_id" id="kamar_id" class="form-control">
                                    <option value="{{ $kontrak->kamar->id }}">
                                        {{ $kontrak->kamar->nama }}
                                    </option>

                                    @foreach ($kamar as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-4">
                                <input type="date" class="form-control" name="tgl_mulai" id="tgl_mulai"
                                    placeholder="Tanggal Mulai"  value="{{ $kontrak->tgl_mulai }}" />
                            </div>
                            <div class="input-group mb-4">
                                <input type="date" class="form-control" name="tgl_selesai" id="tgl_selesai"
                                    placeholder="Tanggal Selesai" value="{{ $kontrak->tgl_selesai }}" />
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
