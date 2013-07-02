<?php get_header(); ?>
<div id="main">
    <div class="page-title title-line">
        <h1><?php the_title()?></h1>
    </div>
    <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'page' ); ?>
            <?php //comments_template( '', true ); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>