<?php
// 下層ページのメインビジュアルのサブタイトル
function my_sub_main_visual_subtitle()
{
  if (is_page()) {
    $subtitle = get_field('mv_subtitle');
  } elseif (is_home()) {
    $post_obj = get_page_by_path('news');
    $subtitle = get_field('mv_subtitle', $post_obj->ID);
  } elseif (is_category() || is_tax()) {
    $term_obj = get_queried_object();
    $subtitle = get_field('mv_subtitle', $term_obj->taxonomy . '_' . $term_obj->term_id);
  } elseif (is_post_type_archive('blog')) {
    echo 'staff blog';
  } elseif (is_singular('post')) {
    echo 'news';
  } elseif (is_singular('blog')) {
    echo 'staff blog';
  }
  return $subtitle;
}
