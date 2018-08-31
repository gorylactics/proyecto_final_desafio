
<!-- footer -->
	<div class="container__fluid">
		<div class="row">
			<div class="footer">
			<div class="footer__rrss col-lg-12">
				
				<!-- de esta forma se llaman los iconos  -->
				<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
					<?php wp_nav_menu( array( 
						'theme_location' => 'footer-menu',
						'container_class' => 'header_menu'
					) ); ?>
				<?php } ?>

				<!-- <img  class="footer__rrss--tamano" src="<?#php bloginfo('template_url') ?>/assets/images/rrss/facebook-square-brands.svg" alt="facebook">
				<img class="footer__rrss--tamano" src="<?#php bloginfo('template_url') ?>/assets/images/rrss/instagram-brands.svg" alt="instagram">
				<a href="ubicacion.html">
					<img  class="footer__rrss--tamano" src="<?#php bloginfo('template_url') ?>/assets/images/rrss/map-marker-alt-solid.svg" alt="mapa">
				</a>
				<a href="contacto.html">
					<img  class="footer__rrss--tamano" src="<?#php bloginfo('template_url') ?>/assets/images/rrss/envelope-regular.svg" alt="email">
				</a>
				<a href="https://api.whatsapp.com/send?phone=56994708649">
					<img class="footer__rrss--tamano" src="<?#php bloginfo('template_url') ?>/assets/images/rrss/whatsapp-brands.svg" alt="whatsapp">
				<*!-- /de esta forma se llaman los iconos --*>	
				</a> -->
			</div>
		</div>
	</div>
</div>
<!-- /footer -->
<?php wp_footer() ?>
</body>
</html>