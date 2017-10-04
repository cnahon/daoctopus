<?php
/**
 * Template Name: Template Détail
 * @package WordPress
 */

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
			<?php
			if (function_exists('pagination_for_pages')) {
		        echo '<div class="pagination_pages">'.pagination_for_pages('sort_column=post_title').'</div>';
		    }
		    ?>
		</div>
	</div>

	<div class="page-detail page-<?php the_ID() ?> container">

		<div id="content" role="main">

			<div class="back">
				<a href="<?php echo get_permalink($post->post_parent); ?>">&larr; <?php echo $lang['retour_liste']; ?></a>
			</div>

			<div class="clear"></div>
	
			<div class="left">
				<div class="slideshow-detail for slickslider">
					<?php
						for($i=0; $i<7; $i++) {
							if(get_field('photo_'.$i)) {
			             		$attachment_id = get_field('photo_'.$i);
								$size = "galerie"; // (thumbnail, medium, large, full or custom size)									 
								//$image = wp_get_attachment_image_src( $attachment_id, $size );
								//echo $image;
								// url = $image[0];
								// width = $image[1];
								// height = $image[2];	
								?>
	          					<li>
	          						<a href="<?php echo $attachment_id['sizes'][$size]; ?>" rel="lightbox">
										<img src="<?php echo $attachment_id['sizes'][$size]; ?>" alt="<?php echo site_name.' - '; the_title(); ?>" />
									</a>
			            		</li>
							<?php
							}
						}
					?>
				</div>
				<div class="slideshow-detail nav slickslider">				
					<?php
						for($i=0; $i<7; $i++) {
							if(get_field('photo_'.$i)) {
			             		$attachment_id = get_field('photo_'.$i);
								$size = "galerie-mini"; // (thumbnail, medium, large, full or custom size)									 
								//$image = wp_get_attachment_image_src( $attachment_id, $size );
								//echo $image;
								// url = $image[0];
								// width = $image[1];
								// height = $image[2];	
								?>
	          					<li>
									<img src="<?php echo $attachment_id['sizes'][$size]; ?>" alt="<?php echo site_name.' - '; the_title(); ?>" />
			            		</li>
							<?php
							}
						}
					?>
		        </div>
		        <div class="cliquez"><?php echo $lang['cliquez_agrandir']; ?></div>
		    </div>
		    <div class="right">
		    	<?php get_template_part( 'content', 'page' ); ?>
		    </div>

			<div class="clear"></div>

		    <div class="description">
		    	<div id="tabs">
		    		<ul>
		    			<li>
		    				<a href="#tabs-1">Onglet 1</a>
		    			</li>
		    			<li>				    				
		    				<a href="#tabs-2">Onglet 2</a>
		    			</li>
		    		</ul>
			    	<div id="tabs-1" class="tabs">
			    		<?php the_field('onglet_1'); ?>
			    	</div>
			    	<div id="tabs-2" class="tabs">
			    		<?php the_field('onglet_2'); ?>
			    	</div>
		    	</div>
		    </div>

			<div class="back">
				<a href="<?php echo get_permalink($post->post_parent); ?>">&larr; <?php echo $lang['retour_liste']; ?></a>
			</div>

		</div>

	</div>
	
	<?php endwhile; endif; ?>

<?php get_footer(); ?>