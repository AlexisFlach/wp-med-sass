<?php

function addStyleSheets():void {
	wp_enqueue_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
}

add_action('wp_enqueue_scripts', 'addStyleSheets');