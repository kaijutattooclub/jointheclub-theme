<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Join_The_Club
 */

 $show_cvr = get_field('vis_cvr_nummer', 'option');
 $show_phone = get_field('vis_telefonnummer', 'option');
 $show_cta = get_field('vis_footer_cta', 'option');
 $show_contactlink = get_field('vis_kontaktlink', 'option');
 $show_socials = get_field('vis_social_media_ikoner', 'option');
 $website_name = get_bloginfo('name');
 $year = date('Y');


 $address = get_field('address', 'option');
 $zip_city = get_field('zip_city', 'option');

if ($show_cvr) {
    $cvrnummer = get_field('cvr', 'option');
    $cvrparagraf = "<p>CVR: ".$cvrnummer."</p><br />";
};
if ($show_phone) {
    $telefonnummer = get_field('phone', 'option');
    $telefonparagraf = "<p>Tel: <a href='tel:".$telefonnummer."'>".$telefonnummer."</a></p><br />";
};
if ($show_cta) {
    $headline = get_field('footer_cta', 'option');
    $btn = get_field('footer_cta_btn', 'option');
    $btnurl = get_field('btn_link', 'option');
};
 $footer_logo = get_field('kvadratisk_logo', 'option');
 $footer_logo_url = $footer_logo['url'];

?>
</div><!-- #page -->

