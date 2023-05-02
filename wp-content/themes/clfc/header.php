<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <title><?php bloginfo('name'); ?></title>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://use.typekit.net/env8cis.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style0502.css" />

  <?php wp_head(); ?>
</head>
<body class="background">
  <!-- Navbar -->
  <header>
    <!-- MOBILE NAVIGATION -->
    <div id="nav-modal">
      <img src="https://www.respectconnectprotect.org/wp-content/uploads/2023/05/RCP-logo.png">
      <span id="close-modal">
        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M29.3848 28.0676L1.00043 2.80245" stroke="#9B3926" stroke-width="3"/>
          <path d="M1.75781 28.8701L28.6279 2.00006" stroke="#9B3926" stroke-width="3"/>
        </svg>
      </span>
      <div class="clearfix"></div>
      <div class="modal-body">
        <ul>
          <li><a href="<?php echo get_site_url(); ?>/about/">ABOUT</a></li>
          <li><a href="<?php echo get_site_url(); ?>/get-involved/">GET INVOLVED</a></li>
          <li><a href="<?php echo get_site_url(); ?>/resources/">RESOURCES</a></li>
          <li><a href="<?php echo get_site_url(); ?>/contact-us/">CONTACT</a></li>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <!-- DESKTOP NAVIGATION -->
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <!-- Logo -->
              <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
                <img class="logo" src="https://www.respectconnectprotect.org/wp-content/uploads/2023/05/clf-logo.png" alt="Conservation Lands Foundation Campaign logo">
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
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/about/">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/get-involved/">Get Involved</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/resources/">Resources</a>
                  </li>
                  <li class="nav-item">
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