<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700' rel='stylesheet' type='text/css'>

  <?php echo css('assets/styles/styles.css') ?>
  <?php echo css('assets/styles/font-awesome.css') ?> 
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <!-- jQuery ScrollTo Plugin -->
  <script src="//balupton.github.io/jquery-scrollto/lib/jquery-scrollto.js"></script>
  
  <!-- History.js -->
  <script src="//browserstate.github.io/history.js/scripts/bundled/html4+html5/jquery.history.js"></script>
  
  <!-- Ajaxify -->
  <script src="//rawgithub.com/browserstate/ajaxify/master/ajaxify-html5.js"></script>
  
  <?php echo js('assets/scripts/jquery.jplayer.min.js') ?>
  <?php echo js('assets/scripts/jquery.jquery.ba-hashchange.min.js') ?>
  <?php echo js('assets/scripts/scripts.js') ?>

</head>
