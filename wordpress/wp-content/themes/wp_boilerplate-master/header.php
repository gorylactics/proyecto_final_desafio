<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

<!-- navbar -->
	<div class="container__fluid">
		<div class="row">
			<div class="navbar">
				<div class="navbar__logo ">
					<a href="inicio">
						<img id="logoanimado" src="<?php bloginfo('template_url') ?>/assets/images/navbar/personaje.svg" alt="">
						<img class="navbar__logo--tamaño" src="<?php bloginfo('template_url') ?>/assets/images/inicio/logo2.png" alt="admira">
					</a>
				</div>
				<div>
					<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
						<?php wp_nav_menu( array( 
							'theme_location'	=> 'header-menu',
							'container'			=> null,
							'menu_class'		=> 'navbar__elementos',

						) ); ?>
					<?php } ?>
				</div>
				</div>
			</div>
		</div>
<!-- /navbar -->