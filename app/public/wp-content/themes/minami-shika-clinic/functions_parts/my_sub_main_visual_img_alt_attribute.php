<?php
// 下層ページのメインビジュアルの画像のalt属性
function my_sub_main_visual_img_alt_attribute()
{
  if (is_home() || is_page()) {
    $alt_attribute = single_post_title();
  } elseif (is_post_type_archive('blog')) {
    $alt_attribute = post_type_archive_title();
  } elseif (is_category()) {
    $alt_attribute = single_cat_title('', false);
  } elseif (is_tax()) {
    $alt_attribute = single_term_title('', false);
  } elseif (is_single()) {
    $alt_attribute = get_the_title();
  }
  return $alt_attribute;
}
