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

		<section class="quiz-section">
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
							<div class="quiz-benefits" <?php img_async_src('quiz-blur.jpg', true, true); ?>>
								<div class="quiz-benefits__person">
									<div class="quiz-person">
										<div class="quiz-person__left-side">
											<div class="quiz-person__position">
												Главный механик
											</div>
											<!-- /.quiz-person__position -->
											<div class="quiz-person__name">
												Андрей Андреевич
											</div>
											<!-- /.quiz-person__name -->
											<div class="quiz-person__descr">
												Подберёт, рассчитает и проконсультирует
											</div>
											<!-- /.quiz-person__descr -->
										</div>
										<!-- /.quiz-person__left-side -->
										<div class="quiz-person__right-side">
											<img <?php img_async_src('person.jpg'); ?> alt="Фотография специалиста" class="quiz-person__image">
										</div>
										<!-- /.quiz-person__right-side -->
									</div>
									<!-- /.quiz-person -->
								</div>
								<!-- /.quiz-benefits__person -->
								<div class="quiz-benefits__content">
									<div class="quiz-benefits__title">
										Здравствуйте!
									</div>
									<!-- /.quiz-benefits__title -->
									<div class="quiz-benefits__descr">
										Ответив на 6 вопросов, <br>Вы можете получить:
									</div>
									<!-- /.quiz-benefits__descr -->
									<?php
									$benefits = [
										[
											'icon' => '',
											'text' => 'Бесплатный подбор спецтехники под задачу'
										],
										[
											'icon' => '',
											'text' => 'Расчёт точной<br> стоимости аренды'
										],
										[
											'icon' => '',
											'text' => 'Точное время прибытия техники на объект'
										],
										[
											'icon' => '',
											'text' => 'Закреплённую скидку<br> -10% на первый заказ'
										],
									];
									?>
									<ul class="quiz-benefits__list">
										<?php foreach ($benefits as $benefit_order => $benefit): ?>
											<li class="quiz-benefits__item quiz-benefit">
												<div class="quiz-benefit__order-wrap">
													<div class="quiz-benefit__order">
														<?php echo $benefit_order + 1; ?>
													</div>
													<!-- /.quiz-benefit__order -->
													<div class="quiz-benefit__icon">
	
													</div>
													<!-- /.quiz-benefit__icon -->
												</div>
												<!-- /.quiz-benefit__order-wrap -->
												<div class="quiz-benefit__text">
													<?php echo $benefit['text']; ?>
												</div>
												<!-- /.quiz-benefit__text -->
											</li>
											<!-- /.quiz-benefits__item -->
										<?php endforeach; ?>

									</ul>
									<!-- /.quiz-benefits__list -->
								</div>
								<!-- /.quiz-benefits__content -->
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

		<section class="other-companies" <?php img_async_src('other-companies.jpg', true, true); ?>>
			<div class="container-size">
				<div class="other-companies__container">
					<div class="other-companies__content">
						<div class="other-companies__left-side">
							<h2 class="section-title section-title_white">
								<strong>Примерно <span class="accent">87% компаний</span></strong> недобросовестно относятся к своим заказчикам
							</h2>
							<!-- /.section-title -->
						</div>
						<!-- /.other-companies__left-side -->
						<div class="other-companies__right-side">
							<div class="other-companies__problems">
								<div class="other-companies-problems">
									<div class="other-companies-problems__content">
										<?php
										$problems = [
											'Дают старую и неисправную технику',
											'За рулём непрофессиональные водители',
											'При поломке можно ждать замену до 5 дней',
											'И много других головных болей',
										];
										?>
										<ul class="other-companies-problems__list">
											<?php foreach ($problems as $problem): ?>
												<li class="other-companies-problems__item">
													<img <?php img_async_src('blue-cross.png'); ?> alt="" class="other-companies-problems__icon">
													<div class="other-companies-problems__item-text">
														<?php echo $problem; ?>
													</div>
													<!-- /.other-companies-problems__item-text -->
												</li>
												<!-- /.other-companies-problems__item -->
											<?php endforeach; ?>
										</ul>
										<!-- /.other-companies-problems__list -->
										<div class="other-companies-problems__our-experience">
											<div class="other-companies-our-experience">
												<div class="other-companies-our-experience__arrow"></div>
												<div class="other-companies-our-experience__content">
													<strong>“Мы знаем это, потому что</strong> раньше мы были строительной компанией и часто встречались с данными проблемами!<strong>”</strong>
												</div>
												<!-- /.other-companies-our-experience__content -->
											</div>
											<!-- /.other-companies-our-experience -->
										</div>
										<!-- /.other-companies-problems__our-experience -->
									</div>
									<!-- /.other-companies-problems__content -->
								</div>
								<!-- /.other-companies-problems -->
							</div>
							<!-- /.other-companies__problems -->
						</div>
						<!-- /.other-companies__right-side -->
					</div>
					<!-- /.other-companies__content -->
					<div class="other-companies__background">
						<img <?php img_async_src('other-technique.png'); ?> alt="Трактор" class="other-companies__background-img">
					</div>
					<!-- /.other-companies__background -->
				</div>
				<!-- /.other-companies__container -->
			</div>
			<!-- /.container-size -->

		</section>
		<!-- /.other-companies -->

		<section class="about-us">
			<div class="container-size">
				<div class="about-us__container">
					<div class="about-us__title">
						<h2 class="section-title section-title_center">
							<strong>Благодаря опыту и выполнению<br> уже <span class="accent">более 2000 заказов,</span></strong> мы точно знаем,<br> какой сервис необходим нашим клиентам
						</h2>
						<!-- /.section-title -->
					</div>
					<!-- /.about-us__title -->
					<div class="about-us__descr">
						<div class="section-descr section-descr_center">
							Вы получаете ответственный и индивидуальный подход к Вашему заказу
						</div>
						<!-- /.section-descr -->
					</div>
					<!-- /.about-us__descr -->
					<?php
					$about_us_benefits = [
						[
							'icon' => 'new-technique.png',
							'title' => '<span class="accent">Новая техника</span><br> на Вашем объекте',
							'descr' => 'Перед доставкой до объекта<br> техника обслуживается, укоплектовывается и заправляется'
						],
						[
							'icon' => 'fast-delivery.png',
							'title' => '<span class="accent">Быстрая доставка</span><br> в день обращения',
							'descr' => 'А так же бесплатная замена спецтехники в течении 24 часов, при поломке или неисправности'
						],
						[
							'icon' => 'professionals.png',
							'title' => '<span class="accent">Профессиональный экипаж</span><br> с опытом и квалификацией',
							'descr' => 'Каждые 2 месяца проводим переаттестацию наших водителей, с повышением квалификации'
						],
						[
							'icon' => 'free-consultation.png',
							'title' => '<span class="accent">Бесплатный подбор</span><br> и консультация',
							'descr' => 'Вы можете обратиться к нам и мы бесплатно подберем, рассчитаем и прокконсультируем'
						],
						[
							'icon' => 'all-official.png',
							'title' => '<span class="accent">Официальный договор</span><br> и закрывающие документы',
							'descr' => 'Мы официальная компания, которая работает по договору с соблюдением всех обязанностей'
						],
						[
							'icon' => 'good-price.png',
							'title' => '<span class="accent">Приятная цена</span><br> и партнерские условия',
							'descr' => 'Цена не изменяется в течении аренды, а так же даём скидки, при постоянном обращении'
						],
					];
					?>
					<div class="about-us__benefits">
						<div class="adaptive-gallery">
							<div class="adaptive-gallery__wrap">
								<?php foreach ($about_us_benefits as $benefit): ?>
									<div class="adaptive-gallery__item">
										<div class="our-benefit about-us__benefit">
											<div class="our-benefit__icon">
												<img <?php img_async_src($benefit['icon']); ?> alt="">
											</div>
											<!-- /.our-benefit__icon -->
											<div class="our-benefit__content">
												<div class="our-benefit__title">
													<?php echo $benefit['title']; ?>
												</div>
												<!-- /.our-benefit__title -->
												<div class="our-benefit__descr">
													<?php echo $benefit['descr']; ?>
												</div>
												<!-- /.our-benefit__descr -->
											</div>
											<!-- /.our-benefit__content -->
										</div>
										<!-- /.our-benefit -->
									</div>
									<!-- /.adaptive-gallery__item -->
								<?php endforeach; ?>
							</div>
							<!-- /.adaptive-gallery__wrap -->
						</div>
						<!-- /.adaptive-gallery -->
					</div>
					<!-- /.about-us__benefits -->
				</div>
				<!-- /.about-us__container -->
			</div>
			<!-- /.container-size -->
		</section>
		<!-- /.about-us -->

		<section class="our-technique">
			<div class="container-size">
				<div class="our-technique__container">
					<div class="our-technique__title">
						<h2 class="section-title section-title_center">
							<strong><span class="accent">Собственная</span> аттестованная спецтехника</strong>
						</h2>
						<!-- /.section-title -->
					</div>
					<!-- /.our-technique__title -->
					<div class="our-technique__descr">
						<div class="section-descr section-descr_center">
							Личный состав проходит медпроверку ежедневно
						</div>
						<!-- /.section-descr -->
					</div>
					<!-- /.our-technique__descr -->
					<?php
					$our_technique = get_posts([
						'post_type' => 'technique'
					]);
					?>
					<div class="adaptive-gallery">
						<div class="adaptive-gallery__wrap">
							<?php foreach ($our_technique as $technique): ?>
								<div class="adaptive-gallery__item">
									<div class="technique-preview">
										<div class="technique-preview__background"></div>
										<div class="technique-preview__wrap">
											<div class="technique-preview__image-wrap">
												<img
													<?php img_async_src(wp_get_attachment_image_url(carbon_get_cached_post_meta($technique->ID, 'hello_image'), 'full'), true, false, true); ?>
													alt="<?php echo $technique->post_title; ?>"
													class="technique-preview__image"
												>
											</div>
											<!-- /.technique-preview__image-wrap -->
											<div class="technique-preview__content">
												<div class="technique-preview__title">
													<?php if (carbon_get_cached_post_meta($technique->ID, 'separate_type') && carbon_get_cached_post_meta($technique->ID, 'separate_name')): ?>
														<div><?php echo carbon_get_cached_post_meta($technique->ID, 'separate_type'); ?></div>
														<div><?php echo carbon_get_cached_post_meta($technique->ID, 'separate_name'); ?></div>
													<?php else: ?>
														<?php echo $technique->post_title ?>
													<?php endif; ?>
												</div>
												<!-- /.technique-preview__title -->
												<div class="technique-preview__specifications">
													<?php $specifications = carbon_get_cached_theme_option('technique_specifications'); ?>
													<?php foreach ($specifications as $specification): ?>
														<?php $specification_data = carbon_get_cached_post_meta($technique->ID, 'spec-' . $specification['id']); ?>
														<?php if ($specification_data): ?>
															<div class="technique-specification technique-preview__specification">
																<div class="technique-specification__content">
																	<div class="technique-specification__name">
																		<?php echo $specification['name']; ?>
																	</div>
																	<!-- /.technique-specification__name -->
																	<div class="technique-specification__data">
																		<?php echo $specification_data; ?> <?php echo @$specification['sign']; ?>
																	</div>
																	<!-- /.technique-specification__data -->
																</div>
																<!-- /.technique-specification__content -->
															</div>
															<!-- /.technique-specification -->
														<?php endif; ?>
													<?php endforeach; ?>
												</div>
												<!-- /.technique-preview__specifications -->
												<div class="technique-preview__price-wrap">
													<div class="technique-preview__price-text">
														Стоимость в час
													</div>
													<!-- /.technique-preview__price-text -->
													<div class="technique-preview__price">
														<?php echo carbon_get_cached_post_meta($technique->ID, 'price'); ?> ₽/час
													</div>
													<!-- /.technique-preview__price -->
												</div>
												<!-- /.technique-preview__price-wrap -->
												<div class="technique-preview__buttons">
													<button class="mini-button mini-button_accent not-button-style technique-preview__button">
														Заказать
													</button>
													<!-- /.mini-button -->
													<button class="mini-button mini-button_secondary not-button-style technique-preview__button">
														Подробнее
													</button>
													<!-- /.mini-button -->
												</div>
												<!-- /.technique-preview__buttons -->
												<div class="technique-preview__calc-appeal-wrap">
													<a href="#" class="technique-preview__calc-appeal not-link-style">
														Получить подбор спецтехники
													</a>
													<!-- /.technique-preview__calc-appeal -->
												</div>
												<!-- /.technique-preview__calc-appeal-wrap -->
											</div>
											<!-- /.technique-preview__content -->
										</div>
										<!-- /.technique-preview__wrap -->
									</div>
									<!-- /.technique-preview -->
								</div>
								<!-- /.adaptive-gallery__item -->
							<?php endforeach; ?>
						</div>
						<!-- /.adaptive-gallery__wrap -->
					</div>
					<!-- /.adaptive-gallery -->
				</div>
				<!-- /.our-technique__container -->
			</div>
			<!-- /.container-size -->
		</section>
		<!-- /.our-technique -->
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
