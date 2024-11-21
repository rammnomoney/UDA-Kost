<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
        <title>kamar | tambah data</title>
    </head>

    <body>
        <div class="container mt-3">
            <h2>Add Kamar</h2>
            <form action="/add-kamar/{{ $kos->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="nama">nama</label>
                    <input
                        class="form-control @error('nama') is-invalid @enderror"
                        type="text"
                        name="nama"
                        value="{{ old('nama') }}"
                    />
                    <!-- notif error -->
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label for="fasilitas">fasilitas</label>
                    <textarea
                        class="form-control @error('fasilitas') is-invalid @enderror"
                        name="fasilitas"
                        value="{{ old('fasilitas') }}"
                    >
                    </textarea>
                    <!-- notif error -->
                    @error('fasilitas')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label for="harga">harga</label>
                    <input
                        class="form-control @error('harga') is-invalid @enderror"
                        type="text"
                        name="harga"
                        value="{{ old('harga') }}"
                    />
                    <!-- notif error -->
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div hidden="yes">
                    <label for="status">status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="belum disewa">Belum Disewa</option>
                        <option value="disewa">Disewa</option>
                    </select>
                </div>
                <div>
                    <label for="gambar">gambar</label>
                    <input class="form-control" type="file" name="gambar" />
                </div>
                <button class="btn btn-primary btn-lg mt-3">save</button>
            </form>
        </div>
    </body>

    <script>
        function tambahFasilitas() {
            // Buat elemen input baru untuk fasilitas
            const fasilitasContainer = document.getElementById('fasilitas-container');
            const inputGroup = document.createElement('div');
            inputGroup.classList.add('input-group', 'mb-2');
    
            const inputField = document.createElement('input');
            inputField.type = 'text';
            inputField.name = 'fasilitas[]';
            inputField.placeholder = 'Masukkan fasilitas';
            inputField.classList.add('form-control');
    
            const removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.classList.add('btn', 'btn-danger');
            removeButton.textContent = 'Hapus';
            removeButton.onclick = function() {
                fasilitasContainer.removeChild(inputGroup);
            };
    
            inputGroup.appendChild(inputField);
            inputGroup.appendChild(removeButton);
            fasilitasContainer.appendChild(inputGroup);
        }
    </script>
</html>
