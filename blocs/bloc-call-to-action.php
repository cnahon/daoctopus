<?php if ( have_rows( 'liste_call_to_action' ) ) : ?>
	<div class="clear"></div>

	<?php while ( have_rows( 'liste_call_to_action' ) ) : the_row(); ?>

		<?php 
			$url='';
			$target='';
			$titre = get_sub_field('call_to_action_titre_call_to_action');

			if(get_sub_field('call_to_action_type_call_to_action')=='page-article-media')
			{
				$url=get_sub_field('call_to_action_lien_call_to_action_interne');
			}
			elseif(get_sub_field('call_to_action_type_call_to_action')=='categorie')
			{
				$url= get_category_link( get_sub_field('call_to_action_lien_call_to_action_categorie'));
			}
			elseif(get_sub_field('call_to_action_type_call_to_action')=='externe')
			{
				$url=get_sub_field('call_to_action_lien_call_to_action_externe');
				$target='_blank';
			}

			?>
			
			<a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="bouton call-to-action call-to-action-<?php the_sub_field( 'modele_call_to_action' ); ?>"><?php echo $titre; ?></a>
		
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>