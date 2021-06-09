<?php get_header(); ?>
<div class="top_page">
    <?php if(get_the_post_thumbnail_url()): ?>
        <div class="img_container" 
            style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
        </div>
    <?php else: ?>
        <div class="img_container" 
            style="background-image: url(<?php echo header_image() ?>);">
        </div>
    <?php endif; ?>

    <h1 class='title'> <?php the_title() ;?></h1>
</div>
<main class="container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- loop content -->

<article>

    <?php the_content( esc_html__( 'Read More...', 'slug_theme' ));?>

    <p> <?php the_time( 'j M , Y' ) ;?> </p>

    <div class='nav_link'>
		<?php previous_post_link('<strong>%link</strong>'); ?>  <span>|</span>  <?php next_post_link('<strong>%link</strong>'); ?>
	</div>

</article>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</main>

<?php get_footer(); ?>