<?php
function register_technique_post_type()
{
  register_post_type('technique', [
    'labels' => [
      'name' => 'Спецтехника',
			'singular_name' => 'Спецтехника',
			'add_new' => 'Добавить новую',
			'add_new_item' => 'Добавить новую',
			'edit_item' => 'Редактировать информацию',
			'new_item' => 'Новая спецтехника',
			'view_item' => 'Посмотреть информацию',
			'search_items' => 'Найти спецтехнику',
			'not_found' => 'Спецтехника не была найдена',
			'not_found_in_trash' => 'Спецтехники в корзине нет',
    ],
		'description' => 'Спецтехника на сайте',
		'public' => true,
		'menu_position' => 20,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => [
			'title',
		],
		'has_archive' => false,
		'rewrite' => true,
		'query_var' => false,
		'delete_with_user' => false,
  ]);
}
add_action('init', 'register_technique_post_type');