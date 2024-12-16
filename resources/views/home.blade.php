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

<div class="container-home">
    <div class="mt-4">
        <h2>Dashboard</h2>
    </div>
        <div class="d-flex justify-content-between">
            <a href="/kos" class="btn-dashboard btn btn-primary d-flex justify-content-left align-items-center">
                <div class="background-icon">
                    <div class="bi-house-fill"></div>
                </div>
                <div class="m-auto">
                    <p class="p-text fw-bold"></p>
                    <p class="p-text fw-bold">{{ $kos }}</p>
                    <p class="fw-semi">TOTAL KOS</p>
                </div>
            </a>
            <a href="/penyewa" class="btn-dashboard btn btn-success d-flex justify-content-left align-items-center">
                <div class="background-icon">
                    <div class="bi-person-fill"></div>
                </div>
                <div class="m-auto">
                    <p class="p-text fw-bold"></p>
                    <p class="p-text fw-bold">{{ $penyewa }}</p>
                    <p class="fw-semi">PENYEWA</p>
                </div>
            </a>
            <a href="/pilih-kos" class="btn-dashboard btn btn-warning d-flex justify-content-left align-items-center">
                <div class="background-icon">
                    <div class="bi-file-text-fill"></div>
                </div>
                <div class="m-auto">
                    <p class="p-text fw-bold"></p>
                    <p class="p-text fw-bold">{{ $sudahLunas }}</p>
                    <p class="fw-semi">SUDAH LUNAS</p>
                </div>
            </a>
            <a href="/pilih-kos" class="btn-dashboard btn btn-danger d-flex justify-content-left align-items-center">
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
        <div>
            <h3 class="mt-4 fw-bold">Info Pemilik</h3>
            <table class="table">
                <tbody>
                    @if(isset($pemilik))
                    <tr>
                        <td>Nama Kos</td>
                        <td>{{ $pemilik->nama }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $pemilik->email }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $pemilik->alamat }}</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div>
            <a href="/logout">LOGOUT</a>
        </div>
    </div>
</div>
@endsection
