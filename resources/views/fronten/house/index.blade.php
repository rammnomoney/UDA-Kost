<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@stack('title')</title>

    <link rel="stylesheet" href="/css/fronten.css">
    <link rel="stylesheet" href="/css/detailhouse.css">

</head>
<body>
    
    @include('layouts/components/navbar')
    
    <!-- Awal main -->
    <div class="main-content">
    
        <!-- property-single-wrap -->
        <div class="property-single-wrap sticky-container" data-sticky-container="">
            <div class="cl-container">
                <div class="row">
                    <div class="col-12">
                        <div class="flex items-center justify-between gap30 flex-wrap pt-30 pb-30">
                            <ul class="breadcrumbs style-1 justify-start">
                                <li><a href="/welcome">Home</a></li>
                                <li>/</li>
                                <li>Property List</li>
                            </ul>
                            <div class="list-icons-page">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-heart"></i>
                                    </div>
                                    <p>Save</p>
                                </div>
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-before-after"></i>
                                    </div>
                                    <p>Compare</p>
                                </div>
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-outbox"></i>
                                    </div>
                                    <p>Share</p>
                                </div>
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-tools-and-utensils"></i>
                                    </div>
                                    <p>Print</p>
                                </div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="wrap-gallery-image">
                            <div class="list-tags type-1">
                                <a href="#" class="tags-item for-sell">FOR RENT</a>
                                <a href="#" class="tags-item featured">FEATURED</a>
                            </div>
                            <a href="/img/applewallpaper.jpg" class="item-1" data-fancybox="gallery">
                                <img src="/img/applewallpaper.jpg" alt="">
                            </a>
                            <a href="/img/applewallpaper.jpg" class="item-2" data-fancybox="gallery">
                                <img src="/img/applewallpaper.jpg" alt="">
                            </a>
                            <a href="/img/applewallpaper.jpg" class="item-3" data-fancybox="gallery">
                                <img src="/img/applewallpaper.jpg" alt="">
                            </a>
                            <a href="/img/applewallpaper.jpg" class="item-4" data-fancybox="gallery">
                                <img src="/img/applewallpaper.jpg" alt="">
                            </a>
                            <a href="/img/applewallpaper.jpg" class="item-5" data-fancybox="gallery">
                                <img src="/img/applewallpaper.jpg" alt="">
                            </a>
                            <a href="/img/applewallpaper.jpg" class="more-photos" data-fancybox="gallery">
                                <i class="flaticon-gallery"></i>
                                <p>42 Photos</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="content-wrap">
                            <div class="head-title wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                <div>
                                    <h3>Villa One Hyde Park</h3>
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
                            <div class="energy">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Energy Class</h4>
                                <ul>
                                    <li class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="title">Energetic class:</div>
                                        <p>A+</p>
                                    </li>
                                    <li class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="title">Global Energy Performance Index:</div>
                                        <p>92.42 kWh / m²a</p>
                                    </li>
                                    <li class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="title">Renewable energy performance index:</div>
                                        <p>00.00 kWh / m²a</p>
                                    </li>
                                    <li class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="title">Energy performance of the building:</div>
                                        <p>50</p>
                                    </li>
                                    <li class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="title">EPC Current Rating:</div>
                                        <p>92</p>
                                    </li>
                                    <li class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="title">EPC Potential Rating:</div>
                                        <p>80</p>
                                    </li>
                                </ul>
                                <img src="images/image-box/energy.png" alt="">
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
                            <div class="schedule">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Schedule a tour</h4>
                                <form class="form-schedule">
                                    <div class="cols">
                                        <fieldset class="message">
                                            <input type="date" name="date" value="2023-11-20">
                                        </fieldset>
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Please Select Time</span>
                                            <ul class="list">    
                                                <li data-value="" class="option selected">6 AM</li>
                                                <li data-value="For Ren" class="option">12 AM</li>
                                                <li data-value="Sold" class="option">6 PM</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-tabs style-4">
                                        <ul class="widget-menu-tab">
                                            <li class="item-title active">
                                                <span class="inner">In Person</span>
                                            </li>
                                            <li class="item-title">
                                                <span class="inner">Video Chat</span>
                                            </li>
                                        </ul>
                                        <div class="widget-content-tab">
                                            <div class="widget-content-inner active" style="">
                                                <div class="cols">
                                                    <fieldset class="name has-top-title">
                                                        <input type="text" placeholder="Name" class="" name="text" tabindex="2" value="Ali Tufan" aria-required="true" required="">
                                                        <label for="">Name</label>
                                                    </fieldset>
                                                    <fieldset class="phone has-top-title">
                                                        <input type="number" placeholder="Phone" class="" name="number" tabindex="2" value="" aria-required="true" required="">
                                                        <label for="">Phone</label>
                                                    </fieldset>
                                                    <fieldset class="email has-top-title">
                                                        <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                                                        <label for="">Email</label>
                                                    </fieldset>
                                                </div>
                                                <fieldset class="message has-top-title">
                                                    <textarea name="message" rows="4" placeholder="Your Comment" class="" tabindex="2" aria-required="true" required="">Lorem Ipsum Dolar Sit Amet</textarea>
                                                    <label for="">Your Comment</label>
                                                </fieldset>
                                            </div>
                                            <div class="widget-content-inner" style="display: none;">
                                                <div class="cols">
                                                    <fieldset class="name has-top-title">
                                                        <input type="text" placeholder="Name" class="" name="text" tabindex="2" value="Ali Tufan" aria-required="true" required="">
                                                        <label for="">Name</label>
                                                    </fieldset>
                                                    <fieldset class="phone has-top-title">
                                                        <input type="number" placeholder="Phone" class="" name="number" tabindex="2" value="" aria-required="true" required="">
                                                        <label for="">Phone</label>
                                                    </fieldset>
                                                    <fieldset class="email has-top-title">
                                                        <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                                                        <label for="">Email</label>
                                                    </fieldset>
                                                </div>
                                                <fieldset class="message has-top-title">
                                                    <textarea name="message" rows="4" placeholder="Your Comment" class="" tabindex="2" aria-required="true" required="">Lorem Ipsum Dolar Sit Amet</textarea>
                                                    <label for="">Your Comment</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-submit">
                                        <button class="tf-button-primary w-full" type="submit">Submit a Tour Request<i class="icon-arrow-right-add"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="plans">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Floor Plans</h4>
                                <div class="widget-tabs style-3">
                                    <ul class="widget-menu-tab wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <li class="item-title active">
                                            <span class="inner">First Floor</span>
                                        </li>
                                        <li class="item-title">
                                            <span class="inner">Second Floor</span>
                                        </li>
                                        <li class="item-title">
                                            <span class="inner">Third Floor</span>
                                        </li>
                                    </ul>
                                    <div class="widget-content-tab">
                                        <div class="widget-content-inner active" style="">
                                            <div class="icons">
                                                <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                                    <i class="flaticon-hotel"></i>
                                                    <div class="text">Bedrooms</div>
                                                    <p>4</p>
                                                </div>
                                                <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                                    <i class="flaticon-bath-tub"></i>
                                                    <div class="text">Bathrooms</div>
                                                    <p>2</p>
                                                </div>
                                                <div class="item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                                    <i class="flaticon-minus-front"></i>
                                                    <div class="text">Size</div>
                                                    <p>200 SqFt</p>
                                                </div>
                                                <div class="item wow fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <i class="flaticon-tag"></i>
                                                    <div class="text">Price</div>
                                                    <p>$12.000</p>
                                                </div>
                                            </div>
                                            <p class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, homero debitis temporibus in mei, at sit voluptua antiopam hendrerit. Lorem epicuri eu per. Mediocrem torquatos deseruisse te eum commodo.</p>
                                            <img src="images/section/blueprint-1.png" alt="">
                                        </div>
                                        <div class="widget-content-inner" style="display: none;">
                                            <div class="icons">
                                                <div class="item">
                                                    <i class="flaticon-hotel"></i>
                                                    <div class="text">Bedrooms</div>
                                                    <p>4</p>
                                                </div>
                                                <div class="item">
                                                    <i class="flaticon-bath-tub"></i>
                                                    <div class="text">Bathrooms</div>
                                                    <p>2</p>
                                                </div>
                                                <div class="item">
                                                    <i class="flaticon-minus-front"></i>
                                                    <div class="text">Size</div>
                                                    <p>200 SqFt</p>
                                                </div>
                                                <div class="item">
                                                    <i class="flaticon-tag"></i>
                                                    <div class="text">Price</div>
                                                    <p>$12.000</p>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, homero debitis temporibus in mei, at sit voluptua antiopam hendrerit. Lorem epicuri eu per. Mediocrem torquatos deseruisse te eum commodo.</p>
                                            <img src="images/section/blueprint-1.png" alt="">
                                        </div>
                                        <div class="widget-content-inner" style="display: none;">
                                            <div class="icons">
                                                <div class="item">
                                                    <i class="flaticon-hotel"></i>
                                                    <div class="text">Bedrooms</div>
                                                    <p>4</p>
                                                </div>
                                                <div class="item">
                                                    <i class="flaticon-bath-tub"></i>
                                                    <div class="text">Bathrooms</div>
                                                    <p>2</p>
                                                </div>
                                                <div class="item">
                                                    <i class="flaticon-minus-front"></i>
                                                    <div class="text">Size</div>
                                                    <p>200 SqFt</p>
                                                </div>
                                                <div class="item">
                                                    <i class="flaticon-tag"></i>
                                                    <div class="text">Price</div>
                                                    <p>$12.000</p>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, homero debitis temporibus in mei, at sit voluptua antiopam hendrerit. Lorem epicuri eu per. Mediocrem torquatos deseruisse te eum commodo.</p>
                                            <img src="images/section/blueprint-1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="calculator">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Mortgage Calculator</h4>
                                <div class="pie-chart">
                                    <div id="morris-donut-1"><svg height="260" version="1.1" width="260" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.5px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#eb6e85" d="M130,210A80,80,0,0,0,209.13442101776835,118.26358614471258" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#eb6e85" stroke="#ffffff" d="M130,213A83,83,0,0,0,212.10196180593465,117.82347062513931L243.755730213042,113.12890508302434A115,115,0,0,1,130,245Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#58a0e5" d="M209.13442101776835,118.26358614471258A80,80,0,0,0,80.27531939671341,67.3305805124929" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#58a0e5" stroke="#ffffff" d="M212.10196180593465,117.82347062513931A83,83,0,0,0,78.41064387409017,64.98047728171139L58.520771632775535,39.912709486708536A115,115,0,0,1,243.755730213042,113.12890508302434Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#c6d443" d="M80.27531939671341,67.3305805124929A80,80,0,0,0,129.97486725918472,209.99999605215828" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#c6d443" stroke="#ffffff" d="M78.41064387409017,64.98047728171139A83,83,0,0,0,129.97392478140412,212.9999959041142L129.96230088877707,249.99999407823742A120,120,0,0,1,55.41297909507011,35.99587076873935Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="130" y="120" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1.6857,0,0,1.6857,-89.2792,-89.696)" stroke-width="0.5932081540425619"><tspan dy="5.999995231628418" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">$ 6,409.39</tspan></text><text x="130" y="140" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(1.6667,0,0,1.6667,-86.7369,-88)" stroke-width="0.6"><tspan dy="4.799995422363281" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">per month</tspan></text></svg></div>
                                    <div class="wrap-note">
                                        <div class="item">
                                            <div class="text">Principal and Interes</div>
                                            <p>$37,800.00</p>
                                        </div>
                                        <div class="item">
                                            <div class="text">Property Tax</div>
                                            <p>$214,200.00</p>
                                        </div>
                                        <div class="item">
                                            <div class="text">HOA fee</div>
                                            <p>$252.00</p>
                                        </div>
                                    </div>
                                </div>
                                <form class="form-comment">
                                    <fieldset class="text wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <input type="text" placeholder="Total Amount" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Total Amount</label>
                                    </fieldset>
                                    <fieldset class="text wow fadeInUp has-top-title animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <input type="text" placeholder="Down Payment" class="" name="text" tabindex="2" value="15" aria-required="true" required="">
                                        <label for="">Down Payment</label>
                                    </fieldset>
                                    <fieldset class="text wow fadeInUp has-top-title animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <input type="text" placeholder="Interest Rate" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Interest Rate</label>
                                    </fieldset>
                                    <fieldset class="text wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <input type="text" placeholder="Loan Terms (Years)" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Loan Terms (Years)</label>
                                    </fieldset>
                                    <fieldset class="text wow fadeInUp has-top-title animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <input type="text" placeholder="Property Tax" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Property Tax</label>
                                    </fieldset>
                                    <fieldset class="text wow fadeInUp has-top-title animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <input type="text" placeholder="Home Insurance" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Home Insurance</label>
                                    </fieldset>
                                    <fieldset class="text wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <input type="text" placeholder="Monthly HOA Fees" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Monthly HOA Fees</label>
                                    </fieldset>
                                    <fieldset class="text wow fadeInUp has-top-title animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <input type="text" placeholder="PMI" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">PMI</label>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="contact-info">
                                <div class="flex items-center justify-between gap30 flex-wrap wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <h4 class="mb-0">Contact Information</h4>
                                    <a href="#" class="tf-button-green">View Listing</a>
                                </div>
                                <div class="person wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="image">
                                        <img src="images/sidebar/agent-1.png" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="name">
                                            <a href="#">Jane Cooper</a>
                                        </div>
                                        <p>sale@justhome.com</p>
                                        <p>3-596 95 38 12</p>
                                    </div>
                                </div>
                                <div class="title wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Enquire About This Property</div>
                                <form class="form-comment">
                                    <div class="cols">
                                        <fieldset class="name wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="text" placeholder="Name" class="" name="text" tabindex="2" value="Ali Tufan" aria-required="true" required="">
                                            <label for="">Name</label>
                                        </fieldset>
                                        <fieldset class="phone wow fadeInUp has-top-title animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                            <input type="number" placeholder="Phone" class="" name="number" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Phone</label>
                                        </fieldset>
                                    </div>
                                    <div class="cols">
                                        <fieldset class="email wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                                            <label for="">Email</label>
                                        </fieldset>
                                        <div class="nice-select wow fadeInUp animated" data-wow-delay="0.1s" tabindex="0" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                            <span class="current">Please Select Time</span>
                                            <ul class="list">    
                                                <li data-value="" class="option selected">6 AM</li>
                                                <li data-value="For Ren" class="option">12 AM</li>
                                                <li data-value="Sold" class="option">6 PM</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <fieldset class="message wow fadeInUp has-top-title animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <textarea name="message" rows="4" placeholder="Message" class="" tabindex="2" aria-required="true" required="">Hello, I am interested in [Renovated apartment at last floor]</textarea>
                                        <label for="">Message</label>
                                    </fieldset>
                                    <div class="checkbox-item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <label>
                                            <p>By submitting this form I agree to<span>Terms of Use</span></p>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </div>
                                    <div class="button-submit wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <button class="tf-button-primary" type="submit">Request Information<i class="icon-arrow-right-add"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="video">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Video</h4>
                                <div class="video-wrap">
                                    <img src="images/image-box/video-2.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=MLpWrANjFbI" class="popup-youtube">
                                        <div class="icon">
                                            <i class="flaticon-play"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="map">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Map</h4>
                                <div class="wrap-map-v1">
                                    <div id="map-2" class="row-height" data-map-zoom="16" data-map-scroll="true" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div><button draggable="false" aria-label="Pintasan keyboard" title="Pintasan keyboard" type="button" style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; outline-offset: 3px; right: 0px; bottom: 0px; transform: translateX(100%);"></button></div><div tabindex="0" aria-label="Peta" aria-roledescription="peta" role="region" aria-describedby="19579341-FAEB-44F7-A3CA-4E3069DF0A21" style="position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div id="19579341-FAEB-44F7-A3CA-4E3069DF0A21" style="display: none;"><span>Untuk menavigasi peta dengan gestur sentuh, ketuk dua kali dan tahan jari Anda pada peta, lalu tarik peta.</span><div class="LGLeeN-keyboard-shortcuts-view"><table><tbody><tr><td><kbd aria-label="Panah kiri">←</kbd></td><td aria-label="Geser ke kiri.">Geser ke kiri</td></tr><tr><td><kbd aria-label="Panah kanan">→</kbd></td><td aria-label="Geser ke kanan.">Geser ke kanan</td></tr><tr><td><kbd aria-label="Panah atas">↑</kbd></td><td aria-label="Geser naik.">Geser naik</td></tr><tr><td><kbd aria-label="Panah bawah">↓</kbd></td><td aria-label="Geser turun.">Geser turun</td></tr><tr><td><kbd>+</kbd></td><td aria-label="Perbesar.">Perbesar</td></tr><tr><td><kbd>-</kbd></td><td aria-label="Perkecil.">Perkecil</td></tr><tr><td><kbd>Home</kbd></td><td aria-label="Geser ke kiri sebanyak 75%.">Geser ke kiri sebanyak 75%</td></tr><tr><td><kbd>End</kbd></td><td aria-label="Geser ke kanan sebanyak 75%.">Geser ke kanan sebanyak 75%</td></tr><tr><td><kbd>Page Up</kbd></td><td aria-label="Geser naik sebanyak 75%.">Geser naik sebanyak 75%</td></tr><tr><td><kbd>Page Down</kbd></td><td aria-label="Geser turun sebanyak 75%.">Geser turun sebanyak 75%</td></tr></tbody></table></div></div></div><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 984; transform: matrix(1, 0, 0, 1, -105, -149);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 984; transform: matrix(1, 0, 0, 1, -105, -149);"><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19297!3i24641!4i256!2m3!1e0!2sm!3i707458229!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw&amp;token=81077" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19296!3i24642!4i256!2m3!1e0!2sm!3i707458229!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw&amp;token=83209" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19294!3i24640!4i256!2m3!1e0!2sm!3i707458217!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw&amp;token=47588" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19297!3i24642!4i256!2m3!1e0!2sm!3i707458229!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw&amp;token=23801" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19295!3i24642!4i256!2m3!1e0!2sm!3i707458229!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw&amp;token=11546" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19295!3i24641!4i256!2m3!1e0!2sm!3i707458229!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw&amp;token=68822" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19294!3i24642!4i256!2m3!1e0!2sm!3i707458217!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw&amp;token=64107" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19296!3i24641!4i256!2m3!1e0!2sm!3i707458229!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw&amp;token=9414" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19297!3i24640!4i256!2m3!1e0!2sm!3i707458241!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw&amp;token=42963" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19296!3i24640!4i256!2m3!1e0!2sm!3i707458241!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw&amp;token=102371" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19295!3i24640!4i256!2m3!1e0!2sm!3i707458217!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw&amp;token=119251" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i19294!3i24641!4i256!2m3!1e0!2sm!3i707458217!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m2!1e3!5f2!23i47083502&amp;key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw&amp;token=121383" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"><div class="map-marker-container" data-marker_id="0" style="left: 0.475095px; top: -0.0969644px;"><div class="marker-container"><div class="marker-card"><div class="front face"><div></div></div><div class="back face"><div></div></div><div class="marker-arrow"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><span id="CD2B5C21-EB02-4465-81AA-B913D99BD3ED" style="display: none;">Untuk bernavigasi, tekan tombol panah.</span><div class="cluster"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"><div class="infoBox" style="width: 360px; transform: translateZ(0px); position: absolute; visibility: visible; left: -133.525px; bottom: 55.097px;"><div class="map-box"><div class="map-listing-item"><div class="inner-box"><div class="infoBox-close"><i class="icon-close"></i></div><div class="image-box"><figure class="image"><img src="./../images/image-box/map-location-1.jpg" alt=""></figure></div><div class="content"><div class="price">$815,000</div><h4><a href="property-single-v1.html">Archer House</a></h4><div class="icon-box"><div class="item"><i class="flaticon-hotel"></i><p>4</p></div><div class="item"><i class="flaticon-bath-tub"></i><p>3</p></div><div class="item"><i class="flaticon-minus-front"></i><p>2660</p></div></div></div></div></div></div></div></div></div></div><div class="gm-style-moc" style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-mot"></p></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none; opacity: 0;"></iframe><div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div><div><div class="gmnoprint gm-bundled-control" draggable="false" data-control-width="40" data-control-height="81" style="margin: 10px; user-select: none; position: absolute; left: 0px; top: 0px;"><div class="gmnoprint" data-control-width="40" data-control-height="81" style="position: absolute; left: 0px; top: 0px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button draggable="false" aria-label="Perbesar" title="Perbesar" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" aria-label="Perkecil" title="Perkecil" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button></div></div></div></div><div></div><div></div><div></div><div><button draggable="false" aria-label="Beralih ke tampilan layar penuh" title="Beralih ke tampilan layar penuh" type="button" aria-pressed="false" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button></div><div></div><div></div><div></div><div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" data-control-width="0" data-control-height="0" style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 26px; left: 0px;"><div class="gmnoprint" data-control-width="40" data-control-height="40" style="display: none; position: absolute;"><div style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px;"><button draggable="false" aria-label="Memutar peta searah jarum jam" title="Memutar peta searah jarum jam" type="button" class="gm-control-active" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div><button draggable="false" aria-label="Memutar peta berlawanan arah jarum jam" title="Memutar peta berlawanan arah jarum jam" type="button" class="gm-control-active" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px; transform: scaleX(-1);"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E" style="width: 20px; height: 20px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div><button draggable="false" aria-label="Miringkan peta" title="Miringkan peta" type="button" class="gm-tilt gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; top: 0px; left: 0px; overflow: hidden; width: 40px; height: 40px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E" style="width: 18px;"></button></div></div></div></div><div></div><div><div style="margin: 0px 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" title="Buka area ini di Google Maps (membuka jendela baru)" aria-label="Buka area ini di Google Maps (membuka jendela baru)" href="https://maps.google.com/maps?ll=40.70737,-74.001643&amp;z=16&amp;t=m&amp;hl=id-ID&amp;gl=US&amp;mapclient=apiv3" style="display: inline;"><div style="width: 66px; height: 26px;"><img alt="Google" src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2069%2029%22%3E%3Cg%20opacity%3D%22.6%22%20fill%3D%22%23fff%22%20stroke%3D%22%23fff%22%20stroke-width%3D%221.5%22%3E%3Cpath%20d%3D%22M17.4706%207.33616L18.0118%206.79504%2017.4599%206.26493C16.0963%204.95519%2014.2582%203.94522%2011.7008%203.94522c-4.613699999999999%200-8.50262%203.7551699999999997-8.50262%208.395779999999998C3.19818%2016.9817%207.0871%2020.7368%2011.7008%2020.7368%2014.1712%2020.7368%2016.0773%2019.918%2017.574%2018.3689%2019.1435%2016.796%2019.5956%2014.6326%2019.5956%2012.957%2019.5956%2012.4338%2019.5516%2011.9316%2019.4661%2011.5041L19.3455%2010.9012H10.9508V14.4954H15.7809C15.6085%2015.092%2015.3488%2015.524%2015.0318%2015.8415%2014.403%2016.4629%2013.4495%2017.1509%2011.7008%2017.1509%209.04835%2017.1509%206.96482%2015.0197%206.96482%2012.341%206.96482%209.66239%209.04835%207.53119%2011.7008%207.53119%2013.137%207.53119%2014.176%208.09189%2014.9578%208.82348L15.4876%209.31922%2016.0006%208.80619%2017.4706%207.33616z%22/%3E%3Cpath%20d%3D%22M24.8656%2020.7286C27.9546%2020.7286%2030.4692%2018.3094%2030.4692%2015.0594%2030.4692%2011.7913%2027.953%209.39011%2024.8656%209.39011%2021.7783%209.39011%2019.2621%2011.7913%2019.2621%2015.0594c0%203.25%202.514499999999998%205.6692%205.6035%205.6692zM24.8656%2012.8282C25.8796%2012.8282%2026.8422%2013.6652%2026.8422%2015.0594%2026.8422%2016.4399%2025.8769%2017.2905%2024.8656%2017.2905%2023.8557%2017.2905%2022.8891%2016.4331%2022.8891%2015.0594%2022.8891%2013.672%2023.853%2012.8282%2024.8656%2012.8282z%22/%3E%3Cpath%20d%3D%22M35.7511%2017.2905v0H35.7469C34.737%2017.2905%2033.7703%2016.4331%2033.7703%2015.0594%2033.7703%2013.672%2034.7343%2012.8282%2035.7469%2012.8282%2036.7608%2012.8282%2037.7234%2013.6652%2037.7234%2015.0594%2037.7234%2016.4439%2036.7554%2017.2962%2035.7511%2017.2905zM35.7387%2020.7286C38.8277%2020.7286%2041.3422%2018.3094%2041.3422%2015.0594%2041.3422%2011.7913%2038.826%209.39011%2035.7387%209.39011%2032.6513%209.39011%2030.1351%2011.7913%2030.1351%2015.0594%2030.1351%2018.3102%2032.6587%2020.7286%2035.7387%2020.7286z%22/%3E%3Cpath%20d%3D%22M51.953%2010.4357V9.68573H48.3999V9.80826C47.8499%209.54648%2047.1977%209.38187%2046.4808%209.38187%2043.5971%209.38187%2041.0168%2011.8998%2041.0168%2015.0758%2041.0168%2017.2027%2042.1808%2019.0237%2043.8201%2019.9895L43.7543%2020.0168%2041.8737%2020.797%2041.1808%2021.0844%2041.4684%2021.7772C42.0912%2023.2776%2043.746%2025.1469%2046.5219%2025.1469%2047.9324%2025.1469%2049.3089%2024.7324%2050.3359%2023.7376%2051.3691%2022.7367%2051.953%2021.2411%2051.953%2019.2723v-8.8366zm-7.2194%209.9844L44.7334%2020.4196C45.2886%2020.6201%2045.878%2020.7286%2046.4808%2020.7286%2047.1616%2020.7286%2047.7866%2020.5819%2048.3218%2020.3395%2048.2342%2020.7286%2048.0801%2021.0105%2047.8966%2021.2077%2047.6154%2021.5099%2047.1764%2021.7088%2046.5219%2021.7088%2045.61%2021.7088%2045.0018%2021.0612%2044.7336%2020.4201zM46.6697%2012.8282C47.6419%2012.8282%2048.5477%2013.6765%2048.5477%2015.084%2048.5477%2016.4636%2047.6521%2017.2987%2046.6697%2017.2987%2045.6269%2017.2987%2044.6767%2016.4249%2044.6767%2015.084%2044.6767%2013.7086%2045.6362%2012.8282%2046.6697%2012.8282zM55.7387%205.22083v-.75H52.0788V20.4412H55.7387V5.220829999999999z%22/%3E%3Cpath%20d%3D%22M63.9128%2016.0614L63.2945%2015.6492%2062.8766%2016.2637C62.4204%2016.9346%2061.8664%2017.3069%2061.0741%2017.3069%2060.6435%2017.3069%2060.3146%2017.2088%2060.0544%2017.0447%2059.9844%2017.0006%2059.9161%2016.9496%2059.8498%2016.8911L65.5497%2014.5286%2066.2322%2014.2456%2065.9596%2013.5589%2065.7406%2013.0075C65.2878%2011.8%2063.8507%209.39832%2060.8278%209.39832%2057.8445%209.39832%2055.5034%2011.7619%2055.5034%2015.0676%2055.5034%2018.2151%2057.8256%2020.7369%2061.0659%2020.7369%2063.6702%2020.7369%2065.177%2019.1378%2065.7942%2018.2213L66.2152%2017.5963%2065.5882%2017.1783%2063.9128%2016.0614zM61.3461%2012.8511L59.4108%2013.6526C59.7903%2013.0783%2060.4215%2012.7954%2060.9017%2012.7954%2061.067%2012.7954%2061.2153%2012.8161%2061.3461%2012.8511z%22/%3E%3C/g%3E%3Cpath%20d%3D%22M11.7008%2019.9868C7.48776%2019.9868%203.94818%2016.554%203.94818%2012.341%203.94818%208.12803%207.48776%204.69522%2011.7008%204.69522%2014.0331%204.69522%2015.692%205.60681%2016.9403%206.80583L15.4703%208.27586C14.5751%207.43819%2013.3597%206.78119%2011.7008%206.78119%208.62108%206.78119%206.21482%209.26135%206.21482%2012.341%206.21482%2015.4207%208.62108%2017.9009%2011.7008%2017.9009%2013.6964%2017.9009%2014.8297%2017.0961%2015.5606%2016.3734%2016.1601%2015.7738%2016.5461%2014.9197%2016.6939%2013.7454h-4.9931V11.6512h7.0298C18.8045%2012.0207%2018.8456%2012.4724%2018.8456%2012.957%2018.8456%2014.5255%2018.4186%2016.4637%2017.0389%2017.8434%2015.692%2019.2395%2013.9838%2019.9868%2011.7008%2019.9868z%22%20fill%3D%22%234285F4%22/%3E%3Cpath%20d%3D%22M29.7192%2015.0594C29.7192%2017.8927%2027.5429%2019.9786%2024.8656%2019.9786%2022.1884%2019.9786%2020.0121%2017.8927%2020.0121%2015.0594%2020.0121%2012.2096%2022.1884%2010.1401%2024.8656%2010.1401%2027.5429%2010.1401%2029.7192%2012.2096%2029.7192%2015.0594zM27.5922%2015.0594C27.5922%2013.2855%2026.3274%2012.0782%2024.8656%2012.0782S22.1391%2013.2937%2022.1391%2015.0594C22.1391%2016.8086%2023.4038%2018.0405%2024.8656%2018.0405S27.5922%2016.8168%2027.5922%2015.0594z%22%20fill%3D%22%23E94235%22/%3E%3Cpath%20d%3D%22M40.5922%2015.0594C40.5922%2017.8927%2038.4159%2019.9786%2035.7387%2019.9786%2033.0696%2019.9786%2030.8851%2017.8927%2030.8851%2015.0594%2030.8851%2012.2096%2033.0614%2010.1401%2035.7387%2010.1401%2038.4159%2010.1401%2040.5922%2012.2096%2040.5922%2015.0594zM38.4734%2015.0594C38.4734%2013.2855%2037.2087%2012.0782%2035.7469%2012.0782%2034.2851%2012.0782%2033.0203%2013.2937%2033.0203%2015.0594%2033.0203%2016.8086%2034.2851%2018.0405%2035.7469%2018.0405%2037.2087%2018.0487%2038.4734%2016.8168%2038.4734%2015.0594z%22%20fill%3D%22%23FABB05%22/%3E%3Cpath%20d%3D%22M51.203%2010.4357v8.8366C51.203%2022.9105%2049.0595%2024.3969%2046.5219%2024.3969%2044.132%2024.3969%2042.7031%2022.7955%2042.161%2021.4897L44.0417%2020.7095C44.3784%2021.5143%2045.1997%2022.4588%2046.5219%2022.4588%2048.1479%2022.4588%2049.1499%2021.4487%2049.1499%2019.568V18.8617H49.0759C48.5914%2019.4612%2047.6552%2019.9786%2046.4808%2019.9786%2044.0171%2019.9786%2041.7668%2017.8352%2041.7668%2015.0758%2041.7668%2012.3%2044.0253%2010.1319%2046.4808%2010.1319%2047.6552%2010.1319%2048.5914%2010.6575%2049.0759%2011.2323H49.1499V10.4357H51.203zM49.2977%2015.084C49.2977%2013.3512%2048.1397%2012.0782%2046.6697%2012.0782%2045.175%2012.0782%2043.9267%2013.3429%2043.9267%2015.084%2043.9267%2016.8004%2045.175%2018.0487%2046.6697%2018.0487%2048.1397%2018.0487%2049.2977%2016.8004%2049.2977%2015.084z%22%20fill%3D%22%234285F4%22/%3E%3Cpath%20d%3D%22M54.9887%205.22083V19.6912H52.8288V5.220829999999999H54.9887z%22%20fill%3D%22%2334A853%22/%3E%3Cpath%20d%3D%22M63.4968%2016.6854L65.1722%2017.8023C64.6301%2018.6072%2063.3244%2019.9869%2061.0659%2019.9869%2058.2655%2019.9869%2056.2534%2017.827%2056.2534%2015.0676%2056.2534%2012.1439%2058.2901%2010.1483%2060.8278%2010.1483%2063.3818%2010.1483%2064.6301%2012.1768%2065.0408%2013.2773L65.2625%2013.8357%2058.6843%2016.5623C59.1853%2017.5478%2059.9737%2018.0569%2061.0741%2018.0569%2062.1746%2018.0569%2062.9384%2017.5067%2063.4968%2016.6854zM58.3312%2014.9115L62.7331%2013.0884C62.4867%2012.4724%2061.764%2012.0454%2060.9017%2012.0454%2059.8012%2012.0454%2058.2737%2013.0145%2058.3312%2014.9115z%22%20fill%3D%22%23E94235%22/%3E%3C/svg%3E" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div></div><div></div><div><div style="display: inline-flex; position: absolute; right: 0px; bottom: 0px;"><div class="gmnoprint" style="z-index: 1000001;"><div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Pintasan keyboard" title="Pintasan keyboard" type="button" style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit;">Pintasan keyboard</button></div></div></div><div class="gmnoprint" style="z-index: 1000001;"><div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Data Peta" title="Data Peta" type="button" style="background: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit; display: none;">Data Peta</button><span style="">Data peta ©2024 Google</span></div></div></div><div class="gmnoscreen"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Data peta ©2024 Google</div></div><button draggable="false" aria-label="Skala Peta: 100 m per 55 piksel" title="Skala Peta: 100 m per 55 piksel" type="button" class="gm-style-cc" aria-describedby="C17CED86-FDA1-4FD4-846D-5724C86792C2" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><span style="color: rgb(0, 0, 0);">100 m&nbsp;</span><div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 59px;"><div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px; background-color: rgb(245, 245, 245);"></div><div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(245, 245, 245);"></div><div style="width: 4px; height: 8px; position: absolute; background-color: rgb(245, 245, 245); right: 0px; bottom: 0px;"></div><div style="position: absolute; background-color: rgb(0, 0, 0); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div><div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(0, 0, 0);"></div><div style="width: 2px; height: 6px; position: absolute; background-color: rgb(0, 0, 0); bottom: 1px; right: 1px;"></div></div></div><span id="C17CED86-FDA1-4FD4-846D-5724C86792C2" style="display: none;">Klik untuk beralih antara unit metrik dan imperial</span></button><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; position: relative; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/id-ID_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Persyaratan</a></div></div><div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px; display: none;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Laporkan kesalahan dalam peta jalan atau citra ke Google" dir="ltr" href="https://www.google.com/maps/@40.70737,-74.001643,16z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; text-decoration: none; position: relative; color: rgb(0, 0, 0);">Laporkan kesalahan peta</a></div></div></div></div></div></div><div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;"><div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div><div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">Halaman ini tidak dapat memuat Google Maps dengan benar.</span></div><table style="width: 100%;"><tr><td style="line-height: 16px; vertical-align: middle;"><a href="http://g.co/dev/maps-no-account" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Apakah Anda pemilik situs ini?</a></td><td style="text-align: right;"><button class="dismissButton">Oke</button></td></tr></table></div></div>
                                </div>
                            </div>
                            <div class="tour">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">360° Virtual Tour</h4>
                                <div class="image">
                                    <img src="images/image-box/img-virtual-1.jpg" alt="">
                                </div>
                            </div>
                            
                            <div class="walk-score">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Walk Score</h4>
                                <div class="wrap-walk-score">
                                    <div class="walk-score-item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="icon">
                                            <i class="flaticon-walk"></i>
                                        </div>
                                        <div>
                                            <div class="title">Walk Score®</div>
                                            <p>96 / 100</p>
                                            <p>Walker's Paradise</p>
                                        </div>
                                    </div>
                                    <div class="walk-score-item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <div class="icon">
                                            <i class="flaticon-bike"></i>
                                        </div>
                                        <div>
                                            <div class="title">Bike Score®</div>
                                            <p>96 / 100</p>
                                            <p>Bikeable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nearby">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">What's Nearby?</h4>
                                <div class="widget-tabs style-2 type-small">
                                    <ul class="widget-menu-tab wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <li class="item-title active">
                                            <span class="inner">Schools</span>
                                        </li>
                                        <li class="item-title">
                                            <span class="inner">Food</span>
                                        </li>
                                        <li class="item-title">
                                            <span class="inner">Health &amp; Medical</span>
                                        </li>
                                    </ul>
                                    <div class="widget-content-tab">
                                        <div class="widget-content-inner active" style="">
                                            <div class="wrap-nearby">
                                                <div class="nearby-item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                                    <div class="number">
                                                        <h4>9<span>/10</span></h4>
                                                    </div>
                                                    <div>
                                                        <div class="title">Ps 95 Eastwood</div>
                                                        <div class="flex items-center gap15">
                                                            <p>Grades: <span>K-5</span></p>
                                                            <p>Distance: <span>0.3 mi</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nearby-item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                                    <div class="number">
                                                        <h4>5<span>/10</span></h4>
                                                    </div>
                                                    <div>
                                                        <div class="title">Is 238 Susan B Anthony</div>
                                                        <div class="flex items-center gap15">
                                                            <p>Grades: <span>K-5</span></p>
                                                            <p>Distance: <span>0.3 mi</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nearby-item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                                    <div class="number">
                                                        <h4>3<span>/10</span></h4>
                                                    </div>
                                                    <div>
                                                        <div class="title">Cambria Heights Academy</div>
                                                        <div class="flex items-center gap15">
                                                            <p>Grades: <span>K-5</span></p>
                                                            <p>Distance: <span>0.3 mi</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-inner" style="display: none;">
                                            <div class="wrap-nearby">
                                                <div class="nearby-item">
                                                    <div class="number">
                                                        <h4>9<span>/10</span></h4>
                                                    </div>
                                                    <div>
                                                        <div class="title">Ps 95 Eastwood</div>
                                                        <div class="flex items-center gap15">
                                                            <p>Grades: <span>K-5</span></p>
                                                            <p>Distance: <span>0.3 mi</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nearby-item">
                                                    <div class="number">
                                                        <h4>5<span>/10</span></h4>
                                                    </div>
                                                    <div>
                                                        <div class="title">Is 238 Susan B Anthony</div>
                                                        <div class="flex items-center gap15">
                                                            <p>Grades: <span>K-5</span></p>
                                                            <p>Distance: <span>0.3 mi</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nearby-item">
                                                    <div class="number">
                                                        <h4>3<span>/10</span></h4>
                                                    </div>
                                                    <div>
                                                        <div class="title">Cambria Heights Academy</div>
                                                        <div class="flex items-center gap15">
                                                            <p>Grades: <span>K-5</span></p>
                                                            <p>Distance: <span>0.3 mi</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-inner" style="display: none;">
                                            <div class="wrap-nearby">
                                                <div class="nearby-item">
                                                    <div class="number">
                                                        <h4>9<span>/10</span></h4>
                                                    </div>
                                                    <div>
                                                        <div class="title">Ps 95 Eastwood</div>
                                                        <div class="flex items-center gap15">
                                                            <p>Grades: <span>K-5</span></p>
                                                            <p>Distance: <span>0.3 mi</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nearby-item">
                                                    <div class="number">
                                                        <h4>5<span>/10</span></h4>
                                                    </div>
                                                    <div>
                                                        <div class="title">Is 238 Susan B Anthony</div>
                                                        <div class="flex items-center gap15">
                                                            <p>Grades: <span>K-5</span></p>
                                                            <p>Distance: <span>0.3 mi</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nearby-item">
                                                    <div class="number">
                                                        <h4>3<span>/10</span></h4>
                                                    </div>
                                                    <div>
                                                        <div class="title">Cambria Heights Academy</div>
                                                        <div class="flex items-center gap15">
                                                            <p>Grades: <span>K-5</span></p>
                                                            <p>Distance: <span>0.3 mi</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-wrap">
                                <div class="flex justify-between items-center mb-40 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <h4 class="mb-0">4 Reviews</h4>
                                    <a href="#" class="tf-button-green">Leave a Review</a>
                                </div>
                                <ul>
                                    <li class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="image">
                                            <img src="images/author/author-5.png" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="ratings">
                                                <i class="flaticon-star-1"></i>
                                                <i class="flaticon-star-1"></i>
                                                <i class="flaticon-star-1"></i>
                                                <i class="flaticon-star-1"></i>
                                                <i class="flaticon-star-1"></i>
                                            </div>
                                            <div class="name">
                                                <a href="#">Jane Cooper</a>
                                            </div>
                                            <div class="time">April 06, 2024 at 7:55 pm</div>
                                            <p>Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="image">
                                            <img src="images/author/author-6.png" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="ratings">
                                                <i class="flaticon-star-1"></i>
                                                <i class="flaticon-star-1"></i>
                                                <i class="flaticon-star-1"></i>
                                                <i class="flaticon-star-1"></i>
                                                <i class="flaticon-star-1"></i>
                                            </div>
                                            <div class="name">
                                                <a href="#">Jane Cooper</a>
                                            </div>
                                            <div class="time">April 06, 2024 at 7:55 pm</div>
                                            <p>Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="leave-a-review">
                                <h4 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Leave A Review</h4>
                                <p class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Your email address will not be published. Required fields are marked *</p>
                                <div>
                                    <p class="wow fadeInUp" style="visibility: hidden; animation-name: none;">Your Rating *</p>
                                    <div class="ratings wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                        <i class="flaticon-star-1"></i>
                                        <i class="flaticon-star-1"></i>
                                        <i class="flaticon-star-1"></i>
                                        <i class="flaticon-star-1"></i>
                                        <i class="flaticon-star-1"></i>
                                    </div>
                                </div>
                                <form class="form-comment">
                                    <fieldset class="message wow fadeInUp has-top-title" style="visibility: hidden; animation-name: none;">
                                        <textarea name="message" rows="4" placeholder="Your Comment" class="" tabindex="2" aria-required="true" required="">Lorem Ipsum</textarea>
                                        <label for="">Your Comment</label>
                                    </fieldset> 
                                    <div class="cols">
                                        <fieldset class="name wow fadeInUp has-top-title" style="visibility: hidden; animation-name: none;">
                                            <input type="text" placeholder="Name" class="" name="text" tabindex="2" value="Ali Tufan" aria-required="true" required="">
                                            <label for="">Name</label>
                                        </fieldset>
                                        <fieldset class="email wow fadeInUp has-top-title" style="visibility: hidden; animation-name: none;">
                                            <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="themesflat@gmail.com" aria-required="true" required="">
                                            <label for="">Email</label>
                                        </fieldset>
                                    </div>
                                    <fieldset class="website wow fadeInUp has-top-title" style="visibility: hidden; animation-name: none;">
                                        <input type="text" placeholder="Website" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Website</label>
                                    </fieldset>
                                    <div class="checkbox-item wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                        <label>
                                            <p>Save my name, email, and website in this browser for the next time I comment.</p>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </div>
                                    <div class="button-submit wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                        <button class="tf-button-primary" type="submit">Submit Review <i class="icon-arrow-right-add"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="smilar-homes">
                                <h4 class="wow fadeInUp" style="visibility: hidden; animation-name: none;">Similar Homes</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box-dream has-border wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                            <div class="image">
                                                <div class="list-tags">
                                                    <a href="#" class="tags-item for-sell">FOR RENT</a>
                                                    <a href="#" class="tags-item featured">FEATURED</a>
                                                </div>
                                                <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                                <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                                    <div class="swiper-wrapper" id="swiper-wrapper-8044f4d4816a810ef" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 365px;">
                                                            <div class="w-full">
                                                                <img class="w-full" src="images/house/home-1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" style="width: 365px;">
                                                            <div class="w-full">
                                                                <img class="w-full" src="images/house/home-2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide" role="group" aria-label="3 / 4" style="width: 365px;">
                                                            <div class="w-full">
                                                                <img class="w-full" src="images/house/home-3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 365px;">
                                                            <div class="w-full">
                                                                <img class="w-full" src="images/house/home-4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-pagination box-dream-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                                                    <div class="box-dream-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-8044f4d4816a810ef" aria-disabled="false"></div>
                                                    <div class="box-dream-prev swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-8044f4d4816a810ef" aria-disabled="true"></div>
                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                            </div>
                                            <div class="content">
                                                <div class="head">
                                                    <div class="title">
                                                        <a href="property-single-v1.html">Home Pitt Street</a>
                                                    </div>
                                                    <div class="price">$815,000</div>
                                                </div>
                                                <div class="location">
                                                    <div class="icon">
                                                        <i class="flaticon-location"></i>
                                                    </div>
                                                    <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                                </div>
                                                <div class="icon-box">
                                                    <div class="item">
                                                        <i class="flaticon-hotel"></i>
                                                        <p>4 Beds</p>
                                                    </div>
                                                    <div class="item">
                                                        <i class="flaticon-bath-tub"></i>
                                                        <p>3 Baths</p>
                                                    </div>
                                                    <div class="item">
                                                        <i class="flaticon-minus-front"></i>
                                                        <p>2660 Sqft</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-dream has-border wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                                            <div class="image">
                                                <div class="list-tags">
                                                    <a href="#" class="tags-item for-sell">FOR SELL</a>
                                                </div>
                                                <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                                <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                                    <div class="swiper-wrapper" id="swiper-wrapper-47a8d3ea2c6886010" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 365px;">
                                                            <div class="w-full">
                                                                <img class="w-full" src="images/house/home-2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" style="width: 365px;">
                                                            <div class="w-full">
                                                                <img class="w-full" src="images/house/home-1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide" role="group" aria-label="3 / 4" style="width: 365px;">
                                                            <div class="w-full">
                                                                <img class="w-full" src="images/house/home-3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 365px;">
                                                            <div class="w-full">
                                                                <img class="w-full" src="images/house/home-4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-pagination box-dream-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                                                    <div class="box-dream-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-47a8d3ea2c6886010" aria-disabled="false"></div>
                                                    <div class="box-dream-prev swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-47a8d3ea2c6886010" aria-disabled="true"></div>
                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                            </div>
                                            <div class="content">
                                                <div class="head">
                                                    <div class="title">
                                                        <a href="property-single-v1.html">Luxury Mansion</a>
                                                    </div>
                                                    <div class="price">$815,000</div>
                                                </div>
                                                <div class="location">
                                                    <div class="icon">
                                                        <i class="flaticon-location"></i>
                                                    </div>
                                                    <p>148-37 88th Ave, Jamaica, NY 11435</p>
                                                </div>
                                                <div class="icon-box">
                                                    <div class="item">
                                                        <i class="flaticon-hotel"></i>
                                                        <p>4 Beds</p>
                                                    </div>
                                                    <div class="item">
                                                        <i class="flaticon-bath-tub"></i>
                                                        <p>3 Baths</p>
                                                    </div>
                                                    <div class="item">
                                                        <i class="flaticon-minus-front"></i>
                                                        <p>2660 Sqft</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="property-single-sidebar po-sticky" style="position: fixed; width: 386px; left: 842px; top: 0px;">
                            <div class="sidebar-item sidebar-request">
                                <div class="text">
                                    Request a tour as early as <br>
                                    <span>Today at 11:00AM</span>
                                </div>
                                <a href="#" class="tf-button-primary w-full">Schedule a Tour<i class="icon-arrow-right-add"></i></a>
                                <a href="#" class="tf-button-primary w-full style-bg-white">Contact an agent<i class="icon-arrow-right-add"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /property-single-wrap -->
    
    </div>

    @include('layouts/components/footer')

</body>
</html>
