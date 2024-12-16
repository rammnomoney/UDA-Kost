@extends('admins.layout.main') @section('container')
<div class="content">
    @include('admins.layout.navbar') 
    <div class="container-home">
        <div class="mt-4 p-0">
            <h2>Data Pemilik</h2>

            <!-- menu atas -->
            <div class="d-flex justify-content-between">
                <div class="">
                    <a href="/add-pemilik" class="btn btn-primary">Tambah</a>
                </div>
                <div class="d-flex">
                    <form action="/cari-pemilik" method="get" class="d-flex me-1">
                        <input type="text" name="cari" id="cari" class="form-control me-1" />
                        <button class="btn btn-primary">cari</button>
                    </form>
                    <form action="/pemilik" method="get">
                        <button class="btn btn-danger">reset</button>
                    </form>
                </div>

                <!-- flash message insert -->
                @if (Session::has('insert'))
                    <div class="alert alert-success mt-3">
                        {{ Session::get('pesan') }}
                    </div>
                @endif

                <!-- flash message update -->
                @if (Session::has('update'))
                    <div class="alert alert-success mt-3">
                        {{ Session::get('pesan') }}
                    </div>
                @endif

                <!-- flash message delete -->
                @if (Session::has('delete'))
                    <div class="alert alert-danger mt-3">
                        {{ Session::get('pesan') }}
                    </div>
                @endif
            </div>
        </div>
        <table class="table mt-3">
            <thead class="table-primary table-striped">
                <tr>
                    <td>no.</td>
                    <td>Nama</td>
                    <td>Email</td>
                    <td>Alamat</td>
                    <td>Action</td>
                </tr>
            </thead>
            @foreach ($pemilik as $p)
                <tbody class="">
                    <tr class="table-striped">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>
                            <a href="/edit-pemilik/{{ $p->id }}" class="btn btn-success">Edit</a>
                            <a href="/delete-pemilik/{{ $p->id }}"
                                onclick="return confirm('Hapus data {{ $p->nama }} ?')"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
@endsection