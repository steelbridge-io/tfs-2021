<?php
  $stream_report_hero_image   = get_post_meta(get_the_ID(), 'report-image', true );
  $stream_report_hero_video   = get_post_meta(get_the_ID(), 'report-video', true );
  $default_logo               = get_theme_mod('default_page_logo');
  $tfs_logo_report            = get_post_meta(get_the_ID(), 'tfs-logo-report', true );
  $stream_report_description  = get_post_meta(get_the_ID(), 'streamreport-description', true);
  $stream_report_title		  = get_post_meta(get_the_ID(), 'stream-report-title', true);
  $default = '';
  
  if ($stream_report_hero_video !== $default ) {
  ?>
  <div id="page-wrapper-stream-report-video" >
    <div class="container-fluid">
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="<?php echo $stream_report_hero_video; ?>" type="video/mp4">
      </video>
    </div>
    <header id="header" <?php if ( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?> class="alt">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-fly-shop' ); ?></a>
      <h1><a style="margin-right:1em;" href="<?php echo esc_url(home_url( '/' )); ?>" rel="home"><?php bloginfo('name'); ?><a href="tel:18006693474">800&middot;669&middot;3474</a></h1>
      <nav id="nav">
      
        <ul>
          <li class="special">
            <a href="#menu" class="menuToggle"><span class="menu-title">Menu</span></a>
            <?php
              // This loads the custom menu from your wordpress dashboard
              wp_nav_menu( array(
                'theme_location'		=> 'primary',
                'container'				=> 'div',
                'container_id'			=> 'menu'
              ));
            ?>
          </li>
        </ul>
      </nav>
    </header>
  <!-- </div> Closing div is located in footer.php -->
  
    <section id="#banner-video">
      <div id="banner">
        <div class="inner">
          <div class="overlay"></div>
          <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
              <div class="w-100 text-white">
                <?php if($tfs_logo_report !== $default ) { ?>
                <img src="<?php echo $tfs_logo_report;	?>" class="img-responsive center-block" align="center" alt="The Fly Shop">
                <?php } else { ?>
                <img src="<?php echo $default_logo;	?>" class="img-responsive center-block" align="center" alt="The Fly Shop">
                <?php } ?>
                <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                <h3><?php echo get_theme_mod('telephone_number'); ?></h3>
              </div>
            </div>
          </div>
        </div>
        <a href="#main" class="more scrolly">Learn More</a>
      </div>
    </section>
    
    <?php } else { ?>
    
    <div id="page-wrapper-stream-report">
      <header id="header" <?php if ( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?> class="alt">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-fly-shop' ); ?></a>
        <h1><a style="margin-right:1em;" href="<?php echo esc_url(home_url( '/' )); ?>" rel="home"><?php bloginfo('name'); ?><a href="tel:18006693474">800&middot;669&middot;3474</a></h1>
        <nav id="nav">
          <ul>
            <li class="special">
              <a href="#menu" class="menuToggle"><span class="menu-title">Menu</span></a>
              <?php
                // This loads the custom menu from your wordpress dashboard
                wp_nav_menu( array(
                  'theme_location'		=> 'primary',
                  'container'				=> 'div',
                  'container_id'			=> 'menu'
                ));
              ?>
            </li>
          </ul>
        </nav>
      </header>
      <!-- </div> Closing div is located in footer.php -->
      <section id="banner">
        <div class="inner">
          <?php if( $tfs_logo_report !== $default ) { ?>
          <img src="<?php echo $tfs_logo_report; ?>" class="img-responsive center-block" alt="The Fly Shop Logo">
          <?php } else { ?>
          <img src="<?php echo $default_logo; ?>" class="img-responsive center-block" alt="The Fly Shop Logo">
          <?php } ?>
          <h2><?php echo $stream_report_title; ?></h2>
          <?php if ( get_post_meta($post->ID, 'streamreport-description', true) )
            echo '<p class="template-description">' . $stream_report_description . '</p>' ?>
        </div>
        <a href="#main" class="more scrolly">Reports are here!</a>
      </section>
    <?php } ?>
  
    
