

<?php get_header(); ?>



<div class="container">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div>
		<h2><?php the_title(); ?></h2>

			<?php the_content(); ?>
	</div>


	<?php endwhile; ?>

	<?php endif; ?>

</div>

 <?php get_footer(); ?>