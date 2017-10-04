<div class="bloc-listing bloc-contenu">
	<?php $typelisting = get_sub_field( 'type_de_listing' ); ?>

	<?php 
	if($typelisting=="libre")
	{		
		if ( have_rows( 'liste_de_contenus_listing' ) ) : ?>
				<div class="display-inline-block">
				<?php while ( have_rows( 'liste_de_contenus_listing' ) ) : the_row(); ?>
					<div class="detail-listing">
						<div class="image">
							<?php $image = get_sub_field( 'image' ); if ( $image ) { 
								
									echo '<img src="'.$image['sizes']['small'].'" alt="'.$image['alt'].'">';  
								
							} ?>
						</div>
						<div class="contenubloc">
							<?php if(get_sub_field( 'titre' )) { ?>
							<h3><?php the_sub_field( 'titre' ); ?></h3>
							<?php } ?>
							<div class="texte">
								<?php the_sub_field( 'texte' ); ?>
								<?php include('bloc-call-to-action.php'); ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; 
	}
	else
	{
		if(get_sub_field('maximum_darticles') and get_sub_field('maximum_darticles')!=0)
		{
			$varmax = get_sub_field('maximum_darticles');
		}
		else
		{
			$varmax=4;
		}

		if($typelisting=="nouveaux articles")
		{
			$query_items = new Wp_Query(array(
				// Liste non exhaustive de paramètres, voir http://codex.wordpress.org/Class_Reference/WP_Query
				'posts_per_page'      => $varmax, // Nombre de résultats de la requête
				'offset'              => 0, // Affiche les résultats en excluant les x premiers
				'post_type'           => 'post', // page, post, revision, attachment, nav_menu_item, custompost, any
				//'cat'                 => 0, // Liste les articles en fonction de l'id de la catégorie
				//'category_name'       => 'actus', // Liste les articles en fonction du SLUG de la catégorie
				//'category__in'        => array(), // Liste les articles de plusieurs catégories (ids)
				//'category__not_in'    => array(), // Exclue les articles de plusieurs catégories (ids)
				// 'post_parent'         => get_the_id(), // Liste les pages enfants
				//'post_parent__in'     => array(0), // Liste les pages enfants de plusieurs parents (ids)
				//'post_parent__not_in' => array(0), // Exclue les pages enfants de plusieurs parents (ids)
				//'post__in'            => array(0), // Retrouve les pages aux ids spécifiés
				//'post__not_in'        => array(0), // Exclue les pages aux ids spécifiés 
				'orderby'             => 'date', // Trier par ID, author, title, name, type, date, modified, parent, rand, comment_count, menu_order, meta_value, meta_value_num, post__in (array)
				'order'               => 'desc' // Ordre de tri asc, desc
			));
		}
		elseif($typelisting=="catégorie d'articles")
		{
			$query_items = new Wp_Query(array(
				// Liste non exhaustive de paramètres, voir http://codex.wordpress.org/Class_Reference/WP_Query
				'posts_per_page'      => $varmax, // Nombre de résultats de la requête
				'offset'              => 0, // Affiche les résultats en excluant les x premiers
				'post_type'           => 'post', // page, post, revision, attachment, nav_menu_item, custompost, any
				'cat'                 => get_sub_field( 'id_categorie_parente' ), // Liste les articles en fonction de l'id de la catégorie
				//'category_name'       => 'actus', // Liste les articles en fonction du SLUG de la catégorie
				//'category__in'        => array(), // Liste les articles de plusieurs catégories (ids)
				//'category__not_in'    => array(), // Exclue les articles de plusieurs catégories (ids)
				// 'post_parent'         => get_sub_field( 'id_categorie_parente' ), // Liste les pages enfants
				//'post_parent__in'     => array(0), // Liste les pages enfants de plusieurs parents (ids)
				//'post_parent__not_in' => array(0), // Exclue les pages enfants de plusieurs parents (ids)
				//'post__in'            => array(0), // Retrouve les pages aux ids spécifiés
				//'post__not_in'        => array(0), // Exclue les pages aux ids spécifiés 
				'orderby'             => 'date', // Trier par ID, author, title, name, type, date, modified, parent, rand, comment_count, menu_order, meta_value, meta_value_num, post__in (array)
				'order'               => 'desc' // Ordre de tri asc, desc
			));
		}
		elseif($typelisting=="sous pages")
		{
			$query_items = new Wp_Query(array(
				// Liste non exhaustive de paramètres, voir http://codex.wordpress.org/Class_Reference/WP_Query
				'posts_per_page'      => $varmax, // Nombre de résultats de la requête
				'offset'              => 0, // Affiche les résultats en excluant les x premiers
				'post_type'           => 'page', // page, post, revision, attachment, nav_menu_item, custompost, any
				//'cat'                 => 0, // Liste les articles en fonction de l'id de la catégorie
				//'category_name'       => 'actus', // Liste les articles en fonction du SLUG de la catégorie
				//'category__in'        => array(), // Liste les articles de plusieurs catégories (ids)
				//'category__not_in'    => array(), // Exclue les articles de plusieurs catégories (ids)
				'post_parent'         => get_sub_field( 'id_page_parente' ), // Liste les pages enfants
				//'post_parent__in'     => array(0), // Liste les pages enfants de plusieurs parents (ids)
				//'post_parent__not_in' => array(0), // Exclue les pages enfants de plusieurs parents (ids)
				//'post__in'            => array(0), // Retrouve les pages aux ids spécifiés
				//'post__not_in'        => array(0), // Exclue les pages aux ids spécifiés 
				'orderby'             => 'date', // Trier par ID, author, title, name, type, date, modified, parent, rand, comment_count, menu_order, meta_value, meta_value_num, post__in (array)
				'order'               => 'desc' // Ordre de tri asc, desc
			));
		}



				if ( $query_items->have_posts() ) : 
				?>
				<div class="display-inline-block">
				<?php

				while ( $query_items->have_posts() ) : $query_items->the_post();
				?>
	
					
				
					<div class="detail-listing">
						<div class="image">
							<?php 
							echo '<a href="'.get_the_permalink().'">'.get_the_post_thumbnail(get_the_id(), 'small').'</a>';  
							 ?>
						</div>
						<div class="contenubloc">
							
							<h3><?php the_title(); ?></h3>
							<div class="texte">
								<?php the_excerpt(); ?>
								<a class="bouton" href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_sub_field( 'texte_bouton' ); ?></a>
								
							</div>
						</div>
					</div>

				<?php
				$compteur++;
				endwhile;
				?>
				</div>
				<?php
				endif;
				wp_reset_postdata();
				

	}
	?>




</div>
