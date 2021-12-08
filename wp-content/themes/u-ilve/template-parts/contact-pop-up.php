<div class="contact-pop-up pop-up hidden disabled" data-pop-up="<?php echo $args['pop_up_name']; ?>">
  <div class="contact-pop-up__wrap">
    <div class="contact-pop-up__content" data-pop-up-content>
      <img <?php img_async_src('consultation-person.png'); ?> alt="Главный менеджер" class="contact-pop-up__photo">
      <div class="contact-pop-up__header">
        <div class="contact-pop-up__logo-wrap">
          <a href="/" class="logo click-extender">
            <img <?php img_async_src('logo-dark.png'); ?> alt="Ковш" class="contact-pop-up__logo">
          </a>
          <!-- /.logo -->
        </div>
        <!-- /.contact-pop-up__logo-wrap -->
        <div class="contact-pop-up__close-wrap">
          <button class="contact-pop-up__close not-button-style click-extender" data-pop-up-close-button="<?php echo $args['pop_up_name']; ?>">
            <img <?php img_async_src('close-transparent.png'); ?> alt="Закрыть" class="contact-pop-up__close-icon">
          </button>
          <!-- /.contact-pop-up__close -->
        </div>
        <!-- /.contact-pop-up__close-wrap -->
      </div>
      <!-- /.contact-pop-up__header -->
      <div class="contact-pop-up__text-content">
        <div class="contact-pop-up__left-side">
          <div class="contact-pop-up__form">
            <?php get_template_part('template-parts/contact-form', '', $args); ?>
          </div>
          <!-- /.contact-pop-up__form -->
        </div>
        <!-- /.contact-pop-up__left-side -->
        <div class="contact-pop-up__right-side">
          <div class="contact-pop-up__consultation-person">
            <div class="consultation-person-small">
              <div class="consultation-person-small__name">
                Виктория
              </div>
              <!-- /.consultation-person-small__name -->
              <div class="consultation-person-small__position">
                Главный менеджер<br> компании «Ковш»
              </div>
              <!-- /.consultation-person-small__position -->
            </div>
            <!-- /.consultation-person-small -->
          </div>
          <!-- /.contact-pop-up__consultation-person -->
        </div>
        <!-- /.contact-pop-up__right-side -->
      </div>
      <!-- /.contact-pop-up__text-content -->
    </div>
    <!-- /.contact-pop-up__content -->
  </div>
  <!-- /.contact-pop-up__wrap -->
</div>
<!-- /.contact-pop-up -->