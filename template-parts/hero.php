<?php
  /* Hero section of the page */
?>
<div class="row">
    <div class="col-12 p-4">

        <div class="hero">
          <div class="hero-content flex-col lg:flex-row-reverse items-center">
            <img
              src="<?php the_field('hero_img'); ?>"
              class="md:w-1/2 lg:w-full shadow-2xl" />
            <div class="items-center">
              <h1 class="text-4xl font-bold computerfont">
                <?php
                  the_field('hero-title')
                  ?>
                  </h1>
              <p class="text-xl py-6">
                <?php the_field('cta-text'); ?>
              </p>
              <button class="primary"><?php the_field('btn-text'); ?></button>
              <button class="hero-secondary btn-outline"><?php the_field('secondary-btn-text'); ?></button>
            </div>
          </div>
        </div>

    </div>
</div>
