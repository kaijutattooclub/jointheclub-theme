<?php
/**

 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Join_The_Club
 */

get_header();
/* if page is 'gaestetattovoerer-i-kaiju-tattoo-club' */
if (is_page('gaestetattovoerer-i-kaiju-tattoo-club')) {
    get_template_part('template-parts/guests.php');
}
?>
<style>p{margin-bottom: 1.2rem;} main ul{margin-bottom:1.1rem;} main ul li{padding-left:1.2rem; list-style: inside; } h2{margin-bottom:1.2rem;} </style>
	<main id="primary" class="site-main">
	<div id="post-<?php the_ID();?>" class="container my-4 rounded overflow-hidden flex flex-col mx-auto p-4">

        <div class="relative">
            <a href="<?php the_permalink();?>">
                <img class="w-full aspect-[21/9] object-cover rounded-xl"
                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                    alt="<?php the_title_attribute(); ?>" class="w-full">
            </a>

        </div>
        <h1 class="text-4xl py-4"><?php the_title();?></h1>
        <div class="pb-5 text-sm font-regular text-gray-900 flex">
            <span class="mr-3 flex flex-row items-center text-white">
                Kategori:<span class="ml-1 text-primary"><?php echo "#", strip_tags(get_the_category_list(", #"));?></span></span>
        </div>
        <hr class="my-2">
        <?php the_content(); ?>

	</main><!-- #main -->

<?php
get_footer();
