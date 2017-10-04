<div class="bloc-debut-page">
	<?php if (function_exists('mybread') and get_sub_field( 'fil_dariane' )=='oui') mybread();	?>
	<h1><?php the_sub_field( 'titre' ); ?></h1>
	<?php the_sub_field( 'texte' ); ?>	
</div>