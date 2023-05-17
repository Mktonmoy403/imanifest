<?php
/**
 * Template Name: Dashboard
 * The template for displaying the dashboard
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iMenifest
 */
get_header();
?>
<div class="my-dashboard">
     <!-- best Selling :: Start -->
     <div class="best-selling-book">
          <h2>Best Selling Books</h2>
          <div class="bsb-slide-wrapper">
               <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                         <!-- Slides -->
                         <div class="swiper-slide">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/books/books%20(1).png" alt="">
                         </div>
                         <div class="swiper-slide">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/books/books%20(2).png" alt="">
                         </div>
                         <div class="swiper-slide">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/books/books%20(3).png" alt="">
                         </div>
                         <div class="swiper-slide">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/books/books%20(4).png" alt="">
                         </div>
                         <div class="swiper-slide">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/books/books%20(5).png" alt="">
                         </div>
                         <div class="swiper-slide">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/books/books%20(6).png" alt="">
                         </div>
                         <div class="swiper-slide">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/books/books%20(7).png" alt="">
                         </div>

                    </div>

                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                    <!-- If we need navigation buttons -->
                    <!-- <div class="swiper-button-prev"></div>/ -->
                    <!-- <div class="swiper-button-next"></div> -->

               </div>
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
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/books/books%20(1).png" alt="" class="img-fluid w-100">
                         </div>
                         <div class="book-card-info">
                              <h1>The Edge of the Unknown</h1>
                              <p>Jhone Steben</p>
                         </div>
                         </div>
                         <div class="books-card">
                         <div class="book-card-thumb">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/books/books%20(1).png" alt="" class="img-fluid w-100">
                         </div>
                         <div class="book-card-info">
                              <h1>The Edge of the Unknown</h1>
                              <p>Jhone Steben</p>
                         </div>
                         </div>
                         <div class="books-card">
                         <div class="book-card-thumb">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/books/books%20(1).png" alt="" class="img-fluid w-100">
                         </div>
                         <div class="book-card-info">
                              <h1>The Edge of the Unknown</h1>
                              <p>Jhone Steben</p>
                         </div>
                         </div>
                         <div class="books-card">
                         <div class="book-card-thumb">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/books/books%20(1).png" alt="" class="img-fluid w-100">
                         </div>
                         <div class="book-card-info">
                              <h1>The Edge of the Unknown</h1>
                              <p>Jhone Steben</p>
                         </div>
                         </div>
                         <div class="books-card">
                         <div class="book-card-thumb">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/books/books%20(1).png" alt="" class="img-fluid w-100">
                         </div>
                         <div class="book-card-info">
                              <h1>The Edge of the Unknown</h1>
                              <p>Jhone Steben</p>
                         </div>
                         </div>
                         <div class="books-card">
                         <div class="book-card-thumb">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/books/books%20(1).png" alt="" class="img-fluid w-100">
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
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course-thumbnail/course-thumbnail-sm%20(1).png"
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
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course-thumbnail/course-thumbnail-sm%20(1).png"
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
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course-thumbnail/course-thumbnail-sm%20(1).png"
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
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course-thumbnail/course-thumbnail-sm%20(1).png"
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
    <style>
        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
            
        }

        .swiper-slide {
            width: 300px;
            height: 400px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
            filter: blur(1px);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: end;
            align-items: self-start;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
        }

        .swiper-slide-active {
            filter: blur(0px);
        }

        .swiper-pagination-bullet,
        .swiper-pagination-bullet-active {
            background: #fff;
        }

        .swiper-slide span {
            text-transform: uppercase;
            color: #fff;
            background: #1b7402;
            padding: 7px 18px 7px 25px;
            display: inline-block;
            border-radius: 0 20px 20px 0px;
            letter-spacing: 2px;
            font-size: 0.8rem;
            font-family: "Open Sans", sans-serif;
        }
    </style>
</div>
<?php get_footer(); ?>