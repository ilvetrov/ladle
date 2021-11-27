<?php

function sendMail($phone, $additional = [])
{
  $recipients = carbon_get_cached_theme_option('lead_recipients');
  if ($recipients) {
    $emailSubject = @$additional['subject'] ? $additional['subject'] : 'Новая заявка с сайта';
    
    return wp_mail($recipients, $emailSubject, getMailHtml($phone, $additional), [
      'content-type' => 'text/html'
    ]);
  }
}
function getMailHtml($phone, Array $additional = [])
{
  ob_start();
  require get_template_directory() . '/template-parts/mail.php';
  return ob_get_clean();
}