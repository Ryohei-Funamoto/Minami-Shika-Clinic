<?php
// 投稿に紐づいているタームを取得
function my_the_post_term($id = 0, $tax, $anchor)
{
  global $post;
  if (0 === $id) {
    $id = $post->ID;
  }
  $post_terms = get_the_terms($id, $tax);
  if ($post_terms[0]) {
    if ($anchor) {
      echo '<a href="' . esc_url(get_term_link($post_terms[0]->term_id)) . '">' . esc_html($post_terms[0]->name) . '</a>';
    } else {
      echo esc_html($post_terms[0]->name);
    }
  }
}
