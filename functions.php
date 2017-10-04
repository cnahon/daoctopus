<?php
/* 

SOMMAIRE : Fonctions utiles
---------------------------

Possibilité de recherche via l'identifiant de la fonction (I2, CPT1...)


-------------
INDISPENSABLE
-------------

I1 - Constantes de thème : template_url, site_url, site_name, posts_url... - ACTIVÉ

I2 - Suppressions des notifications de mises à jour (MAJ) Wordpress - ACTIVÉ

I3 - Désactive affichage erreurs par sécurité - ACTIVÉ

I4 - Désactive affichage version Wordpress par sécurité - ACTIVÉ

I5 - HTTP HEADER SECURITY - ACTIVÉ

I6 - Print Nice debug - PASSIF : nécessite un appel


----------------
PAGES / ARTICLES
----------------

PA1 - Création de requêtes wordpress pré-paramétrées pour des templates - DESACTIVÉ

PA2 - Pagination entre les pages - PASSIF : nécessite un appel

PA3 - Modification du code du bouton "Lire la suite" d'un extrait - ACTIVÉ

PA4 - Modification de la longueur d'un extrait - DESACTIVÉ

PA5 - Ajout du champ mots-clés aux pages - DESACTIVÉ

PA6 - Pagination entre les custom post - PASSIF : nécessite un appel

PA7 - Pagination avec utilisation offset sur requête principale - DESACTIVÉ

PA8 - Récupération de l'arborescence des catégories - PASSIF : nécessite un appel

PA9 -  Ajouter classe ****-of-line aux posts (actualités) - ACTIVÉ


--------------------------------------------
RÉCUPÉRATIONS D'INFORMATIONS / VERIFICATIONS
--------------------------------------------

RI1 - Vérification du fait qu'une page soit de type blog (index, single, archive, catégorie...) - PASSIF : nécessite un appel

RI2 - Vérification du fait qu'une page est l'enfant d'une autre - PASSIF : nécessite un appel

RI3 - Ajout des tags dans les requêtes - DESACTIVÉ

RI4 - Récupération du slug d'un post - PASSIF : nécessite un appel

RI5 - Récupération du slug de la page parente - PASSIF : nécessite un appel


----------------------------
CUSTOM POST TYPE / RECHERCHE
----------------------------

CPT1 - Créer un custom post type - DESACTIVÉ

CPT2 - Personnalisation de l'endroit de la recherche Wordpress - DESACTIVÉ


------------------
RÔLES UTILISATEURS
------------------

R1 - Affichage des posts d'un utilisateur uniquement si son niveau est inférieur à 5 pour l'empêcher de voir les posts créés par quelqu'un de niveau supérieur  - DESACTIVÉ

R2 - Ajout d'un rôle utilisateur - DESACTIVÉ

R3 - Suppression de rôles utilisateurs - DESACTIVÉ

R4 - Récupération des rôles qu'un rôle utilisateur peut créer

R5 - Suppression des rôles non autorisés

R6 - Empêche utilisateurs d'éditer ou supprimer un rôle de niveau supérieur au leur.


nb : Les fonctions 26, 27 et 28 devraient être utilisées conjointement dans un but précis, utilisé sur Malette RH.


----------------------------
OPTIMISATION / ACCESSIBILITÉ
----------------------------

OA1 - Fil d'Ariane - PASSIF : nécessite un appel

OA2 - Rajout du .html sur les urls des pages - ACTIVÉ

OA3 - Compression HTML - ACTIVÉ

OA4 - Charge jQuery sans charger jQuery-migrate.js - ACTIVÉ

OA5 - Déplacement des scripts jQuery dans le footer - ACTIVÉ

OA6 - Ajout scripts et styles au WP Enqueue Scripts - ACTIVÉ

OA7 - Suppression de thickbox.css - ACTIVÉ


-----------
WOOCOMMERCE
-----------

WC1 - Modifier nombre de produits cross-selling affichés - DESACTIVÉ

WC2 - Déclarer support WooCommerce - DESACTIVÉ

WC3 - Met à jour le panier lors d'un ajout de produit Ajax - DESACTIVÉ

WC4 - Modifier Placeholder, Label... Notes de la commande - DESACTIVÉ

WC5 - Ajouter classes manquantes pages anglaises WC au body - DESACTIVÉ

WC6 - Charger jQuery footer - DESACTIVÉ

WC7 - Gestion des quantités - DESACTIVÉ

WC8 - Ajout nouveaux champs à la commande - DESACTIVÉ

WC9 - Mise à jour auto page panier - DESACTIVÉ

WC10 - Modifier hooks content-product.php - DESACTIVÉ

WC11 - Ajout "/kg" après le prix d'un produit - DESACTIVÉ


----
WPML
----

WP1 - Affichage d'un sélecteur de langue dans le cadre de l'utilisation du module WPML - PASSIF : nécessite un appel

WP2 - Ajouter classe langue au body - DESACTIVÉ


-----------
BACK-OFFICE
-----------

BO1 - Supprimer blocs des pages admins - DESACTIVÉ

BO2 - ACF Option page - DESACTIVÉ

BO3 - Désactiver filtre balises html Wordpress - DESACTIVÉ

BO4 - Logo connexion - ACTIVÉ

BO5 - Login Redirection - DESACTIVÉ

BO6 - Modifier urls de connexion - DESACTIVÉ

BO7 - Fonction à la sauvegarde d'une page / annonce - DESACTIVÉ

BO8 - Ajouter page back-office - DESACTIVÉ

BO9 - Ajouter scripts back-office - DESACTIVÉ


------
DIVERS
------

D0 - Ajouter thumbnail aux flux RSS - DESACTIVÉ

D1 - Suppression du cache du flux RSS pour le développement - DESACTIVÉ

D2 - Afficher une erreur 404 si on arrive sur une pagination inexistante - DESACTIVÉ

D3 - Suppression des accents - PASSIF : nécessite un appel

D4 - Widget Météo - PASSIF : nécessite un appel

D5 - Textarea des commentaires en bas de formulaire - ACTIVÉ

D6 - Retailler images à la volée avec AquaResizer - PASSIF : nécessite un appel

D7 - Session WP  - ACTIVÉ

D8 - Fonction in_array récursive : in_array_r - PASSIF : nécessite un appel


------------------------------------------------------------------------------------------------------------------

------------
LIENS UTILES
------------

http://codex.wordpress.org/Class_Reference/WP_Query
http://codex.wordpress.org/Plugin_API.
http://codex.wordpress.org/Hardening_WordPress


*/
/**
 * Sets up theme defaults and registers the various WordPress features
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 * 	custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 */
function readytorumble_setup() {
	/*
	 * Makes Twenty Twelve available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Twelve, use a find and replace
	 * to change 'readytorumble' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'readytorumble', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	// add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
        'topmenu' => 'Menu Haut',
        'principalmenu' => 'Menu Principal',
        'secondairemenu' => 'Menu Secondaire',
        'bottommenu' => 'Menu Bas',
        'mobilemenu' => 'Menu Mobile',
    ) );

	/*
	 * This theme supports custom background color and image, and here
	 * we also set up the default background color.
	 */
	/*add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );*/

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop

	// Tailles d'images perso
	add_image_size( 'full', 2000, 9999, true );
	add_image_size( 'semi-full', 1000, 9999, true );
	add_image_size( 'small', 500, 9999, true );
	add_image_size( 'carre', 600, 600, true );
	add_image_size( 'small', 300, 190, true );
}
add_action( 'after_setup_theme', 'readytorumble_setup' );


/**
 * Adds support for a custom header image.
 */
//require( get_template_directory() . '/inc/custom-header.php' );


/**
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since Twenty Twelve 1.0
 */
function readytorumble_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'readytorumble_page_menu_args' );


/**
 * Registers our main widget area and the front page widget areas.
 *
 * @since Twenty Twelve 1.0
 */
