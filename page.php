<?php

  $current=get_the_ID(); 
  $fater=$post->post_parent;

?>

<?php if (get_the_ID() != icl_object_id(17, 'page', true)): ?>
  
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>

<?php endif ?>

<?php if ( ($fater == icl_object_id(17, 'page', true)) || ($current == icl_object_id(17, 'page', true) ) )  :?>
<hr>
<div class="clearfix">
<?php 
  $the_serv = new WP_Query(array(
    'post_type' => 'page',
    'post_parent' => icl_object_id(17, 'page', true), 
    'post__not_in' => array( icl_object_id($current, 'page', true) )
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