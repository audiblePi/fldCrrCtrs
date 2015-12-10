<?php
/*
Template Name: Login
*/

wp_head();
if ( have_posts() ) : while ( have_posts() ) : the_post();
endwhile; endif;
?>
<link rel="stylesheet" href="/wp-content/plugins/fcc-dashboard/css/style.default.css" type="text/css" media="all" />
<body class="loginbody">
	<div class="loginwrapper">
		<div class="loginwrap zindex100 animate2 bounceInDown">
		<a href="<?php echo site_url(); ?>"><img class="login-logo" src="/wp-content/themes/FloridaCareerCenters/images/default-logo2.png"></a>
		<h1 class="logintitle"><span class="iconfa-lock"></span> Sign In <span class="subtitle">Hello! Sign in to get you started!</span></h1>
	        <div class="loginwrapperinner">
	            <?php 	echo do_shortcode('[theme-my-login show_title=0]'); ?>
	        </div>
	    </div>
	    <div class="loginshadow animate3 fadeInUp"></div>
	</div>

	<script type="text/javascript">
		jQuery.noConflict();

		jQuery(document).ready(function(){
			jQuery('ul.tml-action-links').prepend('<li><a href="<?php echo site_url() ?>">← Back to FloridaCareerCenters.com</a></li>');
						
			var anievent = (jQuery.browser.webkit)? 'webkitAnimationEnd' : 'animationend';
			jQuery('.loginwrap').bind(anievent,function(){
				jQuery(this).removeClass('animate2 bounceInDown');
			});
			
			jQuery('#username,#password').focus(function(){
				if(jQuery(this).hasClass('error')) jQuery(this).removeClass('error');
			});
		});
	</script>
</body>