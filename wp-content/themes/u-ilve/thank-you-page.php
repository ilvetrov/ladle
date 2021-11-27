<?php
/*
Template Name: Страница благодарности
*/

get_header('', [
  'without_top_level_buttons' => true
]);
?>

<main class="site-main">
  <section class="text-img-page" <?php img_async_src('tractor-field.jpg', true, true); ?>>
    <script>document.getElementsByClassName('text-img-page')[0].style.setProperty('--header-height', document.getElementsByClassName('header')[0].offsetHeight + 'px');</script>
    <div class="text-img-page__shadow-background"></div>
    <div class="container-size">
      <div class="text-img-page__container">
        <div class="text-img-page__background" <?php img_async_src('instagram.png', true, true); ?>></div>
        <div class="text-img-page__content">
          <h1 class="text-img-page__upper-title">
            <strong>Спасибо! Ваша заявка принята!</strong>
          </h1>
          <!-- /.text-img-page__upper-title -->
          <div class="text-img-page__upper-descr">
            Мы перезвоним в течении 5 минут
          </div>
          <!-- /.text-img-page__upper-descr -->
          <h2 class="text-img-page__title">
            <strong><span class="accent">А пока что</span> подписывайтесь</strong>
          </h2>
          <!-- /.text-img-page__title -->
          <div class="text-img-page__descr">
            На страницу Instagram и будьте в курсе<br class="hide-max-400"> всех акций, скидок и новостей
          </div>
          <!-- /.text-img-page__descr -->
          <div class="text-img-page__buttons">
            <a href="https://www.instagram.com/kowsh.bery" class="big-button big-button_accent not-link-style text-img-page__accent-button flare-parent">
              <div class="flare">
                <div class="flare__wrap">
                  <div class="flare__line"></div>
                </div>
                <!-- /.flare__wrap -->
              </div>
              <!-- /.flare -->
              <div class="big-button__text flare-neighbor">Подписаться в Instagram</div>
            </a>
            <!-- /.big-button -->
            <a href="/" class="big-button not-link-style big-button_wide"><div class="big-button__text">Вернуться на главную</div></a>
            <!-- /.big-button -->
          </div>
          <!-- /.text-img-page__buttons -->
        </div>
        <!-- /.text-img-page__content -->
      </div>
      <!-- /.text-img-page__container -->
    </div>
    <!-- /.container-size -->
  </section>
  <!-- /.text-img-page -->
</main>
<!-- /.site-main -->

<?php
get_footer();
?>