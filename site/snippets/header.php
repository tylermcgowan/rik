<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?>&thinsp;&mdash;&thinsp;<?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="author" content="<?php echo html($site->author()) ?>">
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

  <?php echo css('assets/styles/styles.css') ?>

</head>

<body>
  <header>
    <?php snippet('menu') ?>
  </header>