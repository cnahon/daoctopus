<div class="bloc-texte bloc-contenu" style="<?php $image_de_fond = get_sub_field( 'image_de_fond' );  if ($nombre_de_colonne=='full' and $image_de_fond ) { echo 'background-image:url(\''.$image_de_fond['sizes']['full'].'\');'; } ?>">
	<?php the_sub_field( 'texte' ); ?>
	
	<?php include('bloc-call-to-action.php'); ?>
</div>