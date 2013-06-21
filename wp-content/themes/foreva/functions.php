<?php
// This theme uses wp_nav_menu() in one location.
register_nav_menu( 'primary', __( 'Primary Menu', 'foreva' ) );
if ( function_exists('register_sidebar') )  
    register_sidebar(array(  
    'name' => 'sidebar',  
    'before_widget' => '<div class="widget">',  
    'after_widget' => '</div>',  
    'before_title' => '<h3>',  
    'after_title' => '</h3>',  
));  
add_theme_support( 'post-thumbnails' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="view-more-post btn" href="'. get_permalink($post->ID) . '"> Xem thêm</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Count posts in category
function count_post_category($input = '') {
    global $wpdb;
    if ($input == '') {
        $category = get_the_category();
        return $category[0]->category_count;
    } elseif (is_numeric($input)) {
        $SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->term_taxonomy.term_id=$input";
        return $wpdb->get_var($SQL);
    } else {
        $SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->terms.slug='$input'";
        return $wpdb->get_var($SQL);
    }
}

//Show list tags by create html
function show_list_tags()
{
    global $wpdb;
    $font= array("font-18","font-22","font-30");
    $color= array("","gray","gray-1");
    $sql = "SELECT a.* 
            FROM $wpdb->terms as a
            LEFT JOIN $wpdb->term_taxonomy AS b ON a.term_id=b.term_id
            WHERE b.taxonomy='post_tag'";
    $tags= $wpdb->get_results($sql);
    echo '<div class="tags">';
    if(count($tags)>0)
    {
        foreach ($tags as $tag)
        {
            echo '<a class="'.$font[array_rand($font)]." ".$color[array_rand($color)].'" href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
        }
    }
    else
        echo '<a class="font-30 gray-1">Tags list are updating</a>';
    echo '</div>';
}

function get_image_in_post_content($args = array()) {
    $display_img = '';
    $url = get_bloginfo('url');
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', get_post_field('post_content', $args['post_id']), $matches);
    $display_img = $matches [1] [0];
    return $display_img;
}

function get_image_from_attachments($args = array()) {
    if (function_exists('wp_get_attachment_image')) {
        $children = get_children(
                array(
                    'post_parent' => $args['post_id'],
                    'post_type' => 'attachment',
                    'numberposts' => 1,
                    'post_status' => 'inherit',
                    'post_mime_type' => 'image',
                    'order' => 'ASC',
                    'orderby' => 'menu_order ASC'
                )
        );

        if (empty($children))
            return false;

        $image = wp_get_attachment_image_src($children[0], 'thumbnail');
        return $image;
    }
}

function get_image_from_post_thumbnail($args = array())
{
	if (function_exists('has_post_thumbnail')) {
		if (has_post_thumbnail( $args['post_id']))
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $args['post_id'] ), 'single-post-thumbnail' );
	}
 	return $image[0];

}

function tf_get_image($args = array()) {
    global $post;

    $defaults = array('post_id' => $post->ID);
    $args = wp_parse_args($args, $defaults);
    $final_img = get_image_from_post_thumbnail($args);

    if (!$final_img)
        $final_img = get_image_from_attachments($args);

    if (!$final_img)
        $final_img = get_image_in_post_content($args);

    $final_img = str_replace($url, '', $final_img);
    return $final_img;
}

function get_other_posts() {
    
    global $post;
    $categories = get_the_category();
    $currentId= $post->ID;
    foreach($categories as $cate)
        $idCates[]= $cate->cat_ID;
    
    $posts= get_posts( array( 'category__and' => $idCates, 'posts_per_page' => 3, 'orderby' => 'id', 'order' => 'DESC' ) );
    if(count($posts))
    {
        echo '<br/><hr class="mg-bottom-20"/><h4>You may also like these:</h4>';
        echo "<ul>";
        foreach ($posts as $post)
        {
            if($currentId!=$post->ID)
            echo '<li><a href="' . get_permalink() . '" title="' . the_title("", "", false) . '">' . the_title("", "", false) . '</a></li>';
        }
        echo "</ul>";
         echo "<br/><hr/>";
    }
}

function foreva_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
?>
    <li>
            <a href="#"><?php comment_author(); ?>:</a>
            <span class="data-day">(<?php echo get_comment_date('j F Y');?>)</span>
            <?php comment_text(); ?>
    </li>
<?php 
}

function get_form_comment()
{
    $args_form_comment = array(
        'id_form' => 'commentform',
        'id_submit' => 'submit',
        'title_reply'=>'',
        'label_submit' => __('GỬI Ý KIẾN'),
        'comment_field' => '<textarea id="comment" name="comment" aria-required="true" placeholder="NỘI DUNG"></textarea>',
        'comment_notes_after' => '<span class="note">16/500 ký tự</span>',
        'comment_notes_before' => '',
        'fields'=>apply_filters( 'comment_form_default_fields', array(
        'author'=>'',
        'email'=>''))
    );
    return $args_form_comment;
}
?>
