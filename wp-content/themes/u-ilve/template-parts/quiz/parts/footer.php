<div class="quiz__footer">
  <div class="quiz__buttons">
    <?php if ($args['current_order'] === 0): ?>
      <div class="void"></div>
    <?php else: ?>
      <div class="quiz__button">
        <button class="mini-button not-button-style flare-parent" data-quiz-to="<?php echo $args['current_order'] - 1; ?>" data-quiz-of="<?php echo $args['name']; ?>">
          <div class="mini-button__text flare-neighbor">Вернуться</div>
        </button>
        <!-- /.mini-button -->
      </div>
      <!-- /.quiz__button -->
    <?php endif; ?>
    <div class="quiz__button <?php echo ($args['current_order'] === 0 ? 'quiz__button_single' : ''); ?>">
      <button
        class="
          mini-button
          flare-parent
          not-button-style
          <?php if ($args['question']['need_action']): ?>
            blocked
          <?php else: ?>
            mini-button_accent
          <?php endif; ?>
        "
        data-quiz-to="<?php echo $args['current_order'] + 1; ?>"
        data-quiz-of="<?php echo $args['name']; ?>"
        <?php if ($args['question']['need_action']): ?>
          data-quiz-action-subscribe="<?php echo $args['question_name']; ?>-exists"
          data-quiz-action-handler="activateNextButton"
          data-quiz-non-action-handler="deactivateNextButton"
        <?php endif; ?>
      >
        <div class="flare flare_one-time">
          <div class="flare__wrap">
            <div class="flare__line"></div>
          </div>
          <!-- /.flare__wrap -->
        </div>
        <!-- /.flare -->
        <div class="mini-button__text flare-neighbor">Далее <img <?php img_async_src('mini-arrow.png'); ?> alt="Стрелка вперёд" class="mini-button__arrow"></div>
      </button>
      <!-- /.mini-button -->
    </div>
    <!-- /.quiz__button -->
  </div>
  <!-- /.quiz__buttons -->
</div>
<!-- /.quiz__footer -->