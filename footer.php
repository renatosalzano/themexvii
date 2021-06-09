

<footer class="footer_container">

    <div class="footer_widget_container">
        <?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
            
            <aside class="widget_area">
                <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
            </aside><!-- .widget-area -->
            
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>

            <aside class="widget_area">
                <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
            </aside><!-- .widget-area -->

        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>

            <aside class="widget_area">
                <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
            </aside><!-- .widget-area -->

        <?php endif; ?>
    </div><!-- end widget container -->

    <div class="copyright">
        <?php bloginfo( 'title' ) ;?> © - 
        <a href="/privacy-policy"> Privacy Police </a>
    </div>
    
</footer>

<?php wp_footer();?>
<div class="background_color">
    <div class="bg_shadow"></div>
</div>
</div> <!-- END LAYOUT -->

</body>
</html>