<?php
/**
 * Widgetized Gallery Sidebar Area (Widgets)
 *
 *
 * @file           sidebar-gallery.php
 * @package        WordPress 
 * @subpackage     Shell 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/shell-lite/sidebar-gallery.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
        <div id="widgets" class="grid col-300 fit gallery-meta">
        <?php shell_widgets(); // above widgets hook ?>
        
                <div class="widget-title"><?php _e('Image Information', 'shell'); ?></div>
                    
					<?php $shell_data = get_post_meta($post->ID, '_wp_attachment_metadata', true); ?>
                    
                    <span class="full-size">Full Size: <a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo $shell_data['width'] . '&#215;' . $shell_data['height']; ?></a>px</span>
                    
					<?php if ($shell_data['image_meta']['aperture']) { ?>
                    <span class="aperture">Aperture: f/<?php echo $shell_data['image_meta']['aperture']; ?></span>
                    <?php } ?>

                    <?php if ($shell_data['image_meta']['focal_length']) { ?>
                    <span class="focal-length">Focal Length: <?php echo $shell_data['image_meta']['focal_length']; ?>mm</span>
                    <?php } ?>

                    <?php if ($shell_data['image_meta']['iso']) { ?>
                    <span class="iso">ISO: <?php echo $shell_data['image_meta']['iso']; ?></span>
                    <?php } ?>

                    <?php if ($shell_data['image_meta']['shutter_speed']) { ?>
                    <span class="shutter">Shutter:
					<?php
                        if ((1 / $shell_data['image_meta']['shutter_speed']) > 1) {
                            echo "1/";
                        if (number_format((1 / $shell_data['image_meta']['shutter_speed']), 1) == number_format((1 / $shell_data['image_meta']['shutter_speed']), 0)) {
                            echo number_format((1 / $shell_data['image_meta']['shutter_speed']), 0, '.', '') . ' sec';
                        } else {
                            echo number_format((1 / $shell_data['image_meta']['shutter_speed']), 1, '.', '') . ' sec';
                        }
                        } else {
                            echo $shell_data['image_meta']['shutter_speed'] . ' sec';
                        }
                    ?>
                    </span>
                    <?php } ?>

                    <?php if ($shell_data['image_meta']['camera']) { ?>
                    <span class="camera">Camera: <?php echo $shell_data['image_meta']['camera']; ?></span>
                    <?php } ?>

        </div><!-- end of #widgets -->

            <?php if (!is_active_sidebar('gallery-widget')) return; ?>

            <?php if (is_active_sidebar('gallery-widget')) : ?>

        <div id="widgets" class="grid col-300 fit">
        
        <?php shell_widgets(); // above widgets hook ?>
            
                <?php dynamic_sidebar('gallery-sidebar-widget'); ?>
                
        <?php shell_widgets_end(); // after widgets hook ?>
            
        </div><!-- end of #widgets -->
        
        <?php endif; ?>