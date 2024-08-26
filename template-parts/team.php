<?php
    $show_team = get_field('show_team', 'option');
    $team_headline = get_field('team_headline', 'option');
    $team_short_text = get_field('team_short_text', 'option');
    $team_btn_text = get_field('team_btn_text', 'option');
?>
    <h2 id="holdet" class="text-2xl w-full text-center mb-4"><?php echo $team_headline; ?></h3>
        <p class="w-full text-center"><?php echo $team_short_text; ?></p>
        <section class="container mx-auto w-full py-20 flex flex-wrap justify-center gap-2">
    <?php
  // Create custom query
  $args = array(
      'post_type'       => 'artist', // Custom post type
      'posts_per_page'  => -1,        // Show all posts
      'meta_key'        => 'artist-order',    // Custom field key to sort by
      'orderby'         => 'meta_value_num',   // Order by number value
      'order'           => 'ASC',              // Change to 'DESC' for descending order
      'meta_query'      => array(
          array(
              'key'     => 'guest_artist',
              'value'   => '0',
              'compare' => '='
          )
      )
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
            class="w-[90vw] md:w-[25rem] lg:w-[20rem] mx-auto flex flex-col gap-2 px-4 py-2 my-4 border border-primary rounded-lg bg-base-100 shadow-lg">
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
                <?php the_excerpt(); ?>
              </p>

              <a class="mt-auto" href="<?php the_permalink(); ?>" target="_self"><button class="w-[60%] primary mx-auto rounded-xl px-4 py-2 mt-auto"><?php echo $team_btn_text;?></button></a>
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
