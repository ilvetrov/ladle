<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package u_ilve
 */

get_header('', [
	'without_header' => true
]);
?>

<main class="not-found">
	<div class="container-size not-found__container-size">
		<div class="not-found__container">
			<div class="not-found__title">
				404
			</div>
			<!-- /.not-found__title -->
			<div class="not-found__link">
				<a href="/" class="not-link-style">Вернуться на главную</a>
			</div>
			<!-- /.not-found__link -->
		</div>
		<!-- /.not-found__container -->
	</div>
	<!-- /.container-size -->
</main>
<!-- /.not-found -->

<?php
get_footer('', [
	'without_footer' => true
]);
