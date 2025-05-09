@extends('layouts.layout')

@push('title')

@push('addon-script-head')
<!-- Fonts -->
<link href='https://fonts.googleapis.com' rel="preconnect">

<!-- Link CSS -->
<link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!--  -->
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' id='fontawesome' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/fronten.css') }}">
@endpush

@section('content')

<!-- ISI -->
<main id="scrollup">

  <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border" style="color:#007bb6; width: 3rem; height: 3rem;" role="status">
    </div>
  </div>

  <section id="explanation" class="explanation section dark-background">
    <img src="\aset\img\house\Gallery House10.jpg" alt="Gambar 1">
          <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
              <div class="container mb-4">
                <h3><span class="text"></span>UDA KOST</h3>
              </div>
              <div class="col-md-12 col-xs-12 explanation-title">
                <p><h2><i>Temukan Pencarian Kos</i> Siap Huni Di Batam</h2></p>
              </div>
                <div class="col-md-6 col-xs-12">
                  <p>Kos yang dibuat berdasarkan pengalaman tinggal di Kos pindah beberapa tempat kos
                    Berharap bisa memberikan kos yang nyaman dan efisien untuk para perantau
                  </p>
                  <br>
                  <p>Konon katanya ini <strong>kos pintar</strong> dan ownernya pengalaman nge-kost 7 tahun</p>
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
    <div class="container service-title" data-aos="fade-up">
      <h2>Apa Yang Baru</h2>
      <p>Rasa Yang Pernah Ada Dari <span class="description-title">UDA Kost!?</span></p>
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

        <div class="col-md-4 col-xs-12 d-flex" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon"><i class='bx bxs-bookmarks'></i></div>
            <h2><a href="#" class="stretched-link">NYAMAN</a></h2>
            <p>Semua aset yang disiapkan menggunakan kualitas bukan kaleng - kaleng!</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-4 col-xs-12 d-flex" data-aos="fade-up" data-aos-delay="900">
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
      <div class="container" data-aos="fade-up">
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

      <div class="container" data-aos="fade-zoom-in">
          <swiper-container style="--swiper-navigation-color: #007bb6; --swiper-pagination-color: #007bb6; pagination="true" pagination-clickable="true" slides-per-view="1" centered-slides="true" navigation="true" space-between="25" autoplay-delay="3800" autoplay-disable-on-interaction="false">
              <!-- Slide 1 -->
              @foreach($koss as $kos)
              <swiper-slide>
                  <div class="box-dream">
                      <div class="image">
                        <img src="{{ $kos->gambar ? asset('storage/gambar/' . $kos->gambar) : asset('/aset/img/Udakost/transparent-udakost/White Vertical-Uda Kost Logo.png') }}" alt="Wallpaper">
                      </div>
                      <div class="content">
                          <div class="head">
                            <div class="price">Rp{{ number_format($kos->price, 0,",",".") }} /Bulan</div>
                            <div class="title"><a href="{{ route('ke.kamar', ['id' => $kos->id]) }}">{{ $kos->nama }}</a></div>
                          </div>
                          <div class="location">
                              <p><i class="flaticon-location"></i> {{ $kos->alamat }}</p>
                          </div>
                          <div class="icon-box">
                              <div class="item"><i class="flaticon-hotel"></i> {{ $kos->list1 ?? 'N/A' }}</div>
                              <div class="item"><i class="flaticon-bath-tub"></i> {{ $kos->list2 ?? 'N/A' }}</div>
                              <div class="item"><i class="flaticon-minus-front"></i> {{ $kos->list3 ?? 'N/A' }}</div>
                          </div>
                      </div>
                  </div>
              </swiper-slide>
              @endforeach         
          </swiper-container>
        </div>
  </section>{{--  --}}      
  <br>
  <br>
  <section id="about" class="about section mt-5">
    <div class="container aos-init aos-animate">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="400">
                <img src="{{ asset('aset/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png') }}" class="img-fluid" alt="Uda Kost Logo">
            </div>
            <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-zoom-in" data-aos-delay="100" data-aos-easing="ease-in-back">
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
    <div class="mb-4 container section-title" data-aos="fade-up">
      <h2>Frequently Asked Questions</h2>
      <p><span>Seputar</span> <span class="description-title">UDA Kost!?</span></p>
    </div><!-- End Section Title -->

    <div class="accordion accordion-active" id="accordionPanelsStayOpenExample">
      <div class="accordion-item" data-aos="zoom-in">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            Urusan Bayar - Membayar
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
          <div class="accordion-body">
            <ul>
              <li><p>Bayar kos tepat waktu ya! ini boleh banget apalagi kalau dikasih bonus</p></li>
              <li><p>Bayar kos itu penting. biar listrik, air kita lancar terus dan bisa meningkatkan kualitas kosan, Boleh banget semisal ada kendala boleh diskusi sama UDA</p></li>
            </ul>
            {{-- <strong>This is the first item's.</strong> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro earum in, perspiciatis accusamus provident mollitia culpa unde nam vitae ea ut eligendi eveniet sequi obcaecati doloribus vel quis ipsam reprehenderit. --}}
          </div>
        </div>
      </div>
      <div class="accordion-item" data-aos="zoom-in-up">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            Keamanan Kita
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
          <div class="accordion-body">
            <ul>
              <li><p>Kunci pintur kamar dan pintu utama selalu, ya!</p></li>
              <li><p>Kalau ada barang hilang atau rusak, kasih tahu UDA biar kita cari maling & solusinya bareng - bareng.</p></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item" data-aos="zoom-in-up">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
            Kebersihan Kost Kita
          </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
          <div class="accordion-body">
            <ul>
              <li><p>Jaga kamar dan area umum agar selalu bersih dan rapi</p></li>
              <li><p>Buang sampah pada tempatnya ya! Terutama kenangan - kenangan bersama mantan jangan ada yang disimpan</p></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item" data-aos="zoom-in-up">
        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
            Kalau Ada yang rusak
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
          <div class="accordion-body">
            <ul>
              <li><p>Kalau kamu merusak sesuatu, kamu yang tanggung jawab ya buat benerinnya. Tapi UDA selalu bisa diajak diskusi kok</p></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item" data-aos="zoom-in-up">
        <h2 class="accordion-header" id="panelsStayOpen-headingLima">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseLima" aria-expanded="false" aria-controls="panelsStayOpen-collapseLima">
            Jam Besuk Teman
          </button>
        </h2>
        <div id="panelsStayOpen-collapseLima" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingLima">
          <div class="accordion-body">
            <ul>
              <li><p>Kalau mau bawa teman boleh jangan se-lusin aja</p></li>
              <li><p>Boleh banget untuk menjaga ketenangan, Walau UDA sudah bikin sekat antar kamar beberapa lapis kalau kamu teriak kayak tarzan pasti kedengaran di sebelah mu</p></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item" data-aos="zoom-in-up">
        <h2 class="accordion-header" id="panelsStayOpen-headingEnam">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEnam" aria-expanded="false" aria-controls="panelsStayOpen-collapseEnam">
            Ketenangan
          </button>
        </h2>
        <div id="panelsStayOpen-collapseEnam" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEnam">
          <div class="accordion-body">
            <ul>
              <li><p>Kamu boleh teriak kayak tarzan tapi sumpel mulut sama bantal dulu <span class="material-icons">do_not_disturb_off</span></p></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item" data-aos="zoom-in-up">
        <h2 class="accordion-header" id="panelsStayOpen-headingTujuh">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTujuh" aria-expanded="false" aria-controls="panelsStayOpen-collapseTujuh">
            Listrik dan Air
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTujuh" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTujuh">
          <div class="accordion-body">
            <ul>
              <li><p>Gunakan listrik & air seperlunya walaupun listrik kamu bayar sendiri tetapi lebih hemat lebih baik kan?</p></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item" data-aos="zoom-in-up">
        <h2 class="accordion-header" id="panelsStayOpen-headingDelapan">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseDelapan" aria-expanded="false" aria-controls="panelsStayOpen-collapseDelapan">
            Rokok 
          </button>
        </h2>
        <div id="panelsStayOpen-collapseDelapan" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingDelapan">
          <div class="accordion-body">
            <ul>
              <li><p>Boleh nge-rokok tapi jangan matiin bara rokok ke asset UDA cukup paru - paru mu jangan property ku <span class="material-icons">recommend</span></p></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item" data-aos="zoom-in-up">
        <h2 class="accordion-header" id="panelsStayOpen-headingSembilan">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSembilan" aria-expanded="false" aria-controls="panelsStayOpen-collapseSembilan">
            Fasilitas Bersama 
          </button>
        </h2>
        <div id="panelsStayOpen-collapseSembilan" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSembilan">
          <div class="accordion-body">
            <ul>
              <li><p>Kita punya fasilitas bersama, jadi harus saling berbagi dan kembalikan ke tempat semula.</p></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section><!-- /Faq Section -->

</main>

<!-- Scroll Top -->
<button onclick="topFunction()" id="back-to-top"><i class="bi bi-arrow-up-short"></i></button>

  <!-- Preloader -->
<div id="preloader"></div>
@endsection


@push('addon-script-footer')
<!-- Script -->
<script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="{{ asset('js/fronten.js') }}"></script>

<script>
  AOS.init();
</script>

<script>
  let mybutton = document.getElementById("back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>

<script>
  $('#newYear').html(new Date().getFullYear());
</script>

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

@endpush
