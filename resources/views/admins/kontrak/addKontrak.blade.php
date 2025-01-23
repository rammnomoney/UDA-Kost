<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="/css/admin/admin.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="icon" href="/aset/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png">
    <title>Kontrak | Tambah data</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="link-button mb-2">
                        <a class="float-end" href="/kontrak/{id}">Kembali</a>
                    </div>
                    <div class="card-body">
                        <h2 class="mb-4">Tambah Kontrak</h2>
                        <form action="/add-kontrak/{{ $kos }}" method="post">
                            @csrf
                            <div class="input-group mt-5 mb-4">
                                <select name="penyewa_id" id="penyewa_id"
                                    class="form-control @error('penyewa_id') is-invalid @enderror">
                                    @foreach ($penyewa as $p)
                                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                    @endforeach
                                </select>
                                <!-- notif error -->
                                @error('penyewa_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <select name="kamar_id" id="kamar_id"
                                    class="form-control @error('kamar_id') is-invalid @enderror">
                                    @foreach ($kamar as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                    @endforeach
                                </select>
                                <!-- notif error -->
                                @error('kamar_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <input type="date" class="form-control @error('tgl_mulai') is-invalid @enderror"
                                    name="tgl_mulai" id="tgl_mulai" placeholder="Tanggal Masuk" value="{{ old('tgl_mulai') }}" />
                                <!-- notif error -->
                                @error('tgl_mulai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <input type="date" class="form-control @error('tgl_selesai') is-invalid @enderror"
                                    name="tgl_selesai" id="tgl_selesai" placeholder="Tanggal Keluar" value="{{ old('tgl_selesai') }}" />
                                <!-- notif error -->
                                @error('tgl_selesai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div hidden>
                                <label for="status">status</label>
                                <select name="status" id="status"
                                    class="form-control @error('status') is-invalid @enderror" value="belum lunas">
                                    <option value="belum lunas">belum lunas</option>
                                    <option value="lunas">lunas</option>
                                </select>
                                @error('status')
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
