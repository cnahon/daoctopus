<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 */



	if(isset($_POST['validation-formulaire']) and $_POST['validation-formulaire']=="oui")
	{
		
		$to    = "cyril@agencelespirates.com";
		$id_form = "contact";

		if ( have_rows( 'liste_de_contenus', $_POST['id_page'] ) ) : 
			while ( have_rows( 'liste_de_contenus', $_POST['id_page'] ) ) : the_row(); 
				if ( have_rows( 'liste_de_modules' ) ): 
					while ( have_rows( 'liste_de_modules' ) ) : the_row();
						if ( get_row_layout() == 'contact' ) : 
							$to = get_sub_field('emails_de_contact');
							$id_form = get_sub_field('id_formulaire');
						endif;
					endwhile; 
				endif; 
			endwhile; 
		endif;
		
		    
		$fichier_csv='wp-content/themes/Octopus/csv/'.$id_form.'.csv'; 
		
		$data = array();

		$sousdata=array(date('H:i:s d/m/Y'));

		$mail="";

		foreach ($_POST as $indice => $element) {
			if(!in_array($indice, array("js_champ", "js_checkbox", "js_champ_obligatoire", "js_mail", "id_page", "validation-formulaire")))
			{
				if(is_array($element))
				{
					$vartemparray ="";
					foreach ($element as $sousindice => $souselement) {
						if($sousindice>0)
						{
							$vartemparray.=", ";
						}
						$vartemparray.=$souselement;
					}
					$_POST[$indice]=$vartemparray;
					$sousdata[]=$vartemparray;	
				}
				else
				{
					$sousdata[]=$element;
				}

				$mail.='<b>'.ucfirst($indice).'</b> : '.$_POST[$indice].'<br/>';
			}
		 }

		// print_nice($_POST);	

		// print_nice($sousdata);

		$data[]=$sousdata;


		$fp = fopen($fichier_csv, 'a+');
		foreach ($data as $fields) {
		    fputcsv($fp, $fields, ',', '"');
		}

		if(isset($_POST['email']))
		{
			$email_reply = $_POST['email'];
		}
		else
		{
			$email_reply = "contact@agencelespirates.com";
		}


		

		$from = site_url;
		$from = str_replace('http://', '', $from);
		$from = str_replace('https://', '', $from);
		$from = str_replace('www.', '', $from);
		$from = str_replace('/', '', $from);


		$from  = "contact@".$from;  // adresse MAIL OVH liée à ton hébergement.

		// *** Laisser tel quel

		// $JOUR  = date("Y-m-d");
		// $HEURE = date("H:i");

		$Subject = "[".site_name."] Formulaire $id_form";

		$mail_Data = "";
		$mail_Data .= " \n";
		$mail_Data .= " \n";
		$mail_Data .= " \n";
		$mail_Data .= " \n";
		$mail_Data .= " \n";

		$mail_Data .= '<h1>Demande de contact</h1>

		
		'.$mail.'
		
		';
		$mail_Data .= "
		\n";
		$mail_Data .= " \n";
		$mail_Data .= " \n";

		$headers  = "MIME-Version: 1.0 \n";
		$headers .= "Content-type: text/html; charset=utf-8 \n";
		$headers .= "From: $from  \n";
		$headers .= "Disposition-Notification-To: $from  \n";

		// Message de Priorité haute
		// -------------------------
		$headers .= "X-Priority: 1  \n";
		$headers .= "X-MSMail-Priority: High \n";

		$CR_Mail = TRUE;

		$CR_Mail = @mail ($to, $Subject, $mail_Data, $headers);

		if ($CR_Mail === FALSE)   echo "<!-- ### CR_Mail=$CR_Mail - Erreur envoi mail -->
		\n";
		else                      echo "<!-- *** CR_Mail=$CR_Mail - Mail envoyé -->
		\n";  

		$CR_Mail = @mail ('cyril@agencelespirates.com', $Subject, $mail_Data, $headers);

		if ($CR_Mail === FALSE)   echo "<!-- ### CR_Mail=$CR_Mail - Erreur envoi mail -->
		\n";
		else                      echo "<!-- *** CR_Mail=$CR_Mail - Mail envoyé -->
		\n";  




		
	}

