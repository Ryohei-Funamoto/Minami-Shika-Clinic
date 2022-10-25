<?php
// global-styles-inline-cssをなくす
function my_remove_global_styles()
{
  wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'my_remove_global_styles');