function readytorumble_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Sidebar Header', 'readytorumble' ),
		'id' => 'sidebarheader',
		'description' => __( 'Sidebar du header, à droite du logo', 'readytorumble' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<span class="widget-title">',
		'after_title' => '</span>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Sidebar Left', 'readytorumble' ),
		'id' => 'sidebarleft',
		'description' => __( 'Sidebar de gauche', 'readytorumble' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<span class="widget-title">',
		'after_title' => '</span>',
	) );

	register_sidebar( array(
		'name' => __( 'Sidebar Right', 'readytorumble' ),
		'id' => 'sidebarright',
		'description' => __( 'Sidebar de droite', 'readytorumble' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<span class="widget-title">',
		'after_title' => '</span>',
	) );

	register_sidebar( array(
		'name' => __( 'Sidebar Footer', 'readytorumble' ),
		'id' => 'sidebarfooter',
		'description' => __( 'Sidebar du footer', 'readytorumble' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<span class="widget-title">',
		'after_title' => '</span>',
	) );
}
add_action( 'widgets_init', 'readytorumble_widgets_init' );


if ( ! function_exists( 'readytorumble_content_nav' ) ) :
/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since Twenty Twelve 1.0
 */
function readytorumble_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	$offset = $wp_query->query_vars['offset'];
	$ppp = $wp_query->query_vars['posts_per_page'];
	$nbr_posts = $wp_query->found_posts - $offset - $ppp;
	$num_page = $wp_query->query_vars['paged'];

	if($num_page == 0) { $num_page = 1; }

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'readytorumble' ); ?></h3>
			<?php // On affiche le bouton suivant uniquement si il reste des articles à afficher ?>
			<?php if ( $wp_query->max_num_pages > 1 && ((($nbr_posts + $ppp * $num_page) / $ppp) > $num_page ) && ((($nbr_posts + $ppp * $num_page) / $ppp) > 1 ) ) : ?>
				<div class="nav-previous alignleft"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'readytorumble' ) ); ?></div>
			<?php endif; ?>
			<div class="nav-next alignright"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'readytorumble' ) ); ?></div>
		</nav>
	<?php endif;
}
endif;


if ( ! function_exists( 'readytorumble_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own readytorumble_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Twelve 1.0
 */
function readytorumble_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'readytorumble' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'readytorumble' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite class="fn">%1$s %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span> ' . __( 'Post author', 'readytorumble' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'readytorumble' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'readytorumble' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'readytorumble' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'readytorumble' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;


if ( ! function_exists( 'readytorumble_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own readytorumble_entry_meta() to override in a child theme.
 *
 * @since Twenty Twelve 1.0
 */
function readytorumble_entry_meta() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'readytorumble' ) );

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'readytorumble' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'readytorumble' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
	if ( $tag_list ) {
		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'readytorumble' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'readytorumble' );
	} else {
		$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'readytorumble' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif;


/**
 * Extends the default WordPress body class to denote:
 * 1. Using a full-width layout, when no active widgets in the sidebar
 *    or full-width template.
 * 2. Front Page template: thumbnail in use and number of sidebars for
 *    widget areas.
 * 3. White or empty background color to change the layout and spacing.
 * 4. Custom fonts enabled.
 * 5. Single or multiple authors.
 *
 * @since Twenty Twelve 1.0
 *
 * @param array Existing class values.
 * @return array Filtered class values.
 */
function readytorumble_body_class( $classes ) {
	$background_color = get_background_color();

	if ( has_post_thumbnail() )
		$classes[] = 'has-post-thumbnail';

	if ( is_active_sidebar( 'sidebarleft' ) && is_active_sidebar( 'sidebarright' ) )
		$classes[] = 'two-sidebars';

	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	return $classes;
}
add_filter( 'body_class', 'readytorumble_body_class' );


// ---------------------------------------------------------------------------------------------------------------
// Fonctions personnalisées - ReadyToRumble
// ---------------------------------------------------------------------------------------------------------------

// -------------
// INDISPENSABLE
// -------------

// I1 - Constantes de theme
define('template_url', get_template_directory_uri() );
define('site_url', site_url() );
define('site_name', get_bloginfo( 'name' ) );
define('posts_url',  get_permalink( get_option('page_for_posts' ) ) );
define('theme_name',  get_template() );
define('emails_admins', 'cyril@agencelespirates.com, louis@agencelespirates.com');
define('emails_clients', '');


// I2 - Supprimer les notifications de maj du core
// add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );
// // I2 - Supprimer les notifications de maj des thèmes
// remove_action( 'load-update-core.php', 'wp_update_themes' );
// add_filter( 'pre_site_transient_update_themes', create_function( '$a', "return null;" ) ); 
// // I2 - Supprimer les notifications de maj des plugins
// remove_action( 'load-update-core.php', 'wp_update_plugins' );
// add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );


// I3 - Désactive affichage erreurs connexion par sécurité
add_filter('login_errors',create_function('$a', "return null;"));


// I4 - Désactive affichage version Wordpress par sécurité
remove_action('wp_head', 'wp_generator');


// I5 - HTTP HEADER SECURITY
header('Content-Security-Policy: script-src \'self\' maps.gstatic.com maps.googleapis.com *.google.com maps.google.com s7.addthis.com m.addthis.com m.addthisedge.com api-public.addthis.com connect.facebook.net platform.foursquare.com platform.twitter.com https: data: \'unsafe-inline\' \'unsafe-eval\' ');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Strict-Transport-Security:max-age=31536000; includeSubdomains; preload');
// Si utilisation de session pour le développement, commenter les lignes suivantes
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);


// I6 - Print Nice debug - PASSIF : nécessite un appel
function print_nice($elem,$max_level=10,$print_nice_stack=array()){ 
    if(is_array($elem) || is_object($elem)){ 
        if(in_array($elem,$print_nice_stack,true)){ 
            echo "<font color=red>RECURSION</font>"; 
            return; 
        } 
        $print_nice_stack[]=$elem; 
        if($max_level<1){ 
            echo "<font color=red>nivel maximo alcanzado</font>"; 
            return; 
        } 
        $max_level--; 
        echo "<table border=1 cellspacing=0 cellpadding=3 width=100%>"; 
        if(is_array($elem)){ 
            echo '<tr><td colspan=2 style="background-color:#333333;"><strong><font color=white>ARRAY</font></strong></td></tr>'; 
        }else{ 
            echo '<tr><td colspan=2 style="background-color:#333333;"><strong>'; 
            echo '<font color=white>OBJECT Type: '.get_class($elem).'</font></strong></td></tr>'; 
        } 
        $color=0; 
        foreach($elem as $k => $v){ 
            if($max_level%2){ 
                $rgb=($color++%2)?"#888888":"#BBBBBB"; 
            }else{ 
                $rgb=($color++%2)?"#8888BB":"#BBBBFF"; 
            } 
            echo '<tr><td valign="top" style="width:40px;background-color:'.$rgb.';">'; 
            echo '<strong>'.$k."</strong></td><td>"; 
            print_nice($v,$max_level,$print_nice_stack); 
            echo "</td></tr>"; 
        } 
        echo "</table><br/>"; 
        return; 
    } 
    if($elem === null){ 
        echo "<font color=green>NULL</font>"; 
    }elseif($elem === 0){ 
        echo "0"; 
    }elseif($elem === true){ 
        echo "<font color=green>TRUE</font>"; 
    }elseif($elem === false){ 
        echo "<font color=green>FALSE</font>"; 
    }elseif($elem === ""){ 
        echo "<font color=green>EMPTY STRING</font>"; 
    }else{ 
        echo str_replace("\n","<strong><font color=red>*</font></strong><br>\n",$elem); 
    }
} 


// ----------------
// PAGES / ARTICLES
// ----------------

// PA1 - Création de requêtes de pages / d'articles selon le template / l'endroit (exemple : récupération auto des pages de chambres (pages enfant de la page Chambres) sur le template template-chambres.php). On récupère ensuite simplement avec while ( have_posts() ) : the_post();
// Attention, si l'on a plusieurs query sur la même page, ça ne fonctionne pas
function my_post_queries( $query ) {
  // On modifie la requête principale uniquement si on est pas sur une page wp-admin
  if (!is_admin() && $query->is_main_query()){
    // Home index.php, on peut aussi utiliser is_category, is_page, is_page_template....
    if(is_home()){
      $query->set('posts_per_page', '3');
      $query->set('offset', '1');
    }
  }
}
//add_action( 'pre_get_posts', 'my_post_queries' );


// PA2 - Pagination entre les pages
// Appel : 
/*	if (function_exists('pagination_for_pages')) {
      echo '<div class="pagination_pages">'.pagination_for_pages('sort_column=post_date').'</div>';
    }
*/
function pagination_for_pages($getPagesQuery='sort_column=menu_order&sort_order=asc') {
	global $post;
	// first, we'll query all pages with a similar parent	
	$getPages = get_pages('child_of='.$post->post_parent.'&parent='.$post->post_parent .'&'.$getPagesQuery);	
	// maybe our post type doesn't have a parent?
	if (empty($getPages)) {
		$getPages = get_posts('numberposts=-1&' . $getPagesQuery);
	}
	$count = 1;	
	$output = '<ul class="paginationForPages">' . "\n";
	if (count($getPages) > 1) {
		foreach ($getPages as $page) {

			// same last item for next loop.
			$prevItem = $thisItem;
			$thisItem = '<li class="lien_'.$count.' controls"><a href="'. get_permalink($page->ID) .'" title="'.esc_attr($page->post_title).'"><div class="title">'.esc_attr($page->post_title).'</div><div class="vignette">'.get_the_post_thumbnail($page->ID, 'full').'</div></a></li>' . "\n";
			if ($nextItemTest) {
				$in = array('lien_'.$count.' controls','%ANCHOR%');
				$out = array('lien_next directions icon-right-open-mini','Précédent &gt&gt');
				$nextItem = str_replace($in, $out, $thisItem);
				unset($nextItemTest);
			}
			if ($page->ID == $post->ID) {
				$in = array('lien_'.($count-1).' controls','%ANCHOR%');
				$out = array('lien_previous directions icon-left-open-mini','&lt&lt Suivant');
				$backItem = str_replace($in, $out, $prevItem);
				$nextItemTest = true;

				$listOutput .= str_replace('%ANCHOR%', '<strong>' . $count . '</strong>', $thisItem);
			} else {
				$listOutput .= str_replace('%ANCHOR%', $count, $thisItem);
			}		
			$count++;
		}
	}
	$output .= $backItem;
	$output .= $listOutput;
	$output .= $nextItem;
	$output .= '</ul>';
	return $output;
}
function pagination_for_pages_light($getPagesQuery='sort_column=menu_order&sort_order=asc') {
	global $post;
	// first, we'll query all pages with a similar parent	
	$getPages = get_pages('child_of='.$post->post_parent.'&parent='.$post->post_parent .'&'.$getPagesQuery);	
	// maybe our post type doesn't have a parent?
	if (empty($getPages)) {
		$getPages = get_posts('numberposts=-1&' . $getPagesQuery);
	}
	$count = 1;	
	$output = '<ul class="paginationForPages">' . "\n";
	if (count($getPages) > 1) {
		foreach ($getPages as $page) {

			// same last item for next loop.
			$prevItem = $thisItem;
			$thisItem = '<li class="lien_'.$count.' controls"><a href="'. get_permalink($page->ID) .'" title="'.esc_attr($page->post_title).'"><div class="icon-left-open-mini"></div></a></li>' . "\n";
			if ($nextItemTest) {
				$in = array('lien_'.$count.' controls','%ANCHOR%');
				$out = array('lien_next directions','Précédent &gt&gt');
				$nextItem = str_replace($in, $out, $thisItem);
				unset($nextItemTest);
			}
			if ($page->ID == $post->ID) {
				$in = array('lien_'.($count-1).' controls','%ANCHOR%');
				$out = array('lien_previous directions','&lt&lt Suivant');
				$backItem = str_replace($in, $out, $prevItem);
				$nextItemTest = true;

				$listOutput .= str_replace('%ANCHOR%', '<strong>' . $count . '</strong>', $thisItem);
			} else {
				$listOutput .= str_replace('%ANCHOR%', $count, $thisItem);
			}		
			$count++;
		}
	}
	$output .= $backItem;
	$output .= $listOutput;
	$output .= $nextItem;
	$output .= '</ul>';
	return $output;
}


// PA3 - Permet de modifier et personnaliser le code et l'affichage du bouton "lire la suite" de l'extrait
function new_excerpt_more($more) { 
  return '...&nbsp;<a class="excerpt_more" href="'.get_permalink().'">'.__('Lire la suite <span class="meta-nav">&rarr;</span></a>');
} 
add_filter('excerpt_more', 'new_excerpt_more');


// PA4 - Permet de modifier la longueur de l'extrait en nombre de mots
function new_excerpt_length($length) {
 return 20;
}
//add_filter('excerpt_length', 'new_excerpt_length');


// PA5 - Permet d'ajouter le champ mots-clés aux pages
function tags_support_all() {
  register_taxonomy_for_object_type('post_tag', 'page');
}
//add_action('init', 'tags_support_all');


// PA6 - Pagination entre les custom post
function pagination_cpt($query) {  
	
	$baseURL="http://".$_SERVER['HTTP_HOST'];
	if($_SERVER['REQUEST_URI'] != "/"){
		$baseURL = $baseURL.$_SERVER['REQUEST_URI'];
	}
 
	// Suppression de '/page' de l'URL
	$sep = strrpos($baseURL, '/page/');
	if($sep != FALSE){
		$baseURL = substr($baseURL, 0, $sep);
	}
 
  // Suppression des paramètres de l'URL
	$sep = strrpos($baseURL, '?');
	if($sep != FALSE){
	// On supprime le caractère avant qui est un '/'
		$baseURL = substr($baseURL, 0, ($sep-1));
	}	
	
	$page = $query->query_vars["paged"];  
	if ( !$page ) $page = 1;  
	$qs = $_SERVER["QUERY_STRING"] ? "?".$_SERVER["QUERY_STRING"] : "";  
	
	// Nécessaire uniquement si on a plus de posts que de posts par page admis 
	if ( $query->found_posts > $query->query_vars["posts_per_page"] ) {  
		echo '<ul class="pagination">'; 
		echo '<li><a href="" style="background:#716a63;">Page '.$page.' sur '.$query->max_num_pages.'</a></li>';
		// lien précédent si besoin
		if ( $page > 1 ) { 
			echo '<li class="prev_start"><a href="'.$baseURL.'/page/1/'.$qs.'"><<</a></li><li class="next_prev prev"><a title="Revenir à la page précédente (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page-1).'/'.$qs.'"><</a></li>'; 
		} 
		// la boucle pour les pages
		for ( $i=1; $i <= $query->max_num_pages; $i++ ) { 
			// ajout de la classe active pour la page en cours de visualisation
			if(($i>=$page-2 and $i<=$page+2) or ($page<=3 and $i<6) or ($page>$query->max_num_pages-3 and $i>$query->max_num_pages-5))
			{
				if ( $i == $page ) { 
					echo '<li class="active"><a href="#pagination" title="Vous êtes sur cette page '.$i.'">'.$i.'</a></li>'; 
				} else { 
					echo '<li><a title="Rejoindre la page '.$i.'" href="'.$baseURL.'/page/'.$i.'/'.$qs.'">'.$i.'</a></li>'; 
				}
			} 
		} 
		// le lien next si besoin
		if ( $page < $query->max_num_pages ) { 
			echo '<li class="next_prev next"><a title="Passer à la page suivante (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page+1).'/'.$qs.'">></a><li class="next_end"><a href="'.$baseURL.'/page/'.($query->max_num_pages).'/'.$qs.'">>></a></li></li>'; 
		} 
		echo '</ul>';  
	}  
}


// PA7 - Pagination avec utilisation offset
function myprefix_query_offset(&$query) {

    //Before anything else, make sure this is the right query...
    if ( is_home() && $query->is_main_query() ) {

	    //First, define your desired offset...
	    $offset = 8;
	    
	    //Next, determine how many posts per page you want (we'll use WordPress's settings)
	    $ppp = get_option('posts_per_page');

	    //Next, detect and handle pagination...
	    if ( $query->is_paged ) {

	        //Manually determine page query offset (offset + current page (minus one) x posts per page)
	        $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );

	        //Apply adjust page offset
	        $query->set('offset', $page_offset );

	    }
	    else {

	        //This is the first page. Just use the offset...
	        $query->set('offset',$offset);

	    }

	} else {
		return;
	}
}
// add_action('pre_get_posts', 'myprefix_query_offset', 1 );


