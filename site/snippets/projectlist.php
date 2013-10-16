<nav class="projects">
	<?php foreach($pages->children() as $child): ?>			
		<a<?php echo ($child->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $child->url() ?>"><?php echo $child->title() ?></a>	
	<?php endforeach ?>
</nav>