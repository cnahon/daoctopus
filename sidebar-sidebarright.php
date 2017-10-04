<div id="sidebarright"><!-- vous pourrez ainsi avoir une css spécifique pour cette sidebar -->
	<ul>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebarright')) : /* c'est ici que vous appelez la sidebar désirée */ ?>
		<?php endif;?>
	</ul>
</div>