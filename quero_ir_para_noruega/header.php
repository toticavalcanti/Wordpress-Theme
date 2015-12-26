<!DOCTYPE html>
<html <?php language_attributes('pt-br') ?> >
	<head>
		<meta charset="<?php bloginfo('charset') ?>" />
		<title><?php wp_title('-', true, 'right'); bloginfo() ?></title>
		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />
	
	<?php wp_head(); ?>
	</head>

	<body>

		<!--/*<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>-->
		
		<header>

			<div id="header-superior">

				<div id="header-superior-content">

					<nav id="header-paginas">
					
						 <ul> <!--quando o usuário clica no link "home" é direcionado para página home-->
						 	
						 	<!--Pega a lista de páginas criadas no painel do wordpress e lista-->
						 	<?php wp_nav_menu( array( 'theme_location' => 'topo_menu' ) ); ?>		 	
						 </ul>

					</nav><!--/ fim header-paginas -->

					<nav id="header-social">
					
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon-face.jpg" rel="" title=""/></a>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon-google.jpg" rel="" title=""/></a>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.jpg" rel="" title=""/></a>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icon-youtube.jpg" rel="" title=""/></a>

					</nav><!--/ fim header-social -->

				</div><!--/ fim header-superior-content -->
				
			</div><!--/ fim header-superiorr -->

			<div id="header-content">
				
				<div id="logo">
					<a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" rel="" title="" /></a>
				</div><!--/ fim logo -->

				<section id="search">
					
					<form action="" method="post">
						<input type="text" name="" placehold="Digite sua pesquisa">
						<input type="submit" value="" class="btn-search" name="">
					</form>

				</section><!--/ fim search -->


				<section id="login">
						
					<ul><!--Quando o usuário clica no login, é redirecionado para wp-admin-->
						<li class="logar"><a href="http://localhost/wordpress/wp-admin">Login</a></li>
						<!--Ao clicar em registre a actio-->
						<li class="registre"><a href="http://localhost/wordpress/wp-login.php?action=register">Registre-se</a></li>
					</ul>

				</section><!--/ fim login -->

			</div><!--/ fim header-content -->

			<nav class="menu"> <!-- Esse é o 1 nivel ou o nivel principal -->
				<div id="categorias">
					<?php wp_nav_menu( array( 'theme_location' => 'ID_DO_MENU', 'menu_class' => 'nav-menu' ) ); ?>		
				</div>
			</nav>

		</header><!--/ fim header -->