<?php

add_action('genesis_setup', 'ww_remove_footer');

function ww_remove_footer() {
	/** Genesis - Remove header and footer markup */
	remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
	remove_action( 'genesis_footer', 'genesis_do_footer' );
	remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
}


add_action('genesis_setup', 'ww_add_footer_widgets');

function ww_add_footer_widgets() {
	add_theme_support( 'genesis-footer-widgets', 2 ); //Need to add .footer-widgets-4 to the CSS if you want a fourth
}

/* Customize the entire footer */

add_action( 'genesis_footer', 'ww_custom_footer' );

function ww_custom_footer() {
		$footernav = wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'nav-footer', 'echo' => false, 'depth' => 1, 'after' => ' | '));
	echo
	'<div class="site-footer">
	<div class="wrap">
	<div class="footer-copyright"><span id="email"><a href="mailto:info@materialace.com">info@materialace.com</a></span><span id="phone">(949) 623-8330</span></div>
	'.$footernav.'
	©'.date('Y').' Material Acquisition Services&reg; and it\'s logo are registered trademarks and may not be used without express written consent. <a href="http://waimanwong.com">Web Design by Wai Man Wong</a> &nbsp;&nbsp;&nbsp;<a id="scroll-top-btn" title="Go to top"><i class="fa fa-arrow-circle-up"></i></a>
	</div>
	</div>';
}
