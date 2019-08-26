<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fjordstudio
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Hov. Det ser ikke ud til at der er noget her!', 'fj_studio' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>Prøv at finde det, du leder efter, i menuen i stedet.</p>

					<p>Eller foretag en søgning:

						<?php get_search_form(); ?>

					</p>

					<img src="/wp-content/uploads/2019/08/question-mark-1872665_1920.jpg">

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
