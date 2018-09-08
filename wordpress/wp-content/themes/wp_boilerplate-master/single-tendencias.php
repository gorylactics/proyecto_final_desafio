<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

<div class="container">
	<div class="row">
		<div class="formato">
			<div class="formato__titulo">
				<h2 class="formato__titulo--configuracion"><?php the_title() ?></h2>
			</div>
			<div class="formato__imagen">
				<?php the_post_thumbnail('large', array('class' => 'formato__imagen--tamaño')) ?>
			</div>
			<div class="formato__noticia">
				<?php the_content() ?>
			</div>
		</div>
	</div>
</div>
	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?#php get_sidebar() ?>
<?php get_footer() ?>