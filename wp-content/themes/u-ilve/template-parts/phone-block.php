<div class="phone-block">
  <div class="phone-block__link-wrap">
    <a
    href="tel:79279353399"
    class="
      phone
      phone-block__link
      not-link-style
      click-extender
      <?php echo @$args['black'] ? 'phone_black' : ''; ?>
      "
    >
      <img <?php img_async_src('phone.png'); ?> alt="Телефон" class="phone-icon phone__icon">
      <span class="phone__number">+7 (927) 935-33-99</span>
    </a>
    <!-- /.phone -->
  </div>
  <!-- /.phone-block__link-wrap -->
  <div class="phone-block__time phone-block__time_yellow <?php echo @$args['black'] ? 'phone-block__time_black-yellow' : ''; ?>">
    Ежедневно 10:00 — 22:00
  </div>
  <!-- /.phone-block__time -->
</div>
<!-- /.phone-block -->