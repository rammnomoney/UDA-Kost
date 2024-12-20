@extends('layouts.layout')

@push('title')

@push('addon-script-head')
<!-- Fonts -->
<link href='https://fonts.googleapis.com' rel="preconnect">

<!-- Link CSS -->
<link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!--  -->
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' id='fontawesome' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="/css/fronten.css">
@endpush

@section('content')
<!-- ISI -->

<main id="scrollup">
  <!-- Carosel -->
  <section id="explanation" class="explanation section dark-background">
    <img src="aset/img/house/Gallery house1.jpg" alt="Gambar 1">
          <div class="container " data-aos="fade-up">
            <div class="row justify-content-center">
              <div class="container section-title">
                <h3><span class="text-black"></span>UDA KOST</h3>
              </div>
              <div class="col-md-12 col-xs-12 explanation-title">
                <p><h2><i>Temukan</i> Pencarian Kos Siap Huni Di Batam</h2></p>
              </div>
                <div class="col-md-6 col-xs-12">
                  <p>Kos yang dibuat berdasarkan pengalaman tinggal di Kos pindah beberapa tempat kos
                    Berharap bisa memberikan kos yang nyaman dan efisien untuk para perantau
                  </p>
                  <br>
                  <p>Konon katanya ini kos pintar dan ownernya pengalaman nge-kost 7 tahun</p>
                </div> 
                <br>
                {{-- <div class="col-md-6">
                </div> --}}
            </div>
          </div>
  </section> 

  <!-- Fitur -->
  <section id="services" class="services section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Rekomendasi</h2>
      <p>UDA Kost!? <span class="description-title">Rekomendasikan</span></p>
    </div><!-- End Section Title -->

    <div class="sc container">
      <div class="row">
        <div class="col-md-4 col-xs-12 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-house-check-fill"></i></div>
            <h2><a href="#" class="stretched-link">FULL FURNISH</a></h2>
            <p>Tinggal bawa badan semua sudah lengkap (Kasur, Lemari, AC, Meja kerja, Wifi, Dapur, Toilet luar, Smart door & Lamp)</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-4 col-xs-12 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon"><i class='bx bxs-bookmarks'></i></div>
            <h2><a href="#" class="stretched-link">NYAMAN</a></h2>
            <p>Semua aset yang disiapkan menggunakan kualitas bukan kaleng - kaleng</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-4 col-xs-12 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon"><i class='bx bxs-file-find bx-rotate-90' ></i></div>
            <h2><a href="#" class="stretched-link">WORTH IT</a></h2>
            <p>Daerah yang lengkap untuk tinggal (Apotek, Pasar, Tempat Makan, Laundry, Bengkel)</p>
          </div>
        </div><!-- End Service Item -->

        {{-- <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
            <h4><a href="#" class="stretched-link">Nemo Enim</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div><!-- End Service Item --> --}}

      </div>
    </div>
  </section><!-- /Services Section -->
      
      
  <!-- Daftar Tempat -->
  <section id="home" class="tf-section">
      <div class="container">
        <div class="heading section-title text-center">
            <h2 class="wow fadeInUp" data-wow-delay="0.1s">Pilihan Kost Untuk Kamu</h2>
            <div class="text wow fadeInUp" data-wow-delay="0.2s"><p>Rekomendasi Kost <span class="description-title">Terbaik!</span></p></div>
        </div>

        <div class="d-flex flex justify-content-end">
          <div class="button-group">
            {{-- <a class="swiper-button-next" role="button" data-slide="next"></a>
            <a class="swiper-button-prev" role="button" data-slide="prev"></a> --}}
            <button class="btn btn-primary me-3" type="button"><a href="{{ route('list.kos') }}">Lihat Semua</a></button>
          </div>
        </div>
      </div>

      <div class="container align-items-center">
          <swiper-container pagination="true" pagination-clickable="true" slides-per-view="1" centered-slides="true" navigation="true" space-between="25" autoplay-delay="3800" autoplay-disable-on-interaction="false">
              <!-- Slide 1 -->
              <swiper-slide>
                  <div class="box-dream">
                      <div class="image">
                        <img src="aset/img/house/Gallery house2.jpg" alt="Wallpaper">
                      </div>
                      <div class="content">
                          <div class="head">
                            <div class="price">Rp815.000</div>
                            <div class="title"><a href="{{ route('list.kos') }}">UDA Kost!? 1</a></div>
                          </div>
                          <div class="location">
                              <p><i class="flaticon-location"></i> Batam, 1234</p>
                          </div>
                          <div class="icon-box">
                              <div class="item"><i class="flaticon-hotel"></i> 1 Beds</div>
                              <div class="item"><i class="flaticon-bath-tub"></i> 1 Kamar Mandi</div>
                              <div class="item"><i class="flaticon-minus-front"></i> AC, Wifi</div>
                          </div>
                      </div>
                  </div>
              </swiper-slide>
              <!-- Slide 2 -->
              <swiper-slide>
                  <div class="box-dream">
                      <div class="image">
                          <img src="aset/img/house/Gallery house2.jpg" alt="">
                      </div>
                      <div class="content">
                          <div class="head">
                            <div class="price">Rp1.200.000</div>
                            <div class="title"><a href="{{ route('list.kos') }}">UDA Kost!? 2</a></div>
                          </div>
                          <div class="location">
                              <p><i class="flaticon-location"></i> Batam, 1234</p>
                          </div>
                          <div class="icon-box">
                              <div class="item"><i class="flaticon-hotel"></i> 1 Beds</div>
                              <div class="item"><i class="flaticon-bath-tub"></i> 1 Kamar Mandi</div>
                              <div class="item"><i class="flaticon-minus-front"></i> AC, Wifi</div>
                          </div>
                      </div>
                    </div>
              </swiper-slide>
              <!-- Tambahkan slide lainnya di sini -->
              <swiper-slide>
                <div class="box-dream">
                    <div class="image">
                        <img src="aset/img/house/Gallery house2.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="head">
                          <div class="price">Rp1.200.000</div>
                          <div class="title"><a href="{{ route('list.kos') }}">UDA Kost!? 3</a></div>
                        </div>
                        <div class="location">
                            <p><i class="flaticon-location"></i> Batam, 1234</p>
                        </div>
                        <div class="icon-box">
                            <div class="item"><i class="flaticon-hotel"></i> 1 Beds</div>
                            <div class="item"><i class="flaticon-bath-tub"></i> 1 Kamar Mandi</div>
                            <div class="item"><i class="flaticon-minus-front"></i> AC, Wifi</div>
                        </div>
                      </div>
                    </div>
                  </swiper-slide>

            <swiper-slide>
              <div class="box-dream">
                  <div class="image">
                      <img src="aset/img/house/Gallery house2.jpg" alt="">
                  </div>
                  <div class="content">
                      <div class="head">
                        <div class="price">Rp1.200.000</div>
                        <div class="title"><a href="{{ route('list.kos') }}">UDA Kost!? 4</a></div>
                      </div>
                      <div class="location">
                          <p><i class="flaticon-location"></i> Batam, 1234</p>
                      </div>
                      <div class="icon-box">
                          <div class="item"><i class="flaticon-hotel"></i> 1 Beds</div>
                          <div class="item"><i class="flaticon-bath-tub"></i> 1 Kamar Mandi</div>
                          <div class="item"><i class="flaticon-minus-front"></i> AC, Wifi</div>
                      </div>
                  </div>
              </div>
            </swiper-slide>

            <swiper-slide>
              <div class="box-dream">
                  <div class="image">
                      <img src="aset/img/house/Gallery house2.jpg" alt="">
                  </div>
                  <div class="content">
                      <div class="head">
                        <div class="price">Rp1.200.000</div>
                        <div class="title"><a href="{{ route('list.kos') }}">UDA Kost!? 4</a></div>
                      </div>
                      <div class="location">
                          <p><i class="flaticon-location"></i> Batam, 1234</p>
                      </div>
                      <div class="icon-box">
                          <div class="item"><i class="flaticon-hotel"></i> 1 Beds</div>
                          <div class="item"><i class="flaticon-bath-tub"></i> 1 Kamar Mandi</div>
                          <div class="item"><i class="flaticon-minus-front"></i> AC, Wifi</div>
                      </div>
                  </div>
              </div>
            </swiper-slide>

            <swiper-slide>
              <div class="box-dream">
                  <div class="image">
                      <img src="aset/img/house/Gallery house2.jpg" alt="">
                  </div>
                  <div class="content">
                      <div class="head">
                        <div class="price">Rp1.200.000</div>
                        <div class="title"><a href="{{ route('list.kos') }}">UDA Kost!? 4</a></div>
                      </div>
                      <div class="location">
                          <p><i class="flaticon-location"></i> Batam, 1234</p>
                      </div>
                      <div class="icon-box">
                          <div class="item"><i class="flaticon-hotel"></i> 1 Beds</div>
                          <div class="item"><i class="flaticon-bath-tub"></i> 1 Kamar Mandi</div>
                          <div class="item"><i class="flaticon-minus-front"></i> AC, Wifi</div>
                      </div>
                  </div>
              </div>
            </swiper-slide>
           
          </swiper-container>
        </div>
  </section>{{--  --}}
      
  <br>
  <br>
      
  <section id="about" class="about section mt-5">
    <div class="container aos-init aos-animate">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="aset/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png" class="img-fluid" alt="Uda Kost Logo">
            </div>
            <div class="col-lg-6 order-2 order-lg-1 content">
                <h3 class="display-6">Selamat Datang di UDA Kost!?</h3>
                <p class="fst-italic mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <ul class="list-unstyled mb-4">
                    <li class="d-flex align-items-start">
                        <i class="bi bi-check2-all me-2 text-success"></i>
                        <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                    </li>
                    <li class="d-flex align-items-start">
                        <i class="bi bi-check2-all me-2 text-success"></i>
                        <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span>
                    </li>
                    <li class="d-flex align-items-start">
                        <i class="bi bi-check2-all me-2 text-success"></i>
                        <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span>
                    </li>
                </ul>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                </p>
            </div>
        </div>
    </div>
  </section>

  {{-- <div class="container mt-4 mb-4">
    <img class="iklan" src="aset/img/Udakost/Instagram Profile Picture.png" alt="Promosi">
  </div> --}}
  <br>
  
  <!-- Faq Section -->
  <section id="faq" class="faq section gap-4">
    <!-- Section Title -->
    <div class="mb-4 container section-title">
      <h2>Frequently Asked Questions</h2>
      <p><span>Seputar</span> <span class="description-title">UDA Kost!?</span></p>
    </div><!-- End Section Title -->

    <div class="accordion accordion-active" id="accordionPanelsStayOpenExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            UDA Kost!? 1
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
          <div class="accordion-body">
            <strong>This is the first item's.</strong> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro earum in, perspiciatis accusamus provident mollitia culpa unde nam vitae ea ut eligendi eveniet sequi obcaecati doloribus vel quis ipsam reprehenderit.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            UDA Kost!? 2
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
          <div class="accordion-body">
            <strong>This is the second item's.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
            UDA Kost!? 3
          </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
          <div class="accordion-body">
            <strong>This is the third item's.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
            UDA Kost!? 4
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
          <div class="accordion-body">
            <strong>This is the four item's.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>

    </div>
  </section><!-- /Faq Section -->

</main>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
<div id="preloader"></div>
@endsection


@push('addon-script-footer')
<!-- Script -->
<script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="/js/fronten.js"></script>

<!-- Inisialisasi Swiper -->
<script>
const swiperEl = document.querySelector('swiper-container')
  Object.assign(swiperEl, {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },
  // slidesPerView: 2, // Jumlah slide yang terlihat
  // spaceBetween: 20, // Jarak antar slide
  // loop: false      // Nonaktifkan looping
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },
  // pagination: {
  //   el: '.swiper-pagination',
  //   clickable: true,
  // },
  // breakpoints: { // Responsif untuk perangkat kecil
  //   320: {
  //     slidesPerView: 1,
  //     spaceBetween: 10,
  //   },
  //   768: {
  //     slidesPerView: 2,
  //     spaceBetween: 15,
  //   },
  //   1024: {
  //     slidesPerView: 3,
  //     spaceBetween: 20,
  //   },
  // },
});
swiperEl.initialize();
</script>

{{-- <script>
  var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: false,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
</script> --}}
@endpush
