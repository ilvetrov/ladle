<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package u_ilve
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preload" href="/wp-content/themes/u-ilve/assets/fonts/montserrat-400.woff2" as="font" crossorigin="anonymous">
	<link rel="preload" href="/wp-content/themes/u-ilve/assets/fonts/montserrat-500.woff2" as="font" crossorigin="anonymous">
	<link rel="preload" href="/wp-content/themes/u-ilve/assets/fonts/montserrat-600.woff2" as="font" crossorigin="anonymous">
	<link rel="preload" href="/wp-content/themes/u-ilve/assets/fonts/montserrat-700.woff2" as="font" crossorigin="anonymous">
	<meta meta="max-parallel-high-loads" content="<?php echo MAX_PARALLEL_HIGH_LOADS; ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="header" class="
			header
			<?php echo (@$args['static'] ? 'header_static' : ''); ?>
		"
		<?php if (@$args['with_background']): ?>
			<?php img_async_src('tractor-field.jpg', true, true); ?>
		<?php endif; ?>
	>
		<div class="header__top header__block header-top">
			<div class="container-size">
				<div class="header-top__container">
					<div class="header-top__logo-block">
						<?php get_template_part('template-parts/logo-and-descr', '', [
							'text_dim' => true
						]); ?>
					</div>
					<!-- /.header-top__logo-block -->
					<div class="benefit-small header-top__payment-block">
						<img <?php img_async_src('terminal.png'); ?> alt="Терминал" class="benefit-small__icon">
						<div class="benefit-small__descr header-top__payment-text">
							<span class="semi-bold">Принимаем любые формы оплаты:</span> наличный, безналичный, с НДС
						</div>
						<!-- /.benefit-small__descr -->
					</div>
					<!-- /.benefit-small -->
					<div class="header-top__contact-block header-family-block">
						<div class="header-top__messengers-block">
							<?php get_template_part('template-parts/messengers'); ?>
						</div>
						<!-- /.header-top__messengers-block -->
						<div class="header-top__phone-block">
							<?php get_template_part('template-parts/phone-block'); ?>
						</div>
						<!-- /.header-top__phone-block -->
					</div>
					<!-- /.header-top__contact-block -->
				</div>
				<!-- /.header-top__container -->
			</div>
			<!-- /.container-size -->
		</div>
		<!-- /.header__top -->
		<div class="header__menu header__block header-menu">
			<div class="container-size">
				<div class="header-menu__container">
					<div class="header-menu__contacts">
						<div class="header-menu__messengers">
							<?php get_template_part('template-parts/messengers'); ?>
						</div>
						<!-- /.header-menu__messengers -->
						<div class="header-menu__phone">
							<?php get_template_part('template-parts/phone', '', [
								'without_icon' => true
							]); ?>
						</div>
						<!-- /.header-menu__phone -->
					</div>
					<!-- /.header-menu__contacts -->
					<div class="header-menu__calculate-appeal">
						<a href="/#test-calculator" class="calculate-appeal not-link-style click-extender">
							<img <?php img_async_src('calc-white.png'); ?> alt="Тест-калькулятор" class="calculate-appeal__icon">
							<div class="calculate-appeal__text">
								Рассчитать стоимость
							</div>
							<!-- /.calculate-appeal__text -->
						</a>
						<!-- /.calculate-appeal -->
					</div>
					<!-- /.header-menu__calculate-appeal -->
					<div class="header-menu__right-block">
						<?php wp_nav_menu([
							'theme_location' => 'header-menu',
							'container' => '',
							'menu_class' => 'header-menu__links'
						]); ?>
						<button class="mobile-menu-button not-button-style click-extender header-menu__mobile-button" data-pop-up-open-button="mobile-menu">
							<div></div>
							<div></div>
							<div></div>
						</button>
						<!-- /.mobile-menu-button -->
					</div>
					<!-- /.header-menu__right-block -->
				</div>
				<!-- /.header-menu__container -->
			</div>
			<!-- /.container-size -->
		</div>
		<!-- /.header__menu -->
	</header>
	<!-- /#header -->
	<?php get_template_part('template-parts/mobile-menu'); ?>
	<?php get_template_part('template-parts/contact-pop-up', '', [
		'pop_up_name' => 'call-order',
		'title_text' => 'Оставьте заявку<br> на обратный звонок',
		'descr_text' => 'Мы перезвоним в течении 5 минут',
		'button_text' => 'Позвоните мне',
		'class_form' => 'integrated',
		'class_title' => 'left-side',
		'class_descr' => 'left-side small closer',
		'class_privacy_policy' => 'left-side',
	]); ?>
	<?php get_template_part('template-parts/contact-pop-up', '', [
		'pop_up_name' => 'rent-order',
		'title_text' => 'Оставьте заявку<br> на аренду техники',
		'descr_text' => 'Мы перезвоним в течении 5 минут',
		'button_text' => 'Заказать аренду',
		'class_form' => 'integrated',
		'class_title' => 'left-side',
		'class_descr' => 'left-side small closer',
		'class_privacy_policy' => 'left-side',
	]); ?>
	<div class="top-level-buttons">
		<?php get_template_part('template-parts/top-level-button', '', [
			'text' => 'Рассчитать стоимость',
			'icon' => 'calc.png'
		]); ?>
		<?php get_template_part('template-parts/top-level-button', '', [
			'icon' => 'chat.png'
		]); ?>
		<?php get_template_part('template-parts/top-level-button', '', [
			'icon' => 'call-red-line.png'
		]); ?>
	</div>
	<!-- /.top-level-buttons -->