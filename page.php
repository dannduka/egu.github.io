<?php get_header(); ?>	
<section id="content">
	<div class="container">
	
		<div class="single_left">
			<div class="single_post_cont">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				
					
					<div class="single_inside_content">
					
						<?php the_content(); ?>
						
					</div><!--//single_inside_content-->
					
					<br /><br />
					
														
					
					<!--<div class="next_prev_cont">
						
						<div class="right">
							 
						<div class="clear"></div>
					</div>--><!--//next_prev_cont-->							
					
				<?php endwhile; else: ?>
				
					<h3>Sorry, no posts matched your criteria.</h3>
				<?php endif; ?>            					
			
			</div><!--//single_post_cont-->
		
		</div><!--//single_left-->
		
		
		
		<div class="clear"></div>
		
	</div><!--//container-->
</section><!--//content-->
<?php get_footer(); ?> 		