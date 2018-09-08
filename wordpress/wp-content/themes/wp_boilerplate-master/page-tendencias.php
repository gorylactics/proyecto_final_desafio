<?php get_header() ?>

<div class="container">
	<div class="row">
		<div class="descripcion">
			<div class="descripcion__titulo col-lg-12">
				<h2 class="descripcion__titulo--fuente">Tendencia
				</h2>
			</div>
				<div class="descripcion__intro col-lg-6">
					<p class="descripcion__intro--parrafo">Mantenerce al tanto de lo que ocurre en el mundo comunicacional y artistico es un desafio en estos tiempos, la velocidad de pensamiento hace que nuestra realidad cambie constantemente. Por tanto  <span class="descripcion__intro--span">ADmira</span> como medio se esfuerza para que estes al tanto del acontecer artistico.</p>
				</div>
			</div>
		</div>
	</div>





<div class="container noticias">
	<div class="row">
	<?php
		$arg = array(
			'post_type'		 => 'tendencias',
			'posts_per_page' => 6,
			'paged'			 => $paged
		);

		$get_arg = new WP_Query( $arg );

		while ( $get_arg->have_posts() ) {
			$get_arg->the_post();
	?>
		<div class="noticia col-lg-4">
			<a href="<?php the_permalink() ?>">
				<div class="noticia__elementos">
					<h3 class="noticia__title"><?php the_title() ?></h3>
					<?php the_post_thumbnail( 'noticias', array('class' => 'img-thumbnail')) ?>
					<div class="noticia__detail">
						<p class="noticia__text"><?php the_excerpt() ?></p>
					</div>
				</div>
			</a>
		</div>
		<?php } wp_reset_postdata();
	?>
	</div>
</div>

			

<?php get_footer() ?>