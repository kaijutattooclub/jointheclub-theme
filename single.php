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
	<div id="post-<?php the_ID();?>" class="container rounded-xl mx-4 overflow-hidden flex flex-col p-4">
        <h1 class="text-2xl"><?php the_title();?></h1>
        <div class="text-sm font-regular text-[--stroke] mt-2 flex flex-col md:flex-row">
            <p class="bg-base-200 md:p-2 rounded-xl mb-1 mr-3 flex flex-row items-center text-white">
              <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z" stroke="#75fbbc" stroke-width="1.0"></path>
                  <path d="M12 7V12L14 14" stroke="#75fbbc" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg>
            &nbsp;Udgivet d.
              <?php 
                global $post;
                $date = esc_html(get_the_date());
                print '&nbsp;<time class="text-sm text-primary" datetime="'.$date.'">'.$date.'</time>';
              ?>
            </p>
            <p class="bg-base-200 md:p-2 rounded-xl mb-1 mr-3 flex flex-row items-center text-white">
              <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#75fbbc"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 13H16M8 13V18C8 19.8856 8 20.8284 8.58579 21.4142C9.17157 22 10.1144 22 12 22C13.8856 22 14.8284 22 15.4142 21.4142C16 20.8284 16 19.8856 16 18V13M8 13C5.2421 12.3871 3.06717 10.2687 2.38197 7.52787L2 6M16 13C17.7107 13 19.1506 14.2804 19.3505 15.9795L20 21.5" stroke="#75fbbc" stroke-width="1" stroke-linecap="round"></path> <circle cx="12" cy="6" r="4" stroke="#75fbbc" stroke-width="1"></circle> </g></svg>
              <?php 
                  global $post;
                  $author_id = $post->post_author;
                  $author_name = esc_html(get_the_author_meta('display_name', $author_id));
                  $author_link = get_author_posts_url($author_id);
                  $author_link_and_name = '<a class="text-sm hover:underline text-primary text-bold" href="'.$author_link.'">'.$author_name.'</a>';
                  print '&nbsp;af&nbsp;'.$author_link_and_name;
                ?>
            </p>
            <p class="bg-base-200 md:p-2 rounded-xl hidden mb-1 mr-3 md:flex flex-row items-center text-white">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Tag"> <g id="Vector"> <path d="M4.74791 7.64502L4.41669 11.2885C4.36763 11.8281 4.34289 12.1001 4.3878 12.3584C4.42792 12.5892 4.50806 12.8112 4.62496 13.0142C4.7563 13.2422 4.95043 13.4363 5.33647 13.8224L10.512 18.9979C11.299 19.7849 11.6927 20.1786 12.148 20.3265C12.5496 20.4571 12.983 20.4573 13.3847 20.3268C13.8414 20.1785 14.2382 19.7821 15.0302 18.9901L18.99 15.0303C19.7821 14.2382 20.1774 13.8424 20.3258 13.3857C20.4563 12.9841 20.4555 12.5511 20.325 12.1495C20.1766 11.6928 19.7819 11.297 18.9898 10.505L13.8271 5.34229C13.4375 4.95272 13.2427 4.75792 13.0136 4.62598C12.8107 4.50908 12.5886 4.4286 12.3579 4.38848C12.0974 4.3432 11.823 4.36809 11.2743 4.41797L7.64449 4.74796C6.69973 4.83384 6.22705 4.87698 5.85738 5.08255C5.53145 5.26379 5.26277 5.53248 5.08152 5.8584C4.87698 6.22623 4.83432 6.69555 4.74929 7.63092L4.74791 7.64502Z" stroke="#75fbbc" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9.71259 9.71297C10.1031 9.32244 10.1031 8.68928 9.71259 8.29876C9.32206 7.90823 8.68845 7.90823 8.29792 8.29876C7.9074 8.68928 7.90702 9.32229 8.29755 9.71282C8.68807 10.1033 9.32206 10.1035 9.71259 9.71297Z" stroke="#75fbbc" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g> </g></svg>
                <?php 
                  echo 'i'.str_repeat('&nbsp;', 1);
                  $categories = get_the_category();
                  $separator = '&nbsp;|&nbsp;';
                  $output = '';
                  if ($categories) {
                    foreach ($categories as $category) {
                      $output .= '<a class="text-sm hover:underline text-primary text-bold" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
                    }
                    echo trim($output, $separator);
                  } ?>
            </p>
        </div>
        <hr class="mb-4 mt-2">
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
