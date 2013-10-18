<?php 

// find the open/active page on the first level
$open  = $pages->findOpen();
$items = ($open) ? $open->children()->visible() : false; 

?>
<?php if($items && $items->count()): ?>
<nav class="submenu">
    <?php foreach($items AS $item): ?>
			<a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a><hr>
    <?php endforeach ?>            
</nav>
<?php endif ?>