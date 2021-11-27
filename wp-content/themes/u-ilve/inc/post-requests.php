<?php

function site_form_handler() {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require get_template_directory() . '/handlers/site-form.php';
  }
}
add_action( 'admin_post_nopriv_site_form', 'site_form_handler' );
add_action( 'admin_post_site_form', 'site_form_handler' );