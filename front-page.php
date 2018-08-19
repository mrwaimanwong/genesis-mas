<?php

/**
 * Home Page.
 *
 * @category   Genesis Child Theme
 * @package    Templates
 * @subpackage Home
 * @author     Wai Man Wong
 * @link       http://www.waimanwong.com/
 * @since      1.0.0
 */


add_action( 'get_header', 'ww_home_helper' );

/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function ww_home_helper() {

	// if ( is_active_sidebar( 'home-settle' ) || is_active_sidebar( 'home-about' ) || is_active_sidebar( 'home-case-types' ) || is_active_sidebar( 'home-meettheteam' ) || is_active_sidebar( 'home-founders' )) {

			remove_action( 'genesis_loop', 'genesis_do_loop' );
			add_action( 'genesis_header', 'ww_add_slider_scripts' );
			add_action( 'genesis_after_header', 'ww_add_slider' );
			add_action( 'genesis_after_header', 'ww_homepage' );
			//* Remove .site-inner
			add_filter( 'genesis_markup_site-inner', '__return_null' );
			add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );
			add_filter( 'genesis_markup_content', '__return_null' );
			// add_action( 'genesis_loop', 'ww_homepage' );

			/** Force Full Width */
			add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
			add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );
}


function ww_add_slider_scripts() {
	$child_url = CHILD_URL;
	echo '
	<script type="text/javascript" src="'.$child_url.'/js/jquery.cycle.all.js">
		</script>
	<script type="text/javascript">
	jQuery(document).ready(function() {
			jQuery(".hpslideshow").cycle({
			fx: "fade" // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		});
	});
	</script>
	';
}

function ww_add_slider() {
	$child_url = CHILD_URL;
	echo '
	<section class="slider-wrap">
		<div id="home-header" >
			<div class="header-slider-content">
				<div class="hpslidetext">On Target with your<br>project needs</div>
				<div class="hpslideshow">
					<img src="'.$child_url.'/images/header-braid.jpg" width="940" height="295" />
					<img src="'.$child_url.'/images/header-gauge.jpg" width="940" height="295" />
					<img src="'.$child_url.'/images/header-pipes.jpg" width="940" height="295" />
					<img src="'.$child_url.'/images/header-flange.jpg" width="940" height="295" />
					<img src="'.$child_url.'/images/header-metal.jpg" width="940" height="295" />
					<img src="'.$child_url.'/images/header-wrench.jpg" width="940" height="295" />
					<img src="'.$child_url.'/images/header-valve.jpg" width="940" height="295" />
				</div>
			</div>
		</div>
	</section>
	';
}

function ww_homepage() {
	echo '<div class="wrap">';
	if ( is_active_sidebar( 'home-about' )) {
		echo '<div class="home-about one-third first">';

		genesis_widget_area(
				'home-about',
				array(
						'before' => '<div class="home-widget widget-area">',
						'after' => '</div><!-- end # -->',
				)
		);
		echo '</div><!-- end #home-about -->';
	}

	if ( is_active_sidebar( 'home-products' )) {
		echo '<div class="home-products one-third">';
		genesis_widget_area(
				'home-products',
				array(
						'before' => '<div class="home-widget widget-area">',
						'after' => '</div><!-- end # -->',
				)
		);
		echo '</div><!-- end #home-products -->';
	}

	if ( is_active_sidebar( 'home-services' )) {
		echo '<div class="home-services one-third">';
		genesis_widget_area(
				'home-services',
				array(
						'before' => '<div class="home-widget widget-area">',
						'after' => '</div><!-- end # -->',
				)
		);
		echo '</div><!-- end #home-services -->';
	}
	echo'</div><div class="wrap">';
		if ( is_active_sidebar( 'home-certifications' )) {
			echo '<div class="home-certifications one-third first">';
			genesis_widget_area(
					'home-certifications',
					array(
							'before' => '<div class="home-widget widget-area">',
							'after' => '</div><!-- end # -->',
					)
			);
			echo '</div><!-- end #home-certifications -->';
		}
			if ( is_active_sidebar( 'home-industries' )) {
				echo '<div class="home-industries one-third">';
				genesis_widget_area(
						'home-industries',
						array(
								'before' => '<div class="home-widget widget-area">',
								'after' => '</div><!-- end # -->',
						)
				);
				echo '</div><!-- end #home-industries -->';
			}
				if ( is_active_sidebar( 'home-events' )) {
					echo '<div class="home-events one-third">';
					genesis_widget_area(
							'home-events',
							array(
									'before' => '<div class="home-widget widget-area">',
									'after' => '</div><!-- end # -->',
							)
					);
					echo '</div><!-- end #home-events -->';
					}
					echo '</div>';
		// echo '<section class="home-mailing"><div class="wrap"><h2>Joining the mailing list!</h2><form><input type="email" placeholder="Enter email"></input><input type="submit" value="Submit"></input></form></div></section>';

}

genesis();
