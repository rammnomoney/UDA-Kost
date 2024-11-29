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
        <div class="menu justify-items-center">
            <ul class="breadcrumbs style-1">
                <li><a href="/">Home</a></li>
                <li>/</li>
                <li>House 1</li>
            </ul>
        </div>
    </div>
</header>

<main>
    <section id="home" class="list-house">
        <div class="search-bar">
            <input type="text" placeholder="Pencarian...">
            <select>
                <option>UDA Kost!? Tipe</option>
            </select>
            <input type="text" placeholder="Location">
            <button class="search-button btn btn-danger">Search Property</button>
        </div>
            
        <div class="property-banner">
            @foreach ($koss as $kos)
            <div class="property-list">
                <div class="property-card">
                    <div class="image">
                        <img src="{{ Storage::url($kos->image) }}" alt="Oakwood Manor Estates" />
                    </div>
                    <div class="property-info">
                        <div class="head">
                            <div class="price">{{ number_format($kos->price) }}</div>
                            <a href="{{ url('/fronten/house/show') }}">{{ $kos->nama }}</a>
                        </div>
                        <p>{{ $kos->alamat }}</p>
                        <p><i class="flaticon-location"></i> Appartment &nbsp; <i class="flaticon-square"></i> 2468 Sq &nbsp; <i class="flaticon-bed"></i> 5 Beds</p>
                    </div>
                </div>
                {{-- <div class="property-card">
                    <div class="image">
                        <img src="/img/house/Gallery house2.jpg" alt="Willowbrook Grey Estate">
                    </div>
                    <div class="property-info">
                        <div class="head">
                            <div class="price">Rp148,000</div>
                            <a href="{{ url('../fronten/house/show') }}">Willowbrook Grey Estate</a>
                        </div>
                        <p>75835 Herta Walks, Indonesia, ID 796326</p>
                        <p><i class="flaticon-location"></i> Appartment &nbsp; <i class="flaticon-square"></i> 2468 Sq &nbsp; <i class="flaticon-bed"></i> 2 Beds</p>
                    </div>
                </div> --}}
            </div>
            @endforeach
        </div>
    </section>
</main>
@endsection