<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Join_The_Club
 */

get_header();
?>

	<main id="primary" class="site-main my-4 p-4">

		<?php
		if ( have_posts() ) {
		    ?>
            <header class="page-header py-4">

            <?php
            };
    		while ( have_posts() ) :
    			the_post();

    			get_template_part( 'template-parts/content', 'page' );

    			// If comments are open or we have at least one comment, load up the comment template.
    			if ( comments_open() || get_comments_number() ) :
    				comments_template();
    			endif;

    		endwhile; // End of the loop.
    		?>

		<?php
      if (is_page('gaestetattovoerer-i-kaiju-tattoo-club')) {
        get_template_part('template-parts/guests', 'post');
      }
      if (is_page('om-kaiju-tattoo-club')) {
        get_template_part( 'template-parts/team' );
      }
      if (is_page('kontakt')) {
        get_template_part( 'template-parts/contact' );
      }
      if (is_page('besked-sendt')) {
        get_template_part( 'template-parts/thank-you' );
      }
    ?>
	</main><!-- #main -->

<?php
get_footer();
