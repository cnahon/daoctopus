<div id="sidebarbottomlevel1"><!-- vous pourrez ainsi avoir une css spécifique pour cette sidebar -->
	<ul>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebarbottomlevel1')) : /* c'est ici que vous appelez la sidebar désirée */ ?>
		<?php endif;?>
	</ul>
</div>