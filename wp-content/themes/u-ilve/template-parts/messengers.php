<ul
class="
  messengers <?php echo @$args['early_min'] ? 'messengers_early-min' : ''; ?>
"
>
  <li
  class="
    messengers__item
    <?php echo (@$args['near'] ? 'messengers__item_near' : ''); ?>
    <?php echo (@$args['without_adaptation'] ? 'without-adaptation' : ''); ?>
  "
  >
    <a href="https://t.me/" target="_blank"
    class="
      messengers__link click-extender click-extender_small
    "
    >
      <img <?php img_async_src('tg.png'); ?> alt="Telegram"
      class="
        messengers__icon
        <?php echo (@$args['small_icons'] ? 'messengers__icon_small' : ''); ?>
        <?php echo (@$args['medium_icons'] ? 'messengers__icon_medium' : ''); ?>
        <?php echo (@$args['without_adaptation'] ? 'without-adaptation' : ''); ?>
      ">
    </a>
    <!-- /.messengers__link -->
  </li>
  <!-- /.messengers__item -->
  <li
  class="
    messengers__item
    <?php echo (@$args['near'] ? 'messengers__item_near' : ''); ?>
    <?php echo (@$args['without_adaptation'] ? 'without-adaptation' : ''); ?>
  "
  >
    <a href="https://wa.me/79279353399" target="_blank"
    class="
      messengers__link click-extender click-extender_small
    "
    >
      <img <?php img_async_src('whatsapp.png'); ?> alt="WhatsApp"
      class="
        messengers__icon
        <?php echo (@$args['small_icons'] ? 'messengers__icon_small' : ''); ?>
        <?php echo (@$args['medium_icons'] ? 'messengers__icon_medium' : ''); ?>
        <?php echo (@$args['without_adaptation'] ? 'without-adaptation' : ''); ?>
      ">
    </a>
    <!-- /.messengers__link -->
  </li>
  <!-- /.messengers__item -->
  <li
  class="
    messengers__item
    <?php echo (@$args['near'] ? 'messengers__item_near' : ''); ?>
    <?php echo (@$args['without_adaptation'] ? 'without-adaptation' : ''); ?>
  "
  >
    <a href="viber://chat/?number=%279279353399""
    class="
      messengers__link click-extender click-extender_small
    "
    >
      <img <?php img_async_src('viber.png'); ?> alt="Viber"
      class="
        messengers__icon
        <?php echo (@$args['small_icons'] ? 'messengers__icon_small' : ''); ?>
        <?php echo (@$args['medium_icons'] ? 'messengers__icon_medium' : ''); ?>
        <?php echo (@$args['without_adaptation'] ? 'without-adaptation' : ''); ?>
      ">
    </a>
    <!-- /.messengers__link -->
  </li>
  <!-- /.messengers__item -->
</ul>
<!-- /.messengers -->