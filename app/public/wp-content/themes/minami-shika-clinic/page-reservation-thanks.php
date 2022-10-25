<?php
/*
Template Name: WEB予約完了
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
        <p class="contact-info__description">WEBよりご予約いただき誠にありがとうございます。<br>送信いただいた内容を確認して1営業日以内に返信いたします。<br><span class="contact-info__description--precaution">※1営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span></p>
      </div><!-- /.contact-content__info contact-info -->
    </div><!-- /.l-container contact-content__container -->
  </div><!-- /.l-contact__content contact-content -->
</div><!-- /.l-contact -->

<?php get_footer(); ?>