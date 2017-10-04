<div class="bloc-contact content-bleu-clair" id="">



<form action="<?php the_sub_field( 'page_merci' ); ?>" method="POST" id="<?php the_sub_field( 'id_formulaire' ); ?>" class="formulaire-contact">
<?php if ( have_rows( 'liste_champ_formulaire' ) ) : 
	$class_form=""; 
	$old_class_form=""; 


	$js_champ =array();
	$js_checkbox =array();
	$js_champ_obligatoire =array();
	$js_mail=array();

	?>
	<?php while ( have_rows( 'liste_champ_formulaire' ) ) : the_row(); ?>
		<?php 
		$varclass="";
		$class_form=get_sub_field( 'colonne' );
		if($class_form!=$old_class_form)
		{
			if($old_class_form!='')
			{
				echo '</div>';
			}
			$old_class_form=$class_form;
			echo '<div class="col '.$class_form.'">';
		}

		

		switch (get_sub_field( 'type_de_champ' )) {
		case 'text':
			?>
		     <div class="input-bloc">
				<input type="text" name="<?php the_sub_field( 'slug_du_champ' ); ?>" id="<?php the_sub_field( 'slug_du_champ' ); ?>">
				<label for=""><?php the_sub_field( 'nom_du_champ' ); echo (get_sub_field( 'obligatoire' )=="oui"?'*':''); ?></label>
			</div>
			<?php

			$js_champ[]=get_sub_field( 'slug_du_champ' );
			if(get_sub_field( 'obligatoire' )=="oui")
			{
				$js_champ_obligatoire[]=get_sub_field( 'slug_du_champ' );
			}

		     break;
		case 'email':
		     ?>
		     <div class="input-bloc">
				<input type="text" name="<?php the_sub_field( 'slug_du_champ' ); ?>" id="<?php the_sub_field( 'slug_du_champ' ); ?>">
				<label for=""><?php the_sub_field( 'nom_du_champ' ); echo (get_sub_field( 'obligatoire' )=="oui"?'*':''); ?></label>
			</div>
			<?php

			$js_champ[]=get_sub_field( 'slug_du_champ' );
			$js_mail[]=get_sub_field( 'slug_du_champ' );
			if(get_sub_field( 'obligatoire' )=="oui")
			{
				$js_champ_obligatoire[]=get_sub_field( 'slug_du_champ' );
			}
		     break;
		case 'select':
		     ?>
		     
			<div class="input-bloc select-bloc">
					<select name="<?php the_sub_field( 'slug_du_champ' ); ?>" id="<?php the_sub_field( 'slug_du_champ' ); ?>">
						<option value=""><?php the_sub_field( 'nom_du_champ' ); ?></option>
						<?php if ( have_rows( 'liste_de_valeurs' ) ) : 
							$varlistedonnees=""; ?>
							<?php while ( have_rows( 'liste_de_valeurs' ) ) : the_row(); ?>
								
								<option value="<?php the_sub_field( 'valeur' ); ?>"><?php the_sub_field( 'valeur' ); ?></option>
								<?php 
								$varlistedonnees.='<div class="val" data-val="'.get_sub_field( 'valeur' ).'">'.get_sub_field( 'valeur' ).'</div>';
								 ?>
							<?php endwhile; ?>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>
					</select>
					<div class="selecteur selecteur-<?php the_sub_field( 'slug_du_champ' ); ?>" data-input="<?php the_sub_field( 'slug_du_champ' ); ?>">
						<div class="affichage-selecteur"><?php the_sub_field( 'nom_du_champ' ); echo (get_sub_field( 'obligatoire' )=="oui"?'*':''); ?></div>
						<div class="liste-val">
							<div class="val" data-val=""><?php the_sub_field( 'nom_du_champ' ); ?></div>
							<?php echo $varlistedonnees; ?>
						</div>
					</div>
				</div>
			<?php

			$js_champ[]=get_sub_field( 'slug_du_champ' );
			if(get_sub_field( 'obligatoire' )=="oui")
			{
				$js_champ_obligatoire[]=get_sub_field( 'slug_du_champ' );
			}
		     break;
		case 'checkbox':
		     ?>
		     
			<div class="input-list checkbox-bloc">
				<label for=""><?php the_sub_field( 'nom_du_champ' ); echo (get_sub_field( 'obligatoire' )=="oui"?'*':''); ?></label>
				<div class="liste-input">
					<?php 
					$name= get_sub_field( 'slug_du_champ' ); 
					if ( have_rows( 'liste_de_valeurs' ) ) : 
						$compteur_champ=0; 
						 ?>
						<?php while ( have_rows( 'liste_de_valeurs' ) ) : the_row(); ?>
							<div class="bloc-valeur">
								<input type="checkbox" name="<?php echo $name; ?>[]" id="" value="<?php the_sub_field( 'valeur' ); ?>"><label for="<?php echo $name.'-'.$compteur_champ; ?>"><?php the_sub_field( 'valeur' ); ?></label>
							</div>
							
							<?php
							$compteur_champ++;
						 endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
				</div>
			</div>
			<?php

			$js_champ[]=get_sub_field( 'slug_du_champ' );
			$js_checkbox[]=get_sub_field( 'slug_du_champ' );
			if(get_sub_field( 'obligatoire' )=="oui")
			{
				$js_champ_obligatoire[]=get_sub_field( 'slug_du_champ' );
			}
		     break;
		case 'radio':
		     ?>
		     
			<div class="input-list radio-bloc">
				<label for=""><?php the_sub_field( 'nom_du_champ' ); echo (get_sub_field( 'obligatoire' )=="oui"?'*':''); ?></label>
				<div class="liste-input">
					<?php if ( have_rows( 'liste_de_valeurs' ) ) : 
						$compteur_champ=0; 
						$name= get_sub_field( 'slug_du_champ' ); ?>
						<?php while ( have_rows( 'liste_de_valeurs' ) ) : the_row(); ?>
							<div class="bloc-valeur">
								<input type="radio" name="<?php echo $name; ?>" id="" value="<?php the_sub_field( 'valeur' ); ?>"><label for="<?php echo $name.'-'.$compteur_champ; ?>"><?php the_sub_field( 'valeur' ); ?></label>
							</div>
							
							<?php
							$compteur_champ++;
						 endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
				</div>
			</div>
			<?php

			$js_champ[]=get_sub_field( 'slug_du_champ' );
			if(get_sub_field( 'obligatoire' )=="oui")
			{
				$js_champ_obligatoire[]=get_sub_field( 'slug_du_champ' );
			}
		     break;
		case 'textarea':
		     ?>
		     <div class="textarea-bloc">
		     	<textarea name="<?php the_sub_field( 'slug_du_champ' ); ?>" id="<?php the_sub_field( 'slug_du_champ' ); ?>" ></textarea>
				<label for=""><?php the_sub_field( 'nom_du_champ' ); echo (get_sub_field( 'obligatoire' )=="oui"?'*':''); ?></label>
			</div>
			<?php

			$js_champ[]=get_sub_field( 'slug_du_champ' );
			if(get_sub_field( 'obligatoire' )=="oui")
			{
				$js_champ_obligatoire[]=get_sub_field( 'slug_du_champ' );
			}

		     break;
		}

		 ?>

		
		
		
		
		<?php  ?>
		<?php  ?>
	<?php endwhile; ?>
		<div class="align-center">					
			<div class="envoyer bouton" data-id="<?php the_sub_field( 'id_formulaire' ); ?>"><?php the_sub_field( 'titre_bouton' ); ?></div>
		</div>
	</div>
	<input type="hidden" name="validation-formulaire" value="non">
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

	<input type="hidden" name="js_champ" value="<?php 

	$compteur=0;
	while($compteur<count($js_champ))
	{	
		if($compteur>0)
		{
			echo '%';
		}

		echo $js_champ[$compteur];

		$compteur++;
	}

	 ?>">

	<input type="hidden" name="js_checkbox" value="<?php 

	$compteur=0;
	while($compteur<count($js_checkbox))
	{	
		if($compteur>0)
		{
			echo '%';
		}

		echo $js_checkbox[$compteur];

		$compteur++;
	}

	 ?>">

	<input type="hidden" name="js_champ_obligatoire" value="<?php 

	$compteur=0;
	while($compteur<count($js_champ_obligatoire))
	{	
		if($compteur>0)
		{
			echo '%';
		}

		echo $js_champ_obligatoire[$compteur];

		$compteur++;
	}

	 ?>">

	<input type="hidden" name="js_mail" value="<?php 

	$compteur=0;
	while($compteur<count($js_mail))
	{	
		if($compteur>0)
		{
			echo '%';
		}

		echo $js_mail[$compteur];

		$compteur++;
	}

	 ?>">

	<input type="hidden" name="id_page" value="<?php echo get_the_ID(); ?>">
</form>
	

	
</div>
