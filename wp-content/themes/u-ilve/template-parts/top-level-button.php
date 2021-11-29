<<?php echo @$args['link'] ? ('a href="' . $args['link'] . '" ') : 'div '; ?>
class="top-level-button not-link-style"
<?php if (@$args['pop-up']) echo ('data-pop-up-open-button="' . $args['pop-up'] . '"'); ?>
>
  <div
    class="
      top-level-button__content
      <?php echo (!@$args['icon'] ? 'without-icon' : ''); ?>
      <?php echo (!@$args['text'] ? 'without-text' : ''); ?>
    "
  >
    <?php if (@$args['text']): ?>
      <div class="top-level-button__text">
        <?php echo $args['text']; ?>
      </div>
      <!-- /.top-level-button__text -->
    <?php endif; ?>
    <?php if (@$args['icon']): ?>
      <img <?php img_async_src($args['icon']); ?> alt="" class="top-level-button__icon">
    <?php endif; ?>
  </div>
  <!-- /.top-level-button__content -->
</<?php echo @$args['link'] ? 'a' : 'div'; ?>>
<!-- /.top-level-button -->