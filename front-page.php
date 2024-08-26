<?php get_header(); ?>

<main>
    <div class="container">

      <?php require get_template_directory() . '/template-parts/hero.php';
      require get_template_directory() . '/template-parts/about.php';
      require get_template_directory() . '/template-parts/gallery.php';
      the_content(); ?>
    </div>
</main>
<?php get_footer(); ?>
