<?php if (paginate_links()) : ?>
  <div class="l-pagination p-pagination js-anime-target">
    <?php
    $args = array(
      'current' => max(1, $paged), // 現在のページ番号
      'end_size' => 1, // ページ番号のリストの最初と最後に表示させるボタンの数
      'mid_size' => 1, // 現在のページ番号の前後に表示させるボタンの数
      'prev_next' => true, // 「前へ」「次へ」ボタンを追加するか
      'prev_text' => '前へ', // 「前へ」ボタンに適用するテキスト
      'next_text' => '次へ', // 「次へ」ボタンに適用するテキスト
    );
    echo paginate_links($args);
    ?>
  </div><!-- /.l-pagination p-pagination -->
<?php endif; ?>