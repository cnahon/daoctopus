<?php
/**
 * Template Name: Template Accueil
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
			
	<div class="slideshow-accueil slickslider">
  		<?php				
		if( have_rows('slide') ): while ( have_rows('slide') ) : the_row();
		?>
			<div class="item item-<?php the_id(); ?>">
				<a href="<?php the_sub_field('lien'); ?>">
					<?php
						$attachment_id = get_sub_field('image');
						$size = "slider-home"; // (thumbnail, medium, large, full or custom size)									 
						// $image = wp_get_attachment_image_src( $attachment_id, $size );
						// echo $image;
						// url = $image[0];
						// width = $image[1];
						// height = $image[2];	
					?>
					<img src="<?php echo $attachment_id['sizes'][$size]; ?>" alt="<?php the_sub_field('titre'); ?>" />	
					<div class="content">
						<div class="title">
							<?php the_sub_field('titre'); ?>	
						</div>
						<div class="sub-title">
							<?php the_sub_field('sous_titre'); ?>
						</div>
					</div>
				</a>
			</div>
		<?php
		endwhile;
		endif;
		?>
    </div>

	
<?php get_footer(); ?>