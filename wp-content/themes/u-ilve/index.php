<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package u_ilve
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="hello-section" <?php img_async_src('tractor-field.jpg', true, true); ?>>
			<script>document.getElementsByClassName('hello-section')[0].style.setProperty('--header-height', document.getElementsByClassName('header')[0].offsetHeight + 'px');</script>
			<div class="hello-section__wrap">
				<div class="section-backgrounds">
					<div class="hello-tractor">
						<div class="hello-tractor__wrap" style="--image-height:<?php echo get_img_size('tractor.png')[1]; ?>px;">
							<div class="container-size">
								<div class="hello-tractor__container">
									<div class="hello-tractor__message">
										<div class="hello-tractor-message">
											<div class="hello-tractor-message__background-shadow" <?php img_async_src('hello-tractor-message.png', true, true); ?>></div>
											<div class="hello-tractor-message__background-clock">
												<img <?php img_async_src('a-clock.png'); ?> alt="Часы" class="hello-tractor-message__clock-icon">
											</div>
											<!-- /.hello-tractor-message__background-clock -->
											<div class="hello-tractor-message__content">
												При поломке заменим технику <span class="semi-bold">за <span class="accent">24 часа</span></span>
											</div>
											<!-- /.hello-tractor-message__content -->
										</div>
										<!-- /.hello-tractor-message -->
									</div>
									<!-- /.hello-tractor__message -->
								</div>
								<!-- /.hello-tractor__container -->
							</div>
							<!-- /.container-size -->
						</div>
						<!-- /.hello-tractor__wrap -->
						<div class="hello-tractor__image-wrap">
							<img <?php img_async_src('tractor.png'); ?> alt="Трактор" class="hello-tractor__image">
						</div>
						<!-- /.hello-tractor__image-wrap -->
					</div>
					<!-- /.hello-tractor -->
				</div>
				<!-- /.section-backgrounds -->
				<div class="hello-section__container-wrap">
					<div class="container-size">
						<div class="hello-section__container">
							<h1 class="hello-section__title"><strong>Срочная <span class="accent">аренда спецтехники</span></strong> под Ваши задачи с доставкой до объекта</h1>
							<div class="hello-section__descr">
								Вы получите обслуженную, укоплектованную и заправленную технику на Ваш объект с квалифицированным водителем
							</div>
							<!-- /.hello-section__descr -->
							<a href="#" class="big-button big-button_accent not-link-style hello-section__accent-button flare-parent">
								<div class="flare">
									<div class="flare__wrap">
										<div class="flare__line"></div>
									</div>
									<!-- /.flare__wrap -->
								</div>
								<!-- /.flare -->
								<div class="big-button__text flare-neighbor">Получить подбор спецтехники <img <?php img_async_src('right-arrow.png'); ?> alt="Стрелка вперёд" class="big-button__arrow"></div>
							</a>
							<!-- /.big-button -->
							<a href="#" class="big-button not-link-style big-button_wide"><div class="big-button__text">Перейти в каталог</div></a>
							<!-- /.big-button -->
						</div>
						<!-- /.hello-section__container -->
					</div>
					<!-- /.container-size -->
				</div>
				<!-- /.hello-section__container-wrap -->
			</div>
			<!-- /.hello-section__wrap -->
		</section>
		<!-- /.hello-section -->

		<section class="quiz-section"> <!-- 180 -->
			<div class="container-size">
				<div class="quiz-section__container">
					<div class="quiz-section__message">
						<div class="quiz-message">
							Абсолютно бесплатно
						</div>
						<!-- /.quiz-message -->
					</div>
					<!-- /.quiz-section__message -->
					<h2 class="quiz-section__title section-title section-title_center">
						<strong>Пройдите тест-калькулятор <span class="accent">за 1 минуту</span></strong> <br>и получите подбор спецтехники под Ваши задачи
					</h2>
					<!-- /.quiz-section__title -->
					<div class="section-descr section-descr_center quiz-section__descr">
						И закрепите за собой скидку -10% на первый заказ
					</div>
					<!-- /.section-descr -->
					<div class="quiz-wrap">
						<div class="quiz-wrap__quiz">
							<?php get_template_part('template-parts/quiz/index', '', [
								'name' => 'special-equipment'
							]); ?>
						</div>
						<!-- /.quiz-wrap__quiz -->
						<div class="quiz-wrap__benefits">
							<div class="quiz-benefits">
								
							</div>
							<!-- /.quiz-benefits -->
						</div>
						<!-- /.quiz-wrap__benefits -->
					</div>
					<!-- /.quiz-wrap -->
				</div>
				<!-- /.quiz-section__container -->
			</div>
			<!-- /.container-size -->
		</section>
		<!-- /.quiz-section -->

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
