<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Join_The_Club
 */
	$not_found_header = "Ups! Siden du leder efter eksisterer ikke!";
	$not_found_text = "Lidt ligesom denne dino 😥<br />Du vil automatisk blive sendt til forsiden om ganske få sekunder - eller klik <a href='/'>her</a> for at komme tilbage til forsiden.";
	$template_directory = get_template_directory_uri();
	$lottie_path = $template_directory . '/src/404-dino.json';
get_header();
?>

	<main id="primary" class="site-main my-8">
		<section id="intro" class="w-full">
			<div class="container mx-auto p-10">
				<div class="flex sm:w-full md:w-full">
					<div class="flex-col mx-auto text-center">
					<lottie-player class="text-center mx-auto" src="<?php echo $lottie_path ?>" speed="1" style="width: 617px; height: 450px" loop autoplay direction="1" mode="normal"></lottie-player>
					<h2 class="text-2xl"><?php echo $not_found_header; ?></h2>
					<p class="p-4"><?php echo $not_found_text; ?></p>
					</div>
				</div>
			<style>.entry-header {display: none;}</style>
			</div>
		</section>
		<script>
			setTimeout(function() {
				window.location.href = '/';
			}, 10000);
		</script>
	</main>

<?php
get_footer();
