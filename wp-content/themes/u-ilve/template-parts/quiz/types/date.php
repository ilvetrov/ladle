<input
  type="date"
  class="text-field text-field_small js-set-today"
  name="<?php echo $args['question_name']; ?>"
  id="<?php echo $args['question_name']; ?>-date"
  data-quiz-store="<?php echo $args['name']; ?>"
  data-quiz-store-name="<?php echo $args['question']['question']; ?>"
  <?php if ($args['question']['need_action']): ?>
    data-quiz-action-exists="<?php echo $args['question_name']; ?>-exists"
    data-quiz-of="<?php echo $args['name']; ?>"
  <?php endif; ?>
>