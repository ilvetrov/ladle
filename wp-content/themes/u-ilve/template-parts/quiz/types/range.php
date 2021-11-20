<div class="quiz__range-wrap">
  <div class="quiz__range-field">
    <div class="range-field">
      <input
        class="range-field__input hide-number-arrows"
        type="number"
        name="<?php echo $args['question_name'] ?>"
        id="<?php echo $args['question_name'] ?>-input"
        max="<?php echo $args['question']['range_max_value']; ?>"
        min="<?php echo $args['question']['range_min_value']; ?>"
        step="<?php echo $args['question']['range_step']; ?>"
      >
      <label for="<?php echo $args['question_name'] ?>-input" class="range-field__label">
        <?php echo $args['question']['range_plural_name']; ?>
      </label>
      <!-- /.range-field__label -->
    </div>
    <!-- /.range-field -->
  </div>
  <!-- /.quiz__range-field -->
  <div class="quiz__range-slider">
    <div class="range-slider">
      <div class="range-slider__background"></div>
      <div
        class="range-slider__range click-extender-vertical"
        data-range-slider="<?php echo $args['question_name'] ?>-input"
        data-options="<?php echo htmlentities(json_encode([
          'min' => (int) $args['question']['range_min_value'],
          'start' => (int) $args['question']['range_start_value'],
          'max' => (int) $args['question']['range_max_value'],
          'step' => (int) $args['question']['range_step'],
          'singularName' => $args['question']['range_singular_name'],
          'pluralName' => $args['question']['range_plural_name'],
        ])); ?>"
      ></div>
    </div>
    <!-- /.range-slider -->
    <div class="quiz__range-days">
      <div class="quiz__range-day">
        <?php echo $args['question']['range_min_value'] . ' ' . $args['question']['range_singular_name']; ?> 
      </div>
      <!-- /.quiz__range-day -->
      <div class="quiz__range-day">
        <?php echo $args['question']['range_max_value'] . ' ' . $args['question']['range_plural_name']; ?> 
      </div>
      <!-- /.quiz__range-day -->
    </div>
    <!-- /.quiz__range-days -->
  </div>
  <!-- /.quiz__range-slider -->
</div>
<!-- /.quiz__range-wrap -->