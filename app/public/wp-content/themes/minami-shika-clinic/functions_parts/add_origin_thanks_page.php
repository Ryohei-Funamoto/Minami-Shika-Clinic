<?php
// Contact Form 7で送信ボタンをクリックした後の遷移先を設定する
function add_origin_thanks_page()
{
  $contact_thanks = esc_url(home_url('/contact/contact-thanks/'));
  $reservation_thanks = esc_url(home_url('reservation/reservation-thanks/'));
  echo <<< EOC
    <script>
      var thanksPage = {
        168: '{$contact_thanks}',
        169: '{$reservation_thanks}',
      }
      document.addEventListener('wpcf7mailsent', function(event) {
        location = thanksPage[event.detail.contactFormId];
      }, false);
    </script>
  EOC;
}
add_action('wp_footer', 'add_origin_thanks_page');
