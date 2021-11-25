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
								<div class="hello-tractor__container dys-hello-tractor-container">
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
						<div class="hello-tractor__image-wrap dys-hello-tractor">
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
								<div class="big-button__text flare-neighbor">Получить подбор спецтехники <img <?php img_async_src('right-arrow.png'); ?> alt="Стрелка вперёд" class="big-button__arrow big-button__arrow_too-big-for-mobile"></div>
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
						<strong>Пройдите<br class="hide-min-616"> тест-калькулятор <span class="accent">за 1 минуту</span></strong> <br class="hide-max-615">и получите подбор спецтехники под Ваши задачи
					</h2>
					<!-- /.quiz-section__title -->
					<div class="section-descr section-descr_center quiz-section__descr">
						И закрепите за собой скидку -10% на первый заказ
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
											'icon' => 'excavator-icon.png',
											'text' => 'Бесплатный подбор спецтехники под задачу'
										],
										[
											'icon' => 'calculator-icon.png',
											'text' => 'Расчёт точной<br> стоимости аренды'
										],
										[
											'icon' => 'time-icon.png',
											'text' => 'Точное время прибытия техники на объект'
										],
										[
											'icon' => 'discount-icon.png',
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
														<div class="benefit-icon" <?php img_async_src('round-wrap.png', true, true); ?>>
															<img <?php img_async_src($benefit['icon']) ?> alt="" class="benefit-icon__inner">
														</div>
														<!-- /.benefit-icon -->
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
								<strong>Примерно <span class="accent">87% компаний</span></strong> недобросовестно относятся к своим заказчикам
							</h2>
							<!-- /.section-title -->
						</div>
						<!-- /.other-companies__left-side -->
						<div class="other-companies__right-side">
							<div class="other-companies__background">
								<img <?php img_async_src('other-technique.png'); ?> alt="Трактор" class="other-companies__background-img">
							</div>
							<!-- /.other-companies__background -->
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
													<button class="mini-button mini-button_accent not-button-style technique-preview__button" data-pop-up-open-button="rent-order">
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

		<section class="founder-section" <?php img_async_src('founder-background.jpg', true, true); ?>>
			<div class="container-size">
				<div class="founder-section__container">
					<div class="founder-section__logo-background">
						<img <?php img_async_src('logo-founder-background.png'); ?> alt="">
					</div>
					<!-- /.founder-section__logo-background -->
					<div class="founder-section__person-background">
						<div class="founder-section__person-wrap">
							<img <?php img_async_src('founder.png'); ?> alt="Виктор Викторович — компания Ковш">
						</div>
						<!-- /.founder-section__person-wrap -->
					</div>
					<!-- /.founder-section__person-background -->
					<div class="founder-section__wrap">
						<h2 class="section-title section-title_white founder-section__title">
							<strong>Здравствуйте, я Виктор Викторович</strong>
						</h2>
						<!-- /.section-title -->
						<div class="section-descr section-descr_white founder-section__descr">
							Основатель компании “Ковш” по аренде<br> собственной спецтехники в городе Уфа
						</div>
						<!-- /.section-descr -->
						<div class="founder-section__about-block">
							<div class="founder-about-company founder-section__text-about-us">
								<div class="founder-about-title founder-about-company__title">
									<strong><span class="accent">В двух словах о том,</span> как мы решили</strong> открыть своё предприятие
								</div>
								<!-- /.founder-about-title -->
								<div class="founder-about-company__text">
									Раньше мы были строительной компанией и часто встречались с проблемами аренды спецтехники. Спустя время, мы решили самостоятельно закупить спецтехнику для нашего предприятия. К нам начали обращаться с вопросом о том, что могли бы мы сдать технику в аренду. Первый клиент, второй, третий и мы поняли, что пора открывать свою компанию по аренде спецтехники в городе Уфа
								</div>
								<!-- /.founder-about-company__text -->
							</div>
							<!-- /.founder-about-company -->
							<div class="founder-about-benefits founder-section__advantages">
								<div class="founder-about-title founder-about-title_white founder-about-benefits__title">
									<strong>С нами <span class="accent">удобно и комфортно</span></strong>
								</div>
								<!-- /.founder-about-title -->
								<div class="founder-about-benefits__list">
									<div class="founder-about-benefits__item">
										<div class="benefit-small benefit-small_wide">
											<img <?php img_async_src('terminal.png'); ?> alt="Терминал" class="benefit-small__icon">
											<div class="benefit-small__descr">
												<span class="semi-bold">Принимаем любые формы оплаты:</span> наличный, безналичный, с НДС
											</div>
											<!-- /.benefit-small__descr -->
										</div>
										<!-- /.benefit-small -->
									</div>
									<!-- /.founder-about-benefits__item -->
									<div class="founder-about-benefits__item">
										<div class="benefit-small benefit-small_wide">
											<img <?php img_async_src('health-icon.png'); ?> alt="Стетоскоп" class="benefit-small__icon">
											<div class="benefit-small__descr">
												<span class="semi-bold">Все водители проходят медпроверку</span> перед началом каждого рабочего дня
											</div>
											<!-- /.benefit-small__descr -->
										</div>
										<!-- /.benefit-small -->
									</div>
									<!-- /.founder-about-benefits__item -->
									<div class="founder-about-benefits__item">
										<div class="benefit-small benefit-small_wide">
											<img <?php img_async_src('experience-icon.png'); ?> alt="Портфель" class="benefit-small__icon">
											<div class="benefit-small__descr">
												<span class="semi-bold">В нашей команде</span> работают специалисты со стажем 5+ лет
											</div>
											<!-- /.benefit-small__descr -->
										</div>
										<!-- /.benefit-small -->
									</div>
									<!-- /.founder-about-benefits__item -->
									<div class="founder-about-benefits__item">
										<div class="benefit-small benefit-small_wide">
											<img <?php img_async_src('document-icon.png'); ?> alt="Документ" class="benefit-small__icon">
											<div class="benefit-small__descr">
												<span class="semi-bold">Предоставляем все закрывающие документы</span> и сопроводительную документацию точно в срок
											</div>
											<!-- /.benefit-small__descr -->
										</div>
										<!-- /.benefit-small -->
									</div>
									<!-- /.founder-about-benefits__item -->

								</div>
								<!-- /.founder-about-benefits__list -->
							</div>
							<!-- /.founder-about-benefits -->
						</div>
						<!-- /.founder-section__about-block -->
						<?php
						$photos = [
							'example-photo.png',
							'example-photo.png',
							'example-photo.png',
							'example-photo.png',
							'example-photo.png',
						];
						?>
						<div class="founder-section__gallery">
							<div class="not-gallery">
								<?php foreach ($photos as $photo_order => $photo): ?>
									<div class="not-gallery__item">
										<div class="founder-section__gallery-photo <?php echo ($photo_order + 1 === count($photos) ? 'last' : ''); ?>">
											<img <?php img_async_src($photo); ?> alt="">
										</div>
										<!-- /.founder-section__gallery-photo -->
									</div>
									<!-- /.not-gallery__item -->
								<?php endforeach; ?>
							</div>
							<!-- /.not-gallery -->
						</div>
						<!-- /.founder-section__gallery -->
					</div>
					<!-- /.founder-section__wrap -->
				</div>
				<!-- /.founder-section__container -->
			</div>
			<!-- /.container-size -->
		</section>
		<!-- /.founder-section -->

		<section class="reviews-section">
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
					?>
					<div class="reviews-section__gallery">
						<div class="adaptive-gallery">
							<div class="adaptive-gallery__wrap">
								<?php foreach ($reviews as $review): ?>
									<?php
									$video_link = $review['video_link'];
									preg_match('/[\/=]([^\/=]+?)$/', $video_link, $video_id_raw);
									$video_id = @$video_id_raw[1];
									$video_image = "https://i.ytimg.com/vi/$video_id/maxresdefault.jpg";
									?>
									
									<div class="adaptive-gallery__item">
										<div class="review reviews-section__review">
											<div class="review__video">
												<?php ob_start(); ?>
													<div class="review-video-inserted">
														<div class="waiting-background"></div>
														<div class="review-video-inserted__container">
															<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
														</div>
														<!-- /.review-video-inserted__container -->
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

		<section class="steps-to-get-section">
			<div class="container-size">
				<div class="steps-to-get-section__container">
					<h2 class="section-title section-title_center steps-to-get-section__title">
						<strong>Как получить <span class="accent">спецтехнику</span></strong><br> и решить задачу на объекте
					</h2>
					<!-- /.section-title -->
					<div class="section-descr section-descr_center steps-to-get-section__descr">
						5 шагов до выполнения
					</div>
					<!-- /.section-descr -->
					<?php
					$steps = [
						[
							'image' => 'keyboard-mouse.png',
							'title' => 'Оставьте заявку',
							'text' => 'Оставьте заявку на сайте, позвоните нам либо напишите в мессенджер',
						],
						[
							'image' => 'excavator.png',
							'title' => 'Подберём технику',
							'text' => 'Мы позвоним, подберем технику под Ваши задачи и рассчитаем стоимость',
							'non_nature_image' => true,
						],
						[
							'image' => 'truck.png',
							'title' => 'Доставим технику',
							'text' => 'Выполним доставку спецтехники прямо на Ваш объект бесплатно',
							'non_nature_image' => true,
						],
						[
							'image' => 'excavator-2.png',
							'title' => 'Выполним работы',
							'text' => 'Опытный водитель спецтехники выполнит все поставленные задачи',
							'non_nature_image' => true,
						],
					];
					?>
					<div class="steps-to-get-section__steps">
						<div class="adaptive-gallery">
							<div class="adaptive-gallery__wrap">
								<?php foreach ($steps as $step_order => $step): ?>
									<div class="adaptive-gallery__item">
										<div class="step-to-get steps-to-get__step">
											<div class="step-to-get__wrap">
												<div class="step-to-get__order-wrap">
													<div class="step-to-get__order-icon" <?php img_async_src('round-wrap.png', true, true); ?>>
														<div class="step-to-get__order">
															<?php echo $step_order + 1; ?>
														</div>
														<!-- /.step-to-get__order -->
													</div>
													<!-- /.step-to-get__order-icon -->
												</div>
												<!-- /.step-to-get__order-wrap -->
												<div class="step-to-get__content">
													<div class="step-to-get__image-wrap <?php echo @$step['non_nature_image'] ? 'step-to-get__image-wrap_bottom-padding' : ''; ?>">
														<img <?php img_async_src($step['image']); ?> alt="" class="step-to-get__image">
													</div>
													<!-- /.step-to-get__image-wrap -->
													<div class="step-to-get__text-content">
														<div class="step-to-get__title">
															<?php echo $step['title']; ?>
														</div>
														<!-- /.step-to-get__title -->
														<div class="step-to-get__text">
															<?php echo $step['text']; ?>
														</div>
														<!-- /.step-to-get__text -->
													</div>
													<!-- /.step-to-get__text-content -->
												</div>
												<!-- /.step-to-get__content -->
											</div>
											<!-- /.step-to-get__wrap -->
										</div>
										<!-- /.step-to-get -->
									</div>
									<!-- /.adaptive-gallery__item -->
								<?php endforeach; ?>
							</div>
							<!-- /.adaptive-gallery__wrap -->
						</div>
						<!-- /.adaptive-gallery -->
					</div>
					<!-- /.steps-to-get-section__steps -->

					<div class="steps-to-get-section__call-to-us">
						<div class="steps-to-get-section__call-button steps-to-get-section__call-method">
							<button class="big-button big-button_accent not-button-style flare-parent" data-pop-up-open-button="call-order">
								<div class="flare">
									<div class="flare__wrap">
										<div class="flare__line"></div>
									</div>
									<!-- /.flare__wrap -->
								</div>
								<!-- /.flare -->
								<div class="big-button__text flare-neighbor">Получить консультацию <img <?php img_async_src('right-arrow.png'); ?> alt="Стрелка вперёд" class="big-button__arrow"></div>
							</button>
							<!-- /.big-button -->
						</div>
						<!-- /.steps-to-get-section__call-button -->
						<div class="steps-to-get-section__messengers steps-to-get-section__call-method">
							<?php get_template_part('template-parts/messengers'); ?>
						</div>
						<!-- /.steps-to-get-section__messengers -->
						<div class="steps-to-get-section__phone-block steps-to-get-section__call-method">
							<?php get_template_part('template-parts/phone-block', '', [
								'black' => true
							]); ?>
						</div>
						<!-- /.steps-to-get-section__phone-block -->
					</div>
					<!-- /.steps-to-get-section__call-to-us -->
				</div>
				<!-- /.steps-to-get-section__container -->
			</div>
			<!-- /.container-size -->
		</section>
		<!-- /.steps-to-get-section -->

		<section class="main-text-section">
			<div class="container-size">
				<div class="main-text-section__container">
					<h2 class="main-text-section__title">
						Главный текст для SEO-оптимизации
					</h2>
					<!-- /.main-text-section__title -->
					<h2 class="main-text-section__text">
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. At quas repellat nisi iusto velit necessitatibus quae ea molestiae fugit autem corporis illo, tenetur commodi veniam consectetur. Quod totam repellat facilis?
						Consequuntur provident quia quaerat laborum nobis nihil, ipsum iusto expedita quos laboriosam placeat dolor voluptatem libero sed natus distinctio incidunt omnis earum illo. Quia dolor veniam ex. Provident, laboriosam ratione!
						Ad veritatis earum doloremque eos doloribus reprehenderit atque, architecto iste soluta praesentium! Perspiciatis ipsum voluptatem sapiente nesciunt quasi ab accusantium suscipit sint ut, voluptas numquam impedit est minus consectetur maxime?
						Nobis, voluptatem adipisci laboriosam sequi ratione porro odit dicta molestiae tempora quos repellendus itaque quae ad aperiam saepe temporibus tenetur totam fugit aspernatur enim, eaque debitis consectetur magnam! Praesentium, molestias!
					</h2>
					<!-- /.main-text-section__text -->
				</div>
				<!-- /.main-text-section__container -->
			</div>
			<!-- /.container-size -->
		</section>
		<!-- /.main-text-section -->

		<section class="consultation-section" <?php img_async_src('consultation-background.jpg', true, true); ?>>
			<div class="container-size">
				<div class="consultation-section__container">
					<div class="consultation-section__left-side">
						<div class="consultation-section__desktop-static">
							<h2 class="section-title section-title_white consultation-section__title">
								<strong>Получите <span class="accent">бесплатную</span></strong><br> консультацию специалиста
							</h2>
							<!-- /.section-title -->
							<div class="section-descr section-descr_white  consultation-section__descr">
								И закрепите за собой скидку <span class="semi-bold">-10% на первый заказ</span>
							</div>
							<!-- /.section-descr -->
						</div>
						<!-- /.consultation-section__desktop-static -->
						<div class="consultation-person consultation-section__person-block">
							<img <?php img_async_src('consultation-person.png'); ?> alt="Главный механик" class="consultation-person__photo">
							<div class="consultation-person__name-block">
								<div class="consultation-person__name">
									Андрей Русланович
								</div>
								<!-- /.consultation-person__name -->
								<div class="consultation-person__position">
									Главный механик<br> автопарка «Ковш»
								</div>
								<!-- /.consultation-person__position -->
							</div>
							<!-- /.consultation-person__name-block -->
						</div>
						<!-- /.consultation-person -->
						<div class="consultation-section__desktop-static">
							<div class="consultation-section__specialist-benefits">
								<div class="consultation-specialist-benefits">
									<div class="consultation-specialist-benefits__title">
										Андрей Вам поможет:
									</div>
									<!-- /.consultation-specialist-benefits__title -->
									<div class="consultation-specialist-benefits__benefits">
	
										<div class="consultation-specialist-benefits__benefit">
											<div class="benefit-small benefit-small_wide">
												<div class="benefit-small__icon benefit-icon" <?php img_async_src('round-wrap.png', true, true); ?>>
													<img <?php img_async_src('excavator-icon.png') ?> alt="" class="benefit-icon__inner">
												</div>
												<!-- /.benefit-small__icon -->
												<div class="benefit-small__descr">
													Подобрать технику под Ваши запросы
												</div>
												<!-- /.benefit-small__descr -->
											</div>
											<!-- /.benefit-small -->
										</div>
										<!-- /.consultation-specialist-benefits__benefit -->
										<div class="consultation-specialist-benefits__benefit">
											<div class="benefit-small benefit-small_wide">
												<div class="benefit-small__icon benefit-icon" <?php img_async_src('round-wrap.png', true, true); ?>>
													<img <?php img_async_src('calculator-icon.png') ?> alt="" class="benefit-icon__inner">
												</div>
												<!-- /.benefit-small__icon -->
												<div class="benefit-small__descr">
													Рассчитать стоимость аренды спецтехники
												</div>
												<!-- /.benefit-small__descr -->
											</div>
											<!-- /.benefit-small -->
										</div>
										<!-- /.consultation-specialist-benefits__benefit -->
										<div class="consultation-specialist-benefits__benefit">
											<div class="benefit-small benefit-small_wide">
												<div class="benefit-small__icon benefit-icon" <?php img_async_src('round-wrap.png', true, true); ?>>
													<img <?php img_async_src('discount-icon.png') ?> alt="" class="benefit-icon__inner">
												</div>
												<!-- /.benefit-small__icon -->
												<div class="benefit-small__descr">
													Закрепит за Вами скидку 10% на заказ
												</div>
												<!-- /.benefit-small__descr -->
											</div>
											<!-- /.benefit-small -->
										</div>
										<!-- /.consultation-specialist-benefits__benefit -->
										<div class="consultation-specialist-benefits__benefit">
											<div class="benefit-small benefit-small_wide">
												<div class="benefit-small__icon benefit-icon" <?php img_async_src('round-wrap.png', true, true); ?>>
													<img <?php img_async_src('question-icon.png') ?> alt="" class="benefit-icon__inner">
												</div>
												<!-- /.benefit-small__icon -->
												<div class="benefit-small__descr">
													Ответить на все актуальные вопросы
												</div>
												<!-- /.benefit-small__descr -->
											</div>
											<!-- /.benefit-small -->
										</div>
										<!-- /.consultation-specialist-benefits__benefit -->
	
									</div>
									<!-- /.consultation-specialist-benefits__benefits -->
								</div>
								<!-- /.consultation-specialist-benefits -->
							</div>
							<!-- /.consultation-section__specialist-benefits -->
						</div>
						<!-- /.consultation-section__desktop-static -->
					</div>
					<!-- /.consultation-section__left-side -->

					<div class="consultation-section__right-side">
						<div class="consultation-section__form">
							<?php get_template_part('template-parts/contact-form', '', [
								'title_text' => 'Оставьте заявку',
								'descr_text' => 'На бесплатный подбор,<br> консультацию и скидку',
								'button_text' => 'Получить консультацию',
							]); ?>
						</div>
						<!-- /.consultation-section__form -->
						<div class="row-contact-us consultation-section__contact-us">
							<div class="row-contact-us__title">
								Либо свяжитесь с нами напрямую
							</div>
							<!-- /.row-contact-us__title -->
							<div class="row-contact-us__methods">
								<div class="row-contact-us__messengers">
									<?php get_template_part('template-parts/messengers'); ?>
								</div>
								<!-- /.row-contact-us__messengers -->
								<div class="row-contact-us__phone-block">
									<?php get_template_part('template-parts/phone-block'); ?>
								</div>
								<!-- /.row-contact-us__phone-block -->
							</div>
							<!-- /.row-contact-us__methods -->
						</div>
						<!-- /.consultation-contact-us -->
					</div>
					<!-- /.consultation-section__right-side -->
				</div>
				<!-- /.consultation-section__container -->
			</div>
			<!-- /.container-size -->
		</section>
		<!-- /.consultation-section -->

		<section class="contacts-section">
			<div class="container-size">
				<div class="contacts-section__container">
					<div class="contacts-section__contacts">
						<h2 class="section-title section-title_small contacts-section__title">
							<strong>Наши контакты</strong>
						</h2>
						<!-- /.section-title -->
						<ul class="contacts-list">
							<li class="contacts-list__item contacts-list__item_phone">
								<?php get_template_part('template-parts/phone', '', [
									'black' => true,
									'red_icon' => true,
									'big_text' => true
								]) ?>
							</li>
							<!-- /.contacts-list__item -->
							<li class="contacts-list__item">
								<div class="contacts-list__icon">
									<img <?php img_async_src('clock.svg'); ?> alt="Время работы">
								</div>
								<!-- /.contacts-list__icon -->
								<div class="contacts-list__text">
									Ежедневно 10:00 — 22:00
								</div>
								<!-- /.contacts-list__text -->
							</li>
							<!-- /.contacts-list__item -->
							<li class="contacts-list__item">
								<div class="contacts-list__icon">
									<img <?php img_async_src('location-pin.png'); ?> alt="Адрес">
								</div>
								<!-- /.contacts-list__icon -->
								<div class="contacts-list__text">
									г. Уфа, ул. Красная, 156
								</div>
								<!-- /.contacts-list__text -->
							</li>
							<!-- /.contacts-list__item -->
							<li class="contacts-list__single-row">
								<div class="contacts-list__header-text contacts-list__header-text_single-row">
									Быстрая связь в мессенджере
								</div>
								<!-- /.contacts-list__header-text -->
								<?php get_template_part('template-parts/messengers', '', [
									'small_icons' => true
								]); ?>
							</li>
							<!-- /.contacts-list__single-row -->
							<li class="contacts-list__separate-rows">
								<div class="contacts-list__header-text contacts-list__header-text_separate-row">
									Корпоративная почта компании
								</div>
								<!-- /.contacts-list__header-text -->
								<div class="contacts-list__text">
									<a href="mailto:KonstruktorKda@yandex.ru " class="contacts-list__dashed-link not-link-style">
										KonstruktorKda@yandex.ru
									</a>
									<!-- /.contacts-list__dashed-link -->
								</div>
								<!-- /.contacts-list__text -->
							</li>
							<!-- /.contacts-list__separate-rows -->
						</ul>
						<!-- /.contacts-list -->
					</div>
					<!-- /.contacts-section__contacts -->
					<div class="contacts-section__benefits">
						<h2 class="section-title section-title_small contacts-section__title">
							<strong>Что Вы получите</strong>
						</h2>
						<!-- /.section-title -->
						<ul class="contacts-beneftis contacts-section__benefits-list">
							<li class="contacts-benefits__item">
								<img <?php img_async_src('checked-arrow.png'); ?> alt="" class="contacts-benefits__icon">
								<div class="contacts-benefits__text">
									Подача техники в день обращения
								</div>
								<!-- /.contacts-benefits__text -->
							</li>
							<!-- /.contacts-benefits__item -->
							<li class="contacts-benefits__item">
								<img <?php img_async_src('checked-arrow.png'); ?> alt="" class="contacts-benefits__icon">
								<div class="contacts-benefits__text">
									Доставка спецтехники до объекта
								</div>
								<!-- /.contacts-benefits__text -->
							</li>
							<!-- /.contacts-benefits__item -->
							<li class="contacts-benefits__item">
								<img <?php img_async_src('checked-arrow.png'); ?> alt="" class="contacts-benefits__icon">
								<div class="contacts-benefits__text">
									Полностью новая техника
								</div>
								<!-- /.contacts-benefits__text -->
							</li>
							<!-- /.contacts-benefits__item -->
							<li class="contacts-benefits__item">
								<img <?php img_async_src('checked-arrow.png'); ?> alt="" class="contacts-benefits__icon">
								<div class="contacts-benefits__text">
									Квалифицированные водители
								</div>
								<!-- /.contacts-benefits__text -->
							</li>
							<!-- /.contacts-benefits__item -->
							<li class="contacts-benefits__item">
								<img <?php img_async_src('checked-arrow.png'); ?> alt="" class="contacts-benefits__icon">
								<div class="contacts-benefits__text">
									Замена техники за 24 часа
								</div>
								<!-- /.contacts-benefits__text -->
							</li>
							<!-- /.contacts-benefits__item -->
							<li class="contacts-benefits__item">
								<img <?php img_async_src('checked-arrow.png'); ?> alt="" class="contacts-benefits__icon">
								<div class="contacts-benefits__text">
									Бесплатный подбор и расчет
								</div>
								<!-- /.contacts-benefits__text -->
							</li>
							<!-- /.contacts-benefits__item -->

						</ul>
						<!-- /.contacts-beneftis -->
					</div>
					<!-- /.contacts-section__benefits -->
					<div class="contacts-section__map-block">
						<div class="contacts-section__map">
							<div class="waiting-background waiting-background_light"></div>
							<div class="dynamic-tag-wrap">
								<div data-dynamic-tag="<?php echo htmlspecialchars('<div class="bor"><div class="bor-2"><div class="bor-3"></div></div></div>'); ?>" data-dynamic-tag-when-scroll></div>
							</div>
							<!-- /.dynamic-tag-wrap -->
						</div>
						<!-- /.contacts-section__map -->
					</div>
					<!-- /.contacts-section__map-block -->
				</div>
				<!-- /.contacts-section__container -->
			</div>
			<!-- /.container-size -->
		</section>
		<!-- /.contacts-section -->

	</main><!-- #main -->

<?php
get_footer();
