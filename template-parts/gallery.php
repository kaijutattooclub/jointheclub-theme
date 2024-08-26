<?php
    /* Gallery
    ================================================== */
    $feed = get_field('instagram_feed', 'option');
    $instagram_username = get_field('instagram', 'option');
    $gallery_text = get_field('gallery_text', 'option');
    $instagram_feed = do_shortcode(get_field('instagram_feed', 'option'));

    if ($feed) {
        ?>
        <div class="w-full container mx-auto p-4"><?php
        echo '<h2 class="section-title text-xl m-6 p-4">Seneste Instagram uploads</h2>';
        ?>
        <div class="w-full md:w-2/3 p-4"><?php
            echo $instagram_feed;?>
        </div><div class="w-full md:1/3"><?php echo $gallery_text;?></div></div><?php
    }else if(!$feed && $instagram_username) {
        echo '<h2 class="section-title text-2xl m-4 py-[4rem] my-[4rem] text-center">Se vores arbejde og galleri, ved at følge os på <a href="https://instagram.com/'.$instagram_username.'" target="_blank" class="link link-hover">Instagram!</h2>';
    }
    else if (!$feed && current_user_can('edit_posts')) {
        echo '<h2 class="section-title text-2xl m-4 py-4">Instagram feed ikke konfigureret</h2>';
    }
    else {
        echo '<h2 class="section-title text-2xl m-4 py-4">Klar til at bestille en tid? Gå til <a href="/booking" class="link link-hover">booking</a>-siden</h2>';}
?>
