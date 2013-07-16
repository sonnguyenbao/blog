<?php //if ( have_comments() ) : ?>
<!--<div class="testimonials">
    <?php //if ( post_password_required() ) : ?>
            <p class="nopassword"><?php //_e( 'This post is password protected. Enter the password to view any comments.', 'foreva' ); ?></p>
    <?php
                    /* Stop the rest of comments.php from being processed,
                     * but don't kill the script entirely -- we still have
                     * to fully load the template.
                     */
                    //return;
            //endif;
    ?>
    <h4>Ý kiến bạn đọc:</h4>
    <ul>
        <?php //wp_list_comments( array( 'callback' => 'foreva_comment', 'style' => 'li' ) ); ?>

    </ul>
    <?php //comment_form(get_form_comment()); ?>
</div>
<script type="text/javascript">
    $('#commentform').addClass("comment-post");
    $('#submit').addClass("btn-print-gradient");
</script>-->
<?php  //endif;?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vn_VN/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="testimonials">
    <h4 style="padding-bottom: 10px;">Ý kiến bạn đọc:</h4>
    <?php
    $link= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    ?>
    <div class="fb-comments" data-href="<?php echo $link?>" data-width="620" data-num-posts="10"></div>
</div>