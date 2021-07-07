<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package svarnim
 */

?>

<footer class="footer">
<div class="footerbg-img">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/fisher-man.svg" />
</div>
    <div class="container">
      <div class="row g-0">
        <div class="col-lg-3 col-md-6 col-sm-12">
        <?php dynamic_sidebar( 'footer-help' ); ?> 
          <div class="footer-item">
            <h5 class="display-1 font-weight-bold">Quick Links</h5>
            <ul class="footer-item-links display-2">
              <li><a href="#">Your Account</a></li>
              <li><a href="#">Activities</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer-item">
            <h5 class="display-1 font-weight-bold">Svarnim Puducherry</h5>
            <ul class="footer-item-links display-2">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Terms Of Use</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer-item">
            <h5 class="display-1 font-weight-bold">Other Services & Support</h5>
            <ul class="footer-item-links display-2">
              <li><a href="#">Rewards Program</a></li>
              <li><a href="#">Partners</a></li>
              <li><a href="#">Legal</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
        <?php dynamic_sidebar( 'footer-item-4' ); ?>          
        </div>
      </div>
      <div class="row g-0">
        <div class="col copyright-sec">
        <?php dynamic_sidebar( 'footer-copyright' ); ?> 
        </div>
      </div>
    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
