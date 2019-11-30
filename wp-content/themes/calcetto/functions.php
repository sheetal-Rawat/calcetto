<?php

function university_files() {
 wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
 wp_enqueue_style('font-awesome-min', get_template_directory_uri() . '/css/font-awesome.min.css');
 wp_enqueue_style('slick-min', get_template_directory_uri() . '/css/slick.min.css');
 wp_enqueue_style('animate-min', get_template_directory_uri() . '/css/animate.css');
 wp_enqueue_style('nice-select-min', get_template_directory_uri() . '/css/nice-select.css');
 wp_enqueue_style('jqueryui-min', get_template_directory_uri() . '/css/jqueryui.min.css');
 wp_enqueue_style('university_main_styles', get_stylesheet_uri());
 wp_enqueue_script('modernizr', get_theme_file_uri('/js/vendor/modernizr-3.6.0.min.js'), NULL, '1.0', true);
 wp_enqueue_script('jquery-3.3.1', get_theme_file_uri('/js/vendor/jquery-3.3.1.min.js'),NULL, '1.0', true);
 wp_enqueue_script('bootstrap', get_theme_file_uri('/js/vendor/bootstrap.min.js'),NULL, '1.0', true);
 wp_enqueue_script('slick', get_theme_file_uri('/js/plugins/slick.min.js'),NULL, '1.0', true);
 wp_enqueue_script('nice-select', get_theme_file_uri('/js/plugins/nice-select.min.js'),NULL, '1.0', true);
 wp_enqueue_script('jqueryui', get_theme_file_uri('/js/plugins/jqueryui.min.js'),NULL, '1.0', true);
 wp_enqueue_script('imagesloaded', get_theme_file_uri('/js/plugins/imagesloaded.pkgd.min.js'),NULL, '1.0', true);
 wp_enqueue_script('ajax-mail', get_theme_file_uri('/js/plugins/ajax-mail.js'),NULL, '1.0', true);
 wp_enqueue_script('main', get_theme_file_uri('/js/main.js'),NULL, '1.0', true);
 wp_enqueue_script('university_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');