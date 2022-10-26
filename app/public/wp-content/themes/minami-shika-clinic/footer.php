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

<div class="l-footer-section p-footer-section">
  <div class="p-footer-section__top-deco"></div>
  <div class="p-footer-section__content">
    <div class="l-container p-footer-section__container">
      <div class="p-footer-section__info p-footer-info">
        <div class="p-footer-info__content">
          <p class="p-footer-info__logo c-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg" alt="みなみ歯科クリニック"></p>
          <p class="p-footer-info__address">〒166-0001&ensp;東京都杉並区阿佐谷北7-3-1</p>
          <p class="p-footer-info__tel p-tel"><a href="tel:03-1234-5678"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_tel.svg" alt="tel">03-1234-5678</a></p>
          <p class="p-footer-info__business-hours c-business-hours">(年中無休 AM9:00〜PM22:00)</p>
          <div class="p-footer-info__buttons">
            <a href="<?php echo $u_reservation; ?>" class="p-footer-info__button c-button-footer c-button-footer--reserve">
              <svg xmlns="http://www.w3.org/2000/svg" width="48.858" height="28.613" viewBox="0 0 48.858 28.613">
                <g id="icon-pc" transform="translate(0 -190.769)">
                  <path id="mobile-alt" d="M11.716,0H2.068A2.068,2.068,0,0,0,0,2.068V19.986a2.068,2.068,0,0,0,2.068,2.068h9.649a2.068,2.068,0,0,0,2.068-2.068V2.068A2.068,2.068,0,0,0,11.716,0ZM6.892,20.675A1.378,1.378,0,1,1,8.27,19.3,1.377,1.377,0,0,1,6.892,20.675Zm4.824-4.652a.518.518,0,0,1-.517.517H2.584a.518.518,0,0,1-.517-.517V2.584a.518.518,0,0,1,.517-.517H11.2a.518.518,0,0,1,.517.517Z" transform="translate(35.074 197.328)" fill="#fff" />
                  <path id="desktop" d="M29.507,0H2.682A2.683,2.683,0,0,0,0,2.682V20.565a2.683,2.683,0,0,0,2.682,2.682h10.73l-.894,2.682H8.494a1.341,1.341,0,1,0,0,2.682h15.2a1.341,1.341,0,1,0,0-2.682H19.671l-.894-2.682h10.73a2.683,2.683,0,0,0,2.682-2.682V2.682A2.683,2.683,0,0,0,29.507,0Zm-.894,19.671H3.577V3.577H28.613Z" transform="translate(0 190.769)" fill="#fff" />
                </g>
              </svg>
              WEB予約
            </a><!-- /.p-footer-info__button c-button-footer -->
            <a href="<?php echo $u_contact; ?>" class="p-footer-info__button c-button-footer c-button-footer--contact">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g id="icon-mail" transform="translate(-49)">
                  <rect id="長方形_23052" data-name="長方形 23052" width="24" height="24" transform="translate(49)" fill="none" />
                  <g id="icon-contact" transform="translate(51 4)">
                    <path id="パス_43721" data-name="パス 43721" d="M5,6H21a2.006,2.006,0,0,1,2,2V20a2.006,2.006,0,0,1-2,2H5a2.006,2.006,0,0,1-2-2V8A2.006,2.006,0,0,1,5,6Z" transform="translate(-3 -6)" fill="none" stroke="#1391e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    <path id="パス_43722" data-name="パス 43722" d="M23,9,13,16.476,3,9" transform="translate(-3 -6.864)" fill="none" stroke="#1391e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                  </g>
                </g>
              </svg>
              お問い合わせ
            </a>
          </div><!-- /.p-footer-info__buttons -->
          <div class="p-footer-info__medical-time-sheet">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/common/medical-time-sheet_pc.png" media="(min-width: 768px)">
              <img src="<?php echo get_template_directory_uri(); ?>/img/common/medical-time-sheet_sp.png" alt="診療時間">
            </picture>
          </div><!-- /.p-footer-info__p-footer-info__medical-time-sheet -->
        </div><!-- /.p-footer-info__content -->
        <div class="p-footer-info__map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3239.750970632001!2d139.63630181553566!3d35.707745336124155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5p2x5Lqs6YO95p2J5Lim5Yy66Zi_5L2Q6LC35YyXNy0zLTE!5e0!3m2!1sja!2sjp!4v1665256363964!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- /.p-footer-info__map -->
      </div><!-- /.p-footer-section__info p-footer-info -->
      <nav class="p-footer-section__nav p-footer-nav">
        <ul class="p-footer-nav__items">
          <li>
            <a href="<?php echo $u_home; ?>">TOP</a>
          </li>
          <li>
            <a href="<?php echo $u_about; ?>">当院について</a>
            <div class="p-footer-nav__sub p-footer-sub-nav">
              <ul class="p-footer-sub-nav__items">
                <li><a href="<?php if (is_page('about')) {
                                echo '#aboutPolicy';
                              } else {
                                echo $u_about . '#aboutPolicy';
                              } ?>">ポリシーと特徴</a></li>
                <li><a href="<?php if (is_page('about')) {
                                echo '#aboutMood';
                              } else {
                                echo $u_about . '#aboutMood';
                              } ?>">当院の様子</a></li>
              </ul><!-- /.p-footer-sub-nav__items -->
            </div><!-- /.p-footer-nav__sub p-footer-sub-nav -->
          </li>
          <li>
            <a href="<?php echo $u_staff; ?>">スタッフ紹介</a>
            <div class="p-footer-nav__sub p-footer-sub-nav">
              <ul class="p-footer-sub-nav__items">
                <li><a href="<?php if (is_page('staff')) {
                                echo '#staffGreeting';
                              } else {
                                echo $u_staff . '#staffGreeting';
                              } ?>">院長のあいさつ</a></li>
                <li><a href="<?php if (is_page('staff')) {
                                echo '#staffIntro';
                              } else {
                                echo $u_staff . '#staffIntro';
                              } ?>">スタッフ</a></li>
                <li><a href="<?php echo $u_blog; ?>">スタッフブログ</a></li>
              </ul><!-- /.p-footer-sub-nav__items -->
            </div><!-- /.p-footer-nav__sub p-footer-sub-nav -->
          </li>
          <li>
            <a href="<?php echo $u_medical; ?>">診療案内</a>
            <div class="p-footer-nav__sub p-footer-sub-nav">
              <ul class="p-footer-sub-nav__items">
                <li><a href="<?php if (is_page('medical')) {
                                echo '#general';
                              } else {
                                echo $u_medical . '#general';
                              } ?>">一般歯科</a></li>
                <li><a href="<?php if (is_page('medical')) {
                                echo '#child';
                              } else {
                                echo $u_medical . '#child';
                              } ?>">小児歯科</a></li>
                <li><a href="<?php if (is_page('medical')) {
                                echo '#prevention';
                              } else {
                                echo $u_medical . '#prevention';
                              } ?>">予防歯科</a></li>
                <li><a href="<?php if (is_page('medical')) {
                                echo '#denture';
                              } else {
                                echo $u_medical . '#denture';
                              } ?>">入れ歯</a></li>
              </ul><!-- /.p-footer-sub-nav__items -->
              <ul class="p-footer-sub-nav__items">
                <li><a href="<?php if (is_page('medical')) {
                                echo '#orthodontia';
                              } else {
                                echo $u_medical . '#orthodontia';
                              } ?>">矯正歯科</a></li>
                <li><a href="<?php if (is_page('medical')) {
                                echo '#whitening';
                              } else {
                                echo $u_medical . '#whitening';
                              } ?>">ホワイトニング</a></li>
                <li><a href="<?php if (is_page('medical')) {
                                echo '#oral';
                              } else {
                                echo $u_medical . '#oral';
                              } ?>">口腔外科</a></li>
                <li><a href="<?php if (is_page('medical')) {
                                echo '#laser';
                              } else {
                                echo $u_medical . '#laser';
                              } ?>">レーザー治療</a></li>
              </ul><!-- /.p-footer-sub-nav__items -->
            </div><!-- /.p-footer-nav__sub p-footer-sub-nav -->
          </li>
          <li>
            <a href="<?php echo $u_contact; ?>">お問い合わせ</a>
            <div class="p-footer-nav__sub p-footer-sub-nav">
              <ul class="p-footer-sub-nav__items">
                <li><a href="<?php if (is_page('contact')) {
                                echo '#contactForm';
                              } else {
                                echo $u_contact . '#contactForm';
                              } ?>">お問い合わせフォーム</a></li>
                <li><a href="<?php if (is_page('reservation')) {
                                echo '#reserveForm';
                              } else {
                                echo $u_reservation . '#reserveForm';
                              } ?>">WEB予約</a></li>
              </ul><!-- /.p-footer-sub-nav__items -->
            </div><!-- /.p-footer-nav__sub p-footer-sub-nav -->
          </li>
        </ul><!-- /.p-footer-nav__items -->
      </nav><!-- /.p-footer-section__nav p-footer-nav -->
    </div><!-- /.l-container p-footer-section__container -->
  </div><!-- /.p-footer-section__content -->
