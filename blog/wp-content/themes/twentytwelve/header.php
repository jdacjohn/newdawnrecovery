<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="http://www.newdawntreatmentcenters.com/css/global.css" />
<link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
	<!--	<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<div class="skip-link assistive-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav>--><!-- #site-navigation -->
<!--
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>-->
		
		<div id="logo"><a href="http://www.newdawntreatmentcenters.com/">New Dawn Treatment Centers</a></div>
		<div id="phone">Get Confidential Help<br/><span>866.969.4300</span></div>
		<!--<div id="chat">
			<div id="chatText"><span >Questions?</span><div style="padding-top: 5px;">click here for instant<br/>24 hour chat</div>
			<div id="chat_button"><a href="">Chat Now!</a></div>
			</div><!-- end chat text
		</div><!-- end chat button-->
	</header><!-- #masthead -->
	<!--BEGIN NAV-->
<div id="nav">
	
	<ul id="nav2" style="margin: 0px; padding: 0px;">
	<li><a href="http://www.newdawntreatmentcenters.com/"><img src="http://www.newdawntreatmentcenters.com/images/home.png" alt="Home" style="margin-top:7px;" width="27" height="27" border="0" /></a></li>


<li><a href="http://www.newdawntreatmentcenters.com/eating-disorders/">Eating<br/>Disorders</a>
		<ul>
        	<li><a href="http://www.newdawntreatmentcenters.com/eating-disorders/#anorexia" class="info_link">Anorexia</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/eating-disorders/#bulimia" class="info_link">Bulimia</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/eating-disorders/#binge" class="info_link">Binge-Eating</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/eating-disorders/#diabulimia" class="info_link">Diabulimia</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/eating-disorders/#ednos" class="info_link">EDNOS</a></li>

		</ul>
	</li>
	<li style="z-index: 500;"><a href="http://www.newdawntreatmentcenters.com/alcohol-drug/">Alcohol &amp;<br/>Drug Addiction</a>
		<ul>

        	<li><a href="http://www.newdawntreatmentcenters.com/alcohol-drug/#alcohol" class="info_link">Alcohol</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/alcohol-drug/#cocaine" class="info_link">Cocaine</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/alcohol-drug/#marijuana" class="info_link">Marijuana</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/alcohol-drug/#heroin" class="info_link">Heroin</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/alcohol-drug/#methamphetamine" class="info_link">Methamphetamine</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/alcohol-drug/#scrips" class="info_link">Prescription Drugs</a></li>
		</ul>
	</li>

	<li><a href="http://www.newdawntreatmentcenters.com/treatment-options/">Treatment<br/>Options</a>
		<ul>

        	<li><a href="http://www.newdawntreatmentcenters.com/treatment-options/#detox" class="info_link">Detox</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/treatment-options/#residential" class="info_link">Residential</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/treatment-options/#hosp-part" class="info_link">PHP</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/treatment-options/#outpatient" class="info_link">IOP</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/treatment-options/#adolescent" class="info_link">Adolescent PHP/IOP</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/treatment-options/#aftercare" class="info_link">Lifetime Aftercare</a></li>
				<li><a href="http://www.newdawntreatmentcenters.com/treatment-options/#medical" class="info_link">Medical Treatment</a></li>
					<li><a href="http://www.newdawntreatmentcenters.com/treatment-options/#psychiatric" class="info_link">Psychiatric Treatment</a></li>
					<li><a href="http://www.newdawntreatmentcenters.com/treatment-options/#education" class="info_link">Education</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/treatment-options/#housing" class="info_link">Outpatient Housing</a></li>
		</ul>
	</li>
	
	<li><a href="#">Therapies</a>
		<ul>
		<li><a href="http://www.newdawntreatmentcenters.com/therapies/">Core Therapies</a></li>
        	<li><a href="http://www.newdawntreatmentcenters.com/therapies/eating-disorder-therapies">Eating Disorder Therapies</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/therapies/chemical-dependency-therapies">Chemical Dependency Therapies</a></li>
	
	
		</ul>
    </li>
	
	<li><a href="http://www.newdawntreatmentcenters.com/admissions/">Admissions</a>
        <ul>
        <li><a href="http://www.newdawntreatmentcenters.com/admissions/faqs/">FAQs</a></li>
        <li><a href="http://www.newdawntreatmentcenters.com/admissions/self-assessment/">Self Assessment</a></li>
      <li><a href="http://www.newdawntreatmentcenters.com/admissions/schedule-assessment/">Schedule An Assessment</a></li>
        <li><a href="http://www.newdawntreatmentcenters.com/admissions/fees">Fees</a></li>
        <li><a href="http://www.newdawntreatmentcenters.com/admissions/insurance/">Insurance</a>
	<ul>   <li><a href="http://www.newdawntreatmentcenters.com/admissions/insurance/insurance-form/">Insurance Verification Form</a></li></ul></li>

        </ul>
    </li>
	
	<!--About Us-->
  
    <li><a href="#">About Us</a>
		<ul>
        	<li><a href="http://www.newdawntreatmentcenters.com/blog/events">Events</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/about-us/resources">Resources &amp; Links</a></li>
			<li><a href="http://www.newdawntreatmentcenters.com/about-us/locations">Locations</a></li>
			
            <li><a href="#">Our Staff</a>
			<ul><li><a href="http://www.newdawntreatmentcenters.com/about-us/staff/leadership/">Leadership</a></li>
				<li><a href="http://www.newdawntreatmentcenters.com/about-us/staff/bayarea/">Bay Area Clinicians</a></li>
				<li><a href="http://www.newdawntreatmentcenters.com/about-us/staff/sacramento/">Sacramento Clinicians</a></li>
            </ul>
            </li>
	
		</ul>
		</li>
        <!-- End About Us-->
        
	<li><a href="http://www.newdawntreatmentcenters.com/blog/" style="border-right: none !important;">Blog</a></li>
	</ul>
	
</div>
<!--END NAV-->

	<div id="main" class="wrapper">