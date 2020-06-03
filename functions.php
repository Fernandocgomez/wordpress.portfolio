<?php 

    function load_scripts() {
        wp_enqueue_style('google-font-roboto', get_stylesheet_uri('google-font-roboto', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&display=swap'));
        wp_enqueue_style('main_styles', get_stylesheet_uri());

        wp_register_style('sass', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
        wp_enqueue_style('sass', NULL, microtime());
        // remove the null and the microtime() when it is ready for production

        wp_enqueue_script('jquery');

        wp_register_script('appJS', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
        wp_enqueue_style('appJS', NULL, microtime());
        // remove the null and the microtime() when it is ready for production


    }

    add_action('wp_enqueue_scripts', 'load_scripts');

    function fernandocgomez_features() {
        add_theme_support('title-tag');
        register_nav_menu('headerMenu', 'Header Menu');
        register_nav_menu('footerMenu', 'Footer Menu');
    }

    add_action('after_setup_theme', 'fernandocgomez_features');

    

?>