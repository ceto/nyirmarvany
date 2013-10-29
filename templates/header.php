<header class="banner container" role="banner">
  <div class="row clearfix adag">
    <div class="col-lg-12">
      <?php do_action('icl_language_selector'); ?>
      <a class="brand" title="<?php bloginfo('name'); ?>" href="<?php echo home_url(); ?>/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>">
      </a>
      <p class="description"><?php bloginfo( 'description' ) ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">

      <nav class="nav-main" role="navigation">
      <a href="#" class="mtog">Menü <i class="glyphicon glyphicon-chevron-down"></i></a>
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>