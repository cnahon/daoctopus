<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url; ?>/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo template_url; ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<style>
  h1
  {
    <?php if (get_field('taille_police_h1')){ ?> font-size: <?php the_field( 'taille_police_h1' ); ?>px; <?php } ?>
    <?php if (get_field('interlignage_du_h1')){ ?> line-height: <?php the_field( 'interlignage_du_h1' ); ?>px; <?php } ?>
    <?php if (get_field('espacement_en_bas_du_h1')){ ?> padding-bottom: <?php the_field( 'espacement_en_bas_du_h1' ); ?>px; <?php } ?>
    <?php if (get_field('espacement_en_haut_et_en_bas_du_pli')){ ?> padding-top: <?php the_field( 'espacement_en_haut_et_en_bas_du_pli' ); ?>px; <?php } ?>
  }

  h2
  {
    <?php if (get_field('taille_police_h2')){ ?> font-size: <?php the_field( 'taille_police_h2' ); ?>px; <?php } ?>
    <?php if (get_field('interlignage_du_h2')){ ?> line-height: <?php the_field( 'interlignage_du_h2' ); ?>px; <?php } ?>
    <?php if (get_field('espacement_en_bas_du_h2')){ ?> padding-bottom: <?php the_field( 'espacement_en_bas_du_h2' ); ?>px; <?php } ?>
    <?php if (get_field('espacement_en_haut_et_en_bas_du_pli')){ ?> padding-top: <?php the_field( 'espacement_en_haut_et_en_bas_du_pli' ); ?>px; <?php } ?>
  }

  h3
  {
    <?php if (get_field('taille_police_h3')){ ?> font-size: <?php the_field( 'taille_police_h3' ); ?>px; <?php } ?>
    <?php if (get_field('interlignage_du_h3')){ ?> line-height: <?php the_field( 'interlignage_du_h3' ); ?>px; <?php } ?>
    <?php if (get_field('espacement_en_bas_du_h3')){ ?> padding-bottom: <?php the_field( 'espacement_en_bas_du_h3' ); ?>px; <?php } ?>
    <?php if (get_field('espacement_en_haut_et_en_bas_du_pli')){ ?> padding-top: <?php the_field( 'espacement_en_haut_et_en_bas_du_pli' ); ?>px; <?php } ?>
  }

  h4
  {
    <?php if (get_field('taille_police_h4')){ ?> font-size: <?php the_field( 'taille_police_h4' ); ?>px; <?php } ?>
    <?php if (get_field('interlignage_du_h4')){ ?> line-height: <?php the_field( 'interlignage_du_h4' ); ?>px; <?php } ?>
    <?php if (get_field('espacement_en_bas_du_h4')){ ?> padding-bottom: <?php the_field( 'espacement_en_bas_du_h4' ); ?>px; <?php } ?>
    <?php if (get_field('espacement_en_haut_et_en_bas_du_pli')){ ?> padding-top: <?php the_field( 'espacement_en_haut_et_en_bas_du_pli' ); ?>px; <?php } ?>
  }
 
  p,
  li
  {
    <?php if (get_field('taille_police_pli')){ ?> font-size: <?php the_field( 'taille_police_pli' ); ?>px; <?php } ?>
    <?php if (get_field('espacement_en_haut_et_en_bas_du_pli')){ ?> padding: <?php the_field( 'espacement_en_haut_et_en_bas_du_pli' ); ?>px 0; <?php } ?>
    <?php if (get_field('interlignage_du_pli')){ ?> line-height: <?php the_field( 'interlignage_du_pli' ); ?>px; <?php } ?>
  } 

  blockquote p
  {
    <?php if (get_field('taille_police_citation')){ ?> font-size: <?php the_field( 'taille_police_citation' ); ?>px; <?php } ?>
    <?php if (get_field('interlignage_citation')){ ?> line-height: <?php the_field( 'interlignage_citation' ); ?>px; <?php } ?>
    <?php if (get_field('espacement_en_bas_citation')){ ?> padding-bottom: <?php the_field( 'espacement_en_bas_citation' ); ?>px; <?php } ?>
    <?php if (get_field('espacement_en_haut_et_en_bas_du_pli')){ ?> padding-top: <?php the_field( 'espacement_en_haut_et_en_bas_du_pli' ); ?>px; <?php } ?>
  }

  .bouton
  {
    <?php if (get_sub_field('espace_en_haut_du_cta')){ ?> margin-top: <?php the_sub_field( 'espace_en_haut_du_cta' ); ?>px; <?php } ?>
  }
  
  .bouton-small
  {
    <?php if (get_sub_field('taille_police_du_cta_small')){ ?> font-size: <?php the_sub_field( 'taille_police_du_cta_small' ); ?>px; <?php } ?>
    <?php if (get_field('interlignage_du_cta_small')){ ?> line-height: <?php the_field( 'interlignage_du_cta_small' ); ?>px; <?php } ?>
    <?php if (get_field('espace_hb_du_cta_small')){ ?> padding-top: <?php the_field( 'espace_hb_du_cta_small' ); ?>px; <?php } ?>
    <?php if (get_field('espace_hb_du_cta_small')){ ?> padding-bottom: <?php the_field( 'espace_hb_du_cta_small' ); ?>px; <?php } ?>
    <?php if (get_field('espace_dg_du_cta_small')){ ?> padding-left: <?php the_field( 'espace_dg_du_cta_small' ); ?>px; <?php } ?>
    <?php if (get_field('espace_dg_du_cta_small')){ ?> padding-right: <?php the_field( 'espace_dg_du_cta_small' ); ?>px; <?php } ?>
  }

  .bouton-medium
  {
    <?php if (get_sub_field('taille_police_du_cta_medium')){ ?> font-size: <?php the_sub_field( 'taille_police_du_cta_medium' ); ?>px; <?php } ?>
    <?php if (get_field('interlignage_du_cta_medium')){ ?> line-height: <?php the_field( 'interlignage_du_cta_medium' ); ?>px; <?php } ?>
    <?php if (get_field('espace_hb_du_cta_medium')){ ?> padding-top: <?php the_field( 'espace_hb_du_cta_medium' ); ?>px; <?php } ?>
    <?php if (get_field('espace_hb_du_cta_medium')){ ?> padding-bottom: <?php the_field( 'espace_hb_du_cta_medium' ); ?>px; <?php } ?>
    <?php if (get_field('espace_dg_du_cta_medium')){ ?> padding-left: <?php the_field( 'espace_dg_du_cta_medium' ); ?>px; <?php } ?>
    <?php if (get_field('espace_dg_du_cta_medium')){ ?> padding-right: <?php the_field( 'espace_dg_du_cta_medium' ); ?>px; <?php } ?>
  }

  .bouton-large
  {
    <?php if (get_sub_field('taille_police_du_cta_large')){ ?> font-size: <?php the_sub_field( 'taille_police_du_cta_large' ); ?>px; <?php } ?>
    <?php if (get_field('interlignage_du_cta_large')){ ?> line-height: <?php the_field( 'interlignage_du_cta_large' ); ?>px; <?php } ?>
    <?php if (get_field('espace_hb_du_cta_large')){ ?> padding-top: <?php the_field( 'espace_hb_du_cta_large' ); ?>px; <?php } ?>
    <?php if (get_field('espace_hb_du_cta_large')){ ?> padding-bottom: <?php the_field( 'espace_hb_du_cta_large' ); ?>px; <?php } ?>
    <?php if (get_field('espace_dg_du_cta_large')){ ?> padding-left: <?php the_field( 'espace_dg_du_cta_large' ); ?>px; <?php } ?>
    <?php if (get_field('espace_dg_du_cta_large')){ ?> padding-right: <?php the_field( 'espace_dg_du_cta_large' ); ?>px; <?php } ?>
  }

  .bloc-onglet h3,
  .bloc-accordeon h3
  {
    <?php if (get_field('taille_police_titre')){ ?> font-size: <?php the_sub_field( 'taille_police_titre' ); ?>px; <?php } ?>
  } 

