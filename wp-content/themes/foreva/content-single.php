<div class="page-title">
    <h1>#<?php the_category(' #'); ?></h1>
</div>

<!-- post -->
<div class="post">
    <div class="date">
        <p class="day"><?php the_time('j') ?></p>
        <p class="month"><?php translate_month() ?></p>
        <p class="year"><?php the_time('Y') ?></p>
    </div>
    <h2 class="post-title"><?php the_title(); ?></h2>

    <div class="socialsute-wrapper">
        <iframe src="//www.facebook.com/plugins/like.php?href=<?php urlencode(the_permalink())?>&amp;send=false&amp;layout=button_count&amp;width=80&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=410580722313683" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe>
        <?php $post_image = tf_get_image();?>
        <a href="//pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=<?php echo $post_image;?>" data-pin-do="buttonPin" data-pin-config="beside"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
        <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
    </div>

    <!-- entry -->
    <div class="entry">
        <?php the_content(); ?>
    </div>
    <!-- /entry -->

    <h4>FOREVA</h4>
    <?php if(count_tags_post(get_the_ID())):?>
    <div class="tag"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag.png" alt=""><?php the_tags(); ?></div>
    <?php endif;?>
    <a class="btn-comment" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-comment.png" alt=""><?php echo wp_count_comments(get_the_ID())->total_comments;?> Bình luận</a>
    <?php get_other_posts();?>

</div>