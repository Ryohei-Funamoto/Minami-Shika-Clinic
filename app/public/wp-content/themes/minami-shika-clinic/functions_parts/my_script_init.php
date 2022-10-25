<?php
// CSSとJavaScriptの読み込み
function my_script_init()
{
  // Font Awesome
  wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array(), '6.2.0');
  // Swiper CSS
  wp_enqueue_style('swiper-style', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), '8.4.4');
  // style.css
  wp_enqueue_style('my-style', get_template_directory_uri() . '/css/style.css', array(), date('YmdGis', filemtime(get_theme_file_path('/css/style.css'))));
  // 管理画面の時は { } 内の処理をしない
  if (!is_admin()) {
    // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/lib/jquery-3.6.1.min.js', array(), '3.6.1', false);
  }
  // smoothscroll
  wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/js/lib/smoothscroll.js', array('jquery'), '1.0.0', true);
  // Swiper JS
  wp_enqueue_script('swiper-script', get_template_directory_uri() . '/js/lib/swiper-bundle.min.js', array('jquery'), '8.4.4', true);
  // common.js
  wp_enqueue_script('my-common', get_template_directory_uri() . '/js/common.js', array('jquery'), date('YmdGis', filemtime(get_theme_file_path('/js/common.js'))), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');
