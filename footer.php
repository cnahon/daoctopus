<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
global $lang;

?>
</div><!-- #main -->



	<footer id="colophon" class="contenu style-blanc" role="contentinfo">

		<div class="container">

			
			<div class="col col-5">
				
			</div>
			<div class="col col-2">
				

			</div>
			<div class="col col-5 align-right">
				
				<p class=" ">©<?php echo date('Y'); ?> <?php echo site_name; ?></p>
			</div>
		</div>

		<div id="back_to_top">TOP</div>
			
	</footer><!-- #colophon -->

</div><!-- #page -->


<div class="erreur-js">
	<div class="champ-obligatoire">Veuillez remplir tous les champs obligatoires.</div>
	<div class="email-erreur">L'email est invalide.</div>
</div>


<?php wp_footer(); ?>

</body>
</html>