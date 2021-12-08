<?php

function phone_to_link()
{
  return preg_replace("/[^0-9+]/", "", esc_html(carbon_get_cached_theme_option('site_phone')));
}

function whatsapp_link()
{
  return
    carbon_get_cached_theme_option('whatsapp_link')
      ? carbon_get_cached_theme_option('whatsapp_link')
      : ('https://wa.me/' . str_replace('+', '', phone_to_link()));
}

function viber_link()
{
  return
    carbon_get_cached_theme_option('viber_link')
      ? carbon_get_cached_theme_option('viber_link')
      : ('viber://chat/?number=' . preg_replace('/^((\+?7)|8)/', '%27', phone_to_link()));
}

function telegram_link()
{
  return carbon_get_cached_theme_option('telegram_link');
}