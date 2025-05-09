@extends('admins.layout.main') @section('container')
    <div class="content">
        @include('admins.layout.navbar')

        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary bg-dark rounded h-100 p-4">
                <div class="mb-4 p-0">
                    <div class="title-admins py-4">
                        <h2>Laporan</h2>
                    </div>
                    <!-- menu atas  -->
                    <div>
                        <form action="/cari-laporan" method="get">
                            {{-- cari --}}
                            <div class="d-flex">
                                <input type="text" name="cari" class="form-control me-1" />
                                <button class="btn btn-primary" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                                <button class="btn btn-secondary mx-1" type="button" onclick="hide()">
                                    <i class="bi bi-filter"></i>
                                </button>
                            </div>
                            {{-- filter bulan --}}
                            <div id="hai" style="display: none">
                                <div class="form-group bg-secondary">
                                    <select name="bulan" class="form-control mb-2 mt-3">
                                        <option value="">Pilih Bulan</option>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <option value="{{ $i }}">
                                                {{ date('F', mktime(0, 0, 0, $i, 1)) }}
                                            </option>
                                        @endfor
                                    </select>
                                </div>

                                <!-- filter tahun -->
                                <div class="form-group">
                                    <select name="tahun" class="form-control mb-2">
                                        <option value="">Pilih Tahun</option>
                                        @for ($i = 2021; $i <= 2030; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>

                                <!-- filter kos -->
                                <div class="dropdown mb-4">
                                    <button class="btn dropdown-toggle shadow-0 border border-secondary text-start w-100"
                                        type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown"
                                        aria-expanded="false">
                                        Pilih KOS
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            @foreach ($kos as $k)
                                                <a class="dropdown-item" href="#">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $k->id }}" name="filter_kos[]" />
                                                        <label class="form-check-label"
                                                            for="filter_kos">{{ $k->nama }}</label>
                                                    </div>
                                                </a>
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="col">no.</th>
                                <th>Penyewa</th>
                                <th>Kos</th>
                                <th>Kamar</th>
                                <th>Tanggal Bayar</th>
                                <th>Harga</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kontrak as $k)
                                <tr class="table-striped">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $k->penyewa->nama }}</td>
                                    <td>{{ $k->kamar->nama }}</td>
                                    <td>{{ $k->kamar->nama }}</td>
                                    <td>{{ $k->tgl_bayar }}</td>
                                    <td>Rp {{ $k->kamar->harga }}</td>
                                    <td
                                        class="color : {{ $k->status === 'sudah lunas' ? 'success-text' : 'danger-text' }}">
                                        {{ $k->status }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    <a href="/laporan_pdf" class="btn btn-primary mt-3"><i class="bi bi-printer-fill"></i></a>
                </div>
            </div>
        </div>
    @endsection
