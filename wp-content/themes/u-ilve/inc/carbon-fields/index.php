<?php

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
  require_once(ABSPATH . 'vendor/autoload.php');
  \Carbon_Fields\Carbon_Fields::boot();
  
}

require_once 'theme-options.php';
require_once 'technique-options.php';

$cached_theme_options = [];
function carbon_get_cached_theme_option($field_name)
{
  global $cached_theme_options;
  
  if (!array_key_exists($field_name, $cached_theme_options)) {
    $cached_theme_options[$field_name] = carbon_get_theme_option($field_name);
  }
  return $cached_theme_options[$field_name];
}

$cached_term_options = [];
function carbon_get_cached_term_meta($id, $name, $container_id = '')
{
  global $cached_term_options;
  $cache_name = "$id-$name-$container_id";
  if (!array_key_exists($cache_name, $cached_term_options)) {
    $cached_term_options[$cache_name] = carbon_get_term_meta($id, $name, $container_id);
  }
  return $cached_term_options[$cache_name];
}

$cached_post_options = [];
function carbon_get_cached_post_meta($id, $name, $container_id = '')
{
  global $cached_post_options;
  $cache_name = "$id-$name-$container_id";
  if (!array_key_exists($cache_name, $cached_post_options)) {
    $cached_post_options[$cache_name] = carbon_get_post_meta($id, $name, $container_id);
  }
  return $cached_post_options[$cache_name];
}

function echo_rich_text($text)
{
  echo htmlspecialchars_decode($text);
}