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

		<div id="container">
			
			<div id="content">
				<div id="destaque">Destaque</div>
				<div id="viagens">Viagens</div><!--/ end viagens-->
				<div id="idioma">Idioma</div><!--/ end idioma-->
				<div id="cultura">Cultura</div><!--/ end cultura-->
				<div id="educacao">Educa&ccedil;&atilde;o</div><!--/ end educacao-->
				<div id="videos">V&iacute;deos</div><!--/ end videos-->
				<div id="anuncie">Anuncie</div><!--/ end anuncie-->

			</div><!--/ end content -->

		<div id="sidebar">
			
			<div id="sidebar-vistos">
				mais sistos
			</div><!--fim sidebar-vistos -->

			<div id="sidebar-colunistas">
				sidebar colunistas
			</div><!--fim sidebar-vistos -->

			<div id="sidebar-publi">
				publicidades
			</div><!--fim sidebar-publi -->

			<div id="sidebar-coment">
				mais comentados
			</div><!--fim sidebar-coment -->

			<div id="sidebar-facebook">
				facebook
			</div><!--fim sidebar-facebook -->

		</div><!--fim side-bar-->

		</div><!--/ end container -->

		<div="footer">
			
			<div id="footer-content">
				
				<div id="footer-sobre">
					sobre n&oacute;s
				</div><!--fim footer-sobre-->

				<div id="footer-paginas">
					p&aacute;ginas
				</div><!--fim footer-paginas-->

				<div id="footer-recentes">
					posts recentes
				</div><!--fim footer-recentes-->

			</div><!--fim footer-content-->

		<div id="footer-info">
			footer info
		</div><!--fim footer-info-->

		</div><!--/ end footer -->

	<?php wp_footer(); ?>
	</body>

</html>