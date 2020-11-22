<?php
/**
 * Template Name: Showreel
 *
 */
get_header(); ?>

		<div id="content" class="clearfix">
			<?php while ( have_posts() ) : the_post(); ?>
					
				<section id="title-content">
					<div  class="container">
						<h1 class="page-title"><?php the_title(); ?></h1>
						<hr>
					</div>
				</section>


					
				<section id="page-content" class="box">
					<div  class="container">

						  <div class="row">

							<?php if( get_field('video') ): ?>
								<div class="video-container"><?php the_field('video'); ?></div>
							<?php endif; ?>

								<?php if( get_field('subtitle') ): ?>
									<h3><?php the_field('subtitle'); ?></h3>
								<?php endif; ?>

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