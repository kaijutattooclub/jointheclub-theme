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
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<?php wp_head(); ?>
	<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EPZ1RKWQJ3"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-EPZ1RKWQJ3'); </script>
    <meta name="theme-color" content="#f67bb6" >
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="gridbg opacity-[10%] fixed top-0 left-0 w-screen h-screen bg-cover bg-center bg-repeat-y z-[-2] bg-base-100">
</div>
<div class="dustbg fixed top-0 left-0 w-screen h-screen bg-cover bg-center bg-repeat-y z-[-1]">
</div>
<div id="page" class="site container mx-auto mt-2">
<header id="site-navigation" class="navbar flex-1 md:flex-col lg:flex-row justify-between ">
    <div class="mb-0 md:mb-4 lg:mb-0">
        <?php the_custom_logo(); ?>
    </div>
    <?php
        wp_nav_menu(array(
            'menu'            => 'Primary Menu',
            'menu_class'      => 'menu-horizontal text-xl',
            'container'       => 'nav',
            'container_class' => 'flex-none hidden md:flex',
        ));
    ?>
    <nav class="menu text-xl inline-block justify-end md:hidden">
        <button data-collapse-toggle="mobile-menu-2" type="button"
            class="z-80 inline-flex items-center p-2 ml-1 text-sm text-primary bg-base-100 rounded-lg xl:hidden hover:bg-base-200 focus:outline-none focus:ring-2 focus:ring-primary"
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

        <div class="items-center justify-between w-3/4 bg-base-200 shadow-xl flex-col min-h-screen absolute z-40 top-0 left-0 pt-[3rem] px-[3rem] border-r-4 border-primary ease-in-out hidden transition-all duration-1000" id="mobile-menu-2"> 
            <div class="computer-font text-4xl font-bold text-primary text-center w-full" id="jap-menu">メニュー</div>
            <?php
                wp_nav_menu(array(
                    'menu'            => 'mobile',
                    'menu_class'      => 'flex-col justify-center mt-[4rem] touch-none text-2xl z-40',
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
