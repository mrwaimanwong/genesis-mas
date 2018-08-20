<?php
/**
 * Bean Name: List/FAQ
 * Bean Description: Hi
 */
add_shortcode('mas-list', 'mas_list_shortcode'  );
function mas_list_shortcode($atts, $content = null ){
	   return '<div class="mas_list">' . $content . '</div>';
}
