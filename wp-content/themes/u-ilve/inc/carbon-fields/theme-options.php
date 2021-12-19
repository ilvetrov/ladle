<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function get_rich_help_text($without = [])
{
  return '
  ' . (!@$without['bold'] ? 'Толстый шрифт в редакторе — толстый на сайте. ' : '') . '
  <br>Курсив в редакторе — акцентный цвет на сайте.
  <br><code>&amp;nbsp;</code> — неразрывный пробел.
  <br><code>&lt;br&gt;</code> — символ переноса строки.
  <br>Перенос строки из редактора не переносится на сайт — используйте символ.
  <br><strong>• Копируйте символы любым способом — Вставляйте только через комбинацию <code>CTRL + SHIFT + C</code></strong>
  <br>Или через Правый клик мыши → Вставить без форматирования (как обычный текст)
  ';
}

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
  $main_options_container = Container::make('theme_options', 'Настройки темы')
  ->set_icon('dashicons-admin-site')
  ->set_page_menu_position(21)
  ->add_tab('Общие', [
    Field::make('text', 'site_phone', 'Номер телефона')
      ->set_required()
      ->set_help_text('Пишите номер только в таком стиле: <code>+7 (123) 456-78-90</code>'),
    Field::make('text', 'telegram_link', 'Telegram ссылка')
      ->set_required()
      ->set_help_text('Ссылка вида: <code>https://t.me/account_username</code>'),
    Field::make('text', 'whatsapp_link', 'WhatsApp ссылка')
      ->set_help_text('Если не задано, то будет сформировано из Номера телефона.
      <br> Ссылка вида: <code>https://wa.me/71234567890</code>'),
    Field::make('text', 'viber_link', 'Viber ссылка')
      ->set_help_text('Если не задано, то будет сформировано из Номера телефона.
      <br> Ссылка вида: <code>viber://chat/?number=%271234567890</code>'),
    Field::make('text', 'lead_recipients', 'Получатели заявок')
      ->set_help_text('Адрес Email, на который будут приходить заявки. Можно указать несколько через запятую.'),
    Field::make('text', 'map_code', 'Код карты Яндекс')
      ->set_help_text('Вставьте код карты, которую нужно вывести в блоке Контактов.'),
    Field::make('textarea', 'metrics_code', 'Код метрик')
      ->set_rows(10)
      ->set_help_text('Вставьте код всех метрик для сайта')
      ->set_default_value('
        <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(86836258, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/86836258" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

        <!-- Global site tag (gtag.js) - Google Ads: 10827480857 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10827480857">$
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag(\'js\', new Date());

          gtag(\'config\', \'AW-10827480857\');
        </script>
      '),
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
        ->set_html('<h2><strong> • Общие настройки</strong></h2>'),
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
        ->set_html('<h2><strong> • Тип «Выбрать ответ»</strong></h2>')
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
        ->set_html('<h2><strong> • Тип «Ползунок»</strong></h2>')
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
        ->set_html('<h2><strong> • Тип «Текстовое поле»</strong></h2>')
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
          <br>Если поменяете, то характеристика слетит у всех спецтехник.
          '),
      ])
  ]);

  Container::make('theme_options', 'Главная страница')
    ->set_page_parent($main_options_container)
    ->add_fields([
      
      Field::make('html', 'hello_section_html', 'Приветственная секция')
        ->set_html('<h2><strong> • Приветственная секция</strong></h2>'),
      Field::make('rich_text', 'hello_title', 'Заголовок')
        ->set_required()
        ->set_help_text(get_rich_help_text()),
      Field::make('rich_text', 'hello_descr', 'Описание')
        ->set_required()
        ->set_help_text(get_rich_help_text()),
      Field::make('text', 'hello_button_text', 'Текст акцентной кнопки')
        ->set_required(),
      Field::make('text', 'hello_button_link', 'Ссылка акцентной кнопки')
        ->set_required(),
      Field::make('text', 'hello_button_adva_text', 'Текст дополнительной кнопки')
        ->set_required(),
      Field::make('text', 'hello_button_adva_link', 'Ссылка дополнительной кнопки')
        ->set_required(),
      Field::make('rich_text', 'hello_benefit_text', 'Текст преимущества (на компьютере)')
        ->set_help_text(get_rich_help_text()),
      
      Field::make('html', 'benefits_section_html', 'Секция преимуществ')
        ->set_html('<h2><strong> • Секция преимуществ</strong></h2>'),
      Field::make('rich_text', 'benefits_title', 'Заголовок')
        ->set_required()
        ->set_help_text(get_rich_help_text()),
      Field::make('rich_text', 'benefits_descr', 'Описание')
        ->set_required()
        ->set_help_text(get_rich_help_text()),
      Field::make('complex', 'benefits_list', 'Преимущества')
        ->set_required()
        ->setup_labels([
          'plural_name' => 'преимущества',
          'singular_name' => 'преимущество'
        ])
        ->add_fields([
          Field::make('image', 'image', 'Картинка')
            ->set_required(),
          Field::make('rich_text', 'title', 'Заголовок')
            ->set_required()
            ->set_help_text(get_rich_help_text([
              'bold' => true
            ])),
          Field::make('rich_text', 'descr', 'Описание')
            ->set_required()
            ->set_help_text(get_rich_help_text([
              'bold' => true
            ]))
        ]),
      
      Field::make('html', 'about_us_section_html', 'Секция «О компании»')
        ->set_html('<h2><strong> • Секция «О компании»</strong></h2>'),
      Field::make('rich_text', 'about_us_title', 'Заголовок')
        ->set_required()
        ->set_help_text(get_rich_help_text()),
      Field::make('rich_text', 'about_us_descr', 'Описание')
        ->set_required()
        ->set_help_text(get_rich_help_text()),
      Field::make('rich_text', 'about_us_block_title', 'Заголовок блока об открытии')
        ->set_required()
        ->set_help_text(get_rich_help_text()),
      Field::make('rich_text', 'about_us_block_text', 'Текст блока об открытии')
        ->set_required()
        ->set_help_text(get_rich_help_text()),
      Field::make('media_gallery', 'about_us_gallery', 'Галерея')
        ->set_help_text('Чтобы выбрать несколько, зажмите при клике кнопку CTRL.'),
      
      Field::make('html', 'reviews_section_html', 'Секция отзывов')
        ->set_html('<h2><strong> • Секция отзывов</strong></h2>'),
      Field::make('rich_text', 'reviews_title', 'Заголовок')
        ->set_required()
        ->set_help_text(get_rich_help_text()),
      Field::make('rich_text', 'reviews_descr', 'Описание')
        ->set_required()
        ->set_help_text(get_rich_help_text()),
      Field::make('complex', 'reviews_list', 'Отзывы')
        ->set_required()
        ->setup_labels([
          'plural_name' => 'отзывы',
          'singular_name' => 'отзыв'
        ])
        ->add_fields([
          Field::make('text', 'title', 'Заголовок')
            ->set_required(),
          Field::make('text', 'video_link', 'Ссылка на YouTube')
            ->set_required()
            ->set_help_text('Только ссылка. Всё остальное подгрузится автоматически. Другие площадки не поддерживаются.'),
          Field::make('date', 'date', 'Дата')
            ->set_required()
            ->set_storage_format('d.m.y')
            ->set_input_format('d.m.y', 'd.m.y')
            ->set_help_text('День.Месяц.Год'),
        ]),

      Field::make('html', 'seo_section_html_title', 'Секция главного SEO текста')
        ->set_html('<h2><strong> • Секция главного SEO текста</strong></h2>'),
      Field::make('rich_text', 'seo_section_title', 'Заголовок')
        ->set_required()
        ->set_help_text(get_rich_help_text())
        ->set_default_value('Главный текст для SEO-оптимизации'),
      Field::make('rich_text', 'seo_section_text', 'Текст')
        ->set_required()
        ->set_help_text(get_rich_help_text())
        ->set_default_value('Lorem ipsum, dolor sit amet consectetur adipisicing elit. At quas repellat nisi iusto velit necessitatibus quae ea molestiae fugit autem corporis illo, tenetur commodi veniam consectetur. Quod totam repellat facilis? Consequuntur provident quia quaerat laborum nobis nihil, ipsum iusto expedita quos laboriosam placeat dolor voluptatem libero sed natus distinctio incidunt omnis earum illo. Quia dolor veniam ex. Provident, laboriosam ratione! Ad veritatis earum doloremque eos doloribus reprehenderit atque, architecto iste soluta praesentium! Perspiciatis ipsum voluptatem sapiente nesciunt quasi ab accusantium suscipit sint ut, voluptas numquam impedit est minus consectetur maxime? Nobis, voluptatem adipisci laboriosam sequi ratione porro odit dicta molestiae tempora quos repellendus itaque quae ad aperiam saepe temporibus tenetur totam fugit aspernatur enim, eaque debitis consectetur magnam! Praesentium, molestias!'),

    ]);
}
