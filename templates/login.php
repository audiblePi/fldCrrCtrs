<?php
/*
Template Name: Login
*/

wp_head();
if ( have_posts() ) : while ( have_posts() ) : the_post();
endwhile; endif;
?>

<body class="loginbody">
	<div class="loginwrapper">
		<div class="loginwrap zindex100 animate2 bounceInDown">
		<a href="<?php echo site_url(); ?>"><img class="login-logo" src="/wp-content/themes/FloridaCareerCenters/images/default-logo2.png"></a>
		<h1 class="logintitle"><span class="iconfa-lock"></span> Sign In <span class="subtitle">Hello! Sign in to get you started!</span></h1>
	        <div class="loginwrapperinner">
	            <?php the_content(); ?>
	        </div>
	    </div>
	    <div class="loginshadow animate3 fadeInUp"></div>
	</div>

	<script type="text/javascript">
		jQuery.noConflict();

		jQuery(document).ready(function(){
			jQuery('ul.tml-action-links').prepend('<li><a href="<?php echo site_url() ?>">← Back to FloridaCareerCenters.com</a></li>');
			console.log(jQuery('.loginwrapperinner').text());
			
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