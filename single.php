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
	<main id="primary" class="site-main mt-8">
    <div class="relative">
      <a href="<?php the_permalink();?>">
        <img class="w-full aspect-[21/9] object-cover rounded-xl"
          src="<?php echo get_the_post_thumbnail_url(); ?>"
          alt="<?php the_title_attribute(); ?>" class="w-full">
      </a>
    </div>
	<div id="post-<?php the_ID();?>" class="container rounded mx-4 overflow-hidden flex flex-col p-4">
        <h1 class="text-2xl py-4"><?php the_title();?></h1>
        <div class="text-sm font-regular text-gray-900 flex flex-col md:flex-row">
            <p class="md:p-2 mb-1 mr-3 flex flex-row items-center text-white">
                Udgivet d.<?php 
                  global $post;
                  $date = esc_html(get_the_date());
                  print '&nbsp;<time class="hover:underline text-primary" datetime="'.$date.'">'.$date.'</time>';
                ?>
            </p>
            <p class="md:p-2 mb-1 mr-3 flex flex-row items-center text-white">
              <?php 
                  global $post;
                  $author_id = $post->post_author;
                  $author_name = esc_html(get_the_author_meta('display_name', $author_id));
                  $author_link = get_author_posts_url($author_id);
                  $author_link_and_name = '<a class="hover:underline text-primary text-bold" href="'.$author_link.'">'.$author_name.'</a>';
                  print 'af&nbsp;'.$author_link_and_name;
                ?>
            </p>
            <p class="hidden mb-1 mr-3 md:flex flex-row items-center text-white">
                <?php 
                  echo 'i'.str_repeat('&nbsp;', 1);
                  $categories = get_the_category();
                  $separator = '&nbsp;|&nbsp;';
                  $output = '';
                  if ($categories) {
                    foreach ($categories as $category) {
                      $output .= '<a class="hover:underline text-primary text-bold" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
                    }
                    echo trim($output, $separator);
                  } ?>
            </p>
        </div>
        <hr class="mb-4">
        <?php 
          /* Load the content */
          the_content();
          /* Author footer */
          esc_html(get_template_part('template-parts/about-author'));
          /* Similar posts */
          esc_html(get_template_part('template-parts/similar-posts'));
        ?>

	</main><!-- #main -->

<?php
get_footer();
