    </div><!-- end of #wrapper -->
    <?php shell_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php shell_container_end(); // after container hook ?>

<div id="footer">
    <div id="footer-wrapper">
        <div class="grid col-300 copyright">
            <?php esc_attr_e('&copy;', 'shell'); ?> <?php _e(date('Y')); ?><a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div><!-- end of .copyright -->
        
        <div class="grid col-300 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'shell' ); ?>"><?php _e( '&uarr;', 'shell' ); ?></a></div>
        
        <div class="grid col-300 fit powered">
            <p><?php wp_nav_menu( array( 'theme_location' => 'admin') ); ?></p>
        </div><!-- end .powered -->
    </div><!-- end #footer-wrapper -->
</div><!-- end #footer -->

<?php wp_footer(); ?>
</body>
</html>