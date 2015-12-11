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
	            <?php
	            	$request =  $_SERVER['REQUEST_URI'];
	            	if ($request == "/login/?pending=approval")
	            		echo "<p class='custom message'>Your account is being reviewed.  You will recieve an email once your account has been approved.</p>";
	            	if ($request == "/login/?checkemail=confirm")
	            		echo "<p class='custom message'>Please check your email and follow the link to reset your password.</p>";
	            	if ($request == "/login/?resetpass=complete")
	            		echo "<p class='custom message'>Your password has been reset.</p>";
	           		echo do_shortcode('[theme-my-login show_title=0]'); 
	            	#echo do_shortcode('[wpmem_form login /]'); 
	            	#the_content();
	            ?>
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