  <?php
  
  
  ?>
  <div id="page-wrapper-travel">
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
