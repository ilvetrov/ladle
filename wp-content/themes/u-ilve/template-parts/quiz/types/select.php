<div class="quiz__answers">
  <?php foreach ($args['question']['select_answers'] as $answer_order => $answer): ?>
    <?php $answer_name = $args['question_name'] . $answer_order; ?>
    <div class="quiz__answer">
      <label class="quiz-answer" for="<?php echo $answer_name; ?>">
        <input
          type="<?php echo $args['question']['select_is_multi'] ? 'checkbox' : 'radio'; ?>"
          class="quiz-answer__tech-checkbox tech-checkbox"
          name="<?php echo $args['question']['select_is_multi'] ? $answer_name : $args['question_name']; ?>"
          id="<?php echo $answer_name; ?>"
          <?php echo ($answer['checked'] ? 'checked' : ''); ?>
          data-quiz-store="<?php echo $args['name']; ?>"
          data-quiz-value="<?php echo $answer['text']; ?>"
          data-quiz-action-exists="<?php echo $args['question_name']; ?>-exists"
          data-quiz-of="<?php echo $args['name']; ?>"
        >
        <div class="quiz-answer__content">
          <div class="quiz-answer__checkbox"></div>
          <div class="quiz-answer__text">
            <?php echo $answer['text']; ?>
          </div>
          <!-- /.quiz-answer__text -->
        </div>
        <!-- /.quiz-answer__content -->
      </label>
      <!-- /.quiz-answer -->
    </div>
    <!-- /.quiz__answer -->
  <?php endforeach; ?>
</div>
<!-- /.quiz__answers -->