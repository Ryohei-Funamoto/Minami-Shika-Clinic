<aside class="p-sidebar">
  <div class="p-sidebar__intro p-sidebar-intro">
    <h2 class="p-sidebar-intro__head">クリニックの紹介</h2>
    <figure class="p-sidebar-intro__image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog_sidebar_intro_img.jpg" alt="クリニックの紹介">
    </figure><!-- /.p-sidebar-intro__image -->
    <h3 class="p-sidebar-intro__title">みなみ歯科クリニック</h3>
    <p class="p-sidebar-intro__description">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
    </p>
    <a href="/about/" class="p-sidebar-intro__link">
      当院について
    </a>
  </div><!-- /.p-sidebar__intro p-sidebar-intro -->
  <div class="p-sidebar__latest-posts p-sidebar-latest-posts">
    <h2 class="p-sidebar-latest-posts__head">新着記事</h2>
    <?php
    if (is_home() || is_category() || is_singular('post')) {
      $latest_posts = my_get_latest_posts('post', 5);
    } elseif (is_post_type_archive('blog') || is_tax('blog_genre') || is_singular('blog')) {
      $latest_posts = my_get_latest_posts('blog', 5);
    }
    if ($latest_posts->have_posts()) :
    ?>
      <div class="p-sidebar-latest-posts__items">
        <?php
        while ($latest_posts->have_posts()) :
          $latest_posts->the_post();
          if (is_home() || is_category() || is_singular('post')) {
            $args = array(
              'other_class' => 'p-post-card--sidebar p-sidebar-latest-posts__item',
              'taxonomy' => 'category',
            );
          } elseif (is_post_type_archive('blog') || is_tax('blog_genre') || is_singular('blog')) {
            $args = array(
              'other_class' => 'p-post-card--sidebar p-sidebar-latest-posts__item',
              'taxonomy' => 'blog_genre',
            );
          }
          get_template_part('template_parts/post-card', null, $args);
        endwhile;
        ?>
      </div><!-- /.p-sidebar-latest-posts__items -->
    <?php endif; ?>
  </div><!-- /.p-sidebar__latest-posts p-sidebar-latest-posts -->

  <div class="p-sidebar__category-list p-sidebar-category-list">
    <h2 class="p-sidebar-category-list__head">カテゴリー</h2>
    <ul class="p-sidebar-category-list__items">
      <?php
      $args = array(
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => false, // 投稿に紐づいていないタームも表示する
      );
      if (is_home() || is_category() || is_singular('post')) {
        $terms = get_terms('category', $args);
      } elseif (is_post_type_archive('blog') || is_tax('blog_genre') || is_singular('blog')) {
        $terms = get_terms('blog_genre', $args);
      }
      foreach ($terms as $term) :
      ?>
        <li class="p-sidebar-category-list__item"><a href="<?php echo esc_url(get_term_link($term->term_id)); ?>"><?php echo esc_html($term->name); ?></a></li>
      <?php endforeach; ?>
    </ul><!-- /.p-sidebar-category-list__items -->
  </div><!-- /.p-sidebar__category-list p-sidebar-category-list -->
</aside><!-- /.p-sidebar -->