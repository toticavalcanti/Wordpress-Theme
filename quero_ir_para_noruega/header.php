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

			<ul class="menu"> <!-- Esse é o 1 nivel ou o nivel principal -->
			    <li><a href="#">MENU 1</a></li>
			    <li><a href="#">MENU 2</a>
			        <ul class="submenu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
			            <li><a href="#">Submenu 1</a></li>
			            <li><a href="#">Submenu 2</a></li>
			            <li><a href="#">Submenu 3</a>
			                     <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
			                            <li><a href="#">Submenu 4</a></li>
			                          <li><a href="#">Submenu 5</a></li>
			                        <li><a href="#">Submenu 6</a>
			                                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
			                                                <li><a href="#">Submenu 7</a></li>
			                                              <li><a href="#">Submenu 8</a></li>
			                                            <li><a href="#">Submenu 9</a></li>
			                                    </ul>
			                        </li>
			                    </ul>
			             </li>
			        </ul>
			    </li>
			    <li><a href="#">MENU 3</a></li>
			    <li><a href="#">MENU 4</a></li>
			    <li><a href="#">MENU 5</a></li>
			</ul>

		</div><!--/ fim header -->