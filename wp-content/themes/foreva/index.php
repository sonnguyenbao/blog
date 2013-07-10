<?php   get_header(); ?>
        
<div id="main" class="col-left">
    <?php query_posts('cat=1&showposts=5'); ?>    
    <?php if ( have_posts() ) : ?> 
        <div class="post">
        <?php /* Start the Loop */ ?>
        <?php 
            $i= 1;
            while ( have_posts() ) : the_post(); 
                if($i==1):
        ?>
                    <?php get_template_part( 'content', "homefirst" ); ?>
                    <?php if(count_post_category(1)>1):?>
                    <h4>Đọc thêm các tip khác:</h4>
                    <ul>
                    <?php endif;?>    
                <?php else:?>
                    <?php get_template_part( 'content', "homelist" ); ?>
                <?php endif;?>
                <?php if(count_post_category(1)>1&& count_post_category(1)==$i):?>
                    </ul>
                <?php endif;?>
        <?php $i++;endwhile; ?>
        </div>
    <?php else :// Show the default message to everyone else.?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; // end have_posts() check ?>
    
    <?php query_posts('cat=2&showposts=5'); ?>    
    <?php if ( have_posts() ) : ?> 
        <div class="post">
        <?php /* Start the Loop */ ?>
        <?php 
            $i= 1;
            while ( have_posts() ) : the_post(); 
                if($i==1):
        ?>
                    <?php get_template_part( 'content', "homefirst" ); ?>
                    <?php if(count_post_category(2)>1):?>
                    <h4>Đọc thêm các tip khác:</h4>
                    <ul>
                    <?php endif;?>
                <?php else:?>
                    <?php get_template_part( 'content', "homelist" ); ?>
                <?php endif;?>
                <?php if(count_post_category(2)>1&& count_post_category(2)==$i):?>
                </ul>
                <?php endif;?>
        <?php $i++;endwhile; ?>
                    
        </div>
    <?php endif; // end have_posts() check ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>