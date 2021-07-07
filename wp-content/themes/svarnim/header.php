<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package svarnim
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script src='<?php bloginfo('template_directory'); ?>/assets/js/common.js' defer></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'svarnim' ); ?></a>


	<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light mobile-nav">
      <div class="container">
        <div class="w-100">
          <div class="row g-0 justify-content-between align-items-center">
            <div class="col">
			<a class="navbar-brand" href="<?php echo get_site_url(); ?>">
				<img alt="Svarnim Puducherry" src="<?php 
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				echo $image[0];
				?>"/>
			</a>
            </div>
            <div class="col-auto">
              <div class="d-flex align-items-center">
                <div class="d-none d-lg-flex">
				<?php dynamic_sidebar( 'header-button' ); ?> 
				<?php dynamic_sidebar( 'language-dropdown' ); ?> 
                </div>
                <div class="d-flex">
				<?php dynamic_sidebar( 'search-button' ); ?> 
                  <button class="navbar-toggler" type="button" id="menuHamburger">
                    <div class="hamburger-toggle">
                      <div class="hamburger">
                        <span></span>
                        <span></span>
                      </div>
                    </div>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="collapse navbar-collapse topnav" id="navbar">
		  <?php
			wp_nav_menu( array( 
			'theme_location' => 'header_nav',
			'container' => 'ul',
			'menu_class'=> 'navbar-nav'
			)); 
			?>
             <div class="dekhide mobilebtn">
			<?php dynamic_sidebar( 'header-button' ); ?> 
            </div>
        </div>
      </div>
    </nav>
  </header>

	
	<!-- #masthead -->
