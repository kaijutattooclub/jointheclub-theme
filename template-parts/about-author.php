    <!-- Author card -->
    <div
      class="bg-base-200 relative max-w-[80%] mx-auto mb-8 md:my-8 flex flex-col items-start space-y-4 sm:flex-row sm:space-y-0 sm:space-x-6 px-4 py-8 border-2 border-dashed border-primary shadow-lg rounded-xl">

      <span class="absolute text-xs font-medium text-[--stroke] top-0 left-0 rounded-br-lg rounded-tl-lg px-2 py-1 bg-primary border-gray-400 border-b-2 border-r-2 border-dashed ">
        <?php 
          global $post;
          $author_id = $post->post_author;
          print 'om kaiju#'.$author_id;
        ?>
      </span>

      <div class="flex justify-center max-w-1/4 mx-auto">
        <?php
          $avatar = get_avatar_url($author_id, array('size' => 250));
        ?>
        <img class="object-cover w-36 h-36 mt-3 mr-3 rounded-full" src="<?php print $avatar; ?>">
      </div>

      <div class="w-full sm:w-auto flex flex-col items-center sm:items-start">
          <p class="font-display mb-2 text-2xl font-bold" itemprop="author">
            <?php 
              echo esc_html(get_the_author_meta('display_name', $author_id));
              echo "<span class='text-italic'> (kaiju_#".$author_id.'.doc)</span>'; 
            ?>
          </p>

          <div class="mb-4 md:text-md text-white">
            <p>
              <?php 
                echo esc_html(get_the_author_meta('description', $author_id));
              ?>
            </p>
          </div>

          <div class="flex gap-4">
            <a title="youtube url" href="https://www.youtube.com/@mcqmate" target="_blank" rel="noopener noreferrer">
              <svg class="h-6 w-6 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5949 4.45999C21.5421 4.71353 22.2865 5.45785 22.54 6.40501C22.9982 8.12001 23 11.7004 23 11.7004C23 11.7004 23 15.2807 22.54 16.9957C22.2865 17.9429 21.5421 18.6872 20.5949 18.9407C18.88 19.4007 12 19.4007 12 19.4007C12 19.4007 5.12001 19.4007 3.405 18.9407C2.45785 18.6872 1.71353 17.9429 1.45999 16.9957C1 15.2807 1 11.7004 1 11.7004C1 11.7004 1 8.12001 1.45999 6.40501C1.71353 5.45785 2.45785 4.71353 3.405 4.45999C5.12001 4 12 4 12 4C12 4 18.88 4 20.5949 4.45999ZM15.5134 11.7007L9.79788 15.0003V8.40101L15.5134 11.7007Z" stroke="currentColor" stroke-linejoin="round"></path>
              </svg>
            </a>
            <a title="website url" href="https://mcqmate.com/" target="_blank" rel="noopener noreferrer">
              <svg class="h-6 w-6 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418">
              </path>
              </svg>
            </a>
          </div>
      </div>

    </div>