</style>
<?php if ( have_rows( 'liste_de_styles', 'option' ) ) : ?>
<style>
  <?php while ( have_rows( 'liste_de_styles', 'option' ) ) : the_row(); ?>
    
    <?php $slugstyle = '.style-'.get_sub_field( 'slug_du_style' ); ?>

    <?php echo $slugstyle; ?> 
    {
      <?php if (get_sub_field('couleur_de_fond')){ ?> background-color: <?php the_sub_field( 'couleur_de_fond' ); ?>; <?php } ?>
      <?php if (get_sub_field('marge_en_haut_et_en_bas')){ ?> padding: <?php the_sub_field( 'marge_en_haut_et_en_bas' ); ?>px 0; <?php } ?>
    }

    <?php echo $slugstyle; ?> h1
    {
      <?php if (get_sub_field('couleur_du_h1')){ ?> color: <?php the_sub_field( 'couleur_du_h1' ); ?>; <?php } ?>
    }

    <?php echo $slugstyle; ?> h2
    {
      <?php if (get_sub_field('couleur_du_h2')){ ?> color: <?php the_sub_field( 'couleur_du_h2' ); ?>; <?php } ?>
    }

    <?php echo $slugstyle; ?> h3
    {
      <?php if (get_sub_field('couleur_du_h3')){ ?> color: <?php the_sub_field( 'couleur_du_h3' ); ?>; <?php } ?>
    }

    <?php echo $slugstyle; ?> h4
    {
     <?php if (get_sub_field('couleur_du_h4')){ ?> color: <?php the_sub_field( 'couleur_du_h4' ); ?>; <?php } ?>
    } 
        
    <?php echo $slugstyle; ?> p,
    <?php echo $slugstyle; ?> li
    {
     <?php if (get_sub_field('couleur_du_pli')){ ?> color: <?php the_sub_field( 'couleur_du_pli' ); ?>; <?php } ?>
    } 

    <?php echo $slugstyle; ?> blockquote p
    {
     <?php if (get_sub_field('couleur_de_la_citation')){ ?> color: <?php the_sub_field( 'couleur_de_la_citation' ); ?>; <?php } ?>
    } 

    <?php echo $slugstyle; ?> a
    {
      <?php if (get_sub_field('couleur_du_a')){ ?> color: <?php the_sub_field( 'couleur_du_a' ); ?>; <?php } ?>
    }   
      

    <?php echo $slugstyle; ?> .bouton-1
    {
      <?php if (get_sub_field('couleur_du_cta_1')){ ?> color: <?php the_sub_field( 'couleur_du_cta_1' ); ?>; <?php } ?>
      <?php if (get_sub_field('couleur_de_fond_du_cta_1')){ ?> background-color: <?php the_sub_field( 'couleur_de_fond_du_cta_1' ); ?>; <?php } ?>
    }   

    <?php echo $slugstyle; ?> .bouton-1:hover
    {
      <?php if (get_sub_field('couleur_du_cta_hover_1')){ ?> color: <?php the_sub_field( 'couleur_du_cta_hover_1' ); ?>; <?php } ?>
      <?php if (get_sub_field('couleur_de_fond_du_cta_hover_1')){ ?> background-color: <?php the_sub_field( 'couleur_de_fond_du_cta_hover_1' ); ?>; <?php } ?>
    }

    <?php echo $slugstyle; ?> .bouton-2
    {
      <?php if (get_sub_field('couleur_du_cta_2')){ ?> color: <?php the_sub_field( 'couleur_du_cta_2' ); ?>; <?php } ?>
      <?php if (get_sub_field('couleur_de_fond_du_cta_2')){ ?> background-color: <?php the_sub_field( 'couleur_de_fond_du_cta_2' ); ?>; <?php } ?>
    }   

    <?php echo $slugstyle; ?> .bouton-2:hover
    {
      <?php if (get_sub_field('couleur_du_cta_hover_2')){ ?> color: <?php the_sub_field( 'couleur_du_cta_hover_2' ); ?>; <?php } ?>
      <?php if (get_sub_field('couleur_de_fond_du_cta_hover_2')){ ?> background-color: <?php the_sub_field( 'couleur_de_fond_du_cta_hover_2' ); ?>; <?php } ?>
    } 

    <?php echo $slugstyle; ?> .bouton-3
    {
      <?php if (get_sub_field('couleur_du_cta_3')){ ?> color: <?php the_sub_field( 'couleur_du_cta_3' ); ?>; <?php } ?>
      <?php if (get_sub_field('couleur_de_fond_du_cta_3')){ ?> background-color: <?php the_sub_field( 'couleur_de_fond_du_cta_3' ); ?>; <?php } ?>
    }   

    <?php echo $slugstyle; ?> .bouton-3:hover
    {
      <?php if (get_sub_field('couleur_du_cta_hover_3')){ ?> color: <?php the_sub_field( 'couleur_du_cta_hover_3' ); ?>; <?php } ?>
      <?php if (get_sub_field('couleur_de_fond_du_cta_hover_3')){ ?> background-color: <?php the_sub_field( 'couleur_de_fond_du_cta_hover_3' ); ?>; <?php } ?>
    } 

    <?php echo $slugstyle; ?> .bloc-onglet h3,
    <?php echo $slugstyle; ?> .bloc-accordeon h3
    {
      <?php if (get_sub_field('couleur_du_titre')){ ?> color: <?php the_sub_field( 'couleur_du_titre' ); ?>; <?php } ?>
      <?php if (get_sub_field('couleur_de_fond_du_titre')){ ?> background-color: <?php the_sub_field( 'couleur_de_fond_du_titre' ); ?>; <?php } ?>
    } 
      
    <?php echo $slugstyle; ?> .bloc-onglet >div,
    <?php echo $slugstyle; ?> .bloc-accordeon >div
    {
      <?php if (get_sub_field('couleur_du_texte')){ ?> color: <?php the_sub_field( 'couleur_du_texte' ); ?>; <?php } ?>
      <?php if (get_sub_field('couleur_de_fond_du_texte')){ ?> background-color: <?php the_sub_field( 'couleur_de_fond_du_texte' ); ?>; <?php } ?>
    } 

    <?php the_sub_field( 'css_du_style' ); ?>


    

  


  <?php endwhile; ?>
