<?php
// 下層ページのメインビジュアルのタイトル
function my_sub_main_visual_title()
{
  if (is_home() || is_page()) {
    $title = single_post_title();
  } elseif (is_post_type_archive('blog')) {
    $title = post_type_archive_title();
  } elseif (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_singular('post')) {
    $title = 'お知らせ';
  } elseif (is_singular('blog')) {
    $title = 'スタッフブログ';
  }
  return $title;
}
