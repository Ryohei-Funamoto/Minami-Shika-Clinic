<?php
// 新着記事のサブクエリ
function my_get_latest_posts($post_type, $posts_per_page = -1)
{
  $args = array(
    'post_type' => $post_type,
    'posts_per_page' => $posts_per_page,
    'orderby' => 'date',
    'order' => 'DESC',
  );
  $latest_posts = new WP_Query($args);
  return $latest_posts;
}
