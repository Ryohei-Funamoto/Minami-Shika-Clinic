<?php
// 全ての投稿を取得するサブクエリ
function my_get_all_posts($post_type, $tax, $tax_terms)
{
  $args = array(
    'post_type' => $post_type,
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'tax_query' => array(
      array(
        'taxonomy' => $tax,
        'field' => 'slug',
        'terms' => $tax_terms,
      ),
    ),
  );
  $all_posts = new WP_Query($args);
  return $all_posts;
}
