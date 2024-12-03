<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Join_The_Club
 */
 $fname = get_field('artist_fname');
 $full_name = get_field('artist_fname').' '. get_field('artist_lname');
 $instagram_username = get_field('instagram-username');
 $instagram_url = 'https://instagram.com/' . $instagram_username;
 $profile_picture = get_field('artist-image');
 $aliases = get_field('aliases');
 $shortcodes = get_field('artist-insta-shortcode');
 $contact_form = get_field('kontaktformular');
 $contact_photo = get_field('billede_kontakt');
 $term_ids = get_field('artist_style');

get_header();
?>
    <div id="post-<?php the_ID();?>" class="container my-4 rounded-xl overflow-hidden flex flex-col mx-auto">
        <?php
            /* if theres a thumbnail, display it */
            if(has_post_thumbnail()): ?>
        <div class="relative">
            <img class="w-full aspect-[16/9] object-cover rounded"
                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                    alt="<?php the_title_attribute(); ?>" class="w-full">
                        <?php endif; ?>
        </div>
        <img src="<?php echo $profile_picture; ?>" alt="<?php echo $profile_picture; ?>" class="max-w-[12rem] h-auto rounded-full border-4 border-primary -mt-[5.5rem] mx-auto z-10">
        <h1
            class="text-4xl md:text-2xl inline-block text-center transition duration-500 ease-in-out my-2">
                <?php echo $full_name;?>
        </h1>

        <div class="m-2 p-2text-base leading-8">
            <?php the_excerpt(); ?>
            <hr class="my-4 w-[90%] mx-auto">
            <div class="flex flex-col md:flex-row">
                <div class="flex flex-col w-full lg:w-1/3">
                    <?php if ($term_ids): ?>
                    <div id="tags" class="flex flex-col min-w-0 w-full bg-base-200 rounded-xl max-h-[fit-content] self-start my-4 p-4">
                        <h2 class="text-lg">Stilart</h2>
                        <p class="my-2 text-sm mb-4"><?php echo $fname; ?> elsker at lave - men er ikke begrænset til følgende stilarter</p>
                        <div class="flex flex-row flex-wrap">
                            <?php
                                // Hent taxonomi-IDs fra ACF-feltet
                                if ($term_ids):
                                    foreach ($term_ids as $term_id):
                                        // Hent term-objektet baseret på ID
                                        $term = get_term($term_id);
                                        // Tjek om term-objektet er gyldigt
                                        if ($term && !is_wp_error($term)): ?>
                                            <span class="bg-primary hover:bg-[--primary-600] text-[--stroke] text-xs lowercase font-bold m-1 px-2.5 py-0.5 rounded border border-1 border-[--stroke]"><?php echo esc_html($term->name); ?></span>
                                        <?php endif;
                                    endforeach;
                                endif;
                            ?>
                        </div>
                    </div>
                    <?php endif;

                    if ($instagram_username): ?>
                    <div id="tags" class="flex flex-col w-full bg-base-200 rounded-xl max-h-[fit-content] self-start my-4 p-4">
                        <h2 class="text-lg">Følg på Instagram</h2>
                        <div class="flex flex-row flex-wrap">
                            <span class="bg-primary hover:bg-[--primary-600] text-[--stroke] text-xs lowercase font-bold m-1 px-2.5 py-0.5 rounded border border-1 border-[--stroke]"><a href="<?php echo $instagram_url; ?>" class="my-2 link link-hover">@<?php echo $instagram_username; ?></a></span>
                        </div>
                    </div>
                    <?php endif;

                   if ($aliases): ?>
                    <div id="tags" class="hidden md:flex flex-col w-1/3 lg:w-full bg-base-200 rounded-xl max-h-[fit-content] self-start my-2 p-4">
                        <h2 class="text-lg">Også kendt som</h2>
                        <p class="my-2 text-sm mb-4">Du kender måske også <?php echo $fname; ?> som:
                            <ul>
                                <?php
                                    foreach ($aliases as $alias): ?>
                                        <li class="text-sm">- <?php echo $alias['alias']; ?></li>
                                <?php endforeach; ?>
                           </ul>
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
                <div id="galleries" class="flex flex-row w-full md:w-2/3 p-4">
                    <?php
                        if ($shortcodes): ?>
                            <div id="instagram-feed" class="p-2">
                                <h2 class="text-lg">Instagram Feed</h2>
                                <p class="my-2 text-sm">Her kan du se <?php echo $fname; ?>'s seneste arbejde - billeder åbnes på Instagram</p>
                                <div class="flex flex-row flex-wrap">
                                    <?php
                                        if ($shortcodes):
                                            foreach ($shortcodes as $shortcode):
                                                echo do_shortcode($shortcode['shortcode']);
                                            endforeach;
                                        endif;
                                    ; ?>
                                </div>
                            </div>
                        <?php endif;
                    ?>
                </div>
            </div>
            <?php
                if ($contact_form): ?>
            <div id="artist-contact" class="flex flex-row w-full p-4">
                <aside class="flex flex-row w-full lg:w-1/2">
                    <div id="contact" class="flex flex-col w-full my-4 p-4 min-w-0">
                        <h2 class="text-lg">Kontakt</h2>
                        <p class="my-2 text-sm mb-4">Hvis du skal i kontakt med <?php echo $fname; ?>, kan du nemt benytte kontaktformlaren herunder. For booking af tid, anbefaler vi at bruge formularen på <a href="/booking" class="link link-hover primary">Book Tid</a>-siden.</p>
                        <div class="flex flex-row flex-wrap">
                            <?php echo do_shortcode(get_field('kontaktformular')); ?>
                        </div>
                    </div>
                </aside>
                <?php
                    if ($contact_photo): ?>
                        <div id="contact-image" class="w-full lg:w-1/2 md:visibility-hidden p-4 flex items-center">
                            <img src="<?php echo $contact_photo; ?>" class="rounded-full w-3/4 min-w-0 h-auto mx-auto">
                        </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php get_footer(); ?>
