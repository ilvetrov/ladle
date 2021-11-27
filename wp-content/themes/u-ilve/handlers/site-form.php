<?php

require_once get_template_directory() . '/inc/send-mail.php';

function getFormType($data)
{
  switch ($data['type']) {
    case 'order_product':
      return 'Заказ техники';
      break;
    
    case 'order_call':
      return 'Заявка на звонок';
      break;
    
    
    case 'from_quiz':
      return 'Из квиза';
      break;
    
    default:
      return 'Заявка на звонок';
      break;
  }
}

$data = $_POST;
if (!empty(@$data['phone'])
  ) {
  
  $additional = [];
  $additional['subject'] = 'Новая заявка с сайта';
  $additional['type'] = getFormType($data);
  if (@$data['name']) {
    $additional['name'] = $data['name'];
  }
  if (@$data['more']) {
    $additional['more'] = json_decode(stripslashes(html_entity_decode($data['more'])), true);
  }
  $resultSuccess = sendMail($data['phone'], $additional);

  wp_redirect('/thank-you', '302');
  exit;
}

wp_redirect('/', '302');
exit;