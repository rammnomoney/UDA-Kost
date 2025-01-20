@extends('admins.layout.main') @section('container')
    <div class="content">
        @include('admins.layout.navbar')

        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary bg-dark rounded h-100 p-4">
                <!-- content -->
                <div class="mb-4 p-0">
                    <h2>Data Penyewa</h2>
                    <!-- menu atas -->
                    <div class="d-flex justify-content-between">
                        <div class="p-0">
                            <a href="/add-penyewa" class="btn btn-primary">Tambah</a>
                        </div>
                        <form action="/cari-penyewa" method="get" class="d-flex me-1">
                            <input type="text" name="cariPenyewa" id="cariPenyewa" class="form-control me-1" />
                            <button class="btn btn-primary">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- flash message insert -->
                    @if (Session::has('insert'))
                        <div class="alert alert-success">
                            {{ Session::get('pesan') }}
                        </div>
                    @endif

                    <!-- flash message update -->
                    @if (Session::has('update'))
                        <div class="alert alert-success">
                            {{ Session::get('pesan') }}
                        </div>
                    @endif

                    <!-- flash message delete -->
                    @if (Session::has('delete'))
                        <div class="alert alert-danger">
                            {{ Session::get('pesan') }}
                        </div>
                    @endif
                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="col">No.</td>
                                <td>NIK</td>
                                <td>Nama</td>
                                <td>Alamat</td>
                                <td>No. HP</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penyewa as $p)
                                <tr class="table-striped">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->nik }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>{{ $p->no_telp }}</td>
                                    <td style="width: 100px; white-space: nowrap">
                                        <a href="/edit-penyewa/{{ $p->id }}" class="btn btn-warning">
                                            <i class="bi bi-pencil-fill" style="color: white"></i></a>
                                        <a href="/delete-penyewa/{{ $p->id }}" class="btn btn-danger"
                                            onclick="confirm('Apakah anda yakin ingin menghapus data ini?')">
                                            <i class="bi bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            <div>
                {{ $penyewa->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
