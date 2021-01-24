<?php
  $stream_report_hero_image = get_post_meta(get_the_ID(), 'report-image', true );
  $stream_report_hero_video = get_post_meta(get_the_ID(), 'report-video', true );
  
  if ($stream_report_hero_video !== $default ) {
  ?>
  <div id="page-wrapper-stream-report-video" >
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
    
    <header>
      <div class="overlay"></div>
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
      </video>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white">
            <h1 class="display-3">Video Header</h1>
            <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
          </div>
        </div>
      </div>
    </header>
    
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
    
    <?php } ?>
  
    
