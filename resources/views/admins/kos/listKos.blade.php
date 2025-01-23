@extends('admins.layout.main') @section('container')
    <div class="content">
        @include('admins.layout.navbar')

        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary bg-dark rounded h-100 p-4">
                <div class="mb-4 p-0">
                    <h2>Data Kos</h2>
                    <!-- menu atas  -->
                    <div class="d-flex justify-content-between">
                        <div class="p-0">
                            <a href="/add-kos" class="btn btn-primary">Tambah</a>
                        </div>
                        <div class="d-flex">
                            <form action="/cari-kos" method="get" class="d-flex me-1">
                                <input type="text" name="cariKos" id="cariKos" class="form-control me-1" />
                                <button class="btn btn-primary">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </div>
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

                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="col">No.</td>
                                <td>Nama Kos</td>
                                <td>Alamat</td>
                                <td>Harga</td>
                                <td>List 1</td>
                                <td>List 2</td>
                                <td>List 3</td>
                                <td>Gambar</td>
                                <td>Kamar / Action</td>
                            </tr>
                        </thead>
                        @foreach ($kos as $k)
                            <tbody>
                                <tr class="table-striped">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $k->nama }}</td>
                                    <td>{{ $k->alamat }}</td>
                                    <td>{{ $k->price }}</td>
                                    <td>{{ $k->list1 }}</td>
                                    <td>{{ $k->list2 }}</td>
                                    <td>{{ $k->list3 }}</td>
                                    <td>
                                        @if ($k->gambar == null)
                                            <p>-</p>
                                        @else
                                            <img src="{{ url('storage/gambar/' . $k->gambar) }}" width="150px" />
                                        @endif
                                    </td>
                                    <td style="width: 100px; white-space: nowrap">
                                        <a href="/kamar/{{ $k->id }}" class="btn btn-warning">
                                            <i class="bi bi-info-circle-fill"></i></a>
                                        <a href="/edit-kos/{{ $k->id }}" class="btn btn-success">
                                            <i class="bi bi-pencil-fill"></i></a>
                                        <a href="/delete-kos/{{ $k->id }}"
                                            onclick="return confirm('Hapus data {{ $k->nama }} ?')"
                                            class="btn btn-danger">
                                            <i class="bi bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
                <div>
                    {{ $kos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
