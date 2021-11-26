<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package u_ilve
 */

?>

	<footer class="footer">
		<div class="container-size">
			<div class="footer__container">
				<div class="footer__blocks">
					<div class="footer__block footer__about-block">
						<div class="footer__logo">
							<?php get_template_part('template-parts/logo-and-descr'); ?>
						</div>
						<!-- /.footer__logo -->
						<div class="footer__copyright footer__dim-text">
							Copyright 2021 © Все права защищены.
						</div>
						<!-- /.footer__copyright -->
						<div class="footer__privacy-policy-wrap">
							<a href="#" target="_blank" class="footer__privacy-policy footer__dim-text not-link-style">
								Политика конфиденциальности
							</a>
							<!-- /.footer__privacy-policy -->
						</div>
						<!-- /.footer__privacy-policy-wrap -->
					</div>
					<!-- /.footer__block -->
					<div class="footer__block footer__sections-block">
						<div class="footer__block-title">
							<strong>Разделы сайта</strong>
						</div>
						<!-- /.footer__block-title -->
						<?php wp_nav_menu([
							'theme_location' => 'footer-menu-sections',
							'container' => '',
							'menu_class' => 'footer__links'
						]); ?>
					</div>
					<!-- /.footer__block -->
					<div class="footer__block footer__good-links-block">
						<div class="footer__block-title">
							<strong>Полезные ссылки</strong>
						</div>
						<!-- /.footer__block-title -->
						<?php wp_nav_menu([
							'theme_location' => 'footer-menu-links',
							'container' => '',
							'menu_class' => 'footer__links'
						]); ?>
					</div>
					<!-- /.footer__block -->
					<div class="footer__block footer__bookmark-block">
						<div class="footer__block-title">
							Сохраните сайт Ctrl+D
						</div>
						<!-- /.footer__block-title -->
						<div class="footer__save-site footer__dim-text">
							Чтобы не потерять сайт, сохраните его в закладки либо сохраните ссылку на сайт
						</div>
						<!-- /.footer__save-site -->
						<div class="footer__author" data-void="Design and marketing by Artyom Kokhan; Code by Ilia Vetrov">
							Сайт разработан: Artyom Kokhan
						</div>
						<!-- /.footer__author -->
					</div>
					<!-- /.footer__block -->
				</div>
				<!-- /.footer__blocks -->
			</div>
			<!-- /.footer__container -->
		</div>
		<!-- /.container-size -->
	</footer>
	<!-- /.footer -->
</div>
<!-- /#page -->

<?php wp_footer(); ?>

</body>
</html>
