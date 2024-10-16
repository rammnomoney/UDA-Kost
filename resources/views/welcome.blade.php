@extends('layouts.layout')

@push('title')

@section('content')
      <!-- ISI -->

      <!-- Carosel -->
      <br><main id="scrollup">
      <section id="explanation" class="explanation section dark-background">
        <img src="/img/rent1.png" alt="">
            <div class="container">
              <div class="row justify-content-center aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                  <div class="text-center">
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <h3>TEMPAT KOS TERBAIK</h3>
                      </div>
                    <h6 class="support">
                        <i>Temukan</i> Pencarian Kos Siap Huni Di Batam<br> 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab vitae perferendis molestiae quis! Repudiandae iure deserunt quibusdam voluptatibus? Autem fuga quaerat illo voluptatum et modi sit labore aliquid iusto. A.<br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime rerum dolores vel obcaecati temporibus quibusdam aperiam consequatur ea voluptatem suscipit dolor quam doloribus cupiditate praesentium quia voluptates tempore, amet fugit.
                        <br>
                    </h6>
                
                  </div>
                </div>
              </div>
            </div>
          </section> 
      

      <!-- Fitur -->
      <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Check Our <span class="description-title">Services</span></p>
        </div><!-- End Section Title -->
  
        <div class="sc container">
  
          <div class="row gy-4">
  
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-activity icon"></i></div>
                <h4><a href="#" class="stretched-link">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                <h4><a href="#" class="stretched-link">Sed ut perspici</a></h4>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                <h4><a href="#" class="stretched-link">Magni Dolores</a></h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                <h4><a href="#" class="stretched-link">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              </div>
            </div><!-- End Service Item -->
  
          </div>
  
        </div>
      </section><!-- /Services Section -->
      
      
      <!-- Daftar Tempat -->
      <section id="home" class="tf-section flat-homes">
        <div class="cl-container">
            <div class="row">
                <div class="col-12">
                    <div class="heading section-title text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="0.1s">Homes For You</h2>
                        <div class="text wow fadeInUp" data-wow-delay="0.2s"><p>Based On Your View <span class="description-title">History</span></p></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="swiper-container slider-homes">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="box-dream">
                                    <div class="image">
                                        <img src="/img/applewallpaper2.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="head">
                                            <div class="title"><a href="{{ url('../fronten/house/index') }}">Archer House</a></div>
                                            <div class="price">$815,000</div>
                                        </div>
                                        <div class="location">
                                            <p><i class="flaticon-location"></i> 148-37 88th Ave, Jamaica, NY 11435</p>
                                        </div>
                                        <div class="icon-box">
                                            <div class="item"><i class="flaticon-hotel"></i> 4 Beds</div>
                                            <div class="item"><i class="flaticon-bath-tub"></i> 3 Baths</div>
                                            <div class="item"><i class="flaticon-minus-front"></i> 2660 Sqft</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="box-dream">
                                    <div class="image">
                                        <img src="/img/applewallpaper2.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="head">
                                            <div class="title"><a href="#">Villa One Hyde Park</a></div>
                                            <div class="price">$1,200,000</div>
                                        </div>
                                        <div class="location">
                                            <p><i class="flaticon-location"></i> 148-37 88th Ave, Jamaica, NY 11435</p>
                                        </div>
                                        <div class="icon-box">
                                            <div class="item"><i class="flaticon-hotel"></i> 5 Beds</div>
                                            <div class="item"><i class="flaticon-bath-tub"></i> 4 Baths</div>
                                            <div class="item"><i class="flaticon-minus-front"></i> 3200 Sqft</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tambahkan slide lainnya di sini -->
                            <div class="swiper-slide">
                              <div class="box-dream">
                                  <div class="image">
                                      <img src="/img/applewallpaper2.jpg" alt="">
                                  </div>
                                  <div class="content">
                                      <div class="head">
                                          <div class="title"><a href="#">Villa One Hyde Park</a></div>
                                          <div class="price">$1,200,000</div>
                                      </div>
                                      <div class="location">
                                          <p><i class="flaticon-location"></i> 148-37 88th Ave, Jamaica, NY 11435</p>
                                      </div>
                                      <div class="icon-box">
                                          <div class="item"><i class="flaticon-hotel"></i> 5 Beds</div>
                                          <div class="item"><i class="flaticon-bath-tub"></i> 4 Baths</div>
                                          <div class="item"><i class="flaticon-minus-front"></i> 3200 Sqft</div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                              <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                          <div class="swiper-pagination"></div>
                                
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>{{--  --}}
      
      <br>
      <br>
      
      <section id="about" class="about section">
        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png" class="img-fluid" alt="Uda Kost Logo">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <h3 class="display-6">Voluptatem dignissimos provident</h3>
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

        <!-- Profile Nama -->
        <div id="team" class="cm container marketing">
          <div class="row">
            <div class="col-lg-4">
              <img src="/img/ceo.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                  </div><!-- /.col-lg-4 -->
        
                  <div class="col-lg-4">
                    <img src="https://yt3.googleusercontent.com/ytc/AIdro_mS1myhgjBjlA68niot87tDxhB1Yl0Q4JXZyrd-YsQBgak=s160-c-k-c0x00ffffff-no-rj" class="bd-placeholder-img rounded-circle" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                  </div><!-- /.col-lg-4 -->
        
                  <div class="col-lg-4">
                    <img src="/img/ceo.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
                    <h2>Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                  </div><!-- /.col-lg-4 -->
                </div>
              </div>
              

<!-- Faq Section -->
<section id="faq" class="faq section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Frequently Asked Questions</h2>
    <p><span>Section Title</span> <span class="description-title">Direda Flowed</span></p>
  </div><!-- End Section Title -->

  <div class="accordion accordion-active" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
          Accordion Item #1
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
        <div class="accordion-body">
          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
          Accordion Item #2
        </button>
      </h2>
      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
        <div class="accordion-body">
          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
          Accordion Item #3
        </button>
      </h2>
      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
        <div class="accordion-body">
          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
  </div>

</section><!-- /Faq Section -->

</main>

<!-- Inisialisasi Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
@endsection