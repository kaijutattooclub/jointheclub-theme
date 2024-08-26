<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Join_The_Club
 */

?>
    <div id="post-<?php the_ID();?>" class="my-4 rounded overflow-hidden flex flex-col mx-auto">
        <a href="<?php the_permalink();?>"
            class="text-xl sm:text-4xl font-semibold inline-block transition duration-500 ease-in-out inline-block mb-2 hover:text-primary">
              <?php the_title();?></a>

        <div class="relative">
            <a href="<?php the_permalink();?>">
                <img class="w-full aspect-[21/9] object-cover"
                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                    alt="<?php the_title_attribute(); ?>" class="w-full">
            </a>

            <a href="<?php the_permalink();?>"
                class="bg-primary text-[--stroke] absolute z-10 text-xs absolute bottom-0 right-0 px-6 m-2 py-2 hover:bg-primary-600 transition duration-500 ease-in-out sm:flex items-center"><span
                    class="text-lg">></span>&nbsp;&nbsp;<span>Læs mere</span></a>

        </div>
        <p class="py-5 text-base leading-8">
            <?php the_excerpt(); ?>
        </p>
        <div class="py-5 text-sm font-regular text-gray-900 flex">
            <span class="mr-3 flex flex-row items-center text-white">
                <span class="ml-1 text-primary"><?php echo "#", strip_tags(get_the_category_list(", #"));?></span></span>
                <svg class="text-primary" fill="currentColor" height="16px" aria-hidden="true" role="img"
                    focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor"
                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                    </path>
                    <path d="M0 0h24v24H0z" fill="none"></path>
                </svg>
                <span class="ml-1 text-white"><?php esc_html(the_author()); ?></span>
        </div>
        <hr class=" mb-6">
