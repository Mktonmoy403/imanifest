<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package iManifest
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
// Dashboard topbar
if( ! function_exists( 'imenifest_header_html' ) ) :
	function imenifest_header_html() {
		?>
		 <!-- ./Header :: Start -->
		 <header class="dash-header">
        <div class="container-fluid">
            <div class="dash-row">
                <div class="dash-col-md-2">
                    <div class="dash-logo">
                        <span class="sidebtn-mb">
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                                <i class="bi bi-list"></i>
                            </button>
                        </span>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="dashboard logo; main Logo"
                                class="img img-fluid">
                        </a>
                        </a>
                    </div>
                </div>
                <div class="dash-col-md-5">
                    <div class="dash-header-col-left">
                        <p>Welcome Back</p>
                        <?php $current_user = wp_get_current_user(); ?>
                        <h3><?php echo esc_html( $current_user->display_name ); ?></h3>
                    </div>
                </div>
                <div class="dash-col-md-5">
                    <div class="dash-header-col-right">
                        <div class="header-notification">
                            <a href="javascript:void(0)" class="notification-bell" id="bell">
                                <span><i class="bi bi-bell"></i></span>
                            </a>
                            <div class="notification-drawer" id="drawer">
                                <ul class="notification-drawer-items">
                                    <li class="notification-drawer-item"><a href="#"
                                            class="notification-drawer-item-link">Hello this is Notification Item</a>
                                    </li>
                                    <li class="notification-drawer-item"><a href="#"
                                            class="notification-drawer-item-link">Hello this is Notification Item -1</a>
                                    </li>
                                    <li class="notification-drawer-item"><a href="#"
                                            class="notification-drawer-item-link">Hello this is Notification Item -2</a>
                                    </li>
                                    <li class="notification-drawer-item"><a href="#"
                                            class="notification-drawer-item-link">Hello this is Notification Item -3</a>
                                    </li>
                                    <li class="notification-drawer-item"><a href="#"
                                            class="notification-drawer-item-link">Hello this is Notification Item -4</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-user-avatar">
                            <a href="javascript:void(0)" class="header-user" id="user-opt-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user/user (10).png" alt="" class="">
                            </a>
                            <div class="header-user-opt" id="user-opt-drawer">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="bi bi-person-bounding-box"></i> My Profile</a></li>
                                    <li><a href="<?php echo esc_url(wp_logout_url(home_url('/'))); ?>"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ./Header :: End -->

		<?php
	}
	add_action( 'imenifest_render_header', 'imenifest_header_html', 2 );
endif;
// Dashboard sidebar links
if( ! function_exists( 'imenifest_dashboard_sidebar_html' ) ) : 

	function imenifest_dashboard_sidebar_html() {
		?>
		<!-- Dashboard :: Right -> Start -->
		<div class="dash-main-left">
			<div class="dash-main-left-inner show-left-inner ">
				<!-- Sidebar :: Start -->
				<aside id="sidebar" class="sidebar sidebar-show">
					<div class="sidebar-wrapper">
					<div class="siderbar-menu">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'dashboard-menu',
								'container' => 'ul',
								'menu_class' => 'side-nav',
								'walker' => new iMenifest_nav_walker(),
							 ));
						?>
					</div>
					<div class="sidebar-logout">
						<a href="<?php echo esc_url(wp_logout_url(home_url('/'))); ?>" class="dash-logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
					</div>
					</div>
				</aside>
				<!-- Sidebar :: End -->
				<!-- Offcanvas Sidebar :: Start -->
				<div class="sidebar-offcanvas">
					<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
					aria-labelledby="staticBackdropLabel">
					<div class="offcanvas-header">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="" class="img-fluid" width="60" height="60">
						</a>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas"
							aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<div>
							<div class="siderbar-menu">
							<?php
								wp_nav_menu(array(
									'theme_location' => 'dashboard-menu',
									'container' => 'ul',
									'menu_class' => 'side-nav',
									'walker' => new iMenifest_nav_walker(),
								));
							?>
							</div>
							<div class="sidebar-logout">
								<a href="<?php echo esc_url(wp_logout_url(home_url('/'))); ?>" class="dash-logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
							</div>
						</div>
					</div>
					</div>
				</div>
				<!-- Offcanvas Sidebar :: End -->
				<a href="javascript:void(0)" class="sidebar-btn" role="button"><i class="bi bi-chevron-left"></i></a>
			</div>
		</div>
		<a href="javascript:void(0)" class="sidebar_show_btn" role="button"><i class="bi bi-chevron-left"></i></a>
		<?php
	}
	add_action( 'imenifest_render_sidebar', 'imenifest_dashboard_sidebar_html', 2 );

endif;
// Home header HTML
if( ! function_exists('imenifest_rednder_header_html') ) :

    function imenifest_render_header_html() {
        ?>
        <!-- Header :: Start -->
        <header id="primary-header" class="primary-header">
            <div class="header-container">
                <div class="header-row">
                <div class="header-col">
                    <div class="header-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="header-col">
                    <div class="header-nav">
                    <a href="<?php echo esc_url( home_url( '/login' ) ); ?>" class="header-btn">Sign in</a>
                    </div>
                </div>
                </div>
            </div>
        </header>
        <!-- Header :: End -->
        <div class="space-120" style="min-height: 120px"></div>
        <?php
    }
    add_action( 'imenifest_render_common_header', 'imenifest_render_header_html', 2 );
endif;
// Home footer html
if( ! function_exists('imenifest_render_footer_html') ) : 

     function imenifest_render_footer_html() {
          ?>
          <!-- Footer :: Start -->
          <footer id="footer" class="primary-footer">
               <div class="footer-container">
                    <div class="footer-row">
                    <!-- Footer - Social Media -->
                    <div class="footer-col">
                         <div class="footer-link-item footer-social">
                         <ul class="m-0 p-0">
                         <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                         <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                         <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                         <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                         <li><a href="#"><i class="bi bi-pinterest"></i></a></li>
                         <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                         <li><a href="#"><i class="bi bi-twitch"></i></a></li>
                         </ul>
                         </div>
                    </div>
                    <!-- Footer - Useful Link -->
                    <div class="footer-col">
                         <div class="footer-link-item footer-link">
                         <ul class="m-0 p-0">
                         <li><a href="about.html">About</a></li>
                         <li><a href="privacy-policy.html">Privacy Policy</a></li>
                         <li><a href="cookies-policy.html">Cookies Policy</a></li>
                         <li><a href="terms-conditions.html">Terms and Conditions</a></li>
                         <li><a href="refund-policy.html">Refund Policy</a></li>
                         </ul>
                         </div>
                    </div>
                    </div>
               </div>
          </footer>
           <!-- Footer :: End -->
          <?php
     }
endif;
add_action( 'imenifest_render_footer', 'imenifest_render_footer_html', 2 );