get_header(); ?>



<?php

$css_du_contenu="";
$compteurbloc=1;

 if ( have_rows( 'liste_de_contenus' ) ) : ?>
	<?php while ( have_rows( 'liste_de_contenus' ) ) : the_row(); ?>
		<?php 

		$colonne_class = array('1'=>'12', '2'=>'6', '3'=>'4', '4'=>'3','6'=>'2', 'full'=>'full');

		$nombre_de_colonne = get_sub_field( 'nombre_de_colonne' );
		$slideshow = get_sub_field( 'slideshow' );


		$id = get_sub_field( 'id' );
		$css_personnalise = get_sub_field( 'css_personnalise' );
		$classes_personnalisee = get_sub_field( 'classes_personnalisee' );
		$css_du_contenu .='
		'.get_sub_field( 'css_du_contenu' );
		$couleur_de_fond = get_sub_field( 'couleur_de_fond' );
		$hauteur_fixe = get_sub_field( 'hauteur_fixe' );

		$classes="";
		$classes_array = get_sub_field( 'classes' ); 
		if ( $classes_array ): 
			foreach ( $classes_array as $classes_item ): 
			 	$classes .= $classes_item.' '; 
			endforeach; 
		 endif; 
		
		$classslide="nope";
		if($slideshow=="oui")
		{
			$classslide='sliderslick slickslideshow';
		}

		$image_de_fond = get_sub_field( 'image_de_fond' ); 
		

		?>



		
		<div id="<?php echo $id; ?>" class="wow contenu-<?php echo $compteurbloc; ?> <?php if($nombre_de_colonne=="full"){ echo $classslide.$colonne_class[$nombre_de_colonne]; } ?> contenu <?php if($nombre_de_colonne=="full"){ echo ' contenu-full '; } ?> <?php echo $classes.$classes_personnalisee; ?> style-<?php the_sub_field( 'style' ); ?> fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s" style="<?php if($hauteur_fixe){ echo 'height: '.$hauteur_fixe.'px;'; } ?><?php if($couleur_de_fond){ echo 'background-color: '.$couleur_de_fond.';'; } ?><?php if ( $image_de_fond ) { echo 'background-image:url(\''.$image_de_fond['sizes']['full'].'\');'; } ?>">

		<div class="top-masque"></div>

		<?php if(($nombre_de_colonne!="full" and $slideshow=="non") or ($slideshow=="oui" and $nombre_de_colonne!='1' and $nombre_de_colonne!='full')){ ?>
			<div class="centrer <?php echo $classslide.$colonne_class[$nombre_de_colonne]; ?>">
		<?php }
			elseif ($slideshow=="oui" and $nombre_de_colonne=='1') {
			 	?>
			<div class="<?php echo $classslide.$colonne_class[$nombre_de_colonne]; ?>">
			 	<?php
			 } ?>
		
			<?php if ( have_rows( 'liste_de_modules' ) ): ?>
				<?php while ( have_rows( 'liste_de_modules' ) ) : the_row(); ?>

					<?php if($slideshow=="oui" and $nombre_de_colonne=='1'){ ?>
						
							<div style="<?php $image_de_fond = get_sub_field( 'image_de_fond' );  if ( $image_de_fond ) { echo 'background-image:url(\''.$image_de_fond['sizes']['full'].'\');'; } ?>">
								<div class="centrer">
					<?php } ?>
					

					<?php if($nombre_de_colonne!="full"){ 
						
						if(get_sub_field( 'largeur_personnalisee' ) and get_sub_field( 'largeur_personnalisee' )=='oui')
						{
							$varcol = get_sub_field( 'largeur' );
						}
						else
						{
							$varcol='col-'.$colonne_class[$nombre_de_colonne];
						}

						?>
						<div class="col <?php echo $varcol; ?>">
					<?php }
					else { ?> 
						<div class="col-full">
					<?php } ?>


						<?php if ( get_row_layout() == 'bloc_debut_page' ) : ?>
							<?php include('blocs/bloc-debut-page.php'); ?>
						<?php elseif ( get_row_layout() == 'texte' ) : ?>

							<?php include('blocs/bloc-texte.php'); ?>
						<?php elseif ( get_row_layout() == 'texte_+_imagemap' ) : ?>
							<?php include('blocs/bloc-texte-imagemap.php'); ?>
						<?php elseif ( get_row_layout() == 'image' ) : ?>
							<?php include('blocs/bloc-image.php'); ?>
						<?php elseif ( get_row_layout() == 'map' ) : ?>
							<?php include('blocs/bloc-map.php'); ?>
						<?php elseif ( get_row_layout() == 'onglets' ) : ?>
							<?php if ( have_rows( 'liste_onglets' ) ) : ?>
								<?php while ( have_rows( 'liste_onglets' ) ) : the_row(); ?>
									<?php the_sub_field( 'titre' ); ?>
									<?php the_sub_field( 'texte' ); ?>
									<?php the_sub_field( 'call_to_action_call_to_action' ); ?>
									<?php the_sub_field( 'call_to_action_type_call_to_action' ); ?>
									<?php the_sub_field( 'call_to_action_lien_call_to_action_interne' ); ?>
									<?php the_sub_field( 'call_to_action_lien_call_to_action_externe' ); ?>
									<?php $lien_call_to_action_categorie_ids = get_sub_field( 'call_to_action_lien_call_to_action_categorie' ); ?>
									<?php // var_dump( $lien_call_to_action_categorie_ids ); ?>
									<?php the_sub_field( 'call_to_action_titre_call_to_action' ); ?>
								<?php endwhile; ?>
							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>
						<?php elseif ( get_row_layout() == 'accordeons' ) : ?>
							<?php if ( have_rows( 'liste_accordeons' ) ) : ?>
								<?php while ( have_rows( 'liste_accordeons' ) ) : the_row(); ?>
									<?php the_sub_field( 'titre' ); ?>
									<?php the_sub_field( 'texte' ); ?>
									<?php the_sub_field( 'call_to_action_call_to_action' ); ?>
									<?php the_sub_field( 'call_to_action_type_call_to_action' ); ?>
									<?php the_sub_field( 'call_to_action_lien_call_to_action_interne' ); ?>
									<?php the_sub_field( 'call_to_action_lien_call_to_action_externe' ); ?>
									<?php $lien_call_to_action_categorie_ids = get_sub_field( 'call_to_action_lien_call_to_action_categorie' ); ?>
									<?php // var_dump( $lien_call_to_action_categorie_ids ); ?>
									<?php the_sub_field( 'call_to_action_titre_call_to_action' ); ?>
								<?php endwhile; ?>
							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>
						<?php elseif ( get_row_layout() == 'listing' ) : ?>
							<?php include('blocs/bloc-listing.php'); ?>
						<?php elseif ( get_row_layout() == 'tableau' ) : ?>
						<?php elseif ( get_row_layout() == 'masonry' ) : ?>
						<?php elseif ( get_row_layout() == 'contact' ) : ?>
							<?php include('blocs/bloc-contact.php'); ?>
						<?php endif; ?>
						
					</div>
					
					<?php if($slideshow=="oui" and $nombre_de_colonne=='1'){ ?>
								</div>
							</div>
					<?php } ?>

				<?php endwhile; ?>
			<?php else: ?>
				<?php // no layouts found ?>
			<?php endif; ?>

		<?php if(($nombre_de_colonne!="full" and $slideshow=="non") or ($slideshow=="oui" and $nombre_de_colonne!='1' and $nombre_de_colonne!='full')){ ?>
			</div>
		<?php }
		elseif ($slideshow=="oui" and $nombre_de_colonne=='1') {
			 	?>
			</div>
			 	<?php
			 } ?>
			<div class="bottom-masque"></div>
		</div>
		
	<?php
	$compteurbloc++;
	 endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>




<style>
	<?php echo $css_du_contenu; ?>
</style>
<?php get_footer(); ?>