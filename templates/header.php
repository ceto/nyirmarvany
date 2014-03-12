<header class="banner container" role="banner">
  <div class="row clearfix adag">
    <div class="col-lg-12">
      <?php //do_action('icl_language_selector'); ?>
      <?php 
        $languages = icl_get_languages('skip_missing=0&orderby=custom');
        $lcode=array('hu', 'en', 'ro', 'de', 'uk');
          if(!empty($languages)){
              echo '<div id="lang_sel_list"><ul>';
              foreach($lcode as $lc){
                  $l=$languages[$lc];
                  echo '<li>';
                  if($l['country_flag_url']){
                      echo '<a href="'.$l['url'].'" style="text-align:center;">';
                      echo '<img src="'.$l['country_flag_url'].'" alt="'.$l['language_code'].'" />';
                      echo icl_disp_language($l['native_name'], $l['translated_name']);
                      echo '</a>';
                  }
                  echo '</li>';
              }
              echo '</ul></div>';
          }
       ?>
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