<div class="quiz-final">
  <div class="quiz-final__header">
    Готово!
  </div>
  <!-- /.quiz-final__header -->
  <div class="quiz-final__title">
    <?php echo carbon_get_cached_theme_option('quiz_final_title'); ?>
  </div>
  <!-- /.quiz-final__title -->
  <?php if (carbon_get_cached_theme_option('quiz_final_descr')): ?>
    <div class="quiz-final__descr">
      <?php echo carbon_get_cached_theme_option('quiz_final_descr'); ?>
    </div>
    <!-- /.quiz-final__descr -->
  <?php endif; ?>
  <form action="/" class="quiz-final__form">
    <?php if (carbon_get_cached_theme_option('quiz_final_has_name')): ?>
      <input type="text" placeholder="Ваше имя" class="text-field text-field_form quiz-final__input">
    <?php endif; ?>
    <input type="text" placeholder="Ваш телефон (+7...)" class="text-field text-field_form quiz-final__input">
    <button type="submit" class="button-field not-button-style flare-parent">
      <div class="flare">
        <div class="flare__wrap">
          <div class="flare__line"></div>
        </div>
        <!-- /.flare__wrap -->
      </div>
      <!-- /.flare -->
      <span class="flare-neighbor"><?php echo carbon_get_cached_theme_option('quiz_final_button'); ?></span>
    </button>
  </form>
  <!-- /.quiz-final__form -->
  <div class="quiz-final__policy">
    Оставляя заявку, Вы соглашаетесь<br> с <a href="#" target="_blank" class="not-link-style">политикой конфиденциальности</a>
  </div>
  <!-- /.quiz-final__policy -->
</div>
<!-- /.quiz-final -->