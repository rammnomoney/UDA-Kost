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
    <title>Kamar | Edit {{ $kamar->nama }}</title>
</head>

<body>
    <div class="container mt-3">
        <h2>Edit Kamar</h2>
        <form method="post" action="/update-kamar/{{ $kamar->id }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Nama Kamar</label>
                <input class="form-control" type="text" name="nama" id="nama" value="{{ $kamar->nama }}" />
            </div>
            <div>
                <label for="alamat">Alamat</label>
                <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $kamar->alamat }}" />
            </div>
            <div>
                <label for="price">Harga</label>
                <input class="form-control" type="number" name="price" id="price" value="{{ $kamar->price }}" />
            </div>
            <div>
                <label for="list">List</label>
                <input class="form-control" type="text" name="list" id="list" value="{{ $kamar->list }}" />
            </div>
            <div>
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi">{{ $kamar->deskripsi }}</textarea>
            </div>
            <div>
                <label for="fitur">Fitur</label>
                <input class="form-control" type="text" name="fitur" id="fitur" value="{{ $kamar->fitur }}" />
            </div>
            <div>
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="tersedia">Tersedia</option>
                    <option value="tidak tersedia">Tidak Tersedia</option>
                </select>
            </div>
            <div>
                <label for="gambar">Gambar</label>
                <div>
                    <img src="{{ url('img/' . $kamar->gambar) }}"
                    value="{{ $kamar->gambar }}" style="max-width: 200px; margin-bottom: 10px;" />
                </div>
                <input class="form-control" type="file" name="gambar" id="gambar" />
            </div>
            
            <button class="btn btn-primary btn-lg mt-3">Update</button>
        </form>
    </div>
</body>

</html>