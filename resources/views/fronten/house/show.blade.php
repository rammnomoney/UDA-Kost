@extends('fronten.page')

@push('title')

    @section('content')
        <!-- Awal main -->
        <div class="main-content">

            <header class="header-top" data-aos="zoom-out">
                <div class="overlay">
                    <h3 class="property-title">DETAIL <span class="title">KOST</span></h3>
                    <div class="menu justify-items-center">
                        <ul class="breadcrumbs style-1">
                            <li><a href="/">BERANDA</a></li>
                            <li>/</li>
                            <li>{{ $kamar->nama }}</li>
                        </ul>
                    </div>
                </div>
            </header>
            <br>
            <!-- property-single-wrap -->
            <section id="scrollup">
                <div class="property-single-wrap">
                    <div class="container-fluid">

                        <div class="container gallery-photo" data-aos="zoom-in">
                            <div class="row mx-0">
                                {{-- Carousel --}}
                                <div class="col-md-6">
                                    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner" style="width:100%; height:100%; object-fit: cover;">
                                            {{-- @if (!empty($kamargambars->gambar) && is_array($kamargambars->gambar)) --}}
                                            @if (!empty($kamar->gambar))
                                                @foreach ($kamar as $key => $kamarImg)
                                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                        <div class="position-relative">
                                                            <img src="{{ Storage::url($kamarImg->gambar) }}"
                                                                class="d-block w-100" alt="Image {{ $key + 1 }}">
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="list-tags position-absolute g-2 top-0 start-0">
                                                    <button class="text-light btn btn-outline-dark">FEATURED</button>
                                                </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                {{-- Gallery carousel --}}
                                <div class="col-md-6" style="border-radius: 0px 20px 20px 0px;">
                                    <div class="row g-2">
                                        @foreach ($kamar as $key => $kamarImg)
                                            <div class="col-md-6">
                                                <img src="{{ Storage::url($kamarImg->gambar) }}"
                                                    class="img-fluid thumb" data-bs-target="#mainCarousel"
                                                    data-bs-slide-to="{{ $key }}"
                                                    style="border-radius: 0px 20px 0px 0px;">
                                            </div>
                                        @endforeach

                                        <div class="col-md-6 position-relative">
                                            @foreach ($kamar as $kamarImg)
                                                <a href="#" data-fancybox="gallery">
                                                    <img src="{{ Storage::url($kamarImg->gambar) }}"
                                                        class="img-fluid thumb blur-effect"
                                                        style="border-radius: 0px 0px 20px 0px;">
                                                    <div class="overlay-text">
                                                        <p>Tampilkan</p>
                                                    </div>
                                                </a>
                                                <!-- Hidden images for FancyBox -->
                                                <div style="display: none;">
                                                    <a data-fancybox="gallery"
                                                        href="{{ Storage::url($kamarImg->gambar) }}">
                                                        <img src="{{ Storage::url($kamarImg->gambar) }}" />
                                                    </a>
                                            @endforeach
                                                </div>
                                            </div>
                                    @else
                                        <p class="text-center"><b>Tidak ada gambar</b></p>
                                    @endif
                                    </div>
                                </div>

                                {{--  --}}
                                {{-- <div class="col-md-6">
                                <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" style="width:100%; height:100%; object-fit: cover;">
                                        <div class="carousel-item active">
                                            <div class="position-relative">
                                                <img src="/aset/img/house/Gallery house2.jpg" class="d-block w-100" alt="Image 1">
                                            </div>
                                        </div>
                                        <!-- Slide 2 -->
                                        <div class="carousel-item">
                                            <div class="position-relative">
                                                <img src="/aset/img/house/Gallery house3.png" class="d-block w-100" alt="Image 2">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="position-relative">
                                                <img src="/aset/img/house/Gallery house8.jpeg" class="d-block w-100" alt="Image 3">
                                            </div>
                                        </div> 
                                        <div class="list-tags position-absolute g-2 top-0 start-0">
                                            <button class="text-light btn btn-outline-dark">FEATURED</button>
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
                            {{-- Gallery carousel
                            <div class="col-md-6" style="border-radius: 0px 20px 20px 0px;">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <img src="/aset/img/house/Gallery house2.jpg" class="img-fluid thumb" data-bs-target="#mainCarousel"  data-bs-slide-to="0">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="/aset/img/house/Gallery house3.png" class="img-fluid thumb" data-bs-target="#mainCarousel" data-bs-slide-to="1" style="border-radius: 0px 20px 0px 0px;">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="/aset/img/house/Gallery house8.jpeg" class="img-fluid thumb" data-bs-target="#mainCarousel" data-bs-slide-to="2">
                                    </div>
                                    <div class="col-md-6 position-relative">
                                        <a href="/aset/img/house/Gallery house5.jpeg" data-fancybox="gallery">
                                            <img src="/aset/img/house/Gallery house5.jpeg" class="img-fluid thumb blur-effect" style="border-radius: 0px 0px 20px 0px;">
                                            <div class="overlay-text">
                                                <p>Tampilkan</p>
                                            </div>
                                        </a>

                                        <div style="display:none">
                                            <a data-fancybox="gallery" href="/aset/img/house/Gallery house2.jpg">
                                            <img src="/aset/img/house/Gallery house2.jpg" />
                                            </a>
                                            <a data-fancybox="gallery" href="/aset/img/house/Gallery house3.png">
                                            <img src="/aset/img/house/Gallery house3.png" />
                                            </a>
                                            <a data-fancybox="gallery" href="/aset/img/house/Gallery house8.jpeg">
                                            <img src="/aset/img/house/Gallery house8.jpeg" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    {{-- <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff; --swiper-navigation-size: 25px;" 
                  class="mySwiper" thumbs-swiper=".mySwiper2" space-between="10" navigation="true">
                  @if (!empty($tampilkamar->images) && is_array($tampilkamar->images))
                        @foreach ($tampilkamar->images as $image)
                            <swiper-slide>
                                <img src="{{ $image->gambar }}" alt="Image {{ $loop->iteration }}" />
                            </swiper-slide>
                        @endforeach
                    @else
                        <swiper-slide>
                            <p>No images available</p>
                        </swiper-slide>
                    @endif
                </swiper-container>
              
                <swiper-container class="mySwiper2" space-between="10" slides-per-view="4" free-mode="true"
                  watch-slides-progress="true">
                  @if (!empty($tampilkamar->images) && is_array($tampilkamar->images))
                        @foreach ($tampilkamar->images as $image)
                            <swiper-slide>
                                <img src="{{ $image->gambar }}" alt="Image {{ $loop->iteration }}" />
                            </swiper-slide>
                        @endforeach
                    @else
                        <swiper-slide>
                            <p>No images available</p>
                        </swiper-slide>
                    @endif
                </swiper-container>
              </div> --}}


                    {{-- Gallery Foto --}}
                    {{-- <div class="col-md-6" style="border-radius: 0px 20px 20px 0px;">
                    <div class="row g-2">
                         <div class="col-md-3">
                            <img src="/aset/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 7" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="/img/house/Gallery house2.jpg">
                        </div>
                        <div class="col-md-3">
                            <img src="/aset/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 8" style="border-radius: 0px 0px 20px 0px" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="/img/house/Gallery house2.jpg">
                        </div> 
                        <div class="col-md-3">
                            <img src="/aset/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 5" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="/img/house/Gallery house2.jpg">
                        </div>
                        <div class="col-md-3">
                            <img src="/aset/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 6" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="/img/house/Gallery house2.jpg">
                        </div>
                        <div class="col-md-3">
                            <img src="/aset/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 7" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="/img/house/Gallery house2.jpg">
                        </div>
                        <div class="col-md-3">
                            <img src="/aset/img/house/Gallery house2.jpg" class="img-fluid" alt="Thumbnail 8" style="border-radius: 0px 0px 20px 0px" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="/img/house/Gallery house2.jpg">
                        </div> 
                    </div>
                </div>  --}}

                    {{-- Preview foto --}}
                    {{-- <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
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
                </div> --}}

                    {{-- <div class="col-lg-4">
                    <div class="row g-2">
                        <a href="https://lipsum.app/id/62/1600x1200" data-fancybox="gallery" class="col-6">
                            <img src="https://lipsum.app/id/62/1600x1200" alt="Thumbnail 1">
                        </a>
                        
                        <!-- Lihat Selengkapnya 
                        <div class="col-6">
                            <a href="https://lipsum.app/id/62/1600x1200" data-fancybox="gallery">
                                <p class="overlay-text">Lihat Selengkapnya</p>
                            </a>
                            <div style="display:none">
                                {{-- <a data-fancybox="gallery" href="{{ $tampilkamar->gambar ? asset('storage/gambar/' . $tampilkamar->gambar) : asset('gambar/') }}">
                                  <img src="{{ asset('storage/gambar/' . $tampilkamar->gambar) }}" />
                                </a> --}}
                    {{-- <a data-fancybox="gallery" href="https://lipsum.app/id/62/1600x1200">
                                  <img src="https://lipsum.app/id/62/120x80" />
                                </a>
                                <a data-fancybox="gallery" href="https://lipsum.app/id/63/1600x1200">
                                  <img src="https://lipsum.app/id/63/120x80" />
                                </a> 
                            </div>
                        </div> --}}

                    {{-- <a class="col-6" href="/aset/img/house/Gallery house2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="{{ $k->gambar ? asset('storage/gambar/' . $k->gambar) : asset('images/') }}" class="img-fluid" alt="Thumbnail 4">
                        </a> --}}

                    {{-- </div> 
                 </div> --}}



                    {{--  Deskripsi  --}}
                    <div class="container p-2">
                        <div class="row">
                            <div class="col-xl-10">
                                <div class="content-wrap detail-kos">
                                    <div class="head-title wow fadeInUp animated"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div data-aos="flip-up" data-aos-delay="100">
                                            <div class="title">
                                                <h3>{{ $kamar->nama }}</h3>
                                            </div>
                                            <div class="location">
                                                <div class="text-content">{{ $kamar->alamat }}</div>
                                            </div>
                                        </div>
                                        <div class="price-box" data-aos="flip-up" data-aos-delay="300">
                                            <div>
                                                <div class="price">Rp{{ number_format($kamar->price, 0, ',', '.') }}<span>
                                                        /Bulan</span></div>
                                                <div class="text-content"><b>{{ $kamar->status }}</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-items" data-aos="fade-up">
                                        @if ($kamar->list)
                                            @foreach (json_decode($kamar->list) as $list)
                                                <div class="item wow fadeInUp animated"
                                                    style="visibility: visible; animation-name: fadeInUp;">
                                                    <div class="icon">
                                                        <i class="flaticon-city"></i>
                                                    </div>
                                                    <div class="text-content">{{ $list }}</div>
                                                </div>
                                            @endforeach
                                            {{-- @else
                                        <p class="text-muted">Belum ada list tersedia.</p> --}}
                                        @endif
                                    </div>
                                    <div class="desc container shadow-sm" data-aos="fade-up">
                                        <h4 class="wow fadeInUp animated"
                                            style="visibility: visible; animation-name: fadeInUp;">Deskripsi</h4>
                                        <p class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                            {{ $kamar->deskripsi }}
                                            <br>
                                            <br>
                                        </p>
                                    </div>
                                    <div class="address container shadow-sm" data-aos="fade-up">
                                        <div class="flex items-center justify-between gap30 flex-wrap wow fadeInUp animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <h4 class="mb-0">Alamat</h4>
                                            {{-- <a href="#" class="tf-button-green"><i class="flaticon-location"></i>Open On Google Maps</a> --}}
                                        </div>
                                        <div class="list-item">
                                            <div class="item wow fadeInUp animated"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="text">Lokasi</div>
                                                <p>{{ $kamar->alamat }}</p>
                                            </div>
                                            <div class="item wow fadeInUp animated" data-wow-delay="0.1s"
                                                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                                <div class="text">Kode Pos</div>
                                                <p>{{ $kamar->kodepos }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="attachments container shadow-sm" data-aos="fade-up">
                                        <h4 class="wow fadeInUp animated"
                                            style="visibility: visible; animation-name: fadeInUp;">Berkas untuk
                                            {{ $kamar->nama }}</h4>
                                        <div>
                                            <a href="#" class="file-item">
                                                <div class="icon">
                                                    <img src="#" alt="">
                                                </div>
                                                <div>
                                                    <div class="name">UDAKost.PDF 1</div>
                                                </div>
                                            </a>
                                            <a href="#" class="file-item">
                                                <div class="icon">
                                                    <img src="#" alt="">
                                                </div>
                                                <div>
                                                    <div class="name">UDAKost.PDF 2</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="features container shadow-sm" data-aos="fade-up">
                                        <div>
                                            <h4 class="wow fadeInUp animated"
                                                style="visibility: visible; animation-name: fadeInUp;">Fitur</h4>
                                        </div>
                                        <div class="list-item">
                                            <div class="item wow fadeInUp animated">
                                                <div class="text">{{ $kamar->judulfitur }}</div>
                                                <p>{{ $kamar->fitur }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <ul>
                                        <li>
                                            <h5 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">{{ $kamar->judulfitur }}</h5>
                                            <div class="wrap-check-ellipse wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                                <div>
                                                    <p>{{ $kamar->fitur }}</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </section>
        <div class="call-button">
            <a href="https://wa.me/6281363788777/?text=Halo%20UDA Kost,%20saya%20ingin%20sewa%20kamar%20nomor {{ $kamar->id }}"
                target="_blank">
                <button class="btn btn-success btn-sm shadow-lg"
                    style="border-radius:50%; position: fixed; height: 70px; bottom: 20px; right: 20px;"><i
                        class="bi bi-whatsapp"></i> Pesan</button>
            </a>
        </div>

        </div>
    @endsection
