<?php
/*
Template Name: Dashboard
*/

wp_head();
if ( have_posts() ) : while ( have_posts() ) : the_post();
endwhile; endif;
$current_user = wp_get_current_user();
$current_user_id = $current_user->ID;
date_default_timezone_set('EST');
?>
<link rel="stylesheet" href="/wp-content/plugins/fcc-dashboard/css/style.default.css" type="text/css" media="all" />
<div class="se-pre-con"></div>
<div class="fcc-dashboard mainwrapper">
    <div class="leftpanel">
        <div class="logopanel">
        	<a href="<?php echo site_url(); ?>"><img src="/wp-content/themes/FloridaCareerCenters/images/default-logo2.png"></a>
        </div>
        
        <div class="datewidget">Today is <?php echo date("F j, Y, g:i a"); ?></div>

        <div class="searchwidget">
        	<form action="" method="post">
            	<div class="input-append">
                    <input type="text" class="span2 search-query" placeholder="Search here...">
                    <button type="submit" class="btn"><span class="icon-search"></span></button>
                </div>
            </form>
        </div>
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Main Navigation</li>
                <li class="nav" id="documents" class="active" ><a href=""><span class="icon-folder-open"></span> Documents</a></li>
                <li class="nav" id="calendar"><a href=""><span class="icon-calendar"></span> Calendar</a></li>
                <li class="nav" id="edit-profile"><a href=""><span class="icon-edit"></span>Edit Profile</a></li>
            </ul>
        </div>
    </div>
    
    <div class="rightpanel">
    	<div class="headerpanel">
        	<a href="" class="showmenu"></a>
            
            <div class="headerright">
    			<div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="/page.html">Hi, <?php echo $current_user->display_name ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li id="edit-profile" class="script"><a href=""><span class="icon-edit"></span> Edit Profile</a></li>
                        <li id="back-home"><a href="<?php echo site_url(); ?>"><span class="icon-home"></span> Back to Home</a></li>
                        <li class="divider"></li>
                        <li id="logout"><a href="<?php echo wp_logout_url(); ?>"><span class="icon-off"></span> Sign Out</a></li>
                    </ul>
                </div>
            </div>
    	</div>
        
        <div class="breadcrumbwidget">
	    	<ul class="breadcrumb">
	            <li><a href="">Home</a> <span class="divider">/</span></li>
	            <li class="active" id="this-crumb">Documents</li>
	        </ul>
	    </div>

	  	<div class="pagetitle">
	    	<h1>Documents</h1>
	    </div>

		<div class="maincontent">
	    	<div class="contentinner content-dashboard">
		        <div class="dynamic-content-wrapper documents current">
			        <?php echo do_shortcode('[fcc-documents]'); ?>
		    	</div>
		    	<div class="dynamic-content-wrapper calendar">
			        <?php echo do_shortcode('[fcc-calendar]'); ?>
		    	</div>
		    	<div class="dynamic-content-wrapper edit-profile">
			        <?php echo do_shortcode('[fcc-edit-profile]'); ?>
		    	</div>
                <div class="dynamic-content-wrapper search-results">
                    <?php echo do_shortcode('[fcc-search-results]'); ?>
                </div>
		    </div>
		  </div>

    </div>
    
    <div class="clearfix"></div>
    
    <div class="footer">
    	<div class="footerleft"><a href="<?php echo site_url(); ?>">&copy; <?php echo date('Y'); ?> Florida Career Centers</a></div>
    	<div class="footerright"><a href="http://www.pippindesign.com">Website Design & Development</a> by Pippin Design</div>
    </div>
</div>
<script>jQuery(function($){ $(window).load(function() {$(".se-pre-con").fadeOut(1000);}); });</script>