<footer class="w-full footer bg-base-200 border-t-2 border-dashed border-primary text-content flex flex-col">
  <div class="container mx-auto footer md:py-10 ">
    <aside class="w-2/3 mx-auto items-center justify-center text-center">
      <!-- logo -->
      <a href="/">
        <img src="<?php echo $footer_logo_url; ?>" title="<?php echo $website_name; ?>" alt="<?php echo $website_name; ?>" class="w-[20rem] -mt-6 mx-auto" />
      </a>
    </aside>
    <footer class="w-full md:grid">
        <h6 class="footer-title text-lg md:text-base my-0 leading-none">Information</h6>
        <?php
            wp_nav_menu(array(
                'menu'            => 'Information',
                'menu_class'      => 'menu flex-col',
                'container'       => 'div',
                'container_class' => 'w-full flex-none text-lg md:hidden border-b-1 border-[--base-100]',
            ));
            wp_nav_menu(array(
                'menu'            => 'Information',
                'menu_class'      => 'desktop-footer',
                'container'       => 'div',
                'container_class' => 'hidden md:inline w-full flex-none',
            ));
        ?>
    </footer>
    <footer class="w-full md:grid">
      <h6 class="footer-title text-lg md:text-base my-0 leading-none">Tatoveringer</h6>
      <?php
          wp_nav_menu(array(
              'menu'            => 'Tatoveringer',
              'menu_class'      => 'menu flex-col',
              'container'       => 'div',
              'container_class' => 'w-full flex-none text-lg md:hidden border-b-1 border-[--base-100]',
          ));
          wp_nav_menu(array(
              'menu'            => 'Tatoveringer',
              'menu_class'      => 'desktop-footer',
              'container'       => 'div',
              'container_class' => 'hidden md:inline w-full flex-none',
          ));
      ?>
    </footer>
    <footer>
      <h6 class="footer-title text-lg md:text-base my-0 leading-none">Kontakt Os</h6>
      <div class="w-full">
          <?php
          echo "<p>".$address."<br>".$zip_city."</p>";
          echo $cvrparagraf; ?>
      <p><strong>Find vej: </strong><a href="https://www.google.com/maps/dir//Kaiju+Tattoo+Club+<?php echo $address.'+'.$zip_city;?>" target="_blank"class="link link-hover">Google Maps</a></p><br />
      <?php echo $telefonparagraf; ?>
      <?php
      if ($show_contactlink) {
          $contactlink = get_field('kontakt_link', 'option');
              echo '<a class="link link-hover text-primary" href="/kontakt">Kontaktformular</a>';
          }
        ?>

      </div>
    </footer>
  </div>
  <div class="container mx-auto bg-base-200 pt-2">
      <?php
        if($show_cta) {
        echo "<h2 class='mx-auto text-lg pb-4'>".$headline."</h2>";
        echo "<a href='".$btnurl."' class='mx-auto mb-4'><button class='primary'>".$btn."</button></a>";
        }
      ?>
      <div class="flex pb-5 px-3 m-auto pt-5 border-t text-gray-800 text-sm flex-col max-w-screen-lg items-center opacity-70">
      <?php
        if ($show_socials) {?>
            <div id="socials" class="md:flex-auto  mt-2 flex-row flex">
            <?php
                $instagram_url = "https://instagram.com/".get_field('instagram', 'option');
                $facebook_url = get_field('facebook_link', 'option');
                $tiktok_url = "https://tiktok.com/@".get_field('tiktok_brugernavn', 'option');
                if ($instagram_url != "https://instagram.com/") {?>
                    <a href="<?php echo $instagram_url;?>" target="_blank" class="w-6 mx-2">
                    <svg width="32px" height="32px" viewBox="-1.2 -1.2 26.40 26.40" fill="black" xmlns="http://www.w3.org/2000/svg" class="hover:fill-primary-600">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                    <g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" class="hover:fille-primary" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#fff"/> <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#fff"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#fff"/> </g>
                    </svg>
                    </a>
                <?php };

                if ($facebook_url) {?>
                    <a href="https://www.facebook.com/Kaijutattooclub" class="w-6 mx-2">
                        <svg width="32px" height="32px" viewBox="-1.2 -1.2 26.40 26.40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                        <g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H15V13.9999H17.0762C17.5066 13.9999 17.8887 13.7245 18.0249 13.3161L18.4679 11.9871C18.6298 11.5014 18.2683 10.9999 17.7564 10.9999H15V8.99992C15 8.49992 15.5 7.99992 16 7.99992H18C18.5523 7.99992 19 7.5522 19 6.99992V6.31393C19 5.99091 18.7937 5.7013 18.4813 5.61887C17.1705 5.27295 16 5.27295 16 5.27295C13.5 5.27295 12 6.99992 12 8.49992V10.9999H10C9.44772 10.9999 9 11.4476 9 11.9999V12.9999C9 13.5522 9.44771 13.9999 10 13.9999H12V21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z" fill="#fff"/> </g>
                        </svg>
                    </a>
                <?php
                };

                if ($tiktok_url != "https://tiktok.com/@") {?>
                    <a href="<?php echo $tiktok_url;?>" target="_blank" class="w-6 mx-2">
                        <svg width="32px" height="32px" viewBox="-1.6 -1.6 35.20 35.20" fill="white" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                        <g id="SVGRepo_iconCarrier"> <path d="M8.45095 19.7926C8.60723 18.4987 9.1379 17.7743 10.1379 17.0317C11.5688 16.0259 13.3561 16.5948 13.3561 16.5948V13.2197C13.7907 13.2085 14.2254 13.2343 14.6551 13.2966V17.6401C14.6551 17.6401 12.8683 17.0712 11.4375 18.0775C10.438 18.8196 9.90623 19.5446 9.7505 20.8385C9.74562 21.5411 9.87747 22.4595 10.4847 23.2536C10.3345 23.1766 10.1815 23.0889 10.0256 22.9905C8.68807 22.0923 8.44444 20.7449 8.45095 19.7926ZM22.0352 6.97898C21.0509 5.90039 20.6786 4.81139 20.5441 4.04639H21.7823C21.7823 4.04639 21.5354 6.05224 23.3347 8.02482L23.3597 8.05134C22.8747 7.7463 22.43 7.38624 22.0352 6.97898ZM28 10.0369V14.293C28 14.293 26.42 14.2312 25.2507 13.9337C23.6179 13.5176 22.5685 12.8795 22.5685 12.8795C22.5685 12.8795 21.8436 12.4245 21.785 12.3928V21.1817C21.785 21.6711 21.651 22.8932 21.2424 23.9125C20.709 25.246 19.8859 26.1212 19.7345 26.3001C19.7345 26.3001 18.7334 27.4832 16.9672 28.28C15.3752 28.9987 13.9774 28.9805 13.5596 28.9987C13.5596 28.9987 11.1434 29.0944 8.96915 27.6814C8.49898 27.3699 8.06011 27.0172 7.6582 26.6277L7.66906 26.6355C9.84383 28.0485 12.2595 27.9528 12.2595 27.9528C12.6779 27.9346 14.0756 27.9528 15.6671 27.2341C17.4317 26.4374 18.4344 25.2543 18.4344 25.2543C18.5842 25.0754 19.4111 24.2001 19.9423 22.8662C20.3498 21.8474 20.4849 20.6247 20.4849 20.1354V11.3475C20.5435 11.3797 21.2679 11.8347 21.2679 11.8347C21.2679 11.8347 22.3179 12.4734 23.9506 12.8889C25.1204 13.1864 26.7 13.2483 26.7 13.2483V9.91314C27.2404 10.0343 27.7011 10.0671 28 10.0369Z" fill="#EE1D52"/> <path d="M26.7009 9.91314V13.2472C26.7009 13.2472 25.1213 13.1853 23.9515 12.8879C22.3188 12.4718 21.2688 11.8337 21.2688 11.8337C21.2688 11.8337 20.5444 11.3787 20.4858 11.3464V20.1364C20.4858 20.6258 20.3518 21.8484 19.9432 22.8672C19.4098 24.2012 18.5867 25.0764 18.4353 25.2553C18.4353 25.2553 17.4337 26.4384 15.668 27.2352C14.0765 27.9539 12.6788 27.9357 12.2604 27.9539C12.2604 27.9539 9.84473 28.0496 7.66995 26.6366L7.6591 26.6288C7.42949 26.4064 7.21336 26.1717 7.01177 25.9257C6.31777 25.0795 5.89237 24.0789 5.78547 23.7934C5.78529 23.7922 5.78529 23.791 5.78547 23.7898C5.61347 23.2937 5.25209 22.1022 5.30147 20.9482C5.38883 18.9122 6.10507 17.6625 6.29444 17.3494C6.79597 16.4957 7.44828 15.7318 8.22233 15.0919C8.90538 14.5396 9.6796 14.1002 10.5132 13.7917C11.4144 13.4295 12.3794 13.2353 13.3565 13.2197V16.5948C13.3565 16.5948 11.5691 16.028 10.1388 17.0317C9.13879 17.7743 8.60812 18.4987 8.45185 19.7926C8.44534 20.7449 8.68897 22.0923 10.0254 22.991C10.1813 23.0898 10.3343 23.1775 10.4845 23.2541C10.7179 23.5576 11.0021 23.8221 11.3255 24.0368C12.631 24.8632 13.7249 24.9209 15.1238 24.3842C16.0565 24.0254 16.7586 23.2167 17.0842 22.3206C17.2888 21.7611 17.2861 21.1978 17.2861 20.6154V4.04639H20.5417C20.6763 4.81139 21.0485 5.90039 22.0328 6.97898C22.4276 7.38624 22.8724 7.7463 23.3573 8.05134C23.5006 8.19955 24.2331 8.93231 25.1734 9.38216C25.6596 9.61469 26.1722 9.79285 26.7009 9.91314Z" fill="#fffff"/> <path d="M4.48926 22.7568V22.7594L4.57004 22.9784C4.56076 22.9529 4.53074 22.8754 4.48926 22.7568Z" fill="#69C9D0"/> <path d="M10.5128 13.7916C9.67919 14.1002 8.90498 14.5396 8.22192 15.0918C7.44763 15.7332 6.79548 16.4987 6.29458 17.354C6.10521 17.6661 5.38897 18.9168 5.30161 20.9528C5.25223 22.1068 5.61361 23.2983 5.78561 23.7944C5.78543 23.7956 5.78543 23.7968 5.78561 23.798C5.89413 24.081 6.31791 25.0815 7.01191 25.9303C7.2135 26.1763 7.42963 26.4111 7.65924 26.6334C6.92357 26.1457 6.26746 25.5562 5.71236 24.8839C5.02433 24.0451 4.60001 23.0549 4.48932 22.7626C4.48919 22.7605 4.48919 22.7584 4.48932 22.7564V22.7527C4.31677 22.2571 3.95431 21.0651 4.00477 19.9096C4.09213 17.8736 4.80838 16.6239 4.99775 16.3108C5.4985 15.4553 6.15067 14.6898 6.92509 14.0486C7.608 13.4961 8.38225 13.0567 9.21598 12.7484C9.73602 12.5416 10.2778 12.3891 10.8319 12.2934C11.6669 12.1537 12.5198 12.1415 13.3588 12.2575V13.2196C12.3808 13.2349 11.4148 13.4291 10.5128 13.7916Z" fill="#69C9D0"/> <path d="M20.5438 4.04635H17.2881V20.6159C17.2881 21.1983 17.2881 21.76 17.0863 22.3211C16.7575 23.2167 16.058 24.0253 15.1258 24.3842C13.7265 24.923 12.6326 24.8632 11.3276 24.0368C11.0036 23.823 10.7187 23.5594 10.4844 23.2567C11.5962 23.8251 12.5913 23.8152 13.8241 23.341C14.7558 22.9821 15.4563 22.1734 15.784 21.2774C15.9891 20.7178 15.9864 20.1546 15.9864 19.5726V3H20.4819C20.4819 3 20.4315 3.41188 20.5438 4.04635ZM26.7002 8.99104V9.9131C26.1725 9.79263 25.6609 9.61447 25.1755 9.38213C24.2352 8.93228 23.5026 8.19952 23.3594 8.0513C23.5256 8.1559 23.6981 8.25106 23.8759 8.33629C25.0192 8.88339 26.1451 9.04669 26.7002 8.99104Z" fill="#69C9D0"/> </g>
                        </svg>
                    </a>
                    <?php };
                    ?></div><?php
                }
                ?>
          <div class="my-8 text-xs flex flex-col md:flex-row text-white opacity-70"><p class="">© 2022-<?php echo $year.', '.$website_name.' ';?></p> <p>- Alle rettigheder forbeholdes</p></div>
      </div>
  </div>
  </div>
</footer>
<div id="cbanner" class="fixed bottom-0 p-6 w-full flex justify-right z-[2000]">
    <div class="bg-primary text-[--stroke] bg-opacity-95 text-xs rounded-md fade w-[450px] show">
        <div class="p-4 flex items-center justify-between px-6 rounded border border-[--stroke]">
            <p>
                Ved at bruge <strong>KaijuTattooClub.dk</strong> accepterer du vores
                <a class="link link-hover font-bold" href="#" target="_blank">Cookie Politik</a>.
            </p>
            <button id="cookie-accept" type="button" class="px-5 py-3 rounded-lg text-[--stroke] hover:bg-green-800 ml-1.5 min-w-max">Accepter</button>
        </div>
    </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      // Check if the user has already accepted cookies
      if (localStorage.getItem('cookieAccepted') === 'true') {
          document.getElementById('cbanner').style.display = 'none';
      } else {
          document.getElementById('cookie-accept').addEventListener('click', function () {
              console.log('cookie-accept clicked');
              document.getElementById('cbanner').style.display = 'none';
              localStorage.setItem('cookieAccepted', 'true'); // Store the consent
          });
      }
  });
</script>
<?php wp_footer(); ?>

</body>
</html>