// PA8 - Récupération de l'arborescence des catégories
function listing_categories_filter($cat = 0, $classe = '') {
	$args = array(
	  'type'                     => 'post',
	  'child_of'                 => 0,
	  'parent'                   => $cat,
	  'orderby'                  => 'name',
	  'order'                    => 'ASC',
	  'hide_empty'               => 1,
	  'hierarchical'             => 1,
	  'exclude'                  => '',
	  'include'                  => '',
	  'number'                   => '',
	  'taxonomy'                 => 'category',
	  'pad_counts'               => false 
	);
	$categories = get_categories($args); ?>
	<ul class="<?php echo $classe; ?> sub-sub-menu">
		<li class="filter" data-filter="all">Tout</li>
		<?php
		foreach($categories as $categ) { ?>
		    <li class="filter <?php echo $categ->slug; ?>" data-filter=".<?php echo $categ->slug; ?>"><?php echo $categ->name; ?></li>
		<?php  } ?>
	</ul>
	<?php
}
function listing_categories($cat = 0, $classe = '') {
	$args = array(
	  'type'                     => 'post',
	  'child_of'                 => 0,
	  'parent'                   => $cat,
	  'orderby'                  => 'name',
	  'order'                    => 'ASC',
	  'hide_empty'               => 1,
	  'hierarchical'             => 1,
	  'exclude'                  => '',
	  'include'                  => '',
	  'number'                   => '',
	  'taxonomy'                 => 'category',
	  'pad_counts'               => false 
	);
	$categories = get_categories($args); 
	foreach($categories as $categ) { ?>
	<ul class="<?php echo $classe.' '. $categ->slug; ?> sub-menu">
	    <li class="title <?php echo $categ->slug; ?>">
	    	<a href="<?php echo get_category_link($categ->term_id); ?>"><?php echo $categ->name; ?></a>
	    	<?php $children = get_posts('child_of='.$categ->term_id);
	    	if( count( $children ) != 0 ) {
	    		listing_categories($categ->term_id, $categ->slug); 
	    	} ?>
	   	</li>
	</ul>
	<?php  }
}


