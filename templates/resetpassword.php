<?php
/*
Template Name: Reset Password
*/

wp_head();
if ( have_posts() ) : while ( have_posts() ) : the_post();
endwhile; endif;
?>
<link rel="stylesheet" href="/wp-content/plugins/fcc-dashboard/css/style.default.css" type="text/css" media="all" />
<style>
	form p, form label{color: #999;}
	#pass-strength-result {display:none;}
	.user-pass1-wrap {margin-bottom: 0px !important;}
</style>
<body class="loginbody">
	<div class="loginwrapper">
		<div class="loginwrap zindex100 animate2 bounceInDown">
		<a href="<?php echo site_url(); ?>"><img class="login-logo" src="/wp-content/themes/FloridaCareerCenters/images/default-logo2.png"></a>
		<h1 class="logintitle"><span class="iconfa-lock"></span> Reset Password <span class="subtitle">Create a new password.</span></h1>
	        <div class="loginwrapperinner">
	            <?php echo do_shortcode('[theme-my-login default_action="resetpass" show_title=0]') ?>
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