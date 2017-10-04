<?php
/**
 * Template Name: Template Contact
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts
 *
 * The showcase template in Twenty Eleven consists of a featured posts section using sticky posts,
 * another recent posts area (with the latest post shown in full and the rest as a list)
 * and a left sidebar holding aside posts.
 *
 * We are creating two queries to fetch the proper posts and a custom widget for the sidebar.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

include_once('form-contact.php');

get_header(); ?>

	<?php 
		if (have_posts() ) : while ( have_posts() ) : the_post();
		$attachment_id = get_field('bandeau');
		$size = "bandeau-page"; 
	?>
	<div class="head" style="background:url('<?php echo $attachment_id['sizes'][$size]; ?>') no-repeat top center #448ab5;">
		<div class="container">
			<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			} ?>
			<div class="title">
				<h1><?php the_title(); ?></h1>
			</div>
			<?php if(get_field('introduction')) { ?>
				<div class="intro">
					<?php 
						the_field('introduction');
					?>
				</div>
			<?php } ?>
		</div>
	</div>

	<div class="page-contact page-<?php the_ID() ?> container overflow-h">

		<div id="sidebar-left">
			<?php get_sidebar('sidebarleft'); ?>
		</div>

		<div id="content" role="main" class="contact">

			<?php get_template_part( 'content', 'page' ); ?>
			<?php include_once('formulaire_html.php'); ?>

		</div><!-- #content -->          

        <div id="sidebar-right">
        	<?php if(get_field('coordonnees')) { the_field('coordonnees'); } ?>
            <?php get_sidebar('sidebarright'); ?>
        </div>

		<?php $gmaps = get_field('google_maps'); if( !empty($gmaps) ) : ?>
			<div class="bandeau gmaps">
				<div class="marker" data-lat="<?php echo $gmaps['lat']; ?>" data-lng="<?php echo $gmaps['lng']; ?>"></div>
			</div>
		<?php endif; ?>
		
	</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>