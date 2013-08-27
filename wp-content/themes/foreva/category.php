<?php get_header(); ?>
<?php $cur_cat = get_cat_ID(single_cat_title("", false));
?>        
<div id="main" class="col-left">
    <div class="page-title">
        <h1><?php single_cat_title($prefix = '', $display = true); ?> </h1>
    </div>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array('cat=' => $cur_cat, 'paged' => $paged);
    query_posts($args);
    ?>    
    <?php if (have_posts()) : ?> 
        <div class="post">
            <?php
            while (have_posts()) {
                the_post();
                get_template_part('content', "homefirst");
            }
            ?>
        </div>
        <div class="btnBottom">            
            <?php previous_posts_link('<span class="btnPre">Trang trước</span>'); ?>
            <?php next_posts_link('<span class="btnNext">Trang sau</span>'); ?>
            <div class="ctnChild">
                <a id="toTop" href="#">Đầu trang</a>
                <a href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a>
            </div>
        </div>
    <?php else :// Show the default message to everyone else.?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; // end have_posts() check ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>