<!DOCTYPE html>
<html <?php language_attributes('pt-br') ?> >
	<head>
		<meta charset="<?php bloginfo('charset') ?>" />
		<title><?php wp_title('-', true, 'right'); bloginfo() ?></title>
		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />
	
	<?php wp_head(); ?>
	</head>

	<body>
		<div id="header">

			<div id="header-superior">

				<div id="header-superior-content">

					<div id="header-paginas">
					
						 <ul>
						 	<li><a href="#">Home</a></li>
						 	<li><a href="#">Arquivos</a></li>
						 	<li><a href="#">Sobre N&oacute;s</a></li>
						 	<li><a href="#">Servi&ccedil;os</a></li>
						 	<li><a href="#">Contato</a></li>
						 </ul>

					</div><!--/ fim header-paginas -->

					<div id="header-social">
					
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon-face.jpg" rel="" title=""/></a>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon-google.jpg" rel="" title=""/></a>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.jpg" rel="" title=""/></a>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon-youtube.jpg" rel="" title=""/></a>

					</div><!--/ fim header-social -->

				</div><!--/ fim header-superior-content -->
				
			</div><!--/ fim header-superiorr -->

			<div id="header-content">
				
				<div id="logo">
					Logo
				</div><!--/ fim logo -->

				<div id="search">
					Barra de busca
				</div><!--/ fim search -->

				<div id="login">
					Login
				</div><!--/ fim login -->

			</div><!--/ fim header-content -->

			<div id="nav">

				<div id="nav-content">
					Barra de navega&ccedil;&atilde;o
				</div><!--/ end nav-content -->

			</div><!--/ end nav -->

		</div><!--/ end header -->