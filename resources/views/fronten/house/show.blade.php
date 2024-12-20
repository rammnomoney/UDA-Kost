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
    <div class="property-single-wrap">
        <div class="container-fluid">

    @foreach ($kamar as $tampilkamar)
        <div class="container gallery-photo">
            <div class="row">
              <div class="col-md-12">
                <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff; --swiper-navigation-size: 25px;" 
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
              </div>
            
                {{-- Gallery Foto --}}
                {{-- <div class="col-lg-4">
                    <div class="row g-2">
                        <a href="{{ $tampilkamar->gambar ? asset('storage/gambar/' . $tampilkamar->gambar) : asset('gambar/') }}" data-fancybox="gallery" class="col-6">
                            <img src="{{ $tampilkamar->gambar ? asset('storage/gambar/' . $tampilkamar->gambar) : asset('gambar/') }}" alt="Thumbnail 1">
                        </a>
                        
                        <!-- Lihat Selengkapnya -->
                        <div class="col-6">
                            <a href="{{ $tampilkamar->gambar ? asset('storage/gambar/' . $tampilkamar->gambar) : asset('gambar/') }}" data-fancybox="gallery">
                                <p class="overlay-text">Lihat Selengkapnya</p>
                            </a>
                            <div style="display:none">
                                <a data-fancybox="gallery" href="{{ $tampilkamar->gambar ? asset('storage/gambar/' . $tampilkamar->gambar) : asset('gambar/') }}">
                                  <img src="{{ asset('storage/gambar/' . $tampilkamar->gambar) }}" />
                                </a>
                                 <a data-fancybox="gallery" href="https://lipsum.app/id/62/1600x1200">
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
                        </div> 
                    </div>
                </div>--}}
            </div>  
        </div>
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
            
                {{--  Deskripsi  --}}
                <div class="row">
                    <div class="col-xl-10">
                        <div class="content-wrap detail-kos">
                            <div class="head-title wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                <div>
                                    <div class="title"><h3>{{ $tampilkamar->nama }}</h3></div>
                                    <div class="location">
                                        <div class="text-content">{{ $tampilkamar->alamat }}</div>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div>
                                        <div class="price">Rp{{ number_format($tampilkamar->price,0,",",".") }}<p> /Bulan</p></div>
                                        <button class="btn btn-primary"> {{ $tampilkamar->status }}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="box-items">
                                @if ($tampilkamar->list)
                                    @foreach (json_decode($tampilkamar->list) as $list)
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
                            </div>
                            <div class="desc container shadow-sm">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Deskripsi</h4>
                                <p class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    {{ $tampilkamar->deskripsi }}
                                    <br>
                                    <br>
                                    
                                </p>
                            </div>
                            <div class="address container shadow-sm">
                                <div class="flex items-center justify-between gap30 flex-wrap wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <h4 class="mb-0">Alamat</h4>
                                    {{-- <a href="#" class="tf-button-green"><i class="flaticon-location"></i>Open On Google Maps</a> --}}
                                </div>
                                <div class="list-item">
                                    <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="text">Alamat</div>
                                        <p>{{ $tampilkamar->alamat }}</p>
                                    </div>
                                    <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="text">Kode Pos</div>
                                        <p>{{ $tampilkamar->kodepos }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="attachments container shadow-sm">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Berkas untuk {{ $tampilkamar->nama }}</h4>
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
                            <div class="features container shadow-sm">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Fitur</h4>
                                <ul>
                                    <li>
                                        <h5 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">{{ $tampilkamar->judulfitur }}</h5>
                                        <div class="wrap-check-ellipse wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                            <div class="check-ellipse-item">
                                                <div class="icon">
                                                    <i class="flaticon-check"></i>
                                                </div>
                                                <p>{{ $tampilkamar->fitur }}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                                
                        </div>
                    </div>
                </div>
    @endforeach
        </div>
    </div>
</section>
<div class="call-button">
    <a href="https://wa.me/6281363788777/?text=Halo%20UDA Kost,%20saya%20ingin%20sewa%20kamar%20nomor {{ $tampilkamar->id }}" target="_blank">
        <button class="btn btn-success btn-sm shadow-lg" style="border-radius:50%; position: fixed; height: 70px; bottom: 20px; right: 20px;"><i class="bi bi-whatsapp"></i> Pesan</button>
    </a>
</div>
    
</div>
@endsection