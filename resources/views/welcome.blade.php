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
  <nav class="navbar navbar-expand-xl navbar-light bg-dark sticky-top" id="navbar">
    <div class="container-fluid px-lg-5">
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
    
                    <h1 class="primary-header text-light"><i>
                        Forward Innovation
                    </i></h1>
    
                    <p class="support">
                        <i>Our mission</i> is to drive sustainable growth by fostering a culture of innovation and excellence.<br> 
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
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
            </div>
            <div>
              <h2>Featured title</h2>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
            </div>
            <div>
              <h2>Featured title</h2>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
          </div>
        </div>
      </div>
      

      <hr class="my-5" />

      <!-- Daftar Tempat -->
      <section id="recent-blog-posts" class="recent-blog-posts section">
      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="/img/applewallpaper2.jpg" class="img-fluid" alt="">
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

                <a href="#" class="readmore stretched-link"><span>Click!</span><i class="bi bi-arrow-right"></i></a>

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

                <a href="#" class="readmore stretched-link"><span>Click!</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="/img/applewallpaper2.jpg" class="img-fluid" alt="">
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

                <a href="#" class="readmore stretched-link"><span>Click!</span><i class="bi bi-arrow-right"></i></a>

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
                <img src="/img/applewallpaper2.jpg" class="img-fluid" alt="">
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

                <a href="#" class="readmore stretched-link"><span>Click!</span><i class="bi bi-arrow-right"></i></a>

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

                <a href="#" class="readmore stretched-link"><span>Click!</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="/img/applewallpaper2.jpg" class="img-fluid" alt="">
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
                
                <a href="#" class="readmore stretched-link"><span>Click!</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End -->

        </div>
        
      </div>
      
    </section>

<br>
<hr class="my-5" />

<section class="xl-4 md-6">
<div class="container">

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
  
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
  
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<form class="card bg-dark">
    <section class="mb-5 mt-5">
      <h4 class="mb-5 text-light text-center"><strong>Facilis consequatur eligendi</strong></h4>

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
              <input type="password" placeholder="Password" id="form3Example4" class="form-control" />
              <label class="form-label" for="form3Example4">Password<span class="text-red">*</span></label>
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
      </section>
    </form>

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
        <div class="row text-center">
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
          <p class="float-end">
            <a href="#">Back to top</a>
          </p>
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