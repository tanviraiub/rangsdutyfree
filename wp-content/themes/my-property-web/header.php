<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta content="charset=utf-8" />
        <title><?php bloginfo('name'); ?></title>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!-- Demo CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/component.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!-- Modernizr -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
          <link href="css/ie8.css" rel="stylesheet" type="text/css" />
        <![endif]-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
         <?php wp_head(); ?>
    </head>
    <body class="loading">
        <div class="navbar-wrapper">
            <div class="container">
                <nav role="navigation" class="navbar navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="side">
                            <nav class="dr-menu dr-menu-open">
                                <div class="dr-trigger hidden-lg"><span class="dr-icon dr-icon-menu"></span><a class="dr-label"></a></div>
                                <ul class="nav navbar-nav">
                                    <li class="text-center"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""/></li>
                                    <li ><a href="#home" class="">home</a></li>
                                    <li><a href="#propertyInfo">Property Info</a></li>
                                    <li><a href="#location">Location</a></li>
                                    <li><a href="#weather">Weather</a></li>
                                    <li><a href="#neighbor">Neighbor</a></li>
                                    <li><a class="propertyInquiry" href="#propertyInquiry">Property Inquiry</a></li>
                                    <li class="powerdBy"><img src="<?php echo get_template_directory_uri(); ?>/images/menu-bottom-logo.png" alt="bottom logo" class="img-responsive" /></li>
                                </ul>

                            </nav>


                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </nav>
                <!--<nav class="navbar navbar-default navbar-fixed-top">
                  <div class="">
                    <div class="navbar-header">
                      <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                      <a href="#" class="navbar-brand"><img src="images/logo.png" width="254" height="103" alt=""/></a> </div>
                    <div class="navbar-collapse collapse" id="navbar" aria-expanded="false" style="height: 1px;">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">Property Info</a></li>
                        <li><a href="#contact">Location</a></li>
                        <li><a href="#contact">Weather</a></li>
                        <li><a href="#contact">Neighbor</a></li>
                        <li><a href="#contact">Property Inquiry</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>-->
            </div>
        </div>