<?php 
/* shows the thank you message after a successful form submission */
  $thanks_header = "Tak for din besked!";
  $thanks_text = "Vi har modtaget din besked og vil vende tilbage hurtigst muligt. Du vil om få sekunder blive sendt til forsiden.";
  $template_directory = get_template_directory_uri();
  $lottie_path = $template_directory . '/src/letter-animation.json';

?>
  <section id="intro" class="w-full">
      <div class="container mx-auto p-10">
          <div class="flex sm:w-full md:w-full">
              <div class="flex-col mx-auto text-center">
              <lottie-player class="text-center mx-auto" src="<?php echo $lottie_path ?>" speed="0.5" style="width: 250px; height: 250px" loop autoplay direction="1" mode="normal"></lottie-player>
              <h2 class="text-2xl"><?php echo $thanks_header; ?></h1>
              <?php echo $thanks_text; ?>
              </div>
          </div>
      <style>.entry-header {display: none;}</style>
      </div>
  </section>
<script>
  /* Redirect to frontpage after 5 seconds */
  setTimeout(function() {
    window.location.href = '/';
  }, 5000);
</script>
