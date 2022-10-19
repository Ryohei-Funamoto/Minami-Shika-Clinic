'use strict';

(function () {
  /**
   * DOM
   */
  const hamburger = document.querySelector('.js-hamburger');
  const drawer = document.querySelector('.js-drawer');
  const toTopBtn = document.querySelector('.js-button-to-top');
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  const anchorLinksArr = Array.prototype.slice.call(anchorLinks);

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
  // ページ内リンクをクリックした時にターゲットへスムーススクロールする動き
  const scrollToTarget = function (targetOffsetTop) {
    window.scrollTo({
      top: targetOffsetTop,
      behavior: 'smooth'
    });
  }

  /**
   * イベント
   */
  // ハンバーガーメニューの開閉
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
  // トップへ戻るボタンを押した時のページトップへ戻る動き
  toTopBtn.addEventListener('click', scrollToTop);
  // ページ内リンクをクリックした時にターゲットへスムーススクロールする動き
  anchorLinksArr.forEach(elm => {
    elm.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = elm.getAttribute('href');
      let targetOffsetTop;
      if (targetId == '#') {
        targetOffsetTop = 0;
      } else {
        const targetElement = document.querySelector(targetId);
        const headerHeight = document.querySelector('.js-header').clientHeight;
        targetOffsetTop = window.pageYOffset + targetElement.getBoundingClientRect().top - headerHeight;
      }
      scrollToTarget(targetOffsetTop);
    });
  });

  /**
   * Swiper
   */
  const homeMvSlider = new Swiper('.js-home-mv-slider', {
    autoplay: {
      delay: 4000,
    },
    disableOnInteraction: false,
    effect: 'fade',
    loop: true,
    slidesPerView: 1,
    speed: 2000,
    pagination: {
      el: '.js-home-main-visual-pagination',
    },
    navigation: {
      nextEl: '.js-home-main-visual-button-next',
      prevEl: '.js-home-main-visual-button-prev',
    },
  });

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
}());
