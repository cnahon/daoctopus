<div class="bloc-texte-image bloc-contenu bloc-contenu">
	<div class="centrer">	
		<?php $image = get_sub_field( 'image' ); 

		//print_nice($image); ?>
		<?php if(get_sub_field( 'type' )=="image")
		{ ?>
			<div class="col-6 col <?php if(get_sub_field( 'emplacement_du_texte' )=='gauche'){ echo 'col-right'; } ?>">
				<div class="image-semi-full" style="background-image:url('<?php if ( $image ) { echo $image['sizes']['semi-full'];  } ?>');">
					
				</div>
			</div>
			<div class="col-5 col <?php if(get_sub_field( 'emplacement_du_texte' )=='droite'){ echo 'col-right'; } ?>">
				<?php the_sub_field( 'texte' ); ?>
				<?php include('bloc-call-to-action.php'); ?>
			</div>
		<?php	
		} 
		else
		{ ?>
			<div class="col-6 col <?php if(get_sub_field( 'emplacement_du_texte' )=='gauche'){ echo 'col-right'; } ?>">
				<?php the_sub_field( 'map' ); ?>
			</div>
			<div class="col-5 col <?php if(get_sub_field( 'emplacement_du_texte' )=='droite'){ echo 'col-right'; } ?>">
				<?php the_sub_field( 'texte' ); ?>
				<?php include('bloc-call-to-action.php'); ?>
			</div>
		<?php
		}
		?>
	</div>
</div>
