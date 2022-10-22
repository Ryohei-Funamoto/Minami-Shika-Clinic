'use strict';

(function () {
  /**
   * DOM
   */
  const header = document.querySelector('.js-header');
  const headerHeight = header.clientHeight;
  const hamburger = document.querySelector('.js-hamburger');
  const drawer = document.querySelector('.js-drawer');
  const toTopBtn = document.querySelector('.js-button-to-top');
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  const anchorLinksArr = Array.prototype.slice.call(anchorLinks);
  const animeTargets = document.querySelectorAll('.js-anime-target');

  /**
   * 関数
   */
  // ハンバーガーメニューを開く
  const hamburgerOpen = function () {
    hamburger.classList.add('is-open');
    drawer.classList.add('is-open');
  }
  // ハンバーガーメニューを閉じる
  const hamburgerClose = function () {
    hamburger.classList.remove('is-open');
    drawer.classList.remove('is-open');
  }
  // トップへ戻るボタンの表示・非表示
  const toTopBtnToggle = function () {
    if (window.pageYOffset > 300) {
      toTopBtn.classList.add('is-show');
    } else {
      toTopBtn.classList.remove('is-show');
    }
  }
  // トップへ戻るボタンを押した時のページトップへ戻る動き
  const scrollToTop = function () {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }
  // ターゲットへスムーススクロールする動き
  const scrollToTarget = function (targetId) {
    // スクロール先の要素を取得
    const target = document.querySelector(targetId);
    // スクロール先の要素の位置座標を取得
    const position = window.pageYOffset + target.getBoundingClientRect().top - headerHeight;
    // スクロール先の要素へ移動
    window.scrollTo({
      top: position,
      behavior: 'smooth',
    });
  }
  // 別ページの特定箇所へのスムーススクロール
  const trsToAnotherPageTarget = function () {
    // スクロール先のIDを取得
    let targetId = location.hash;
    // スクロール先のIDを取得できた場合
    if (targetId) {
      // スクロール先があるページのトップへ移動
      window.scrollTo({
        top: 0,
      });
      // 400ミリ秒後にスクロール先へ移動する関数を実行
      setTimeout(scrollToTarget(targetId), 400);
    }
  }

  /**
   * イベント
   */
  // ハンバーガーメニューをクリックした時にハンバーガーメニューを開閉する
  hamburger.addEventListener('click', function () {
    if (hamburger.classList.contains('is-open')) {
      hamburgerClose();
    } else {
      hamburgerOpen();
    }
  });
  // 画面が1200px以上にリサイズされた時ハンバーガーメニューを閉じる
  window.addEventListener('resize', function () {
    if (window.matchMedia('(min-width: 1200px)').matches) {
      hamburgerClose();
    }
  });
  // トップへ戻るボタンの表示・非表示
  window.addEventListener('scroll', toTopBtnToggle);
  // トップへ戻るボタンを押した時にページトップへ戻る
  toTopBtn.addEventListener('click', scrollToTop);
  // ページ内リンクをクリックした時にターゲットへスムーススクロールする
  anchorLinksArr.forEach(elm => {
    elm.addEventListener('click', function (e) {
      e.preventDefault();
      // スクロール先のIDを取得
      let targetId = elm.getAttribute('href');
      // スクロール先へ移動する関数を実行
      scrollToTarget(targetId);
    });
  });
  // 別ページの特定箇所へスムーススクロールする
  window.addEventListener('load', trsToAnotherPageTarget);

  /**
   * Swiper
   */
  // トップページのメインビジュアルのスライダー
  const homeMvSlider = new Swiper('.js-home-mv-slider', {
    autoplay: {
      delay: 4000, // 4000ミリ秒後に切り替わり
    },
    disableOnInteraction: false, // スワイプ操作によるスライダー停止を無効化
    effect: 'fade', // フェードで切り替わり
    loop: true, // ループ有効化
    slidesPerView: 1, // 1度に表示させるスライド枚数
    speed: 2000, // スライドの速さ
    pagination: {
      el: '.js-home-main-visual-pagination',
    },
    navigation: {
      nextEl: '.js-home-main-visual-button-next',
      prevEl: '.js-home-main-visual-button-prev',
    },
  });
  // ローディング画面が消えるまで自動再生を停止
  homeMvSlider.autoplay.stop();
  // スタッフ紹介ページの無限ループスライダー
  const staffSlider = new Swiper('.js-staff-slider', {
    allowTouchMove: false, // スワイプ無効
    autoplay: {
      delay: 0, // 途切れなくループ
    },
    centeredSlides: true, // スライド中央表示
    loop: true, // ループ有効
    slidesPerView: 1.83325, // 一度に表示させるスライド枚数
    spaceBetween: 10, // スライド間の余白
    speed: 5000, // スライドの速さ
    breakpoints: {
      // min-width: 768px
      768: {
        slidesPerView: 4, // スライド幅
        spaceBetween: 20, // スライド間の余白
      }
    }
  });

  /**
   * Intersection Observer
   */
  // 監視する要素が画面と交差した時に発動させる処理
  function callback(entries, obs) {
    entries.forEach(entry => {
      // 監視する要素と画面との交差が終わったら処理を発動させない
      if (!entry.isIntersecting) {
        return;
      }
      // 監視する要素が画面と交差している時に以下の処理を発動させる
      entry.target.classList.add('is-appear');
      // 処理が終わったら監視を止める
      obs.unobserve(entry.target);
    });
  }
  // オプション
  const options = {
    root: null, // 監視する領域を指定。初期値nullはviewport全体
    rootMargin: '0px 0px', // 監視する領域の広さを指定
    threshold: 0.5, // 監視している要素が画面と何%交差した時に処理を実行するかを指定
  }
  // Intersection Observerのインスタンスを作成
  const observer = new IntersectionObserver(callback, options);
  // アニメーション対象の要素を監視する
  animeTargets.forEach(target => {
    observer.observe(target);
  });

  /**
   * ローディング画面(sessionStorage)
   */
  const loadedPage = function () {
    const loading = document.querySelector('.js-loading');
    loading.classList.add('is-loaded');
    homeMvSlider.autoplay.start();
  }

  if (!sessionStorage.getItem('access')) {
    sessionStorage.setItem('access', 'true');
    window.addEventListener('load', function() {
      setTimeout(loadedPage, 2000);
    });
    setTimeout(loadedPage, 4000);
  } else {
    loadedPage();
  }
}());
