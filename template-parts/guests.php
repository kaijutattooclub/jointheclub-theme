<?php

$args = array(
    'post_type'       => 'artist', // Custom post type
    'posts_per_page'  => -1,        // Show all posts
    'meta_query'      => array(
        array(
            'key'     => 'guest_artist',
            'value'   => '1',
            'compare' => '='
        )
    )
);
$q = new WP_Query($args);
$previous_guest_artists = array();
$guest_artists = array();
$upcoming_guest_artists = array();
$heading_displayed = false;
if ($q->have_posts()) :
    if (!$heading_displayed) {
        echo "<h1 class='text-xl'>Nuværende og kommende</h1>";
        $heading_displayed = true;
    }
    echo '<div class="flex">'; // Add flex container
    while ($q->have_posts()) : $q->the_post();
        $artist_fname = get_field('artist_fname');
        $artist_lname = get_field('artist_lname');
        $artist_name = $artist_fname . ' ' . $artist_lname;
        $instagram_username = get_field('instagram-username');
        $instagram_url = 'https://www.instagram.com/' . $instagram_username;
        $artist_email = get_field('artist-email');
        $artist_image = get_field('artist-image');
        $guest_gallery = get_field('guest_gallery');
        $guest_style = get_field('artist_style');
        $start_date = get_field('start_date');
        $formatted_start_date = DateTime::createFromFormat('d/m/Y', $start_date)->format('Y-m-d');
        $start_unix = strtotime($formatted_start_date);
        $to_date = get_field('to_date');
        $to_unix = strtotime(DateTime::createFromFormat('d/m/Y', $to_date)->format('Y-m-d'));
        $now = strtotime(date('Y-m-d'));
        $today_unix = strtotime($now);
        if ($now >= $start_unix && $now <= $to_unix) {
        ?>
        <div class="w-full md:w-1/2 card rounded-xl m-4 mb-[4rem] p-4 bg-base-200">
            <div class="flex mb-4"><img src="<?php echo $artist_image; ?>" title="<?php echo $artist_name ?>" alt="<?php echo $artist_name; ?>" class="w-24 rounded-full max-w-1/5 h-auto border-4 border-primary -top-[2rem] aspect-1/1">
            <div class="ml-4 mt-2 flex flex-col"><h2 class="text-2xl"><?php echo $artist_name; ?></h2>
            <?php echo "<p><strong>".$start_date." - ".$to_date."</strong></p></div></div>";?>

            <p>Se <?php echo $artist_fname; ?>'s arbejde på <a href="<?php echo $instagram_url; ?>" target="_blank" class="link link-hover text-primary strong bold font-bold">Instagram</a>, hvor de også kan kontaktes ift. eventuelle ledige tider!</p>
            <p><?php 
                /* For each style in existing variable $guest_style */
                foreach ($guest_style as $style_id) {
                    $style_term = get_term($style_id);
                    if (!is_wp_error($style_term)) {
                        echo "<span class='badge'>".$style_term->name."</span>";
                    }
                } ?>
            </p>
            <?php if ($guest_gallery) : ?>
            <div class="w-full">
                <h3 class="text-lg mt-4">Galleri</h3>
                <div class="flex flex-wrap">
                    <?php
                        foreach ($guest_gallery as $image) : ?>
                            <div class="w-1/3">
                                <a href="<?php echo $instagram_url ; ?>" target="_blank"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="w-full p-2 aspect-[1/1]"></a>
                            </div>
                        <?php endforeach;
                    else :
                        echo 'Ingen billeder 🫥';
                    endif; ?>
                </div>
            </div>
            <div class="card-footer text-center strong font-bold"><p><?php echo $artist_fname; ?> er i Kaiju Tattoo Club lige nu! </p></div>
        </div>
        <?php
        } else {
            array_push($previous_guest_artists, $start_date."-".$to_date." ".$artist_name.", <a href='".$instagram_url."' target='_blank' class='link link-hover text-primary strong bold font-bold'>@".$instagram_username."</a>");
        }
    endwhile;
    echo '</div>'; // Close flex container
    wp_reset_postdata();
else :
    echo 'Ingen tidligere eller planlagte gæstekunstnere i Kaiju Tattoo Club';
endif;

if ($previous_guest_artists) : ?>
    <h2 class="text-2xl">Tidligere gæsteartister</h2>
    <ul>
<?php
    foreach ($previous_guest_artists as $artist) :
        echo "<li class='ml-4'>- ".$artist."</li>";
    endforeach; ?>
    </ul>
<?php
endif;

get_footer();
