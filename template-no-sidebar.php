<?php
/*
Template Name: No Sidebar
*/
?>
<?php if (is_page(9)) : ?>

  <div id="carousel-home" class="carousel slide">
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
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-05.jpg" alt="">
        <div class="carousel-caption">
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, ducimus, rerum, possimus, tempora quisquam aliquam consequatur dicta ad accusantium asperiores voluptates voluptate dolore nemo perferendis maiores vel blanditiis nobis amet?</p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-06.jpg" alt="">
        <div class="carousel-caption">
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, ducimus, rerum, possimus, tempora quisquam aliquam consequatur dicta ad accusantium asperiores voluptates voluptate dolore nemo perferendis maiores vel blanditiis nobis amet?</p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-07.jpg" alt="">
        <div class="carousel-caption">
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, ducimus, rerum, possimus, tempora quisquam aliquam consequatur dicta ad accusantium asperiores voluptates voluptate dolore nemo perferendis maiores vel blanditiis nobis amet?</p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-09.jpg" alt="">
        <div class="carousel-caption">
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, ducimus, rerum, possimus, tempora quisquam aliquam consequatur dicta ad accusantium asperiores voluptates voluptate dolore nemo perferendis maiores vel blanditiis nobis amet?</p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-01.jpg" alt="">
        <div class="carousel-caption">
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, ducimus, rerum, possimus, tempora quisquam aliquam consequatur dicta ad accusantium asperiores voluptates voluptate dolore nemo perferendis maiores vel blanditiis nobis amet?</p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-02.jpg" alt="">
      </div>
      <div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-03.jpg" alt="">
      </div>
      <div class="item">
        <img src="<?php echo get_home_url().'/wp-content/uploads/2013/10/'; ?>slide-marvany-04.jpg" alt="">
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

<?php endif; ?>
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>