<?php snippet('header') ?>

<div class="container">
	<div class="row">
		<section class="content">
			<article>
				<h3 class="project-title"><?php echo html($page->title()) ?></h3>
				<h2 class="intro"><?php echo html($page->intro()) ?></h2>
				<?php echo kirbytext($page->text()) ?>
			</article>
		</section>
	</div>
</div>

<div class="gradient">
	<div class="container">
		<div class="row">
			<?php snippet('menu') ?>

			<?php snippet('rik') ?>
			
			<?php snippet('submenu') ?>
			
			<?php snippet('footer') ?>
		</div>
	</div>
</div>
