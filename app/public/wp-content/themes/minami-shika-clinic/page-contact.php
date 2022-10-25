<?php
/*
Template Name: お問い合わせ
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
      <div class="contact-content__info contact-info js-anime-target">
        <p class="contact-info__description">お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br>以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br>また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br><span class="contact-info__description--precaution">※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span></p>
      </div><!-- /.contact-content__info contact-info -->

      <section id="contactForm" class="contact-content__form-area contact-form-area">
        <div class="contact-form-area__title">
          <?php
          $args = array(
            'title_text' => 'お問い合わせ<br class="u-hidden-pc">フォーム'
          );
          get_template_part('template_parts/section-title', null, $args);
          ?>
        </div><!-- /.contact-form-area__title -->

        <div class="contact-form-area__form p-form js-anime-target">
          <?php echo do_shortcode('[contact-form-7 id="168" title="お問い合わせフォーム"]'); ?>
        </div><!-- /.contact-form-area__form p-form -->
      </section><!-- /.contact-content__form-area contact-form-area -->
    </div><!-- /.l-container contact-content__container -->
  </div><!-- /.l-contact__content contact-content -->
</div><!-- /.l-contact -->

<?php get_footer(); ?>