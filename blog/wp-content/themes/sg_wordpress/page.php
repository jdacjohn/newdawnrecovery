<?php 
session_start();
if(!isset($_SESSION['dateformat']))
	$_SESSION['dateformat'] = "H:i";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<!--
sg_wordpress: Template for Wordpress 1.5
(c) by Vladimir Simovic aka Perun
www.vlad-design.de and www.perun.net

The CSS, XHTML and design is released under GPL:
http://www.opensource.org/licenses/gpl-license.php
-->
<head profile="http://gmpg.org/xfn/1">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" type="text/css" media="print" href="<?php echo get_settings('siteurl'); ?>/print.css" />

<style type="text/css" media="screen">
@import url( <?php bloginfo('stylesheet_url'); ?> );
</style>


<script language="javascript" type="text/javascript" src="wp-content/themes/sg_wordpress/clock.js"> </script>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php wp_head(); ?>
</head>
<body>
<div class="webcontainer">
<!-- Start Top -->
<table width="780" height="55" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td background="wp-content/themes/sg_wordpress/images/top_01.jpg" width="5" height="17"></td>
		<td background="wp-content/themes/sg_wordpress/images/top_02.jpg" width="699" height="17">
		<span>path</span>
		</td>
		<td background="wp-content/themes/sg_wordpress/images/top_03.jpg" width="61" height="17" align="center" id="clock" class="time"><script>initclock()</script></td>
		<td background="wp-content/themes/sg_wordpress/images/top_04.jpg" width="11" height="17" border="0" onclick="javascript:toggleClock();" alt="12/24 mode" title="12/24 mode"></td>
		<td background="wp-content/themes/sg_wordpress/images/top_05.jpg" width="4" height="17"></td>
	</tr>
	<tr>
		<td colspan="5" width="780" height="28" align="left">
		</td>
	</tr>
	<tr>
		<td background="wp-content/themes/sg_wordpress/images/top_07.jpg" width="5" height="10"></td>
		<td background="wp-content/themes/sg_wordpress/images/top_08.jpg" width="699" height="10"></td>
		<td colspan="3" background="wp-content/themes/sg_wordpress/images/top_09.jpg" width="76" height="10"></td>
	</tr>
</table>
<!-- End Top -->
<!-- Start Content -->
  <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="115" class="table_top_content">
      <table width="760" height="115" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>
            <table width="100%" height="115" border="0" cellpadding="0" cellspacing="0" class="header_table">
                <tr>
                  <td align="left" valign="middle" style="padding-left:10px;"></td>
                  <td align="right" valign="top"><table width="379" height="95" cellpadding="0" cellspacing="0" style="margin-top:10px; margin-right:10px;">
                      <tr>
                        <td valign="top"></td>
                      </tr>
                  </table></td>
                </tr>
            </table></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top" class="table_middle_content">
      <table width="760" border="0" align="center" cellpadding="0" cellspacing="0" >
          <tr>
            <td height="5" colspan="2" valign="top"></td>
          </tr>
          <tr>
            <td width="180" valign="top" style="padding:5px 0px 5px 0px;">
            <table width="180" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td background="wp-content/themes/sg_wordpress/images/menu_01.jpg" width="180" height="10"></td>
				</tr>                
            	<tr>
                  <td background="wp-content/themes/sg_wordpress/images/menu_03.jpg" style="padding:0px 0px 0px 0px;">

<div id="navi">
<h2>Main</h2>
<ul>
<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
</ul>

<h2><?php _e('Categories:'); ?></h2>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1'); ?>
</ul>

<h2><?php _e('Archives:'); ?></h2>
<ul>
<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
</ul>

<h2><label for="s"><?php _e('Search:'); ?></label></h2>	
<form id="searchform" method="get" action="<?php echo $PHP_SELF; ?>">
<div>
<input type="text" name="s" id="s" size="17" class="navi-search" /><br />
<input type="submit" name="submit" value="<?php _e('Search'); ?>" />
</div>
</form>

<h2>Links</h2>
<ul>
<?php wp_get_links(1); ?>
</ul>

<h2><?php _e('Meta:'); ?></h2>
<ul>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
<li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>
<?php wp_meta(); ?>
</ul>

<?php if (function_exists('wp_theme_switcher')) { ?>
<h2>Styleswitcher</h2> 
<?php wp_theme_switcher(); ?>
<?php } ?>

</div> 
                  
                  </td>
                </tr>
                <tr>
					<td background="wp-content/themes/sg_wordpress/images/menu_02.jpg" width="180" height="10"></td>
				</tr>   
            </table>
           </td>
            <td valign="top" style="padding:5px 10px 5px 10px;">

<div id="inhalt">

<?php if ($posts) : foreach ($posts as $post) : start_wp(); ?>

<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>

<div class="storycontent">
<?php the_content(__('(more...)')); ?> 
 <?php edit_post_link(); ?>
</div> 

	<!--
	<?php trackback_rdf(); ?>
	-->

<?php endforeach; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<div class="center"><?php posts_nav_link('&nbsp;&nbsp;', __('&laquo; Previous'), __('Next &raquo;')); ?></div>


</div>
            
			</td>
            </tr>
          <tr height="10">
            <td></td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="bottom" style="border-top:1px dotted #CCCCCC; font-size:9px;">
            	<p class="">Copyright &copy; 2006 <a href=""></a>, Powered by <a href="http://www.wordpress.org//">WordPress</a>, Hosted by <a href="http://www.siteground.com/">Siteground</a></p>
            </td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td class="table_bottom_content"></td>
    </tr>
  </table>
</div>
</body>
</html>