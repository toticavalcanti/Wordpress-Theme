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
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" rel="" title="" /></a>
				</div><!--/ fim logo -->

				<div id="search">
					
					<form action="" method="post">
						<input type="text" name="">
						<input type="submit" value="" class="btn-search" name="">
					</form>

				</div><!--/ fim search -->


				<div id="login">
						
					<ul>
						<li class="logar"><a href="">Login</a></li>
						<li class="registre"><a href="">Registre-se</a></li>
					</ul>

				</div><!--/ fim login -->

			</div><!--/ fim header-content -->

			<div id="nav">

				<div id="nav-content">
					
					<ul>
						<li><a href="#">VIAGENS</a>

							<ul>
								<li><a href="#">Oslo</a></li>
								<li><a href="#">Rogaland</a></li>
								<li><a href="#">Hordaland</a></li>
								<li><a href="#">Sogn og Fjordane</a></li>
								<li><a href="#">M&oslash;re og romsdal</a></li>
							</ul>

						</li>
						<li><a href="#">IDIOMA</a></li>
						<li><a href="#">CULTURA</a></li>
						<li><a href="#">V&Iacute;DEOS</a></li>
						<li><a href="#">ANUNCIE</a></li>
					</ul>

				</div><!--/ end nav-content -->

			</div><!--/ end nav -->

		</div><!--/ end header -->