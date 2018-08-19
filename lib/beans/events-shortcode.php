<?php
/**
 * Bean Name: List/Events 
 * Bean Description: List of events
 */
/* Upcoming events shortcode ****************************************************************/
function events_shortcode($atts) {
	extract(shortcode_atts(array(	
		'category' 		=> '',
		'limit'			=> 5,
		'display_city'	=> true,
		'display_venue'	=> false
		), $atts));
		
	$events = '<div class="mas-event-list">'; // Will contain all of the events to display
	
	global $wp_query;
	$tribe_ecp = TribeEvents::instance();
	
	$old_display = $wp_query->get('eventDisplay');
	$event_options = array(
		'numResults' => $limit,
		'tribe_events_cat' => $category,
		'eventDisplay' => 'upcoming'
	);	
	
	$event = tribe_get_events( $event_options );
	
	if(!$event[0]) {
	  $events .= '<p>There are no upcoming events at this time.<p>';
	} else {
	
	$counter = 1;
  foreach($event as $e) :
  	//if($counter % 2) { $events .= '<div class=""></div>'; }
		$event_categories = get_the_terms( $e->ID, $tribe_ecp->get_event_taxonomy());
			
		//$events .= '<div class="">';
		//$events .= '<div class="">';
		$events .= '<p>';
		$events .= tribe_get_start_date($e->ID, false, 'M').' '.tribe_get_start_date($e->ID, false, "j").' ';
		//$events .= '</div><div class="">';
		$events .= '<strong><a href="'.get_permalink($e->ID).'">'.get_the_title($e->ID).'</a></strong><br />';
		//$events .= '<p><em>';
		//	$events .= '<br /><em>';
		if(tribe_get_start_date($e->ID, false, 'g:i a') !== '12:00 am') {
			$searchArray = array(":00", "am", "pm");
			$replaceArray = array("", "a.m.", "p.m.");
			$events .= '<span class="mas-date"><em>'.str_replace($searchArray, $replaceArray,tribe_get_start_date($e->ID, false,'g:i a')) .' - </em></span>';
		}
		if(tribe_has_venue($e->ID) && $display_venue) {
			$events .= '<span class="mas-date"><em>'.tribe_get_venue($e->ID).'</em></span>';
		}
		//$events .= '</em></p>';
		//$events .= '</em></span>';
		if(tribe_get_city($e->ID) && $display_city) {
			//$events .= '<p><em>'.tribe_get_city($e->ID).', '. tribe_get_state($e->ID).'</em></p>';
			$events .= '<span class="mas-date"><em>'.tribe_get_city($e->ID).', '. tribe_get_state($e->ID).'</em></span>';
		}
		//$events .= '</div></div>';
		$events .= '</p>';	
		$counter++;	
		if($counter > $limit) { break; }
	endforeach;
	}
	wp_reset_query();
	$events .= '</div>';
	return $events;
}
add_shortcode('events', 'events_shortcode');