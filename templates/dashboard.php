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

<div class="fcc-dashboard mainwrapper">
    <div class="leftpanel">
        <div class="logopanel">
        	<a href="<?php echo site_url(); ?>"><img src="/wp-content/themes/FloridaCareerCenters/images/default-logo2.png"></a>
        </div>
        
        <div class="datewidget">Today is <?php echo date("F j, Y, g:i a"); ?></div>

        <div class="searchwidget">
        	<form action="results.html" method="post">
            	<div class="input-append">
                    <input type="text" class="span2 search-query" placeholder="Search here...">
                    <button type="submit" class="btn"><span class="icon-search"></span></button>
                </div>
            </form>
        </div>
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Main Navigation</li>
                <li id="dashboard" class="active" ><a href="dashboard.html"><span class="icon-align-justify"></span> Dashboard</a></li>
                <li id="calendar"><a href=""><span class="icon-calendar"></span> Calendar</a></li>
                <li id="edit-profile"><a href=""><span class="icon-edit"></span>Edit Profile</a></li>
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
                        <li id="back-home"><a href="<?php echo site_url(); ?>"><span class="iconsweets-globe"></span> Back to Home</a></li>
                        <li class="divider"></li>
                        <li id="logout"><a href="<?php echo wp_logout_url(); ?>"><span class="icon-off"></span> Sign Out</a></li>
                    </ul>
                </div>
            </div>
    	</div>
        
        <div class="breadcrumbwidget">
	    	<ul class="breadcrumb">
	            <li><a href="dashboard.html">Home</a> <span class="divider">/</span></li>
	            <li class="active" id="this-crumb">Dashboard</li>
	        </ul>
	    </div>

	  	<div class="pagetitle">
	    	<h1>Dashboard</h1> <span>This is a sample description for dashboard page...</span>
	    </div>

		<div class="maincontent">
	    	<div class="contentinner content-dashboard">
		        <div class="dynamic-content-wrapper dashboard current">
			        <?php echo do_shortcode('[fcc-dashboard]'); ?>
		    	</div>
		    	<div class="dynamic-content-wrapper calendar">
			        <?php echo do_shortcode('[fcc-calendar]'); ?>
		    	</div>
		    	<div class="dynamic-content-wrapper edit-profile">
			        <?php echo do_shortcode('[fcc-edit-profile]'); ?>
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