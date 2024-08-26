<?php
  $hours = get_field('hours', 'option');
  if ($hours) {
    echo '<h2 class="wp-block-heading has-medium-font-size">Åbningstider</h2>';
    echo get_field('hours', 'option');
  };?>
