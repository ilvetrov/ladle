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

		<section class="hello-section" id="hello" <?php img_async_src('tractor-field.jpg', true, true); ?>>
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
											<div class="hello-tractor-message__content rich-content rich-content_semi">
												<?php echo_rich_text(carbon_get_cached_theme_option('hello_benefit_text')); ?>
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
							<h1 class="hello-section__title rich-content"><?php echo_rich_text(carbon_get_cached_theme_option('hello_title')); ?></h1>
							<div class="hello-section__descr">
								<?php echo_rich_text(carbon_get_cached_theme_option('hello_descr')); ?>
							</div>
							<!-- /.hello-section__descr -->
							<a href="<?php echo carbon_get_cached_theme_option('hello_button_link'); ?>" class="big-button big-button_accent not-link-style hello-section__accent-button flare-parent">
								<div class="flare">
									<div class="flare__wrap">
										<div class="flare__line"></div>
									</div>
									<!-- /.flare__wrap -->
								</div>
								<!-- /.flare -->
								<div class="big-button__text flare-neighbor"><?php echo carbon_get_cached_theme_option('hello_button_text'); ?> <img <?php img_async_src('right-arrow.png'); ?> alt="Стрелка вперёд" class="big-button__arrow big-button__arrow_too-big-for-mobile"></div>
							</a>
							<!-- /.big-button -->
							<a href="<?php echo carbon_get_cached_theme_option('hello_button_adva_link'); ?>" class="big-button not-link-style big-button_wide"><div class="big-button__text"><?php echo carbon_get_cached_theme_option('hello_button_adva_text'); ?></div></a>
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

		<section class="quiz-section" id="calc">
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
								'name' => 'special-technique'
							]); ?>
						</div>
						<!-- /.quiz-wrap__quiz -->
						<div class="quiz-wrap__benefits">
							<div class="quiz-benefits" <?php img_async_src('quiz-blur.jpg', true, true); ?>>
								<div class="quiz-benefits__person">
									<div class="quiz-person">
										<div class="quiz-person__left-side">
											<div class="quiz-person__position">
												Менеджер
											</div>
											<!-- /.quiz-person__position -->
											<div class="quiz-person__name">
												Виктория
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

		<section class="other-companies" id="other" <?php img_async_src('other-companies.jpg', true, true); ?>>
			<div class="container-size">
				<div class="other-companies__container">
					<div class="other-companies__content">
						<div class="other-companies__left-side">
							<h2 class="section-title section-title_white other-companies__title">
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

		<section class="about-benefits" id="about-benefits">
			<div class="container-size">
				<div class="about-benefits__container">
					<div class="about-benefits__title">
						<h2 class="section-title section-title_center rich-content">
							<?php echo_rich_text(carbon_get_cached_theme_option('benefits_title')); ?>
						</h2>
						<!-- /.section-title -->
					</div>
					<!-- /.about-benefits__title -->
					<div class="about-benefits__descr">
						<div class="section-descr section-descr_center rich-content">
							<?php echo_rich_text(carbon_get_cached_theme_option('benefits_descr')); ?>
						</div>
						<!-- /.section-descr -->
					</div>
					<!-- /.about-benefits__descr -->
					<?php
					$about_us_benefits = carbon_get_cached_theme_option('benefits_list');
					?>
					<div class="about-benefits__benefits">
						<div class="adaptive-gallery adaptive-gallery_grid our-benefit-shadow our-benefit-shadow_mobile js-adaptive-gallery" data-current-item="0" >
							<div class="adaptive-gallery__wrap adaptive-gallery__wrap_grid js-adaptive-gallery-wrap">
								<?php foreach ($about_us_benefits as $benefit): ?>
									<div class="adaptive-gallery__item adaptive-gallery__item_grid js-adaptive-gallery-item">
										<div class="our-benefit our-benefit-shadow our-benefit-shadow_desktop about-us__benefit">
											<div class="our-benefit__icon">
												<img <?php img_async_id($benefit['image']); ?> alt="">
											</div>
											<!-- /.our-benefit__icon -->
											<div class="our-benefit__content">
												<div class="our-benefit__title rich-content">
													<?php echo_rich_text($benefit['title']); ?>
												</div>
												<!-- /.our-benefit__title -->
												<div class="our-benefit__descr rich-content">
													<?php echo_rich_text($benefit['descr']); ?>
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
							<div class="adaptive-gallery__buttons">
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
					<!-- /.about-benefits__benefits -->
				</div>
				<!-- /.about-benefits__container -->
			</div>
			<!-- /.container-size -->
		</section>
		<!-- /.about-benefits -->

		<section class="our-technique"  id="catalog">
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
							Личный состав проходит медпроверку ежедневно
						</div>
						<!-- /.section-descr -->
					</div>
					<!-- /.our-technique__descr -->
					<?php
					$our_technique = get_posts([
						'post_type' => 'technique'
					]);
					?>
					<div class="adaptive-gallery adaptive-gallery_center js-adaptive-gallery">
						<div class="adaptive-gallery__wrap js-adaptive-gallery-wrap">
							<?php foreach ($our_technique as $technique): ?>
								<div class="adaptive-gallery__item js-adaptive-gallery-item">
									<div class="technique-preview">
										<div class="technique-preview__background"></div>
										<div class="technique-preview__wrap">
											<div class="technique-preview__image-wrap">
												<img
													<?php img_async_id(carbon_get_cached_post_meta($technique->ID, 'hello_image')); ?>
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
														<?php echo beautify_price(carbon_get_cached_post_meta($technique->ID, 'price')); ?> ₽/час
													</div>
													<!-- /.technique-preview__price -->
												</div>
												<!-- /.technique-preview__price-wrap -->
												<div class="technique-preview__buttons">
													<button class="mini-button mini-button_accent not-button-style technique-preview__button" data-pop-up-open-button="rent-order">
														Заказать
													</button>
													<!-- /.mini-button -->
													<a href="/technique/<?php echo $technique->post_name; ?>" class="mini-button mini-button_secondary not-link-style technique-preview__button">
														Подробнее
													</a>
													<!-- /.mini-button -->
												</div>
												<!-- /.technique-preview__buttons -->
												<div class="technique-preview__calc-appeal-wrap">
													<a href="/#calc" class="technique-preview__calc-appeal not-link-style">
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
				<!-- /.our-technique__container -->
			</div>
			<!-- /.container-size -->
		</section>
		<!-- /.our-technique -->

		<section class="founder-section" id="about-us" <?php img_async_src('founder-background.jpg', true, true); ?>>
			<div class="container-size">
				<div class="founder-section__container">
					<div class="founder-section__logo-background">
						<img <?php img_async_src('logo-founder-background.png'); ?> alt="">
					</div>
					<!-- /.founder-section__logo-background -->
					<div class="founder-section__wrap">
						<h2 class="section-title section-title_white founder-section__title rich-content">
							<?php echo_rich_text(carbon_get_cached_theme_option('about_us_title')); ?>
						</h2>
						<!-- /.section-title -->
						<div class="section-descr section-descr_white founder-section__descr rich-content">
							<?php echo_rich_text(carbon_get_cached_theme_option('about_us_descr')); ?>
						</div>
						<!-- /.section-descr -->
						<div class="founder-section__about-block">
							<div class="founder-section__person-background">
								<div class="founder-section__person-wrap">
									<img <?php img_async_src('founder-section-person.png'); ?> alt="Виктор Викторович — компания Ковш">
								</div>
								<!-- /.founder-section__person-wrap -->
							</div>
							<!-- /.founder-section__person-background -->
							<div class="founder-about-company founder-section__text-about-us">
								<div class="founder-about-title founder-about-title_inner founder-about-company__title rich-content">
									<?php echo_rich_text(carbon_get_cached_theme_option('about_us_block_title')); ?>
								</div>
								<!-- /.founder-about-title -->
								<div class="founder-about-company__text rich-content">
									<?php echo_rich_text(carbon_get_cached_theme_option('about_us_block_text')); ?>
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
						$photos = carbon_get_cached_theme_option('about_us_gallery');
						?>
						<div class="founder-section__gallery">
							<div class="not-gallery non-containerized-tech">
								<?php foreach ($photos as $photo_order => $photo): ?>
									<div class="not-gallery__item">
										<a href="<?php echo wp_get_attachment_image_url($photo, 'full'); ?>" target="_blank" class="founder-section__gallery-photo not-link-style <?php echo ($photo_order + 1 === count($photos) ? 'last' : ''); ?>">
											<img <?php img_async_id($photo); ?> alt="" class="img-cover">
										</a>
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

		<?php get_template_part('template-parts/reviews-section'); ?>
		<?php get_template_part('template-parts/steps-to-get'); ?>
		<?php get_template_part('template-parts/main-text-section'); ?>
		<?php get_template_part('template-parts/consultation-section'); ?>
		<?php get_template_part('template-parts/contacts-section'); ?>

	</main><!-- #main -->

<?php
get_footer();
