<?php 

function theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'widgets' );
    add_theme_support( 'custom-logo' );

    


    // menu areas
    register_nav_menus( array(
        'header' => esc_html__( 'Header', 'slug-theme')
    ));

}



add_action('after_setup_theme', 'theme_setup');


function load_style() {
    wp_enqueue_style( 'style' , get_stylesheet_uri());
    wp_register_style( 'header-style', get_template_directory_uri() .'/css/header.css' );
    wp_register_style( 'page-style', get_template_directory_uri() .'/css/page.css' );
    wp_register_style( 'article-style', get_template_directory_uri() .'/css/article.css' );
    wp_register_style( 'footer-style', get_template_directory_uri() .'/css/footer.css' );
    wp_register_style( 'media-query', get_template_directory_uri() .'/css/media_query.css' );
    wp_enqueue_style( 'header-style' );
    wp_enqueue_style( 'page-style' );
    wp_enqueue_style( 'article-style' );
    wp_enqueue_style( 'footer-style' );
    wp_enqueue_style( 'media-query' );
}

add_action('wp_enqueue_scripts', 'load_style');



function footer_widget() {

    register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
        
    register_sidebar( array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
        
    register_sidebar( array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-sidebar-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

add_action( 'widgets_init', 'footer_widget' );

function menu_widget() {
    register_sidebar( array(
        'name' => 'Menu Sidebar',
        'id' => 'menu-sidebar',
        'description' => 'Appears in the menu area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    
}
add_action( 'widgets_init', 'menu_widget' );

function customize_color($wp_customize) {

    /* PRIMARY COLOR
    --------------------------------------------------------- */
    $wp_customize->add_setting('custom_primary_color', array(
        'default' => '#f7b53a',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 
        'custom_primary_color_control', array(
            'label' => __('Primary Color' ),
            'section' => 'colors',
            'settings' => 'custom_primary_color',
        )));

    /* BACKGROUND COLOR
    --------------------------------------------------------- */

    $wp_customize->add_setting('custom_bg_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 
        'custom_bg_color_control', array(
            'label' => __('Background Color' ),
            'section' => 'colors',
            'settings' => 'custom_bg_color',
        )));

    /* HEADER BG COLOR
    --------------------------------------------------------- */

    $wp_customize->add_setting('header_bg_color', array(
        'default' => '255, 255, 255',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('header_bg_color', array(
            'type' => 'radio',
            'label' => __('Header Background Color'),
            'section' => 'colors',
            'priority' => 10,
            'choices' => array(
                '255, 255, 255' => __('Light'),
                '0, 0, 0' => __('Dark'),
            ),
        ));

    /* NAVLINK COLOR
    --------------------------------------------------------- */
    $wp_customize->add_setting('nav_link_color', array(
        'default' => '#000000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 
        'nav_link_color_control', array(
            'label' => __('Nav Link Color (desktop)' ),
            'section' => 'colors',
            'settings' => 'nav_link_color',
        )));
    
    /* TEXT COLOR
    --------------------------------------------------------- */
    $wp_customize->add_setting('text_color', array(
        'default' => '#000000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 
        'text_font_color_control', array(
            'label' => __('Text Color' ),
            'section' => 'colors',
            'settings' => 'text_color',
        )));

    /* MENU TEXT COLOR
    --------------------------------------------------------- */
    $wp_customize->add_setting('menu_text_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 
        'menu_text_color_control', array(
            'label' => __('Menu Text Color (mobile)' ),
            'section' => 'colors',
            'settings' => 'menu_text_color',
        )));

    /* FOOTER TEXT COLOR
    --------------------------------------------------------- */
    $wp_customize->add_setting('footer_text_color', array(
        'default' => '#f7f7f7',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 
        'foooter_text_color_control', array(
            'label' => __('Footer Text Color' ),
            'section' => 'colors',
            'settings' => 'footer_text_color',
        )));
    

}

add_action( 'customize_register', 'customize_color' );


function customize_color_CSS() { ?>

    <style type="text/css">

        .layout {
            --theme_header_bg_color: <?php echo get_theme_mod( 'header_bg_color', '250, 250, 250' ) ;?>;
            --theme_primary_color: <?php echo get_theme_mod( 'custom_primary_color', '#f7b53a' ) ;?>;
            --theme_bg_color: <?php echo get_theme_mod( 'custom_bg_color', '#ffffff' );?>;
            --theme_nav_link_color: <?php echo get_theme_mod( 'nav_link_color', '#000000' );?>;
            --theme_text_color: <?php echo get_theme_mod( 'text_color', '#000000' );?>;
            --theme_menu_text_color: <?php echo get_theme_mod( 'menu_text_color', '#ffffff' );?>;
            --theme_footer_text_color: <?php echo get_theme_mod( 'footer_text_color', '#f7f7f7' );?>;
        }

    </style>
<?php };

add_action('wp_head', 'customize_color_CSS');

?>