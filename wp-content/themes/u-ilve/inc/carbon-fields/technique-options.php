<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function get_specifications_fields()
{
  return cache('specifications_fields', function()
  {
    $specifications = carbon_get_cached_theme_option('technique_specifications');
    return array_map(function($specification)
    {
      return Field::make('text', 'spec-' . $specification['id'], $specification['name']);
    }, $specifications);
  });
}

function crb_register_technique_options()
{
  Container::make('post_meta', 'Информация о спецтехнике')
    ->show_on_post_type('technique')
    ->add_fields(array_merge([
      Field::make('text', 'price', 'Стоимость в час (₽/час)')
        ->set_required(),
      Field::make('image', 'hello_image', 'Изображение на главной странице сайта')
        ->set_required()
        ->set_help_text('Посмотрите примеры из существующей спецтехники в каталоге.'),
      Field::make('media_gallery', 'self_gallery', 'Галерея')
        ->set_type(['image'])
        ->set_duplicates_allowed(true)
        ->set_help_text('Выводится на собственной странице.'),
      Field::make('text', 'separate_type', 'Тип отдельно')
        ->set_help_text('Например: <code>Кран стреловой</code>.<br> Нужно для красивой карточки товара на главной.'),
      Field::make('text', 'separate_name', 'Название отдельно')
        ->set_help_text('Например: <code>КС-55713-5К-3</code>.<br> Нужно для красивой карточки товара на главной.'),
      Field::make('html', 'specifications_html', 'Характеристики')
        ->set_html('<h3>Характеристики</h3>Добавить новые можно <a href="/wp-admin/admin.php?page=crb_carbon_fields_container.php" target="_blank">здесь</a>.'),
    ], get_specifications_fields()));
}
add_action('carbon_fields_register_fields', 'crb_register_technique_options');