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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="icon" href="/aset/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png">
    <title>Kos | edit {{ $kos->nama }}</title>
</head>

<body>
    <div class="container mt-4">
        <h2>Edit Kos</h2>
        <form method="post" action="/update-kos/{{ $kos->id }}" enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') --}}
            <div>
                <label for="name">Nama Kos</label>
                <input class="form-control" type="text" name="nama" id="nama" value="{{ $kos->nama }}" />
            </div>
            <div>
                <label for="alamat">Alamat</label>
                <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $kos->alamat }}" />
            </div>
            <div>
                <label for="price">Harga</label>
                <input class="form-control" type="text" name="price" id="price" value="{{ $kos->price }}" />
            </div>
            <div>
                <label for="list">List Kos</label>
                <div class="group">
                    <input 
                        class="form-control"
                        type="text" 
                        name="list1" 
                        id="list1" 
                        value="{{ $kos->list1 }}" 
                        placeholder="Enter List 1"
                    />
                   
                    <input 
                        class="form-control"
                        type="text" 
                        name="list2" 
                        id="list2" 
                        value="{{ $kos->list2 }}" 
                        placeholder="Enter List 2"
                    />

                    <input 
                        class="form-control"
                        type="text" 
                        name="list3" 
                        id="list3" 
                        value="{{ $kos->list3 }}" 
                        placeholder="Enter List 3"
                    />
                </div>
            </div>

            {{-- <div class="form-group">
                <label for="gambar">Gambar</label>
                @if ($kos->gambar)
                    <div>
                        <img src="{{ asset($kos->gambar) }}" alt="Gambar Kos" style="max-width: 200px; margin-bottom: 10px;">
                    </div>
                @endif
                <input type="file" name="gambar" id="gambar" class="form-control">
            </div> --}}
            <div>
                <label for="gambar">Gambar</label>
                <div>
                    <img src="{{ asset('storage/gambar/' . $kos->gambar) }}" alt="Gambar Kos" style="max-width: 200px; margin-bottom: 10px;" />
                    {{-- <img src="{{ $kos->gambar ? asset('storage/gambar/' . $kos->gambar) : asset('images/') }}" alt="Gambar Kos" style="max-width: 200px; margin-bottom: 10px;"> --}}
                </div>
                <input class="form-control" type="file" name="gambar" id="gambar" />
            </div>
            <div hidden>
                <input type="text" name="pemilik_id" id="pemilik_id" value="{{ $pemilik->id }}" />
            </div>
            <button class="btn btn-primary btn-lg mt-3">Update</button>
        </form>
    </div>
</body>

</html>