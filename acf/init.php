<?php

if (function_exists('acf_add_options_page')) {

require_once get_template_directory() . '/acf/doctor_field.php';
require_once get_template_directory() . '/acf/working_time.php';
require_once get_template_directory() . '/acf/service_field.php';
require_once get_template_directory() . '/acf/doc-acf.php';

    $option_page = acf_add_options_page(array(
        'page_title'    => __('Режим работы'),
        'menu_title'    => __('Режим работы'),
        'menu_slug'     => 'site-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}