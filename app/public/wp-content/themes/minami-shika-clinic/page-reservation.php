<?php
/*
Template Name: WEB予約
*/
get_header();
?>

<div class="l-contact">
  <div class="l-contact__main-visual l-main-visual l-main-visual--sub p-sub-main-visual contact-main-visual">
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
    <div class="p-sub-main-visual__content contact-main-visual__content">
      <h1 class="p-sub-main-visual__title contact-main-visual__title"><?php my_sub_main_visual_title(); ?></h1>
      <span class="p-sub-main-visual__subtitle about-main-visual__subtitle"><?php echo my_sub_main_visual_subtitle(); ?></span>
    </div><!-- /.p-sub-main-visual__content contact-main-visual__content -->
  </div><!-- /.l-main-visual p-sub-main-visual contact-main-visual -->

  <?php get_template_part('template_parts/breadcrumb'); ?>

  <div class="l-contact__content contact-content">
    <div class="l-container contact-content__container">
      <section class="contact-content__info contact-info js-anime-target">
        <h2 class="contact-info__title">お電話でのご予約/ご相談</h2>
        <div class="contact-info__tel-wrapper">
          <p class="contact-info__tel p-tel">
            <a href="tel:03-1234-5678">
              <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_tel.svg" alt="tel">
              03-1234-5678
            </a>
          </p>
          <p class="contact-info__business-hours c-business-hours">(年中無休 AM9:00〜PM22:00)</p>
        </div><!-- /.contact-info__tel -->
        <p class="contact-info__description">お急ぎの方は電話での連絡がスムーズです。<br>混雑状況によっては当日受診をご利用いただけない場合がございます。<br>あらかじめご了承ください。</p>
      </section><!-- /.contact-content__info contact-info -->

      <section class="contact-content__info contact-info js-anime-target">
        <h2 class="contact-info__title">メールでのご予約/ご相談</h2>
        <p class="contact-info__description">【ご予約に関しての注意点】<br>メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</p>
      </section><!-- /.contact-content__info contact-info -->

      <section id="reserveForm" class="contact-content__form-area contact-form-area">
        <div class="contact-form-area__title">
          <?php
          $args = array(
            'title_text' => '予約フォーム'
          );
          get_template_part('template_parts/section-title', null, $args);
          ?>
        </div><!-- /.contact-form-area__title -->
        <div class="contact-form-area__form p-form js-anime-target">
          <?php echo do_shortcode('[contact-form-7 id="169" title="WEB予約フォーム"]'); ?>
        </div><!-- /.contact-form-area__form p-form -->
      </section><!-- /.contact-content__form-area contact-form-area -->
    </div><!-- /.l-container contact-content__container -->
  </div><!-- /.l-contact__content contact-content -->
</div><!-- /.l-contact -->

<?php get_footer(); ?>