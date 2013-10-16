<?php snippet('header') ?>

<section class="content">
  <article>
	  <h3 class="project-title"><?php echo html($page->title()) ?></h3>
    <h2 class="intro"><?php echo kirbytext($page->intro()) ?></h2>
    <?php echo kirbytext($page->text()) ?>
  </article>
</section>

<section class="projectlist">
	<?php snippet('menu') ?>
	<?php snippet('rik') ?>	
	<?php snippet('submenu') ?>
</section>

<?php snippet('footer') ?>