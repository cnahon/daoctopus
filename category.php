<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */

get_header(); ?>



<div id="<?php echo $id; ?>" class="wow  contenu style-image  fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s" style="<?php $image_de_fond = get_field( 'image_de_fond', 'term_'.get_cat_ID(single_cat_title( '', false )));  if ( $image_de_fond ) { echo 'background-image:url(\''.$image_de_fond['sizes']['full'].'\');'; } ?>">
	<div class="centrer">

		
		<div class="bloc-debut-page">
			<?php if (function_exists('mybread')) mybread();	?>
			<h1><?php echo single_cat_title( '', false ); ?></h1>
			<?php echo category_description(); ?>	
		</div>
	</div>
</div>



<div id="<?php echo $id; ?>" class="wow contenu style-gris fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
	
	<div class="centrer">

		<!-- <div class="col col-4"></div> -->

		<div class="col col-12">

		<?php if ( have_posts() ) : ?>
			<div class="display-inline-block">
				<div class="bloc-listing bloc-contenu">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						?><div class="detail-listing">
							<div class="image">
								<?php 
								echo '<a href="'.get_the_permalink().'">'.get_the_post_thumbnail(get_the_id(), 'small').'</a>';  
								 ?>
							</div>
							<div class="contenubloc">
								<!-- <span class="date"><?php echo get_the_date('j F Y') ?></span>
								
									<?php 
									$categories = get_the_category();
					 
									if ( ! empty( $categories ) ) {
										if(isset($categories[0]))
										{
									    	echo '<span class="cat">'.esc_html( $categories[0]->name ).'</span>';   
										}
									}
									 ?>
								 -->
								<h2><?php the_title(); ?></h2>
								<div class="texte">
									<?php the_excerpt(); ?>
									<a class="bouton" href="<?php echo get_permalink(get_the_ID()); ?>">Lire la suite</a>
									
								</div>
							</div>
						</div>
						

						<?php

					endwhile;
					?>
				</div>
			</div>
			<?php

			pagination($wp_query);
			?>

			<?php else : ?>
				
				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
		</div>

	</div>

</div>
<?php get_footer(); ?>