



<?php get_header(); ?>

   <main>
   	<div class="container">
      
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="row">
			<div class="titl">
         <h2> <?php the_title(); ?></h2>
         	</div>
         <div class="entry">
            <?php the_content(); ?>
         </div>
			
 		</div>

 		<div class="zurück">
        <a href="http://samir.alphatier.de/category/blog/"> zurück </a>
        </div>
     	


      <?php endwhile; endif; ?>
	</div>       
   </main>
    
 
