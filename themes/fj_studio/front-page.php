<?php
  get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

    <ul class="frontpage-menu">
      <li><a href="/jeg-arbejder-med-design-og-kode/"><i class="fas fa-link"></i> Om mig</a></li>
      <li><a href="/laes-min-blog/"><i class="fas fa-link"></i> Læs min blog</a></li>
      <li><a href="/case/"><i class="fas fa-link"></i> Se mine cases</a></li>
    </ul>

    <?php
      $args = array(
       'post_type' => 'case',
       'post_status' => 'publish',
       'tax_query' => array(
          array(
              'taxonomy' => 'importance',
              'terms' => 'fremhaevet',
              'field' => 'slug'
          )
      ),
       'posts_per_page' => 8,
       ‘orderby’ => ‘published’,
       ‘order’ => ‘ASC’,
      );

      $loop = new WP_Query( $args );

      $slideNo = 1;
      echo '<ul id="frontpage-slider">';
      while ( $loop->have_posts() ) : $loop->the_post();

      echo '<li>';
        echo '<a href="#slide' . $slideNo . '">';
        echo '<a href="' . get_the_permalink() . '">';
        echo '<img src="' . the_post_thumbnail() . '" alt="">';
        echo '<div class="slideOverlay" style="display:none;">';

        // echo '<pre style="color:#000;">';
        // var_dump(get_the_category(get_the_ID()));
        // echo '</pre>';

        $categories = get_the_category(get_the_ID());
        // echo $categories[0]->cat_name;

        echo '<p class="sliderCategories">CASE | ';
        foreach($categories as $key => $value){
          echo '<span>' . $categories[$key]->cat_name . '</span>';
        }
        echo '</p>';

        echo '<h2>' . get_the_title() . '</h2>';
        the_excerpt();

        if(get_field('date_finished')){
          echo '<p style="color:#aaa;margin-top:40px;"><b>Færdiggjort: </b>' . get_the_date() . '</p>';
        }
        if(get_field('stack')){
          echo '<p style="color:#aaa;"><b>Stack: </b>' . get_field('stack') . '</p>';
        }
        /* echo '<p><a style="color:orchid;" href="' . get_the_permalink() . '"><i class="fas fa-link"></i> Se case her</a></p>';
        echo '</a>'; */
        echo '</div>';
      echo '</a></li>';

        $slideNo++;
      endwhile;
      echo '</ul>';

      wp_reset_postdata();
     ?>

     <div class="frontpage-posts">
     <?php
/**
* Setup query to show the ‘services’ post type with ‘8’ posts.
* Output is title with excerpt.
*/
   $args = array(
       'post_type' => 'post',
       'post_status' => 'publish',
       'posts_per_page' => 2,
       ‘orderby’ => ‘title’,
       ‘order’ => ‘ASC’,
   );

   $loop = new WP_Query( $args );

   while ( $loop->have_posts() ) : $loop->the_post();
      // print the_title();
      // the_excerpt();
    ?>
      <div class="priority">
      <article id="post-<?php get_the_ID(); ?>">
      	<div class="hidden overlay">
      	<header class="entry-header">
      		<?php
      			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      		?>
          <div class="entry-meta">
    				<?php
    				fj_studio_posted_on();
    				fj_studio_posted_by();
    				?>
    			</div><!-- .entry-meta -->
      	</header><!-- .entry-header -->

      	<div class="entry-content">
      		<?php
      		the_excerpt( sprintf(
      			wp_kses(
      				/* translators: %s: Name of current post. Only visible to screen readers */
      				__( 'Læs videre<span class="screen-reader-text"> "%s"</span>', 'fj_studio' ),
      				array(
      					'span' => array(
      						'class' => array(),
      					),
      				)
      			),
      			get_the_title()
      		) );

          echo '<a class="overlayLink" href="' . get_the_permalink() . '">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 52.974 52.974" style="enable-background:new 0 0 52.974 52.974;" xml:space="preserve">
          <g>
          	<path d="M49.467,3.51c-4.677-4.679-12.291-4.681-16.97,0l-9.192,9.192c-0.391,0.391-0.391,1.023,0,1.414s1.023,0.391,1.414,0
          		l9.192-9.192c1.88-1.88,4.391-2.915,7.07-2.915c2.681,0,5.191,1.036,7.071,2.916s2.916,4.391,2.916,7.071
          		c0,2.68-1.036,5.19-2.916,7.07L36.033,31.088c-3.898,3.898-10.244,3.898-14.143,0c-0.391-0.391-1.023-0.391-1.414,0
          		s-0.391,1.023,0,1.414c2.34,2.339,5.412,3.509,8.485,3.509s6.146-1.17,8.485-3.509L49.467,20.48
          		c2.258-2.258,3.502-5.271,3.502-8.485C52.969,8.781,51.725,5.768,49.467,3.51z"/>
          	<path d="M26.84,40.279l-7.778,7.778c-1.88,1.88-4.391,2.916-7.071,2.916c-2.68,0-5.19-1.036-7.071-2.916
          		c-3.898-3.898-3.898-10.243,0-14.142l11.314-11.314c3.899-3.898,10.244-3.896,14.142,0c0.391,0.391,1.023,0.391,1.414,0
          		s0.391-1.023,0-1.414c-4.677-4.679-12.291-4.681-16.97,0L3.505,32.502c-2.258,2.258-3.501,5.271-3.501,8.485
          		c0,3.214,1.244,6.227,3.502,8.484s5.271,3.502,8.484,3.502c3.215,0,6.228-1.244,8.485-3.502l7.778-7.778
          		c0.391-0.391,0.391-1.023,0-1.414S27.231,39.889,26.84,40.279z"/>
          </g>
          </svg>
           Læs mere
           </a>';

      		?>
      	</div><!-- .entry-content -->

      	</div>
      	<?php fj_studio_post_thumbnail(); ?>

      </article><!-- #post-<?php the_ID(); ?> -->
      </div>
      <?php
       endwhile;

       wp_reset_postdata();
      ?>
    </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
