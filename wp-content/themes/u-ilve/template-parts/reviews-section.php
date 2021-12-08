<?php
require_once get_template_directory() . '/inc/remove-whitespaces.php';
?>
<section
  id="reviews"
  class="
    reviews-section
    <?php echo (@$args['inner_top_padding'] ? 'reviews-section_inner-top-padding' : '') ?>
  "
>
  <div class="container-size">
    <div class="reviews-section__container">
      <h2 class="section-title section-title_center reviews-section__title">
        <strong>Наши <span class="accent">клиенты</span> - это</strong> частные лица<br> и строительные компании
      </h2>
      <!-- /.section-title -->
      <div class="section-descr section-descr_center reviews-section__descr">
        Посмотрите видеоотзывы и узнайте что говорят о нашей компании
      </div>
      <!-- /.section-descr -->
      <?php
      $reviews = [
        [
          'video_link' => 'https://www.youtube.com/watch?v=XsVJ8PCV-0M',
          'title' => 'Аренда экскаватора на 2 дня для выкапывания траншеи 7 м',
          'date' => '05.12.21'
        ],
        [
          'video_link' => 'https://youtu.be/XsVJ8PCV-0M',
          'title' => 'Аренда экскаватора на 2 дня для выкапывания траншеи 7 м',
          'date' => '05.12.21'
        ],
        [
          'video_link' => 'https://www.youtube.com/watch?v=XsVJ8PCV-0M',
          'title' => 'Аренда экскаватора на 2 дня для выкапывания траншеи 7 м',
          'date' => '05.12.21'
        ],
      ];
      $reviews = carbon_get_cached_theme_option('reviews_list');
      ?>
      <div class="reviews-section__gallery">
        <div class="adaptive-gallery js-adaptive-gallery">
          <div class="adaptive-gallery__wrap js-adaptive-gallery-wrap">
            <?php foreach ($reviews as $review): ?>
              <?php
              $video_link = $review['video_link'];
              preg_match('/[\/=]([^\/=]+?)$/', $video_link, $video_id_raw);
              $video_id = @$video_id_raw[1];
              $video_image = "https://i.ytimg.com/vi/$video_id/maxresdefault.jpg";
              ?>
              
              <div class="adaptive-gallery__item js-adaptive-gallery-item">
                <div class="review reviews-section__review">
                  <div class="review__video">
                    <?php ob_start(); ?>
                      <div class="review-video-inserted">
                        <div class="waiting-background"></div>
                        <div class="review-video-inserted__container">
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                      </div>
                    <?php $video_embed = ob_get_clean(); ?>
                    <a href="<?php echo $video_link; ?>" class="review-video inactive" target="_blank" onclick="return replaceElementWithDynamicTag(this, false);" data-dynamic-tag="<?php echo htmlspecialchars(remove_whitespaces($video_embed)); ?>" data-dynamic-tag-manual>
                      <div class="review-video__background" <?php img_async_src($video_image, true, true, true); ?>></div>
                      <div class="review-video__control-background"></div>
                      <div class="review-video__control-wrap">
                        <div class="review-video__control">
                          <img <?php img_async_src('video-arrow.png'); ?> alt="Посмотреть" title="Посмотреть">
                        </div>
                        <!-- /.review-video__control -->
                      </div>
                      <!-- /.review-video__control-wrap -->
                    </a>
                    <!-- /.review-video -->
                  </div>
                  <!-- /.review__video -->
                  <a href="<?php echo $video_link; ?>" target="_blank" class="review__title not-link-style">
                    <?php echo $review['title']; ?>
                  </a>
                  <!-- /.review__title -->
                  <div class="review-date review__date">
                    <img <?php img_async_src('date.png'); ?> alt="Календарь" class="review-date__icon"> Дата: <?php echo $review['date']; ?>
                  </div>
                  <!-- /.review-date -->
                </div>
                <!-- /.review -->
              </div>
              <!-- /.adaptive-gallery__item -->
            <?php endforeach; ?>
          </div>
          <!-- /.adaptive-gallery__wrap -->
          <div class="adaptive-gallery__buttons adaptive-gallery__buttons_top">
            <button class="adaptive-gallery__prev-button adaptive-gallery__button not-button-style js-adaptive-gallery-prev">
              <img <?php img_async_src('left-arrow-button.png'); ?> alt="Назад">
            </button>
            <!-- /.adaptive-gallery__prev-button -->
            <button class="adaptive-gallery__next-button adaptive-gallery__button not-button-style js-adaptive-gallery-next">
              <img <?php img_async_src('right-arrow-button.png'); ?> alt="Вперёд">
            </button>
            <!-- /.adaptive-gallery__next-button -->
          </div>
          <!-- /.adaptive-gallery__buttons -->
        </div>
        <!-- /.adaptive-gallery -->
      </div>
      <!-- /.reviews-section__gallery -->
    </div>
    <!-- /.reviews-section__container -->
  </div>
  <!-- /.container-size -->
</section>
<!-- /.reviews-section -->