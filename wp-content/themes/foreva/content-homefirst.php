<div class="date">
    <p class="day"><?php the_time('j') ?>/<?php the_time('m') ?>/<?php the_time('Y') ?></p>
</div>
<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="socialsute-wrapperb">
    <iframe src="//www.facebook.com/plugins/like.php?href=<?php urlencode(the_permalink())?>&amp;send=false&amp;layout=button_count&amp;width=80&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px;vertical-align:bottom;" allowTransparency="true"></iframe>
    <a style="padding: 0 20px;" href="https://www.facebook.com/sharer/sharer.php?u=<?php urlencode(the_permalink())?>" target="_blank">
        <img src="<?php echo get_template_directory_uri()?>/images/share.png" />
    </a>
    <div class="g-plusone" data-size="medium"></div>
    <!-- Place this tag after the last +1 button tag. -->
    <script type="text/javascript">
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>
    <?php $post_image = tf_get_image();?>
    <a href="//pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=<?php echo $post_image;?>" data-pin-do="buttonPin" data-pin-config="beside"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
    <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
</div>
<!-- entry -->
<div class="entry">
    <?php if(has_post_thumbnail()):?>
    <div class="atclear">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail();?>
        </a>
    </div>
    <?php endif;?>
    <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>  
                <?php the_excerpt(); ?>  
    <?php else : ?>  
            <?php the_content('<a class="view-more-post btn" href="#">Xem Thêm</a>'); ?>  
    <?php endif; ?> 
</div>
<!-- /entry -->