<?php get_header(); ?>

<div class="l-home">
  <div class="l-home__main-visual-wrapper home-main-visual-wrapper">
    <div class="swiper l-main-visual l-main-visual--home home-main-visual js-home-mv-slider">
      <div class="swiper-wrapper home-main-visual__slides">
        <?php
        if (have_rows('home_mv_img01')) :
          while (have_rows('home_mv_img01')) : the_row();
        ?>
            <div class="swiper-slide home-main-visual__slide">
              <picture>
                <source srcset="<?php
                                $pc_img = get_sub_field('pc_img');
                                echo $pc_img;
                                ?>" media="(min-width: 768px)">
                <img src="<?php
                          $sp_img = get_sub_field('sp_img');
                          echo $sp_img;
                          ?>" alt="<?php bloginfo('name') ?>">
              </picture>
            </div>
          <?php
          endwhile;
        endif;
        if (have_rows('home_mv_img02')) :
          while (have_rows('home_mv_img02')) : the_row();
          ?>
            <div class="swiper-slide home-main-visual__slide">
              <picture>
                <source srcset="<?php
                                $pc_img = get_sub_field('pc_img');
                                echo $pc_img;
                                ?>" media="(min-width: 768px)">
                <img src="<?php
                          $sp_img = get_sub_field('sp_img');
                          echo $sp_img;
                          ?>" alt="<?php bloginfo('name') ?>">
              </picture>
            </div>
          <?php
          endwhile;
        endif;
        if (have_rows('home_mv_img03')) :
          while (have_rows('home_mv_img03')) : the_row();
          ?>
            <div class="swiper-slide home-main-visual__slide">
              <picture>
                <source srcset="<?php
                                $pc_img = get_sub_field('pc_img');
                                echo $pc_img;
                                ?>" media="(min-width: 768px)">
                <img src="<?php
                          $sp_img = get_sub_field('sp_img');
                          echo $sp_img;
                          ?>" alt="<?php bloginfo('name') ?>">
              </picture>
            </div>
        <?php
          endwhile;
        endif;
        ?>
      </div>
      <div class="home-main-visual__content">
        <p class="home-main-visual__lead"><span>街の皆さまの笑顔を守る</span><br><span>アットホームな歯医者さん</span></p>
      </div><!-- /.home-main-visual__content -->
    </div><!-- /. l-main-visual l-main-visual--home home-main-visual js-home-mv-slider -->
    <!-- If we need pagination -->
    <div class="swiper-pagination home-main-visual-wrapper__pagination home-main-visual-pagination js-home-main-visual-pagination">
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev home-main-visual-wrapper__button home-main-visual-wrapper__button--prev home-main-visual-button home-main-visual-button--prev js-home-main-visual-button-prev">
    </div>
    <div class="swiper-button-next home-main-visual-wrapper__button home-main-visual-wrapper__button--next home-main-visual-button home-main-visual-button--next js-home-main-visual-button-next">
    </div>
  </div><!-- /.l-home__main-visual-wrapper -->
  <section class="l-home__news home-news">
    <div class="l-container home-news__container">
      <div class="home-news__inner">
        <div class="home-news__medical-time-sheet">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/common/medical-time-sheet_pc.png" media="(min-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/medical-time-sheet_sp.png" alt="診療時間">
          </picture>
        </div><!-- /.home-news__medical-time-sheet -->
        <div class="home-news__content home-news-content">
          <div class="home-news-content__head">
            <h2 class="home-news-content__title">お知らせ<span>news</span></h2>
            <a href="<?php echo $u_news; ?>" class="home-news-content__archive-link">過去のお知らせはこちら</a>
          </div><!-- /.home-news-content__head -->
          <?php
          $latest_posts = my_get_latest_posts('post', 1);
          if ($latest_posts->have_posts()) :
          ?>
            <ol class="home-news-content__items">
              <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                <li class="home-news-content__item">
                  <?php get_template_part('template_parts/post-row'); ?>
                </li><!-- /.home-news-content__item -->
              <?php endwhile; ?>
            </ol><!-- /.home-news-content__items -->
          <?php else : ?>
            <p>記事がありません。</p>
          <?php
          endif;
          wp_reset_postdata();
          ?>
        </div><!-- /.home-news__content -->
      </div><!-- /.home-news__inner -->
    </div><!-- /.l-container home-news__container -->
  </section><!-- /.l-home__news home-news -->
  <section class="l-home__concept home-concept">
    <div class="l-container home-concept__container">
      <div class="home-concept__media p-off-center-media p-off-center-media--reverse p-off-center-media--deco">
        <div class="p-off-center-media__body js-anime-target">
          <div class="p-off-center-media__title-wrapper">
            <span class="p-off-center-media__subtitle">concept</span>
            <h2 class="p-off-center-media__title">健康的で素敵な笑顔あふれる<br>街づくりを目指して</h2>
          </div><!-- /.p-off-center-media__title-wrapper -->
          <p class="p-off-center-media__description">私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
          <div class="p-off-center-media__button">
            <a href="<?php echo $u_about; ?>" class="c-button">当院について</a>
          </div><!-- /.p-off-center-media__button -->
        </div><!-- /.p-off-center-media__body -->
        <figure class="p-off-center-media__image js-anime-target">
          <img src="<?php echo get_template_directory_uri(); ?>/img/home/home_concept_img.jpg" alt="健康的で素敵な笑顔あふれる街づくりを目指して">
        </figure><!-- /.p-off-center-media__image -->
      </div><!-- /.about-policy__item p-off-center-media -->
    </div><!-- /.l-container home-concept__container -->
  </section><!-- /.l-home__concept home-concept -->
  <section class="l-home__recommend home-recommend">
    <div class="l-container home-recommend__container">
      <div class="home-recommend__title">
        <?php
        $args = array(
          'title_text' => '当院の3つのおすすめ'
        );
        get_template_part('template_parts/section-title', null, $args);
        ?>
      </div><!-- /.home-recommend__title -->
      <ol class="home-recommend__items">
        <li class="home-recommend__item p-recommend-card js-anime-target">
          <h3 class="p-recommend-card__title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home/home_recommend_title01.svg" alt="おすすめ01">
          </h3><!-- /.p-recommend-card__title -->
          <div class="p-recommend-card__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home/home_recommend_logo01.svg" alt="痛くない歯科治療の追求">
          </div><!-- /.p-recommend-card__image -->
          <div class="p-recommend-card__body">
            <p class="p-recommend-card__description">歯の治療において、小さな違和感は大きなストレスにつながります。<br>私たちは常に快適な歯科医療技術の研究を行っております。</p>
          </div><!-- /.p-recommend-card__body -->
        </li><!-- /.home-recommend__item p-recommend-card -->
        <li class="home-recommend__item p-recommend-card js-anime-target">
          <h3 class="p-recommend-card__title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home/home_recommend_title02.svg" alt="おすすめ02">
          </h3><!-- /.p-recommend-card__title -->
          <div class="p-recommend-card__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home/home_recommend_logo02.svg" alt="駅から徒歩3分">
          </div><!-- /.p-recommend-card__image -->
          <div class="p-recommend-card__body">
            <p class="p-recommend-card__description">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
          </div><!-- /.p-recommend-card__body -->
        </li><!-- /.home-recommend__item p-recommend-card -->
        <li class="home-recommend__item p-recommend-card js-anime-target">
          <h3 class="p-recommend-card__title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home/home_recommend_title03.svg" alt="おすすめ03">
          </h3><!-- /.p-recommend-card__title -->
          <div class="p-recommend-card__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home/home_recommend_logo03.svg" alt="夜20:30まで営業">
          </div><!-- /.p-recommend-card__image -->
          <div class="p-recommend-card__body">
            <p class="p-recommend-card__description">朝から夜までお仕事をされている方のために、診療時間を見直しました。<br><span class="p-recommend-card__description--precaution">※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span></p>
          </div><!-- /.p-recommend-card__body -->
        </li><!-- /.home-recommend__item p-recommend-card -->
      </ol><!-- /.home-recommend__items -->
    </div><!-- /.l-container home-recommend__container -->
  </section><!-- /.l-home__recommend home-recommend -->
  <section class="l-home__medical home-medical">
    <div class="home-medical__top-deco"></div>
    <div class="home-medical__content">
      <div class="l-container home-medical__container">
        <div class="home-medical__title">
          <?php
          $args = array(
            'title_text' => '診療案内'
          );
          get_template_part('template_parts/section-title', null, $args);
          ?>
        </div><!-- /.home-medical__title -->
        <div class="home-medical__columns">
          <div class="home-medical__column js-anime-target">
            <a href="<?php echo $u_medical; ?>#medicalGeneral" class="p-medical-link">
              <div class="p-medical-link__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/home/home_medical_img01.jpg" alt="一般診療">
              </div><!-- /.p-medical-link__image -->
              <div class="p-medical-link__content">
                <h3 class="p-medical-link__title">一般診療</h3>
                <p class="p-medical-link__description">虫歯・入れ歯・小児歯科</p>
              </div><!-- /.p-medical-link__content -->
            </a><!-- /.p-medical-link -->
          </div><!-- /.home-medical__column -->
          <div class="home-medical__column js-anime-target">
            <a href="<?php echo $u_medical; ?>#medicalSpecial" class="p-medical-link">
              <div class="p-medical-link__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/home/home_medical_img02.jpg" alt="特殊診療">
              </div><!-- /.p-medical-link__image -->
              <div class="p-medical-link__content">
                <h3 class="p-medical-link__title">特殊診療</h3>
                <p class="p-medical-link__description">インプラント・ホワイトニング<br>予防歯科・口腔外科・審美歯科</p>
              </div><!-- /.p-medical-link__content -->
            </a><!-- /.p-medical-link -->
          </div><!-- /.home-medical__column -->
          <div class="home-medical__column home-medical__column--full js-anime-target">
            <p class="home-medical__description">当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br><span class="home-medical__description--precaution">※特殊性の高い矯正治療などは保険の適応外となります。これらの治療を行う際は事前に詳細と費用のご説明いたします。</span></p>
          </div><!-- /.home-medical__column home-medical__column--full -->
        </div><!-- /.home-medical__column -->
      </div><!-- /.l-container home-medical__container -->
    </div><!-- /.home-medical__content -->
    <div class="home-medical__bottom-deco"></div>
  </section><!-- /.l-home__medical home-medical -->
  <section class="l-home__blog home-blog">
    <div class="l-container home-blog__container">
      <div class="home-blog__title">
        <?php
        $args = array(
          'title_text' => 'スタッフブログ'
        );
        get_template_part('template_parts/section-title', null, $args);
        ?>
      </div><!-- /.home-blog__title -->
      <?php
      $latest_posts = my_get_latest_posts('blog', 6);
      if ($latest_posts->have_posts()) :
      ?>
        <div class="home-blog__items">
          <?php
          while ($latest_posts->have_posts()) :
            $latest_posts->the_post();
            $args = array(
              'other_class' => 'p-post-card--column home-blog__item js-anime-target',
              'taxonomy' => 'blog_genre',
            );
            get_template_part('template_parts/post-card', null, $args);
          endwhile;
          ?>
        </div><!-- /.home-blog__items -->
      <?php else : ?>
        <p>記事がありません。</p>
      <?php endif; ?>
      <div class="home-blog__button js-anime-target">
        <a href="<?php echo $u_blog; ?>" class="c-button">スタッフブログ一覧はこちら</a>
      </div><!-- /.home-blog__button -->
    </div><!-- /.l-container home-blog__container -->
  </section><!-- /.l-home__blog home-blog -->
</div><!-- /.l-home -->

<?php get_footer(); ?>