<?php

// Eric Hepperle, 2022-12-30 -- From https://www.udemy.com/course/become-a-wordpress-developer-php-javascript/learn/lecture/7343034#overview

function university_post_types() {
	register_post_type('event', array(
		'public' => true,
		'labels' => [
			'name' => 'Events'
		],
		'menu_icon' => 'dashicons-calendar-alt'
	));
}

add_action('init', 'university_post_types');