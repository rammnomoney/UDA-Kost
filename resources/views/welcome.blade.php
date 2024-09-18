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
    <link rel="stylesheet" href="/css/fronten.css">

</head>
<body>
    

    <!--Navigasi bar-->
<header class="mb-10">
  <nav class="navbar navbar-expand navbar-dark text-white bg-dark fixed top" aria-label="Navbar Kos">
    <div class="container-fluid">
      {{-- <h4 class="float-md-start mb-0">Kos-an</h4>   --}}
      <img class="navbar-brand" src="/img/kosanku.png" alt="Kos-an"><a href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar1" aria-controls="navbars1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse justify-content-md-center" id="navbars1">
        <ul class="nvbr nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-4 link-light">Home</a></li>
          <li><a href="#" class="nav-link px-4 link-light">Daftar Kos</a></li>
          <li><a href="#" class="nav-link px-4 link-light">FAQs</a></li>
          <li><a href="#" class="nav-link px-4 link-light">Kontak</a></li>
          <li><a href="#" class="nav-link px-4 link-light">Tentang Kos-an</a></li>
          
        </ul>
      </div>
      <form>
        <input class="form-control" type="text" placeholder="Search..." aria-label="Search">
      </form>
    </div>
  </nav> 
</header>



      <!-- Header -->
      {{-- <div class="container-fluid">
        <div class="container">
          <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb- border-bottom">
            <a href="#" class="d-flex align-items-center mb-md-0 text-white text-decoration-none"></a>
          </header>
        </div>
      </div> --}}
    
      
      <!-- ISI -->


      <!-- Carosel -->
      <section id="explanation" class="explanation section dark-background">
        <img src="/img/rent1.png" alt="">
      
            <div class="container">
              <div class="row justify-content-center aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                  <div class="text-center">
                    <div class="container section-title aos-init aos-animate" data-aos="fade-up">
                        <h2 class="text-white">OUR EXPLANATION</h2>
                        
                      </div>
    
                    <h1 class="primary-header">
                        Forward Innovation
                    </h1>
    
                    <p class="support">
                        Our mission is to drive sustainable growth by fostering a culture of innovation and excellence.<br> 
                        We are committed to delivering cutting-edge solutions that exceed our customers' expectations,<br>
                        leveraging the latest technologies and creative approaches.
                        <br>
                        <br>
                        Through continuous improvement and a passion for innovation, We aim to set new standards in our industry, <br> 
                        ensuring long-term success for our stakeholders and making a positive impact on the communities we serve 
                    </p>
                
                  </div>
                </div>
              </div>
            </div>
      
          </section> 
      
      {{-- <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal">Punny headline</h1>
          <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
          <a class="btn btn-outline-secondary" href="#">Coming soon</a>
        </div>
        
        <div class="carousel-item active" data-bs-interval="8000">
          <img src="/img/applewallpaper.jpg" class="d-block w-100" alt="#">
          <div class="carousel-inner mb-4 pb-0">
            
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      </div>      
  </div>
    </div>  --}}

      <!-- Fitur -->
      <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Hanging icons</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
            </div>
            <div>
              <h2>Featured title</h2>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <a href="#" class="btn btn-primary">
                Primary button
              </a>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
            </div>
            <div>
              <h2>Featured title</h2>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <a href="#" class="btn btn-primary">
                Primary button
              </a>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
            </div>
            <div>
              <h2>Featured title</h2>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <a href="#" class="btn btn-primary">
                Primary button
              </a>
            </div>
          </div>
        </div>
      </div>


      <!-- Daftar Tempat -->
      <section id="recent-blog-posts" class="recent-blog-posts section">
      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="/img/applewallpaper.jpg" class="img-fluid" alt="">
                <span class="post-date">December 12</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                  </div>
                </div>

                <hr>

                <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

              <div class="post-img position-relative overflow-hidden">
                <img src="/img/applewallpaper2.jpg" class="img-fluid" alt="">
                <span class="post-date">July 17</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                  </div>
                </div>

                <hr>

                <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="/img/dekstopwall02.jpeg" class="img-fluid" alt="">
                <span class="post-date">September 05</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                  </div>
                </div>

                <hr>

                <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End -->

        </div>

      </div>
      <br>

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="/img/applewallpaper.jpg" class="img-fluid" alt="">
                <span class="post-date">December 12</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                  </div>
                </div>

                <hr>

                <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

              <div class="post-img position-relative overflow-hidden">
                <img src="/img/applewallpaper2.jpg" class="img-fluid" alt="">
                <span class="post-date">July 17</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                  </div>
                </div>

                <hr>

                <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="/img/dekstopwall02.jpeg" class="img-fluid" alt="">
                <span class="post-date">September 05</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                  </div>
                </div>
                
                <hr>
                
                <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End -->

        </div>
        
      </div>
      
    </section>
