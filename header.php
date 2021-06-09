<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body <?php body_class() ;?> >

<div class="layout">

<div class="header_container">
    <header class="header">

        
        <?php if (has_custom_logo()) :?>
            <div class="logo_container">
                <a class='logo_image' href="<?php echo home_url() ;?>">
                    <?php the_custom_logo(); ?>  
                </a>
                <a class='logo_text' href="<?php echo home_url() ;?>">
                    <?php bloginfo( 'title' ); ?>
                </a>
            </div> 
            <?php else : ?>

                <a class='logo_text' href="<?php echo home_url() ;?>">
                    <?php bloginfo( 'title' ); ?>
                </a>
        
            <?php endif; ?>
            
        

        <nav class='nav'>
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'header',
                    'container' => false,
                    'item_wrap' => '<ul>%3$s</ul>',
                ));
                
            ;?> 
        </nav>
        <!-- MOBILE MENU -->
        <div class="menu_button">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

        <div class="menu_container">
            <nav class='menu_nav'>
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'header',
                        'container' => false,
                        'item_wrap' => '<ul>%3$s</ul>',
                    ));
                 ;?> 
            </nav>
            <div class="menu_bottom_area">
                <?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
                
                    <aside class="menu_widget_area">
                        <?php dynamic_sidebar( 'menu-sidebar' ); ?>
                    </aside><!-- .widget-area -->
                
                <?php endif; ?>
            </div>
        </div>
        
        <!-- /MOBILE MENU -->
    </header>
    
</div>



<script>
    const logo_text = document.querySelector('.logo_text');
    const menu_button = document.querySelector('.menu_button');
    const menu_container = document.querySelector('.menu_container');
    const bars = document.querySelectorAll('.bar');
    menu_button.onclick = () => {
        document.body.classList.toggle('body_overflow')
        menu_container.classList.toggle('menu_open');
        logo_text.classList.toggle('logo_switch_color');
        for (let bar of bars) {
            bar.classList.toggle('menu_btn_switch_color');
        } 
    }

</script>
