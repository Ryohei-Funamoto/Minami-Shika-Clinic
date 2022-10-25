<?php
/*
Template Name: スタッフ紹介
*/
get_header();
?>

<div class="l-staff">
  <div class="l-staff__main-visual l-main-visual l-main-visual--sub p-sub-main-visual staff-main-visual">
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
    <div class="p-sub-main-visual__content staff-main-visual__content">
      <h1 class="p-sub-main-visual__title staff-main-visual__title"><?php my_sub_main_visual_title(); ?></h1>
      <span class="p-sub-main-visual__subtitle about-main-visual__subtitle"><?php echo my_sub_main_visual_subtitle(); ?></span>
    </div><!-- /.p-sub-main-visual__content staff-main-visual__content -->
  </div><!-- /.l-main-visual p-sub-main-visual staff-main-visual -->

  <?php get_template_part('template_parts/breadcrumb'); ?>

  <section id="staffGreeting" class="l-staff__greeting staff-greeting">
    <div class="l-container staff-greeting__container">
      <div class="staff-greeting__title">
        <?php
        $args = array(
          'title_text' => '院長のあいさつ'
        );
        get_template_part('template_parts/section-title', null, $args);
        ?>
      </div><!-- /.staff-greeting__title -->
      <div class="staff-greeting__director-info staff-director-info">
        <div class="staff-director-info__body">
          <div class="staff-director-info__greeting staff-director-greeting js-anime-target">
            <h3 class="staff-director-greeting__lead">気軽に相談できる<br>街の歯医者さんでありたい。</h3>
            <p class="staff-director-greeting__description">当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。</p>
            <p class="staff-director-greeting__description">「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。</p>
            <p class="staff-director-greeting__description">みなみ歯科クリニック<br>院長　南 俊雄</p>
          </div><!-- /.staff-director-info__greeting staff-director-greeting -->
          <div class="staff-director-info__profile-lists js-anime-target">
            <div class="staff-director-info__profile-list staff-director-profile">
              <h4 class="staff-director-profile__title">経歴</h4>
              <dl class="staff-director-profile__items">
                <dt>2004年</dt>
                <dd>東京医科歯科大学歯学部 卒業</dd>
                <dt>2008年</dt>
                <dd>東京歯科大学歯学研究科大学院修了<br>博士(歯学)取得</dd>
                <dt>2012年</dt>
                <dd>みなみ歯科クリニック 開院</dd>
              </dl><!-- /.staff-director-profile__items -->
            </div><!-- /.staff-director-info__profile-list staff-director-profile -->
            <div class="staff-director-info__profile-list staff-director-profile">
              <h4 class="staff-director-profile__title">資格</h4>
              <ul class="staff-director-profile__items">
                <li>歯科医師臨床研修指導歯科医</li>
                <li>博士(歯学)</li>
                <li>衛生検査技師</li>
              </ul><!-- /.staff-director-profile__items -->
            </div><!-- /.staff-director-info__profile-list staff-director-profile -->
          </div><!-- /.staff-director-info__profile -->
        </div><!-- /.staff-director-info__body -->
        <figure class="staff-director-info__image js-anime-target">
          <img src="<?php echo get_template_directory_uri(); ?>/img/staff/staff_director_img.jpg" alt="みなみ歯科クリニック　院長　南 俊雄">
        </figure><!-- /.staff-director-info__image -->
      </div><!-- /.staff-greeting__director-info staff-director-info -->
    </div><!-- /.l-container staff-greeting__container -->
  </section><!-- /.l-staff__policy staff-greeting -->

  <div class="l-staff__slider staff-slider swiper js-staff-slider">
    <div class="staff-slider__slides swiper-wrapper">
      <div class="staff-slider__slide swiper-slide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/staff/staff_slider_img01.jpg" alt="当院のスタッフ１">
      </div><!-- /.staff-slider__slide -->
      <div class="staff-slider__slide swiper-slide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/staff/staff_slider_img02.jpg" alt="当院のスタッフ２">
      </div><!-- /.staff-slider__slide -->
      <div class="staff-slider__slide swiper-slide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/staff/staff_slider_img03.jpg" alt="当院のスタッフ３">
      </div><!-- /.staff-slider__slide -->
      <div class="staff-slider__slide swiper-slide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/staff/staff_slider_img04.jpg" alt="当院のスタッフ４">
      </div><!-- /.staff-slider__slide -->
      <div class="staff-slider__slide swiper-slide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/staff/staff_slider_img05.jpg" alt="当院のスタッフ５">
      </div><!-- /.staff-slider__slide -->
    </div><!-- /.staff-slider__slides -->
  </div><!-- /.l-staff__slider staff-slider -->

  <section id="staffIntro" class="l-staff__intro staff-intro">
    <div class="l-container staff-intro__container">
      <div class="staff-intro__title">
        <?php
        $args = array(
          'title_text' => 'スタッフ紹介'
        );
        get_template_part('template_parts/section-title', null, $args);
        ?>
      </div><!-- /.staff-intro__title -->

      <?php
      $dental_hygienists = my_get_all_posts('staffs', 'staff_job', 'dental-hygienist');
      if ($dental_hygienists->have_posts()) :
      ?>
        <section class="staff-intro__group staff-group">
          <h3 class="staff-group__title">歯科衛生士</h3>
          <ul class="staff-group__items">
            <?php
            while ($dental_hygienists->have_posts()) :
              $dental_hygienists->the_post();
              get_template_part('template_parts/staff-card');
            endwhile;
            ?>
          </ul><!-- /.staff-group__items -->
        </section><!-- /.staff-intro__group staff-group -->
      <?php
      endif;
      wp_reset_postdata();
      ?>

      <?php
      $dental_assistants = my_get_all_posts('staffs', 'staff_job', 'dental-assistant');
      if ($dental_assistants->have_posts()) :
      ?>
        <section class="staff-intro__group staff-group">
          <h3 class="staff-group__title">歯科助手</h3>
          <ul class="staff-group__items">
            <?php
            while ($dental_assistants->have_posts()) :
              $dental_assistants->the_post();
              get_template_part('template_parts/staff-card');
            endwhile;
            ?>
          </ul><!-- /.staff-group__items -->
        </section><!-- /.staff-intro__group staff-group -->
      <?php
      endif;
      wp_reset_postdata();
      ?>
    </div><!-- /.l-container staff-intro__container -->
  </section><!-- /.l-staff__intro staff-intro -->
</div><!-- /.l-staff -->

<?php get_footer(); ?>