<?php
// functions.phpで定義したURLのグローバル変数を呼び出す
global $u_home; // ホーム
global $u_about; // 当院について
global $u_medical; // 診療案内
global $u_staff; // スタッフ紹介
global $u_news; // お知らせ
global $u_blog; // スタッフブログ
global $u_contact; // お問い合わせ
global $u_reservation; // WEB予約
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="<?php if (is_front_page()) {
                echo 'og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#';
              } else {
                echo 'og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#';
              } ?>">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="l-loading p-loading js-loading">
    <div class="p-loading__content">
      <div class="p-loading__title">
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg" alt="みなみ歯科クリニック">
      </div><!-- /.p-loading__title -->
    </div><!-- /.p-loading__content -->
  </div><!-- /.l-loading p-loading -->
  <header class="l-header p-header js-header">
    <div class="l-container p-header__container">
      <div class="p-header__inner">
        <?php if (is_front_page()) : ?>
          <h1 class="p-header__logo c-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg" alt="みなみ歯科クリニック">
          </h1><!-- /.p-header__logo c-logo -->
        <?php else : ?>
          <p class="p-header__logo c-logo">
            <a href="<?php echo $u_home; ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg" alt="みなみ歯科クリニック">
            </a>
          </p><!-- /.p-header__logo c-logo -->
        <?php endif; ?>
        <nav class="p-header__nav p-gnav">
          <ul class="p-gnav__items">
            <li <?php if (is_front_page()) {
                  echo 'class="is-current"';
                } ?>>
              <a href="<?php echo $u_home; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path data-name="パス 43759" d="M20.42 10.18L12.71 2.3a1 1 0 00-1.42 0l-7.71 7.89A2 2 0 003 11.62V20a2 2 0 001.89 2h14.22A2 2 0 0021 20v-8.38a2.07 2.07 0 00-.58-1.44zM10 20v-6h4v6zm9 0h-3v-7a1 1 0 00-1-1H9a1 1 0 00-1 1v7H5v-8.42l7-7.15 7 7.19z" fill="#393939" />
                </svg>
                ホーム
              </a>
            </li>
            <li <?php if (is_page('about')) {
                  echo 'class="is-current"';
                } ?>>
              <a href="<?php echo $u_about; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M8.368 11.232V9.555a.5.5 0 01.5-.5h1.68a.5.5 0 01.5.5v1.677a.5.5 0 01-.5.5H8.871a.5.5 0 01-.503-.5zm5.871.5h1.677a.5.5 0 00.5-.5V9.555a.5.5 0 00-.5-.5h-1.678a.5.5 0 00-.5.5v1.677a.5.5 0 00.5.503zm-3.188 3.526V13.58a.5.5 0 00-.5-.5h-1.68a.5.5 0 00-.5.5v1.677a.5.5 0 00.5.5h1.677a.5.5 0 00.503-.499zm3.187.5h1.677a.5.5 0 00.5-.5V13.58a.5.5 0 00-.5-.5h-1.677a.5.5 0 00-.5.5v1.677a.5.5 0 00.5.504zm7.548 5.2v1.51H3v-1.51a.5.5 0 01.5-.5h.818V4.566a.95.95 0 011.006-.882h3.715V2.006A1.006 1.006 0 0110.045 1h4.7a1.006 1.006 0 011.006 1.006v1.678h3.711a.95.95 0 011.006.882v15.892h.818a.5.5 0 01.501.503zm-15.452-.542h4.717v-2.81a.5.5 0 01.5-.5h1.677a.5.5 0 01.5.5v2.81h4.718V5.7h-2.7v1a1.006 1.006 0 01-1.004 1.01h-4.7A1.006 1.006 0 019.039 6.7v-1h-2.7zm7.821-16.732h-1.09v-1.09a.252.252 0 00-.252-.252h-.839a.252.252 0 00-.252.252v1.09h-1.09a.252.252 0 00-.252.252v.839a.252.252 0 00.252.252h1.09v1.09a.252.252 0 00.252.252h.839a.252.252 0 00.252-.252V5.026h1.09a.252.252 0 00.252-.252v-.839a.252.252 0 00-.252-.251z" fill="#393939" />
                </svg>
                当院について
              </a>
            </li>
            <li <?php if (is_page('medical')) {
                  echo 'class="is-current"';
                } ?>>
              <a href="<?php echo $u_medical; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <g fill="#393939">
                    <path data-name="パス 43765" d="M15 16H9a1 1 0 000 2h6a1 1 0 000-2z" />
                    <path data-name="パス 43766" d="M9 14h3a1 1 0 000-2H9a1 1 0 000 2z" />
                    <path data-name="パス 43767" d="M19.74 8.33l-5.44-6a1 1 0 00-.74-.33h-7A2.53 2.53 0 004 4.5v15A2.53 2.53 0 006.56 22h10.88A2.53 2.53 0 0020 19.5V9a1 1 0 00-.26-.67zM14 5l2.74 3h-2a.79.79 0 01-.74-.85zm3.44 15H6.56a.53.53 0 01-.56-.5v-15a.53.53 0 01.56-.5H12v3.15A2.79 2.79 0 0014.71 10H18v9.5a.53.53 0 01-.56.5z" />
                  </g>
                </svg>
                診療案内
              </a>
            </li>
            <li <?php if (is_page('staff')) {
                  echo 'class="is-current"';
                } ?>>
              <a href="<?php echo $u_staff; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <g fill="#393939">
                    <path data-name="パス 43762" d="M9 11a4 4 0 10-4-4 4 4 0 004 4zm0-6a2 2 0 11-2 2 2 2 0 012-2z" />
                    <path data-name="パス 43763" d="M17 13a3 3 0 10-3-3 3 3 0 003 3zm0-4a1 1 0 11-1 1 1 1 0 011-1z" />
                    <path data-name="パス 43764" d="M17 14a5 5 0 00-3.06 1.05A7 7 0 002 20a1 1 0 102 0 5 5 0 0110 0 1 1 0 002 0 6.9 6.9 0 00-.86-3.35A3 3 0 0120 19a1 1 0 102 0 5 5 0 00-5-5z" />
                  </g>
                </svg>
                スタッフ紹介
              </a>
            </li>
            <li <?php if (is_post_type_archive('blog') || is_singular('blog') || is_tax('blog_genre')) {
                  echo 'class="is-current"';
                } ?>>
              <a href="<?php echo $u_blog; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path data-name="パス 43761" d="M19.4 7.34L16.66 4.6A2 2 0 0014 4.53l-9 9a2 2 0 00-.57 1.21L4 18.91A1 1 0 005 20h.09l4.17-.38a2 2 0 001.21-.57l9-9a1.92 1.92 0 00-.07-2.71zM9.08 17.62l-3 .28.27-3L12 9.32l2.7 2.7zM16 10.68L13.32 8l1.95-2L18 8.73z" fill="#393939" />
                </svg>
                スタッフブログ
              </a>
            </li>
            <li <?php if (is_page('contact')) {
                  echo 'class="is-current"';
                } ?>>
              <a href="<?php echo $u_contact; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path data-name="パス 43760" d="M19 4H5a3 3 0 00-3 3v10a3 3 0 003 3h14a3 3 0 003-3V7a3 3 0 00-3-3zm-.67 2L12 10.75 5.67 6zM19 18H5a1 1 0 01-1-1V7.25l7.4 5.55a1 1 0 001.2 0L20 7.25V17a1 1 0 01-1 1z" fill="#393939" />
                </svg>
                お問い合わせ
              </a>
            </li>
          </ul><!-- /.p-gnav__items -->
        </nav><!-- /.p-header__nav p-gnav -->
        <div class="p-header__info p-header-info">
          <p class="p-header-info__address">〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
          <p class="p-header-info__tel p-tel"><a href="tel:03-1234-5678"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_tel.svg" alt="tel">03-1234-5678</a></p>
        </div><!-- /.p-header__info p-header-info -->
        <button class="p-header__hamburger p-hamburger js-hamburger">
          <span class="p-hamburger__bars">
            <span class="p-hamburger__bar"></span>
            <span class="p-hamburger__bar"></span>
            <span class="p-hamburger__bar"></span>
          </span><!-- /.p-hamburger__bars -->
        </button><!-- /.p-header__hamburger p-hamburger -->
        <div class="p-header__drawer p-drawer js-drawer">
          <div class="p-drawer__head">
            <p class="p-drawer__logo c-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo_drawer.svg" alt="みなみ歯科クリニック">
            </p><!-- /.p-drawer__logo -->
          </div><!-- /.p-drawer__head -->
          <div class="p-drawer__scroll">
            <nav class="p-drawer__nav p-drawer-nav">
              <ul class="p-drawer-nav__items">
                <li><a href="<?php echo $u_home; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_home_white.svg" alt="ホーム">ホーム</a></li>
                <li><a href="<?php echo $u_about; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_about_white.svg" alt="当院について">当院について</a></li>
                <li><a href="<?php echo $u_medical; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_medical_white.svg" alt="診療案内">診療案内</a></li>
                <li><a href="<?php echo $u_staff; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_staff_white.svg" alt="スタッフ紹介">スタッフ紹介</a></li>
                <li><a href="<?php echo $u_blog; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_blog_white.svg" alt="スタッフブログ">スタッフブログ</a></li>
                <li><a href="<?php echo $u_contact; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_contact_white.svg" alt="お問い合わせ">お問い合わせ</a></li>
              </ul><!-- /.p-drawer-nav__items -->
            </nav><!-- /.p-drawer__nav p-drawer-nav -->
          </div><!-- /.p-drawer__scroll -->
        </div><!-- /.l-container p-drawer__container -->
      </div><!-- /.p-header__drawer p-drawer js-drawer -->
    </div><!-- /.p-header__inner -->
  </header><!-- /.l-header p-header -->
  <a href="<?php echo $u_reservation; ?>" class="l-button-pc-fixed c-button-pc-fixed">
    <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_reserve.svg" alt="web予約はこちら">
    WEB予約<br>はこちら
  </a><!-- /.l-button-pc-fixed c-button-pc-fixed -->