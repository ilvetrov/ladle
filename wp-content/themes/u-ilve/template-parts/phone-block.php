<div class="phone-block">
  <div class="phone-block__link-wrap">
    <?php get_template_part('template-parts/phone', '', $args); ?>
  </div>
  <!-- /.phone-block__link-wrap -->
  <div class="
    phone-block__time
    phone-block__time_yellow
    <?php echo @$args['black'] ? 'phone-block__time_black-yellow' : ''; ?>
    <?php echo @$args['small_text'] ? 'phone-block__time_small' : ''; ?>
  ">
    Ежедневно 10:00 — 22:00
  </div>
  <!-- /.phone-block__time -->
</div>
<!-- /.phone-block -->