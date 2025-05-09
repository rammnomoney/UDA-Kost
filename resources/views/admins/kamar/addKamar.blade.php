<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <link rel="stylesheet" href="/css/admin/admin.css">

    <link rel="icon" href="/aset/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png">
    <title>Kamar | Tambah Data</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="link-button mb-2">
                        <a class="float-end" href="{{ route('admin.kamar.index' , $id) }}">Kembali</a>
                    </div>
                    <div class="card-body">
                        <h2 class="mb-4">Tambah Kamar</h2>
                        <form method="POST" action="{{ route('admin.kamar.store' , $id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mt-5 mb-4">
                                <input class="form-control @error('nama') is-invalid @enderror" type="text"
                                    placeholder="Nama Kamar" name="nama" id="nama"
                                    value="{{ old('nama') }}" />
                                <!-- notif error -->
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <div class="row">
                                    <div class="col">
                                        <input class="form-control @error('alamat') is-invalid @enderror" type="text"
                                            placeholder="Alamat" name="alamat" id="alamat"
                                            value="{{ old('alamat') }}" />
                                        <!-- notif error -->
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="number" name="kodepos" id="kodepos"
                                            placeholder="Kode Pos" value="{{ old('kodepos') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-4">
                                <input class="form-control @error('price') is-invalid @enderror" type="number"
                                    placeholder="Harga" name="price" id="price" value="{{ old('price') }}" />
                                <!-- notif error -->
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <div class="list-group" id="list-container">
                                    <input class="form-control form-control-sm" type="text" name="list[]"
                                        placeholder="Masukkan list" />
                                </div>
                            </div>
                            <div class="input-group mb-4">
                                <button type="button" id="add-list" class="btn btn-primary btn-md mt-2">+ List</button>
                            </div>
                            <div class="input-group mb-4">
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" type="text" name="deskripsi"
                                    placeholder="Deskripsi" value="{{ old('deskripsi') }}">
                                </textarea>
                                <!-- notif error -->
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <div class="row">
                                    <div class="col">
                                        <input class="form-control @error('judulfitur') is-invalid @enderror"
                                            type="text" name="judulfitur" id="judulfitur" placeholder="Judul Fitur"
                                            value="{{ old('judulfitur') }}" />
                                        <!-- notif error -->
                                        @error('judulfitur')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input class="form-control @error('fitur') is-invalid @enderror" type="text"
                                            name="fitur" placeholder="Fitur" value="{{ old('fitur') }}">
                                        <!-- notif error -->
                                        @error('fitur')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div hidden>
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="tersedia">Tersedia</option>
                                    <option value="tidak tersedia">Tidak Tersedia</option>
                                </select>
                            </div>
                            {{-- <div class="input-group mb-4">
                                <input class="form-control" type="file" name="gambar[]" id="gambar" multiple />
                            </div> --}}

                            <button type="submit" class="btn btn-primary btn-md mt-3">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- Tambah input baru --}}
<script>
    document.getElementById('add-list').addEventListener('click', function() {
        const container = document.getElementById('list-container'); // Cari elemen dengan ID list-container
        const inputCount = container.querySelectorAll('input').length; // Hitung jumlah input yang ada

        if (inputCount < 10) {
            const newInput = document.createElement('div'); // Buat elemen div baru
            newInput.classList.add('list-group', 'mb-2'); // Tambahkan kelas untuk styling
            newInput.innerHTML = `
                <input class="form-control form-control-sm mt-2" type="text" name="list[]" placeholder="Masukkan list" />
            `;
            container.appendChild(newInput); // Tambahkan input baru ke dalam container
        } else {
            alert('Maksimal 10 list saja!');
        }

    });
</script>

{{--  --}}
{{-- <script>
    $(document).ready(function () {
    // Add file input field
    $(".add-btn").click(function () {
        // Pastikan jumlah file tidak lebih dari 10
        if ($("input[name='gambar[]']").length < 11) {
            let lsthmtl = $(".clone").html();
            $("#file-container").append(lsthmtl); // Menambahkan elemen baru
        } else {
            alert("Anda hanya dapat mengunggah maksimal 10 file.");
        }
    });

    // Remove file input field
    $("body").on("click", ".remove-btn", function () {
        $(this).closest(".input-group").remove();
    });
});
</script> --}}

{{-- Price --}}
{{-- <script>
    var harga = document.getElementById('price');
    harga.addEventListener('keyup', function(e) {
        harga.value = formatRupiah(this.value, '');
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
        return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
    }
</script> --}}

</html>
