<a href="<?php the_permalink(); ?>" class="p-post-card <?php echo $args['other_class']; ?>">
  <?php
  $post_time = get_the_time('U');
  $days = 3;
  $last = time() - ($days * 24 * 60 * 60);
  if ($post_time > $last) {
    echo '<span class="p-post-card__badge">new</span>';
  }
  ?>
  <?php if (has_post_thumbnail()) : ?>
    <figure class="p-post-card__image">
      <?php the_post_thumbnail(); ?>
    </figure><!-- /.p-post-card__image -->
  <?php endif; ?>
  <div class="p-post-card__body">
    <div class="p-post-card__category-wrapper">
      <span class="p-post-card__category"><?php my_the_post_term(null, $args['taxonomy'], false); ?></span>
    </div><!-- /.p-post-card__category-wrapper -->
    <h3 class="p-post-card__title"><?php the_title(); ?></h3>
    <time datetime="<?php the_time('c'); ?>" class="p-post-card__published"><?php the_time('Y.m.d'); ?></time>
  </div><!-- /.p-post-card__body -->
</a><!-- /.archive-main__item p-post-card -->