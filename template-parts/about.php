<?php
// Define custom query parameters
    $show_about = get_field('show_about', 'option');
    $show_team = get_field('show_team', 'option');
    $about_header = get_field('about_header', 'option');
    $about_short_text = get_field('about_short_text', 'option');
    $about_link_text = esc_html(get_field('about_link_text', 'option'));
    $about_link = '<a href="/om-kaiju-tattoo-club" class="link link-hover text-primary hover:text-[--primary-600] font-bold text-right">'.$about_link_text.'</a>';
    $about_text = $about_short_text . ' ' . $about_link;
    if ($show_about) : ?>

    <section id="intro" class="fullfull w-full bg-base-200">
        <div class="container mx-auto p-10">
            <div class="flex sm:w-full md:w-full">
                <h2 class="text-2xl w-1/3"><?php echo $about_header; ?></h1>
                <div class="w-2/3 flex-row">
                <?php echo $about_text; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif;

    if ($show_team): ?>
            <section class="fullfull bg-base-200">
                <?php require get_template_directory() . '/template-parts/team.php'; ?>
            </section>
        </section>

    <?php endif; ?>
