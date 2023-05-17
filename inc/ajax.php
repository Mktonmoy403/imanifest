<?php
add_action('wp_ajax_imenifest_load_journals', 'imenifest_get_journals_callback'); 
add_action('wp_ajax_nopriv_imenifest_load_journals', 'imenifest_get_journals_callback');

function imenifest_get_journals_callback(){
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
     $posts_per_page = 12; // Adjust the number of posts per page as desired

     $args = array(
          'post_type' => 'journal',
          'post_status' => 'publish',
          'posts_per_page' => $posts_per_page,
          'paged' => $page,
     );

     $query = new WP_Query($args);

     ob_start();

     if ($query->have_posts()) {

          while ($query->have_posts()) : $query->the_post();
               ?>
               <div class="journal-card">
                    <a href="<?php echo esc_html( get_the_permalink() ); ?>">
                         <div class="journal-card-thumb">
                              <img class="thumbnail" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" alt="">
                              <span class="journal-icon"><i class="bi bi-lock-fill"></i></span>
                         </div>
                         <div class="journal-detail">
                              <h3><?php echo esc_html( get_the_title() ); ?></h3>
                         </div>
                    </a>
               </div>
               <?php
          endwhile;
 
          // Display pagination links
          $total_pages = $query->max_num_pages;
          if ($total_pages > 1) {
               echo '<div class="pagination">';
               echo '<ul>';
     
               for ($i = 1; $i <= $total_pages; $i++) {
                    echo '<li><a href="#" data-page="' . $i . '">' . $i . '</a></li>';
               }
     
               echo '</ul>';
               echo '</div>';
          }
          wp_reset_postdata();
     } else {
          // No more posts
          wp_send_json_success(array('data' => ''));
     }

     $output = ob_get_clean();
     wp_send_json_success(array('data' => $output, 'posts_per_page' => $posts_per_page));
}