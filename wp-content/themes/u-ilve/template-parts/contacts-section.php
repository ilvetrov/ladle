<section class="contacts-section" id="contacts">
  <div class="container-size">
    <div class="contacts-section__container">
      <div class="contacts-section__contacts">
        <h2 class="section-title section-title_small contacts-section__title">
          <strong>Наши контакты</strong>
        </h2>
        <!-- /.section-title -->
        <ul class="contacts-list">
          <li class="contacts-list__item contacts-list__item_phone">
            <?php get_template_part('template-parts/phone', '', [
              'black' => true,
              'red_icon' => true,
              'big_text' => true
            ]) ?>
          </li>
          <!-- /.contacts-list__item -->
          <li class="contacts-list__item">
            <div class="contacts-list__icon">
              <img <?php img_async_src('clock.svg'); ?> alt="Время работы">
            </div>
            <!-- /.contacts-list__icon -->
            <div class="contacts-list__text">
              Ежедневно 10:00 — 22:00
            </div>
            <!-- /.contacts-list__text -->
          </li>
          <!-- /.contacts-list__item -->
          <li class="contacts-list__item">
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
            <div class="contacts-list__header-text contacts-list__header-text_single-row">
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
        <!-- /.contacts-list -->
      </div>
      <!-- /.contacts-section__contacts -->
      <div class="contacts-section__benefits">
        <h2 class="section-title section-title_small contacts-section__title">
          <strong>Что Вы получите</strong>
        </h2>
        <!-- /.section-title -->
        <ul class="contacts-beneftis contacts-section__benefits-list">
          <li class="contacts-benefits__item">
            <img <?php img_async_src('checked-arrow.png'); ?> alt="" class="contacts-benefits__icon">
            <div class="contacts-benefits__text">
              Подача техники в день обращения
            </div>
            <!-- /.contacts-benefits__text -->
          </li>
          <!-- /.contacts-benefits__item -->
          <li class="contacts-benefits__item">
            <img <?php img_async_src('checked-arrow.png'); ?> alt="" class="contacts-benefits__icon">
            <div class="contacts-benefits__text">
              Доставка спецтехники до объекта
            </div>
            <!-- /.contacts-benefits__text -->
          </li>
          <!-- /.contacts-benefits__item -->
          <li class="contacts-benefits__item">
            <img <?php img_async_src('checked-arrow.png'); ?> alt="" class="contacts-benefits__icon">
            <div class="contacts-benefits__text">
              Полностью новая техника
            </div>
            <!-- /.contacts-benefits__text -->
          </li>
          <!-- /.contacts-benefits__item -->
          <li class="contacts-benefits__item">
            <img <?php img_async_src('checked-arrow.png'); ?> alt="" class="contacts-benefits__icon">
            <div class="contacts-benefits__text">
              Квалифицированные водители
            </div>
            <!-- /.contacts-benefits__text -->
          </li>
          <!-- /.contacts-benefits__item -->
          <li class="contacts-benefits__item">
            <img <?php img_async_src('checked-arrow.png'); ?> alt="" class="contacts-benefits__icon">
            <div class="contacts-benefits__text">
              Оперативная замена техники
            </div>
            <!-- /.contacts-benefits__text -->
          </li>
          <!-- /.contacts-benefits__item -->
          <li class="contacts-benefits__item">
            <img <?php img_async_src('checked-arrow.png'); ?> alt="" class="contacts-benefits__icon">
            <div class="contacts-benefits__text">
              Бесплатный подбор и расчет
            </div>
            <!-- /.contacts-benefits__text -->
          </li>
          <!-- /.contacts-benefits__item -->

        </ul>
        <!-- /.contacts-beneftis -->
      </div>
      <!-- /.contacts-section__benefits -->
      <div class="contacts-section__map-block">
        <div class="contacts-section__map">
          <div class="waiting-background waiting-background_light"></div>
          <div class="dynamic-tag-wrap">
            <div data-dynamic-tag="<?php echo htmlspecialchars('<div class="bor"><div class="bor-2"><div class="bor-3"></div></div></div>'); ?>" data-dynamic-tag-when-scroll></div>
          </div>
          <!-- /.dynamic-tag-wrap -->
        </div>
        <!-- /.contacts-section__map -->
      </div>
      <!-- /.contacts-section__map-block -->
    </div>
    <!-- /.contacts-section__container -->
  </div>
  <!-- /.container-size -->
</section>
<!-- /.contacts-section -->