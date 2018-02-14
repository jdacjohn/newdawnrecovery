
<div style="clear:both;"></div>
</div>

<div id="footer">
		<div class="footer">			
			<div id="sgf">
 				<?php if(is_home()) { ?>
Powered by <a href="http://wordpress.org/" class="sgfooter" target="_blank">WordPress</a> .::. <a href="http://www.siteground.com/wordpress-hosting.htm" class="sgfooter" target="_blank">Hosting for WordPress by SiteGround</a>
<?php    }
else
{ ?>
Powered by <a href="http://wordpress.org/" class="sgfooter" target="_blank">WordPress</a>
<?php } ?>

			</div>
			<p class="validation"><a href="http://validator.w3.org/check/referer"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/css.gif" alt="css" title="css" /></a><img src="<?php bloginfo('stylesheet_directory'); ?>/images/and.gif" alt="and" title="and" /><a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/html.gif" alt="html" title="html" /></a></p>
		</div>
		<div id="footer_bg"></div>
</div>	

<?php wp_footer(); ?>
</body>
</html>