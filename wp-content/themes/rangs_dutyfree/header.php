<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<title><?php bloginfo('name'); ?></title>

<!-- CSS -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

<!-- Favicons -->
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/icon/apple-touch-icon.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/icon/favicon.ico">
<?php wp_head(); ?>
</head>
<body>
<div class="wrap">
<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a> 

<!-- Docs master nav -->
<header class="navbar navbar-default navbar-fixed-top single-page-nav" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="<?php bloginfo('home') ?>" class="navbar-brand"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/logo-rangs-duty-free.png" alt="Rangs duty free"/></a> </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
    <ul class="nav navbar-nav">
        <li><a class="current" href="#home">Home</a></li>
        <li><a href="#stores">Stores</a></li>
        <li><a href="#operations">Operations</a></li>
        <li><a href="#company">Company</a></li>
        <li><a href="#faqs">FAQ&#8217;s</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul> 
<!--    <ul class="nav navbar-nav">
        <li><?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?><li>
        
    </ul>-->
	  
    </nav>
  </div>
</header>