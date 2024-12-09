@extends('layouts.layout')

@push('title')

@push('addon-script-head')
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/fronten.css">
    <link rel="stylesheet" href="/css/detailhouse.css">

    <!--  -->
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' id='fontawesome' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endpush

@section('content')
<header class="header-top">
    <div class="overlay">
        <h3 class="property-title">LIST <span class="title">KOST</span></h3>
        <div class="menu">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li>/</li>
                <li>Kost !?</li>
            </ul>
        </div>
    </div>
</header>

<main>
    <section id="home" class="list-house">
        <div class="search-bar" style="justify-content:center;">
            <select>
                <option selected disabled>UDA Kost!? Tipe</option>
            </select>
            <input type="text" placeholder="Pencarian...">
            <button class="search-button btn btn-danger">Cari Kos...</button>
        </div>
            
        <div class="property-banner">
            @foreach ($koss as $kos)
                <div class="property-list">
                    <div class="property-card">
                        <div class="image">
                            <img src="{{ $kos->gambar ? Storage::url($kos->gambar) : asset('public/gambar') }}" />
                        </div>
                        <div class="property-info">
                            <div class="head">
                                <div class="price">Rp {{ number_format($kos->price) }}</div>
                                <a href=" kamar-kos/{id} ">{{ $kos->nama }}</a>
                            </div>
                            <div class="location">
                                <p>{{ $kos->alamat }}</p>
                            </div>
                            <div class="icon-box">
                                <div class="item"><i class="flaticon-location"></i> 1 Beds</div> 
                                <div class="item"><i class="flaticon-square"></i> 1 Kamar Mandi</div> 
                                <div class="item"><i class="flaticon-bed"></i> AC, Wifi</div>
                            </div>
                        </div>
                    </div> 
                {{--<div class="property-card">
                    <div class="image">
                        <img src="/img/house/Gallery house2.jpg" alt="House">
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