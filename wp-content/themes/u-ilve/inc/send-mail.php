<?php

function sendMail($phone, $additional = [])
{
  $recipients = carbon_get_cached_theme_option('lead_recipients');
  if ($recipients) {
    $emailSubject = @$additional['subject'] ? $additional['subject'] : 'Новая заявка с сайта ' . $_SERVER['SERVER_NAME'];
    
    return wp_mail($recipients, $emailSubject, getMailHtml($phone, $additional), ['Content-Type: text/html; charset=UTF-8']);
  }
}
function getMailHtml($phone, Array $additional = [])
{
  ob_start();
  require get_template_directory() . '/template-parts/mail.php';
  return ob_get_clean();
}