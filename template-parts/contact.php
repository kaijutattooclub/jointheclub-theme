<?php
    $address = get_field('address', 'option');
    $zip_city = get_field('zip_city', 'option');
    $cvr = get_field('cvr', 'option');
    $phone = get_field('phone', 'option');
    $hours = get_field('hours', 'option');

   ?>

    <div class="entry-content">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row">
                <div class="flex flex-col w-full md:w-1/3 pr-0 md:pr-2" style="flex-basis: 40%;">
                    <h2 class="wp-block-heading has-medium-font-size">Adresse</h2>
                    <p><strong><?php echo ucwords(strtolower(get_bloginfo('name'))); ?></strong></p>
                    <p><?php echo $address; ?></p>
                    <p><?php echo $zip_city; ?></p>
                    <?php if ($cvr) : ?>
                        <p><strong>CVR:</strong> <?php echo $cvr; ?><br><br></p>
                    <?php endif; ?>
                    <p><strong>Tlf:</strong> <a href="tel:<?php echo $phone; ?>" target="_blank" class="link link-hover" title="Give us a holla! 😎"><?php echo $phone; ?></a></p>
                        <?php get_template_part('template-parts/hours'); ?>
                        <?php get_template_part('template-parts/map'); ?>
                </div>
                <div class="w-full md:w-2/3 pl-0 md:pl-4">
                    <h2 class="wp-block-heading has-medium-font-size">Kontakt os</h2>
                    <?php echo do_shortcode('[contact-form-7 id="4998d78" title="Kontakt-siden"]');?>
                </div>
