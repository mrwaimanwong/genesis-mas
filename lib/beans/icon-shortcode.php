<?php
/**
 * Bean Name: Shortcode Embeds
 * Bean Description: Easily embed videos and more from sites like YouTube, Vimeo, and SlideShare.
 */
add_shortcode('es-icon', array('EspressoIconBox','es_icon'));

class EspressoIconBox{	
	function es_icon( $attr, $content = null ) {
		extract(shortcode_atts(array(
			'w' => '',
			'icon' => 'gear',
			'title' => '',
			'position'=>'',
			'text'=>'left',
		), $attr));
	   	if( isset($title) && $title !==''){
			$title = "<h4 class='box-title'>$title</h4>";
		}
	 	$class = '';
		// used for $current_home = 'current';
		$w1 = array(
		        '75'  => True,
				'75%'  => True,
		        );

		// used for $current_users = 'current';
		$w2 = array(
		        '50'  => True,
				'50%'  => True,
		        );

		// used for $current_forum = 'current';
		$w3 = array(
		        '25'  => True,
				'25%'  => True,
		        );
		$w4 = array(
		        '33'  => True,
				'33%'  => True,
		        );
		if(empty($w))
			$class = 'full';
		else if(isset($w1[$w]))
		    $class = 'three_fourth';
		else if(isset($w2[$w]))
		    $class = 'one_half';
		else if(isset($w3[$w]))
		    $class = 'one_fourth';
		else if(isset($w4[$w]))
		    $class = 'one_third';    



	  	return "<div class='$class box_$icon icon_box $position text_$text'>$title<div class='box_text'>". do_shortcode($content) . "</div></div>";
	}
}


add_shortcode('boxone', array('EspressoBoxOne','es_box'));

class EspressoBoxOne{	
	function es_box( $attr, $content = null ) {
		extract(shortcode_atts(array(
			'w' => '',
			'icon' => 'one',
			'title' => '',
			'position'=>'',
			'text'=>'left',
		), $attr));
	   	if( isset($title) && $title !==''){
			$title = "<h4 class='box-title'>$title</h4>";
		}
	 	$class = '';
		// used for $current_home = 'current';
		$w1 = array(
		        '75'  => True,
				'75%'  => True,
		        );

		// used for $current_users = 'current';
		$w2 = array(
		        '50'  => True,
				'50%'  => True,
		        );

		// used for $current_forum = 'current';
		$w3 = array(
		        '25'  => True,
				'25%'  => True,
		        );
		$w4 = array(
		        '33'  => True,
				'33%'  => True,
		        );
		if(empty($w))
			$class = 'full';
		else if(isset($w1[$w]))
		    $class = 'three_fourth';
		else if(isset($w2[$w]))
		    $class = 'one_half';
		else if(isset($w3[$w]))
		    $class = 'one_fourth';
		else if(isset($w4[$w]))
		    $class = 'one_third';    



	  	return "<div class='$class box_$icon num_box $position text_$text'>$title<div class='box_text'>". do_shortcode($content) . "</div></div>";
	}
}
add_shortcode('boxtwo', array('EspressoBoxTwo','es_box'));

class EspressoBoxTwo{	
	function es_box( $attr, $content = null ) {
		extract(shortcode_atts(array(
			'w' => '',
			'icon' => 'two',
			'title' => '',
			'position'=>'',
			'text'=>'left',
		), $attr));
	   	if( isset($title) && $title !==''){
			$title = "<h4 class='box-title'>$title</h4>";
		}
	 	$class = '';
		// used for $current_home = 'current';
		$w1 = array(
		        '75'  => True,
				'75%'  => True,
		        );

		// used for $current_users = 'current';
		$w2 = array(
		        '50'  => True,
				'50%'  => True,
		        );

		// used for $current_forum = 'current';
		$w3 = array(
		        '25'  => True,
				'25%'  => True,
		        );
		$w4 = array(
		        '33'  => True,
				'33%'  => True,
		        );
		if(empty($w))
			$class = 'full';
		else if(isset($w1[$w]))
		    $class = 'three_fourth';
		else if(isset($w2[$w]))
		    $class = 'one_half';
		else if(isset($w3[$w]))
		    $class = 'one_fourth';
		else if(isset($w4[$w]))
		    $class = 'one_third';    



	  	return "<div class='$class box_$icon num_box $position text_$text'>$title<div class='box_text'>". do_shortcode($content) . "</div></div>";
	}
}
add_shortcode('boxthree', array('EspressoBoxThree','es_box'));

class EspressoBoxThree{	
	function es_box( $attr, $content = null ) {
		extract(shortcode_atts(array(
			'w' => '',
			'icon' => 'three',
			'title' => '',
			'position'=>'',
			'text'=>'left',
		), $attr));
	   	if( isset($title) && $title !==''){
			$title = "<h4 class='box-title'>$title</h4>";
		}
	 	$class = '';
		// used for $current_home = 'current';
		$w1 = array(
		        '75'  => True,
				'75%'  => True,
		        );

		// used for $current_users = 'current';
		$w2 = array(
		        '50'  => True,
				'50%'  => True,
		        );

		// used for $current_forum = 'current';
		$w3 = array(
		        '25'  => True,
				'25%'  => True,
		        );
		$w4 = array(
		        '33'  => True,
				'33%'  => True,
		        );
		if(empty($w))
			$class = 'full';
		else if(isset($w1[$w]))
		    $class = 'three_fourth';
		else if(isset($w2[$w]))
		    $class = 'one_half';
		else if(isset($w3[$w]))
		    $class = 'one_fourth';
		else if(isset($w4[$w]))
		    $class = 'one_third';    



	  	return "<div class='$class box_$icon num_box $position text_$text'>$title<div class='box_text'>". do_shortcode($content) . "</div></div>";
	}
}
