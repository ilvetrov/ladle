<input
  type="text"
  class="quiz__text-field text-field"
  data-quiz-action-exists="<?php echo $args['question_name']; ?>-exists"
  data-quiz-of="<?php echo $args['name']; ?>"
  data-quiz-store="<?php echo $args['name']; ?>"
  data-quiz-store-name="<?php echo $args['question']['question']; ?>"
  <?php if (@$args['question']['text_field_placeholder']): ?>
    placeholder="<?php echo $args['question']['text_field_placeholder']; ?>"
  <?php endif; ?>
>