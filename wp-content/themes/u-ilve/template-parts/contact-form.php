<form
  action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
  method="POST"
  class="contact-form js-form <?php echo @$args['class_form']; ?>"
  <?php if (@$args['success_goal'] || @$args['pop_up_name']): ?>
    success-goal="<?php echo @$args['success_goal'] ?? $args['pop_up_name']; ?>"
  <?php endif; ?>
>
  <div class="contact-form__title <?php echo @$args['class_title']; ?>">
    <?php echo $args['title_text']; ?>
  </div>
  <!-- /.contact-form__title -->
  <div class="contact-form__descr <?php echo @$args['class_descr']; ?>">
    <?php echo $args['descr_text']; ?>
  </div>
  <!-- /.contact-form__descr -->
  <input type="tel" placeholder="Ваш телефон (+7...)" name="phone" class="text-field text-field_form text-field_small-height contact-form__input <?php echo @$args['class_input']; ?>">
  <button type="submit" class="big-button big-button_accent big-button_all-width big-button_small not-link-style flare-parent not-button-style contact-form__button <?php echo @$args['class_button']; ?>">
    <div class="flare">
      <div class="flare__wrap">
        <div class="flare__line"></div>
      </div>
      <!-- /.flare__wrap -->
    </div>
    <!-- /.flare -->
    <div class="big-button__text flare-neighbor"><?php echo $args['button_text']; ?></div>
  </button>
  <!-- /.big-button -->
  <input type="hidden" name="action" value="site_form">
  <input type="hidden" name="type" value="order_call">
  <div class="privacy-policy-text privacy-policy_darker contact-from__privacy-policy <?php echo @$args['class_privacy_policy']; ?>">
    Оставляя заявку, Вы соглашаетесь<br> с <a href="/privacy-policy" target="_blank" class="not-link-style">политикой конфиденциальности</a>
  </div>
  <!-- /.privacy-policy-text -->
</form>
<!-- /.contact-form -->