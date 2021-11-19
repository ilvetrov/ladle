<div class="quiz">
  <div class="quiz__blocks" data-quiz="<?php echo $args['name']; ?>">
    <?php $quiz_questions = carbon_get_cached_theme_option('quiz_questions'); ?>
    <?php foreach ($quiz_questions as $question_order => $question): ?>
      <?php $question_name = $args['name'] . '-' . $question_order; ?>
      <div class="quiz__block <?php echo ($question_order > 0 ? 'hidden-right obedient' : ''); ?>" data-quiz-block="<?php echo $question_order; ?>" data-quiz-of="<?php echo $args['name']; ?>">
        <?php get_template_part('template-parts/quiz/parts/header', '', [
          'question' => $question,
          'questions' => $quiz_questions,
          'current_order' => $question_order,
          'name' => $args['name']
        ]); ?>
        <div class="quiz__content">
          <?php get_template_part('template-parts/quiz/types/' . $question['type'], '', [
            'question' => $question,
            'current_order' => $question_order,
            'name' => $args['name'],
            'question_name' => $question_name
          ]); ?>
        </div>
        <!-- /.quiz__content -->
        <?php get_template_part('template-parts/quiz/parts/footer', '', [
          'question' => $question,
          'current_order' => $question_order,
          'name' => $args['name'],
          'question_name' => $question_name
        ]); ?>
      </div>
      <!-- /.quiz__block -->
    <?php endforeach; ?>
    <div class="quiz__block hidden-right obedient" data-quiz-block="<?php echo count($quiz_questions); ?>" data-quiz-of="<?php echo $args['name']; ?>">
      <?php get_template_part('template-parts/quiz/parts/final', '', $args); ?>
    </div>
    <!-- /.quiz__block -->
  </div>
  <!-- /.quiz__blocks -->
</div>
<!-- /.quiz -->