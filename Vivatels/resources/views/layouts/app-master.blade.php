<!doctype html>
<html lang="lv">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Vitālijs Verhovičs">


    <title>Vivatels: mēbeļu ražošana</title>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon_io/android-chrome-512x512.png"/>


    <!-- slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
    />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap"
      rel="stylesheet"
    />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <!-- lightbox for gallery style -->
    <link href="css/lightbox.css" rel="stylesheet" />

</head>
<body>
    
    @include('layouts.partials.navbar')

    <main>
        @yield('content')
    </main>

      



<!-- info section -->
<section class="info_section layout_padding">
  <div class="container">
    <div class="row">

      <div class="col-md-3">

        <div class="info-logo">
          <h2>
            SIA Vivatels
          </h2>
          <p>
          {{__('messages.nav-vivatels')}} 
           
          </p>
        </div>

      </div>

      <div class="col-md-3">
        <div class="info-nav">
          <h4>
          {{__('messages.navigation')}} 
          </h4>
          <ul>
            <li>
              <a href="/">
                {{__('messages.nav-start')}} 
              </a>
            </li>
            <li>
              <a href="about">
                {{__('messages.nav-about')}} 
              </a>
            </li>
            <li>
              <a href="service">
                {{__('messages.nav-service')}} 
              </a>
            </li>
            <li>
              <a href="contact">
                {{__('messages.nav-contact')}} 
            </li>
            <li>
              <a href="gallery">
                {{__('messages.nav-gallery')}} 
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info-contact">
          <h4>
          {{__('messages.nav-contact')}} 
          </h4>
          <div class="location">
            <h6>
            {{__('messages.nav-addr')}} 
            </h6>
            <a href="https://www.google.com/maps/place/SIA+Vivatels/@55.8709194,26.5593702,17z/data=!4m12!1m6!3m5!1s0x46c295a8ee95d4f1:0xb85a6a1038e2b0cc!2sSIA+Vivatels!8m2!3d55.8708924!4d26.5616801!3m4!1s0x46c295a8ee95d4f1:0xb85a6a1038e2b0cc!8m2!3d55.8708924!4d26.5616801"
            target="_blank">
              <img src="images/location.png" alt="">
              <span>
                Stiklu iela 7, Daugavpils, LV-5404<br><br>
      PVN Reg.: 41503043765
              </span>
            </a>
          </div>
          <div class="call">
            <h6>
            {{__('messages.nav-info')}} 
            </h6>
            <a href="tel:+37129433994">
              <img src="images/telephone.png" alt="">
              <span>
                ( +371 29433994 )
              </span>
            </a>
            <br>
            <a href="mailto:vivatels@inbox.lv?subject=vivatels.lv&body=Labdien!%0D%0A...">
              <img src="images/email.png" alt="" width="20px" height="20px">
              <span>
                vivatels@inbox.lv
              </span>
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <a href="https://www.google.com/maps/place/SIA+Vivatels/@55.8709194,26.5593702,17z/data=!4m12!1m6!3m5!1s0x46c295a8ee95d4f1:0xb85a6a1038e2b0cc!2sSIA+Vivatels!8m2!3d55.8708924!4d26.5616801!3m4!1s0x46c295a8ee95d4f1:0xb85a6a1038e2b0cc!8m2!3d55.8708924!4d26.5616801"
        target="_blank">
        <h4>
        {{__('messages.nav-we-here')}} 
        </h4>
          <img src="images/route.png" alt="Route png" height="200px">
        </a>
       </div>

    </div>
  </div>
</section>

<!-- end info_section -->
    <!-- footer section -->
    <section class="container-fluid footer_section">
	
      <p>
       
      </p>
    </section>
    <!-- end footer section -->

    <!-- scripts -->
    @include('layouts.partials.scripts')
    <!-- end scripts -->
</body>

</html>