<?php
/**
 * Template Name: Blog
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

			<?php endwhile; ?>	

					
				<section id="page-content" class="box">
					<div  class="container">

					  <div class="row">
					    <div class="nine columns">


							<?php 
							    query_posts(array( 
							        'post_type' => 'post',
							        'showposts' => 10 
							    ) );  
							?>
							<?php while (have_posts()) : the_post(); ?>


								  <div class="item-post-list row">
								    <div class="two columns">
								    	<div class="date">
								    		<span class="daynumber"><?php the_time('j', '<span>', '</span>'); ?></span>
								    		<span class="month"><?php the_time('M', '<span>', '</span>'); ?></span>
								    	</div>
								    </div>
								    <div class="ten columns">

										<?php if( get_field('video') ): ?>
											<div class="video-container"><?php the_field('video'); ?></div>
										<?php endif; ?>

										<h5><?php the_title(); ?></h5>
										<p><?php echo the_excerpt(); ?></p>
										<a class="readmore" href="<?php the_permalink() ?>">Read More</a>
										
										<?php echo do_shortcode('[ssba url="' . get_permalink($post->ID) . '" title="' . get_the_title($post->ID) . '"]'); ?>
								    </div>
								  </div>		

								<hr>

							<?php endwhile;?>

					    </div>
					    <div class="three columns">
					   	 <?php get_sidebar(); ?>
					    </div>
					  </div>

					</div>
				</section>	
					

		</div>

<?php get_footer(); ?>