</style>
<?php else : ?>
  <?php // no rows found ?>
<?php endif; ?>
<style>
  
  @media (max-width: 420px) {
  
      
      h1
      {
        <?php if (get_field('taille_police_h1_responsive')){ ?> font-size: <?php the_field( 'taille_police_h1_responsive' ); ?>px; <?php } ?>
        <?php if (get_field('interlignage_du_h1_responsive')){ ?> line-height: <?php the_field( 'interlignage_du_h1_responsive' ); ?>px; <?php } ?>
      }

      h2
      {
        <?php if (get_field('taille_police_h2_responsive')){ ?> font-size: <?php the_field( 'taille_police_h2_responsive' ); ?>px; <?php } ?>
        <?php if (get_field('interlignage_du_h2_responsive')){ ?> line-height: <?php the_field( 'interlignage_du_h2_responsive' ); ?>px; <?php } ?>
      }

      h3
      {
        <?php if (get_field('taille_police_h3_responsive')){ ?> font-size: <?php the_field( 'taille_police_h3_responsive' ); ?>px; <?php } ?>
        <?php if (get_field('interlignage_du_h3_responsive')){ ?> line-height: <?php the_field( 'interlignage_du_h3_responsive' ); ?>px; <?php } ?>
      }

      h4
      {
        <?php if (get_field('taille_police_h4_responsive')){ ?> font-size: <?php the_field( 'taille_police_h4_responsive' ); ?>px; <?php } ?>
        <?php if (get_field('interlignage_du_h4_responsive')){ ?> line-height: <?php the_field( 'interlignage_du_h4_responsive' ); ?>px; <?php } ?>
      } 
          
      p,
      li
      {
        <?php if (get_field('taille_du_pli_responsive')){ ?> font-size: <?php the_field( 'taille_du_pli_responsive' ); ?>px; <?php } ?>
        <?php if (get_field('interlignage_du_pli_responsive')){ ?> line-height: <?php the_field( 'interlignage_du_pli_responsive' ); ?>px; <?php } ?>
      } 

      blockquote p
      {
        <?php if (get_field('taille_police_citation_responsive')){ ?> font-size: <?php the_field( 'taille_police_citation_responsive' ); ?>px; <?php } ?>
        <?php if (get_field('interlignage_citation_responsive')){ ?> line-height: <?php the_field( 'interlignage_citation_responsive' ); ?>px; <?php } ?>
      } 

    }


