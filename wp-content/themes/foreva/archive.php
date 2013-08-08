<?php get_header(); ?>
<div id="main" class="col-left">
    <?php if (have_posts()) : ?> 

        <?php while (have_posts()) : the_post(); ?>
            <div class="post">
                <?php get_template_part('content', "homefirst"); ?>
            </div>
        <?php endwhile; ?>

    <?php else :// Show the default message to everyone else.?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; // end have_posts() check ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>