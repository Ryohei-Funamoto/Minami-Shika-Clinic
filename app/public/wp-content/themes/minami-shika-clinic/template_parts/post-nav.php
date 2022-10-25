<div class="l-post-nav p-post-nav">
  <ul class="p-post-nav__items">
    <?php if (get_previous_post()) : ?>
      <li class="p-post-nav__item p-post-nav__item--prev"><?php previous_post_link('%link', '前の記事') ?></li>
    <?php endif; ?>
    <li class="p-post-nav__item p-post-nav__item--archive"><a href="<?php if (is_singular('post')) {
                                                                      echo esc_url(get_post_type_archive_link('post'));
                                                                    } elseif (is_singular('blog')) {
                                                                      echo esc_url(get_post_type_archive_link('blog'));
                                                                    } ?>">記事一覧</a></li>
    <?php if (get_next_post()) : ?>
      <li class="p-post-nav__item p-post-nav__item--next"><?php next_post_link('%link', '次の記事'); ?></li>
    <?php endif; ?>
  </ul><!-- /.p-post-nav__items -->
</div><!-- /.l-post-nav p-post-nav -->