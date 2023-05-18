<?php

/*
Template Name: Guides 
*/
get_header();
?>
    <!-- Dashboard Breadcrumb :: Start -->
    <section id="dash-breadcrumb" class="dash-breadcrumb-tree">
        <div class=""></div>
        <h3 class="dash-active-page">Gentles Men Library</h3>
        <ul class="m-0 p-0">
            <li class="d-inline-block"><a href="<?php echo home_url('/my-dashboard');?>">Dashboard</a></li>
            <li class="d-inline-block"><i class="bi bi-chevron-right"></i></li>
            <li class="d-inline-block">Gentles Men Library</li>
        </ul>
    </section>
    <!-- Dashboard Breadcrumb :: End -->
    <div class="guides-section">
        <div class="guides-collection guides-collection-wrapper">

            <?php
                $detais = new WP_Query(array(
                    'post_type' => 'guides',
                    'post_status' => 'publish',
                ));

                if ($detais->have_posts()) {
                    while ($detais->have_posts()) {
                        $detais->the_post();
                        ?>
                        <div class="guide-card">
                            <a href="<?php the_permalink()?>">
                                <div class="guide-card-thumbnail">
                                    <?php the_post_thumbnail();?>
                                </div>
                                <div class="guide-card-details">
                                    <h6 class="guide-card-title"><?php the_title();?></h6>
                                    <p class="guide-card-author"><?php the_author();?></p>
                                </div>
                            </a>
                        </div>
                        
                        
                        
                        <?php
                    }
                } else {
                    echo "Nothig post";
                }
                wp_reset_postdata();
                ?>


            
        </div>

        <!-- pagination start  -->

        <nav>
            <ul
                class="pagination d-flex justify-content-center flex-wrap pagination-flat pagination-success">
                <li class="page-item"><a class="page-link" href="#" data-abc="true"><i
                            class="bi bi-chevron-left"></i></i></a></li>
                <li class="page-item active"><a class="page-link" href="#" data-abc="true">1</a></li>
                <li class="page-item"><a class="page-link" href="#" data-abc="true">2</a></li>
                <li class="page-item"><a class="page-link" href="#" data-abc="true">3</a></li>
                <li class="page-item"><a class="page-link" href="#" data-abc="true">4</a></li>
                <li class="page-item"><a class="page-link" href="#" data-abc="true"><i
                            class="bi bi-chevron-right"></i></a></li>
            </ul>
        </nav>

        <!-- pagination start  -->

    </div>


<?php get_footer(); ?>