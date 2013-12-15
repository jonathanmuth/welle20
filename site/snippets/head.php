<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700' rel='stylesheet' type='text/css'>

  <?php echo css('assets/styles/styles.css') ?>
  <?php echo css('assets/styles/font-awesome.css') ?> 
  
  <?php echo js('assets/scripts/jquery-1.8.3.min.js') ?>
  <?php echo js('assets/scripts/jquery.jplayer.min.js') ?>
  
  <?php echo js('assets/scripts/scripts.js') ?>

</head>
