
<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?><?php if (!empty($gallery)) : ?>
<div id="jslidernews2" class="lof-slidecontent">
    <div class="button-previous">Previous</div>
    <!-- MAIN CONTENT --> 
    <div class="main-slider-content">
            <div class="sliders-wrapper">
                    <div class="sliders-wrapper">
                            <ul class="sliders-wrap-inner">
                                <?php foreach ($images as $image) : ?>
                                    <li class="<?php echo $image->pid; ?>"><img src="<?php echo $image->imageURL; ?>" alt="<?php echo $image->alttext; ?>" data-description="<?php echo $image->description; ?>" title="<?php echo $image->alttext; ?>"  /></li>
                                <?php endforeach; ?>
                            </ul>
                    </div>
            </div>
    </div>
    <!-- END MAIN CONTENT --> 
    <!-- NAVIGATOR -->
    <div class="navigator-content">
            <div class="navigator-wrapper">
                <ul class="navigator-wrap-inner">
                    <?php foreach ($images as $image) : ?>
                        <li class="<?php echo $image->pid; ?>">
                            <img src="<?php echo $image->thumbnailURL; ?>" alt="<?php echo $image->alttext; ?>" data-description="<?php echo $image->description; ?>" title="<?php echo $image->alttext; ?>" <?php echo $image->size; ?>  />
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
    </div>
    <div class="button-next">Next</div>
</div>
    
    <script type="text/javascript" defer="defer">
        
        jQuery(document).ready( function(){	
            var buttons = { previous:jQuery('#jslidernews2 .button-previous') ,
                next:jQuery('#jslidernews2 .button-next') };			 
            jQuery('#jslidernews2').lofJSidernews( { interval:5000,
                easing:'easeInOutQuad',
                duration:1200,
                auto:true,
                mainWidth:1000,
                mainHeight:300,
                navigatorHeight		: 100,
                navigatorWidth		: 1000,
                maxItemDisplay:100,
                buttons:buttons } );						
        });
    </script>
<?php endif; ?>