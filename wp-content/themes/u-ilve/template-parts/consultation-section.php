<section class="consultation-section" id="consultation" <?php img_async_src('consultation-background.jpg', true, true); ?>>
  <div class="container-size">
    <div class="consultation-section__container">
      <div class="consultation-section__left-side">
        <div class="consultation-section__desktop-static">
          <h2 class="section-title section-title_white consultation-section__title non-containerized">
            <strong>Получите <span class="accent">бесплатную</span></strong><br> консультацию специалиста
          </h2>
          <!-- /.section-title -->
          <div class="section-descr section-descr_white  consultation-section__descr">
            И закрепите за собой скидку <span class="semi-bold">-10% на первый заказ</span>
          </div>
          <!-- /.section-descr -->
        </div>
        <!-- /.consultation-section__desktop-static -->
        <div class="consultation-person consultation-section__person-block">
          <img <?php img_async_src('consultation-person.png'); ?> alt="Главный менеджер" class="consultation-person__photo">
          <div class="consultation-person__name-block">
            <div class="consultation-person__name">
              Виктория
            </div>
            <!-- /.consultation-person__name -->
            <div class="consultation-person__position">
              Главный менеджер<br> компании «Ковш»
            </div>
            <!-- /.consultation-person__position -->
          </div>
          <!-- /.consultation-person__name-block -->
        </div>
        <!-- /.consultation-person -->
        <div class="consultation-section__desktop-static">
          <div class="consultation-section__specialist-benefits">
            <div class="consultation-specialist-benefits">
              <div class="consultation-specialist-benefits__title">
                Виктория Вам поможет:
              </div>
              <!-- /.consultation-specialist-benefits__title -->
              <div class="consultation-specialist-benefits__benefits">

                <div class="consultation-specialist-benefits__benefit">
                  <div class="benefit-small benefit-small_wide">
                    <div class="benefit-small__icon benefit-icon" <?php img_async_src('round-wrap.png', true, true); ?>>
                      <img <?php img_async_src('excavator-icon.png') ?> alt="" class="benefit-icon__inner">
                    </div>
                    <!-- /.benefit-small__icon -->
                    <div class="benefit-small__descr">
                      Подобрать технику под Ваши запросы
                    </div>
                    <!-- /.benefit-small__descr -->
                  </div>
                  <!-- /.benefit-small -->
                </div>
                <!-- /.consultation-specialist-benefits__benefit -->
                <div class="consultation-specialist-benefits__benefit">
                  <div class="benefit-small benefit-small_wide">
                    <div class="benefit-small__icon benefit-icon" <?php img_async_src('round-wrap.png', true, true); ?>>
                      <img <?php img_async_src('calculator-icon.png') ?> alt="" class="benefit-icon__inner">
                    </div>
                    <!-- /.benefit-small__icon -->
                    <div class="benefit-small__descr">
                      Рассчитать стоимость аренды спецтехники
                    </div>
                    <!-- /.benefit-small__descr -->
                  </div>
                  <!-- /.benefit-small -->
                </div>
                <!-- /.consultation-specialist-benefits__benefit -->
                <div class="consultation-specialist-benefits__benefit">
                  <div class="benefit-small benefit-small_wide">
                    <div class="benefit-small__icon benefit-icon" <?php img_async_src('round-wrap.png', true, true); ?>>
                      <img <?php img_async_src('discount-icon.png') ?> alt="" class="benefit-icon__inner">
                    </div>
                    <!-- /.benefit-small__icon -->
                    <div class="benefit-small__descr">
                      Закрепит за Вами скидку 10% на заказ
                    </div>
                    <!-- /.benefit-small__descr -->
                  </div>
                  <!-- /.benefit-small -->
                </div>
                <!-- /.consultation-specialist-benefits__benefit -->
                <div class="consultation-specialist-benefits__benefit">
                  <div class="benefit-small benefit-small_wide">
                    <div class="benefit-small__icon benefit-icon" <?php img_async_src('round-wrap.png', true, true); ?>>
                      <img <?php img_async_src('question-icon.png') ?> alt="" class="benefit-icon__inner">
                    </div>
                    <!-- /.benefit-small__icon -->
                    <div class="benefit-small__descr">
                      Ответить на все актуальные вопросы
                    </div>
                    <!-- /.benefit-small__descr -->
                  </div>
                  <!-- /.benefit-small -->
                </div>
                <!-- /.consultation-specialist-benefits__benefit -->

              </div>
              <!-- /.consultation-specialist-benefits__benefits -->
            </div>
            <!-- /.consultation-specialist-benefits -->
          </div>
          <!-- /.consultation-section__specialist-benefits -->
        </div>
        <!-- /.consultation-section__desktop-static -->
      </div>
      <!-- /.consultation-section__left-side -->

      <div class="consultation-section__right-side">
        <div class="consultation-section__form">
          <?php get_template_part('template-parts/contact-form', '', [
            'title_text' => 'Оставьте заявку',
            'descr_text' => 'На бесплатный подбор,<br> консультацию и скидку',
            'button_text' => 'Получить консультацию',
            'success_goal' => 'consultation'
          ]); ?>
        </div>
        <!-- /.consultation-section__form -->
        <div class="row-contact-us consultation-section__contact-us">
          <div class="row-contact-us__title">
            Либо свяжитесь с нами напрямую
          </div>
          <!-- /.row-contact-us__title -->
          <div class="row-contact-us__methods">
            <div class="row-contact-us__messengers">
              <?php get_template_part('template-parts/messengers', '', [
                'early_min' => true
              ]); ?>
            </div>
            <!-- /.row-contact-us__messengers -->
            <div class="row-contact-us__phone-block">
              <?php get_template_part('template-parts/phone-block'); ?>
            </div>
            <!-- /.row-contact-us__phone-block -->
          </div>
          <!-- /.row-contact-us__methods -->
        </div>
        <!-- /.consultation-contact-us -->
      </div>
      <!-- /.consultation-section__right-side -->
    </div>
    <!-- /.consultation-section__container -->
  </div>
  <!-- /.container-size -->
</section>
<!-- /.consultation-section -->