<?php

    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

    function my_theme_enqueue_styles() {
        $parent_style = 'twentynineteen-style'; 
        $child_style = 'twentynineteen-child-style';
        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( $child_style, get_stylesheet_uri() );
    }

// Customize primary color
    function wpse_338301_customize_register( $wp_customize ) {
        $wp_customize->remove_section( 'colors' );
    }
    add_action( 'customize_register', 'wpse_338301_customizer' );

    function wpse_338301_init() {
        set_theme_mod( 'primary_color', 'custom' );
        set_theme_mod( 'primary_color_hue', 217 );
        }
        add_action( 'init', 'wpse_338301_init' );

        function wpse_338301_saturation() {
            return 75;
        }
        add_filter( 'twentynineteen_custom_colors_saturation', 'wpse_338301_saturation' );
        add_filter( 'twentynineteen_custom_colors_saturation_selection', 'wpse_338301_saturation' );

        function wpse_338301_lightness() {
            return 20;
        }
        add_filter( 'twentynineteen_custom_colors_lightness', 'wpse_338301_lightness' );
        add_filter( 'twentynineteen_custom_colors_lightness_hover', 'wpse_338301_lightness' );
        add_filter( 'twentynineteen_custom_colors_lightness_selection', 'wpse_338301_lightness' );

// Customized menu for header
    function register_my_menus() {
        register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
        );
    }
    add_action( 'init', 'register_my_menus' );

?>