</div><!-- /.l-footer-section p-footer-section -->
<footer class="l-footer p-footer">
  <div class="l-container p-footer__container">
    <p class="p-footer__copyright">&copy;2020-<?php echo date('Y'); ?>みなみ歯科クリニック</p>
  </div><!-- /.l-container p-footer__container -->
</footer><!-- /.l-footer p-footer -->
<button class="l-button-to-top c-button-to-top js-button-to-top"></button>
<div class="l-sp-fixed-footer p-sp-fixed-footer u-hidden-pc">
  <div class="l-container p-sp-fixed-footer__container">
    <div class="p-sp-fixed-footer__inner">
      <div class="p-sp-fixed-footer__left">
        <p class="p-sp-fixed-footer__tel p-tel p-tel--small"><a href="tel:03-1234-5678"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_tel.svg" alt="tel">03-1234-5678</a></p>
        <p class="p-sp-fixed-footer__business-hours c-business-hours">(年中無休 AM9:00〜PM22:00)</p>
      </div><!-- /.p-sp-fixed-footer__left -->
      <div class="p-sp-fixed-footer__right">
        <a href="<?php echo $u_reservation; ?>" class="p-sp-fixed-footer__button c-button-sp-fixed-footer">
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_reserve.svg" alt="web予約はこちら">
          <div class="c-button-sp-fixed-footer__text"><span>WEB予約</span>はこちら</div>
        </a><!-- /.p-sp-fixed-footer__button c-button-sp-fixed-footer -->
      </div><!-- /.p-sp-fixed-footer__right -->
    </div><!-- /.p-sp-fixed-footer__inner -->
  </div><!-- /.l-container p-sp-fixed-footer__container -->
</div><!-- /.l-sp-fixed-footer p-sp-fixed-footer -->
<?php wp_footer(); ?>
</body>

</html>