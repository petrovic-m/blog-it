<?php
//Blog Style and Script
function blogStyle()
{
	wp_enqueue_style('main-style', '//cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
	wp_enqueue_style('navbar-style', get_template_directory_uri().'/assets/css/navbar.css');
}
add_action('wp_enqueue_scripts', 'blogStyle');

function blogScript() {
	wp_enqueue_script('main-script', '//cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'blogScript');
//Blog Style and Script

function blogNavMenu() {
	register_nav_menus(['header-nav' => 'Header nav']);
}
add_action('init', 'blogNavMenu');