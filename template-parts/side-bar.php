<div class="dash-main-left-inner show-left-inner ">
                <!-- Sidebar :: Start -->
                <aside id="sidebar" class="sidebar sidebar-show">
                    <div class="sidebar-wrapper">
                        <div class="siderbar-menu">
                            <ul class="side-nav">
                                <?php wp_nav_menu('main-menu');?>
                            </ul>
                        </div>
                        <div class="sidebar-logout">
                            <a href="login.html" class="dash-logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
                        </div>
                    </div>
                </aside>
                <!-- Sidebar :: End -->
                <!-- Offcanvas Sidebar :: Start -->
                <div class="sidebar-offcanvas">
                    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
                        aria-labelledby="staticBackdropLabel">
                        <div class="offcanvas-header">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.png" alt="" class="img-fluid" width="60" height="60">
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div>
                                <div class="siderbar-menu">
                                    <ul class="side-nav">
                                        <li><a href="dashboard.html" class="side-nav-link active"><i class="bi bi-columns-gap"></i> My Dashboard</a></li>
                                        <li><a href="books.html" class="side-nav-link"><i class="bi bi-columns-gap"></i> Book</a></li>
                                        <li><a href="all-journals.html" class="side-nav-link"><i class="bi bi-columns-gap"></i> Journal</a></li>
                                        <li class="active"><a href="guides.html" class="side-nav-link"><i class="bi bi-columns-gap"></i> Guides</a></li>
                                        <li><a href="courses.html" class="side-nav-link"><i class="bi bi-columns-gap"></i> Courses</a></li>
                                        <li><a href="insights.html" class="side-nav-link"><i class="bi bi-columns-gap"></i> Insights</a></li>
                                        <li><a href="forum-main.html" class="side-nav-link"><i class="bi bi-columns-gap"></i> Forum</a></li>
                                    </ul>
                                </div>
                                <div class="sidebar-logout">
                                    <a href="login.html" class="dash-logout"><i class="bi bi-box-arrow-right"></i>
                                        Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Offcanvas Sidebar :: End -->
            </div>