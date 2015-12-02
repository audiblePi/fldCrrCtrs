<?php get_header(); ?>
    <script type="text/javascript">
     jQuery(document).ready(function() {
        jQuery("#callto").corner("5px"); 
     });
    </script>     
        <div id="content-full" class="grid col-980">
            <?php $options = get_option('shell_theme_options');  ?>
       <div id="callto" class="clearfix">
        <div class="grid col-540">

        </div>

        <div class="grid col-380 fit">
        
            <?php $options = get_option('shell_theme_options');
			    if ($options['home_subheadline']) {
                    echo '<h1 class="featured-subtitle">'; 
				    echo $options['home_subheadline'];
				    echo '</h1>'; 
			      } 
			?>
            
            <?php $options = get_option('shell_theme_options');
			    if ($options['home_content_area']) {
                    echo '<p>'; 
				    echo $options['home_content_area'];
				    echo '</p>'; 
			      } 
			?>                    
            <div class="featured-button">
            <p><a href="https://ucf-csm.symplicity.com/events/students.php?mode=list&cf=2015Statewide" target="_blank">Statewide Job Fair Employers</a></p>

<!--            <?php $options = get_option('shell_theme_options');
                if ($options['featured_button_link']) {
                    echo '<p><a href="'.$options['featured_button_link'].'">'; 
                        echo "More Information";
                    echo '</a></p>';
                  } 
            ?>   -->
            
            </div>
        </div>
     </div>   
        </div>
               


<?php get_sidebar('home'); ?>
<?php get_footer(); ?>