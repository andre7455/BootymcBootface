
 <?php

@session_start();

echo $_SESSION["userEmail"];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <!-- PAGE TITLE -->
  <title>Home - CoralYachts</title>

  <!-- META-DATA -->
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- FAVICON -->
  <link rel="shortcut icon" href="assets/images/favicon.png">

  <!-- CSS:: FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS:: ANIMATE -->
  <link rel="stylesheet" type="text/css" href="assets/css/plugins/animate/animate.css">

  <!-- CSS:: MAIN -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-08.css">

</head>

<body>
  <section id="r-customizer" class="r-customizer">
    <div class="r-selector">
      <span class="d-block text-center">Color Options</span>
      <div class="r-color_section r-color_block">
        <ul class="r-color_selector" id="r-color_selector">
          <li class="r-color_1" data-attr="color-01"></li>
          <li class="r-color_6" data-attr="color-06"></li>
          <li class="r-color_2" data-attr="color-02"></li>
          <li class="r-color_3" data-attr="color-03"></li>
          <li class="r-color_4" data-attr="color-04"></li>
          <li class="r-color_5" data-attr="color-05"></li>
          <li class="r-color_7" data-attr="color-07"></li>
          <li class="r-color_8" data-attr="color-08"></li>
        </ul>
      </div>
    </div>
    <i id="r-selector_icon" class="fa fa-cog"></i>
  </section>
  <div class="r-wrapper">
    <header>
      <div class="r-header r-header-inner r-header-strip-01">
        `<?php include 'header.php';?>`
          <div class="r-slider owl-carousel" id="defaultHomeSlider">
          <div class="r-slider-item">
            <img src="assets/images/main-slider-01.jpg" class="img-fluid d-block m-auto" alt="">
            <div class="container">
              <div class="r-slider-top-content">
                <h1 class="animated fadeInDown">Kia Rio <span>z</span></h1>
                <h4 class="animated fadeInLeft">FOR RENT <strong>$50</strong> PER DAY</h4>
                <a href="#" class="btn btn-outlined animated fadeInUp"> Reserve Now </a>
              </div>
            </div>
          </div>
          <div class="r-slider-item">
            <img src="assets/images/main-slider-04.jpg" class="img-fluid d-block m-auto" alt="">
            <div class="container">
              <div class="r-slider-top-content">
                <h1>BMW <span>3</span></h1>
                <h4>FOR RENT <strong>$150</strong> PER DAY</h4>
                <a href="#" class="btn btn-outlined"> Reserve Now </a>
              </div>
            </div>
          </div>
          <div class="r-slider-item">
            <img src="assets/images/main-slider-05.jpg" class="img-fluid d-block m-auto" alt="">
            <div class="container">
              <div class="r-slider-top-content">
                <h1>Audi <span>A4</span></h1>
                <h4>FOR RENT <strong>$100</strong> PER DAY</h4>
                <a href="#" class="btn btn-outlined"> Reserve Now </a>
              </div>
            </div>
          </div>
        </div>

        <div class="r-car-search">
          <div class="container">
            <div class="r-top-form-title animated fadeInUp">
              <span>120+ BOATS TYPE & BRANDS</span>
              <h3>Search Your <b>Best Boats.</b></h3>
            </div>
            <form>
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label> Boat Brand </label>
                    <select class="form-control">
                      <option>Any Brands</option>
                      <option>Any Brands</option>
                      <option>Any Brands</option>
                      <option>Any Brands</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label> Boat Type </label>
                    <select class="form-control">
                      <option>Any Type</option>
                      <option>Any Type</option>
                      <option>Any Type</option>
                      <option>Any Type</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label> Boat Price </label>
                    <select class="form-control">
                      <option>Price Low to High</option>
                      <option>Price High to Low</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <input type="submit" class="form-control btn-primary" value="Search Car Now">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>
    <section id="r-advantages-part" class="r-advantages-part">
      <div class="r-advantage-main-part">
        <div class="container clearfix">
          <div class="advantage-head">
            <span>120+ BOAT TYPE &amp; BRANDS</span>
            <h2>CoralYachts <b>Advantages.</b></h2>
          </div>
          <div class="row clearfix">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
              <div class="r-advantages-box">
                <div class="icon"> <img src="assets/images/advantage-icon-1.png" alt=""> </div>
                <div class="head animated pulse">24/7 Customer Online Support</div>
                <div class="sub-text">Call us Anywhere Anytime</div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
              <div class="r-advantages-box">
                <div class="icon"> <img src="assets/images/advantage-icon-2.png" alt=""> </div>
                <div class="head animated pulse">Reservation Anytime You Wants</div>
                <div class="sub-text">24/7 Online Reservation</div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
              <div class="r-advantages-box">
                <div class="icon"> <img src="assets/images/advantage-icon-3.png" alt=""> </div>
                <div class="head animated pulse">Lots of Picking Locations</div>
                <div class="sub-text">250+ Locations</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="r-about-info">
      <div class="r-about-info">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="r-about-info-img">
                <img src="assets/images/about-img-01.png" class="img-fluid d-block m-auto" alt="">
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="r-about-info-content">
                <div class="r-sec-head r-sec-head-left r-sec-head-line r-sec-head-w pt-0">
                  <span>KNOW MORE ABOUT US</span>
                  <h2>Who <b>CoralYachts</b> Are.</h2>
                </div>
                <p>
                  We know the difference is in the details and that’s why our Boat rental services, in the tourism and
                  business industry, stand out for their quality and good taste.
                </p>
                <ul class="mb-0 pl-0">
                  <li><i class="fa fa-check-circle"></i> We working since 1980 with 4.000 customers</li>
                  <li><i class="fa fa-check-circle"></i> All brand & type Boat in our docks</li>
                  <li><i class="fa fa-check-circle"></i> 1.000+ picking locations around the world</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section id="r-quote">
      <div class="r-quote r-quote-sub pt-0 r-quote-noafter">
        <div class="r-sec-head r-accent-color r-sec-head-t">
          <span>LATEST TESTIMONIAL</span>
          <h2>What <b>They Say</b> About Us.</h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12" data-wow-delay="0.2s">
              <div id="r-quote-carousel" class="carousel slide">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item">
                    <p>“This was our first time renting from CoralYachts and we were very pleased with the whole
                      experience. Your price was lower than other companies. Our rental experience was good from start
                      to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                  </div>
                  <div class="carousel-item active">
                    <p>“This was our first time renting from CoralYachts and we were very pleased with the whole
                      experience. Your price was lower than other companies. Our rental experience was good from start
                      to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                  </div>
                  <div class="carousel-item">
                    <p>“This was our first time renting from CoralYachts and we were very pleased with the whole
                      experience. Your price was lower than other companies. Our rental experience was good from start
                      to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
                  </div>
                </div>
                <ol class="carousel-indicators">
                  <li data-target="#r-quote-carousel" data-slide-to="0">
                    <img class="img-fluid d-block" src="assets/images/user-02.jpg" alt="">
                    <span>
                      <b>Kevin smit</b> <br>
                      Docent Economie, team Creative Technologie, Aventus
                    </span>
                  </li>
                  <li data-target="#r-quote-carousel" data-slide-to="1" class="active text-center">
                    <img class="img-fluid d-block" src="assets/images/user-01.png" alt="">
                    <span>
                      <b>Kevin smit</b> <br>
                      Docent Economie, team Creative Technologie, Aventus
                    </span>
                  </li>
                  <li data-target="#r-quote-carousel" data-slide-to="2">
                    <img class="img-fluid d-block" src="assets/images/user-03.png" alt="">
                    <span>
                      <b>Kevin smit</b> <br>
                      Docent Economie, team Creative Technologie, Aventus
                    </span>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="r-faq-section">
      <div class="r-faq-section r-faq-white-bg">
        <div class="container">
          <div class="row v-align-center r-faq-header-wrapper">
            <div class="col-md-6 col-sm-12">
              <div class="r-faq-header">
                <span>FIND YOUR ANSWER HERE</span>
                <h2>Frequenly <strong>Ask &amp; Questions.</strong></h2>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <ul class="nav nav-tabs r-faq-option-tab" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="faq-01-tab" data-toggle="tab" href="#faq-01" role="tab"
                    aria-controls="faq-01" aria-selected="true"><i class="fa fa-user "></i>About account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="faq-02-tab" data-toggle="tab" href="#faq-02" role="tab" aria-controls="faq-02"
                    aria-selected="false"><i class="fa fa-question-circle"></i>Technical support</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="faq-03-tab" data-toggle="tab" href="#faq-03" role="tab" aria-controls="faq-03"
                    aria-selected="false"><i class="fa fa-car"></i>Boat Features</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content" id="myTabContent-01">
            <div class="tab-pane fade show active" id="faq-01" role="tabpanel" aria-labelledby="faq-01-tab">
              <div class="row r-faq-accordion-wrapper">
                <div class="col-lg-6 col-md-12">
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      How to reserved a boat here?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      How can i drop the rental boat?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      What happen if i crash the boat?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                </div>
                <div class="col-lg-6 col-md-12">
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      How can i select a boat rent?
                    </div>
                    <div class="r-accordion-body" style="display: none;">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      Do you have VIP access to airport?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      What happen if i crash the boat?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="faq-02" role="tabpanel" aria-labelledby="faq-02-tab">
              <div class="row r-faq-accordion-wrapper">
                <div class="col-lg-6 col-md-12">
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      How can i select a boat rent?
                    </div>
                    <div class="r-accordion-body" style="display: none;">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      Do you have VIP access to airport?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      What happen if i crash the boat?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                </div>
                <div class="col-lg-6 col-md-12">
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      How to reserved a boat here?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      How can i drop the rental boat?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      What happen if i crash the boat?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="faq-03" role="tabpanel" aria-labelledby="faq-03-tab">
              <div class="row r-faq-accordion-wrapper">
                <div class="col-lg-6 col-md-12">
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      How can i drop the rental boat?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      What happen if i crash the boat?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      How to reserved a boat here?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                </div>
                <div class="col-lg-6 col-md-12">
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      Do you have VIP access to airport?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      What happen if i crash the boat?
                    </div>
                    <div class="r-accordion-body">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                  <div class="r-accordion">
                    <div class="r-accordion-heading">
                      <span class="r-accordion-toggle">
                        <i class="fa-arrow-circle-down fa"></i>
                      </span>
                      How can i select a boat rent?
                    </div>
                    <div class="r-accordion-body" style="display: none;">
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing dolgedo.
                      </p>
                    </div>
                  </div> <!-- /r-accordion -->
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <a href="#" class="btn-primary icon-btn"> <i class="fa fa-question-circle icon"></i> MAKE A QUESTIONS </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="r-latest-news">
      <div class="r-latest-news">
        <div class="r-sec-head r-sec-head-b">
          <span>ARTICLES FROM BLOG</span>
          <h2>Our <b>Latest News.</b></h2>
        </div>
        <div class="container">
          <div class="owl-carousel r-latest-news-list" id="r-latest-news-slider">
            <div class="r-latest-news-single">
              <a href="#" class="d-inline-block"><img src="assets/images/latest-news-01.jpg"
                  class="img-fluid d-block m-auto" alt=""></a>
              <div class="r-latest-news-content">
                <span class="r-date">27 JUNE 2018</span>
                <h4><a href="#">What To Do if Your Rental Boat Has Met With An Accident.</a></h4>
                <a href="#" class="r-read-more">READ ARTICLE</a>
              </div>
            </div>

            <div class="r-latest-news-single">
              <a href="#" class="d-inline-block"><img src="assets/images/latest-news-02.jpg"
                  class="img-fluid d-block m-auto" alt=""></a>
              <div class="r-latest-news-content">
                <span class="r-date">27 JUNE 2018</span>
                <h4><a href="#">What To Do if Your Rental Boat Has Met With An Accident.</a></h4>
                <a href="#" class="r-read-more">READ ARTICLE</a>
              </div>
            </div>

            <div class="r-latest-news-single">
              <a href="#" class="d-inline-block"><img src="assets/images/latest-news-03.jpg"
                  class="img-fluid d-block m-auto" alt=""></a>
              <div class="r-latest-news-content">
                <span class="r-date">27 JUNE 2018</span>
                <h4><a href="#">What To Do if Your Rental Boat Has Met With An Accident.</a></h4>
                <a href="#" class="r-read-more">READ ARTICLE</a>
              </div>
            </div>
          </div>
        </div>
        <div class="r-follow-us text-center">
          <img src="assets/images/instagram.png" class="img-fluid d-block m-auto" alt="">
          <span>Follow Our Instagram <a href="#">#CoralYachts</a></span>
        </div>
      </div>
    </section>
    <div id="r-gallery-part">
      <div class="r-gallery-part r-gallery-part-home pt-0 pb-0">
        <ul class="clearfix">
          <li>
            <a href="assets/images/gallery-img01.jpg" data-rel="lightcase:myCollection">
              <img src="assets/images/gallery-img01.jpg" class="d-block img-fluid" alt="">
              <div class="gallery-hover">
                <div class="gallery-text">
                  <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="assets/images/gallery-img02.jpg" data-rel="lightcase:myCollection">
              <img src="assets/images/gallery-img02.jpg" class="d-block img-fluid" alt="">
              <div class="gallery-hover">
                <div class="gallery-text">
                  <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="assets/images/gallery-img03.jpg" data-rel="lightcase:myCollection">
              <img src="assets/images/gallery-img03.jpg" class="d-block img-fluid" alt="">
              <div class="gallery-hover">
                <div class="gallery-text">
                  <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="assets/images/gallery-img04.jpg" data-rel="lightcase:myCollection">
              <img src="assets/images/gallery-img04.jpg" class="d-block img-fluid" alt="">
              <div class="gallery-hover">
                <div class="gallery-text">
                  <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="assets/images/gallery-img05.jpg" data-rel="lightcase:myCollection">
              <img src="assets/images/gallery-img05.jpg" class="d-block img-fluid" alt="">
              <div class="gallery-hover">
                <div class="gallery-text">
                  <div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <footer>
      <div class="r-footer">
        <div class="container">
          <div class="row clearfix">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="r-footer-block">
                <img src="assets/images/footer-logo.png" class="d-block img-fluid" alt="">
                <p>
                  We know the difference is in the details and that’s why our boat rental services, in the tourism and
                  business industry, stand out for their quality.
                </p>
                <form action="#">
                  <div class="r-newsletter">
                    <input type="email" placeholder="Subscribe Newsletter">
                    <button class="btn"><i class="fa fa-envelope"></i></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="r-footer-block">
                <div class="r-footer-widget r-footer-phone">
                  <span><i class="fa fa-phone"></i> CALL US ON LINE 1</span>
                  <h5>100.1212.2000</h5>
                </div>
                <div class="r-footer-widget r-footer-nav">
                  <h6>USEFUL LINK</h6>
                  <nav>
                    <ul>
                      <li><a href="#">Private Policy</a></li>
                      <li><a href="#">Term & Conditions</a></li>
                      <li><a href="#">Copyright Notification</a></li>
                      <li><a href="#">Register for New Member</a></li>
                      <li><a href="#">Press Release</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="r-footer-block">
                <div class="r-footer-widget r-footer-phone">
                  <span><i class="fa fa-phone"></i> CALL US ON LINE 2</span>
                  <h5>100.2424.2000</h5>
                </div>
                <div class="r-footer-widget r-footer-nav">
                  <h6>OUR INFO</h6>
                  <nav>
                    <ul>
                      <li><a href="#">About CoralYachts/a></li>
                      <li><a href="#">Our Mission & Strategy</a></li>
                      <li><a href="#">Our Vision</a></li>
                      <li><a href="#">CoralYachts Advantages</a></li>
                      <li><a href="#">Contact Us</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="r-footer-block">
                <div class="r-footer-widget r-footer-map">
                  <a href="#"> <img src="assets/images/icon-footer-map.png" alt="" class="icon" /> CoralYachts on Map</a>
                </div>
                <div class="r-footer-widget r-footer-nav">
                  <h6>ACCOUNT INFORMATION</h6>
                  <nav>
                    <ul>
                      <li><a href="#">Login to My Account</a></li>
                      <li><a href="#">Press Releases</a></li>
                      <li><a href="#">User Dashboard</a></li>
                      <li><a href="#">Email Address</a></li>
                      <li><a href="#">Lorem Ipsum dolorsit</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <div class="row clearfix r-footer-strip">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              ©2018 Created by jThemes Studio
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i>. <span>Facebook</span></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i>.<span>Twitter</span></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i>.<span>Instagram</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>

  <!-- JQUERY:: JQUERY.JS -->
  <script src="assets/js/jquery.min.js"></script>

  <!-- JQUERY:: APPEAR.JS -->
  <script src="assets/js/plugins/appear/appear.js"></script>

  <!-- JQUERY:: COUNTER.JS -->
  <script src="assets/js/plugins/counter/jquery.easing.min.js"></script>
  <script src="assets/js/plugins/counter/counter.min.js"></script>

  <!-- JQUERY:: BOOTSTRAP.JS -->
  <script src="assets/js/tether.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- JQUERY:: PLUGINS -->
  <script src="assets/js/plugins/owl/owl.carousel.min.js"></script>
  <script src="assets/js/plugins/lightcase/lightcase.js"></script>


  <!-- JQUERY:: MAP -->
  <script src="assets/js/map.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw"></script>

  <!-- JQUERY:: CUSTOM.JS -->
  <script src="assets/js/custom.js"></script>

</body>

</html>