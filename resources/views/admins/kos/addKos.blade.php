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
        <title>Kos | Tambah Data</title>
</head>

<body>
    <div class="container mt-4">
        <h2>Add Kos</h2>
        <form method="POST" action="/add-kos" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="nama">Nama Kos</label>
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
                <label for="alamat">Alamat</label>
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
                <label for="price">Harga</label>
                <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" placeholder="Price"
                    id="price" value="{{ old('price') }}" />
                <!-- notif error -->
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="list">List Kos</label>
                <div class="row">
                    <div class="col">
                        <input 
                            class="form-control @error('list1') is-invalid @enderror" 
                            type="text" 
                            name="list1" 
                            id="list1" 
                            value="{{ old('list1') }}" 
                            placeholder="Enter List 1"
                        />
                        @error('list1')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <input 
                            class="form-control @error('list2') is-invalid @enderror" 
                            type="text" 
                            name="list2" 
                            id="list2" 
                            value="{{ old('list2') }}" 
                            placeholder="Enter List 2"
                        />
                        @error('list2')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <input 
                            class="form-control @error('list3') is-invalid @enderror" 
                            type="text" 
                            name="list3" 
                            id="list3" 
                            value="{{ old('list3') }}" 
                            placeholder="Enter List 3"
                        />
                        @error('list3')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div>
                <label for="gambar">Gambar</label>
                <input class="form-control" type="file" name="gambar" />
            </div>
            <div hidden>
                <input type="text" name="pemilik_id" id="pemilik_id" value="{{ $pemilik->id }}" />
            </div>
            <button class="btn btn-primary btn-lg mt-3">Tambah</button>
        </form>
    </div>
</body>

{{-- <script>
    var harga = document.getElementById('price');
    harga.addEventListener('keyup', function(e) {
        harga.value = formatRupiah(this.value, ' ');
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? ' ' + rupiah : '');
    }
</script> --}}

</html>
