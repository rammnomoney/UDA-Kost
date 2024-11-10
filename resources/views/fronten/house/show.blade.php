@extends('fronten.app')

@push('title')

@section('content')
    <!-- Awal main -->
    <div class="main-content">
    
<header class="header-top">
    <div class="overlay">
        <h3 class="property-title">DETAIL <span class="title">KOST</span></h3>
        <div class="menu justify-items-center">
            <ul class="breadcrumbs style-1">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>/</li>
                <li>House 1</li>
            </ul>
        </div>
    </div>
</header>

    <!-- property-single-wrap -->
<section id="scrollup">
    <div class="property-single-wrap sticky-container" data-sticky-container="">
        <div class="cl-container">
            <div class="row">
                
                    <!-- Kolom Kiri: Carousel Gambar Utama -->
                    <div class="col-lg-8">
                        <div class="wrap-gallery-image">
                            <!-- Carousel Gambar Utama -->
                            <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="position-relative">
                                            <img src="/img/house/Gallery house2.jpg" class="d-block w-100" alt="Image 1">
                                        </div>
                                    </div>
                                    <!-- Slide 2 -->
                                    <div class="carousel-item">
                                        <div class="position-relative">
                                            <img src="/img/house/Gallery house2.jpg" class="d-block w-100" alt="Image 2">
                                        </div>
                                    </div>
                                    <div class="list-tags position-absolute top-0 start-0">
                                        <button id="rentButton" class="btn btn-warning tags-item for-sell">FOR RENT</button>
                                        <button class="btn btn-secondary tags-item featured">FEATURED</button>
                                    </div>
                                </div>
                
                                <!-- Tombol Next dan Previous -->
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
                
                    <!-- Kolom Kanan: Thumbnail Gallery -->
                    <div class="col-lg-4">
                        <div class="row g-2">
                            <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 1">
                            </div>
                            <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 2">
                            </div>
                            <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 3">
                            </div>
                            <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 4">
                        </div>
                       
                            <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 1">
                            </div>
                            <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 2">
                            </div>
                            <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 3">
                            </div>
                            <div class="col-6">
                            <img src="/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 4">
                            </div>
                    </div>
                </div>
            </div>    

                {{-- <div class="col-lg-8">
                    <div class="wrap-gallery-image position-relative mt-1">
                        <!-- Label -->
                        <div class="list-tags type-1 position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                            <button class="btn btn-warning"><a href="#" class="tags-item for-sell">FOR RENT</a></button>
                            <button class="btn btn-warning"><a href="#" class="tags-item featured">FEATURED</a></button>
                        </div>
                        
                        <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
                
                            <!-- Carousel Inner -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/img/house/Gallery house2.jpg" class="d-block w-100" alt="Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/house/Gallery house2.jpg" class="d-block w-100" alt="Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/house/Gallery house2.jpg" class="d-block w-100" alt="Image 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/house/Gallery house2.jpg" class="d-block w-100" alt="Image 4">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/house/Gallery house2.jpg" class="d-block w-100" alt="Image 5">
                                </div>
                            </div>
                
                            <!-- Carousel Controls -->
                            <a class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                
                    </div>
                </div>
                <!-- More Photos Button -->
                <div class="col-lg-4">
                            <a href="/img/house/Gallery house2.jpg" class="more-photos position-absolute" style="bottom: 10px; right: 10px; z-index: 10;">
                                <i class="flaticon-gallery"></i>
                                <p>42 Photos</p>
                            </a>
                </div> --}}
            

                <div class="col-xl-8">
                    <div class="content-wrap">
                        <div class="head-title wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div>
                                <h3>UDA Kost!? 1</h3>
                                <div class="location">
                                    <div class="icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <div class="text-content">148-37 88th Ave, Jamaica, NY 11435</div>
                                </div>
                            </div>
                            <div>
                                <div class="square">$ 1,098 /sq ft</div>
                                <div class="price">$989,000</div>
                            </div>
                        </div>
                        <div class="box-items">
                            <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="icon">
                                    <i class="flaticon-city"></i>
                                </div>
                                <div class="text-content">Multi Family</div>
                            </div>
                            <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                <div class="icon">
                                    <i class="flaticon-hammer"></i>
                                </div>
                                <div class="text-content">Built in 1940</div>
                            </div>
                            <div class="item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="icon">
                                    <i class="flaticon-minus-front"></i>
                                </div>
                                <div class="text-content">1500 Sq Ft</div>
                            </div>
                            <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="icon">
                                    <i class="flaticon-hotel"></i>
                                </div>
                                <div class="text-content">3 Bedrooms</div>
                            </div>
                            <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                <div class="icon">
                                    <i class="flaticon-bath-tub"></i>
                                </div>
                                <div class="text-content">2 Bathrooms</div>
                            </div>
                            <div class="item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="icon">
                                    <i class="flaticon-garage"></i>
                                </div>
                                <div class="text-content">1 Garage</div>
                            </div>
                        </div>
                        <div class="desc">
                            <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Description</h4>
                            <p class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                Enchanting three bedroom, three bath home with spacious one bedroom, one bath cabana, in-laws quarters. Charming living area features fireplace and fabulous art deco details. Formal dining room.
                                <br>
                                <br>
                                Remodeled kitchen with granite countertops, white cabinetry and stainless appliances. Lovely master bedroom has updated bath, beautiful view of the pool. Guest bedrooms have walk-in, cedar closets. Delightful backyard; majestic oaks surround the free form pool and expansive patio, wet bar and grill.
                            </p>
                        </div>
                        <div class="address">
                            <div class="flex items-center justify-between gap30 flex-wrap wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                <h4 class="mb-0">Address</h4>
                                <a href="#" class="tf-button-green"><i class="flaticon-location"></i>Open On Google Maps</a>
                            </div>
                            <div class="list-item">
                                <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="text">Address</div>
                                    <p>10425 Tabor St</p>
                                </div>
                                <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <div class="text">Zip/Postal Code</div>
                                    <p>90034</p>
                                </div>
                                <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="text">City</div>
                                    <p>Los Angeles</p>
                                </div>
                                <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <div class="text">Area</div>
                                    <p>Brookside</p>
                                </div>
                                <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="text">State/county</div>
                                    <p>California</p>
                                </div>
                                <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <div class="text">Country</div>
                                    <p>United States</p>
                                </div>
                            </div>
                        </div>
                        <div class="attachments">
                            <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Property Attachments</h4>
                            <div class="wrap-file-item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                <a href="#" class="file-item">
                                    <div class="icon">
                                        <img src="images/image-box/file-pdf.svg" alt="">
                                    </div>
                                    <div>
                                        <div class="name">Ultra-Demo-PDF File</div>
                                        <div class="size">140.56 kb</div>
                                    </div>
                                </a>
                                <a href="#" class="file-item">
                                    <div class="icon">
                                        <img src="images/image-box/file-pdf.svg" alt="">
                                    </div>
                                    <div>
                                        <div class="name">Ultra-Demo-PDF File</div>
                                        <div class="size">140.56 kb</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="details">
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
                        </div>
                        
                        <div class="features">
                            <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Facts &amp; Features</h4>
                            <p class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, homero debitis temporibus in mei, at sit voluptua antiopam hendrerit. Lorem epicuri eu per. Mediocrem torquatos deseruisse te eum commodo.</p>
                            <ul>
                                <li>
                                    <h5 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Interior Details</h5>
                                    <div class="wrap-check-ellipse wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Equipped Kitchen</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Gym</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Laundry</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Media Room</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h5 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Outdoor Details</h5>
                                    <div class="wrap-check-ellipse wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Back yard</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Basketball court</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Front yard</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Garage Attached</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Hot Bath</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Pool</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h5 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Utilities Central</h5>
                                    <div class="wrap-check-ellipse wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Central Air</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Electricity</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Heating</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Natural Gas</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Ventilation</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Water</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h5 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Other Features</h5>
                                    <div class="wrap-check-ellipse wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Chair Accessible</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Elevator </p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Fireplace</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Smoke detectors</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>Washer and dryer</p>
                                        </div>
                                        <div class="check-ellipse-item">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <p>WiFi</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
</div>
@endsection