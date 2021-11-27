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
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => false,
		'menu_position' => 20,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => [
			'title',
			'excerpt',
			'editor'
		],
		'rewrite' => ['slug' => 'products'],
		'has_archive' => false,
		'delete_with_user' => false,
  ]);
}
add_action('init', 'register_technique_post_type');