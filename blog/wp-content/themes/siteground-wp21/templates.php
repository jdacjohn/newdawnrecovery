<?if( $sg == 'banner' ):?>
<div style="width:137px;text-align:center;margin:0 auto;">
<br />
<table style="width:137px;text-align:center;" cellpadding="0" cellspacing="0">
	<tr>
 		<td><font style="font-size: 10px; font-family: Verdana,Arial,Helvetica,sans-serif; color: #333333;text-align:left;">Designed by:</font></td>
 	</tr>
</table>
<table style="width:137px;height:16px;text-align:center;border:none;" cellpadding="0" cellspacing="0">
	<tr>
 		<td class="sg1" style="width:28px;height:16px;"></td>
 		<td width="2" height="16"></td>
 		<td class="sg2" width="107" height="16" style="text-align:center;">
 		<a href="http://www.siteground.com/wordpress-hosting/wordpress-themes.htm" target="_blank" style="font-size: 10px; font-family: Verdana,Arial,Helvetica,sans-serif; color: #333333;text-decoration:none;" target="_blank">Wordpress themes</a>
 		</td>
 	</tr>
</table>
<br />
</div>
 
 <?else:?>
  <?php if(is_home()) { ?>
Powered by <a href="http://wordpress.org/" class="sgfooter" target="_blank">WordPress</a> .::. <a href="http://www.siteground.com/wordpress-hosting.htm" class="sgfooter" target="_blank">Hosting for WordPress by SiteGround</a>
<?php    }
else
{ ?>
Powered by <a href="http://wordpress.org/" class="sgfooter" target="_blank">WordPress</a>
<?php } ?>

 <?endif;?>