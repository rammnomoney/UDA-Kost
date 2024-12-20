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
        <form method="post" action="{{ url('/update-kamar', $kamar) }}" enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') --}}
            <div>
                <label for="name">Nama Kamar</label>
                <input class="form-control" type="text" name="nama" id="nama" value="{{ $kamar->nama }}" />
            </div>
            <div>
                <div class="row">
                    <div class="col">
                        <label for="alamat">Alamat</label>
                        <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $kamar->alamat }}" />
                    </div>
                    <div class="col">
                        <label for="kodepos">Kode Pos</label>
                        <input class="form-control" type="number" name="kodepos" id="kodepos" value="{{ $kamar->kodepos }}" />
                    </div>
                </div>
            </div>
            <div>
                <label for="price">Harga</label>
                <input class="form-control" type="number" name="price" id="price" value="{{ $kamar->price }}" />
            </div>
            <div>
                <label for="list">List</label>
                    <div id="list-container">
                        @foreach (json_decode($kamar->list, true) as $list)
                            <input class="form-control mb-2" type="text" name="list[]" value="{{ $list }}" />
                        @endforeach
                    </div>
                <button type="button" id="add-list" class="btn btn-primary mt-2">Tambah List</button>
            </div>
            <div>
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi">{{ $kamar->deskripsi }}</textarea>
            </div>
            <div>
                <div class="row">
                    <div class="col">
                        <label for="judulfitur">Judul Fitur</label>
                        <input class="form-control" type="text" name="judulfitur" id="judulfitur" value="{{ $kamar->judulfitur }}" />
                    </div>
                    <div class="col">
                        <label for="fitur">Fitur</label>
                        <input class="form-control" type="text" name="fitur" id="fitur" value="{{ $kamar->fitur }}" />
                    </div>
                </div>
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
                <!-- Display current image -->
                <div>
                    @if ($kamar->gambar)
                        <img src="{{ asset('storage/gambar/' . $kamar->gambar) }}" 
                             alt="{{ $kamar->nama }}" 
                             style="max-width: 200px; margin-bottom: 10px;" />
                    @else
                        <p>No image available</p>
                    @endif
                </div>
            
                <!-- Input for updating the image -->
                <input class="form-control mb-3" type="file" name="gambar" id="gambar" value="{{ $kamar->gambar }}" />
            
                <!-- Button to add more file inputs -->
                <div class="increment">
                    <button type="button" class="btn btn-success add-btn">
                        <i class="fas fa-plus"></i> Add Another Image
                    </button>
                </div>
            
                <!-- Hidden clone template for new file inputs -->
                <div class="clone hide">
                    <div class="input-group" style="margin-top: 10px;">
                        <input class="form-control" type="file" name="gambar[]" value="{{ $kamar->gambar }}" />
                        <button type="button" class="btn btn-danger remove-btn">
                            <i class="fas fa-times"></i> Remove
                        </button>
                    </div>
                </div>
            </div>
{{--             
            <div>
                <label for="gambar">Gambar</label>
                <div>
                    <img src="{{ url('img/' . $kamar->gambar) }}"
                    value="{{ $kamar->gambar }}" style="max-width: 200px; margin-bottom: 10px;" />
                </div>
                <input class="form-control" type="file" name="gambar" id="gambar" />
            </div> --}}
            
            <button class="btn btn-primary btn-lg mt-3" type="submit">Update</button>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- Tambah input baru --}}
<script>
    document.getElementById('add-list').addEventListener('click', function() {
        const container = document.getElementById('list-container'); // Cari elemen dengan ID list-container
        const inputCount = container.querySelectorAll('input').length; // Hitung jumlah input yang ada
        const newInput = document.createElement('div'); // Buat elemen div baru
        newInput.classList.add('list-group', 'mb-2'); // Tambahkan kelas untuk styling
        newInput.innerHTML = `
                <input class="form-control" type="text" name="list[]" id="list-${inputCount}" placeholder="Masukkan list" />
            `;
        container.appendChild(newInput); // Tambahkan input baru ke dalam container
    });
</script>


<script>
    $(document).ready(function () {
        // Add file input field
        $(".add-btn").click(function () {
            if ($("input[name='gambar[]']").length < 11) {
                let lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            } else {
                alert("Batas 10 files saja.");
            }
        });

        // Remove file input field
        $("body").on("click", ".remove-btn", function () {
            $(this).closest(".input-group").remove();
        });
    });
</script> 

</html>