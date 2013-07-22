<?php   get_header(); ?>
<?php $cur_cat = get_cat_ID( single_cat_title("",false) );
?>        
<div id="main" class="col-left">
    <div class="page-title">
        <h1><?php single_cat_title( $prefix = '', $display = true ); ?> </h1>
    </div>
    <?php query_posts('cat='.$cur_cat); ?>    
    <?php if ( have_posts() ) : ?> 
        <div class="post">
            <?php 
                $i= 1;
                while ( have_posts() ) { 
                    the_post(); 
                    if($i<=10){
                        get_template_part( 'content', "homefirst" );
                    }
                    $i++;                
                } 
            ?>
        </div>
    <?php else :// Show the default message to everyone else.?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; // end have_posts() check ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>