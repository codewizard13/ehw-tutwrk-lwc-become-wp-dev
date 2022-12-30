<?php

// Eric Hepperle, 2022-12-30 -- From https://www.udemy.com/course/become-a-wordpress-developer-php-javascript/learn/lecture/7343034#overview

function university_post_types() {
	register_post_type('event', array(
		'public' => true,
		'show_in_rest' => true,
		'labels' => [
			'name' => 'Events',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Events',
			'singular_name' => 'Event'
		],
		'menu_icon' => 'dashicons-calendar-alt',
	));
}

add_action('init', 'university_post_types');