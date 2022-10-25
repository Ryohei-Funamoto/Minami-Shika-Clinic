<?php
/*
Template Name: 診療案内
*/
get_header();
?>

<div class="l-medical">
  <div class="l-medical__main-visual l-main-visual l-main-visual--sub p-sub-main-visual medical-main-visual">
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
                    ?>" alt="<?php my_sub_main_visual_img_alt_attribute(); ?>">
        </picture>
    <?php
      endwhile;
    endif;
    ?>
    <div class="p-sub-main-visual__content medical-main-visual__content">
      <h1 class="p-sub-main-visual__title medical-main-visual__title"><?php my_sub_main_visual_title(); ?></h1>
      <span class="p-sub-main-visual__subtitle about-main-visual__subtitle"><?php echo my_sub_main_visual_subtitle(); ?></span>
    </div><!-- /.p-sub-main-visual__content medical-main-visual__content -->
  </div><!-- /.l-main-visual p-sub-main-visual medical-main-visual -->

  <?php get_template_part('template_parts/breadcrumb'); ?>

  <section class="l-medical__anchor medical-anchor js-anime-target">
    <div class="l-container medical-anchor__container">
      <h2 class="medical-anchor__title medical-anchor__title--general">一般診療</h2>
      <?php
      $general_anchor = my_get_all_posts('plan', 'plan_type', 'general');
      if ($general_anchor->have_posts()) :
      ?>
        <ul class="medical-anchor__items">
          <?php while ($general_anchor->have_posts()) : $general_anchor->the_post(); ?>
            <li class="medical-anchor__item"><a <?php
                                                $target_id = get_field('medical_id');
                                                if ($target_id) {
                                                  echo 'href="#' . $target_id . '"';
                                                }
                                                ?>><?php the_title(); ?></a></li>
          <?php endwhile; ?>
        </ul><!-- /.medical-anchor__items -->
      <?php
      endif;
      wp_reset_postdata();
      ?>
    </div><!-- /.l-container medical-anchor__container -->
  </section><!-- /.l-medical__anchor medical-anchor -->

  <section class="l-medical__anchor medical-anchor js-anime-target">
    <div class="l-container medical-anchor__container">
      <h2 class="medical-anchor__title medical-anchor__title--special">特殊診療</h2>
      <?php
      $special_anchor = my_get_all_posts('plan', 'plan_type', 'special');
      if ($special_anchor->have_posts()) :
      ?>
        <ul class="medical-anchor__items">
          <?php while ($special_anchor->have_posts()) : $special_anchor->the_post(); ?>
            <li class="medical-anchor__item"><a <?php $target_id = get_field('medical_id');
                                                if ($target_id) {
                                                  echo 'href="#' . $target_id . '"';
                                                } ?>><?php the_title(); ?></a></li>
          <?php endwhile; ?>
        </ul><!-- /.medical-anchor__items -->
      <?php
      endif;
      wp_reset_postdata();
      ?>
    </div><!-- /.l-container medical-anchor__container -->
  </section><!-- /.l-medical__anchor medical-anchor -->

  <?php
  $general_items = my_get_all_posts('plan', 'plan_type', 'general');
  if ($general_items->have_posts()) :
  ?>
    <section id="medicalGeneral" class="l-medical__intro medical-intro">
      <div class="medical-intro__top-deco"></div>
      <div class="medical-intro__content">
        <div class="l-container medical-intro__container">
          <div class="medical-intro__title">
            <?php
            $args = array(
              'title_text' => '一般診療'
            );
            get_template_part('template_parts/section-title', null, $args);
            ?>
          </div><!-- /.medical-intro__title -->
          <ul class="medical-intro__items">
            <?php
            while ($general_items->have_posts()) :
              $general_items->the_post();
              $args = array(
                'label_text' => '保険対象',
                'label_modifier' => 'p-medical-intro-card__label--general',
              );
              get_template_part('template_parts/medical-intro-card', null, $args);
            endwhile;
            ?>
          </ul><!-- /.medical-intro__items -->
        </div><!-- /.medical-intro__container -->
      </div><!-- /.medical-intro__content -->
      <div class="medical-intro__bottom-deco"></div>
    </section><!-- /.l-medical__intro medical-intro -->
  <?php
  endif;
  wp_reset_postdata();
  ?>

  <?php
  $special_items = my_get_all_posts('plan', 'plan_type', 'special');
  if ($special_items->have_posts()) :
  ?>
    <section id="medicalSpecial" class="l-medical__intro medical-intro">
      <div class="medical-intro__top-deco"></div>
      <div class="medical-intro__content">
        <div class="l-container medical-intro__container">
          <div class="medical-intro__title">
            <?php
            $args = array(
              'title_text' => '特殊診療'
            );
            get_template_part('template_parts/section-title', null, $args);
            ?>
          </div><!-- /.medical-intro__title -->
          <ul class="medical-intro__items">
            <?php
            while ($special_items->have_posts()) :
              $special_items->the_post();
              $args = array(
                'label_text' => '実費',
                'label_modifier' => 'p-medical-intro-card__label--special',
              );
              get_template_part('template_parts/medical-intro-card', null, $args);
            endwhile;
            ?>
          </ul><!-- /.medical-intro__items -->
        </div><!-- /.medical-intro__container -->
      </div><!-- /.medical-intro__content -->
      <div class="medical-intro__bottom-deco"></div>
    </section><!-- /.l-medical__intro medical-intro -->
  <?php
  endif;
  wp_reset_postdata();
  ?>
</div><!-- /.l-medical -->

<?php get_footer(); ?>