<?php

add_action('admin_bar_menu', 'add_toolbar_items', 100);
function add_toolbar_items($admin_bar){
	$admin_bar->add_menu([
		'id'    => 'created-by',
		'title' => 'Есть вопросы?',
		'href'  => '/wp-admin/themes.php',
		'meta'  => [
		 'target' => '_blank',
		],
	]);

	$admin_bar->add_menu([
    'id' => 'write-to-me',
		'parent' => 'created-by',
		'title' => 'Напишите мне',
		'href'  => 'https://t.me/ilvetrov',
		'meta'  => [
      'target' => '_blank',
		],
	]);
	$admin_bar->add_menu([
    'id' => 'instruction-link',
		'parent' => 'created-by',
		'title' => 'Инструкция к сайту ©Ковш',
		'href'  => '/wp-admin/themes.php',
		'meta'  => [
      'target' => '_blank',
		],
	]);
  $admin_bar->add_menu([
    'id' => 'developer-link',
		'parent' => 'created-by',
		'title' => 'Создано: Илья Ветров',
	]);
}