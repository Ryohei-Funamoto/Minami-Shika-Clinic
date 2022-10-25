<?php
// 記事の表示件数を各一覧ページごとに変更する
function my_posts_per_page($query)
{
  // 管理画面あるいはサブクエリの場合は何もしない
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  // 通常投稿一覧ページ、その他一覧ページの場合
  if ($query->is_home() || $query->is_archive()) {
    $query->set('posts_per_page', 10);
    return;
  }
}
add_action('pre_get_posts', 'my_posts_per_page');
