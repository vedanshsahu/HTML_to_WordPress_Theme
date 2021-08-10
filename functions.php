<?php
/* ------------------------------------------------------------
/ Adding theme support
-------------------------------------------------------------- */
if ( ! function_exists( 'bonativo_setup' ) ) {

    function bonativo_setup(){
        /** automatic feed link*/
        add_theme_support( 'automatic-feed-links' );
        
        /** tag-title **/
        add_theme_support( 'title-tag' );
        
        /** post formats */
        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );

        
        /** post thumbnail **/
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1568, 9999 );
        
        /** refresh widgets **/
        add_theme_support( 'customize-selective-refresh-widgets' );
        
        /** custom logo **/
        $logo_width  = 94;
        $logo_height = 70;

        add_theme_support(
            'custom-logo',
            array(
                'height'               => $logo_height,
                'width'                => $logo_width,
                'flex-width'           => true,
                'flex-height'          => true,
                'unlink-homepage-logo' => true,
            )
        );
        
    }
    add_action('after_setup_theme','bonativo_setup');
}

/* ------------------------------------------------------------
/ Adding Scripts
-------------------------------------------------------------- */
    function additional_custom_styles() {

        /*Enqueue The Styles*/
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' ); 
        wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css' ); 
        wp_enqueue_style( 'templatemo', get_template_directory_uri() . '/assets/css/templatemo.css' ); 
        wp_enqueue_style( 'boxicon', get_template_directory_uri() . '/assets/css/boxicon.min.css' ); 
        wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap', '1.0.0' );

        /* Load javascripts */
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/custom.js');
        wp_enqueue_script( 'templatemojs', get_template_directory_uri() . '/assets/js/templatemo.js');
        wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
        wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array('jquery'));
        wp_enqueue_script( 'isotopef', get_template_directory_uri() . '/assets/js/isotopef.js', array('isotope'));
        

    }
    add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

/* ------------------------------------------------------------
/ Register Menus
-------------------------------------------------------------- */
    function register_my_menus() {
        register_nav_menus(
            array(
            'main-menu' => __( 'Main Menu' ),
            'extra-menu' => __( 'Extra Menu' )
            )
        );
    }
    add_action( 'init', 'register_my_menus' );

/* ------------------------------------------------------------
/ Add class to wp_menu <li>
-------------------------------------------------------------- */
    
    function add_menu_list_item_class($classes, $item, $args) {
        if (property_exists($args, 'list_item_class')) {
            $classes[] = $args->list_item_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);
    
/* ------------------------------------------------------------
/ Add class to wp_menu <a>
-------------------------------------------------------------- */
    function add_menu_link_class( $atts, $item, $args ) {
        if (property_exists($args, 'link_class')) {
          $atts['class'] = $args->link_class;
        }
        return $atts;
      }
      add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

