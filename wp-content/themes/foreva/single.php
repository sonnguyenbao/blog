<?php get_header(); ?>
<div id="main" class="col-left">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content-single', get_post_format() ); ?>
        <?php comments_template( '', true ); ?>
    <?php endwhile; // end of the loop. ?>
    <div class="btnBottom">            
        <div class="ctnChild">
            <a id="toTop" href="#">Đầu trang</a>
            <a href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a>
        </div>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>