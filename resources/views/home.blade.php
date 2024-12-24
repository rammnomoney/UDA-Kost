@extends('admins.layout.main') 

@section('container')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="content">
    @include('admins.layout.navbar') 
<!-- Navbar End -->

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary bg-dark rounded h-100 p-4">
        <div class="mb-4"><h2>Selamat Datang {{ Auth::user()->name }}!</h2></div>
        <div class="row g-4">
            <div class="col-md-3">
                    <a href="/kos" class="btn-dashboard btn btn-primary d-flex justify-content-left align-items-center p-4">
                        <div class="background-icon">
                            <div class="bi-house-fill"></div>
                        </div>
                        <div class="m-auto">
                            <p class="p-text fw-bold"></p>
                            <p class="p-text fw-bold">{{ $kos }}</p>
                            <p class="fw-semi">TOTAL KOS</p>
                        </div>
                    </a>
            </div>
            <div class="col-md-3">
                <a href="/penyewa" class="btn-dashboard btn btn-success d-flex justify-content-left align-items-center p-4">
                    <div class="background-icon">
                        <div class="bi-person-fill"></div>
                    </div>
                    <div class="m-auto">
                        <p class="p-text fw-bold"></p>
                        <p class="p-text fw-bold">{{ $penyewa }}</p>
                        <p class="fw-semi">PENYEWA</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="/pilih-kos" class="btn-dashboard btn btn-warning d-flex justify-content-left align-items-center p-4">
                    <div class="background-icon">
                        <div class="bi-file-text-fill"></div>
                    </div>
                    <div class="m-auto">
                        <p class="p-text fw-bold"></p>
                        <p class="p-text fw-bold">{{ $sudahLunas }}</p>
                        <p class="fw-semi">SUDAH LUNAS</p>
                    </div>
                </a>    
            </div>
            <div class="col-md-3">
                <a href="/pilih-kos" class="btn-dashboard btn btn-danger d-flex justify-content-left align-items-center p-4">
                    <div class="background-icon">
                        <div class="bi-graph-up-arrow"></div>
                    </div>
                    <div class="m-auto">
                        <p class="p-text fw-bold"></p>
                        <p class="p-text fw-bold">{{ $belumLunas }}</p>
                        <p class="fw-semi">BELUM LUNAS</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
            <div class="bg-secondary bg-dark rounded h-100 mt-4 p-4">
                <h3 class="mb-4 fw-bold">Info Pemilik</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            @if(isset($pemilik) && $pemilik->count() > 0)
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pemilik->nama }}</td>
                                <td>{{ $pemilik->email }}</td>
                                <td>{{ $pemilik->alamat }}</td>
                            </tr>
                                @else
                                <tr>
                                    <td class="text-center">No data available</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
