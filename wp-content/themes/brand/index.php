<?php get_header(); ?>		

	<div id="content" class="clearfix">
		
		<?php if (have_posts()) : ?>
		
			<?php while (have_posts()) : the_post(); ?>
	


	
			<?php endwhile; ?>
							
		
		<?php else : ?>
		
		<?php endif; ?>			
	
	</div>
	<!-- /#content -->


<?php get_footer(); ?>