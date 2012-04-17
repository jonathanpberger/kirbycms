<!DOCTYPE html>
<html lang="en">
<head>
	
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Tinos:400,400italic|Maven+Pro' rel='stylesheet' type='text/css'>
	
  <?php echo css('assets/styles/carousel.css') ?>

  <?php echo js('http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js') ?>
  <?php echo js('assets/js/bootstrap-transition.js') ?>
  <?php echo js('assets/js/bootstrap-carousel.js') ?>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="apple-touch-icon" href="<?php echo u('assets/images/apple-touch-icon.png') ?>" />

  <?php echo css('assets/styles/styles.css') ?>

</head>

<body>

  <header>
    <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo h($site->title()) ?>" /></a></h1>
  </header>