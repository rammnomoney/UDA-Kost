<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/img/kosanku.png">
    <title>Kos-an</title>

    <!-- Link CSS -->
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/fronten.css">
    <link rel="stylesheet" href="/css/house.css">

    <!-- Script -->
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    {{-- <script src="/js/house.js"></script> --}}

</head>
<body>
    <!--Navigasi bar-->
<header class="mb-10">
  @include('layouts/components/navbar')
  </header>


      <!-- ISI -->


      <!-- Carosel -->
      <br><main>
      <section id="explanation" class="explanation section dark-background">
        <img src="/img/rent1.png" alt="">
            <div class="container">
              <div class="row justify-content-center aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                  <div class="text-center">
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <h3 class="text-white">TEMPAT KOS TERBAIK</h3>
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

                        </div>
                    </div>
                </div>
            </div>
    </section>

      {{--  --}}
      
      <br>

      
      <br>
      
      <section id="about" class="about section">
  <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="/img/house/Vertical-Uda Kost Logo.png" class="img-fluid" alt="Uda kost !?">
      </div>
      <div class="col-lg-6 order-2 order-lg-1 content">
        <h3>Voluptatem dignissimos provident</h3>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <ul>
          <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
          <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
          <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
        </ul>
        <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
        </p>
      </div>
    </div>

  </div>
</section>

    <form class="card bg-dark">
        <div class="container mb-5 mt-5">
          <h4 class="mb-5 text-light text-center"><strong>FAQs</strong></h4>
          
          <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                  <div class="col">
                    <div class="form-outline" data-mdb-input-init>
                      <input type="text" placeholder="First name" id="form3Example1" class="form-control" />
                      <label class="form-label" for="form3Example1">First name<span class="text-red">*</span></label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-outline" data-mdb-input-init >
                      <input type="text" placeholder="Last name" id="form3Example2" class="form-control" />
                      <label class="form-label" for="form3Example2">Last name<span class="text-red">*</span></label>
                    </div>
                  </div>
                </div>
    
                <!-- Email input -->
                <div class="form-outline mb-4" data-mdb-input-init>
                  <input type="email" placeholder="Email address" id="form3Example3" class="form-control" />
                  <label class="form-label" for="form3Example3">Email address<span class="text-red">*</span></label>
                </div>
    
                <!-- Password input -->
                <div class="form-outline mb-4" data-mdb-input-init>
                  <input type="number" placeholder="WhatsApp" id="form3Example4" class="form-control" />
                  <label class="form-label" for="form3Example4">WhatsApp<span class="text-red">*</span></label>
                </div>
    
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input
                         class="form-check-input me-2"
                         type="checkbox"
                         value=""
                         id="form2Example3"
                         checked
                         />
                  <label class="form-check-label text-light" for="form2Example3">
                    Notifikasi aku
                  </label>
                </div>
    
                <!-- Submit button -->
                <button type="submit" class="btn btn-secondary btn-block mb-4" data-mdb-ripple-init>
                  Submit!
                </button>
              </div>
            </div>
          </div>
        </form>
        
        <!-- Profile Nama -->
        <div id="team" class="cm container marketing">
          <div class="row">
            <div class="col-lg-4">
              <img src="/img/ceo.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                  </div><!-- /.col-lg-4 -->
        
                  <div class="col-lg-4">
                    <img src="/img/ceo.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                  </div><!-- /.col-lg-4 -->
        
                  <div class="col-lg-4">
                    <img src="/img/ceo.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
                    <h2>Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
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

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
        <div class="faq-container">

          <div class="faq-item">
            <h3>Non consectetur a erat nam at lectus urna duis?</h3>
            <div class="faq-content">
              <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
            <div class="faq-content">
              <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
            <div class="faq-content">
              <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
            <div class="faq-content">
              <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
            <div class="faq-content">
              <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
            <div class="faq-content">
              <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

        </div>
      </div><!-- End Faq Column-->
    </div>
  </div>

</section><!-- /Faq Section -->

</main>


      <!-- Footer -->
@include('layouts/components/footer')

</body>
</html>