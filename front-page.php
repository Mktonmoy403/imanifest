<?php get_header();?>
  <!-- Header :: End -->

  <!-- Video Section :: Start -->
  <section id="video-intro" class="video-section-wrapper">
    <div class="video-section-container">
      <div class="video-section-row">
        <div class="video-section-col promo-video-col">
          <div id="player"></div>
        </div>
        <div class="video-section-col">
          <div class="video-section-content video-section-content-left">
            <a id="get-started" href="pricing.html" class="hero-btn" style="display: none;">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Video Section :: End -->

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

  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jQuery/jquery-3.6.3.slim.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/venobox/venobox.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-5.3.0/js/bootstrap.js"></script>
  <script src="https://www.youtube.com/iframe_api"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/controller/yt-controller/yt.controller.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>

</html>