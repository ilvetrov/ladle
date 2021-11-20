<div class="quiz__header">
  <div class="quiz__order">
    <div class="quiz__order-line"></div>
    <?php foreach ($args['questions'] as $question_order => $question): ?>
      <div class="quiz__order-dot-wrap">
        <button 
          class="
            quiz-order-dot quiz__order-dot not-button-style
            <?php echo ($question_order === $args['current_order'] ? 'quiz-order-dot_active' : ''); ?>
            <?php echo ($question_order > $args['current_order'] ? 'blocked' : ''); ?>
            js-quiz-order-dot
          "
          data-quiz-to="<?php echo $question_order; ?>"
          data-quiz-of="<?php echo $args['name']; ?>"
          <?php if ($question_order - $args['current_order'] <= 1): ?>
            data-quiz-action-subscribe="<?php echo $args['question_name']; ?>-exists"
            data-quiz-action-handler="activateNextButton"
            data-quiz-non-action-handler="deactivateNextButton"
          <?php endif; ?>
        >
          <div class="quiz-order-dot__text">
            <?php echo $question_order + 1; ?>
          </div>
          <!-- /.quiz-order-dot__text -->
        </button>
        <!-- /.quiz-order-dot -->
      </div>
      <!-- /.quiz__order-dot-wrap -->
    <?php endforeach; ?>
  </div>
  <!-- /.quiz__order -->
  <div class="quiz__title">
    <?php echo $args['question']['question']; ?>
  </div>
  <!-- /.quiz__title -->
  <div class="quiz__descr">
    <?php echo $args['question']['descr']; ?>
  </div>
  <!-- /.quiz__descr -->
</div>
<!-- /.quiz__header -->