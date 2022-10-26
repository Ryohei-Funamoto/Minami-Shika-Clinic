<?php get_header(); ?>

<div class="l-single">
  <div class="l-single__main-visual l-main-visual l-main-visual--sub p-sub-main-visual single-main-visual">
    <?php
    if (have_rows('sub_mv_img')) :
      while (have_rows('sub_mv_img')) : the_row();
    ?>
        <picture>
          <source srcset="<?php
                          $pc_img = get_sub_field('pc_img');
                          echo $pc_img;
                          ?>" media="(min-width: 768px)">
          <img src="<?php
                    $sp_img = get_sub_field('sp_img');
                    echo $sp_img;
                    ?>" alt="<?php echo my_sub_main_visual_img_alt_attribute(); ?>">
        </picture>
    <?php
      endwhile;
    endif;
    ?>
    <div class="p-sub-main-visual__content single-main-visual__content">
      <h1 class="p-sub-main-visual__title single-main-visual__title"><?php echo my_sub_main_visual_title(); ?></h1>
      <span class="p-sub-main-visual__subtitle single-main-visual__subtitle"><?php echo my_sub_main_visual_subtitle(); ?></span>
    </div><!-- /.p-sub-main-visual__content single-main-visual__content -->
  </div><!-- /.l-main-visual p-sub-main-visual single-main-visual -->

  <?php get_template_part('template_parts/breadcrumb'); ?>

  <div class="l-single__content single-content">
    <div class="l-container single-content__container">
      <div class="single-content__inner">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <main class="single-content__main single-main">
              <div class="single-main__head">
                <h2 class="single-main__title"><?php the_title(); ?></h2>
                <div class="single-main__meta">
                  <time datetime="<?php the_time('c'); ?>" class="single-main__published"><?php the_time('Y.m.d'); ?></time>
                  <div class="single-main__category-wrapper">
                    <span class="single-main__category"><?php if (is_singular('post')) {
                                                          my_the_post_term(null, 'category', true);
                                                        } elseif (is_singular('blog')) {
                                                          my_the_post_term(null, 'blog_genre', true);
                                                        } ?></span>
                  </div><!-- /.single-main__category-wrapper -->
                </div><!-- /.single-main__meta -->
              </div><!-- /.single-main__head -->
              <div class="single-main__body">
                <?php the_content(); ?>
              </div><!-- /.single-main__body -->

              <?php get_template_part('template_parts/post-nav'); ?>
            </main><!-- /.single-content__main single-main -->
        <?php
          endwhile;
        endif;
        ?>

        <div class="single-content__side">
          <?php get_sidebar(); ?>
        </div><!-- /.single-content__side -->
      </div><!-- /.single-content__inner -->
    </div><!-- /.l-container single-content__container -->
  </div><!-- /.l-single__content single-content -->
</div><!-- /.l-single -->

<?php get_footer(); ?>