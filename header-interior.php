<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="apple-touch-icon" href=" apple-touch-icon.png">
		<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.ico" type="image/x-icon" >
    <?php wp_head(); ?>

		<!-- Custom Fonts -->
		<link href="<?php bloginfo('template_url'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

		<!-- Slick Carousel -->
		<link href="<?php bloginfo('template_url'); ?>/vendor/slick/slick.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/vendor/slick/slick-theme.css" rel="stylesheet">

		<link href="<?php bloginfo('template_url'); ?>/css/marcelo.css" rel="stylesheet">
		<!-- HTML5 Shim y Respond.js IE8 soporte de elementos HTML5 y consultas de medios -->
		<!-- ADVERTENCIA: Respond.js no funciona si ve la página a través de archivo:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

	<!-- Navigation -->
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="nav-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<a class="" href="https://www.junaeb.cl/contralaobesidad/#LANZAMIENTO">
							<span class="logo-contrapeso"></span>
						</a>
					</div>
					<div class="col-md-4 col-xs-6">
						<a class="navbar-brand" href="/">
							<span class="logo"></span>
						</a>
					</div>
					<div class="hidden"></div>
					<div class="col-md-4">
						<div class="right-menu text-right">
							<?php /*wp_nav_menu( array(
				             'theme_location' => 'social_menu',
				             'menu_class' => 'social-menu',
				             'container'  => false,
				             'walker'     => new Bootstrap_Walker_Nav_Menu
				           ));*/ ?>
							<?php $facebook = get_field('facebook', 'options'); ?>
							<?php $twitter = get_field('twitter', 'options'); ?>
							<?php $youtube = get_field('youtube', 'options'); ?>
							<?php $ingreso = get_field('ingreso', 'options'); ?>
							<?php $recuperar = get_field('recuperar', 'options'); ?>
							<?php if ($facebook!=""): ?>
								<a href="<?php echo $facebook; ?>" class="social" target="_blank"><i class="fa fa-facebook"></i></a>
							<?php endif ?>
							<?php if ($twitter!=""): ?>
								<a href="<?php echo $twitter; ?>" class="social" target="_blank"><i class="fa fa-twitter"></i></a>
							<?php endif ?>
							<?php if ($youtube!=""): ?>
								<a href="<?php echo $youtube; ?>" class="social" target="_blank"><i class="fa fa-youtube-play"></i></a>
							<?php endif ?>
							<?php if (!wp_is_mobile()): ?>
								<?php if ($ingreso!=""): ?>
									<a href="<?php echo $ingreso; ?>" class="btn btn-round" data-toggle="modal" data-target=".modal-ingreso">ingresar</a>
								<?php endif ?>
								<div class="clearfix"></div>
								<?php if ($recuperar!=""): ?>
									<a href="<?php echo $recuperar; ?>" class="recovery-pass">Recuperar contraseña</a>
								<?php endif ?>
							<?php else: ?>								
								<a href="#" class="social" target="_blank"><i class="fa fa-user" aria-hidden="true"></i></a>					
							<?php endif ?>
						</div>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<div class="clearfix visible-xs"></div>
				</div>
			</div>
		</div>
		<div class="nav-bottom">
			<div class="container">
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-center navbar-main-collapse">
					<?php wp_nav_menu( array(
					'theme_location' => 'menu_interior',
					'menu_class' => 'nav navbar-nav',
					'depth'      => 3,
					'container'  => false,
					'walker'     => new Bootstrap_Walker_Nav_Menu
					)); ?>
				</div><!-- /.navbar-collapse -->
			</div>
		</div>
	</nav>

    <div id="main-container">
