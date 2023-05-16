<?php

/*
Template Name: dashboard 
*/
get_header();
?>

<div class="dash-main">

        <!-- Dashboard :: Right -> Start -->
        <div class="dash-main-left">
        <?php get_template_part( 'template-parts/side-bar' ); ?>
        </div>
        <!-- Dashboard :: Right -> End -->

        <!-- Dashboard :: Left -> Start -->
        <div class="dash-main-right full-width">
            <!-- ./Dashboard Main Content :: Start -->
            <main class="dashboard-content-wrapper">
                <div class="my-dashboard">

                    <!-- best Selling :: Start -->
                    <div class="best-selling-book">
                        <h2>Best Selling Books</h2>
                        <div class="bsb-slide-wrapper">
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#book-Modal">
                                        <img src="assets/images/books/books (1).png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/books/books (2).png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/books/books (3).png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/books/books (4).png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/books/books (5).png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/books/books (6).png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/books/books (7).png" alt="">
                                    </div>

                                </div>

                                <!-- If we need pagination -->
                                <!-- <div class="swiper-pagination"></div> -->
                                <!-- If we need navigation buttons -->
                                <!-- <div class="swiper-button-prev"></div>/ -->
                                <!-- <div class="swiper-button-next"></div> -->

                            </div>
                            <!-- Modal start -->
                            <div class="book-modal">
                                <div class="modal fade" id="book-Modal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content book-modal">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum
                                                perferendis
                                                placeat ab deleniti
                                                sapiente iste quisquam quaerat voluptas. Incidunt, sapiente? Quaerat
                                                sequi
                                                adipisci omnis autem
                                                maxime ea pariatur rem ducimus.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum
                                                perferendis
                                                placeat ab deleniti
                                                sapiente iste quisquam quaerat voluptas. Incidunt, sapiente? Quaerat
                                                sequi
                                                adipisci omnis autem
                                                maxime ea pariatur rem ducimus.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum
                                                perferendis
                                                placeat ab deleniti
                                                sapiente iste quisquam quaerat voluptas. Incidunt, sapiente? Quaerat
                                                sequi
                                                adipisci omnis autem
                                                maxime ea pariatur rem ducimus.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum
                                                perferendis
                                                placeat ab deleniti
                                                sapiente iste quisquam quaerat voluptas. Incidunt, sapiente? Quaerat
                                                sequi
                                                adipisci omnis autem
                                                maxime ea pariatur rem ducimus.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum
                                                perferendis
                                                placeat ab deleniti
                                                sapiente iste quisquam quaerat voluptas. Incidunt, sapiente? Quaerat
                                                sequi
                                                adipisci omnis autem
                                                maxime ea pariatur rem ducimus.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum
                                                perferendis
                                                placeat ab deleniti
                                                sapiente iste quisquam quaerat voluptas. Incidunt, sapiente? Quaerat
                                                sequi
                                                adipisci omnis autem
                                                maxime ea pariatur rem ducimus.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum
                                                perferendis
                                                placeat ab deleniti
                                                sapiente iste quisquam quaerat voluptas. Incidunt, sapiente? Quaerat
                                                sequi
                                                adipisci omnis autem
                                                maxime ea pariatur rem ducimus.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum
                                                perferendis
                                                placeat ab deleniti
                                                sapiente iste quisquam quaerat voluptas. Incidunt, sapiente? Quaerat
                                                sequi
                                                adipisci omnis autem
                                                maxime ea pariatur rem ducimus.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>
                    </div>
                    <!-- best Selling :: End -->

                    <!-- Browse section :: Start -->
                    <section class="browse-category mt-5">
                        <div class="browse-books bg-white">
                            <div class="browse-category-card">
                                <div class="bc-card-header p-3">
                                    <div class="bc-card-title">
                                        <h6 class="fw-medium fs-4 m-0">Browse Books</h6>
                                    </div>
                                    <div class="bc-card-btn">
                                        <a href="books.html" class="text-decoration-none fw-semibold">View More</a>
                                    </div>
                                </div>
                                <div class="brws-books-card-wrapper py-3 px-3 mt-3">
                                    <div class="books-card">
                                        <div class="book-card-thumb">
                                            <img src="assets/images/books/books (1).png" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="book-card-info">
                                            <h1>The Edge of the Unknown</h1>
                                            <p>Jhone Steben</p>
                                        </div>
                                    </div>
                                    <div class="books-card">
                                        <div class="book-card-thumb">
                                            <img src="assets/images/books/books (1).png" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="book-card-info">
                                            <h1>The Edge of the Unknown</h1>
                                            <p>Jhone Steben</p>
                                        </div>
                                    </div>
                                    <div class="books-card">
                                        <div class="book-card-thumb">
                                            <img src="assets/images/books/books (1).png" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="book-card-info">
                                            <h1>The Edge of the Unknown</h1>
                                            <p>Jhone Steben</p>
                                        </div>
                                    </div>
                                    <div class="books-card">
                                        <div class="book-card-thumb">
                                            <img src="assets/images/books/books (1).png" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="book-card-info">
                                            <h1>The Edge of the Unknown</h1>
                                            <p>Jhone Steben</p>
                                        </div>
                                    </div>
                                    <div class="books-card">
                                        <div class="book-card-thumb">
                                            <img src="assets/images/books/books (1).png" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="book-card-info">
                                            <h1>The Edge of the Unknown</h1>
                                            <p>Jhone Steben</p>
                                        </div>
                                    </div>
                                    <div class="books-card">
                                        <div class="book-card-thumb">
                                            <img src="assets/images/books/books (1).png" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="book-card-info">
                                            <h1>The Edge of the Unknown</h1>
                                            <p>Jhone Steben</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="browse-course bg-white">
                            <div class="bc-card-header p-3">
                                <div class="bc-card-title">
                                    <h6 class="fw-medium fs-4 m-0">Browse Courses</h6>
                                </div>
                                <div class="bc-card-btn">
                                    <a href="#" class="text-decoration-none fw-semibold">View More</a>
                                </div>
                            </div>
                            <div class="bc-course-cards-wrapper">
                                <div class="bc-course-card-row courses-row">
                                    <div class="course-card">
                                        <div class="course-card-thumb">
                                            <img src="assets/images/course-thumbnail/course-thumbnail-sm (1).png"
                                                alt="course-card-thumb" class="img-fluid w-100">
                                            <a href="#">
                                                <i class="bi bi-play-fill"></i>
                                            </a>
                                        </div>
                                        <div class="course-card-info">
                                            <h6>Be a side husler as a student</h6>
                                            <p><i class="bi bi-clock-fill me-1"></i>14:16</p>
                                        </div>
                                    </div>
                                    <div class="course-card">
                                        <div class="course-card-thumb">
                                            <img src="assets/images/course-thumbnail/course-thumbnail-sm (1).png"
                                                alt="course-card-thumb" class="img-fluid w-100">
                                            <a href="#">
                                                <i class="bi bi-play-fill"></i>
                                            </a>
                                        </div>
                                        <div class="course-card-info">
                                            <h6>Be a side husler as a student</h6>
                                            <p><i class="bi bi-clock-fill me-1"></i>14:16</p>
                                        </div>
                                    </div>
                                    <div class="course-card">
                                        <div class="course-card-thumb">
                                            <img src="assets/images/course-thumbnail/course-thumbnail-sm (1).png"
                                                alt="course-card-thumb" class="img-fluid w-100">
                                            <a href="#">
                                                <i class="bi bi-play-fill"></i>
                                            </a>
                                        </div>
                                        <div class="course-card-info">
                                            <h6>Be a side husler as a student</h6>
                                            <p><i class="bi bi-clock-fill me-1"></i>14:16</p>
                                        </div>
                                    </div>
                                    <div class="course-card">
                                        <div class="course-card-thumb">
                                            <img src="assets/images/course-thumbnail/course-thumbnail-sm (1).png"
                                                alt="course-card-thumb" class="img-fluid w-100">
                                            <a href="#">
                                                <i class="bi bi-play-fill"></i>
                                            </a>
                                        </div>
                                        <div class="course-card-info">
                                            <h6>Be a side husler as a student</h6>
                                            <p><i class="bi bi-clock-fill me-1"></i>14:16</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- browse section :: End -->
                </div>
            </main>
            <!-- ./Dashboard Main Content :: End -->
        </div>
        <!-- Dashboard :: Left -> End -->

</div>
<?php


?>