// PA9 - Ajouter classe ****-of-line aux posts (actualités)
function wps_first_post_class( $classes ) {
    global $wp_query;
    if(is_blog()) {
    	$classes[] = 'item';
    }
    if( 0 == $wp_query->current_post )
        $classes[] = 'first-post';
    $posts_per_line = 3;
    if( $wp_query->current_post % $posts_per_line == 0)
    	$classes[] = 'first-of-line';
    return $classes;
}
add_filter( 'post_class', 'wps_first_post_class' );


// --------------------------------------------
// RÉCUPÉRATIONS D'INFORMATIONS / VERIFICATIONS
// --------------------------------------------

// RI1 - Permet de vérifier si une page est de type blog (index, single, archive, catégorie...)
function is_blog() {
    global $post; 
    //Post type must be 'post'.
    $post_type = get_post_type($post); 
    //Check all blog-related conditional tags, as well as the current post type, 
    //to determine if we're viewing a blog page.
    return (
        ( is_home() || is_archive() || is_single() )
        && ($post_type == 'post')
    ) ? true : false ; 
}


// RI2 - Permet de vérifier si une page est l'enfant de telle page
function is_child($page_id) { 
  global $post; 
  if($post->post_parent == $page_id ) {
    return true;
  } else { 
    return false; 
  }
}


// RI3 - Permet de s'assurer que les tags sont inclus dans les requêtes
function tags_support_query($wp_query) {
  if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}
//add_action('pre_get_posts', 'tags_support_query');


// RI4 - Permet de récupérer le slug d'un post
function get_the_slug($postID="") {
  global $post;
  $postID = ( $postID != "" ) ? $postID : $post->ID;
  $post_data = get_post($postID, ARRAY_A);
  $slug = $post_data['post_name'];
return $slug;
}


// RI5 - Récupère le slug de la page parente
function the_parent_slug() {
  global $post;
  if($post->post_parent == 0) return '';
  $post_data = get_post($post->post_parent);
  return $post_data->post_name;
}


// ----------------------------
// CUSTOM POST TYPE / RECHERCHE
// ----------------------------

// CPT1 - Créer un custom post type
function create_post_type() {
  register_post_type('product',
    array(
      'labels' => array(
      'name' => __( 'gite' ),
      'singular_name' => __( 'gite' ),
      'add_new' => __( 'Add New' ),
      'add_new_item' => __( 'Add New gite' ),
      'edit' => __( 'Edit' ),
      'edit_item' => __( 'Edit gite' ),
      'new_item' => __( 'New gite' ),
      'view' => __( 'View gite' ),
      'view_item' => __( 'View gite' ),
      'search_items' => __( 'Search gite' ),
      'not_found' => __( 'No gite found' ),
      'not_found_in_trash' => __( 'No product gite in Trash' ),
      'parent' => __( 'Parent gite' ),
     ),
        'public' => true,
        'show_ui' => true,
     'exclude_from_search' => true,
     'hierarchical' => true,
     'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
     'query_var' => true
     )
  );  
  
  // Ajoute une taxonomie au custom post type (catégorie)
  register_taxonomy(
        'marque',
        array('product'),
        array(
            'hierarchical' => true,
            'label' => 'Marque',
            'query_var' => true,
            'rewrite' => true
        )
    );
}
//add_action( 'init', 'create_post_type' );


// CPT2 - Permet, si l'on ajoute une liste déroulante name=type à la recherche, de sélectionner où l'on veut effectuer la recherche
function search_filter($query) {
$post_type = $_GET['type'];
if (!$post_type) {
$post_type = 'any';
}
    if ($query->is_search) {
        $query->set('post_type', $post_type);
    };
    return $query;
};
//add_filter('pre_get_posts','search_filter');


// ------------------
// RÔLES UTILISATEURS
// ------------------

// R1 - N'affiche que les posts d'un utilisateur si celui-ci est de niveau inférieur à 5 (éditeur)
// Permet de masquer les posts de l'admin ou d'un éditeur à un simple abonné qui se log
function posts_for_current_author($query) {
  global $user_level;

  if($query->is_admin && $user_level < 5) {
    global $user_ID;
    $query->set('author',  $user_ID);
    unset($user_ID);
  }
  unset($user_level);

  return $query;
}
//add_filter('pre_get_posts', 'posts_for_current_author');


/* R2 - Ajouter un rôle sans charger de module */
/*add_role('member', 'Member', array(
    'read' => true,
    'edit_posts' => true,
    'delete_posts' => true,
));*/
// Voir liste des capacités : https://codex.wordpress.org/fr:R%C3%B4les_et_Capacit%C3%A9s#Capabilities


/* R3 - Supprimer rôles non nécessaires */
//remove_role('editor');


// R4 - Récupérer rôles qu'un rôle peut créer
function get_allowed_roles( $user ) {
    $allowed = array();

    if ( in_array( 'administrator', $user->roles ) ) { // Admin can edit all roles
        $allowed = array_keys( $GLOBALS['wp_roles']->roles );
    } elseif ( in_array( 'admin-n-1', $user->roles ) ) {
        $allowed[] = 'subscriber';
    } 

    return $allowed;
}


// R5 - Supprimer rôles non autorisé pour le rôle actuel
function wp_editable_roles( $roles ) {
    if ( $user = wp_get_current_user() ) {
        $allowed = get_allowed_roles( $user );

        foreach ( $roles as $role => $caps ) {
            if ( ! in_array( $role, $allowed ) )
                unset( $roles[ $role ] );
        }
    }

    return $roles;
}
//add_filter( 'editable_roles', 'wp_editable_roles' );


// R6 - Empêche utilisateurs d'éditer, supprimer un rôle au dessus d'eux
function wp_map_meta_cap( $caps, $cap, $user_ID, $args ) {
    if ( ( $cap === 'edit_user' || $cap === 'delete_user' ) && $args ) {
        $the_user = get_userdata( $user_ID ); // The user performing the task
        $user     = get_userdata( $args[0] ); // The user being edited/deleted

        if ( $the_user && $user && $the_user->ID != $user->ID /* User can always edit self */ ) {
            $allowed = get_allowed_roles( $the_user );

            if ( array_diff( $user->roles, $allowed ) ) {
                // Target user has roles outside of our limits
                $caps[] = 'not_allowed';
            }
        }
    }

    return $caps;
}
//add_filter( 'map_meta_cap', 'wp_map_meta_cap', 10, 4 );


// ----------------------------
// OPTIMISATION / ACCESSIBILITÉ
// ----------------------------

// OA1 - Fil d'ariane
//Récupérer les catégories parentes
function myget_category_parents($id, $link = false,$separator = '/',$nicename = false,$visited = array()) {
  $chain = '';$parent = &get_category($id);
    if (is_wp_error($parent))return $parent;
    if ($nicename)$name = $parent->name;
    else $name = $parent->cat_name;
    if ($parent->parent && ($parent->parent != $parent->term_id ) && !in_array($parent->parent, $visited)) {
        $visited[] = $parent->parent;$chain .= myget_category_parents( $parent->parent, $link, $separator, $nicename, $visited );}
    if ($link) $chain .= '<span typeof="v:Breadcrumb"><!--<a href="' . get_category_link( $parent->term_id ) . '" title="Voir tous les articles de '.$parent->cat_name.'" rel="v:url" property="v:title">'.$name.'</a></span>' . $separator.'-->';
    else $chain .= $name.$separator;
    return $chain;}
//Le rendu


