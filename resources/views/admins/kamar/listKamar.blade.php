@extends('admins.layout.main')
@section('container')
    <div class="content">
        @include('admins.layout.navbar')

        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary bg-dark rounded h-100 p-4">
                <div class="mb-4 p-0">
                    <div class="title-admins py-4">
                        <h2>Data Kamar {{ $kos->nama }}</h2>
                    </div>
                    <!-- menu atas  -->
                    <div class="d-flex justify-content-between">
                        <div class="p-0">
                            <a href="{{ route('admin.kamar.create' , $kos->id) }}" class="btn btn-primary">Tambah</a>
                        </div>
                        <div class="d-flex">
                            <form action="{{ route('admin.kamar.cari' , $kos->id) }}" method="GET" class="d-flex me-1">
                                <input type="text" name="cariKamar" class="form-control me-1" />
                                <button class="btn btn-primary"><i class="bi bi-search"></i></button>
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
                            <th class="col">No.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kode Pos</th>
                            <th>Price</th>
                            <th>List</th>
                            <th>Deskripsi</th>
                            <th>Judul Fitur</th>
                            <th>Fitur</th>
                            <th>Status</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($kamar as $k)
                        <tbody>
                            <tr class="table-striped">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->nama }}</td>
                                <td>{{ $k->alamat }}</td>
                                <td>{{ $k->kodepos }}</td>
                                <td>{{ $k->price }}</td>
                                <td>
                                    {{ $k->list }}
                                </td>
                                <td>{{ $k->deskripsi }}</td>
                                <td>{{ $k->judulfitur }}</td>
                                <td>{{ $k->fitur }}</td>
                                <td>{{ $k->status }}</td>
                                <td>
                                    <a href="{{ url('kamar/'.$k->id.'/upload') }}" class="btn btn-info">Tambah</a>
                                </td>
                                <td style="width: 100px; white-space: nowrap">
                                    <!-- <a href="#" class="btn btn-warning">Detail</a> -->
                                    <a href="{{ route('admin.kamar.edit' , $k->id) }}" class="btn btn-success">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <a href="{{ route('admin.kamar.destroy' , $k->id) }}"
                                        onclick="return confirm('Hapus data {{ $k->nama }} ?')"
                                        class="btn btn-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
                <div>
                    {{ $kamar->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
