<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Join_The_Club
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Victor+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="gridbg fixed top-0 left-0 w-screen h-screen bg-cover bg-center bg-repeat-y z-[-2] opacity-[30%] bg-base-100">
</div>
<div class="dustbg fixed top-0 left-0 w-screen h-screen bg-cover bg-center bg-repeat-y z-[-1]">
</div>
<div id="page" class="site container mx-auto mt-2">
<header id="site-navigation" class="navbar flex-1 md:flex-col lg:flex-row justify-between ">
    <div>
        <?php the_custom_logo(); ?>
    </div>
    <?php
        wp_nav_menu(array(
            'menu'            => 'Primary Menu',
            'menu_class'      => 'menu-horizontal text-xl',
            'container'       => 'nav',
            'container_class' => 'flex-none hidden lg:flex',
        ));
    ?>
    <nav class="menu text-xl inline-block justify-end lg:hidden">
        <button data-collapse-toggle="mobile-menu-2" type="button"
            class="z-999 inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="mobile-menu-2" aria-expanded="true">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>

        <div class="items-center justify-between w-full flex-col min-h-screen bg-base-200 absolute z-100 top-0 left-0 pt-1/5 hidden" id="mobile-menu-2">
            <?php
                the_custom_logo();
                wp_nav_menu(array(
                    'menu'            => 'mobile',
                    'menu_class'      => 'flex-col mt-4 font-medium',
                ));
            ?>
            <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function () {
              const toggleButton = document.querySelector(
                '[data-collapse-toggle="mobile-menu-2"]',
              );
              const mobileMenu = document.getElementById("mobile-menu-2");

              toggleButton.addEventListener("click", function () {
                mobileMenu.classList.toggle("hidden");
                console.log("clicked");
                const expanded =
                  toggleButton.getAttribute("aria-expanded") === "true" || false;
                toggleButton.setAttribute("aria-expanded", !expanded);
              });
            });

            </script>
        </div>
    </nav>
</header>
