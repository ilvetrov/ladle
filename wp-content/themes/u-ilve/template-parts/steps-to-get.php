<section class="steps-to-get-section">
  <div class="container-size">
    <div class="steps-to-get-section__container">
      <h2 class="section-title section-title_center steps-to-get-section__title">
        <strong>Как получить <span class="accent">спецтехнику</span></strong><br> и решить задачу на объекте
      </h2>
      <!-- /.section-title -->
      <div class="section-descr section-descr_center steps-to-get-section__descr">
        5 шагов до выполнения
      </div>
      <!-- /.section-descr -->
      <?php
      $steps = [
        [
          'image' => 'keyboard-mouse.png',
          'title' => 'Оставьте заявку',
          'text' => 'Оставьте заявку на сайте, позвоните нам либо напишите в мессенджер',
        ],
        [
          'image' => 'excavator.png',
          'title' => 'Подберём технику',
          'text' => 'Мы позвоним, подберем технику под Ваши задачи и рассчитаем стоимость',
          'non_nature_image' => true,
        ],
        [
          'image' => 'truck.png',
          'title' => 'Доставим технику',
          'text' => 'Выполним доставку спецтехники прямо на Ваш объект бесплатно',
          'non_nature_image' => true,
        ],
        [
          'image' => 'excavator-2.png',
          'title' => 'Выполним работы',
          'text' => 'Опытный водитель спецтехники выполнит все поставленные задачи',
          'non_nature_image' => true,
        ],
      ];
      ?>
      <div class="steps-to-get-section__steps">
        <div class="adaptive-gallery js-adaptive-gallery">
          <div class="adaptive-gallery__wrap js-adaptive-gallery-wrap">
            <?php foreach ($steps as $step_order => $step): ?>
              <div class="adaptive-gallery__item js-adaptive-gallery-item">
                <div class="step-to-get steps-to-get__step">
                  <div class="step-to-get__wrap">
                    <div class="step-to-get__order-wrap">
                      <div class="step-to-get__order-icon" <?php img_async_src('round-wrap.png', true, true); ?>>
                        <div class="step-to-get__order">
                          <?php echo $step_order + 1; ?>
                        </div>
                        <!-- /.step-to-get__order -->
                      </div>
                      <!-- /.step-to-get__order-icon -->
                    </div>
                    <!-- /.step-to-get__order-wrap -->
                    <div class="step-to-get__content">
                      <div class="step-to-get__image-wrap <?php echo @$step['non_nature_image'] ? 'step-to-get__image-wrap_bottom-padding' : ''; ?>">
                        <img <?php img_async_src($step['image']); ?> alt="" class="step-to-get__image">
                      </div>
                      <!-- /.step-to-get__image-wrap -->
                      <div class="step-to-get__text-content">
                        <div class="step-to-get__title">
                          <?php echo $step['title']; ?>
                        </div>
                        <!-- /.step-to-get__title -->
                        <div class="step-to-get__text">
                          <?php echo $step['text']; ?>
                        </div>
                        <!-- /.step-to-get__text -->
                      </div>
                      <!-- /.step-to-get__text-content -->
                    </div>
                    <!-- /.step-to-get__content -->
                  </div>
                  <!-- /.step-to-get__wrap -->
                </div>
                <!-- /.step-to-get -->
              </div>
              <!-- /.adaptive-gallery__item -->
            <?php endforeach; ?>
          </div>
          <!-- /.adaptive-gallery__wrap -->
          <div class="adaptive-gallery__buttons adaptive-gallery__buttons_top">
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
      <!-- /.steps-to-get-section__steps -->

      <div class="steps-to-get-section__call-to-us">
        <div class="steps-to-get-section__call-button steps-to-get-section__call-method">
          <button class="big-button big-button_accent not-button-style flare-parent" data-pop-up-open-button="call-order">
            <div class="flare">
              <div class="flare__wrap">
                <div class="flare__line"></div>
              </div>
              <!-- /.flare__wrap -->
            </div>
            <!-- /.flare -->
            <div class="big-button__text flare-neighbor">Получить консультацию <img <?php img_async_src('right-arrow.png'); ?> alt="Стрелка вперёд" class="big-button__arrow steps-to-get-section__big-button-arrow"></div>
          </button>
          <!-- /.big-button -->
        </div>
        <!-- /.steps-to-get-section__call-button -->
        <div class="steps-to-get-section__contacts">
          <div class="steps-to-get-section__messengers steps-to-get-section__call-method">
            <?php get_template_part('template-parts/messengers', '', [
              'early_min' => true
            ]); ?>
          </div>
          <!-- /.steps-to-get-section__messengers -->
          <div class="steps-to-get-section__phone-block steps-to-get-section__call-method">
            <?php get_template_part('template-parts/phone-block', '', [
              'black' => true
            ]); ?>
          </div>
          <!-- /.steps-to-get-section__phone-block -->
        </div>
        <!-- /.steps-to-get-section__contacts -->
      </div>
      <!-- /.steps-to-get-section__call-to-us -->
    </div>
    <!-- /.steps-to-get-section__container -->
  </div>
  <!-- /.container-size -->
</section>
<!-- /.steps-to-get-section -->