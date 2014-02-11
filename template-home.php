<?php
/*
Template Name: Home Page Template
*/
?>
<div class="homeslide">
  <div id="carousel-home" data-interval="6000" class="carousel slide">
    <ol class="carousel-indicators">
      <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-home" data-slide-to="1" class=""></li>
      <li data-target="#carousel-home" data-slide-to="2" class=""></li>
      <li data-target="#carousel-home" data-slide-to="3" class=""></li>
      <li data-target="#carousel-home" data-slide-to="4"></li>
      <li data-target="#carousel-home" data-slide-to="5"></li>
      <li data-target="#carousel-home" data-slide-to="6"></li>
      <li data-target="#carousel-home" data-slide-to="7"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="http://nyirmarvany.hu/wp-content/uploads/2013/10/slide-marvany-01.jpg" alt="">
      </div>
      <div class="item">
        <img src="http://nyirmarvany.hu/wp-content/uploads/2013/10/slide-marvany-02.jpg" alt="">
      </div>
      <div class="item">
        <img src="http://nyirmarvany.hu/wp-content/uploads/2013/10/slide-marvany-03.jpg" alt="">
      </div>
      <div class="item">
        <img src="http://nyirmarvany.hu/wp-content/uploads/2013/10/slide-marvany-04.jpg" alt="">
      </div>
      <div class="item">
        <img src="http://nyirmarvany.hu/wp-content/uploads/2013/10/slide-marvany-05.jpg" alt="">
      </div>
      <div class="item">
        <img src="http://nyirmarvany.hu/wp-content/uploads/2013/10/slide-marvany-06.jpg" alt="">
      </div>
      <div class="item">
        <img src="http://nyirmarvany.hu/wp-content/uploads/2013/10/slide-marvany-07.jpg" alt="">
      </div>
      <div class="item">
        <img src="http://nyirmarvany.hu/wp-content/uploads/2013/10/slide-marvany-09.jpg" alt="">
      </div>
      
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-home" data-slide="prev">
      <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#carousel-home" data-slide="next">
      <span class="icon-next"></span>
    </a>
  </div>

  <div class="szalag clearfix">
    <div class="csacsiwrap clearfix">
      <div class="bar leftbar">
        <?php _e('<strong>30 éve</strong> élen a kőszakmában','root'); ?>
      </div>
      <div class="bar rightbar">
        <?php _e('<strong>Nagykereskedelmi</strong> értékesítés','root'); ?>
      </div>
    </div>    
  </div>
</div>
<div class="homebar clearfix"> 
  <?php dynamic_sidebar('sidebar-home'); ?>
</div>
<?php /* while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; */ ?>