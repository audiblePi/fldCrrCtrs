    </div><!-- end of #wrapper -->
    <?php shell_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php shell_container_end(); // after container hook ?>

<div id="footer">
    <div id="footer-wrapper">
        <div class="grid col-450 copyright">
            <?php esc_attr_e('&copy;', 'shell'); ?> <?php _e(date('Y')); ?><a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div><!-- end of .copyright -->
        
        <!-- <div class="grid col-300 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'shell' ); ?>"><?php _e( '&uarr;', 'shell' ); ?></a></div> -->
        
        <div class="grid col-450 fit powered" style="float:right">
            <ul class="admin-nav">
                <?php
                    $current_user = wp_get_current_user();
                    $current_user_name = $current_user->display_name;
                    if ( is_user_logged_in() ) {
                        ?>
                        <script>
                            jQuery(function($){
                                $('.welcome-msg').css('display', 'inline-block');
                                $('.menu-admin-container ul li:nth-child(1)').css('display', 'inline-block');
                                $('.menu-admin-container ul li:nth-child(2)').css('border-left', '1px dotted #919191');
                            });
                        </script>
                        <?
                    }
                ?>
                <li class="welcome-msg">
                    Welcome, <?php echo $current_user_name ?>!
                </li>
                <li>
                    <?php wp_nav_menu( array( 'theme_location' => 'admin') ); ?>
                </li>
            </ul>
        </div><!-- end .powered -->
    </div><!-- end #footer-wrapper -->
</div><!-- end #footer -->

<?php wp_footer(); ?>
</body>
</html>