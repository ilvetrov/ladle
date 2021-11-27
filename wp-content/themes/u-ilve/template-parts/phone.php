<a
  href="tel:79279353399"
  class="
    phone
    phone-block__link
    not-link-style
    click-extender
    <?php echo @$args['black'] ? 'phone_black' : ''; ?>
    <?php echo @$args['big_text'] ? 'phone_big-text' : ''; ?>
    <?php echo @$args['small_text'] ? 'phone_small-text' : ''; ?>
  "
>
  <?php if (!@$args['without_icon']): ?>
    <img <?php img_async_src(@$args['red_icon'] ? 'phone-red.png' : 'phone.png'); ?> alt="Телефон" class="phone-icon phone__icon <?php echo @$args['red_icon'] ? 'phone-icon_red' : ''; ?>">
  <?php endif; ?>
  <span class="phone__number">+7 (927) 935-33-99</span>
</a>
<!-- /.phone -->