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
    <div class="clear"></div>
    <div class="socialsute-wrappera">
        <p style="color: #BB0037;">Bạn thích bài này?</p>
        <iframe class="facebook" src="//www.facebook.com/plugins/like.php?href=<?php urlencode(the_permalink())?>&amp;send=false&amp;layout=button_count&amp;width=80&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        <div class="share-facebook">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php urlencode(the_permalink())?>" target="_blank">
                <img src="<?php echo get_template_directory_uri()?>/images/share.png" />
            </a>
        </div>
        <div class="googleplus">
            <div class="g-plusone" data-size="medium"></div>
            <!-- Place this tag after the last +1 button tag. -->
            <script type="text/javascript">
              (function() {
                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                po.src = 'https://apis.google.com/js/plusone.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
              })();
            </script>
        </div>
        <?php $post_image = tf_get_image();?>
        
        <div class="pinterest">
            <a href="//pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=<?php echo $post_image;?>" data-pin-do="buttonPin" data-pin-config="beside"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
            <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
        </div>
    </div>
<!--    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fwww.foreva.vn&amp;width=620&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=true&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:620px; height:258px;" allowTransparency="true"></iframe>-->
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