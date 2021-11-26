<div class="mobile-menu pop-up hidden disabled" data-pop-up="mobile-menu">
  <div class="container-size">
    <div class="mobile-menu__container">
      <div class="mobile-menu__header">
        <a href="/" class="logo mobile-menu__logo">
          <img <?php img_async_src('logo-dark.png', false); ?> alt="Коыш">
        </a>
        <!-- /.logo -->
        <button class="mobile-menu__close not-button-style click-extender" data-pop-up-close-button="mobile-menu">
          <img <?php img_async_src('close-transparent.png', false); ?> alt="Закрыть">
        </button>
        <!-- /.mobile-menu__close -->
      </div>
      <!-- /.mobile-menu__header -->
      <div class="mobile-menu__blocks">
        <div class="mobile-menu__block">
          <?php wp_nav_menu([
            'theme_location' => 'mobile-menu-sections',
            'container' => '',
            'menu_class' => 'mobile-menu__list mobile-menu__list_upper'
          ]); ?>
        </div>
        <!-- /.mobile-menu__block -->
        <div class="mobile-menu__block">
          <div class="mobile-menu__subtitle">
            Полезные ссылки
          </div>
          <!-- /.mobile-menu__subtitle -->
          <?php wp_nav_menu([
            'theme_location' => 'mobile-menu-links',
            'container' => '',
            'menu_class' => 'mobile-menu__list'
          ]); ?>
        </div>
        <!-- /.mobile-menu__block -->
        <div class="mobile-menu__block">
          <div class="mobile-menu__subtitle">
            Наши контакты
          </div>
          <!-- /.mobile-menu__subtitle -->
          <ul class="mobile-menu__contacts">
            <li class="mobile-menu__phone">
              <?php get_template_part('template-parts/phone', '', [
                'black' => true,
                'red_icon' => true,
                'big_text' => true
              ]); ?>
            </li>
            <li class="contacts-list__item mobile-menu__time">
              <div class="contacts-list__icon">
                <img <?php img_async_src('clock.svg'); ?> alt="Время работы">
              </div>
              <!-- /.contacts-list__icon -->
              <div class="contacts-list__text">
                Ежедневно 10:00 — 22:00
              </div>
              <!-- /.contacts-list__text -->
            </li>
            <li class="contacts-list__item mobile-menu__address">
              <div class="contacts-list__icon">
                <img <?php img_async_src('location-pin.png'); ?> alt="Адрес">
              </div>
              <!-- /.contacts-list__icon -->
              <div class="contacts-list__text">
                г. Уфа, ул. Красная, 156
              </div>
              <!-- /.contacts-list__text -->
            </li>
            <!-- /.contacts-list__item -->
            <li class="contacts-list__single-row">
              <div class="contacts-list__header-text contacts-list__header-text_single-row mobile-menu__messengers-label">
                Быстрая связь в мессенджере
              </div>
              <!-- /.contacts-list__header-text -->
              <?php get_template_part('template-parts/messengers', '', [
                'small_icons' => true,
                'early_min' => true
              ]); ?>
            </li>
            <!-- /.contacts-list__single-row -->
            <li class="contacts-list__separate-rows">
              <div class="contacts-list__header-text contacts-list__header-text_separate-row">
                Корпоративная почта компании
              </div>
              <!-- /.contacts-list__header-text -->
              <div class="contacts-list__text">
                <a href="mailto:KonstruktorKda@yandex.ru " class="contacts-list__dashed-link not-link-style">
                  KonstruktorKda@yandex.ru
                </a>
                <!-- /.contacts-list__dashed-link -->
              </div>
              <!-- /.contacts-list__text -->
            </li>
            <!-- /.contacts-list__separate-rows -->
          </ul>
          <!-- /.mobile-menu__contacts -->
        </div>
        <!-- /.mobile-menu__block -->
      </div>
      <!-- /.mobile-menu__blocks -->
    </div>
    <!-- /.mobile-menu__container -->
  </div>
  <!-- /.container-size -->
</div>
<!-- /.mobile-menu -->