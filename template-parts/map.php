<?php
    $address = get_field('address', 'option');
    $zip_city = get_field('zip_city', 'option');
    if ($address && $zip_city) {
       ?>
      <h2 class="wp-block-heading has-medium-font-size">Find vej</h2>
      <iframe width="425" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=12.555377483367922%2C55.672599350308424%2C12.562946677207949%2C55.67449453472552&amp;layer=mapnik&amp;marker=55.67354695399262%2C12.559162080287933" style="border: 2px solid #75fbbc"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=55.67355&amp;mlon=12.55916#map=19/55.67355/12.55916">Se stort kort</a></small>
    <?php };
?>
