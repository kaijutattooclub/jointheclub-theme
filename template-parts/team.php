<?php
// Define custom query parameters
?>
<section id="intro" class="w-full text-center pb-10">
<h1 class="computerfont text-4xl">Kaiju Tattoo Club</h1>
<p>Vores lokaler, som ligger centralt i København, er designet til at være både spændende og funktionelle, og til at skabe en atmosfære, hvor du som kunde kan føle dig tryg og afslappet. </p>
<button class="primary mt-4 rounded-xl px-4 py-2"><a href="/kontakt">Om Kaiju Tattoo Club</a></button>
</section>

<section id="team" class="w-full py-20 flex flex-wrap justify-center gap-2">

<?php
  // Create custom query
  $args = array(
      'post_type'       => 'artist', // Custom post type
      'posts_per_page'  => -1,        // Show all posts
      'meta_key'        => 'order',    // Custom field key to sort by
      'orderby'         => 'meta_value_num',   // Order by number value
      'order'           => 'ASC',              // Change to 'DESC' for descending order
  );
  $artist_query = new WP_Query($args);

  // Check if there are posts
  if ($artist_query->have_posts()) :

      // Start the loop
      while ($artist_query->have_posts()) : $artist_query->the_post();
        // Retrieve custom field values
        $instagram_username = get_field('instagram-username');
        $artist_email = get_field('artist-email');
        $artist_image = get_field('artist-image');
        // Output artist details
        ?>
          <div
            class="w-[20rem] mx-auto flex flex-col gap-2 px-4 border border-primary rounded-lg bg-base-200 shadow-lg">
            <div class="w-full flex justify-center items-center">
              <img class="w-[8rem] h-[8rem] rounded-full outline outline-2 outline-primary shadow-lg relative -top-[4rem]" src="<?php echo $artist_image;?>" alt="<?php the_title(); ?>" />
            </div>

            <div class="w-full h-full text-center flex flex-col gap-4 relative -top-10">
              <h1 class="text-lg font-semibold">
                <a href="https://instagram.com/<?php echo $instagram_username;?>" target="_blank" class="link link-hover" title="Find <?php the_title();?> på Instagram">@<?php echo esc_attr($instagram_username); ?></a>
              </h1>

              <h2 class="text-xl capitalize font-semibold computerfont text-center">
                  <?php the_title(); ?>
              </h2>
              <p class="text-gray-700 dark:text-gray-300">
                <? the_excerpt(); ?>
              </p>

              <button class="w-[60%] primary mx-auto rounded-xl px-4 py-2"><a href="<?php the_permalink(); ?>" target="_self">Se arbejde</a></button>
            </div>

          </div>
        <?php

      // End the loop
      endwhile;

      // Reset post data
      wp_reset_postdata();

  else :

      // No posts found
      echo '<p>Vent venligst, imens vi finder nogle artister til dig...</p>';

  endif;
?>
</section>
