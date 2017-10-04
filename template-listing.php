<?php
/**
 * Template Name: Template Listing
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
		</div>
	</div>

	<div class="page-listing page-<?php the_ID() ?> container">

		<div id="sidebar-left">
			<?php get_sidebar('sidebarleft'); ?>
		</div>

		<div id="content" role="main">

			<?php 
				get_template_part( 'content', 'page' );
	    		endwhile; endif;
	    	?>

			<div id="liste" class="overflow-h">

				<?php	
				$compteur = 0;			
				$query_items = new Wp_Query(array(
					// Liste non exhaustive de paramètres, voir http://codex.wordpress.org/Class_Reference/WP_Query
					'posts_per_page'      => 10, // Nombre de résultats de la requête
					'offset'              => 0, // Affiche les résultats en excluant les x premiers
					'post_type'           => 'page', // page, post, revision, attachment, nav_menu_item, custompost, any
					//'cat'                 => 0, // Liste les articles en fonction de l'id de la catégorie
					//'category_name'       => 'actus', // Liste les articles en fonction du SLUG de la catégorie
					//'category__in'        => array(), // Liste les articles de plusieurs catégories (ids)
					//'category__not_in'    => array(), // Exclue les articles de plusieurs catégories (ids)
					'post_parent'         => get_the_id(), // Liste les pages enfants
					//'post_parent__in'     => array(0), // Liste les pages enfants de plusieurs parents (ids)
					//'post_parent__not_in' => array(0), // Exclue les pages enfants de plusieurs parents (ids)
					//'post__in'            => array(0), // Retrouve les pages aux ids spécifiés
					//'post__not_in'        => array(0), // Exclue les pages aux ids spécifiés 
					'orderby'             => 'date', // Trier par ID, author, title, name, type, date, modified, parent, rand, comment_count, menu_order, meta_value, meta_value_num, post__in (array)
					'order'               => 'desc' // Ordre de tri asc, desc
				));
				if ( $query_items->have_posts() ) : while ( $query_items->have_posts() ) : $query_items->the_post();
					$posts_per_page = 3;
				?>
	
					<div class="item item-<?php the_id(); ?> <?php if($compteur % $posts_per_page == 0) { echo 'first-of-line'; } ?>">
						<div class="vignette">
							<?php
							// Image à la une
							echo '<a href="'.get_the_permalink().'">'.get_the_post_thumbnail(get_the_id(), 'vignette').'</a>';

							// Champ ACF
							$attachment_id = get_field('vignette');
							$size = "vignette"; // (thumbnail, medium, large, full or custom size)									 
							// $image = wp_get_attachment_image_src( $attachment_id, $size );
							// echo $image;
							// url = $image[0];
							// width = $image[1];
							// height = $image[2];	
							?>
							<a href="<?php the_permalink(); ?>"><img src="<?php echo $attachment_id['sizes'][$size]; ?>" alt="<?php the_title(); ?>" /></a>
						</div>
						<div class="details">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php the_excerpt(); ?>
							<a class="bouton" href="<?php the_permalink(); ?>">Voir l'item</a>
						</div>
					</div>

				<?php
				$compteur++;
				endwhile;
				endif;
				wp_reset_postdata();
				?>

			</div>

		</div>

		<div id="sidebar-right">
			<?php get_sidebar('sidebarright'); ?>
		</div>

	</div>

<?php get_footer(); ?>