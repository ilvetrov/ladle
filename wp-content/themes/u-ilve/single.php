<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package u_ilve
 */

get_header('', [
	'static' => true,
	'with_background' => true,
]);
?>

	<main class="inner-page">
		<div class="container-size">
			<div class="inner-page__container">
				<h1 class="section-title inner-page__title">
					<strong><?php the_title(); ?></strong>
				</h1>
				<!-- /.section-title -->
				<div class="inner-page__content text-content">
					<?php the_content(); ?>
				</div>
				<!-- /.inner-page__content -->
			</div>
			<!-- /.inner-page__container -->
		</div>
		<!-- /.container-size -->
	</main>
	<!-- /.inner-page -->

<?php
get_footer();
