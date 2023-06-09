<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <title><?php bloginfo('name'); ?></title> 
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.typekit.net/env8cis.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" />
  <link rel="stylesheet" href="ruta-a-tu-tema/owl-carousel-slider/owl.carousel.min.css">
  <link rel="stylesheet" href="ruta-a-tu-tema/owl-carousel-slider/owl.theme.default.min.css">
  <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/rcp-favicon.png">

  <!-- Meta Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '691437477933537');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=691437477933537&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->
  
  <?php wp_head(); ?>
</head>
<body class="background">
  <!-- Navbar -->
  <header>
    <!-- MOBILE NAVIGATION --> 
    <div id="nav-modal">
      <img tabindex="0" class="logo" src="https://www.respectconnectprotect.org/wp-content/uploads/2023/05/RCP-logo.png" alt="Respect Connect Protect Logo">
      <span id="close-modal">
        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M29.3848 28.0676L1.00043 2.80245" stroke="#9B3926" stroke-width="3"/>
          <path d="M1.75781 28.8701L28.6279 2.00006" stroke="#9B3926" stroke-width="3"/>
        </svg>
      </span>
      <div class="clearfix"></div>
      <div class="modal-body">
        <ul>
          <li tabindex="1"><a href="<?php echo get_site_url(); ?>/about/">ABOUT</a></li>
          <li tabindex="2"><a href="<?php echo get_site_url(); ?>/get-involved/">GET INVOLVED</a></li>
          <li tabindex="3"><a href="<?php echo get_site_url(); ?>/resources/">RESOURCES</a></li>
          <li tabindex="4"><a href="<?php echo get_site_url(); ?>/contact-us/">CONTACT</a></li>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <!-- DESKTOP NAVIGATION -->
          <nav tabindex="1" class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <!-- Logo -->
              <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
                <img tabindex="2" class="logo" src="https://www.respectconnectprotect.org/wp-content/uploads/2023/05/RCP-logo.png" alt="Conservation Lands Foundation Campaign logo">
              </a>

              <!-- Toggle button for collapsed menu -->
              <span id="hamburguer-menu">
              <svg width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M38 2L0 2" stroke="#9B3926" stroke-width="3"/>
                <path d="M38 18L0 18" stroke="#9B3926" stroke-width="3"/>
                <path d="M38 34L0 34" stroke="#9B3926" stroke-width="3"/>
                </svg>
              </span>


              <!-- Menu items -->
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li tabindex="3" class="nav-item">
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/about/">About</a>
                  </li>
                  <li tabindex="4" class="nav-item">
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/get-involved/">Get Involved</a>
                  </li>
                  <li tabindex="5" class="nav-item">
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/resources/">Resources</a>
                  </li>
                  <li tabindex="6" class="nav-item">
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/contact-us/">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        </div>
      </div>
    </div>
  </header>
  <!-- end of Navbar -->

  <div class="line"></div>

  <div class="container">