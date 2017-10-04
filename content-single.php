<?php
/**
 * The Template for displaying all single posts.
 * @package WordPress
 */

/* LISTE DES VARIABLES */
$category         = get_the_category(); 

$current_cat_name = $category[0]->cat_name;
$current_cat_id   = $category[0]->cat_ID;
$current_cat_slug = $category[0]->slug;

$categories = array();
$categories_id = array();
$i=0;
foreach ($category as $id) {
	$categories_id[] = $id->cat_ID;
	$categories[$i]['id'] = $id->cat_ID;
	$categories[$i]['name'] = $id->cat_name;
	$i++;
}

global $lang;
include_once(get_theme_root().'/'.theme_name.'/languages/lang.php');

?>

	<div class="back">
		<a class="icon-left-open-big" href="javascript:history.go(-1)">Retour à la liste</a>
	</div>

	<article class="article article-<?php the_id(); ?> item">

		<div class="categories">
			<?php foreach($categories as $cat) {
				echo '<a href="'.site_url.'/category/'.strtolower(str_replace('é', 'e', $current_cat_slug)).'">'.$cat['name'].'</a>';
			} ?>
		</div>

		<div class="title">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</div>

		<?php
 		$attachment_id = get_field('vignette', get_the_id());
		$size = "article-single"; // (thumbnail, medium, large, full or custom size)									 
		?>	
		<div class="vignette">
			<img src="<?php echo $attachment_id['sizes'][$size]; ?>" alt="<?php the_title(); ?>">
		</div>

		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<div class="addthis_native_toolbox"></div>

		<div class="content">
			<?php the_content(); ?>
		</div>	

		<div class="metas">			
			<?php //echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'readytorumble_author_bio_avatar_size', 60 ) );
			$src_avatar = '/home/www/ReadyToRumble/wp-content/themes/ReadyToRumble/images/avatar-'.str_replace(' ','-', strtolower(get_the_author_meta( 'display_name' )));
			$image_avatar = '/home/www/ReadyToRumble/wp-content/themes/ReadyToRumble/images/avatar-'.str_replace(' ','-', strtolower(get_the_author_meta( 'display_name' ))).'.png';
			$image_avatar = str_replace('%20', ' ', $image_avatar);
			$image = wp_get_image_editor( $image_avatar );
			if ( ! is_wp_error( $image ) ) {
			    $image->resize( 92, 92, true );
			    $image->save( $src_avatar.'-92x92.png' );
			}
			$image_name = 'avatar-'.str_replace(' ','-', strtolower(get_the_author_meta( 'display_name' )))
			?>
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><img class="avatar" src="<?php echo template_url.'/images/'.$image_name.'-92x92.png'; ?>" alt="Avatar <?php the_author_meta( 'display_name' ); ?>"/></a>
			Le <?php echo get_the_date('j/m/y'); ?> par <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a>
		</div>
		
	</article>

	<div id="sidebar-right" class="sidebar">

		<div class="crossposts sidebar-item">
			<div class="title">À lire aussi</div>
			<?php 		
			$query_items = new Wp_Query(array(
				// Liste non exhaustive de paramètres, voir http://codex.wordpress.org/Class_Reference/WP_Query
				'posts_per_page'      => 3, // Nombre de résultats de la requête
				'offset'              => 0, // Affiche les résultats en excluant les x premiers
				'post_type'           => 'post', // page, post, revision, attachment, nav_menu_item, custompost, any
				'category__in'        => $categories_id, // Liste les articles de plusieurs catégories (ids)
				'post__not_in'        => array(get_the_id()), // Exclue les pages aux ids spécifiés
				'orderby'             => 'date', // Trier par ID, author, title, name, type, date, modified, parent, rand, comment_count, menu_order, meta_value, meta_value_num, post__in (array)
				'order'               => 'desc' // Ordre de tri asc, desc
			));
			if ( $query_items->have_posts() ) : while ( $query_items->have_posts() ) : $query_items->the_post(); ?>
		
				<div class="crosspost crosspost<?php the_id(); ?>">
					<?php
			 		$attachment_id = get_field('vignette', get_the_id());
					$size = "article-mini"; // (thumbnail, medium, large, full or custom size)									 
					?>	
					<div class="vignette">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo $attachment_id['sizes'][$size]; ?>" alt="<?php the_title(); ?>">
						</a>
					</div>
					<div class="infos">
						<h3>
							<a href="<?php the_permalink(); ?>">
								<?php 
								$get_length = strlen(get_the_title());
								$the_length = 50; // Caractères
 								echo substr(get_the_title(), 0, $the_length);
								if ($get_length > $the_length) echo "...";
								?>
							</a>
						</h3>
						<div class="author">
							Par <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a>
						</div>
					</div>
				</div>

			<?php
				endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>