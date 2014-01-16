<?php if (get_the_ID() != 17): ?>
  
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>

<?php endif ?>

<?php if ( ($post->post_parent == '17') || (get_the_ID() == 17) )  :?>
<hr>
<div class="clearfix">
<?php 
  $the_serv = new WP_Query(array(
    'post_type' => 'page',
    'post_parent' => '17', 
    'post__not_in' => array(get_the_ID())
  ));
?>
<?php while ($the_serv->have_posts()) : $the_serv->the_post(); ?>
  <div class="felez">
    <h3><a title="<?php the_title();  ?>" href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h3>
    <?php the_excerpt(); ?>
    <p><a title="<?php the_title();  ?>" href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('medium169'); ?>
    </a></p>
  </div>
<?php endwhile; ?>
</div>
<?php endif; ?>