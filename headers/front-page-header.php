<?php
  $default = '';
  $front_page_hero_image = get_theme_mod('front-page-hero-image');
  $front_page_hero_video = get_theme_mod('front-page-hero-video');
  $front_page_hero_logo = get_post_meta(get_the_ID(), 'front-page-logo', true );
  
if($front_page_hero_video !== $default) { ?>

<div id="page-wrapper-front-page-video">
  <div class="container-fluid">
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php echo $front_page_hero_video; ?>" type="video/mp4">
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
  <!-- </div> Closing div is in footer.php -->
  <section id="#banner-video">
  <div id="banner">
    
    <div class="inner">
    <div class="overlay"></div>
    
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <img src="<?php echo $front_page_hero_logo;	?>" class="img-responsive center-block" align="center" alt="The Fly Shop">
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
  
  <div id="page-wrapper-front-page">
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
    <!-- </div> Closing div is in footer.php -->
  
    <!-- Banner -->
    <!-- The .banner hack is used with the Theme Customizer feature. Because JQuery does not target pseudo elements, we can target a class in the DOM and change it to a <style> element -->
  
    <span class="bannerhack"></span>
    <section id="banner">
      <div class="inner">
        <img src="<?php echo $front_page_hero_logo;	?>" class="img-responsive center-block" align="center" alt="The Fly Shop">
        <h2 class="site-description"><?php bloginfo('description'); ?></h2>
        <h3><?php echo get_theme_mod('telephone_number'); ?></h3>
      </div>
      <a href="#main" class="more scrolly">Learn More</a>
    </section>

<?php }
