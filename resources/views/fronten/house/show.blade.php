@extends('fronten.page')

@push('title')

@section('content')
    <!-- Awal main -->
    <div class="main-content">
    
<header class="header-top">
    <div class="overlay">
        <h3 class="property-title">DETAIL <span class="title">KOST</span></h3>
        <div class="menu justify-items-center">
            <ul class="breadcrumbs style-1">
                <li><a href="/">Home</a></li>
                <li>/</li>
                <li>{{ __('Kamar') }}</li>
            </ul>
        </div>
    </div>
</header>
<br>
    <!-- property-single-wrap -->
<section id="scrollup">
    <div class="property-single-wrap sticky-container" data-sticky-container="">
        <div class="cl-container">

            @foreach ($kamar as $k)
            <div class="row">
                <!-- Kolom Kiri: Carousel Gambar Utama -->
                <div class="col-lg-8">
                    <div class="wrap-gallery-image">
                        <!-- Carousel Gambar Utama -->
                        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" style="border-radius: 20px 0px 0px 20px">
                                <div class="carousel-item active">
                                    <div class="position-relative">
                                        <img src="/aset/img/house/Gallery house2.jpg" class="d-block w-100" alt="Image 1">
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="carousel-item">
                                    <div class="position-relative">
                                        <img src="/aset/img/house/Gallery house2.jpg" class="d-block w-100" alt="Image 2">
                                    </div>
                                </div>
                                <div class="list-tags position-absolute g-2 top-0 start-0">
                                    {{-- <button id="rentButton" class="btn btn-warning tags-item for-sell">FOR RENT</button> --}}
                                    <button class="btn btn-primary">FEATURED</button>
                                </div>
                            </div>
            
                            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-4">
                    <div class="row g-2">
                        <a class="col-6" href="/aset/img/house/Gallery house2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="{{ $k->gambar ? asset('storage/gambar/' . $k->gambar) : asset('images/') }}" class="img-fluid" alt="Thumbnail 1">
                        </a>
                        
                        <a class="col-6" href="/aset/img/house/Gallery house2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="{{ $k->gambar ? asset('storage/gambar/' . $k->gambar) : asset('images/') }}" class="img-fluid" alt="Thumbnail 2" style="border-radius: 0px 20px 0px 0px">
                        </a> 

                        {{-- <a class="col-6" href="/aset/img/house/Gallery house2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="{{ $k->gambar ? asset('storage/gambar/' . $k->gambar) : asset('images/') }}" class="img-fluid" alt="Thumbnail 3">
                        </a>
                        
                        <a class="col-6" href="/aset/img/house/Gallery house2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="{{ $k->gambar ? asset('storage/gambar/' . $k->gambar) : asset('images/') }}" class="img-fluid" alt="Thumbnail 4">
                        </a> --}}
                       
                        {{-- <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 3" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="/img/house/Gallery house2.jpg">
                        </div>
                        <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 4" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="/img/house/Gallery house2.jpg">
                        </div>
                    
                        <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 5" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="/img/house/Gallery house2.jpg">
                        </div>
                        <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 6" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="/img/house/Gallery house2.jpg">
                        </div>
                        <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 7" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="/img/house/Gallery house2.jpg">
                        </div>
                        <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 8" style="border-radius: 0px 0px 20px 0px" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="/img/house/Gallery house2.jpg">
                        </div> --}}
                    </div>
                </div>
            </div>  

                {{-- Preview foto --}}
                <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="{{ $k->gambar }}" id="modalImage" class="img-fluid" alt="Full Image">
                            </div>
                            <div class="modal-footer mx-2">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                {{-- Deskripsi --}}
                <div class="row">
                    <div class="col-xl-10">
                        <div class="content-wrap">
                            <div class="head-title wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                <div>
                                    <div class="title"><h3>{{ $k->nama }}</h3></div>
                                    <div class="location">
                                        <div class="text-content">{{ $k->alamat }}</div>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div>
                                        <div class="price">Rp {{ number_format($k->price) }}<p> /Bulan</p></div>
                                        <button class="btn btn-primary"> {{ $k->status }}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="box-items">
                                @if ($k->list)
                                    @foreach (json_decode($k->list) as $list)
                                        <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="icon">
                                                <i class="flaticon-city"></i>
                                            </div>
                                            <div class="text-content">{{ $list }}</div>
                                        </div>
                                    @endforeach
                                {{-- @else
                                    <p class="text-muted">Belum ada list tersedia.</p> --}}
                                @endif
                                <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-hammer"></i>
                                    </div>
                                    <div class="text-content"></div>
                                </div>
                                {{-- <div class="item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-minus-front"></i>
                                    </div>
                                    <div class="text-content"></div>
                                </div>
                                <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-hotel"></i>
                                    </div>
                                    <div class="text-content"></div>
                                </div>
                                <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-bath-tub"></i>
                                    </div>
                                    <div class="text-content"></div>
                                </div>
                                <div class="item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon">
                                        <i class="flaticon-garage"></i>
                                    </div>
                                    <div class="text-content"></div>
                                </div> --}}
                            </div>
                            <div class="desc container shadow-sm">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Deskripsi</h4>
                                <p class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    {{ $k->deskripsi }}
                                    <br>
                                    <br>
                                    
                                </p>
                            </div>
                            <div class="address container shadow-sm">
                                <div class="flex items-center justify-between gap30 flex-wrap wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <h4 class="mb-0">Address</h4>
                                    {{-- <a href="#" class="tf-button-green"><i class="flaticon-location"></i>Open On Google Maps</a> --}}
                                </div>
                                <div class="list-item">
                                    <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="text">Address</div>
                                        <p>{{ $k->alamat }}</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="text">Zip/Postal Code</div>
                                        <p>Lorem ipsum</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="text">City</div>
                                        <p>Lorem ipsum</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="text">Area</div>
                                        <p>Lorem ipsum</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="text">State/county</div>
                                        <p>Lorem ipsum</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="text">Country</div>
                                        <p>Lorem ipsum</p>
                                    </div>
                                </div>
                            </div>
                            <div class="attachments container shadow-sm">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Attachments</h4>
                                <div>
                                    <a href="/aset/udakost-preview.pdf" class="file-item">
                                        <div class="icon">
                                            <img src="#" alt="">
                                        </div>
                                        <div>
                                            <div class="name">UDAKost!?.PDF 1</div>
                                        </div>
                                    </a>
                                    <a href="/aset/udakost-preview.pdf" class="file-item">
                                        <div class="icon">
                                            <img src="#" alt="">
                                        </div>
                                        <div>
                                            <div class="name">UDAKost!?.PDF 2</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            {{-- <div class="details container shadow-sm">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Details</h4>
                                <div class="list-item">
                                    <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="text">Property ID:</div>
                                        <p>HZ48</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="text">Garage:</div>
                                        <p>1</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="text">Price:</div>
                                        <p>$252,000</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="text">Garage Size:</div>
                                        <p>200 SqFt</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="text">Property Size:</div>
                                        <p>1500 Sq Ft</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="text">Year Built:</div>
                                        <p>2024</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="text">Bedrooms:</div>
                                        <p>6</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="text">Property Type:</div>
                                        <p>Apartment</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="text">Bathrooms:</div>
                                        <p>4</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="text">Property Status:</div>
                                        <p>For Sale</p>
                                    </div>                                            
                                </div>
                            </div> --}}
                            
                            <div class="features container shadow-sm">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Features</h4>
                                <p class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, homero debitis temporibus in mei, at sit voluptua antiopam hendrerit. Lorem epicuri eu per. Mediocrem torquatos deseruisse te eum commodo.</p>
                                <ul>
                                    <li>
                                        <h5 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Lorem ipsum</h5>
                                        <div class="wrap-check-ellipse wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>{{ $k->fitur }}</p>
                                            </div>
                                            {{-- <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div> --}}
                                        </div>
                                    </li>
                                    {{-- <li>
                                        <h5 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Lorem ipsum</h5>
                                        <div class="wrap-check-ellipse wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h5 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Lorem ipsum</h5>
                                        <div class="wrap-check-ellipse wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <h5 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Lorem ipsum</h5>
                                        <div class="wrap-check-ellipse wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>Lorem ipsum</p>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                                
                        </div>
                    </div>
                </div>
            @endforeach
                {{-- <div class="col-lg-4">
                    <div class="sidebar-right" style="color: cornflowerblue;">
                        <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                            <div class="price-call-box"> 
                                <div class="price-box"> 
                                    <label>Mulai</label> 
                                    <br>
                                    <span> <strong>Rp 900.000</strong> / Bulan </span> 
                                </div>  
                            </div>
                        </div>
                    </div>
                </div> --}}

            <div class="call-button">
                <a href="https://wa.me/6281363788777/?text=Halo%20UDA Kost,%20saya%20ingin%20sewa%20kamar%20nomor" target="_blank">
                    <button class="btn btn-success btn-sm shadow-lg" style="border-radius:50%; position: fixed; height: 70px; bottom: 20px; right: 20px;"><i class="bi bi-whatsapp"></i> Pesan</button>
                </a>
            </div>
        </div>
    </div>
</section>
    
</div>
@endsection