function mybread() {
  // variables gloables
  global $wp_query;$ped=get_query_var('paged');$rendu = '<div xmlns:v="http://rdf.data-vocabulary.org/#" class="breadcrumb">';  
  $debutlien = '<span typeof="v:Breadcrumb"><a title="'. get_bloginfo('name') .'" id="breadh" href="'.home_url().'" rel="v:url" property="v:title">'. get_bloginfo('name') .'</a></span>';
  $debut = '<span typeof="v:Breadcrumb">Accueil de '. get_bloginfo('name') .'</span>';

  // si l'utilisateur a défini une page comme page d'accueil
  if ( is_front_page() ) {$rendu .= $debut;}

  // dans le cas contraire
  else {

    // on teste si une page a été définie comme devant afficher une liste d'article 
    if( get_option('show_on_front') == 'page') {
      $url = urldecode(substr($_SERVER['REQUEST_URI'], 1));
      $uri = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
      $posts_page_id = get_option( 'page_for_posts');
      $posts_page_url = get_page_uri($posts_page_id);  
      $pos = strpos($uri,$posts_page_url);
      if($pos !== false) {
        $rendu .= $debutlien.' > <span typeof="v:Breadcrumb">Les articles</span>';
      }
      else {$rendu .= $debutlien;} 
    }

    //Si c'est l'accueil
    elseif ( is_home()) {$rendu .= $debut;}

    //pour tout le reste
    else {$rendu .= $debutlien;}

    // les catégories
    if ( is_category() ) {
      $cat_obj = $wp_query->get_queried_object();$thisCat = $cat_obj->term_id;$thisCat = get_category($thisCat);$parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) $rendu .= " > ".myget_category_parents($parentCat, true, " > ", true);
      if ($thisCat->parent == 0) {$rendu .= " > ";}
      if ( $ped <= 1 ) {$rendu .= single_cat_title("", false);}
      elseif ( $ped > 1 ) {
        $rendu .= '<span typeof="v:Breadcrumb"><a href="' . get_category_link( $thisCat ) . '" title="Voir tous les articles de '.single_cat_title("", false).'" rel="v:url" property="v:title">'.single_cat_title("", false).'</a></span>';}}

    // les auteurs
    elseif ( is_author()){
      global $author;$user_info = get_userdata($author);$rendu .= " > Articles de l'auteur ".$user_info->display_name."</span>";}  

    // les mots clés
    elseif ( is_tag()){
      $tag=single_tag_title("",FALSE);$rendu .= " > Articles sur le th&egrave;me <span>".$tag."</span>";}
      elseif ( is_date() ) {
          if ( is_day() ) {
              global $wp_locale;
              $rendu .= '<span typeof="v:Breadcrumb"><a href="'.get_month_link( get_query_var('year'), get_query_var('monthnum') ).'" rel="v:url" property="v:title">'.$wp_locale->get_month( get_query_var('monthnum') ).' '.get_query_var('year').'</a></span> ';
              $rendu .= " > Archives pour ".get_the_date();}
      else if ( is_month() ) {
              $rendu .= " > Archives pour ".single_month_title(' ',false);}
      else if ( is_year() ) {
              $rendu .= " > Archives pour ".get_query_var('year');}}

    //les archives hors catégories
    elseif ( is_archive() && !is_category()){
          $posttype = get_post_type();
      $tata = get_post_type_object( $posttype );
      $var = '';
      $the_tax = get_taxonomy( get_query_var( 'taxonomy' ) );
      $titrearchive = $tata->labels->menu_name;
      if (!empty($the_tax)){$var = $the_tax->labels->name.' ';}
          if (empty($the_tax)){$var = $titrearchive;}
      $rendu .= ' > Archives sur "'.$var.'"';}

    // La recherche
    elseif ( is_search()) {
      $rendu .= " > R&eacute;sultats de votre recherche <span>> ".get_search_query()."</span>";}

    // la page 404
    elseif ( is_404()){
      $rendu .= " > 404 Page non trouv&eacute;e";}

    //Un article
    elseif ( is_single()){
      $category = get_the_category();
      $category_id = get_cat_ID( $category[0]->cat_name );
      if ($category_id != 0) {
        $rendu .= " > ".myget_category_parents($category_id,TRUE,' > ')."<span>".the_title('','',FALSE)."</span>";}
      elseif ($category_id == 0) {
        $post_type = get_post_type();
        $tata = get_post_type_object( $post_type );
        $titrearchive = $tata->labels->menu_name;
        $urlarchive = get_post_type_archive_link( $post_type );
        $rendu .= ' > <span typeof="v:Breadcrumb"><a class="breadl" href="'.$urlarchive.'" title="'.$titrearchive.'" rel="v:url" property="v:title">'.$titrearchive.'</a></span> > <span>'.the_title('','',FALSE).'</span>';}}

    //Une page
    elseif ( is_page()) {
      $post = $wp_query->get_queried_object();
      if ( $post->post_parent == 0 ){$rendu .= " > ".the_title('','',FALSE)."";}
      elseif ( $post->post_parent != 0 ) {
        $title = the_title('','',FALSE);$ancestors = array_reverse(get_post_ancestors($post->ID));array_push($ancestors, $post->ID);
        foreach ( $ancestors as $ancestor ){
          if( $ancestor != end($ancestors) ){$rendu .= ' > <span typeof="v:Breadcrumb"><a href="'. get_permalink($ancestor) .'" rel="v:url" property="v:title">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a></span>';}
          else {$rendu .= ' > '.strip_tags(apply_filters('single_post_title',get_the_title($ancestor))).'';}}}}
    if ( $ped >= 1 ) {$rendu .= ' (Page '.$ped.')';}
	}
	$rendu .= '</div>';
	echo $rendu;
}


// OA2 - Rajoute .html aux url des pages
add_action('init', 'html_page_permalink', -1);
register_activation_hook(__FILE__, 'active');
register_deactivation_hook(__FILE__, 'deactive');
function html_page_permalink() {
  global $wp_rewrite;
 if ( !strpos($wp_rewrite->get_page_permastruct(), '.html')){
    $wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
 }
}
add_filter('user_trailingslashit', 'no_page_slash',66,2);
function no_page_slash($string, $type){
   global $wp_rewrite;
  if ($wp_rewrite->using_permalinks() && $wp_rewrite->use_trailing_slashes==true && $type == 'page'){
    return untrailingslashit($string);
  }else{
   return $string;
  }
}
function active() {
  global $wp_rewrite;
  if ( !strpos($wp_rewrite->get_page_permastruct(), '.html')){
    $wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
 }
  $wp_rewrite->flush_rules();
} 
function deactive() {
  global $wp_rewrite;
  $wp_rewrite->page_structure = str_replace(".html","",$wp_rewrite->page_structure);
  $wp_rewrite->flush_rules();
}


// OA3 - Compression du HTML (sauf JS)
class WP_HTML_Compression
{
	// Settings
	protected $compress_css = true;
	protected $compress_js = false;
	protected $info_comment = true;
	protected $remove_comments = true;

	// Variables
	protected $html;
	public function __construct($html)
	{
		if (!empty($html))
		{
			$this->parseHTML($html);
		}
	}
	public function __toString()
	{
		return $this->html;
	}
	protected function bottomComment($raw, $compressed)
	{
		$raw = strlen($raw);
		$compressed = strlen($compressed);		
		$savings = ($raw-$compressed) / $raw * 100;		
		$savings = round($savings, 2);		
		return '<!--HTML compressed, size saved '.$savings.'%. From '.$raw.' bytes, now '.$compressed.' bytes-->';
	}
	protected function minifyHTML($html)
	{
		$pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
		preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);
		$overriding = false;
		$raw_tag = false;
		// Variable reused for output
		$html = '';
		foreach ($matches as $token)
		{
			$tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;
			
			$content = $token[0];
			
			if (is_null($tag))
			{
				if ( !empty($token['script']) )
				{
					$strip = $this->compress_js;
				}
				else if ( !empty($token['style']) )
				{
					$strip = $this->compress_css;
				}
				else if ($content == '<!--wp-html-compression no compression-->')
				{
					$overriding = !$overriding;
					
					// Don't print the comment
					continue;
				}
				else if ($this->remove_comments)
				{
					if (!$overriding && $raw_tag != 'textarea')
					{
						// Remove any HTML comments, except MSIE conditional comments
						$content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content);
					}
				}
			}
			else
			{
				if ($tag == 'pre' || $tag == 'textarea')
				{
					$raw_tag = $tag;
				}
				else if ($tag == '/pre' || $tag == '/textarea')
				{
					$raw_tag = false;
				}
				else
				{
					if ($raw_tag || $overriding)
					{
						$strip = false;
					}
					else
					{
						$strip = true;
						
						// Remove any empty attributes, except:
						// action, alt, content, src
						$content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content);
						
						// Remove any space before the end of self-closing XHTML tags
						// JavaScript excluded
						$content = str_replace(' />', '/>', $content);
					}
				}
			}			
			if ($strip)
			{
				$content = $this->removeWhiteSpace($content);
			}			
			$html .= $content;
		}		
		return $html;
	}
		
	public function parseHTML($html)
	{
		$this->html = $this->minifyHTML($html);
		
		if ($this->info_comment)
		{
			$this->html .= "\n" . $this->bottomComment($html, $this->html);
		}
	}
	
	protected function removeWhiteSpace($str)
	{
		$str = str_replace("\t", ' ', $str);
		$str = str_replace("\n",  '', $str);
		$str = str_replace("\r",  '', $str);		
		while (stristr($str, '  '))
		{
			$str = str_replace('  ', ' ', $str);
		}		
		return $str;
	}
}
function wp_html_compression_finish($html)
{
	return new WP_HTML_Compression($html);
}
function wp_html_compression_start()
{
	ob_start('wp_html_compression_finish');
}
// add_action('get_header', 'wp_html_compression_start');


// OA4 - Charge jQuery sans charger jQuery-migrate.js comme le fait WP par défaut
function remove_jquery_migrate( &$scripts)
{
    if(!is_admin())
    {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '', true);
    }
}
add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );


// OA5 - Permet de déplacer les scripts jquery etc dans le footer
function md_footer_enqueue_scripts() {
    remove_action('wp_head', 'wp_print_styles', 1);
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
}
add_action('wp_enqueue_scripts', 'md_footer_enqueue_scripts');


