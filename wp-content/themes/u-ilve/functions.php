<?php

require_once get_template_directory() . '/inc/remove-whitespaces.php';

require_once get_template_directory() . '/inc/disable-defaults.php';
require_once get_template_directory() . '/inc/init-setup.php';
require_once get_template_directory() . '/inc/sidebars.php';
require_once get_template_directory() . '/inc/scripts-styles.php';
require_once get_template_directory() . '/inc/cache.php';

require_once get_template_directory() . '/inc/post-requests.php';

require_once get_template_directory() . '/inc/high-operations.php';

require_once get_template_directory() . '/inc/carbon-fields/index.php';
require_once get_template_directory() . '/inc/async-img.php';
require_once get_template_directory() . '/inc/beautify-price.php';

if (is_admin()) {
  require_once get_template_directory() . '/inc/created-by.php';
}