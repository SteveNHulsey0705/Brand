<?php get_header(); ?>

<div id="content" class="clearfix">
	<?php while ( have_posts() ) : the_post(); ?>
			
		<section id="title-content">
			<div  class="container">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<hr>
			</div>
		</section>

			
		<section id="page-content">
			<div  class="container box">
					<?php the_content(); ?>
					
					<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','themify').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					
					<?php edit_post_link(__('Edit','themify'), '[', ']'); ?>
			</div>
		</section>	
			

	<?php endwhile; ?>	
</div>
<?php get_footer(); ?>