<?php get_header(); ?>

<div class="l-archive">
  <div class="l-archive__main-visual l-main-visual l-main-visual--sub p-sub-main-visual archive-main-visual">
    <?php
    $post_obj = get_page_by_path('news');
    if (have_rows('sub_mv_img', $post_obj->ID)) :
      while (have_rows('sub_mv_img', $post_obj->ID)) : the_row();
    ?>
        <picture>
          <source srcset="<?php
                          $pc_img = get_sub_field('pc_img');
                          echo $pc_img;
                          ?>" media="(min-width: 768px)">
          <img src="<?php
                    $sp_img = get_sub_field('sp_img');
                    echo $sp_img;
                    ?>" alt="<?php my_sub_main_visual_img_alt_attribute(); ?>">
        </picture>
    <?php
      endwhile;
    endif;
    ?>
    <div class="p-sub-main-visual__content archive-main-visual__content">
      <h1 class="p-sub-main-visual__title archive-main-visual__title"><?php my_sub_main_visual_title(); ?></h1>
      <span class="p-sub-main-visual__subtitle archive-main-visual__subtitle"><?php echo my_sub_main_visual_subtitle(); ?></span>
    </div><!-- /.p-sub-main-visual__content archive-main-visual__content -->
  </div><!-- /.l-main-visual p-sub-main-visual archive-main-visual -->

  <?php get_template_part('template_parts/breadcrumb'); ?>

  <div class="l-archive__content archive-content">
    <div class="l-container archive-content__container">
      <div class="archive-content__inner">
        <main class="archive-content__main archive-main">
          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          if (have_posts()) :
          ?>
            <div class="archive-main__items">
              <?php
              while (have_posts()) :
                the_post();
                $args = array(
                  'other_class' => 'archive-main__item js-anime-target',
                  'taxonomy' => 'category',
                );
                get_template_part('template_parts/post-card', null, $args);
              endwhile;
              ?>
            </div><!-- /.archive-main__items -->
          <?php endif; ?>

          <?php get_template_part('template_parts/pagination'); ?>
        </main><!-- /.archive-content__main archive-main -->

        <div class="archive-content__side">
          <?php get_sidebar(); ?>
        </div><!-- /.archive-content__side -->
      </div><!-- /.archive-content__inner -->
    </div><!-- /.l-container archive-content__container -->
  </div><!-- /.l-archive__content archive-content -->
</div><!-- /.l-archive -->

<?php get_footer(); ?>