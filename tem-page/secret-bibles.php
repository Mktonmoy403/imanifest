<?php

/*
Template Name: Secret Bibles 
*/
get_header();
?>

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
                <div class="books-section">
                    <!-- Dashboard Breadcrumb :: Start -->
                    <section id="dash-breadcrumb" class="dash-breadcrumb-tree">
                        <div class=""></div>
                        <h3 class="dash-active-page">Secret Bibles</h3>
                        <ul class="m-0 p-0">
                            <li class="d-inline-block"><a href="<?php echo home_url('/my-dashboard');?>">Dashboard</a></li>
                            <li class="d-inline-block"><i class="bi bi-chevron-right"></i></li>
                            <li class="d-inline-block">Secret Bibles</li>
                        </ul>
                    </section>
                    <!-- Dashboard Breadcrumb :: End -->
                    <div class="books-collection">
                    <?php
                            $boks = new WP_Query(array(
                                'post_type' => 'books',
                                'post_status' => 'publish',
                            ));

                            if ($boks->have_posts()) {
                                while ($boks->have_posts()) {
                                    $boks->the_post();
                                    ?>
                        <div class="book">
                            <div class="position-relative">
                                <?php the_post_thumbnail();?>

                                <!--View Book button start -->
                                <span>
                                    <input type="button" value="View Book"
                                        class="btn btn-primary position-absolute top-50 start-50 translate-middle"
                                        data-bs-toggle="modal" data-bs-target="#book-Modal">
                                </span>
                                <!--View Book button start -->

                                <!-- Modal start -->
                                <div class="book-modal">
                                    <div class="modal fade" id="book-Modal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content book-modal">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo get_the_title(get_the_ID());?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php the_content();?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->

                            </div>


                            <h6><?php the_title();?></h6>
                            <p>Writter:<?php the_author();?></p>
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

                    <!-- pagination End  -->

                </div>
            </main>
            <!-- ./Dashboard Main Content :: End -->
        </div>
        <!-- Dashboard :: Left -> End -->

<?php


?>