<br>

      <hr class="featurette-divider mb-12">
      <br>

<!-- Profile Nama -->
      <div class="container marketing">
        <div class="row">
          <div class="col-lg-4">
            <img src="/img/bruce-mars.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
    
            <h2>Fauzan</h2>
            <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
    
            <h2>Heading</h2>
            <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
    
            <h2>Heading</h2>
            <p>And lastly this, the third column of representative placeholder content.</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
          </div><!-- /.col-lg-4 -->
        </div>
      </div>
<br>

      <!-- Footer -->
      <footer class="footer-10">
        <div class="container">
        <div class="row mb-5 pb-3 no-gutters">
        <div class="col-md-4 mb-md-0 mb-4 d-flex">
        <div class="con con-1 w-100 py-5">
        <div class="con-info w-100 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
        <span class="ion-ios-call"></span>
        </div>
        <div class="text">
        <span>(+00) 1234 5678</span>
        </div>
        </div>
        </div>
        </div>

        <div class="col-md-4 mb-md-0 mb-4 d-flex">
        <div class="con con-2 w-100 py-5">
        <div class="con-info w-100 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
        <span class="ion-ios-mail"></span>
        </div>
        <div class="text">
        <span>info@email.com</span>
        </div>
        </div>
        </div>
        </div>

        <div class="col-md-4 mb-md-0 mb-4 d-flex">
        <div class="con con-3 w-100 py-5">
        <div class="con-info w-100 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
        <span class="ion-ios-pin"></span>
        </div>
        <div class="text">
        <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
        </div>
        </div>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-7">
        <div class="row">
        <div class="col-md-4 mb-md-0 mb-4">
        <h2 class="footer-heading">About</h2>
        <ul class="list-unstyled">
        <li><a href="#" class="d-block">Out story</a></li>
        <li><a href="#" class="d-block">Awards</a></li>
        <li><a href="#" class="d-block">Our Team</a></li>
        <li><a href="#" class="d-block">Career</a></li>
        </ul>
        </div>
        <div class="col-md-4 mb-md-0 mb-4">
        <h2 class="footer-heading">Company</h2>
        <ul class="list-unstyled">
        <li><a href="#" class="d-block">Our services</a></li>
        <li><a href="#" class="d-block">Clients</a></li>
        <li><a href="#" class="d-block">Contact</a></li>
        <li><a href="#" class="d-block">Press</a></li>
        </ul>
        </div>
        <div class="col-md-4 mb-md-0 mb-4">
        <h2 class="footer-heading">Resources</h2>
        <ul class="list-unstyled">
        <li><a href="#" class="d-block">Blog</a></li>
        <li><a href="#" class="d-block">Newsletter</a></li>
        <li><a href="#" class="d-block">Privacy Policy</a></li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        
        <div class="row mt-5 pt-4 border-top">
        <div class="col-md-6 col-lg-8 mb-md-0 mb-4">
        <p class="copyright mb-0">
        Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved.
        </p>
        </div>
        <div class="col-md-6 col-lg-4 text-md-right">
        <ul class="ftco-footer-social p-0">
        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><span class="ion-logo-twitter"></span></a></li>
        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><span class="ion-logo-facebook"></span></a></li>
        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"><span class="ion-logo-instagram"></span></a></li>
        </ul>
        </div>
        </div>

        </div>
        </footer>


      {{-- <div class="container">
        <footer class="row row-cols-5 py-5 my-5 border-top">
          <div class="col">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
              {{-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#"></use></svg> 
            </a>
            <p class="text-muted">© 2024</p>
          </div>
      
          <div class="col">
      
          </div>
      
          <div class="col">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>
      
          <div class="col">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>
      
          <div class="col">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>
          <p class="float-end"><a href="#">Back to top</a></p>
        </footer>
      </div> --}}

      
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>