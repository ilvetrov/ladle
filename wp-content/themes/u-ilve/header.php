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
	<header id="header" class="header">
		<div class="header__top header__block header-top">
			<div class="container-size">
				<div class="header-top__container">
					<div class="header-top__logo-block header-family-block">
						<div class="header-top__logo-wrap">
							<a href="/" class="logo click-extender">
								<img <?php img_async_src('logo.png'); ?> alt="Ковш" class="header-top__logo logo__icon">
							</a>
							<!-- /.logo -->
						</div>
						<!-- /.header-top__logo-wrap -->
						<div class="header-top__site-descr">
							<span class="header-descr header-descr_dim">Аренда собственной спецтехники в г. Уфа</span>
						</div>
						<!-- /.header-top__descr -->
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
					<div class="header-top__messengers-block">
						<ul class="messengers">
							<li class="messengers__item">
								<a href="https://t.me/" target="_blank" class="messengers__link click-extender click-extender_small">
									<img <?php img_async_src('tg.png'); ?> alt="Telegram" class="messengers__icon">
								</a>
								<!-- /.messengers__link -->
							</li>
							<!-- /.messengers__item -->
							<li class="messengers__item">
								<a href="https://wa.me/79279353399" target="_blank" class="messengers__link click-extender click-extender_small">
									<img <?php img_async_src('whatsapp.png'); ?> alt="WhatsApp" class="messengers__icon">
								</a>
								<!-- /.messengers__link -->
							</li>
							<!-- /.messengers__item -->
							<li class="messengers__item">
								<a href="viber://chat/?number=%279279353399"" class="messengers__link click-extender click-extender_small">
									<img <?php img_async_src('viber.png'); ?> alt="Viber" class="messengers__icon">
								</a>
								<!-- /.messengers__link -->
							</li>
							<!-- /.messengers__item -->
						</ul>
						<!-- /.messengers -->
					</div>
					<!-- /.header-top__messengers-block -->
					<div class="header-top__contact-block header-family-block">
						<div class="header-top__phone-block phone-block">
							<div class="phone-block__link-wrap">
								<a href="tel:79279353399" class="phone phone-block__link not-link-style click-extender">
									<img <?php img_async_src('phone.png'); ?> alt="Телефон" class="phone-icon phone__icon">
									<span class="phone__number">+7 (927) 935-33-99</span>
								</a>
								<!-- /.phone -->
							</div>
							<!-- /.phone-block__link-wrap -->
							<div class="phone-block__time phone-block__time_yellow">
								Ежедневно 10:00 — 22:00
							</div>
							<!-- /.phone-block__time -->
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
					<?php wp_nav_menu([
						'menu' => 'header-menu',
						'container' => '',
						'menu_class' => 'header-menu__links'
					]); ?>
				</div>
				<!-- /.header-menu__container -->
			</div>
			<!-- /.container-size -->
		</div>
		<!-- /.header__menu -->
	</header>
	<!-- /#header -->
