<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<?php 
		// ID de la page avec un bandeau par défaut
		$attachment_id = get_field('bandeau', 4);
		$size = "bandeau-page"; 
	?>
	<div class="head" style="background:url('<?php echo $attachment_id['sizes'][$size]; ?>') no-repeat top center #448ab5;">
		<div class="container">
			<?php if (function_exists('mybread')) mybread(); ?>
			<div class="title">
				<h1><?php echo $lang['erreur_404']; ?></h1>
			</div>
			<?php if(!empty($lang['erreur_404_intro'])) { ?>
				<div class="intro">
					<?php 
						echo $lang['erreur_404_intro'];
					?>
				</div>
			<?php } ?>
		</div>
	</div>

	<div class="page-actualites page-<?php the_ID(); ?> container">
		
		<div id="sidebar-left">
			<?php get_sidebar('sidebarleft'); ?>
		</div>

		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php echo $lang['page_introuvable']; ?></h1>
				</header>

				<div class="entry-content">
					<p><?php echo $lang['page_introuvable_texte']; ?></p>
				</div><!-- .entry-content -->
				
			</article><!-- #post-0 -->

		</div><!-- #content -->

		<div id="sidebar-right">
			<?php get_sidebar('sidebarright'); ?>
		</div>

	</div>

<?php get_footer(); ?>