// OA6 - Ajouter scripts et styles au WP Enqueue Scripts
function theme_scripts() {	
	global $wp_styles;

	// CSS
	// wp_enqueue_style('animatecss', template_url.'/css/animate.css');
	wp_enqueue_style('css', template_url.'/style.css');
	wp_enqueue_style('csssite', template_url.'/style-site.css');

	// Google Fonts
    // wp_enqueue_style('OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700');

    // Slick Slider (Septembre 2016)
	wp_enqueue_script('slick', template_url.'/js/slick.min.js', array('jquery'), '', true);

	// Magnific Popup (Septembre 2016)
	wp_enqueue_script('m-popup', template_url.'/js/popup.min.js', array('jquery'), '', true);

	// Cookie JS
	//wp_enqueue_script('cookie', template_url.'/js/jquery.cookie.min.js', array('jquery'), '', true);

	// Addthis
	//wp_enqueue_script('addthis','//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5657187150b2a8f5', array('jquery'), '', true);

	// jQuery UI	
    //wp_enqueue_script('jquery-ui', 'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js', array('jquery'), '', true);
	//wp_enqueue_style('jquery-ui-css', 'http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css?ver=4.4' );

	// Scripts Génériques
	wp_enqueue_script('wowjs', template_url.'/js/wow.min.js', array('jquery'), '', true);
	wp_enqueue_script('scripts', template_url.'/js/scripts.js', array('jquery'), '', true);
	wp_enqueue_script('scriptssite', template_url.'/js/scripts-site.js', array('jquery'), '', true);

	// Commentaires
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Page Accueil
	/*if(is_front_page()) {
	}*/

	// Page Contact
	/*if(is_page()) {
    	wp_enqueue_script('recaptcha','https://www.google.com/recaptcha/api.js', array('jquery'), '', true);
		wp_enqueue_script('gmaps', 'http://maps.google.com/maps/api/js?sensor=true', array('jquery'), '', true);
		wp_enqueue_script('script-gmap', template_url.'/js/gmaps.script.js', array('gmaps'), '', true);
		$script_params = array(
            'pin' => template_url.'/images/pin.png',
            'url' => get_permalink()
        );
		wp_localize_script('script-gmap', 'scriptParams', $script_params);		
	}*/
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


// OA7 - Supprimer thickbox.css de WP par défaut
function wp_dequeue_thickbox() {
    if (!is_admin()) {
        wp_deregister_style('thickbox');
        wp_deregister_script('thickbox');
    }
}
add_action('init', 'wp_dequeue_thickbox');


// -----------
// WOOCOMMERCE
// -----------

// WC1 - Modifier nombre de produits cross-selling affichés
function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 8; // 4 related products
	$args['columns'] = 4; // arranged in 2 columns
	return $args;
}
//add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );


// WC2 - Déclarer support WooCommerce
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
//add_action( 'after_setup_theme', 'woocommerce_support' );


// WC3 - Met à jour le panier lors d'un ajout de produit Ajax
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a> 
	<?php
	
	$fragments['a.cart-contents'] = ob_get_clean();
	
	return $fragments;
}
//add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );


// WC4 - Modifier Placeholder, Label... Notes de la commande
function custom_woocommerce_checkout_fields( $fields ) {
    $fields['order']['order_comments']['placeholder'] = 'Your custom placeholder';
    return $fields;
}
//add_filter('woocommerce_checkout_fields', 'custom_woocommerce_checkout_fields');


// WC5 - Ajouter classes manquantes pages anglaises WC au body
function wc_body_classes( $classes ) {
  if ( is_woocommerce() ) {
    $classes[] = 'woocommerce';
    $classes[] = 'woocommerce-page';
  }
  elseif ( is_checkout() ) {
    $classes[] = 'woocommerce-checkout';
    $classes[] = 'woocommerce-page';
  }
  elseif ( is_cart() || is_page(743)) {
    $classes[] = 'woocommerce-cart';
    $classes[] = 'woocommerce-page';
  }
  elseif ( is_account_page() ) {
    $classes[] = 'woocommerce-account';
    $classes[] = 'woocommerce-page';
  }
  if ( is_store_notice_showing() ) {
    $classes[] = 'woocommerce-demo-store';
  }
  foreach ( WC()->query->query_vars as $key => $value ) {
    if ( is_wc_endpoint_url( $key ) ) {
      $classes_wc[] = 'woocommerce-' . sanitize_html_class( $key );
    }
  }
  return $classes;
}
//add_filter('body_class', 'wc_body_classes');


// WC6 - Charger jQuery footer
wp_dequeue_script('wc-add-to-cart-variation');
function fix_woo_var_cart()
{
	wp_enqueue_script('add-to-cart-variation', '/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.js',array('jquery'),'1.0',true);
}
//add_action('wp_enqueue_scripts','fix_woo_var_cart');


// WC7 - Gestion des quantités
function jk_woocommerce_quantity_input_args( $args, $product ) {
	if ( is_singular( 'product' ) ) {
		$args['input_value'] 	= 2;	// Starting value (we only want to affect product pages, not cart)
	}
	$args['max_value'] 	= 80; 	// Maximum value
	$args['min_value'] 	= 2;   	// Minimum value
	$args['step'] 		= 2;    // Quantity steps
	return $args;
}
//add_filter( 'woocommerce_quantity_input_args', 'jk_woocommerce_quantity_input_args', 10, 2 );


// WC8 - Ajout nouveaux champs à la commande
function my_custom_checkout_field( $checkout ) {
    echo '<div id="custom-checkout-field"><h3>' . __('Votre bon cadeau') . '</h3>';
    woocommerce_form_field( 'bon_offert_par', array(
        'type'          => 'text',
        'class'         => array('my-field-class form-row-wide'),
        'label'         => __('Bon offert par'),
        'placeholder'   => __(''),
        ), $checkout->get_value( 'bon_offert_par' ));
    echo '</div>';
}
//add_action( 'woocommerce_after_order_notes', 'my_custom_checkout_field' );
function my_custom_checkout_field_process() {
	$currentLang = substr(get_locale(), 0, 2);
	global $lang;
	include_once(get_theme_root().'/'.theme_name.'/languages/'.$currentLang.'.php');
    // Check if set, if its not set add an error.
    if ( ! $_POST['bon_offert_par'] )
        wc_add_notice( $lang['fill_required'], 'error' );
}
//add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');
function my_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['bon_offert_par'] ) ) {
        update_post_meta( $order_id, 'Bon offert par', sanitize_text_field( $_POST['bon_offert_par'] ) );
    }
}
//add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );
function my_custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('Bon offert par').':</strong> ' . get_post_meta( $order->id, 'Bon offert par', true ) . '</p>';
}
//add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );


// WC9 - Mise à jour auto page panier
function custom_after_cart() {
    echo '
    <script>
	   jQuery(document).ready(function() { 
	   		var upd_cart_btn = jQuery(".woocommerce-cart input[name='."update_cart".']");
	   		jQuery(".shop_table").find("input.qty").on("change", function(){ 
	   			console.log("yeah");
	   			upd_cart_btn.trigger("click"); 
	   			jQuery(".cart_item").fadeTo( "slow" , 0.5); 
	   			return false;
		    });
		    jQuery(".products").find(".add_to_cart_button").on("click", function() {
		   		var qty_added = jQuery(this).attr("data-quantity");
		   		var qty_is = '; echo WC()->cart->cart_contents_count; echo ';
		   		var qty_is_true = parseInt(jQuery(".nb_panier .nb").html());
		   		if(parseInt(qty_is_true) > parseInt(qty_is)) { qty_is = parseInt(qty_is_true); }
		   		console.log(parseInt(qty_added) + parseInt(qty_is));
		   		var nbr_produits = (parseInt(qty_added) + parseInt(qty_is));'; 
		   		//sprintf (_n( '%d produit(s)', '%d produit(s)', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count );
		   		echo '
		   		jQuery(".nb_panier").html("<span class=\'nb\'>" + nbr_produits + "</span> produit(s)");
			});
		}); 
   </script>';
}
//add_action( 'wp_footer', 'custom_after_cart', 99999 );


// WC10 - Modifier hooks content-product.php

//remove_action( 'woocommerce_shop_loop_product_thumbnail', 'woocommerce_template_loop_product_thumbnail', 10 );
function custom_woocommerce_template_loop_product_thumbnail(){
	global $post;
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
	if ( has_post_thumbnail() ) {
		echo '<a class="fancyb" href="'.$thumbnail[0].'">';
			the_post_thumbnail( $post->ID, $size );
		echo '</a>';
	} elseif ( wc_placeholder_img_src() ) {
		return wc_placeholder_img( $size );
	}
}
//remove_action( 'woocommerce_shop_loop_product_thumbnail', 'custom_woocommerce_template_loop_product_thumbnail', 10 );

//remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
function custom_woocommerce_template_loop_product_title() {
	if(get_field('poids_contenance')) {
		echo '<h3>' . get_the_title() . ' - '.get_field('poids_contenance').'</h3>';
	} else {
		echo '<h3>' . get_the_title().'</h3>';
	}
}
//add_action( 'woocommerce_shop_loop_item_title', 'custom_woocommerce_template_loop_product_title', 10 );


// WC11 - Ajout "/kg" après le prix d'un produit

function wc_custom_price( $price, $product ) {
	return sprintf( __( '%s per KG', 'woocommerce' ), woocommerce_price( $product->get_price() ) );
}
//add_action( 'woocommerce_price_html', 'wc_custom_price', 10, 2 );


// ----
// WPML
// ----

// WP1 - Permet d'afficher un sélecteur de langue de le cadre de l'utilisation du module WPML
// Appel : languages_list_select();
function languages_list_select(){
 $currentLang = ICL_LANGUAGE_CODE;
 $languages = icl_get_languages('skip_missing=0&orderby=name');
 if(!empty($languages)){
 	echo '<ul>';
  foreach($languages as $l){
   if($l['language_code'] == 'zh-hans') { $l['language_code'] = 'zh'; }
   if($l['active']) {
    //$l['translated_name'];
    echo '
    <li class="lang_active lang_'.$l['language_code'].'">
    	<img src="'.$l['country_flag_url'].'" width="12" height="12" alt="'.$l['language_code'].'"/>
    	<a href="'.$l['url'].'" class="lang_active" id="lang_'.$l['language_code'].'">';
    		echo $l['language_code'].'
    	</a>
    </li>';
   }
  }
  foreach($languages as $l){
   if($l['language_code'] == 'zh-hans') { $l['language_code'] = 'zh'; }
   if(!$l['active']) {
    //echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
    echo '
    <li class="lang_inactive lang_'.$l['language_code'].'">
    	<img src="'.$l['country_flag_url'].'" width="12" height="12" alt="'.$l['language_code'].'"/>
    	<a href="'.$l['url'].'" class="lang_inactive" id="lang_'.$l['language_code'].'">';
    		echo $l['language_code'].'
    	</a>
    </li>';
   }
  }
  echo '</ul>';
 }
}



// WP2 - Ajouter classe langue au body
function add_language_class($classes) {
global $sitepress;
$classes[] = $sitepress->get_current_language();
return $classes;
}
//add_filter('body_class', 'add_language_class');


// -----------
// BACK-OFFICE
// -----------

// BO1 - Supprimer blocs des pages admins
function remove_post_custom_fields() {
	//remove_meta_box('linktargetdiv', 'link', 'normal');
	//remove_meta_box('linkxfndiv', 'link', 'normal');
	//remove_meta_box('linkadvanceddiv', 'link', 'normal');
	//remove_meta_box('postexcerpt', 'post', 'normal');
	//remove_meta_box('trackbacksdiv', 'post', 'normal');
	//remove_meta_box('postcustom', 'post', 'normal');
	//remove_meta_box('commentstatusdiv', 'post', 'normal');
	//remove_meta_box('commentsdiv', 'post', 'normal');
	//remove_meta_box('revisionsdiv', 'post', 'normal');
	//remove_meta_box('authordiv', 'post', 'normal');
	//remove_meta_box('sqpt-meta-tags', 'post', 'normal');
}
//add_action( 'admin_menu' , 'remove_post_custom_fields' );


// BO2 - ACF Option page
$page = array(	
	/* (string) The title displayed on the options page. Required. */
	'page_title' => 'Footer',	
	/* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
	'menu_title' => '',	
	/* (string) The slug name to refer to this menu by (should be unique for this menu). 
	Defaults to a url friendly version of menu_slug */
	'menu_slug' => 'footer',	
	/* (string) The capability required for this menu to be displayed to the user. Defaults to edit_posts.
	Read more about capability here: http://codex.wordpress.org/Roles_and_Capabilities */
	'capability' => 'edit_posts',	
	/* (int|string) The position in the menu order this menu should appear. 
	WARNING: if two menu items use the same position attribute, one of the items may be overwritten so that only one item displays!
	Risk of conflict can be reduced by using decimal instead of integer values, e.g. '63.3' instead of 63 (must use quotes).
	Defaults to bottom of utility menu items */
	'position' => false,	
	/* (string) The slug of another WP admin page. if set, this will become a child page. */
	'parent_slug' => '',	
	/* (string) The icon url for this menu. Defaults to default WordPress gear */
	'icon_url' => false,	
	/* (boolean) If set to true, this options page will redirect to the first child page (if a child page exists). 
	If set to false, this parent page will appear alongside any child pages. Defaults to true */
	'redirect' => true,	
	/* (int|string) The '$post_id' to save/load data to/from. Can be set to a numeric post ID (123), or a string ('user_2'). 
	Defaults to 'options'. Added in v5.2.7 */
	'post_id' => 'options',	
	/* (boolean)  Whether to load the option (values saved from this options page) when WordPress starts up. 
	Defaults to false. Added in v5.2.8. */
	'autoload' => false,
);
if( function_exists('acf_add_options_page') ) {
	//acf_add_options_page($page);
}


// BO3 - Désactiver filtre balises html Wordpress
//disable WordPress sanitization to allow more than just $allowedtags from /wp-includes/kses.php
remove_filter('pre_user_description', 'wp_filter_kses');
//add sanitization for WordPress posts
add_filter( 'pre_user_description', 'wp_filter_post_kses');


