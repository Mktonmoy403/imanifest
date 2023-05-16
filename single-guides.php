<?php get_header();?>

<div class="dash-main">

        <!-- Dashboard :: Right -> Start -->
        <div class="dash-main-left">
        <?php get_template_part( 'template-parts/side-bar' ); ?>
        </div>
        <!-- Dashboard :: Right -> End -->
</div>

<!-- Dashboard :: Left -> Start -->
<div class="dash-main-right full-width">
            <!-- ./Dashboard Main Content :: Start -->
            <main class="dashboard-content-wrapper">
                <div class="guide-details">
                    <!-- Dashboard Breadcrumb :: Start -->
                    <section id="dash-breadcrumb" class="dash-breadcrumb-tree">
                        <div class=""></div>
                        <h3 class="dash-active-page">Guides Details</h3>
                        <ul class="m-0 p-0">
                            <li class="d-inline-block"><a href="<?php echo home_url('/my-dashboard');?>">Dashboard</a></li>
                            <li class="d-inline-block"><i class="bi bi-chevron-right"></i></li>
                            <li class="d-inline-block">Guides Details</li>
                        </ul>
                    </section>
                    <!-- Dashboard Breadcrumb :: End -->
                
                    
                    
                    <div class="d-flex justify-content-around">
                    <?php
                        while ( have_posts() ) :
                                the_post(); ?>
                        <div class="guide-details-section shadow-sm">
                            <?php the_post_thumbnail();?>
                            <h2><?php the_title();?></h2>
                            <p class="writer-name"><?php the_author();?></p>

                            <?php the_content();?>
                            
                        <?php endwhile; // End of the loop.?>
                        </div>

                        <!-- guide details right site bar -->

                        <div class="guide-details-sitebar shadow-sm">
                            <div>
                                <h3>Related Guides</h3>
                                <?php 
                                        $related = new WP_Query(array(
                                                
                                                'post_type'             => 'guides',
                                                'post_status'           => 'publish', 
                                                'posts_per_page'        => 5, // Number of related posts to display
                                                'orderby'               => 'rand', // Random order
                                                'post__not_in'          => array( get_the_ID() ),

                                        ));
                                
                                if ($related->have_posts()) {
                                while ($related->have_posts()) {
                                    $related->the_post();
                                    
                                ?>
                                <div class="d-flex">
                                    <?php the_post_thumbnail();?>
                                    <span>
                                        <a href="<?php the_permalink();?>"><h6><?php the_title();?></h6></a>
                                        <p><?php the_author();?></p>
                                    </span>
                                </div>
                                <?php
                                }
                            } else {
                                echo "Nothig post";
                            }
                            wp_reset_postdata();
                            ?>


                            </div>
                            <hr />
                            <div>
                                <h3>Recommed Guides</h3>

                                <div class="d-flex">
                                    <img src="assets/images/Guides(1).png" alt="">
                                    <span>
                                        <h6>Be a side husler as a student</h6>
                                        <p>Jhone Steben</p>
                                    </span>
                                </div>
                                <div class="d-flex">
                                    <img src="assets/images/Guides(1).png" alt="">
                                    <span>
                                        <h6>Be a side husler as a student</h6>
                                        <p>Jhone Steben</p>
                                    </span>
                                </div>
                                <div class="d-flex">
                                    <img src="assets/images/Guides(1).png" alt="">
                                    <span>
                                        <h6>Be a side husler as a student</h6>
                                        <p>Jhone Steben</p>
                                    </span>
                                </div>
                                <div class="d-flex">
                                    <img src="assets/images/Guides(1).png" alt="">
                                    <span>
                                        <h6>Be a side husler as a student</h6>
                                        <p>Jhone Steben</p>
                                    </span>
                                </div>
                                <div class="d-flex">
                                    <img src="assets/images/Guides(1).png" alt="">
                                    <span>
                                        <h6>Be a side husler as a student</h6>
                                        <p>Jhone Steben</p>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- ./Dashboard Main Content :: End -->
        </div>
        <!-- Dashboard :: Left -> End -->