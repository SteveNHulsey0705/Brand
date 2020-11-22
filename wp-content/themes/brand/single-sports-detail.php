<?php get_header(); ?>

		<div id="content" class="clearfix">
			<?php while ( have_posts() ) : the_post(); ?>
					
				<section id="title-content">
					<div  class="container">
						<h1 class="page-title">SPORTS</h1>
						<hr>
					</div>
				</section>

					
				<section id="page-content" class="box" style="background:url('<?php the_field("background"); ?>')" >
					<div  class="container">

						  <div class="row">
						    <div class="six columns">

								<?php if( get_field('video_code') ): ?>
									<div class="videoWrapper"><?php the_field('video_code'); ?></div>
								<?php endif; ?>

								<?php if( get_field('extra_image') ): ?>
									<img class="extraimage" src="<?php the_field('extra_image'); ?>">
								<?php endif; ?>

						    </div>
						    <div class="five columns offset-by-one">

									<h3><?php the_title(); ?></h3>

								<?php the_content(); ?>
								
								<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','themify').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
								
								<?php // edit_post_link(__('Edit','themify'), '[', ']'); ?>

						    </div>
						  </div>

					</div>
				</section>	
					

			<?php endwhile; ?>	
		</div>

<?php get_footer(); ?>