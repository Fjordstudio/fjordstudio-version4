<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fjordstudio
 */

get_header();
?>

	<div id="primary" class="content-area archive-open-source">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

      <header class="page-header">
				<h1>
					Open Source Projekter
				</h1>
				<?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' );
				//echo '<h1>' . get_the_archive_title() . '</h1>';
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
      <p>
        Jeg har efterhånden lavet en håndfuld Open Source projekter. Det startede allerede i 2014 under min uddannelse, med små jQuery plugins, der blev delt med mine medstuderende, og derefter havnede på GitHub. Og efterfølgende er det blevet til bl.a. egne CSS utilities, PHP templates, JavaScript funktioner og Wordpress plugins. Det meste kan findes på <a href="https://github.com/Katrine-Marie">min GitHub profil</a>.
      </p>
      <p>Her er et par højdepunkter:</p>
      <div class="flex-content">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-opensource', get_post_type() );

			endwhile;

      ?></div><?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
