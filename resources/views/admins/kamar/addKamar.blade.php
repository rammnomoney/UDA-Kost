<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body{
                overflow-y: scroll;
            }
        </style>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"/>
        <title>Kamar | Tambah Data</title>
    </head>

    <body>
        <div class="container mt-3">
            <h2>Add Kamar</h2>
            <form method="post" action="/add-kamar/" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="nama">Nama Kamar</label>
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
                    <input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat" id="alamat"
                    value="{{ old('alamat') }}" />
                    <!-- notif error -->
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label for="price">Harga</label>
                    <input class="form-control @error('price') is-invalid @enderror" type="number" name="price" id="price"
                    value="{{ old('price') }}" />
                    <!-- notif error -->
                    @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label for="list">List</label>
                    <div id="list-container"> 
                        <div class="list-group">
                            <input type="text" name="list[]" class="form-control mb-2" placeholder="Masukkan list 1" />
                        </div>   
                    </div>
                    <button type="button" id="add-list" class="btn btn-primary mt-2">Tambah List</button>
                </div>                
                <div>
                    <label for="deskripsi">Deskripsi</label>
                    <textarea
                        class="form-control @error('deskripsi') is-invalid @enderror" type="text" name="deskripsi" value="{{ old('deskripsi') }}">
                    </textarea>
                    <!-- notif error -->
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label for="fitur">Fitur</label>
                    <input class="form-control @error('fitur') is-invalid @enderror" type="text" name="fitur" value="{{ old('fitur') }}">
                    <!-- notif error -->
                    @error('fitur')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div hidden="yes">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="tersedia">Tersedia</option>
                        <option value="tidak tersedia">Tidak Tersedia</option>
                    </select>
                </div>
                <div>
                    <label for="gambar">Gambar</label>
                    <input class="form-control" type="file" name="gambar" />
                </div>
                <button class="btn btn-primary btn-lg mt-3">Save</button>
            </form>
        </div>
    </body>

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
