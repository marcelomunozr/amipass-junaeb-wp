<?php get_header('interior'); ?>
<?php the_post(); ?>
<section class="interior-saludable relative">
	<div class="container">
		<div class="text-center">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="contenedor row">
			<div class="col-md-6 text-center">
				<div class="relative">
					<div class="img-borders">
					</div>
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('full', array('class' => 'img-responsive img-center'));
					}else{ ?>
						<img src="http://placehold.it/340x516" alt="<?php the_title(); ?>" class="img-responsive img-center">
					<?php } ?>
				</div>
			</div>
			<div class="col-md-6">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<?php 
		$prev = get_previous_post(); 
		$next = get_next_post();
	?>
	<?php if ($prev!=""): ?>
		<a href="<?php echo $prev->guid; ?>"><span class="nigga-prev"></span></a>		
	<?php endif ?>
	<?php if ($next!=""): ?>
		<a href="<?php echo get_permalink( $next->ID ); ?>"><span class="nigga-next"></span></a>	
	<?php endif ?>
</section>
<?php get_footer(); ?>