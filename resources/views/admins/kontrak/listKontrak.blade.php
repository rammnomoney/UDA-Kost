@extends('admins.layout.main') @section('container')
    <div class="content">
        @include('admins.layout.navbar')

        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary bg-dark rounded h-100 p-4">
                <div class="mb-4 p-0">
                    <div class="title-admins py-4">
                        <h2>Data Kontrak</h2>
                    </div>
                    <!-- menu atas  -->
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <a href="/add-kontrak/{{ $id }}" class="btn btn-primary">Tambah</a>
                        </div>
                        <div class="d-flex">
                            <form action="{{ url('cari-kontrak/' . $id . '/cari') }}" method="get" class="d-flex me-1">
                                <input type="text" name="cariKontrak" class="form-control me-1" />
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
                                <th class="col">No.</th>
                                <th>Penyewa</th>
                                <th>Kamar</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Action</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        @foreach ($kontrak as $k)
                            <tbody>
                                <tr class="table-striped">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $k->penyewa->nama }}</td>
                                    <td>{{ $k->kamar->nama }}</td>
                                    <td>{{ $k->tgl_mulai }}</td>
                                    <td>{{ $k->tgl_selesai }}</td>

                                    <td class="table-action">
                                        <a href="/edit-kontrak/{{ $k->id }}" class="btn btn-success">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                        <a href="/delete-kontrak/{{ $k->id }}"
                                            onclick="return confirm('Hapus data {{ $k->nama_penyewa }} ?')"
                                            class="btn btn-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>
                                    </td>
                                    <td class="table-action">
                                        <a href="/status/{{ $k->id }}"
                                            class="btn {{ $k->status == 'sudah lunas' ? 'btn-success' : 'btn-primary' }} btn-primary">{{ $k->status }}
                                        </a>
                                        @if ($k->status == 'sudah lunas')
                                            <a href="/print/{{ $k->id }}" class="btn btn-warning">print</a>
                                        @else
                                            <a href="/tagih/{{ $k->id }}" class="btn btn-warning">tagih</a>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
                {{ $kontrak->links() }}
            </div>
        </div>
    </div>
@endsection
