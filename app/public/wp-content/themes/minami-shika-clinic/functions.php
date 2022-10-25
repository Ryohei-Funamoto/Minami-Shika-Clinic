<?php
// 使用中のテーマでWordPressの機能を有効化する
require_once get_theme_file_path('/functions_parts/my_setup.php');
// CSSとJavaScriptの読み込み
require_once get_theme_file_path('/functions_parts/my_script_init.php');
// wp_enqueue系のlinkタグやscriptタグからtype属性を削除する
require_once get_theme_file_path('/functions_parts/my_remove_type_attribute.php');
// global-styles-inline-cssを削除する
require_once get_theme_file_path('/functions_parts/my_remove_global_styles.php');
// 各ページのURLの一括管理
require_once get_theme_file_path('/functions_parts/my_url.php');
// 記事の表示件数を各一覧ページごとに変更する
require_once get_theme_file_path('/functions_parts/my_posts_per_page.php');
// Contact Form 7に自動で出力されるpタグやbrタグを無効化する
require_once get_theme_file_path('/functions_parts/wpcf7_autop_return_false.php');
// Contact Form 7で送信ボタンをクリックした後の遷移先を設定する
require_once get_theme_file_path('/functions_parts/add_origin_thanks_page.php');
// 新着記事のサブクエリ
require_once get_theme_file_path('/functions_parts/my_get_latest_posts.php');
// 全ての投稿を取得するサブクエリ
require_once get_theme_file_path('/functions_parts/my_get_all_posts.php');
// 投稿に紐づいているタームを取得
require_once get_theme_file_path('/functions_parts/my_the_post_term.php');
// 下層ページのメインビジュアルのタイトル
require_once get_theme_file_path('/functions_parts/my_sub_main_visual_title.php');
// 下層ページのメインビジュアルのサブタイトル
require_once get_theme_file_path('/functions_parts/my_sub_main_visual_subtitle.php');
// 下層ページのメインビジュアルの画像のalt属性
require_once get_theme_file_path('/functions_parts/my_sub_main_visual_img_alt_attribute.php');
