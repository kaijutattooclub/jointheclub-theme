<?php
  /* Hero section of the page */
  $show_hero = get_field('show_hero', 'option');
  if ($show_hero) {
  ?>
    <div class="row">
        <div class="col-12 p-4">
            <div class="hero">
                <div class="hero-content flex-col lg:flex-row-reverse items-center">
                    <div class="w[2/3]"><img src="<?php the_field('hero_img'); ?>" class="w-full shadow-2xl min-w-0" /></div>
                    <div class="items-center w-[1/3]">
                        <h1 class="text-4xl font-bold">
                            <?php the_field('hero-title', 'option'); ?>
                        </h1>
                        <p class="text-xl py-6">
                            <?php the_field('cta-text', 'option'); ?>
                        </p>
                        <button class="primary mt-4"><a href="<?php the_field('btn-dest'); ?>"><?php the_field('btn-text', 'option'); ?></a></button>
                        <a href="<?php the_field('secondary_btn_dest');?>"><button class="hero-secondary btn-outline mt-4 min-w-0"><?php the_field('secondary-btn-text', 'option'); ?></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php
  }
?>
