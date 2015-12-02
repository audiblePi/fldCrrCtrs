     <script type="text/javascript">
     jQuery(document).ready(function() {
        jQuery(".widget-title-home h3").corner("5px top"); 
        jQuery(".textwidget").corner("5px bottom");
     });
    </script>
    <div id="widgets">
        <div class="grid col-320">
        <?php shell_widgets(); // above widgets hook ?>
            <div class="widget-title-home-wrapper">
            <?php if (!dynamic_sidebar('primary-home-sidebar-widget')) : ?>
                    <div class="widget-title-home blue"><h3><?php _e('Company Careers', 'shell'); ?></h3></div>
                    <p>Testimonials are a powerful selling tool. Many great selling ads are made up of 1/3 testimonials of the company's products or services. This is only a suggestion, since this area is widgetized you can use
                    <span class="featured-buttonBlue margin10"><a href="#">click here</a></span><span class="clearfix"></span>
                    </p>
			<?php endif; //end of primary-home-sidebar-widget ?>
            </div> 
        <?php shell_widgets_end(); // shell after widgets hook ?>
        </div><!-- end of .col-320 -->

        <div class="grid col-320">
        <?php shell_widgets(); // shell above widgets hook ?>
            <div class="widget-title-home-wrapper">            
			<?php if (!dynamic_sidebar('secondary-home-sidebar-widget')) : ?>
            
                <div class="widget-title-home yellow"><h3><?php _e('Featured Services', 'shell'); ?></h3></div>
                <p>Since 1975, <?php bloginfo('name'); ?> has been committed to ethically producing the highest quality service in the world. Today with more than 5000 employees worldwide <?php bloginfo('name'); ?> is still committed to same producing quality. 
                <span class="featured-buttonBlue margin10"><a href="#">click here</a></span><span class="clearfix"></span>
                </p>
            
			<?php endif; //end of secondary-home-sidebar-widget ?>
            </div>
            <?php shell_widgets_end(); // after widgets hook ?>
        </div><!-- end of .col-320 -->

        <div class="grid col-320 fit">
        <?php shell_widgets(); // above widgets hook ?>
            <div class="widget-title-home-wrapper">            
            <?php if (!dynamic_sidebar('tertiary-home-sidebar-widget')) : ?>
            
                <div class="widget-title-home green"><h3><?php _e('Our Seminars', 'shell'); ?></h3></div>
                <p>Headline, Subheadline, brief info above the call-to-action button and including the button, together with its destination link can be changed via Theme Options. Logo is uploadable as well. Three columns you see here are widgets.
                <span class="featured-buttonBlue margin10"><a href="#">click here</a></span><span class="clearfix"></span>
                </p>
        
		    <?php endif; //end of tetriary-home-sidebar-widget ?>
          </div>  
        <?php shell_widgets_end(); // after widgets hook ?>
        </div><!-- end of .col-320 fit -->
    </div><!-- end of #widgets -->
 <div id="home-wrapper">
 
     <div class="grid col-620 home-welcome">
        <?php if (!dynamic_sidebar('bottom-home-left-widget')) : ?>
        <?php endif; ?>
     </div>
     <div class="grid col-280 fit home-news">
        <?php if (!dynamic_sidebar('bottom-home-right-widget')) : ?>
        <?php endif; ?>
     </div>
 
 </div>   
    