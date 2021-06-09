<?php get_header(); ?>


<div class="top_page">

    <div class="img_container" 
        style="background-image: url(<?php echo header_image() ?>);">
    </div>

    <h1 class='title'><?php the_title_attribute(); ?></h1>
</div>
    
<main class="container">
    
    <div class="article_container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- loop content -->
        <article>
            
            <a href= "<?php the_permalink() ?>" >
                <div class="img_article_container">
                    <div class="img_article" 
                        style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
                    </div>
                </div>
            </a>

            <a href= "<?php the_permalink() ?>" >
                <h3 class='article_title'> <?php the_title() ;?> </h3>
            </a>
        
            <?php the_excerpt() ;?>
        </article>

    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>

</main>

<?php get_footer(); ?>