// BO4 - Logo connexion
function custom_login_logo() {
	echo '<style type="text/css">
	.login h1 a { background-image: url('.template_url.'/images/logo.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');

// BO5 - Login Redirection
function redirect_not_logged() {
	if( ( !is_user_logged_in() && !is_user_admin() ) ) {
		if( !is_page_template('template-connexion.php') ) { 
			$login = get_the_slug(229);
			//return site_url( '/connexion-fey9h781bc-sq469adex.html/?redirect_to=' . $redirect);
			header('location:'.site_url.'/'.$login.'.html');
			//return site_url( '/haendler-login/?redirect_to=' . $redirect );
		}
	}
}
//add_action( 'get_footer', 'redirect_not_logged', 10, 2 );


// BO6 - Modifier urls de connexion 
function login_secure( $login_url, $redirect, $force_reauth ) {
	if ( in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) ) ) {
   		return site_url.'/my-custom-admin-url/';
	}
}
//add_filter( 'login_url', 'login_secure', 10, 3 );
function my_lost_password_page( $lostpassword_url, $redirect ) {
    return site_url.'/my-custom-admin-url?action=lostpassword';
}
//add_filter( 'lostpassword_url', 'my_lost_password_page', 10, 2 );


// BO7 - Fonction à la sauvegarde d'une page / annonce
function maj_page( $post_id ) {
	// If this is just a revision, do nothing
	if ( wp_is_post_revision( $post_id ))
		return;
}
//add_action( 'save_post', 'maj_page' );


// BO8 - Ajouter page back-office
// function add_links_menu() {
//     add_menu_page('Les Commandes', 'Les Commandes', 'administrator', 'commandes', 'page_gen_commandes', 'dashicons-cart', 51);
//     add_submenu_page( 'commandes', 'Codes promo', 'Codes promo', 'administrator', 'code_promo', 'page_gen_code_promo_creer');
//     add_options_page( 'Mes informations', 'Mes informations', 'administrator', 'admin_detail', 'page_gen_admin_detail');
// }
// function page_gen_commandes() {	
//     include('admin-calendar.php');
// }
//add_action( 'admin_menu', 'add_links_menu' );






add_action( 'admin_menu', 'add_links_menu' );

function add_links_menu() {
    add_menu_page('CSV du site', 'Fichier csv', 'administrator', 'script-csv', 'page_gen_csv', 'images/marker.png', 51);
}



function page_gen_csv() {
    include('script-csv.php');
}


// BO9 - Ajouter scripts back-office
function my_admin_enqueue($hook_suffix) {
    if($hook_suffix != 'toplevel_page_calendrier') {
    	return;
    }
	wp_enqueue_style('css', template_url.'/style.css');
	wp_enqueue_script('scripts', template_url.'/js/scripts.php', array('sweetAlert'), '', true);
	$script_params_rdv = array(
        /* examples */
        'icon_calendar' => template_url.'/images/icon-calendar.png',
        'dimensions' => '25x25'
    );

	wp_localize_script('scripts', 'scriptParams', $script_params_rdv);	
}
//add_action('admin_enqueue_scripts', 'my_admin_enqueue');

// ------
// DIVERS
// ------

// D0 - Ajotuer Thumbnail aux flux RSS
// Ajouter la vignette d'un article au flux RSS : modifier le fichier wp-includes/feed-atom.php  (dans le cas de l'utilisation de flux atom)
// Ajouter cette portion de code
/*
  <?php
    (int) $id = get_post_thumbnail_id($post->ID);
    $thumb_url = wp_get_attachment_url( $id );
  ?>
  <thumb><?php echo $thumb_url; ?></thumb>
*/


// D1 - Supprime le cache du feed RSS : A UTILISER EN DEV POUR LA RECUPERATION DE FLUX RSS / JAMAIS EN PROD ! 
 function do_not_cache_feeds(&$feed) {
   $feed->enable_cache(false);
 }
//add_action( 'wp_feed_options', 'do_not_cache_feeds' );


// D2 - Renvoie une 404 si jamais un bug envoie sur une page de blog qui n'existe pas (exemple : page 4 alors qu'il n'y a que 3 pages)
function custom_paged_404_fix( ) {
    global $wp_query;
    if ( is_404() || !is_paged() || 0 != count( $wp_query->posts ) )
        return;
    $wp_query->set_404();
    status_header( 404 );
    nocache_headers();
}
//add_action( 'wp', 'custom_paged_404_fix' );


// D3 - Suppression des accents
function supprAccents($string){
  return strtr($string,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ',
'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
}


// D4 - Permet de récupérer la météo d'une ville en fonction de son numéro WOEID. Paramètres : WOEID, nombre de jours, theme (blanc, noir, couleur, ou perso)
// Nécessite le pack de pictos associé
function get_weather($woeid, $days=3, $theme=noir) {
  // FLux RSS avec woeid de la ville, unité celsius et nombre de jours
  $rss = 'http://weather.yahooapis.com/forecastrss?w='.$woeid.'&u=c&d='.$days;
  if($flux = simplexml_load_file($rss)) {
    $data = $flux->channel;
    //Lecture des données
    foreach($data as $value) {
      $ns_yweather = $value->children('http://xml.weather.yahoo.com/ns/rss/1.0');
      $ville = $ns_yweather->location->attributes()->city;
      $pays = $ns_yweather->location->attributes()->country;  

      $ns_yweather_item = $value->item[0]->children('http://xml.weather.yahoo.com/ns/rss/1.0');

      $soleil = array(31,32,33,34,36);
      $soleilNuages = array(29,30);
      $nuages = array(24,25,26,27,28,44);
      $pluie = array(6,7,8,9,10,11,12,23,39,40);
      $orage = array(0,1,2,3,4,37,38,45,47);
      $neige = array(5,13,14,15,16,18,41,42,43,46);
      $brouillard = array(19,20,21,22);
      $grele = array(17,35);

      $temperature_ajd = $ns_yweather_item->condition->attributes()->temp; // Température réelle du jour
      for($i=0; $i<$days; $i++) {
        $day[$i] = $ns_yweather_item->forecast[$i]->attributes()->day;
        $day[$i] = str_replace(
            array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'),
            array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'),
            $day[$i]);

        $temperature[$i] = $ns_yweather_item->forecast[$i]->attributes()->high; // Température la plus haute
        $temps[$i] = $ns_yweather_item->forecast[$i]->attributes()->text; // Temps, en anglais, non utilisé ici

        $code_temps[$i] = $ns_yweather_item->forecast[$i]->attributes()->code;
        if(in_array($code_temps[$i], $soleil)) { $text_temps[$i] = 'Ensoleillé'; }
        if(in_array($code_temps[$i], $soleilNuages)) { $text_temps[$i] = 'Quelques nuages'; }
        if(in_array($code_temps[$i], $nuages)) { $text_temps[$i] = 'Nuageux'; }
        if(in_array($code_temps[$i], $pluie)) { $text_temps[$i] = 'Pluie'; }
        if(in_array($code_temps[$i], $orage)) { $text_temps[$i] = 'Orage'; }
        if(in_array($code_temps[$i], $neige)) { $text_temps[$i] = 'Neige'; }
        if(in_array($code_temps[$i], $brouillard)) { $text_temps[$i] = 'Brouillard'; }
        if(in_array($code_temps[$i], $grele)) { $text_temps[$i] = 'Grêle'; }
      }

      $output =   
      '<div id="weather">
        <h3>Météo</h3>
        <div class="global_infos">
          <div class="ville info">'.$ville.', '.$pays.'</div>
        </div>';
      for($i=0; $i<$days; $i++) {
        $j = $i+1;
        if($i == 0) { $day[$i] = 'Aujourd\'hui'; $temperature[$i] = $temperature_ajd; }
        $output .=
        '<div class="day" id="day'.$j.'">
          <div class="day_text info">'.$day[$i].'</div>
          <div class="picto info code_temps_'.$code_temps[$i].'"><img src="'.template_url.'/images/picto-meteo-'.strtolower(str_replace(array(' ', 'é', 'ê'),array('-', 'e'), $text_temps[$i])).'-'.$theme.'.png" alt="Météo '.$ville.'" title="'.$text_temps[$i].'"/></div>
          <div class="temperature info">'.$temperature[$i].'°C</div>
          <div class="temps info">'.$text_temps[$i].'</div>
        </div>';
      }
      $output.=
      '</div>';
    }
  }
  echo $output;
}


// D5 - Textarea des commentaires en bas de formulaire
function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );


// D6 - Retailler images à la volée avec AquaResizer
/* 
Utilisation : $image = vt_resize('', $img_url, 560, 310, true);
<img src="<?php echo $image[url]; ?>" />
// Arguments : id image, url image, width, height, crop
*/
require_once('inc/vt_resizer.php');


// D7 - Session WP 
function myStartSession() {
   if (!session_id()) {
      session_start();
   }
}
add_action('init', 'myStartSession', 1);


// D9 - in_array récursive
function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }
    return false;
}

function pagination($query) {  
	
	$baseURL="http://".$_SERVER['HTTP_HOST'];
	if($_SERVER['REQUEST_URI'] != "/"){
		$baseURL = $baseURL.$_SERVER['REQUEST_URI'];
	}
 
	// Suppression de '/page' de l'URL
	$sep = strrpos($baseURL, '/page/');
	if($sep != FALSE){
		$baseURL = substr($baseURL, 0, $sep);
	}
 
  // Suppression des paramètres de l'URL
	$sep = strrpos($baseURL, '?');
	if($sep != FALSE){
	// On supprime le caractère avant qui est un '/'
		$baseURL = substr($baseURL, 0, ($sep-1));
	}	
	
	$page = $query->query_vars["paged"];  
	if ( !$page ) $page = 1;  
	$qs = $_SERVER["QUERY_STRING"] ? "?".$_SERVER["QUERY_STRING"] : "";  
	
	// Nécessaire uniquement si on a plus de posts que de posts par page admis 
	if ( $query->found_posts > $query->query_vars["posts_per_page"] ) {  
		echo '<ul class="pagination">'; 
		// lien précédent si besoin
		if ( $page > 1 ) { 
			echo '<li class="next_prev prev"><a title="Revenir à la page précédente (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page-1).'/'.$qs.'">« précédente</a></li>'; 
		} 
		// la boucle pour les pages
		for ( $i=1; $i <= $query->max_num_pages; $i++ ) { 
			// ajout de la classe active pour la page en cours de visualisation
			if ( $i == $page ) { 
				echo '<li class="active"><a href="#pagination" title="Vous êtes sur cette page '.$i.'">'.$i.'</a></li>'; 
			} else { 
				echo '<li><a title="Rejoindre la page '.$i.'" href="'.$baseURL.'/page/'.$i.'/'.$qs.'">'.$i.'</a></li>'; 
			} 
		} 
		// le lien next si besoin
		if ( $page < $query->max_num_pages ) { 
			echo '<li class="next_prev next"><a title="Passer à la page suivante (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page+1).'/'.$qs.'">suivante »</a></li>'; 
		} 
		echo '</ul>';  
	}  
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Options du thème',
		'menu_title'	=> 'Option du thème',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
}

function acf_load_style_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();


    // if has rows
    if( have_rows('liste_de_styles', 'option') ) {
        
        // while has rows
        while( have_rows('liste_de_styles', 'option') ) {
            
            // instantiate row
            the_row();
            
            
            // vars
            $value = get_sub_field('slug_du_style');
            $label = get_sub_field('nom_du_style');

            
            // append to choices
            $field['choices'][ $value ] = $label;
            
        }
        
    }


    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=style', 'acf_load_style_field_choices');


function acf_load_classes_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();


    // if has rows
    if( have_rows('liste_de_classes', 'option') ) {
        
        // while has rows
        while( have_rows('liste_de_classes', 'option') ) {
            
            // instantiate row
            the_row();
            
            
            // vars
            $value = get_sub_field('slug_de_la_classe');
            $label = get_sub_field('nom_de_la_classe');

            
            // append to choices
            $field['choices'][ $value ] = $label;
            
        }
        
    }


    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=classes', 'acf_load_classes_field_choices');

include_once('functions-site.php');


?>