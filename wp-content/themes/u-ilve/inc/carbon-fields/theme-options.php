<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
  $main_options_container = Container::make('theme_options', 'Настройки темы')
  ->set_icon('dashicons-admin-site')
  ->set_page_menu_position(21)
  ->add_tab('Общие', [
    Field::make('text', 'lead_recipients', 'Получатели заявок')
      ->set_help_text('Адрес Email, на который будут приходить заявки. Можно указать несколько через запятую.')
  ])
  ->add_tab('Квиз', [
    Field::make('text', 'quiz_final_title', 'Заголовок финальной секции')
      ->set_required(),
    Field::make('text', 'quiz_final_descr', 'Описание финальной секции'),
    Field::make('checkbox', 'quiz_final_has_name', 'Спрашивать имя?')
      ->set_help_text('Если оставить пустым, то будет только одно поле с телефоном.'),
    Field::make('text', 'quiz_final_button', 'Текст финальной кнопки')
      ->set_required(),
    Field::make('complex', 'quiz_questions', 'Квиз. Вопросы')
    ->set_required()
    ->setup_labels([
      'plural_name' => 'вопросы',
      'singular_name' => 'вопрос'
    ])
    ->add_fields([
      Field::make('html', 'question_html', 'Описание секции')
        ->set_html('<h2>Общие настройки</h2>'),
      Field::make('text', 'question', 'Вопрос')
        ->set_required(),
      Field::make('text', 'descr', 'Уточнение'),
      Field::make('select', 'type', 'Тип вопроса')
        ->set_required()
        ->set_options([
          'select' => 'Выбрать ответ',
          'range' => 'Ползунок',
          'text_field' => 'Текстовое поле',
          'date' => 'Дата',
        ]),
      Field::make('checkbox', 'need_action', 'Требовать действие')
        ->set_help_text('Если отмечено, тогда пользователя не пустят к следующему вопросу, пока он не выберет/наберёт что-то в текущем.'),

      // Select
      Field::make('html', 'select_html', 'Описание типа')
        ->set_html('<h2>Тип «Выбрать ответ»</h2>')
        ->set_conditional_logic([
          [
            'field' => 'type',
            'value' => 'select'
          ]
        ]),
      Field::make('checkbox', 'select_is_multi', 'Несколько ответов')
        ->set_help_text('Пользователь может выбрать несколько ответов.<br>Влияет только на техническую сторону, уточнение прописывайте вручную.')
        ->set_conditional_logic([
          [
            'field' => 'type',
            'value' => 'select'
          ]
        ]),
      Field::make('complex', 'select_answers', 'Ответы')
        ->set_required()
        ->setup_labels([
          'plural_name' => 'ответы',
          'singular_name' => 'ответ'
        ])
        ->set_conditional_logic([
          [
            'field' => 'type',
            'value' => 'select'
          ]
        ])
        ->add_fields([
          Field::make('text', 'text', 'Текст вопроса')
            ->set_required(),
          Field::make('checkbox', 'checked', 'Сразу выбран')
            ->set_help_text('При открытии вопроса, этот ответ уже будет выбран. Пользователю будет достаточно нажать "Далее" для продолжения.')
        ]),
      
      // Range
      Field::make('html', 'range_html', 'Описание типа')
        ->set_html('<h2>Тип «Ползунок»</h2>')
        ->set_conditional_logic([
          [
            'field' => 'type',
            'value' => 'range'
          ]
        ]),
      Field::make('text', 'range_min_value', 'Минимальное значение')
        ->set_required()
        ->set_attribute('type', 'number')
        ->set_width(28)
        ->set_conditional_logic([
          [
            'field' => 'type',
            'value' => 'range'
          ]
        ]),
      Field::make('text', 'range_start_value', 'Начальное значение')
        ->set_required()
        ->set_attribute('type', 'number')
        ->set_width(28)
        ->set_conditional_logic([
          [
            'field' => 'type',
            'value' => 'range'
          ]
        ]),
      Field::make('text', 'range_max_value', 'Максимальное значение')
        ->set_required()
        ->set_attribute('type', 'number')
        ->set_width(28)
        ->set_conditional_logic([
          [
            'field' => 'type',
            'value' => 'range'
          ]
        ]),
      Field::make('text', 'range_step', 'Шаг')
        ->set_required()
        ->set_help_text('Минимальное значение, на которое можно передвигать ползунок.')
        ->set_default_value(1)
        ->set_attribute('type', 'number')
        ->set_attribute('placeholder', '1')
        ->set_width(14)
        ->set_conditional_logic([
          [
            'field' => 'type',
            'value' => 'range'
          ]
        ]),
      Field::make('text', 'range_singular_name', 'Название в единственном числе в Именительном падеже')
        ->set_attribute('placeholder', 'день')
        ->set_conditional_logic([
          [
            'field' => 'type',
            'value' => 'range'
          ]
        ]),
      Field::make('text', 'range_plural_name', 'Название во множественном числе в Родительном падеже')
        ->set_help_text('Если ползунок про выбор срока, то будет: <strong>дней</strong> <br>Необязательно, но рекомендуется.')
        ->set_attribute('placeholder', 'дней')
        ->set_conditional_logic([
          [
            'field' => 'type',
            'value' => 'range'
          ]
        ]),
      
      // Text field
      Field::make('html', 'text_field_html', 'Описание типа')
        ->set_html('<h2>Тип «Текстовое поле»</h2>')
        ->set_conditional_logic([
          [
            'field' => 'type',
            'value' => 'text_field'
          ]
        ]),
      Field::make('text', 'text_field_placeholder', 'Текст-помощь. Плейсхолдер')
        ->set_required()
        ->set_help_text('Показывается в поле ввода на месте будущего текста. Например: <strong>Введите адрес</strong>')
        ->set_attribute('placeholder', 'Введите адрес')
        ->set_conditional_logic([
          [
            'field' => 'type',
            'value' => 'text_field'
          ]
        ]),
    ])
  ])
  ->add_tab('Характеристики', [
    Field::make('complex', 'technique_specifications', 'Характеристики спецтехники')
      ->setup_labels([
        'plural_name' => 'характеристики',
        'singular_name' => 'характеристику'
      ])
      ->add_fields([
        Field::make('text', 'name', 'Название')
          ->set_required()
          ->set_help_text('Например: <code>Производитель</code>, <code>Масса техники</code>.'),
        Field::make('text', 'sign', 'Символ единицы измерения')
          ->set_help_text('Например: <code>кг</code>, <code>л/с</code>, <code>куб.м</code>.<br>Необязательно.'),
        Field::make('text', 'id', 'ID')
          ->set_required()
          ->set_help_text('
          Уникальный идентификатор. Задайте один раз и не меняйте.
          <br><strong>Правила создания:</strong>
          <br>• Индентификатор должен быть на латинице (английские буквы).
          <br>Например: <code>country</code>, <code>weight</code>, <code>strana</code>.
          <br>• Вместо пробела должен быть знак _.
          <br>Например: <code>engine_power</code>, <code>dvigat_moch</code>.
          <br>• Не должен начинаться с цифры.
          <br>Например: пишите <code>engine_3</code> вместо <code>3_engine</code>.
          <br>• Может быть или на английском языке, или транслитом.
          <br>Например: <code>country</code> или <code>strana</code> — всё хорошо.
          <br>• Пишите маленькими буквами.
          <br>Например: <code>metr</code> вместо <code>Metr</code>.
          <br>• Не меняйте. Создали один раз — и оставьте так.
          <br>Если поменяете, то характеристика слетит у всех спецтехники.
          '),
      ])
  ]);
}
