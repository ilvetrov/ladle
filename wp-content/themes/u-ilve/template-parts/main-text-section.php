<section class="main-text-section">
  <div class="container-size">
    <div class="main-text-section__container">
      <h2 class="main-text-section__title rich-content">
        <?php if (get_the_ID() && carbon_get_cached_post_meta(get_the_ID(), 'seo_section_local_text')) { ?>
          <?php echo_rich_text(carbon_get_cached_post_meta(get_the_ID(), 'seo_section_local_title')); ?>
        <?php } else { ?>
          <?php echo_rich_text(carbon_get_cached_theme_option('seo_section_title')); ?>
        <?php } ?>
      </h2>
      <!-- /.main-text-section__title -->
      <h2 class="main-text-section__text rich-content">
        <?php if (get_the_ID() && carbon_get_cached_post_meta(get_the_ID(), 'seo_section_local_text')) { ?>
          <?php echo_rich_text(carbon_get_cached_post_meta(get_the_ID(), 'seo_section_local_text')); ?>
        <?php } else { ?>
          <?php echo_rich_text(carbon_get_cached_theme_option('seo_section_text')); ?>
        <?php } ?>
      </h2>
      <!-- /.main-text-section__text -->
    </div>
    <!-- /.main-text-section__container -->
  </div>
  <!-- /.container-size -->
</section>
<!-- /.main-text-section -->