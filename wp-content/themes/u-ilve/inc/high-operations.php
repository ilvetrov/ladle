<?php

function high_operations_setup()
{ 
  require_once get_template_directory() . '/inc/technique-post-type.php';
}

if (is_admin()) {
  high_operations_setup();
}