</style>
<?php if ( have_rows( 'liste_de_classes', 'option' ) ) : ?>
<style>
  <?php while ( have_rows( 'liste_de_classes', 'option' ) ) : the_row(); ?>
    
    <?php $contenuclass = get_sub_field( 'css_de_la_classe' ); 

    $contenuclass = str_replace('[URL_TEMPLATE]', template_url, $contenuclass);

    echo $contenuclass;

    ?>
  <?php endwhile; ?>
</style>
<?php else : ?>
  <?php // no rows found ?>
<?php endif; ?>
<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">

</head>
<?php global $lang; ?>
<?php include_once(get_theme_root().'/'.theme_name.'/languages/lang.php'); ?>
<body <?php body_class(); ?>>
<div id="page" class="hfeed">
  <header id="branding" role="banner">

    <div class="container">
      
      <div id="logo">
        <a href="<?php echo site_url; ?>" rel="home"><img src="<?php echo template_url; ?>/images/logo.svg" class="logo-site" alt="<?php echo site_name.' - '; bloginfo( 'description' ); ?>"/></a>
      </div>       

      <a class="bouton" href="https://www.agendaa2.fr/presentation/connexion.php" target="_blank">SE CONNECTER</a>

      

      
      
      <nav id="access" role="navigation" class="desktop">
        <div class="burger"></div>
        <?php if(get_the_ID()==24){
        	 ?>
        <?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
        <?php if (has_nav_menu('principalmenu')) { ?>
          <?php wp_nav_menu( array('menu' => 'Menu Principal' )); ?>
        <?php } ?>
        <?php }
        else
        {?>
			<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
	        <?php if (has_nav_menu('secondairemenu')) { ?>
	          <?php wp_nav_menu( array('menu' => 'Menu Secondaire' )); ?>
	        <?php } ?>
        <?php	} ?>
      </nav><!-- #access -->    

      <!-- <div class="recherche desktop">
        <?php //get_search_form(); ?>
      </div> -->
      
    </div>
      
  </header><!-- #branding -->

  <div id="main" class="page-<?php the_ID() ?>">