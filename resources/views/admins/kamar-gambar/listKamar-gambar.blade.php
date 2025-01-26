@extends('admins.layout.main')
@section('container')
    <div class="content">
        @include('admins.layout.navbar')

        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary bg-dark rounded h-100 p-4">
                <div class="mb-4 p-0">
                    <div class="title-admins py-4">
                        <h2>Data Gambar {{ $kos->nama }} (Maksimal: 10 Gambar)</h2>
                    </div>
                    
                    <!-- flash message insert -->
                    @if (Session::has('insert'))
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
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($kamarGambar as $k)
                            <tbody>
                                <tr class="table-striped">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset($k->gambar) }}" class="img-thumbnail" style="width: 250px; height: 250px; border-radius: 20px;" alt="IMG" />
                                    </td>
                                    <td>
                                        <a href="/kamar-img/{{ $k->id }} }}" class="btn btn-danger btn-md float-end"><i class="bi bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
