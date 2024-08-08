<?php get_header(); ?>

<main id="primary" class="site-main container mx-auto">
    <div class="max-w-screen-lg mx-auto sm:p-10 md:p-16">
  		<?php
    		if ( have_posts() ) :
   			if ( is_home() && ! is_front_page() ) :
    				?>
   					<h1 class="page-title screen-reader-text"><?php the_field('headline'); ?></h1>
    				<?php
              echo "<p>".get_field('page-desc')."</p>";
   			endif;
   			/* Start the Loop */
   			while ( have_posts() ) :
    				the_post();
    				/*
   				 * Include the Post-Type-specific template for the content.
   				 * If you want to override this in a child theme, then include a file
   				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
   				 */
    				get_template_part( 'template-parts/content', get_post_type() );
   			endwhile;
   			the_posts_navigation();
    		else :
   			get_template_part( 'template-parts/content', 'none' );
    		endif;
  		?>
  		</div>
	</main><!-- #main -->

<?php get_footer();?>
