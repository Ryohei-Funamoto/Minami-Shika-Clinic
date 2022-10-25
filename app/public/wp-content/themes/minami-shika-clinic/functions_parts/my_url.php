<?php
// 各ページのURLの一括管理
function my_url()
{
  // 変数名がWordPress固有のグローバル変数と被らないようにする(接頭辞のuはURLの頭文字)
	global $u_home; // ホーム
  global $u_about; // 当院について
  global $u_medical; // 診療案内
  global $u_staff; // スタッフ紹介
  global $u_news; // お知らせ
  global $u_blog; // スタッフブログ
  global $u_contact; // お問い合わせ
  global $u_reservation; // WEB予約

  // ホーム
  $u_home = esc_url(home_url('/'));
  // 当院について
  $u_about = esc_url(get_permalink(get_page_by_path('about')->ID));
  // 診療案内
  $u_medical = esc_url(get_permalink(get_page_by_path('medical')->ID));
  // スタッフ紹介
  $u_staff = esc_url(get_permalink(get_page_by_path('staff')->ID));
  // お知らせ
  $u_news = esc_url(home_url('/news/'));
  // スタッフブログ
  $u_blog = esc_url(home_url('/blog/'));
  // お問い合わせ
  $u_contact = esc_url(get_permalink(get_page_by_path('contact')->ID));
  // WEB予約
  $u_reservation = esc_url(get_permalink(get_page_by_path('reservation')->ID));
}
add_action('after_setup_theme', 'my_url');
