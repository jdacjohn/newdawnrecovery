<?php
/**
 * Template Name: Events Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you’d like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<?php get_sidebar( 'events' ); ?>


	<div id="MainContent-blog" class="site-content">
		<div id="content" role="main">

<!--<h1 style="margin-top:5px!important;">Events</h1>-->
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
    
 <!-- #Right side bar -->   
<div id="ReftSideBar" class="sidebars">
<?php get_sidebar( 'rightSideBar' ); ?>
</div>

<?php get_footer(); ?>