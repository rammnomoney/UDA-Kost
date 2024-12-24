@extends('layouts.layout')

@push('title')

@push('addon-script-head')
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--  -->
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' id='fontawesome' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    
    <link href="/css/detailhouse.css" rel="stylesheet">
@endpush

@section('content')
<header class="header-top">
    <div class="overlay">
        <h3 class="property-title">LIST <span class="title">KOST</span></h3>
        <div class="menu">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li>/</li>
                <li>Kost!?</li>
            </ul>
        </div>
    </div>
</header>

<main id="home">
    <section class="list-house1">
        <div class="container search-bar" style="justify-content:center;">
            <select>
                <option selected disabled>UDA Kost!? Tipe</option>
            </select>
            <input type="text" placeholder="Pencarian...">
            <button class="search-button">Cari Kos...</button>
        </div>
    </section>
    
    <section class="list-house2">
        <div class="d-flex justify-content-between mb-3 p-2">
            <h4>Hanya di <i><span class="title">#UDAKost</span></i></h4>
            <div>
                <button id="gridView" class="btn btn-primary btn-sm">Grid View</button>
                <button id="listView" class="btn btn-outline-primary btn-sm">List View</button>
            </div>
        </div>
        <div class="row property-banner" id="propertyContainer">
            @foreach ($koss as $kos)
                <div class="property-list col-lg-4 col-md-6 mb-4">
                    <div class="property-card d-flex flex-column">
                        <div class="image">
                            <img src="{{ $kos->gambar ? asset('storage/gambar/' . $kos->gambar) : asset('/aset/img/Udakost/transparent-udakost/White Vertical-Uda Kost Logo.png') }}" />
                        </div>
                        <div class="property-info">
                            <div class="head">
                                <div class="price">
                                    Rp{{ number_format($kos->price,0,",",".") }}<small> /Bulan</small>
                                </div>
                                <a href="{{ route('ke.kamar', $kos->id) }}">
                                     {{ $kos->nama }}
                                </a>
                            </div>
                            <div class="location">
                                <p>{{ $kos->alamat }}</p>
                            </div>
                            <div class="icon-box">
                                <div class="item"><i class="flaticon-location"></i> {{ $kos->list1 ?? 'N/A' }}</div> 
                                <div class="item"><i class="flaticon-square"></i> {{ $kos->list2 ?? 'N/A' }}</div> 
                                <div class="item"><i class="flaticon-bed"></i> {{ $kos->list3 ?? 'N/A' }}</div>
                            </div>
                        </div>
                    </div> 
                
                {{--<div class="property-card">
                    <div class="image">
                        <img src="/aset/img/house/Gallery house2.jpg" alt="House">
                        <div class="container"> 
                            <div class="row info-kos"> 
                                <p><span class="bg-info"> Ada Kosong </span></p> 
                            </div> 
                        </div> 
                    </div>
                    <div class="property-info">
                        <div class="head">
                            <div class="price">Rp 815,000</div>
                            <a href="{{ url('/kamar') }}">UDA Kost!? 1</a>
                        </div>
                        <div class="location">
                            <p>Batam, 1234</p>
                        </div>
                        <div class="icon-box">
                            <div class="item"><i class="flaticon-location"></i> 1 Beds</div> 
                            <div class="item"><i class="flaticon-square"></i> 1 Kamar Mandi</div> 
                            <div class="item"><i class="flaticon-bed"></i> AC, Wifi</div>
                        </div>
                    </div>
                </div>--}}
                
                </div>
            @endforeach
        </div>
    </section>
</main>
@endsection

@push('addon-script-footer')
<script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const gridViewBtn = document.getElementById('gridView');
        const listViewBtn = document.getElementById('listView');
        const container = document.getElementById('propertyContainer');

        gridViewBtn.addEventListener('click', function () {
            container.classList.remove('list-view');
        });

        listViewBtn.addEventListener('click', function () {
            container.classList.add('list-view');
        });
    });
</script>

@endpush