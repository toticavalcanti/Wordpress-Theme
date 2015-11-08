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

			<div id="top-header">

				<div id="top-header-content">

					<div id="header-paginas">
						 p&aacute;ginas do cabeçalho
					</div><!--/ endheader-paginas -->

					<div id="header-social">
						 Parte de redes sociais no cabe&ccedil;alho
					</div><!--/ end header-social -->

				</div><!--/ end top-header-content -->
				
			</div><!--/ end top-header -->

			<div id="header-content">
				
				<div id="logo">
					Logo
				</div><!--/ end logo -->

				<div id="login">
					Login
				</div><!--/ end login -->

				<div id="search">
					Barra de busca
				</div><!--/ end search -->

			</div><!--/ end header-content -->

			<div id="nav">

				<div id="nav-content">
					Barra de navega&ccedil;&atilde;o
				</div><!--/ end nav-content -->

			</div><!--/ end nav -->

		</div><!--/ end header -->