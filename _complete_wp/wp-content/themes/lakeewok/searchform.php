<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<div>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		<div id="searchsubmitContainer" style="background-image: url('<?php bloginfo('template_directory'); ?>/search.png');">
			<input type="submit" id="searchsubmit" value=""/>
		</div>
	</div>
</form>
