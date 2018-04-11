<?php get_header(); ?>


<div class="container content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			


			<div class="row">
				<div class="col-md-5">
					


					<?php if (has_post_thumbnail())
						echo '<div class="category-thumbnail">'.get_the_post_thumbnail(null,'thumbnail').'</div>'
					?>	
				</div>

				<div class="col-md-7">
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>


						<?php the_excerpt();?>

						<div class="weiterlesen">
						<a href="<?php the_permalink();?>"> weiterlesen</a>
						</div>
					

				</div>

			</div>
					<hr>
				



	<?php endwhile; endif; ?>



</div>
	
<?php get_footer(); ?>