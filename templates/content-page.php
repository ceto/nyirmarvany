<?php if (has_post_thumbnail() ) : ?>
<figure class="entry-figure">
  <?php the_post_thumbnail('large169');  ?>
</figure>
<?php endif;?>
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>