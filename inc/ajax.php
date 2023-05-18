<?php
function allow_subscriber_public_posts($allcaps, $cap, $args) {
    if ($cap === 'read') {
        $allcaps[$cap] = true;
    }
    return $allcaps;
}
add_filter('user_has_cap', 'allow_subscriber_public_posts', 10, 3);
// Allow subscribers to access private posts
function allow_subscriber_private_posts($allcaps, $cap, $args) {
    if ($cap === 'read_private_posts') {
        $allcaps[$cap] = true;
    }
    return $allcaps;
}
add_filter('user_has_cap', 'allow_subscriber_private_posts', 10, 3);


add_action('wp_ajax_imenifest_load_journals', 'imenifest_get_journals_callback'); 
add_action('wp_ajax_nopriv_imenifest_load_journals', 'imenifest_get_journals_callback');

function imenifest_get_journals_callback() {
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $posts_per_page = 12; // Adjust the number of posts per page as desired

    $user_id = get_current_user_id();

    // Query arguments to retrieve public journal posts
    $args_public = array(
        'post_type' => 'journal',
        'post_status' => 'publish',
    );

    // Query arguments to retrieve private journal posts of the logged-in user
    $args_private = array(
        'post_type' => 'journal',
        'post_status' => 'private',
        'author' => $user_id,
    );

    // Merge the two query arguments
    $args = array(
        'post_type' => 'journal',
        'paged' => $page,
        'posts_per_page' => $posts_per_page,
        'meta_query' => array(
            'relation' => 'OR',
            $args_public,
            $args_private,
        ),
    );

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) {
        echo '<div class="journals-collection journals-collection-wrapper">';
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="journal-card">
                    <a href="<?php echo esc_html(get_the_permalink()); ?>">
                        <div class="journal-card-thumb">
                            <img class="thumbnail" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="">
                            <span class="journal-icon">
                            <?php
                                $post_status = get_post_status();
                                if ($post_status === 'publish') {
                                    echo '<i class="bi bi-globe"></i>'; // Display public icon
                                } else if ($post_status === 'private') {
                                    echo '<i class="bi bi-lock-fill"></i>'; // Display private icon
                                }
                            ?>
                            </span>
                        </div>
                        <div class="journal-detail">
                            <h3><?php echo esc_html(get_the_title()); ?></h3>
                        </div>
                    </a>
                </div>
                <?php
            endwhile;
        echo '</div>';

        // Display pagination links
        $total_pages = $query->max_num_pages;
        if ($total_pages > 1) {
            echo '<nav>';
                echo '<ul class="alljournal-pagination pagination d-flex justify-content-center flex-wrap pagination-flat pagination-success">';

                // Previous page link
                if ($page > 1) {
                    echo '<li class="page-item"><a class="page-link" href="#" data-page="' . ($page - 1) . '"><i class="bi bi-chevron-left"></i></a></li>';
                }

                // Numbered page links
                for ($i = 1; $i <= $total_pages; $i++) {
                    if ($i === $page) {
                        echo '<li class="page-item active"><a class="page-link" href="#" data-page="' . $i . '">' . $i . '</a></li>';
                    } else {
                        echo '<li class="page-item"><a class="page-link" href="#" data-page="' . $i . '">' . $i . '</a></li>';
                    }
                }

                // Next page link
                if ($page < $total_pages) {
                    echo '<li class="page-item"><a class="page-link" href="#" data-page="' . ($page + 1) . '"><i class="bi bi-chevron-right"></i></a></li>';
                }

                echo '</ul>';
            echo '</nav>';
        }
        wp_reset_postdata();
    } else {
        wp_send_json(array('data' => ''));
    }

    $output = ob_get_clean();
    wp_send_json_success(array('data' => $output, 'posts_per_page' => $posts_per_page));
}

// My Journals
add_action('wp_ajax_imenifest_load_my_journals', 'imenifest_get_myjournals_callback'); 
add_action('wp_ajax_nopriv_imenifest_load_my_journals', 'imenifest_get_myjournals_callback');

function imenifest_get_myjournals_callback() {
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $posts_per_page = 12; // Adjust the number of posts per page as desired

    $user_id = get_current_user_id();

    // Merge the two query arguments
    $args = array(
        'post_type' => 'journal',
        'paged' => $page,
        'posts_per_page' => $posts_per_page,
        'author' => $user_id,
    );

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) {
        echo '<div class="journals-collection journals-collection-wrapper">';
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="journal-card">
                    <a href="<?php echo esc_html(get_the_permalink()); ?>">
                        <div class="journal-card-thumb">
                            <img class="thumbnail" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="">
                            <span class="journal-icon">
                            <?php
                                $post_status = get_post_status();
                                if ($post_status === 'publish') {
                                    echo '<i class="bi bi-globe"></i>'; // Display public icon
                                } else if ($post_status === 'private') {
                                    echo '<i class="bi bi-lock-fill"></i>'; // Display private icon
                                }
                            ?>
                            </span>
                        </div>
                        <div class="journal-detail">
                            <h3><?php echo esc_html(get_the_title()); ?></h3>
                        </div>
                    </a>
                </div>
                <?php
            endwhile;
        echo '</div>';

        // Display pagination links
        $total_pages = $query->max_num_pages;
        if ($total_pages > 1) {
            echo '<nav>';
                echo '<ul class="myjournal-pagination pagination d-flex justify-content-center flex-wrap pagination-flat pagination-success" id="myjournal-spagination">';

                // Previous page link
                if ($page > 1) {
                    echo '<li class="page-item"><a class="page-link" href="#" data-page="' . ($page - 1) . '"><i class="bi bi-chevron-left"></i></a></li>';
                }

                // Numbered page links
                for ($i = 1; $i <= $total_pages; $i++) {
                    if ($i === $page) {
                        echo '<li class="page-item active"><a class="page-link" href="#" data-page="' . $i . '">' . $i . '</a></li>';
                    } else {
                        echo '<li class="page-item"><a class="page-link" href="#" data-page="' . $i . '">' . $i . '</a></li>';
                    }
                }

                // Next page link
                if ($page < $total_pages) {
                    echo '<li class="page-item"><a class="page-link" href="#" data-page="' . ($page + 1) . '"><i class="bi bi-chevron-right"></i></a></li>';
                }

                echo '</ul>';
            echo '</nav>';
        }
        wp_reset_postdata();
    } else {
        wp_send_json(array('data' => ''));
    }

    $output = ob_get_clean();
    wp_send_json_success(array('data' => $output, 'posts_per_page' => $posts_per_page));
}