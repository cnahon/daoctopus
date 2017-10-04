<?php
/**
 * The Template for displaying all single posts.
 * @package WordPress
 */

get_header(); ?>




<div id="" class="wow  contenu style-image  fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s" style="<?php  $image_de_fond = get_field( 'image_de_fond');  if ( $image_de_fond ) { echo 'background-image:url(\''.$image_de_fond['sizes']['full'].'\');'; } ?>">
	<div class="centrer">

		
		<div class="bloc-debut-page">
			<?php if (function_exists('mybread')) mybread();	?>
			<h1><?php echo get_the_title(); ?></h1>
			<?php //the_sub_field( 'texte' ); ?>	
		</div>
	</div>
</div>
	
<div id="<?php echo $id; ?>" class="wow style-gris contenu fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
	
	<div class="centrer">

		<!-- <div class="col col-4"></div> -->

		<div class="col col-12">


		<?php while ( have_posts() ) : the_post(); ?>
			<div class="bloc-texte bloc-contenu">
				<?php the_content(); ?>


			<?php //comments_template( '', true ); ?>
			</div>
		<?php endwhile; // end of the loop. ?>


		</div>

	</div>

</div>

<?php get_footer(); ?>