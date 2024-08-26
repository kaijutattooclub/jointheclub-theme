<?php
    get_header();
    $headline = esc_html(get_field('headline', 'option'));
    $desc = get_field('page-desc', 'option');
?>
<main id="primary" class="site-main">
    <div class="container my-4 rounded-xl overflow-hidden flex flex-col mx-auto p-4">
        <header class="entry-header mt-[4rem] py-[2rem]">
            <h1 class="entry-title text-4xl"><?php echo $headline ;?></h1>
            <span class="screen-reader-text"><?php echo $headline.'<br>'.$desc;?></span>
            <p class="py-6 text-lg"><?php echo $desc;?></p>
            <hr class="py-4 my-4">
        </header>
  		<?php
    		if ( have_posts() ) :
   			if ( is_home() && ! is_front_page() ) :
		?>
		<?php
        endif;
   			/* Start the Loop */
   			while ( have_posts() ) :
    				the_post();
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
