<?php get_header('', [
  'with_background' => true,
  'static' => true
]); ?>

<main id="primary" class="site-main">
  <section class="product-header">
    <div class="container-size">
      <div class="product-header__container">
        <div class="product-header__bread-crumbs">
          <ul class="bread-crumbs">
            <li class="bread-crumbs__item">
              <a href="/" class="bread-crumbs__link not-link-style">Главная</a>
              <!-- /.bread-crumbs__link -->
            </li>
            <!-- /.bread-crumbs__item -->
            <li class="bread-crumbs__item">
               - <?php the_title(); ?>
            </li>
            <!-- /.bread-crumbs__item -->
          </ul>
          <!-- /.bread-crumbs -->
    
        </div>
        <!-- /.product-header__bread-crumbs -->
        <h1 class="product-header__title section-title">
          <strong><?php the_title(); ?></strong>
        </h1>
        <!-- /.product-header__title -->
      </div>
      <!-- /.product-header__container -->
    </div>
    <!-- /.container-size -->
  </section>
  <!-- /.product-header -->
  <section class="product-overview">
    <div class="container-size">
      <div class="product-overview__container">
        <?php if (carbon_get_cached_post_meta(get_the_ID(), 'self_gallery')): ?>
          <div class="product-overview__gallery">
            <div class="adaptive-gallery js-adaptive-gallery">
              <div class="adaptive-gallery__wrap adaptive-gallery__wrap_row js-adaptive-gallery-wrap">
                <?php foreach (carbon_get_cached_post_meta(get_the_ID(), 'self_gallery') as $image): ?>
                  <div class="adaptive-gallery__item adaptive-gallery__item_row js-adaptive-gallery-item">
                    <div class="product-overview__gallery-image">
                      <img <?php img_async_src(wp_get_attachment_url($image), true, false, true); ?> alt="" class="img-cover">
                    </div>
                    <!-- /.product-overview__gallery-image -->
                  </div>
                  <!-- /.adaptive-gallery__item -->
                <?php endforeach; ?>
              </div>
              <!-- /.adaptive-gallery__wrap -->
              <div class="adaptive-gallery__buttons product-gallery__buttons adaptive-gallery__buttons_all-screens">
                <button class="adaptive-gallery__prev-button adaptive-gallery__button not-button-style js-adaptive-gallery-prev">
                  <img <?php img_async_src('left-arrow-button.png'); ?> alt="Назад">
                </button>
                <!-- /.adaptive-gallery__prev-button -->
                <button class="adaptive-gallery__next-button adaptive-gallery__button not-button-style js-adaptive-gallery-next">
                  <img <?php img_async_src('right-arrow-button.png'); ?> alt="Вперёд">
                </button>
                <!-- /.adaptive-gallery__next-button -->
              </div>
              <!-- /.adaptive-gallery__buttons -->
            </div>
            <!-- /.adaptive-gallery -->
          </div>
          <!-- /.product-overview__gallery -->
        <?php endif; ?>
        <div class="product-overview__info">
          <div class="product-overview__price-block">
            <span class="product-overview__price-label">Стоимость в час </span><span class="product-overview__price"><?php echo carbon_get_cached_post_meta(get_the_ID(), 'price'); ?> ₽/час</span>
          </div>
          <!-- /.product-overview__price-block -->
          <?php if (get_the_excerpt()): ?>
            <div class="product-overview__descr">
              <?php the_excerpt(); ?>
            </div>
            <!-- /.product-overview__descr -->
          <?php endif; ?>
          <hr class="product-overview__hr">
          <form type="submit" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" class="product-form js-form">
            <div class="product-form__title">
              Оставить заявку на аренду спецтехники
            </div>
            <!-- /.product-form__title -->
            <div class="product-form__descr">
              Мы перезвоним в течении 5 минут и уточним детали заказа
            </div>
            <!-- /.product-form__descr -->
            <input type="hidden" name="action" value="site_form">
            <input type="hidden" name="type" value="order_product">
            <div class="product-form__fields">
              <input type="tel" placeholder="Ваш телефон (+7...)" name="phone" class="text-field half-width text-field_form text-field_small-height product-form__input <?php echo @$args['class_input']; ?>">
              <button href="#" class="big-button big-button_accent half-width big-button_small not-button-style flare-parent product-form__button <?php echo @$args['class_button']; ?>">
                <div class="flare">
                  <div class="flare__wrap">
                    <div class="flare__line"></div>
                  </div>
                  <!-- /.flare__wrap -->
                </div>
                <!-- /.flare -->
                <div class="big-button__text flare-neighbor">Заказать аренду</div>
              </button>
              <!-- /.big-button -->
            </div>
            <!-- /.product-form__fields -->
            <div class="privacy-policy left-side contact-from__privacy-policy privacy-policy_small-font">
              Оставляя заявку, Вы соглашаетесь<br class="hide-min-581"> с <a href="#" target="_blank" class="not-link-style">политикой конфиденциальности</a>
            </div>
            <!-- /.privacy-policy -->
          </form>
          <!-- /.product-form -->
          <hr class="product-overview__hr">
          <div class="contacts-row product-overview__contacts">
            <div class="contacts-row__text">
              Либо свяжитесь с нами напрямую
            </div>
            <!-- /.contacts-row__text -->
            <div class="contacts-row__phone">
              <?php get_template_part('template-parts/phone-block', '', [
                'black' => true,
                'small_text' => true
              ]); ?>
            </div>
            <!-- /.contacts-row__phone -->
            <?php get_template_part('template-parts/messengers', '', [
              'near' => true,
              'medium_icons' => true,
              'without_adaptation' => true
            ]); ?>
          </div>
          <!-- /.contacts-row -->
        </div>
        <!-- /.product-overview__info -->
      </div>
      <!-- /.product-overview__container -->
    </div>
    <!-- /.container-size -->
  </section>
  <!-- /.product-overview -->
  <section class="product-info">
    <div class="container-size">
      <div class="product-info__container">
        <div class="product-info__specifications product-info__block">
          <h2 class="product-info__title">
            Характеристики
          </h2>
          <!-- /.product-info__title -->
          <div class="product-specifications">
            <?php $specifications = carbon_get_cached_theme_option('technique_specifications'); ?>
              <?php foreach ($specifications as $specification): ?>
                <?php $specification_data = carbon_get_cached_post_meta(get_the_ID(), 'spec-' . $specification['id']); ?>
                <?php if ($specification_data): ?>
                  <div class="technique-specification product-specifications__item">
                    <div class="technique-specification__content">
                      <div class="technique-specification__name technique-specification__name_without-offset">
                        <?php echo $specification['name']; ?>
                      </div>
                      <!-- /.technique-specification__name -->
                      <div class="technique-specification__data">
                        <?php echo $specification_data; ?> <?php echo @$specification['sign']; ?>
                      </div>
                      <!-- /.technique-specification__data -->
                    </div>
                    <!-- /.technique-specification__content -->
                  </div>
                  <!-- /.technique-specification -->
                <?php endif; ?>
              <?php endforeach; ?>
          </div>
          <!-- /.product-specifications -->
        </div>
        <!-- /.product-info__specifications -->
        <?php if (get_the_content()): ?>
          <div class="product-info__descr product-info__block">
            <h2 class="product-info__title product-info__title_near">
              Описание
            </h2>
            <!-- /.product-info__title -->
            <div class="product-info__descr-content">
              <?php the_content(); ?>
            </div>
            <!-- /.product-info__descr-content -->
          </div>
          <!-- /.product-info__descr -->
        <?php endif; ?>
      </div>
      <!-- /.product-info__container -->
    </div>
    <!-- /.container-size -->
  </section>
  <!-- /.product-info -->

  <?php get_template_part('template-parts/reviews-section', '', [
    'inner_top_padding' => true
  ]); ?>
  <?php get_template_part('template-parts/steps-to-get'); ?>
  <?php get_template_part('template-parts/main-text-section'); ?>
  <?php get_template_part('template-parts/consultation-section'); ?>
  <?php get_template_part('template-parts/contacts-section'); ?>
</main>
<!-- /.site-main -->

<?php get_footer(); ?>