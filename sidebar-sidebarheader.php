<div id="sidebarheader"><!-- vous pourrez ainsi avoir une css spécifique pour cette sidebar -->
	<ul>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebarheader')) : /* c'est ici que vous appelez la sidebar désirée */ ?>
		<?php endif;?>
	</ul>
</div>