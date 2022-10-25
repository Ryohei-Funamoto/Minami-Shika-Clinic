<?php
/*
Template Name: 当院について
*/
get_header();
?>

<div class="l-about">
  <div class="l-about__main-visual l-main-visual l-main-visual--sub p-sub-main-visual about-main-visual">
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
    <div class="p-sub-main-visual__content about-main-visual__content">
      <h1 class="p-sub-main-visual__title about-main-visual__title"><?php my_sub_main_visual_title(); ?></h1>
      <span class="p-sub-main-visual__subtitle about-main-visual__subtitle"><?php echo my_sub_main_visual_subtitle(); ?></span>
    </div><!-- /.p-sub-main-visual__content about-main-visual__content -->
  </div><!-- /.l-main-visual p-sub-main-visual about-main-visual -->

  <?php get_template_part('template_parts/breadcrumb'); ?>

  <section id="aboutPolicy" class="l-about__policy about-policy">
    <div class="l-container about-policy__container">
      <div class="about-policy__title">
        <?php
        $args = array(
          'title_text' => 'ポリシーと特徴'
        );
        get_template_part('template_parts/section-title', null, $args);
        ?>
      </div><!-- /.about-policy__title -->
      <ul class="about-policy__items">
        <li class="about-policy__item about-policy__item--reverse about-policy__item--deco p-off-center-media p-off-center-media--reverse p-off-center-media--deco">
          <div class="p-off-center-media__body js-anime-target">
            <div class="p-off-center-media__title-wrapper">
              <span class="p-off-center-media__subtitle">policy</span>
              <h3 class="p-off-center-media__title">コミュニケーションから始まる最適な医療提供</h3>
            </div><!-- /.p-off-center-media__title-wrapper -->
            <p class="p-off-center-media__description">当院ではまず患者様から詳しくお話を伺います。<br>難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。</p>
            <p class="p-off-center-media__description">「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。</p>
          </div><!-- /.p-off-center-media__body -->
          <figure class="p-off-center-media__image js-anime-target">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_policy_img.jpg" alt="コミュニケーションから始まる最適な医療提供">
          </figure><!-- /.p-off-center-media__image -->
        </li><!-- /.about-policy__item p-off-center-media -->
        <li class="about-policy__item p-off-center-media">
          <div class="p-off-center-media__body js-anime-target">
            <div class="p-off-center-media__title-wrapper">
              <span class="p-off-center-media__subtitle">feature</span>
              <h3 class="p-off-center-media__title">「医療技術の追求」と<br>「通いやすさ」</h3>
            </div><!-- /.p-off-center-media__title-wrapper -->
            <p class="p-off-center-media__description">歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。<br>また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
            <p class="p-off-center-media__description">朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。</p>
          </div><!-- /.p-off-center-media__body -->
          <figure class="p-off-center-media__image js-anime-target">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_feature_img.jpg" alt="「医療技術の追求」と「通いやすさ」">
          </figure><!-- /.p-off-center-media__image -->
        </li><!-- /.about-policy__item p-off-center-media -->
      </ul><!-- /.about-policy__items -->
    </div><!-- /.l-container about-policy__container -->
  </section><!-- /.l-about__policy about-policy -->
  <section id="aboutMood" class="l-about__mood about-mood">
    <div class="l-container about-mood__container">
      <div class="about-mood__title">
        <?php
        $args = array(
          'title_text' => '院内の様子'
        );
        get_template_part('template_parts/section-title', null, $args);
        ?>
      </div><!-- /.about-mood__title -->
      <div class="about-mood__images">
        <figure class="about-mood__image js-anime-target">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_mood_img01.jpg" alt="院内の様子１">
        </figure><!-- /.about-mood__image -->
        <figure class="about-mood__image js-anime-target">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_mood_img02.jpg" alt="院内の様子２">
        </figure><!-- /.about-mood__image -->
        <figure class="about-mood__image js-anime-target">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_mood_img03.jpg" alt="院内の様子３">
        </figure><!-- /.about-mood__image -->
        <figure class="about-mood__image js-anime-target">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_mood_img04.jpg" alt="院内の様子４">
        </figure><!-- /.about-mood__image -->
        <figure class="about-mood__image js-anime-target">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_mood_img05.jpg" alt="院内の様子５">
        </figure><!-- /.about-mood__image -->
        <figure class="about-mood__image js-anime-target">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_mood_img06.jpg" alt="院内の様子６">
        </figure><!-- /.about-mood__image -->
      </div><!-- /.about-mood__images -->
    </div><!-- /.l-container about-mood__container -->
  </section><!-- /.l-about__mood about-mood -->
</div><!-- /.l-about -->

<?php get_footer(); ?>